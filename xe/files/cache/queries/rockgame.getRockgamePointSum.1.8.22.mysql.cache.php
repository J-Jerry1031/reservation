<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRockgamePointSum");
$query->setAction("select");
$query->setPriority("");

${'regdate17_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate17_argument'}->checkNotNull();
${'regdate17_argument'}->createConditionValue();
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();

${'member_srl18_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl18_argument'}->checkNotNull();
${'member_srl18_argument'}->createConditionValue();
if(!${'member_srl18_argument'}->isValid()) return ${'member_srl18_argument'}->getErrorMessage();
if(${'member_srl18_argument'} !== null) ${'member_srl18_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('sum(`game_point`)', '`point_sum_user`')
));
$query->setTables(array(
new Table('`xe_rockgame`', '`rockgame`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('substr(`regdate`,1,10)',$regdate17_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>