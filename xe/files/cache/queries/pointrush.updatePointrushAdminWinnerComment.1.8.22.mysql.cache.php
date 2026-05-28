<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushAdminWinnerComment");
$query->setAction("update");
$query->setPriority("LOW");

${'last_update1_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update1_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update1_argument'}->isValid()) return ${'last_update1_argument'}->getErrorMessage();
if(${'last_update1_argument'} !== null) ${'last_update1_argument'}->setColumnType('date');

${'pointrush_admin_memo2_argument'} = new Argument('pointrush_admin_memo', $args->{'pointrush_admin_memo'});
${'pointrush_admin_memo2_argument'}->ensureDefaultValue('');
${'pointrush_admin_memo2_argument'}->checkNotNull();
if(!${'pointrush_admin_memo2_argument'}->isValid()) return ${'pointrush_admin_memo2_argument'}->getErrorMessage();
if(${'pointrush_admin_memo2_argument'} !== null) ${'pointrush_admin_memo2_argument'}->setColumnType('varchar');

${'status3_argument'} = new Argument('status', $args->{'status'});
${'status3_argument'}->ensureDefaultValue('NO_PREPARE');
${'status3_argument'}->checkNotNull();
if(!${'status3_argument'}->isValid()) return ${'status3_argument'}->getErrorMessage();
if(${'status3_argument'} !== null) ${'status3_argument'}->setColumnType('varchar');

${'winner_comment_srl4_argument'} = new ConditionArgument('winner_comment_srl', $args->winner_comment_srl, 'equal');
${'winner_comment_srl4_argument'}->checkFilter('number');
${'winner_comment_srl4_argument'}->checkNotNull();
${'winner_comment_srl4_argument'}->createConditionValue();
if(!${'winner_comment_srl4_argument'}->isValid()) return ${'winner_comment_srl4_argument'}->getErrorMessage();
if(${'winner_comment_srl4_argument'} !== null) ${'winner_comment_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`last_update`', ${'last_update1_argument'})
,new UpdateExpression('`pointrush_admin_memo`', ${'pointrush_admin_memo2_argument'})
,new UpdateExpression('`status`', ${'status3_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`winner_comment_srl`',$winner_comment_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>