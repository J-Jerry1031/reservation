<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAllAttendanceMonthlyData");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
} else
${'member_srl7_argument'} = NULL;if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>