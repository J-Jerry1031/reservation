<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getHostStatus");
$query->setAction("select");
$query->setPriority("");

${'host18_argument'} = new ConditionArgument('host', $args->host, 'equal');
${'host18_argument'}->checkNotNull();
${'host18_argument'}->createConditionValue();
if(!${'host18_argument'}->isValid()) return ${'host18_argument'}->getErrorMessage();
if(${'host18_argument'} !== null) ${'host18_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_referer_statistics`', '`referer_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`host`',$host18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>