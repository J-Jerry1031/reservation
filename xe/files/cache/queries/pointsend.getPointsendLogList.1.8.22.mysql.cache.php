<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointsendLogList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->sender_srl)) {
${'sender_srl1_argument'} = new ConditionArgument('sender_srl', $args->sender_srl, 'equal');
${'sender_srl1_argument'}->checkFilter('number');
${'sender_srl1_argument'}->createConditionValue();
if(!${'sender_srl1_argument'}->isValid()) return ${'sender_srl1_argument'}->getErrorMessage();
} else
${'sender_srl1_argument'} = NULL;if(${'sender_srl1_argument'} !== null) ${'sender_srl1_argument'}->setColumnType('number');
if(isset($args->receiver_srl)) {
${'receiver_srl2_argument'} = new ConditionArgument('receiver_srl', $args->receiver_srl, 'equal');
${'receiver_srl2_argument'}->checkFilter('number');
${'receiver_srl2_argument'}->createConditionValue();
if(!${'receiver_srl2_argument'}->isValid()) return ${'receiver_srl2_argument'}->getErrorMessage();
} else
${'receiver_srl2_argument'} = NULL;if(${'receiver_srl2_argument'} !== null) ${'receiver_srl2_argument'}->setColumnType('number');
if(isset($args->s_point_more)) {
${'s_point_more3_argument'} = new ConditionArgument('s_point_more', $args->s_point_more, 'more');
${'s_point_more3_argument'}->createConditionValue();
if(!${'s_point_more3_argument'}->isValid()) return ${'s_point_more3_argument'}->getErrorMessage();
} else
${'s_point_more3_argument'} = NULL;if(${'s_point_more3_argument'} !== null) ${'s_point_more3_argument'}->setColumnType('number');
if(isset($args->s_point_less)) {
${'s_point_less4_argument'} = new ConditionArgument('s_point_less', $args->s_point_less, 'less');
${'s_point_less4_argument'}->createConditionValue();
if(!${'s_point_less4_argument'}->isValid()) return ${'s_point_less4_argument'}->getErrorMessage();
} else
${'s_point_less4_argument'} = NULL;if(${'s_point_less4_argument'} !== null) ${'s_point_less4_argument'}->setColumnType('number');
if(isset($args->s_regdate_more)) {
${'s_regdate_more5_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more5_argument'}->createConditionValue();
if(!${'s_regdate_more5_argument'}->isValid()) return ${'s_regdate_more5_argument'}->getErrorMessage();
} else
${'s_regdate_more5_argument'} = NULL;if(${'s_regdate_more5_argument'} !== null) ${'s_regdate_more5_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less6_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less6_argument'}->createConditionValue();
if(!${'s_regdate_less6_argument'}->isValid()) return ${'s_regdate_less6_argument'}->getErrorMessage();
} else
${'s_regdate_less6_argument'} = NULL;if(${'s_regdate_less6_argument'} !== null) ${'s_regdate_less6_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress7_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like');
${'s_ipaddress7_argument'}->createConditionValue();
if(!${'s_ipaddress7_argument'}->isValid()) return ${'s_ipaddress7_argument'}->getErrorMessage();
} else
${'s_ipaddress7_argument'} = NULL;if(${'s_ipaddress7_argument'} !== null) ${'s_ipaddress7_argument'}->setColumnType('varchar');

${'page10_argument'} = new Argument('page', $args->{'page'});
${'page10_argument'}->ensureDefaultValue('1');
if(!${'page10_argument'}->isValid()) return ${'page10_argument'}->getErrorMessage();

${'page_count11_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count11_argument'}->ensureDefaultValue('10');
if(!${'page_count11_argument'}->isValid()) return ${'page_count11_argument'}->getErrorMessage();

${'list_count12_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count12_argument'}->ensureDefaultValue('20');
if(!${'list_count12_argument'}->isValid()) return ${'list_count12_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('log.regdate');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

${'order_type9_argument'} = new SortArgument('order_type9', $args->order_type);
${'order_type9_argument'}->ensureDefaultValue('asc');
if(!${'order_type9_argument'}->isValid()) return ${'order_type9_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_pointsend_log`', '`log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sender_srl`',$sender_srl1_argument,"equal", 'or')
,new ConditionWithArgument('`receiver_srl`',$receiver_srl2_argument,"equal", 'or')
,new ConditionWithArgument('`log`.`point`',$s_point_more3_argument,"more", 'or')
,new ConditionWithArgument('`log`.`point`',$s_point_less4_argument,"less", 'or')
,new ConditionWithArgument('`log`.`regdate`',$s_regdate_more5_argument,"more", 'or')
,new ConditionWithArgument('`log`.`regdate`',$s_regdate_less6_argument,"less", 'or')
,new ConditionWithArgument('`log`.`ipaddress`',$s_ipaddress7_argument,"like", 'or')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, $order_type9_argument)
));
$query->setLimit(new Limit(${'list_count12_argument'}, ${'page10_argument'}, ${'page_count11_argument'}));
return $query; ?>