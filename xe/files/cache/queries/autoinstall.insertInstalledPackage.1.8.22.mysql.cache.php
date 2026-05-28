<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl28_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl28_argument'}->checkFilter('number');
${'package_srl28_argument'}->checkNotNull();
if(!${'package_srl28_argument'}->isValid()) return ${'package_srl28_argument'}->getErrorMessage();
if(${'package_srl28_argument'} !== null) ${'package_srl28_argument'}->setColumnType('number');

${'version29_argument'} = new Argument('version', $args->{'version'});
${'version29_argument'}->checkNotNull();
if(!${'version29_argument'}->isValid()) return ${'version29_argument'}->getErrorMessage();
if(${'version29_argument'} !== null) ${'version29_argument'}->setColumnType('varchar');

${'current_version30_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version30_argument'}->checkNotNull();
if(!${'current_version30_argument'}->isValid()) return ${'current_version30_argument'}->getErrorMessage();
if(${'current_version30_argument'} !== null) ${'current_version30_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update31_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update31_argument'}->isValid()) return ${'need_update31_argument'}->getErrorMessage();
} else
${'need_update31_argument'} = NULL;if(${'need_update31_argument'} !== null) ${'need_update31_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl28_argument'})
,new InsertExpression('`version`', ${'version29_argument'})
,new InsertExpression('`current_version`', ${'current_version30_argument'})
,new InsertExpression('`need_update`', ${'need_update31_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>