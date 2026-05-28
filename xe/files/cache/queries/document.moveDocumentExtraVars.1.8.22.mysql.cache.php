<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("moveDocumentExtraVars");
$query->setAction("update");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl5_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl5_argument'}->checkFilter('number');
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
} else
${'module_srl5_argument'} = NULL;if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');

${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkNotNull();
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl5_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>