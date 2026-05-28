<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTotal");
$query->setAction("update");
$query->setPriority("");

${'regdate28_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate28_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate28_argument'}->checkNotNull();
if(!${'regdate28_argument'}->isValid()) return ${'regdate28_argument'}->getErrorMessage();
if(${'regdate28_argument'} !== null) ${'regdate28_argument'}->setColumnType('varchar');
if(isset($args->total)) {
${'total29_argument'} = new Argument('total', $args->{'total'});
if(!${'total29_argument'}->isValid()) return ${'total29_argument'}->getErrorMessage();
} else
${'total29_argument'} = NULL;if(${'total29_argument'} !== null) ${'total29_argument'}->setColumnType('number');
if(isset($args->total_point)) {
${'total_point30_argument'} = new Argument('total_point', $args->{'total_point'});
if(!${'total_point30_argument'}->isValid()) return ${'total_point30_argument'}->getErrorMessage();
} else
${'total_point30_argument'} = NULL;if(${'total_point30_argument'} !== null) ${'total_point30_argument'}->setColumnType('number');
if(isset($args->continuity)) {
${'continuity31_argument'} = new Argument('continuity', $args->{'continuity'});
if(!${'continuity31_argument'}->isValid()) return ${'continuity31_argument'}->getErrorMessage();
} else
${'continuity31_argument'} = NULL;if(${'continuity31_argument'} !== null) ${'continuity31_argument'}->setColumnType('number');
if(isset($args->continuity_point)) {
${'continuity_point32_argument'} = new Argument('continuity_point', $args->{'continuity_point'});
if(!${'continuity_point32_argument'}->isValid()) return ${'continuity_point32_argument'}->getErrorMessage();
} else
${'continuity_point32_argument'} = NULL;if(${'continuity_point32_argument'} !== null) ${'continuity_point32_argument'}->setColumnType('number');

${'member_srl33_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl33_argument'}->checkNotNull();
${'member_srl33_argument'}->createConditionValue();
if(!${'member_srl33_argument'}->isValid()) return ${'member_srl33_argument'}->getErrorMessage();
if(${'member_srl33_argument'} !== null) ${'member_srl33_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate28_argument'})
,new UpdateExpression('`total`', ${'total29_argument'})
,new UpdateExpression('`total_point`', ${'total_point30_argument'})
,new UpdateExpression('`continuity`', ${'continuity31_argument'})
,new UpdateExpression('`continuity_point`', ${'continuity_point32_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl33_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>