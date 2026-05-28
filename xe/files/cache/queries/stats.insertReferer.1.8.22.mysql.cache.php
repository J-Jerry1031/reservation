<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertReferer");
$query->setAction("insert");
$query->setPriority("");

${'site_srl10_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl10_argument'}->checkNotNull();
if(!${'site_srl10_argument'}->isValid()) return ${'site_srl10_argument'}->getErrorMessage();
if(${'site_srl10_argument'} !== null) ${'site_srl10_argument'}->setColumnType('number');

${'referer11_argument'} = new Argument('referer', $args->{'referer'});
${'referer11_argument'}->checkNotNull();
if(!${'referer11_argument'}->isValid()) return ${'referer11_argument'}->getErrorMessage();
if(${'referer11_argument'} !== null) ${'referer11_argument'}->setColumnType('varchar');

${'count12_argument'} = new Argument('count', $args->{'count'});
${'count12_argument'}->ensureDefaultValue('0');
if(!${'count12_argument'}->isValid()) return ${'count12_argument'}->getErrorMessage();
if(${'count12_argument'} !== null) ${'count12_argument'}->setColumnType('number');

${'insert_time13_argument'} = new Argument('insert_time', $args->{'insert_time'});
${'insert_time13_argument'}->checkNotNull();
if(!${'insert_time13_argument'}->isValid()) return ${'insert_time13_argument'}->getErrorMessage();
if(${'insert_time13_argument'} !== null) ${'insert_time13_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl10_argument'})
,new InsertExpression('`referer`', ${'referer11_argument'})
,new InsertExpression('`count`', ${'count12_argument'})
,new InsertExpression('`insert_time`', ${'insert_time13_argument'})
));
$query->setTables(array(
new Table('`xe_stats_referer`', '`stats_referer`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>