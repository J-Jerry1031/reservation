<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getIconList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->buy_limit)) {
${'buy_limit1_argument'} = new ConditionArgument('buy_limit', $args->buy_limit, 'equal');
${'buy_limit1_argument'}->createConditionValue();
if(!${'buy_limit1_argument'}->isValid()) return ${'buy_limit1_argument'}->getErrorMessage();
} else
${'buy_limit1_argument'} = NULL;if(${'buy_limit1_argument'} !== null) ${'buy_limit1_argument'}->setColumnType('char');
if(isset($args->send_limit)) {
${'send_limit2_argument'} = new ConditionArgument('send_limit', $args->send_limit, 'equal');
${'send_limit2_argument'}->createConditionValue();
if(!${'send_limit2_argument'}->isValid()) return ${'send_limit2_argument'}->getErrorMessage();
} else
${'send_limit2_argument'} = NULL;if(${'send_limit2_argument'} !== null) ${'send_limit2_argument'}->setColumnType('char');
if(isset($args->sell_limit)) {
${'sell_limit3_argument'} = new ConditionArgument('sell_limit', $args->sell_limit, 'equal');
${'sell_limit3_argument'}->createConditionValue();
if(!${'sell_limit3_argument'}->isValid()) return ${'sell_limit3_argument'}->getErrorMessage();
} else
${'sell_limit3_argument'} = NULL;if(${'sell_limit3_argument'} !== null) ${'sell_limit3_argument'}->setColumnType('char');
if(isset($args->minute_limit)) {
${'minute_limit4_argument'} = new ConditionArgument('minute_limit', $args->minute_limit, 'equal');
${'minute_limit4_argument'}->createConditionValue();
if(!${'minute_limit4_argument'}->isValid()) return ${'minute_limit4_argument'}->getErrorMessage();
} else
${'minute_limit4_argument'} = NULL;if(${'minute_limit4_argument'} !== null) ${'minute_limit4_argument'}->setColumnType('char');
if(isset($args->event_limit)) {
${'event_limit5_argument'} = new ConditionArgument('event_limit', $args->event_limit, 'equal');
${'event_limit5_argument'}->createConditionValue();
if(!${'event_limit5_argument'}->isValid()) return ${'event_limit5_argument'}->getErrorMessage();
} else
${'event_limit5_argument'} = NULL;if(${'event_limit5_argument'} !== null) ${'event_limit5_argument'}->setColumnType('char');
if(isset($args->s_icon_srl)) {
${'s_icon_srl6_argument'} = new ConditionArgument('s_icon_srl', $args->s_icon_srl, 'equal');
${'s_icon_srl6_argument'}->createConditionValue();
if(!${'s_icon_srl6_argument'}->isValid()) return ${'s_icon_srl6_argument'}->getErrorMessage();
} else
${'s_icon_srl6_argument'} = NULL;if(${'s_icon_srl6_argument'} !== null) ${'s_icon_srl6_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title7_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title7_argument'}->createConditionValue();
if(!${'s_title7_argument'}->isValid()) return ${'s_title7_argument'}->getErrorMessage();
} else
${'s_title7_argument'} = NULL;if(${'s_title7_argument'} !== null) ${'s_title7_argument'}->setColumnType('varchar');
if(isset($args->s_total_count)) {
${'s_total_count8_argument'} = new ConditionArgument('s_total_count', $args->s_total_count, 'equal');
${'s_total_count8_argument'}->createConditionValue();
if(!${'s_total_count8_argument'}->isValid()) return ${'s_total_count8_argument'}->getErrorMessage();
} else
${'s_total_count8_argument'} = NULL;if(${'s_total_count8_argument'} !== null) ${'s_total_count8_argument'}->setColumnType('number');
if(isset($args->s_total_count_less)) {
${'s_total_count_less9_argument'} = new ConditionArgument('s_total_count_less', $args->s_total_count_less, 'less');
${'s_total_count_less9_argument'}->createConditionValue();
if(!${'s_total_count_less9_argument'}->isValid()) return ${'s_total_count_less9_argument'}->getErrorMessage();
} else
${'s_total_count_less9_argument'} = NULL;if(${'s_total_count_less9_argument'} !== null) ${'s_total_count_less9_argument'}->setColumnType('number');
if(isset($args->s_total_count_more)) {
${'s_total_count_more10_argument'} = new ConditionArgument('s_total_count_more', $args->s_total_count_more, 'more');
${'s_total_count_more10_argument'}->createConditionValue();
if(!${'s_total_count_more10_argument'}->isValid()) return ${'s_total_count_more10_argument'}->getErrorMessage();
} else
${'s_total_count_more10_argument'} = NULL;if(${'s_total_count_more10_argument'} !== null) ${'s_total_count_more10_argument'}->setColumnType('number');
if(isset($args->s_price)) {
${'s_price11_argument'} = new ConditionArgument('s_price', $args->s_price, 'equal');
${'s_price11_argument'}->createConditionValue();
if(!${'s_price11_argument'}->isValid()) return ${'s_price11_argument'}->getErrorMessage();
} else
${'s_price11_argument'} = NULL;if(${'s_price11_argument'} !== null) ${'s_price11_argument'}->setColumnType('number');
if(isset($args->s_price_less)) {
${'s_price_less12_argument'} = new ConditionArgument('s_price_less', $args->s_price_less, 'less');
${'s_price_less12_argument'}->createConditionValue();
if(!${'s_price_less12_argument'}->isValid()) return ${'s_price_less12_argument'}->getErrorMessage();
} else
${'s_price_less12_argument'} = NULL;if(${'s_price_less12_argument'} !== null) ${'s_price_less12_argument'}->setColumnType('number');
if(isset($args->s_price_more)) {
${'s_price_more13_argument'} = new ConditionArgument('s_price_more', $args->s_price_more, 'more');
${'s_price_more13_argument'}->createConditionValue();
if(!${'s_price_more13_argument'}->isValid()) return ${'s_price_more13_argument'}->getErrorMessage();
} else
${'s_price_more13_argument'} = NULL;if(${'s_price_more13_argument'} !== null) ${'s_price_more13_argument'}->setColumnType('number');
if(isset($args->s_minute)) {
${'s_minute14_argument'} = new ConditionArgument('s_minute', $args->s_minute, 'equal');
${'s_minute14_argument'}->createConditionValue();
if(!${'s_minute14_argument'}->isValid()) return ${'s_minute14_argument'}->getErrorMessage();
} else
${'s_minute14_argument'} = NULL;if(${'s_minute14_argument'} !== null) ${'s_minute14_argument'}->setColumnType('number');
if(isset($args->s_minute_less)) {
${'s_minute_less15_argument'} = new ConditionArgument('s_minute_less', $args->s_minute_less, 'less');
${'s_minute_less15_argument'}->createConditionValue();
if(!${'s_minute_less15_argument'}->isValid()) return ${'s_minute_less15_argument'}->getErrorMessage();
} else
${'s_minute_less15_argument'} = NULL;if(${'s_minute_less15_argument'} !== null) ${'s_minute_less15_argument'}->setColumnType('number');
if(isset($args->s_minute_more)) {
${'s_minute_more16_argument'} = new ConditionArgument('s_minute_more', $args->s_minute_more, 'more');
${'s_minute_more16_argument'}->createConditionValue();
if(!${'s_minute_more16_argument'}->isValid()) return ${'s_minute_more16_argument'}->getErrorMessage();
} else
${'s_minute_more16_argument'} = NULL;if(${'s_minute_more16_argument'} !== null) ${'s_minute_more16_argument'}->setColumnType('number');
if(isset($args->s_level_limit)) {
${'s_level_limit17_argument'} = new ConditionArgument('s_level_limit', $args->s_level_limit, 'equal');
${'s_level_limit17_argument'}->createConditionValue();
if(!${'s_level_limit17_argument'}->isValid()) return ${'s_level_limit17_argument'}->getErrorMessage();
} else
${'s_level_limit17_argument'} = NULL;if(${'s_level_limit17_argument'} !== null) ${'s_level_limit17_argument'}->setColumnType('number');
if(isset($args->s_content)) {
${'s_content18_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content18_argument'}->createConditionValue();
if(!${'s_content18_argument'}->isValid()) return ${'s_content18_argument'}->getErrorMessage();
} else
${'s_content18_argument'} = NULL;if(${'s_content18_argument'} !== null) ${'s_content18_argument'}->setColumnType('text');

