<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMonthlyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monthly)) {
${'monthly8_argument'} = new ConditionArgument('monthly', $args->monthly, 'like_prefix');
${'monthly8_argument'}->createConditionValue();
if(!${'monthly8_argument'}->isValid()) return ${'monthly8_argument'}->getErrorMessage();
} else
${'monthly8_argument'} = NULL;if(${'monthly8_argument'} !== null) ${'monthly8_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
} else
${'member_srl9_argument'} = NULL;if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`monthly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monthly8_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>