<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title14_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title14_argument'}->checkNotNull();
${'title14_argument'}->createConditionValue();
if(!${'title14_argument'}->isValid()) return ${'title14_argument'}->getErrorMessage();
if(${'title14_argument'} !== null) ${'title14_argument'}->setColumnType('varchar');

${'site_srl15_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl15_argument'}->ensureDefaultValue('0');
${'site_srl15_argument'}->createConditionValue();
if(!${'site_srl15_argument'}->isValid()) return ${'site_srl15_argument'}->getErrorMessage();
if(${'site_srl15_argument'} !== null) ${'site_srl15_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title14_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl15_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>