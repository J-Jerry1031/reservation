<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankActivityDocCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl12_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl12_argument'}->createConditionValue();
if(!${'selected_group_srl12_argument'}->isValid()) return ${'selected_group_srl12_argument'}->getErrorMessage();
} else
${'selected_group_srl12_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');
if(isset($args->stDate)) {
${'stDate14_argument'} = new ConditionArgument('stDate', $args->stDate, 'more');
${'stDate14_argument'}->createConditionValue();
if(!${'stDate14_argument'}->isValid()) return ${'stDate14_argument'}->getErrorMessage();
} else
${'stDate14_argument'} = NULL;if(${'stDate14_argument'} !== null) ${'stDate14_argument'}->setColumnType('date');
if(isset($args->edDate)) {
${'edDate15_argument'} = new ConditionArgument('edDate', $args->edDate, 'less');
${'edDate15_argument'}->createConditionValue();
if(!${'edDate15_argument'}->isValid()) return ${'edDate15_argument'}->getErrorMessage();
} else
${'edDate15_argument'} = NULL;if(${'edDate15_argument'} !== null) ${'edDate15_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl16_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl16_argument'}->checkFilter('number');
${'module_srl16_argument'}->createConditionValue();
if(!${'module_srl16_argument'}->isValid()) return ${'module_srl16_argument'}->getErrorMessage();
} else
${'module_srl16_argument'} = NULL;if(${'module_srl16_argument'} !== null) ${'module_srl16_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin17_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin17_argument'}->createConditionValue();
if(!${'is_admin17_argument'}->isValid()) return ${'is_admin17_argument'}->getErrorMessage();
} else
${'is_admin17_argument'} = NULL;if(${'is_admin17_argument'} !== null) ${'is_admin17_argument'}->setColumnType('char');

${'list_count20_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count20_argument'}->ensureDefaultValue('5');
if(!${'list_count20_argument'}->isValid()) return ${'list_count20_argument'}->getErrorMessage();

${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index19_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('count');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`member_srl`', '`member_srl`')
,new SelectExpression('`documents`.`nick_name`', '`nick_name`')
,new SelectExpression('count(`documents`.`document_srl`)', '`count`')
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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl12_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl13_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$stDate14_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$edDate15_argument,"less", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl16_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin17_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index18_argument'}, "desc")
,new OrderByColumn(${'sort_index19_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count20_argument'}));
return $query; ?>