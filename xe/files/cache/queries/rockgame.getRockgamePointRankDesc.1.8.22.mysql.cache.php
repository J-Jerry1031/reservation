<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRockgamePointRankDesc");
$query->setAction("select");
$query->setPriority("");

${'regdate7_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate7_argument'}->checkNotNull();
${'regdate7_argument'}->createConditionValue();
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();

${'page9_argument'} = new Argument('page', $args->{'page'});
${'page9_argument'}->ensureDefaultValue('1');
if(!${'page9_argument'}->isValid()) return ${'page9_argument'}->getErrorMessage();

${'page_count10_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count10_argument'}->ensureDefaultValue('0');
if(!${'page_count10_argument'}->isValid()) return ${'page_count10_argument'}->getErrorMessage();

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('10');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('point_sum');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

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
new ConditionWithArgument('substr(`regdate`,1,10)',$regdate7_argument,"equal")))
));
$query->setGroups(array(
'`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count11_argument'}, ${'page9_argument'}, ${'page_count10_argument'}));
return $query; ?>