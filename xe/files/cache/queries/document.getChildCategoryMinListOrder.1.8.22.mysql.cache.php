<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getChildCategoryMinListOrder");
$query->setAction("select");
$query->setPriority("");

${'parent_srl1_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl1_argument'}->checkFilter('number');
${'parent_srl1_argument'}->ensureDefaultValue('0');
${'parent_srl1_argument'}->checkNotNull();
${'parent_srl1_argument'}->createConditionValue();
if(!${'parent_srl1_argument'}->isValid()) return ${'parent_srl1_argument'}->getErrorMessage();
if(${'parent_srl1_argument'} !== null) ${'parent_srl1_argument'}->setColumnType('number');

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('min(`list_order`)', '`list_order`')
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`parent_srl`',$parent_srl1_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>