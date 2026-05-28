<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTrackbackModule");
$query->setAction("update");
$query->setPriority("");

${'module_srl11_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->ensureDefaultValue('0');
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');

${'document_srls12_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls12_argument'}->checkNotNull();
${'document_srls12_argument'}->createConditionValue();
if(!${'document_srls12_argument'}->isValid()) return ${'document_srls12_argument'}->getErrorMessage();
if(${'document_srls12_argument'} !== null) ${'document_srls12_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl11_argument'})
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls12_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>