<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAllAttendanceData");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');
if(isset($args->selected_date)) {
${'selected_date4_argument'} = new ConditionArgument('selected_date', $args->selected_date, 'like_prefix');
${'selected_date4_argument'}->createConditionValue();
if(!${'selected_date4_argument'}->isValid()) return ${'selected_date4_argument'}->getErrorMessage();
} else
${'selected_date4_argument'} = NULL;if(${'selected_date4_argument'} !== null) ${'selected_date4_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal")
,new ConditionWithArgument('`regdate`',$selected_date4_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>