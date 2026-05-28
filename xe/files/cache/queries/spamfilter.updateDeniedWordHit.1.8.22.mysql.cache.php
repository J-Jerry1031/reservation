<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDeniedWordHit");
$query->setAction("update");
$query->setPriority("");

${'hit1_argument'} = new Argument('hit', NULL);
${'hit1_argument'}->setColumnOperation('+');
${'hit1_argument'}->ensureDefaultValue(1);
if(!${'hit1_argument'}->isValid()) return ${'hit1_argument'}->getErrorMessage();
if(${'hit1_argument'} !== null) ${'hit1_argument'}->setColumnType('number');

${'word2_argument'} = new ConditionArgument('word', $args->word, 'equal');
${'word2_argument'}->checkNotNull();
${'word2_argument'}->createConditionValue();
if(!${'word2_argument'}->isValid()) return ${'word2_argument'}->getErrorMessage();
if(${'word2_argument'} !== null) ${'word2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`hit`', ${'hit1_argument'})
,new UpdateExpressionWithoutArgument('`latest_hit`', "'".date("YmdHis")."'")
));
$query->setTables(array(
new Table('`xe_spamfilter_denied_word`', '`spamfilter_denied_word`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`word`',$word2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>