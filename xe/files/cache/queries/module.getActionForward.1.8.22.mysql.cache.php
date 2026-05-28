<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act52_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act52_argument'}->createConditionValue();
if(!${'act52_argument'}->isValid()) return ${'act52_argument'}->getErrorMessage();
} else
${'act52_argument'} = NULL;if(${'act52_argument'} !== null) ${'act52_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act52_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>