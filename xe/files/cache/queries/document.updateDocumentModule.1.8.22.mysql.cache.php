<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentModule");
$query->setAction("update");
$query->setPriority("");

${'module_srl1_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->ensureDefaultValue('0');
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'category_srl2_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl2_argument'}->checkFilter('number');
${'category_srl2_argument'}->ensureDefaultValue('0');
if(!${'category_srl2_argument'}->isValid()) return ${'category_srl2_argument'}->getErrorMessage();
if(${'category_srl2_argument'} !== null) ${'category_srl2_argument'}->setColumnType('number');

${'content3_argument'} = new Argument('content', $args->{'content'});
${'content3_argument'}->checkNotNull();
if(!${'content3_argument'}->isValid()) return ${'content3_argument'}->getErrorMessage();
if(${'content3_argument'} !== null) ${'content3_argument'}->setColumnType('bigtext');

${'document_srl4_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl4_argument'}->checkNotNull();
${'document_srl4_argument'}->createConditionValue();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl1_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl2_argument'})
,new UpdateExpression('`content`', ${'content3_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>