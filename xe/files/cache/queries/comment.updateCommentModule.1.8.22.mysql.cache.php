<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCommentModule");
$query->setAction("update");
$query->setPriority("");

${'module_srl7_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->ensureDefaultValue('0');
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');

${'document_srls8_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls8_argument'}->checkNotNull();
${'document_srls8_argument'}->createConditionValue();
if(!${'document_srls8_argument'}->isValid()) return ${'document_srls8_argument'}->getErrorMessage();
if(${'document_srls8_argument'} !== null) ${'document_srls8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl7_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls8_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>