<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRockgameLog");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_member_srl)) {
${'s_member_srl1_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl1_argument'}->createConditionValue();
if(!${'s_member_srl1_argument'}->isValid()) return ${'s_member_srl1_argument'}->getErrorMessage();
} else
${'s_member_srl1_argument'} = NULL;if(${'s_member_srl1_argument'} !== null) ${'s_member_srl1_argument'}->setColumnType('number');
if(isset($args->s_ipaddress)) {
${'s_ipaddress2_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'equal');
${'s_ipaddress2_argument'}->createConditionValue();
if(!${'s_ipaddress2_argument'}->isValid()) return ${'s_ipaddress2_argument'}->getErrorMessage();
} else
${'s_ipaddress2_argument'} = NULL;if(${'s_ipaddress2_argument'} !== null) ${'s_ipaddress2_argument'}->setColumnType('varchar');
if(isset($args->s_result)) {
${'s_result3_argument'} = new ConditionArgument('s_result', $args->s_result, 'equal');
${'s_result3_argument'}->createConditionValue();
if(!${'s_result3_argument'}->isValid()) return ${'s_result3_argument'}->getErrorMessage();
} else
${'s_result3_argument'} = NULL;if(${'s_result3_argument'} !== null) ${'s_result3_argument'}->setColumnType('varchar');

${'page5_argument'} = new Argument('page', $args->{'page'});
${'page5_argument'}->ensureDefaultValue('1');
if(!${'page5_argument'}->isValid()) return ${'page5_argument'}->getErrorMessage();

${'page_count6_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count6_argument'}->ensureDefaultValue('10');
if(!${'page_count6_argument'}->isValid()) return ${'page_count6_argument'}->getErrorMessage();

${'list_count7_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count7_argument'}->ensureDefaultValue('15');
if(!${'list_count7_argument'}->isValid()) return ${'list_count7_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('game_srl');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_rockgame`', '`rockgame`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$s_member_srl1_argument,"equal")
,new ConditionWithArgument('`ipaddress`',$s_ipaddress2_argument,"equal")
,new ConditionWithArgument('`result`',$s_result3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count7_argument'}, ${'page5_argument'}, ${'page_count6_argument'}));
return $query; ?>