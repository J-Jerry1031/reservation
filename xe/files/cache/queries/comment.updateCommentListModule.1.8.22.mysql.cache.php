<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCommentListModule");
$query->setAction("update");
$query->setPriority("");

${'module_srl9_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->ensureDefaultValue('0');
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');

${'document_srls10_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls10_argument'}->checkNotNull();
${'document_srls10_argument'}->createConditionValue();
if(!${'document_srls10_argument'}->isValid()) return ${'document_srls10_argument'}->getErrorMessage();
if(${'document_srls10_argument'} !== null) ${'document_srls10_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl9_argument'})
));
$query->setTables(array(
new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls10_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>