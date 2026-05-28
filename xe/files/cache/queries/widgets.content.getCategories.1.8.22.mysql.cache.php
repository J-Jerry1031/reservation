<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategories");
$query->setAction("select");
$query->setPriority("");

${'module_srl60_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl60_argument'}->checkFilter('number');
${'module_srl60_argument'}->checkNotNull();
${'module_srl60_argument'}->createConditionValue();
if(!${'module_srl60_argument'}->isValid()) return ${'module_srl60_argument'}->getErrorMessage();
if(${'module_srl60_argument'} !== null) ${'module_srl60_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`module_srl`')
,new SelectExpression('`category_srl`')
,new SelectExpression('`title`')
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl60_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>