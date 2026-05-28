<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointrushWinnerCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl1_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->createConditionValue();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
} else
${'document_srl1_argument'} = NULL;if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl1_argument,"equal")
,new ConditionWithoutArgument('`wr_flg`',"'W'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>