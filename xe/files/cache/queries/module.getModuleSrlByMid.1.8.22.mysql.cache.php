<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSrlByMid");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl8_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl8_argument'}->createConditionValue();
if(!${'site_srl8_argument'}->isValid()) return ${'site_srl8_argument'}->getErrorMessage();
} else
${'site_srl8_argument'} = NULL;if(${'site_srl8_argument'} !== null) ${'site_srl8_argument'}->setColumnType('number');

${'mid9_argument'} = new ConditionArgument('mid', $args->mid, 'in');
${'mid9_argument'}->checkNotNull();
${'mid9_argument'}->createConditionValue();
if(!${'mid9_argument'}->isValid()) return ${'mid9_argument'}->getErrorMessage();
if(${'mid9_argument'} !== null) ${'mid9_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module_srl`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl8_argument,"equal")
,new ConditionWithArgument('`mid`',$mid9_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>