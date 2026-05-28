<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushComWRFlg");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->wr_flg)) {
${'wr_flg4_argument'} = new Argument('wr_flg', $args->{'wr_flg'});
if(!${'wr_flg4_argument'}->isValid()) return ${'wr_flg4_argument'}->getErrorMessage();
} else
${'wr_flg4_argument'} = NULL;if(${'wr_flg4_argument'} !== null) ${'wr_flg4_argument'}->setColumnType('char');
if(isset($args->winner_comment_srl)) {
${'winner_comment_srl5_argument'} = new ConditionArgument('winner_comment_srl', $args->winner_comment_srl, 'equal');
${'winner_comment_srl5_argument'}->createConditionValue();
if(!${'winner_comment_srl5_argument'}->isValid()) return ${'winner_comment_srl5_argument'}->getErrorMessage();
} else
${'winner_comment_srl5_argument'} = NULL;if(${'winner_comment_srl5_argument'} !== null) ${'winner_comment_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`wr_flg`', ${'wr_flg4_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`winner_comment_srl`',$winner_comment_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>