<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSum");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
} else
${'site_srl1_argument'} = NULL;if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->type)) {
${'type2_argument'} = new ConditionArgument('type', $args->type, 'in');
${'type2_argument'}->createConditionValue();
if(!${'type2_argument'}->isValid()) return ${'type2_argument'}->getErrorMessage();
} else
${'type2_argument'} = NULL;if(${'type2_argument'} !== null) ${'type2_argument'}->setColumnType('varchar');
if(isset($args->depth)) {
${'depth3_argument'} = new ConditionArgument('depth', $args->depth, 'equal');
${'depth3_argument'}->createConditionValue();
if(!${'depth3_argument'}->isValid()) return ${'depth3_argument'}->getErrorMessage();
} else
${'depth3_argument'} = NULL;if(${'depth3_argument'} !== null) ${'depth3_argument'}->setColumnType('number');
if(isset($args->from)) {
${'from4_argument'} = new ConditionArgument('from', $args->from, 'more');
${'from4_argument'}->createConditionValue();
if(!${'from4_argument'}->isValid()) return ${'from4_argument'}->getErrorMessage();
} else
${'from4_argument'} = NULL;if(${'from4_argument'} !== null) ${'from4_argument'}->setColumnType('date');
if(isset($args->to)) {
${'to5_argument'} = new ConditionArgument('to', $args->to, 'less');
${'to5_argument'}->createConditionValue();
if(!${'to5_argument'}->isValid()) return ${'to5_argument'}->getErrorMessage();
} else
${'to5_argument'} = NULL;if(${'to5_argument'} !== null) ${'to5_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('`type`, SUM(`count`) as `sum_count`, SUM(`bot_count`) as `sum_bot_count`, SUM(`mobile_count`) as `sum_mobile_count`')
));
$query->setTables(array(
new Table('`xe_stats`', '`stats`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type2_argument,"in", 'and')
,new ConditionWithArgument('`depth`',$depth3_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$from4_argument,"more", 'and')
,new ConditionWithArgument('`insert_time`',$to5_argument,"less", 'and')))
));
$query->setGroups(array(
'`type`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>