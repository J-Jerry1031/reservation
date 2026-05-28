<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getUAgentStatus");
$query->setAction("select");
$query->setPriority("");

${'uagent21_argument'} = new ConditionArgument('uagent', $args->uagent, 'equal');
${'uagent21_argument'}->checkNotNull();
${'uagent21_argument'}->createConditionValue();
if(!${'uagent21_argument'}->isValid()) return ${'uagent21_argument'}->getErrorMessage();
if(${'uagent21_argument'} !== null) ${'uagent21_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_referer_uagent_statistics`', '`referer_uagent_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`uagent`',$uagent21_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>