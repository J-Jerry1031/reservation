<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLogList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_category_srl)) {
${'s_category_srl7_argument'} = new ConditionArgument('s_category_srl', $args->s_category_srl, 'equal');
${'s_category_srl7_argument'}->createConditionValue();
if(!${'s_category_srl7_argument'}->isValid()) return ${'s_category_srl7_argument'}->getErrorMessage();
} else
${'s_category_srl7_argument'} = NULL;if(${'s_category_srl7_argument'} !== null) ${'s_category_srl7_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate8_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'equal');
${'s_regdate8_argument'}->createConditionValue();
if(!${'s_regdate8_argument'}->isValid()) return ${'s_regdate8_argument'}->getErrorMessage();
} else
${'s_regdate8_argument'} = NULL;if(isset($args->s_regdate_more)) {
${'s_regdate_more9_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more9_argument'}->createConditionValue();
if(!${'s_regdate_more9_argument'}->isValid()) return ${'s_regdate_more9_argument'}->getErrorMessage();
} else
${'s_regdate_more9_argument'} = NULL;if(isset($args->s_regdate_less)) {
${'s_regdate_less10_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less10_argument'}->createConditionValue();
if(!${'s_regdate_less10_argument'}->isValid()) return ${'s_regdate_less10_argument'}->getErrorMessage();
} else
${'s_regdate_less10_argument'} = NULL;if(isset($args->s_content)) {
${'s_content11_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content11_argument'}->createConditionValue();
if(!${'s_content11_argument'}->isValid()) return ${'s_content11_argument'}->getErrorMessage();
} else
${'s_content11_argument'} = NULL;if(${'s_content11_argument'} !== null) ${'s_content11_argument'}->setColumnType('text');
if(isset($args->s_ipaddress)) {
${'s_ipaddress12_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like');
${'s_ipaddress12_argument'}->createConditionValue();
if(!${'s_ipaddress12_argument'}->isValid()) return ${'s_ipaddress12_argument'}->getErrorMessage();
} else
${'s_ipaddress12_argument'} = NULL;if(${'s_ipaddress12_argument'} !== null) ${'s_ipaddress12_argument'}->setColumnType('varchar');
if(isset($args->s_data_srl)) {
${'s_data_srl13_argument'} = new ConditionArgument('s_data_srl', $args->s_data_srl, 'equal');
${'s_data_srl13_argument'}->createConditionValue();
if(!${'s_data_srl13_argument'}->isValid()) return ${'s_data_srl13_argument'}->getErrorMessage();
} else
${'s_data_srl13_argument'} = NULL;if(${'s_data_srl13_argument'} !== null) ${'s_data_srl13_argument'}->setColumnType('number');
if(isset($args->s_icon_srl)) {
${'s_icon_srl14_argument'} = new ConditionArgument('s_icon_srl', $args->s_icon_srl, 'equal');
${'s_icon_srl14_argument'}->createConditionValue();
if(!${'s_icon_srl14_argument'}->isValid()) return ${'s_icon_srl14_argument'}->getErrorMessage();
} else
${'s_icon_srl14_argument'} = NULL;if(${'s_icon_srl14_argument'} !== null) ${'s_icon_srl14_argument'}->setColumnType('number');
if(isset($args->s_point)) {
${'s_point15_argument'} = new ConditionArgument('s_point', $args->s_point, 'equal');
${'s_point15_argument'}->createConditionValue();
if(!${'s_point15_argument'}->isValid()) return ${'s_point15_argument'}->getErrorMessage();
} else
${'s_point15_argument'} = NULL;if(${'s_point15_argument'} !== null) ${'s_point15_argument'}->setColumnType('number');
if(isset($args->s_sender_srl)) {
${'s_sender_srl16_argument'} = new ConditionArgument('s_sender_srl', $args->s_sender_srl, 'equal');
${'s_sender_srl16_argument'}->checkFilter('number');
${'s_sender_srl16_argument'}->createConditionValue();
if(!${'s_sender_srl16_argument'}->isValid()) return ${'s_sender_srl16_argument'}->getErrorMessage();
} else
${'s_sender_srl16_argument'} = NULL;if(${'s_sender_srl16_argument'} !== null) ${'s_sender_srl16_argument'}->setColumnType('number');
if(isset($args->s_receive_srl)) {
${'s_receive_srl17_argument'} = new ConditionArgument('s_receive_srl', $args->s_receive_srl, 'equal');
${'s_receive_srl17_argument'}->checkFilter('number');
${'s_receive_srl17_argument'}->createConditionValue();
if(!${'s_receive_srl17_argument'}->isValid()) return ${'s_receive_srl17_argument'}->getErrorMessage();
} else
${'s_receive_srl17_argument'} = NULL;if(${'s_receive_srl17_argument'} !== null) ${'s_receive_srl17_argument'}->setColumnType('number');
if(isset($args->s_point)) {
${'s_point18_argument'} = new ConditionArgument('s_point', $args->s_point, 'less');
${'s_point18_argument'}->checkFilter('number');
${'s_point18_argument'}->createConditionValue();
if(!${'s_point18_argument'}->isValid()) return ${'s_point18_argument'}->getErrorMessage();
} else
${'s_point18_argument'} = NULL;if(${'s_point18_argument'} !== null) ${'s_point18_argument'}->setColumnType('number');

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
${'sort_index19_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

${'sort_order20_argument'} = new SortArgument('sort_order20', $args->sort_order);
${'sort_order20_argument'}->ensureDefaultValue('asc');
if(!${'sort_order20_argument'}->isValid()) return ${'sort_order20_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_iconshop_log`', '`iconshop_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$s_category_srl7_argument,"equal")
,new ConditionWithArgument('substr(`regdate`,1,8)',$s_regdate8_argument,"equal", 'and')
,new ConditionWithArgument('substr(`regdate`,1,8)',$s_regdate_more9_argument,"more", 'and')
,new ConditionWithArgument('substr(`regdate`,1,8)',$s_regdate_less10_argument,"less", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`content`',$s_content11_argument,"like")
,new ConditionWithArgument('`ipaddress`',$s_ipaddress12_argument,"like", 'or')
,new ConditionWithArgument('`data_srl`',$s_data_srl13_argument,"equal", 'or')
,new ConditionWithArgument('`icon_srl`',$s_icon_srl14_argument,"equal", 'or')
,new ConditionWithArgument('`point`',$s_point15_argument,"equal", 'or')
,new ConditionWithArgument('`sender_srl`',$s_sender_srl16_argument,"equal", 'or')
,new ConditionWithArgument('`receive_srl`',$s_receive_srl17_argument,"equal", 'or')
,new ConditionWithArgument('`point`',$s_point18_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index19_argument'}, $sort_order20_argument)
));
$query->setLimit(new Limit(${'list_count23_argument'}, ${'page21_argument'}, ${'page_count22_argument'}));
return $query; ?>