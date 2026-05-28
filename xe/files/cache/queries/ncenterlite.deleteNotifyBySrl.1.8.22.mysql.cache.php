<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteNotifyBySrl");
$query->setAction("delete");
$query->setPriority("");

${'srl1_argument'} = new ConditionArgument('srl', $args->srl, 'equal');
${'srl1_argument'}->checkFilter('number');
${'srl1_argument'}->checkNotNull();
${'srl1_argument'}->createConditionValue();
if(!${'srl1_argument'}->isValid()) return ${'srl1_argument'}->getErrorMessage();
if(${'srl1_argument'} !== null) ${'srl1_argument'}->setColumnType('number');

${'srl2_argument'} = new ConditionArgument('srl', $args->srl, 'equal');
${'srl2_argument'}->checkFilter('number');
${'srl2_argument'}->checkNotNull();
${'srl2_argument'}->createConditionValue();
if(!${'srl2_argument'}->isValid()) return ${'srl2_argument'}->getErrorMessage();
if(${'srl2_argument'} !== null) ${'srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_ncenterlite_notify`', '`ncenterlite_notify`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`srl`',$srl1_argument,"equal")
,new ConditionWithArgument('`target_srl`',$srl2_argument,"equal", 'or')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>