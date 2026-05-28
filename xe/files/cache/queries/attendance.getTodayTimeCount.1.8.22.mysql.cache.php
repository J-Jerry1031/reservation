<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTodayTimeCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->today_time)) {
${'today_time1_argument'} = new ConditionArgument('today_time', $args->today_time, 'like_prefix');
${'today_time1_argument'}->createConditionValue();
if(!${'today_time1_argument'}->isValid()) return ${'today_time1_argument'}->getErrorMessage();
} else
${'today_time1_argument'} = NULL;if(${'today_time1_argument'} !== null) ${'today_time1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`attendance`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`attendance`.`regdate`',$today_time1_argument,"like_prefix")
,new ConditionWithoutArgument('`attendance`.`member_srl`','`member`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>