<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupDocumentYearCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl21_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl21_argument'}->createConditionValue();
if(!${'selected_group_srl21_argument'}->isValid()) return ${'selected_group_srl21_argument'}->getErrorMessage();
} else
${'selected_group_srl21_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl22_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl22_argument'}->createConditionValue();
if(!${'member_srl22_argument'}->isValid()) return ${'member_srl22_argument'}->getErrorMessage();
} else
${'member_srl22_argument'} = NULL;if(${'member_srl22_argument'} !== null) ${'member_srl22_argument'}->setColumnType('number');
if(isset($args->strYear)) {
${'strYear23_argument'} = new ConditionArgument('strYear', $args->strYear, 'more');
${'strYear23_argument'}->createConditionValue();
if(!${'strYear23_argument'}->isValid()) return ${'strYear23_argument'}->getErrorMessage();
} else
${'strYear23_argument'} = NULL;if(${'strYear23_argument'} !== null) ${'strYear23_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl24_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl24_argument'}->checkFilter('number');
${'module_srl24_argument'}->createConditionValue();
if(!${'module_srl24_argument'}->isValid()) return ${'module_srl24_argument'}->getErrorMessage();
} else
${'module_srl24_argument'} = NULL;if(${'module_srl24_argument'} !== null) ${'module_srl24_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList25_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList25_argument'}->createConditionValue();
if(!${'statusList25_argument'}->isValid()) return ${'statusList25_argument'}->getErrorMessage();
} else
${'statusList25_argument'} = NULL;if(${'statusList25_argument'} !== null) ${'statusList25_argument'}->setColumnType('varchar');
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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl21_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl22_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$strYear23_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl24_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList25_argument,"in", 'and')
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