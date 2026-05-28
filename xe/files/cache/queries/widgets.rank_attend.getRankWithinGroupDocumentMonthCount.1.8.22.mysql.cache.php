<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupDocumentMonthCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl12_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl12_argument'}->createConditionValue();
if(!${'selected_group_srl12_argument'}->isValid()) return ${'selected_group_srl12_argument'}->getErrorMessage();
} else
${'selected_group_srl12_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');
if(isset($args->strMonth)) {
${'strMonth14_argument'} = new ConditionArgument('strMonth', $args->strMonth, 'more');
${'strMonth14_argument'}->createConditionValue();
if(!${'strMonth14_argument'}->isValid()) return ${'strMonth14_argument'}->getErrorMessage();
} else
${'strMonth14_argument'} = NULL;if(${'strMonth14_argument'} !== null) ${'strMonth14_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
} else
${'module_srl15_argument'} = NULL;if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList16_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList16_argument'}->createConditionValue();
if(!${'statusList16_argument'}->isValid()) return ${'statusList16_argument'}->getErrorMessage();
} else
${'statusList16_argument'} = NULL;if(${'statusList16_argument'} !== null) ${'statusList16_argument'}->setColumnType('varchar');
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
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl13_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$strMonth14_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl15_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList16_argument,"in", 'and')
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