<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateRefererStatistics");
$query->setAction("update");
$query->setPriority("");

${'count19_argument'} = new Argument('count', $args->{'count'});
${'count19_argument'}->setColumnOperation('+');
${'count19_argument'}->ensureDefaultValue(1);
if(!${'count19_argument'}->isValid()) return ${'count19_argument'}->getErrorMessage();
if(${'count19_argument'} !== null) ${'count19_argument'}->setColumnType('number');

${'host20_argument'} = new ConditionArgument('host', $args->host, 'equal');
${'host20_argument'}->checkNotNull();
${'host20_argument'}->createConditionValue();
if(!${'host20_argument'}->isValid()) return ${'host20_argument'}->getErrorMessage();
if(${'host20_argument'} !== null) ${'host20_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count19_argument'})
));
$query->setTables(array(
new Table('`xe_referer_statistics`', '`referer_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`host`',$host20_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>