${'page21_argument'} = new Argument('page', $args->{'page'});
${'page21_argument'}->ensureDefaultValue('1');
if(!${'page21_argument'}->isValid()) return ${'page21_argument'}->getErrorMessage();

${'page_count22_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count22_argument'}->ensureDefaultValue('10');
if(!${'page_count22_argument'}->isValid()) return ${'page_count22_argument'}->getErrorMessage();

${'list_count23_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count23_argument'}->ensureDefaultValue('20');
if(!${'list_count23_argument'}->isValid()) return ${'list_count23_argument'}->getErrorMessage();

${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index19_argument'}->ensureDefaultValue('icon_srl');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

${'sort_order20_argument'} = new SortArgument('sort_order20', $args->sort_order);
${'sort_order20_argument'}->ensureDefaultValue('asc');
if(!${'sort_order20_argument'}->isValid()) return ${'sort_order20_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_iconshop_admin`', '`iconshop_admin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`buy_limit`',$buy_limit1_argument,"equal")
,new ConditionWithArgument('`send_limit`',$send_limit2_argument,"equal", 'and')
,new ConditionWithArgument('`sell_limit`',$sell_limit3_argument,"equal", 'and')
,new ConditionWithArgument('`minute_limit`',$minute_limit4_argument,"equal", 'and')
,new ConditionWithArgument('`event_limit`',$event_limit5_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`icon_srl`',$s_icon_srl6_argument,"equal")
,new ConditionWithArgument('`title`',$s_title7_argument,"like")
,new ConditionWithArgument('`total_count`',$s_total_count8_argument,"equal", 'or')
,new ConditionWithArgument('`total_count`',$s_total_count_less9_argument,"less", 'or')
,new ConditionWithArgument('`total_count`',$s_total_count_more10_argument,"more", 'or')
,new ConditionWithArgument('`price`',$s_price11_argument,"equal", 'or')
,new ConditionWithArgument('`price`',$s_price_less12_argument,"less", 'or')
,new ConditionWithArgument('`price`',$s_price_more13_argument,"more", 'or')
,new ConditionWithArgument('`minute`',$s_minute14_argument,"equal", 'or')
,new ConditionWithArgument('`minute`',$s_minute_less15_argument,"less", 'or')
,new ConditionWithArgument('`minute`',$s_minute_more16_argument,"more", 'or')
,new ConditionWithArgument('`level_limit`',$s_level_limit17_argument,"equal", 'or')
,new ConditionWithArgument('`content`',$s_content18_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index19_argument'}, $sort_order20_argument)
));
$query->setLimit(new Limit(${'list_count23_argument'}, ${'page21_argument'}, ${'page_count22_argument'}));
return $query; ?>