<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateBlamedCount");
$query->setAction("update");
$query->setPriority("");

${'blamed_count1_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count1_argument'}->checkNotNull();
if(!${'blamed_count1_argument'}->isValid()) return ${'blamed_count1_argument'}->getErrorMessage();
if(${'blamed_count1_argument'} !== null) ${'blamed_count1_argument'}->setColumnType('number');

${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->checkNotNull();
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`blamed_count`', ${'blamed_count1_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>