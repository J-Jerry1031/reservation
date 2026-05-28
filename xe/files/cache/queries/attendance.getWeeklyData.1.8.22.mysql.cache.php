<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWeeklyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday12_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday12_argument'}->createConditionValue();
if(!${'monday12_argument'}->isValid()) return ${'monday12_argument'}->getErrorMessage();
} else
${'monday12_argument'} = NULL;if(${'monday12_argument'} !== null) ${'monday12_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday13_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday13_argument'}->createConditionValue();
if(!${'sunday13_argument'}->isValid()) return ${'sunday13_argument'}->getErrorMessage();
} else
${'sunday13_argument'} = NULL;if(${'sunday13_argument'} !== null) ${'sunday13_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl14_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl14_argument'}->createConditionValue();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
} else
${'member_srl14_argument'} = NULL;if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`weekly`', '`weekly`')
,new SelectExpression('`weekly_point`', '`weekly_point`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monday12_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday13_argument,"less", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>