<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`total_point`', '`total_point`')
,new SelectExpression('`total`', '`total`')
,new SelectExpression('`continuity_point`', '`continuity_point`')
,new SelectExpression('`continuity`', '`continuity`')
,new SelectExpression('`regdate`', '`regdate`')
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>