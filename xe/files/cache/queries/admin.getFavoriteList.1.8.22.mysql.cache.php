<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl20_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl20_argument'}->createConditionValue();
if(!${'site_srl20_argument'}->isValid()) return ${'site_srl20_argument'}->getErrorMessage();
} else
${'site_srl20_argument'} = NULL;if(${'site_srl20_argument'} !== null) ${'site_srl20_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module21_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module21_argument'}->createConditionValue();
if(!${'module21_argument'}->isValid()) return ${'module21_argument'}->getErrorMessage();
} else
${'module21_argument'} = NULL;if(${'module21_argument'} !== null) ${'module21_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl20_argument,"equal")
,new ConditionWithArgument('`module`',$module21_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>