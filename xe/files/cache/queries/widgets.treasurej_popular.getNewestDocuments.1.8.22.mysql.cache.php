<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls5_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls5_argument'}->checkFilter('number');
${'module_srls5_argument'}->createConditionValue();
if(!${'module_srls5_argument'}->isValid()) return ${'module_srls5_argument'}->getErrorMessage();
} else
${'module_srls5_argument'} = NULL;if(${'module_srls5_argument'} !== null) ${'module_srls5_argument'}->setColumnType('number');

${'list_count7_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count7_argument'}->ensureDefaultValue('5');
if(!${'list_count7_argument'}->isValid()) return ${'list_count7_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls5_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count7_argument'}));
return $query; ?>