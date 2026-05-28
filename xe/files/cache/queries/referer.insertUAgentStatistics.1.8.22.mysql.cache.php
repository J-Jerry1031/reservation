<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertUAgentStatistics");
$query->setAction("insert");
$query->setPriority("");

${'uagent1_argument'} = new Argument('uagent', $args->{'uagent'});
${'uagent1_argument'}->checkNotNull();
if(!${'uagent1_argument'}->isValid()) return ${'uagent1_argument'}->getErrorMessage();
if(${'uagent1_argument'} !== null) ${'uagent1_argument'}->setColumnType('varchar');

${'count2_argument'} = new Argument('count', $args->{'count'});
${'count2_argument'}->ensureDefaultValue('1');
if(!${'count2_argument'}->isValid()) return ${'count2_argument'}->getErrorMessage();
if(${'count2_argument'} !== null) ${'count2_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`uagent`', ${'uagent1_argument'})
,new InsertExpression('`count`', ${'count2_argument'})
));
$query->setTables(array(
new Table('`xe_referer_uagent_statistics`', '`referer_uagent_statistics`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>