<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupRadedCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl44_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl44_argument'}->createConditionValue();
if(!${'selected_group_srl44_argument'}->isValid()) return ${'selected_group_srl44_argument'}->getErrorMessage();
} else
${'selected_group_srl44_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl45_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl45_argument'}->createConditionValue();
if(!${'member_srl45_argument'}->isValid()) return ${'member_srl45_argument'}->getErrorMessage();
} else
${'member_srl45_argument'} = NULL;if(${'member_srl45_argument'} !== null) ${'member_srl45_argument'}->setColumnType('number');
if(isset($args->strDate)) {
${'strDate46_argument'} = new ConditionArgument('strDate', $args->strDate, 'more');
${'strDate46_argument'}->createConditionValue();
if(!${'strDate46_argument'}->isValid()) return ${'strDate46_argument'}->getErrorMessage();
} else
${'strDate46_argument'} = NULL;if(${'strDate46_argument'} !== null) ${'strDate46_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl47_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl47_argument'}->checkFilter('number');
${'module_srl47_argument'}->createConditionValue();
if(!${'module_srl47_argument'}->isValid()) return ${'module_srl47_argument'}->getErrorMessage();
} else
${'module_srl47_argument'} = NULL;if(${'module_srl47_argument'} !== null) ${'module_srl47_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList48_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList48_argument'}->createConditionValue();
if(!${'statusList48_argument'}->isValid()) return ${'statusList48_argument'}->getErrorMessage();
} else
${'statusList48_argument'} = NULL;if(${'statusList48_argument'} !== null) ${'statusList48_argument'}->setColumnType('varchar');
if(isset($args->is_admin)) {
${'is_admin49_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin49_argument'}->createConditionValue();
if(!${'is_admin49_argument'}->isValid()) return ${'is_admin49_argument'}->getErrorMessage();
} else
${'is_admin49_argument'} = NULL;if(${'is_admin49_argument'} !== null) ${'is_admin49_argument'}->setColumnType('char');

${'list_count51_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count51_argument'}->ensureDefaultValue('5');
if(!${'list_count51_argument'}->isValid()) return ${'list_count51_argument'}->getErrorMessage();

${'sort_index50_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index50_argument'}->ensureDefaultValue('count');
if(!${'sort_index50_argument'}->isValid()) return ${'sort_index50_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`member_srl`', '`member_srl`')
,new SelectExpression('`documents`.`nick_name`')
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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl44_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl45_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$strDate46_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl47_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList48_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin49_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index50_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count51_argument'}));
return $query; ?>