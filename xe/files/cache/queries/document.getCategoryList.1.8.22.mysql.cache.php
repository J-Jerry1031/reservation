<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategoryList");
$query->setAction("select");
$query->setPriority("");

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "asc")
));
$query->setLimit();
return $query; ?>