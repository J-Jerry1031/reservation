<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWeeklyAttendance");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday55_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday55_argument'}->createConditionValue();
if(!${'monday55_argument'}->isValid()) return ${'monday55_argument'}->getErrorMessage();
} else
${'monday55_argument'} = NULL;if(${'monday55_argument'} !== null) ${'monday55_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday56_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday56_argument'}->createConditionValue();
if(!${'sunday56_argument'}->isValid()) return ${'sunday56_argument'}->getErrorMessage();
} else
${'sunday56_argument'} = NULL;if(${'sunday56_argument'} !== null) ${'sunday56_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl57_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl57_argument'}->createConditionValue();
if(!${'member_srl57_argument'}->isValid()) return ${'member_srl57_argument'}->getErrorMessage();
} else
${'member_srl57_argument'} = NULL;if(${'member_srl57_argument'} !== null) ${'member_srl57_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`weekly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monday55_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday56_argument,"less", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl57_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>