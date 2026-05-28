<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleTags");
$query->setAction("delete");
$query->setPriority("");

${'module_srl23_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl23_argument'}->checkFilter('number');
${'module_srl23_argument'}->checkNotNull();
${'module_srl23_argument'}->createConditionValue();
if(!${'module_srl23_argument'}->isValid()) return ${'module_srl23_argument'}->getErrorMessage();
if(${'module_srl23_argument'} !== null) ${'module_srl23_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl23_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>