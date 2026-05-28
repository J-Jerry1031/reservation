<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl67_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl67_argument'}->checkFilter('number');
${'document_srl67_argument'}->checkNotNull();
${'document_srl67_argument'}->createConditionValue();
if(!${'document_srl67_argument'}->isValid()) return ${'document_srl67_argument'}->getErrorMessage();
if(${'document_srl67_argument'} !== null) ${'document_srl67_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl67_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>