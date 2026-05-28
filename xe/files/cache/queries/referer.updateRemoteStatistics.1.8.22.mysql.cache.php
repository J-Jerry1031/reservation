<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateRemoteStatistics");
$query->setAction("update");
$query->setPriority("");

${'count16_argument'} = new Argument('count', $args->{'count'});
${'count16_argument'}->setColumnOperation('+');
${'count16_argument'}->ensureDefaultValue(1);
if(!${'count16_argument'}->isValid()) return ${'count16_argument'}->getErrorMessage();
if(${'count16_argument'} !== null) ${'count16_argument'}->setColumnType('number');

${'remote17_argument'} = new ConditionArgument('remote', $args->remote, 'equal');
${'remote17_argument'}->checkNotNull();
${'remote17_argument'}->createConditionValue();
if(!${'remote17_argument'}->isValid()) return ${'remote17_argument'}->getErrorMessage();
if(${'remote17_argument'} !== null) ${'remote17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count16_argument'})
));
$query->setTables(array(
new Table('`xe_referer_remote_statistics`', '`referer_remote_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`remote`',$remote17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>