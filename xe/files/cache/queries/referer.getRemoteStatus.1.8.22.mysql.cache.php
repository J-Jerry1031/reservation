<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRemoteStatus");
$query->setAction("select");
$query->setPriority("");

${'remote15_argument'} = new ConditionArgument('remote', $args->remote, 'equal');
${'remote15_argument'}->checkNotNull();
${'remote15_argument'}->createConditionValue();
if(!${'remote15_argument'}->isValid()) return ${'remote15_argument'}->getErrorMessage();
if(${'remote15_argument'} !== null) ${'remote15_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_referer_remote_statistics`', '`referer_remote_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`remote`',$remote15_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>