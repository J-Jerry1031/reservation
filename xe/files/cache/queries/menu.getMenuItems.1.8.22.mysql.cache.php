<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl17_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl17_argument'}->checkFilter('number');
${'menu_srl17_argument'}->checkNotNull();
${'menu_srl17_argument'}->createConditionValue();
if(!${'menu_srl17_argument'}->isValid()) return ${'menu_srl17_argument'}->getErrorMessage();
if(${'menu_srl17_argument'} !== null) ${'menu_srl17_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl18_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl18_argument'}->checkFilter('number');
${'parent_srl18_argument'}->createConditionValue();
if(!${'parent_srl18_argument'}->isValid()) return ${'parent_srl18_argument'}->getErrorMessage();
} else
${'parent_srl18_argument'} = NULL;if(${'parent_srl18_argument'} !== null) ${'parent_srl18_argument'}->setColumnType('number');

${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index19_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl17_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index19_argument'}, "desc")
));
$query->setLimit();
return $query; ?>