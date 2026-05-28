<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRockgameCountWin");
$query->setAction("select");
$query->setPriority("");

${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkNotNull();
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

${'result5_argument'} = new ConditionArgument('result', $args->result, 'equal');
${'result5_argument'}->checkNotNull();
${'result5_argument'}->createConditionValue();
if(!${'result5_argument'}->isValid()) return ${'result5_argument'}->getErrorMessage();
if(${'result5_argument'} !== null) ${'result5_argument'}->setColumnType('varchar');
if(isset($args->regdate)) {
${'regdate6_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate6_argument'}->createConditionValue();
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
} else
${'regdate6_argument'} = NULL;
$query->setColumns(array(
new SelectExpression('count(*)', '`count_win`')
));
$query->setTables(array(
new Table('`xe_rockgame`', '`rockgame`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`result`',$result5_argument,"equal", 'and')
,new ConditionWithArgument('substr(`regdate`,1,10)',$regdate6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>