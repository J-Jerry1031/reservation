<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankActivityReadCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl21_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl21_argument'}->createConditionValue();
if(!${'selected_group_srl21_argument'}->isValid()) return ${'selected_group_srl21_argument'}->getErrorMessage();
} else
${'selected_group_srl21_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl22_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl22_argument'}->createConditionValue();
if(!${'member_srl22_argument'}->isValid()) return ${'member_srl22_argument'}->getErrorMessage();
} else
${'member_srl22_argument'} = NULL;if(${'member_srl22_argument'} !== null) ${'member_srl22_argument'}->setColumnType('number');
if(isset($args->stDate)) {
${'stDate23_argument'} = new ConditionArgument('stDate', $args->stDate, 'more');
${'stDate23_argument'}->createConditionValue();
if(!${'stDate23_argument'}->isValid()) return ${'stDate23_argument'}->getErrorMessage();
} else
${'stDate23_argument'} = NULL;if(${'stDate23_argument'} !== null) ${'stDate23_argument'}->setColumnType('date');
if(isset($args->edDate)) {
${'edDate24_argument'} = new ConditionArgument('edDate', $args->edDate, 'less');
${'edDate24_argument'}->createConditionValue();
if(!${'edDate24_argument'}->isValid()) return ${'edDate24_argument'}->getErrorMessage();
} else
${'edDate24_argument'} = NULL;if(${'edDate24_argument'} !== null) ${'edDate24_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl25_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl25_argument'}->checkFilter('number');
${'module_srl25_argument'}->createConditionValue();
if(!${'module_srl25_argument'}->isValid()) return ${'module_srl25_argument'}->getErrorMessage();
} else
${'module_srl25_argument'} = NULL;if(${'module_srl25_argument'} !== null) ${'module_srl25_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin26_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin26_argument'}->createConditionValue();
if(!${'is_admin26_argument'}->isValid()) return ${'is_admin26_argument'}->getErrorMessage();
} else
${'is_admin26_argument'} = NULL;if(${'is_admin26_argument'} !== null) ${'is_admin26_argument'}->setColumnType('char');

${'list_count29_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count29_argument'}->ensureDefaultValue('5');
if(!${'list_count29_argument'}->isValid()) return ${'list_count29_argument'}->getErrorMessage();

${'sort_index28_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index28_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index28_argument'}->isValid()) return ${'sort_index28_argument'}->getErrorMessage();

${'sort_index27_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index27_argument'}->ensureDefaultValue('count');
if(!${'sort_index27_argument'}->isValid()) return ${'sort_index27_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`member_srl`', '`member_srl`')
,new SelectExpression('`documents`.`nick_name`', '`nick_name`')
,new SelectExpression('sum(`documents`.`readed_count`)', '`count`')
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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl21_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl22_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$stDate23_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$edDate24_argument,"less", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl25_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin26_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index27_argument'}, "desc")
,new OrderByColumn(${'sort_index28_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count29_argument'}));
return $query; ?>