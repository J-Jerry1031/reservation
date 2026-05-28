<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankActivityVoteCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl30_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl30_argument'}->createConditionValue();
if(!${'selected_group_srl30_argument'}->isValid()) return ${'selected_group_srl30_argument'}->getErrorMessage();
} else
${'selected_group_srl30_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl31_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl31_argument'}->createConditionValue();
if(!${'member_srl31_argument'}->isValid()) return ${'member_srl31_argument'}->getErrorMessage();
} else
${'member_srl31_argument'} = NULL;if(${'member_srl31_argument'} !== null) ${'member_srl31_argument'}->setColumnType('number');
if(isset($args->stDate)) {
${'stDate32_argument'} = new ConditionArgument('stDate', $args->stDate, 'more');
${'stDate32_argument'}->createConditionValue();
if(!${'stDate32_argument'}->isValid()) return ${'stDate32_argument'}->getErrorMessage();
} else
${'stDate32_argument'} = NULL;if(${'stDate32_argument'} !== null) ${'stDate32_argument'}->setColumnType('date');
if(isset($args->edDate)) {
${'edDate33_argument'} = new ConditionArgument('edDate', $args->edDate, 'less');
${'edDate33_argument'}->createConditionValue();
if(!${'edDate33_argument'}->isValid()) return ${'edDate33_argument'}->getErrorMessage();
} else
${'edDate33_argument'} = NULL;if(${'edDate33_argument'} !== null) ${'edDate33_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl34_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl34_argument'}->checkFilter('number');
${'module_srl34_argument'}->createConditionValue();
if(!${'module_srl34_argument'}->isValid()) return ${'module_srl34_argument'}->getErrorMessage();
} else
${'module_srl34_argument'} = NULL;if(${'module_srl34_argument'} !== null) ${'module_srl34_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin35_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin35_argument'}->createConditionValue();
if(!${'is_admin35_argument'}->isValid()) return ${'is_admin35_argument'}->getErrorMessage();
} else
${'is_admin35_argument'} = NULL;if(${'is_admin35_argument'} !== null) ${'is_admin35_argument'}->setColumnType('char');

${'list_count38_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count38_argument'}->ensureDefaultValue('5');
if(!${'list_count38_argument'}->isValid()) return ${'list_count38_argument'}->getErrorMessage();

${'sort_index37_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index37_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index37_argument'}->isValid()) return ${'sort_index37_argument'}->getErrorMessage();

${'sort_index36_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index36_argument'}->ensureDefaultValue('count');
if(!${'sort_index36_argument'}->isValid()) return ${'sort_index36_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`member_srl`', '`member_srl`')
,new SelectExpression('`documents`.`nick_name`', '`nick_name`')
,new SelectExpression('sum(`documents`.`voted_count`)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_documents`', '`documents`')
,new Subquery('`member_group`', array(
new SelectExpression('`group_srl`')
,new SelectExpression('`member_srl`')
), 
array(
new Table('`xe_member_group_member`', '`member_group_member`')
),
array(),
array(
'`member_srl`' ),
array(),
null
)
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`member_group`.`member_srl`',"equal")
,new ConditionWithoutArgument('`member`.`member_srl`','`documents`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl30_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl31_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$stDate32_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$edDate33_argument,"less", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl34_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin35_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index36_argument'}, "desc")
,new OrderByColumn(${'sort_index37_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count38_argument'}));
return $query; ?>