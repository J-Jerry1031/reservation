<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl39_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl39_argument'}->checkFilter('number');
${'module_srl39_argument'}->checkNotNull();
if(!${'module_srl39_argument'}->isValid()) return ${'module_srl39_argument'}->getErrorMessage();
if(${'module_srl39_argument'} !== null) ${'module_srl39_argument'}->setColumnType('number');

${'name40_argument'} = new Argument('name', $args->{'name'});
${'name40_argument'}->checkNotNull();
if(!${'name40_argument'}->isValid()) return ${'name40_argument'}->getErrorMessage();
if(${'name40_argument'} !== null) ${'name40_argument'}->setColumnType('varchar');

${'value41_argument'} = new Argument('value', $args->{'value'});
${'value41_argument'}->checkNotNull();
if(!${'value41_argument'}->isValid()) return ${'value41_argument'}->getErrorMessage();
if(${'value41_argument'} !== null) ${'value41_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl39_argument'})
,new InsertExpression('`name`', ${'name40_argument'})
,new InsertExpression('`value`', ${'value41_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>