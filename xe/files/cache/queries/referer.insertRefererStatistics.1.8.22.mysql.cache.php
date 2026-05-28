<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertRefererStatistics");
$query->setAction("insert");
$query->setPriority("");

${'host1_argument'} = new Argument('host', $args->{'host'});
${'host1_argument'}->checkNotNull();
if(!${'host1_argument'}->isValid()) return ${'host1_argument'}->getErrorMessage();
if(${'host1_argument'} !== null) ${'host1_argument'}->setColumnType('varchar');

${'count2_argument'} = new Argument('count', $args->{'count'});
${'count2_argument'}->ensureDefaultValue('1');
if(!${'count2_argument'}->isValid()) return ${'count2_argument'}->getErrorMessage();
if(${'count2_argument'} !== null) ${'count2_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`host`', ${'host1_argument'})
,new InsertExpression('`count`', ${'count2_argument'})
));
$query->setTables(array(
new Table('`xe_referer_statistics`', '`referer_statistics`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>