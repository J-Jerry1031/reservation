<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid1_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid1_argument'}->createConditionValue();
if(!${'mid1_argument'}->isValid()) return ${'mid1_argument'}->getErrorMessage();
} else
${'mid1_argument'} = NULL;if(${'mid1_argument'} !== null) ${'mid1_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
} else
${'module_srl2_argument'} = NULL;if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
} else
${'site_srl3_argument'} = NULL;if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid1_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>