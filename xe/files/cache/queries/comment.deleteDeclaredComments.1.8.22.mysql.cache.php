<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeclaredComments");
$query->setAction("delete");
$query->setPriority("");

${'comment_srl12_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'in');
${'comment_srl12_argument'}->checkFilter('number');
${'comment_srl12_argument'}->checkNotNull();
${'comment_srl12_argument'}->createConditionValue();
if(!${'comment_srl12_argument'}->isValid()) return ${'comment_srl12_argument'}->getErrorMessage();
if(${'comment_srl12_argument'} !== null) ${'comment_srl12_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_comment_declared`', '`comment_declared`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl12_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>