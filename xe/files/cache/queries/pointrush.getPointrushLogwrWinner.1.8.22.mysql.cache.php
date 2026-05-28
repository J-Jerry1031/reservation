<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointrushLogwrWinner");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
} else
${'document_srl6_argument'} = NULL;if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal")
,new ConditionWithoutArgument('`is_winner`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>