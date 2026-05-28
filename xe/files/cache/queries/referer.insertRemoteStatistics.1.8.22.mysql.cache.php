<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertRemoteStatistics");
$query->setAction("insert");
$query->setPriority("");

${'remote1_argument'} = new Argument('remote', $args->{'remote'});
${'remote1_argument'}->checkNotNull();
if(!${'remote1_argument'}->isValid()) return ${'remote1_argument'}->getErrorMessage();
if(${'remote1_argument'} !== null) ${'remote1_argument'}->setColumnType('varchar');
if(isset($args->country_code)) {
${'country_code2_argument'} = new Argument('country_code', $args->{'country_code'});
if(!${'country_code2_argument'}->isValid()) return ${'country_code2_argument'}->getErrorMessage();
} else
${'country_code2_argument'} = NULL;if(${'country_code2_argument'} !== null) ${'country_code2_argument'}->setColumnType('char');

${'count3_argument'} = new Argument('count', $args->{'count'});
${'count3_argument'}->ensureDefaultValue('1');
if(!${'count3_argument'}->isValid()) return ${'count3_argument'}->getErrorMessage();
if(${'count3_argument'} !== null) ${'count3_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`remote`', ${'remote1_argument'})
,new InsertExpression('`country_code`', ${'country_code2_argument'})
,new InsertExpression('`count`', ${'count3_argument'})
));
$query->setTables(array(
new Table('`xe_referer_remote_statistics`', '`referer_remote_statistics`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>