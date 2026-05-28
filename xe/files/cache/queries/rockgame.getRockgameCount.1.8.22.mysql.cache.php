<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRockgameCount");
$query->setAction("select");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate2_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate2_argument'}->createConditionValue();
if(!${'regdate2_argument'}->isValid()) return ${'regdate2_argument'}->getErrorMessage();
} else
${'regdate2_argument'} = NULL;
${'result3_argument'} = new ConditionArgument('result', $args->result, 'equal');
${'result3_argument'}->checkNotNull();
${'result3_argument'}->createConditionValue();
if(!${'result3_argument'}->isValid()) return ${'result3_argument'}->getErrorMessage();
if(${'result3_argument'} !== null) ${'result3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`game_count`')
));
$query->setTables(array(
new Table('`xe_rockgame`', '`rockgame`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal", 'and')
,new ConditionWithArgument('substr(`regdate`,1,10)',$regdate2_argument,"equal", 'and')
,new ConditionWithArgument('`result`',$result3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>