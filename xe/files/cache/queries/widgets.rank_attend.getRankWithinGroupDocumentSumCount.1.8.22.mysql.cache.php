<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupDocumentSumCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl30_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl30_argument'}->createConditionValue();
if(!${'selected_group_srl30_argument'}->isValid()) return ${'selected_group_srl30_argument'}->getErrorMessage();
} else
${'selected_group_srl30_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl31_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl31_argument'}->createConditionValue();
if(!${'member_srl31_argument'}->isValid()) return ${'member_srl31_argument'}->getErrorMessage();
} else
${'member_srl31_argument'} = NULL;if(${'member_srl31_argument'} !== null) ${'member_srl31_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl32_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl32_argument'}->checkFilter('number');
${'module_srl32_argument'}->createConditionValue();
if(!${'module_srl32_argument'}->isValid()) return ${'module_srl32_argument'}->getErrorMessage();
} else
${'module_srl32_argument'} = NULL;if(${'module_srl32_argument'} !== null) ${'module_srl32_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList33_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList33_argument'}->createConditionValue();
if(!${'statusList33_argument'}->isValid()) return ${'statusList33_argument'}->getErrorMessage();
} else
${'statusList33_argument'} = NULL;if(${'statusList33_argument'} !== null) ${'statusList33_argument'}->setColumnType('varchar');
if(isset($args->is_admin)) {
${'is_admin34_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin34_argument'}->createConditionValue();
if(!${'is_admin34_argument'}->isValid()) return ${'is_admin34_argument'}->getErrorMessage();
} else
${'is_admin34_argument'} = NULL;if(${'is_admin34_argument'} !== null) ${'is_admin34_argument'}->setColumnType('char');

${'list_count37_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count37_argument'}->ensureDefaultValue('5');
if(!${'list_count37_argument'}->isValid()) return ${'list_count37_argument'}->getErrorMessage();

${'sort_index36_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index36_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index36_argument'}->isValid()) return ${'sort_index36_argument'}->getErrorMessage();

${'sort_index35_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index35_argument'}->ensureDefaultValue('count');
if(!${'sort_index35_argument'}->isValid()) return ${'sort_index35_argument'}->getErrorMessage();

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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl30_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl31_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl32_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList33_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin34_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index35_argument'}, "desc")
,new OrderByColumn(${'sort_index36_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count37_argument'}));
return $query; ?>