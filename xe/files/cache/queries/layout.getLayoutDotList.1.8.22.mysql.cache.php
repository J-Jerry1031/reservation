<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl46_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl46_argument'}->checkFilter('number');
${'site_srl46_argument'}->ensureDefaultValue('0');
${'site_srl46_argument'}->checkNotNull();
${'site_srl46_argument'}->createConditionValue();
if(!${'site_srl46_argument'}->isValid()) return ${'site_srl46_argument'}->getErrorMessage();
if(${'site_srl46_argument'} !== null) ${'site_srl46_argument'}->setColumnType('number');

${'layout_type47_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type47_argument'}->ensureDefaultValue('P');
${'layout_type47_argument'}->createConditionValue();
if(!${'layout_type47_argument'}->isValid()) return ${'layout_type47_argument'}->getErrorMessage();
if(${'layout_type47_argument'} !== null) ${'layout_type47_argument'}->setColumnType('char');

${'layout48_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout48_argument'}->ensureDefaultValue('.');
${'layout48_argument'}->createConditionValue();
if(!${'layout48_argument'}->isValid()) return ${'layout48_argument'}->getErrorMessage();
if(${'layout48_argument'} !== null) ${'layout48_argument'}->setColumnType('varchar');

${'sort_index49_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index49_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index49_argument'}->isValid()) return ${'sort_index49_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl46_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type47_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout48_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index49_argument'}, "desc")
));
$query->setLimit();
return $query; ?>