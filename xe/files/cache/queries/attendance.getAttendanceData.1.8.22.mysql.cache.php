<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAttendanceData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_date)) {
${'selected_date1_argument'} = new ConditionArgument('selected_date', $args->selected_date, 'like_prefix');
${'selected_date1_argument'}->createConditionValue();
if(!${'selected_date1_argument'}->isValid()) return ${'selected_date1_argument'}->getErrorMessage();
} else
${'selected_date1_argument'} = NULL;if(${'selected_date1_argument'} !== null) ${'selected_date1_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$selected_date1_argument,"like_prefix")
,new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>