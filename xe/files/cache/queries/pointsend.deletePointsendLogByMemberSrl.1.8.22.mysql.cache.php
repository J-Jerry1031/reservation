<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePointsendLog");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->checkFilter('number');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl14_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl14_argument'}->checkFilter('number');
${'member_srl14_argument'}->createConditionValue();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
} else
${'member_srl14_argument'} = NULL;if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_pointsend_log`', '`pointsend_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sender_srl`',$member_srl13_argument,"equal", 'or')
,new ConditionWithArgument('`receiver_srl`',$member_srl14_argument,"equal", 'or')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>