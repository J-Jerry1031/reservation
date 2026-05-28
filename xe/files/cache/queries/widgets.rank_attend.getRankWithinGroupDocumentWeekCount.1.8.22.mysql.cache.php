<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupDocumentWeekCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl3_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl3_argument'}->createConditionValue();
if(!${'selected_group_srl3_argument'}->isValid()) return ${'selected_group_srl3_argument'}->getErrorMessage();
} else
${'selected_group_srl3_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
} else
${'member_srl4_argument'} = NULL;if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');
if(isset($args->strWeek)) {
${'strWeek5_argument'} = new ConditionArgument('strWeek', $args->strWeek, 'more');
${'strWeek5_argument'}->createConditionValue();
if(!${'strWeek5_argument'}->isValid()) return ${'strWeek5_argument'}->getErrorMessage();
} else
${'strWeek5_argument'} = NULL;if(${'strWeek5_argument'} !== null) ${'strWeek5_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
} else
${'module_srl6_argument'} = NULL;if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList7_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList7_argument'}->createConditionValue();
if(!${'statusList7_argument'}->isValid()) return ${'statusList7_argument'}->getErrorMessage();
} else
${'statusList7_argument'} = NULL;if(${'statusList7_argument'} !== null) ${'statusList7_argument'}->setColumnType('varchar');
if(isset($args->is_admin)) {
${'is_admin8_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin8_argument'}->createConditionValue();
if(!${'is_admin8_argument'}->isValid()) return ${'is_admin8_argument'}->getErrorMessage();
} else
${'is_admin8_argument'} = NULL;if(${'is_admin8_argument'} !== null) ${'is_admin8_argument'}->setColumnType('char');

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('5');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

${'sort_index9_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index9_argument'}->ensureDefaultValue('count');
if(!${'sort_index9_argument'}->isValid()) return ${'sort_index9_argument'}->getErrorMessage();

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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl3_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl4_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$strWeek5_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl6_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList7_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin8_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index9_argument'}, "desc")
,new OrderByColumn(${'sort_index10_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count11_argument'}));
return $query; ?>