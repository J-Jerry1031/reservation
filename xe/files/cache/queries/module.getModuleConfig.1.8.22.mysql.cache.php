<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module4_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module4_argument'}->createConditionValue();
if(!${'module4_argument'}->isValid()) return ${'module4_argument'}->getErrorMessage();
} else
${'module4_argument'} = NULL;if(${'module4_argument'} !== null) ${'module4_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl5_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl5_argument'}->createConditionValue();
if(!${'site_srl5_argument'}->isValid()) return ${'site_srl5_argument'}->getErrorMessage();
} else
${'site_srl5_argument'} = NULL;if(${'site_srl5_argument'} !== null) ${'site_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module4_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>