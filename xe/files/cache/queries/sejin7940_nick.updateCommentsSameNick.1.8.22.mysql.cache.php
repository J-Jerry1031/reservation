<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCommentsSameNick");
$query->setAction("update");
$query->setPriority("");

${'nick_name33_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name33_argument'}->checkNotNull();
if(!${'nick_name33_argument'}->isValid()) return ${'nick_name33_argument'}->getErrorMessage();
if(${'nick_name33_argument'} !== null) ${'nick_name33_argument'}->setColumnType('varchar');

${'member_srl34_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl34_argument'}->checkFilter('number');
${'member_srl34_argument'}->checkNotNull();
${'member_srl34_argument'}->createConditionValue();
if(!${'member_srl34_argument'}->isValid()) return ${'member_srl34_argument'}->getErrorMessage();
if(${'member_srl34_argument'} !== null) ${'member_srl34_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`nick_name`', ${'nick_name33_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl34_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>