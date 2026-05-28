<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistYearly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl34_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl34_argument'}->createConditionValue();
if(!${'member_srl34_argument'}->isValid()) return ${'member_srl34_argument'}->getErrorMessage();
} else
${'member_srl34_argument'} = NULL;if(${'member_srl34_argument'} !== null) ${'member_srl34_argument'}->setColumnType('number');
if(isset($args->year)) {
${'year35_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year35_argument'}->createConditionValue();
if(!${'year35_argument'}->isValid()) return ${'year35_argument'}->getErrorMessage();
} else
${'year35_argument'} = NULL;if(${'year35_argument'} !== null) ${'year35_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl34_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$year35_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>