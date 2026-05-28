<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNotifyList");
$query->setAction("select");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->readed)) {
${'readed2_argument'} = new ConditionArgument('readed', $args->readed, 'equal');
${'readed2_argument'}->createConditionValue();
if(!${'readed2_argument'}->isValid()) return ${'readed2_argument'}->getErrorMessage();
} else
${'readed2_argument'} = NULL;if(${'readed2_argument'} !== null) ${'readed2_argument'}->setColumnType('char');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('2');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('5');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'list_order3_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order3_argument'}->ensureDefaultValue('regdate');
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_ncenterlite_notify`', '`ncenterlite_notify`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`readed`',$readed2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order3_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>