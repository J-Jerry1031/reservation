<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl43_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl43_argument'}->ensureDefaultValue('0');
${'site_srl43_argument'}->checkNotNull();
${'site_srl43_argument'}->createConditionValue();
if(!${'site_srl43_argument'}->isValid()) return ${'site_srl43_argument'}->getErrorMessage();
if(${'site_srl43_argument'} !== null) ${'site_srl43_argument'}->setColumnType('number');

${'mid44_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid44_argument'}->checkNotNull();
${'mid44_argument'}->createConditionValue();
if(!${'mid44_argument'}->isValid()) return ${'mid44_argument'}->getErrorMessage();
if(${'mid44_argument'} !== null) ${'mid44_argument'}->setColumnType('varchar');

${'module_srl45_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl45_argument'}->ensureDefaultValue('0');
${'module_srl45_argument'}->checkNotNull();
${'module_srl45_argument'}->createConditionValue();
if(!${'module_srl45_argument'}->isValid()) return ${'module_srl45_argument'}->getErrorMessage();
if(${'module_srl45_argument'} !== null) ${'module_srl45_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl43_argument,"equal")
,new ConditionWithArgument('`mid`',$mid44_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl45_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>