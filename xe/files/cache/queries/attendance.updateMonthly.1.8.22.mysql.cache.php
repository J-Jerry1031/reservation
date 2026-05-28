<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMonthly");
$query->setAction("update");
$query->setPriority("");

${'regdate47_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate47_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate47_argument'}->checkNotNull();
if(!${'regdate47_argument'}->isValid()) return ${'regdate47_argument'}->getErrorMessage();
if(${'regdate47_argument'} !== null) ${'regdate47_argument'}->setColumnType('varchar');
if(isset($args->monthly)) {
${'monthly48_argument'} = new Argument('monthly', $args->{'monthly'});
if(!${'monthly48_argument'}->isValid()) return ${'monthly48_argument'}->getErrorMessage();
} else
${'monthly48_argument'} = NULL;if(${'monthly48_argument'} !== null) ${'monthly48_argument'}->setColumnType('number');
if(isset($args->monthly_point)) {
${'monthly_point49_argument'} = new Argument('monthly_point', $args->{'monthly_point'});
if(!${'monthly_point49_argument'}->isValid()) return ${'monthly_point49_argument'}->getErrorMessage();
} else
${'monthly_point49_argument'} = NULL;if(${'monthly_point49_argument'} !== null) ${'monthly_point49_argument'}->setColumnType('number');

${'member_srl50_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl50_argument'}->ensureDefaultValue('admin');
${'member_srl50_argument'}->checkNotNull();
${'member_srl50_argument'}->createConditionValue();
if(!${'member_srl50_argument'}->isValid()) return ${'member_srl50_argument'}->getErrorMessage();
if(${'member_srl50_argument'} !== null) ${'member_srl50_argument'}->setColumnType('number');

${'month51_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month51_argument'}->checkNotNull();
${'month51_argument'}->createConditionValue();
if(!${'month51_argument'}->isValid()) return ${'month51_argument'}->getErrorMessage();
if(${'month51_argument'} !== null) ${'month51_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate47_argument'})
,new UpdateExpression('`monthly`', ${'monthly48_argument'})
,new UpdateExpression('`monthly_point`', ${'monthly_point49_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl50_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$month51_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>