<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePointrushWinnerCommentByDocumentSrl");
$query->setAction("delete");
$query->setPriority("LOW");

${'document_srl3_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl3_argument'}->checkFilter('number');
${'document_srl3_argument'}->checkNotNull();
${'document_srl3_argument'}->createConditionValue();
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>