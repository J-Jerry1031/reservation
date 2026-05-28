<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestComment");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls12_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls12_argument'}->checkFilter('numbers');
${'module_srls12_argument'}->createConditionValue();
if(!${'module_srls12_argument'}->isValid()) return ${'module_srls12_argument'}->getErrorMessage();
} else
${'module_srls12_argument'} = NULL;if(${'module_srls12_argument'} !== null) ${'module_srls12_argument'}->setColumnType('number');

${'clist_count15_argument'} = new Argument('clist_count', $args->{'clist_count'});
${'clist_count15_argument'}->ensureDefaultValue('7');
if(!${'clist_count15_argument'}->isValid()) return ${'clist_count15_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

${'order_type14_argument'} = new SortArgument('order_type14', $args->order_type);
${'order_type14_argument'}->ensureDefaultValue('asc');
if(!${'order_type14_argument'}->isValid()) return ${'order_type14_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls12_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, $order_type14_argument)
));
$query->setLimit(new Limit(${'clist_count15_argument'}));
return $query; ?>