<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushWinnerComment");
$query->setAction("update");
$query->setPriority("LOW");

${'content1_argument'} = new Argument('content', $args->{'content'});
${'content1_argument'}->ensureDefaultValue('');
${'content1_argument'}->checkNotNull();
if(!${'content1_argument'}->isValid()) return ${'content1_argument'}->getErrorMessage();
if(${'content1_argument'} !== null) ${'content1_argument'}->setColumnType('text');

${'last_update2_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update2_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update2_argument'}->isValid()) return ${'last_update2_argument'}->getErrorMessage();
if(${'last_update2_argument'} !== null) ${'last_update2_argument'}->setColumnType('date');

${'ipaddress3_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress3_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'winner_comment_srl4_argument'} = new ConditionArgument('winner_comment_srl', $args->winner_comment_srl, 'equal');
${'winner_comment_srl4_argument'}->checkFilter('number');
${'winner_comment_srl4_argument'}->checkNotNull();
${'winner_comment_srl4_argument'}->createConditionValue();
if(!${'winner_comment_srl4_argument'}->isValid()) return ${'winner_comment_srl4_argument'}->getErrorMessage();
if(${'winner_comment_srl4_argument'} !== null) ${'winner_comment_srl4_argument'}->setColumnType('number');

${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->checkFilter('number');
${'member_srl5_argument'}->checkNotNull();
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`content`', ${'content1_argument'})
,new UpdateExpression('`last_update`', ${'last_update2_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress3_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`winner_comment_srl`',$winner_comment_srl4_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>