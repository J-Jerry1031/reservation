<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointrushWinnerComment");
$query->setAction("select");
$query->setPriority("");

${'winner_comment_srl1_argument'} = new ConditionArgument('winner_comment_srl', $args->winner_comment_srl, 'equal');
${'winner_comment_srl1_argument'}->checkFilter('number');
${'winner_comment_srl1_argument'}->checkNotNull();
${'winner_comment_srl1_argument'}->createConditionValue();
if(!${'winner_comment_srl1_argument'}->isValid()) return ${'winner_comment_srl1_argument'}->getErrorMessage();
if(${'winner_comment_srl1_argument'} !== null) ${'winner_comment_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`winner_comment_srl`',$winner_comment_srl1_argument,"equal")
,new ConditionWithoutArgument('`wr_flg`',"'W'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>