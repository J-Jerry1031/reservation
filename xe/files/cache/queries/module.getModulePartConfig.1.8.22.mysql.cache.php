<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module7_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module7_argument'}->checkNotNull();
${'module7_argument'}->createConditionValue();
if(!${'module7_argument'}->isValid()) return ${'module7_argument'}->getErrorMessage();
if(${'module7_argument'} !== null) ${'module7_argument'}->setColumnType('varchar');

${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl8_argument'}->checkNotNull();
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module7_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>