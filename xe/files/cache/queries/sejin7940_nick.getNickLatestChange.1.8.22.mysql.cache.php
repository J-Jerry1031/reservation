<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNickLatestChange");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate2_argument'} = new ConditionArgument('regdate', $args->regdate, 'more');
${'regdate2_argument'}->createConditionValue();
if(!${'regdate2_argument'}->isValid()) return ${'regdate2_argument'}->getErrorMessage();
} else
${'regdate2_argument'} = NULL;if(${'regdate2_argument'} !== null) ${'regdate2_argument'}->setColumnType('date');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('1');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('1');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_nick_log`', '`member_nick_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate2_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>