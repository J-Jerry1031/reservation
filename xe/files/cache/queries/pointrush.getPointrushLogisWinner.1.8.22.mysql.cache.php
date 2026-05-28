<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointrushLogisWinner");
$query->setAction("select");
$query->setPriority("");
if(isset($args->pointrush_srl)) {
${'pointrush_srl1_argument'} = new ConditionArgument('pointrush_srl', $args->pointrush_srl, 'equal');
${'pointrush_srl1_argument'}->checkFilter('number');
${'pointrush_srl1_argument'}->createConditionValue();
if(!${'pointrush_srl1_argument'}->isValid()) return ${'pointrush_srl1_argument'}->getErrorMessage();
} else
${'pointrush_srl1_argument'} = NULL;if(${'pointrush_srl1_argument'} !== null) ${'pointrush_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`is_winner`', '`is_winner`')
,new SelectExpression('`winner_comment_srl`', '`winner_comment_srl`')
,new SelectExpression('`document_srl`', '`document_srl`')
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`pointrush_srl`',$pointrush_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>