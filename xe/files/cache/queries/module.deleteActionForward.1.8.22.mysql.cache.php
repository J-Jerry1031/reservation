<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteActionForward");
$query->setAction("delete");
$query->setPriority("");

${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->checkNotNull();
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');

${'type2_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type2_argument'}->checkNotNull();
${'type2_argument'}->createConditionValue();
if(!${'type2_argument'}->isValid()) return ${'type2_argument'}->getErrorMessage();
if(${'type2_argument'} !== null) ${'type2_argument'}->setColumnType('varchar');

${'act3_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act3_argument'}->checkNotNull();
${'act3_argument'}->createConditionValue();
if(!${'act3_argument'}->isValid()) return ${'act3_argument'}->getErrorMessage();
if(${'act3_argument'} !== null) ${'act3_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")
,new ConditionWithArgument('`type`',$type2_argument,"equal", 'and')
,new ConditionWithArgument('`act`',$act3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>