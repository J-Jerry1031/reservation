<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTagModule");
$query->setAction("update");
$query->setPriority("");

${'module_srl13_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->ensureDefaultValue('0');
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');

${'document_srls14_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls14_argument'}->checkNotNull();
${'document_srls14_argument'}->createConditionValue();
if(!${'document_srls14_argument'}->isValid()) return ${'document_srls14_argument'}->getErrorMessage();
if(${'document_srls14_argument'} !== null) ${'document_srls14_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl13_argument'})
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls14_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>