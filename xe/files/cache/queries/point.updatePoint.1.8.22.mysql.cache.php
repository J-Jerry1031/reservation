<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point3_argument'} = new Argument('point', $args->{'point'});
if(!${'point3_argument'}->isValid()) return ${'point3_argument'}->getErrorMessage();
} else
${'point3_argument'} = NULL;if(${'point3_argument'} !== null) ${'point3_argument'}->setColumnType('number');

${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->checkNotNull();
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point3_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>