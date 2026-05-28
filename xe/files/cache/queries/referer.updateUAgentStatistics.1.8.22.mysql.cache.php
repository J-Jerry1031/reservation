<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateUAgentStatistics");
$query->setAction("update");
$query->setPriority("");

${'count22_argument'} = new Argument('count', $args->{'count'});
${'count22_argument'}->setColumnOperation('+');
${'count22_argument'}->ensureDefaultValue(1);
if(!${'count22_argument'}->isValid()) return ${'count22_argument'}->getErrorMessage();
if(${'count22_argument'} !== null) ${'count22_argument'}->setColumnType('number');

${'uagent23_argument'} = new ConditionArgument('uagent', $args->uagent, 'equal');
${'uagent23_argument'}->checkNotNull();
${'uagent23_argument'}->createConditionValue();
if(!${'uagent23_argument'}->isValid()) return ${'uagent23_argument'}->getErrorMessage();
if(${'uagent23_argument'} !== null) ${'uagent23_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count22_argument'})
));
$query->setTables(array(
new Table('`xe_referer_uagent_statistics`', '`referer_uagent_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`uagent`',$uagent23_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>