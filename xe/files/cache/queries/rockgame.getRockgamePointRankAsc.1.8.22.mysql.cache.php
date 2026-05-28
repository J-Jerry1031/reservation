<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRockgamePointRankDesc");
$query->setAction("select");
$query->setPriority("");

${'regdate12_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate12_argument'}->checkNotNull();
${'regdate12_argument'}->createConditionValue();
if(!${'regdate12_argument'}->isValid()) return ${'regdate12_argument'}->getErrorMessage();

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('0');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('10');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('point_sum');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member_srl`')
,new SelectExpression('`nick_name`')
,new SelectExpression('sum(`game_point`)', '`point_sum`')
));
$query->setTables(array(
new Table('`xe_rockgame`', '`rockgame`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('substr(`regdate`,1,10)',$regdate12_argument,"equal")))
));
$query->setGroups(array(
'`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>