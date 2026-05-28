<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberIconList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_data_srl)) {
${'s_data_srl1_argument'} = new ConditionArgument('s_data_srl', $args->s_data_srl, 'equal');
${'s_data_srl1_argument'}->checkFilter('number');
${'s_data_srl1_argument'}->createConditionValue();
if(!${'s_data_srl1_argument'}->isValid()) return ${'s_data_srl1_argument'}->getErrorMessage();
} else
${'s_data_srl1_argument'} = NULL;if(${'s_data_srl1_argument'} !== null) ${'s_data_srl1_argument'}->setColumnType('number');
if(isset($args->s_icon_srl)) {
${'s_icon_srl2_argument'} = new ConditionArgument('s_icon_srl', $args->s_icon_srl, 'equal');
${'s_icon_srl2_argument'}->checkFilter('number');
${'s_icon_srl2_argument'}->createConditionValue();
if(!${'s_icon_srl2_argument'}->isValid()) return ${'s_icon_srl2_argument'}->getErrorMessage();
} else
${'s_icon_srl2_argument'} = NULL;if(${'s_icon_srl2_argument'} !== null) ${'s_icon_srl2_argument'}->setColumnType('number');
if(isset($args->s_member_srl)) {
${'s_member_srl3_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl3_argument'}->checkFilter('number');
${'s_member_srl3_argument'}->createConditionValue();
if(!${'s_member_srl3_argument'}->isValid()) return ${'s_member_srl3_argument'}->getErrorMessage();
} else
${'s_member_srl3_argument'} = NULL;if(${'s_member_srl3_argument'} !== null) ${'s_member_srl3_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id4_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id4_argument'}->createConditionValue();
if(!${'s_user_id4_argument'}->isValid()) return ${'s_user_id4_argument'}->getErrorMessage();
} else
${'s_user_id4_argument'} = NULL;if(${'s_user_id4_argument'} !== null) ${'s_user_id4_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name5_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name5_argument'}->createConditionValue();
if(!${'s_nick_name5_argument'}->isValid()) return ${'s_nick_name5_argument'}->getErrorMessage();
} else
${'s_nick_name5_argument'} = NULL;if(${'s_nick_name5_argument'} !== null) ${'s_nick_name5_argument'}->setColumnType('varchar');
if(isset($args->s_start_date)) {
${'s_start_date6_argument'} = new ConditionArgument('s_start_date', $args->s_start_date, 'equal');
${'s_start_date6_argument'}->createConditionValue();
if(!${'s_start_date6_argument'}->isValid()) return ${'s_start_date6_argument'}->getErrorMessage();
} else
${'s_start_date6_argument'} = NULL;if(${'s_start_date6_argument'} !== null) ${'s_start_date6_argument'}->setColumnType('date');
if(isset($args->s_start_date_less)) {
${'s_start_date_less7_argument'} = new ConditionArgument('s_start_date_less', $args->s_start_date_less, 'less');
${'s_start_date_less7_argument'}->createConditionValue();
if(!${'s_start_date_less7_argument'}->isValid()) return ${'s_start_date_less7_argument'}->getErrorMessage();
} else
${'s_start_date_less7_argument'} = NULL;if(${'s_start_date_less7_argument'} !== null) ${'s_start_date_less7_argument'}->setColumnType('date');
if(isset($args->s_start_date_more)) {
${'s_start_date_more8_argument'} = new ConditionArgument('s_start_date_more', $args->s_start_date_more, 'more');
${'s_start_date_more8_argument'}->createConditionValue();
if(!${'s_start_date_more8_argument'}->isValid()) return ${'s_start_date_more8_argument'}->getErrorMessage();
} else
${'s_start_date_more8_argument'} = NULL;if(${'s_start_date_more8_argument'} !== null) ${'s_start_date_more8_argument'}->setColumnType('date');
if(isset($args->s_end_date)) {
${'s_end_date9_argument'} = new ConditionArgument('s_end_date', $args->s_end_date, 'equal');
${'s_end_date9_argument'}->createConditionValue();
if(!${'s_end_date9_argument'}->isValid()) return ${'s_end_date9_argument'}->getErrorMessage();
} else
${'s_end_date9_argument'} = NULL;if(${'s_end_date9_argument'} !== null) ${'s_end_date9_argument'}->setColumnType('date');
if(isset($args->s_end_date_less)) {
${'s_end_date_less10_argument'} = new ConditionArgument('s_end_date_less', $args->s_end_date_less, 'less');
${'s_end_date_less10_argument'}->createConditionValue();
if(!${'s_end_date_less10_argument'}->isValid()) return ${'s_end_date_less10_argument'}->getErrorMessage();
} else
${'s_end_date_less10_argument'} = NULL;if(${'s_end_date_less10_argument'} !== null) ${'s_end_date_less10_argument'}->setColumnType('date');
if(isset($args->s_end_date_more)) {
${'s_end_date_more11_argument'} = new ConditionArgument('s_end_date_more', $args->s_end_date_more, 'more');
${'s_end_date_more11_argument'}->createConditionValue();
if(!${'s_end_date_more11_argument'}->isValid()) return ${'s_end_date_more11_argument'}->getErrorMessage();
} else
${'s_end_date_more11_argument'} = NULL;if(${'s_end_date_more11_argument'} !== null) ${'s_end_date_more11_argument'}->setColumnType('date');

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('10');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index12_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index12_argument'}->ensureDefaultValue('data_srl');
if(!${'sort_index12_argument'}->isValid()) return ${'sort_index12_argument'}->getErrorMessage();

${'sort_order13_argument'} = new SortArgument('sort_order13', $args->sort_order);
${'sort_order13_argument'}->ensureDefaultValue('asc');
if(!${'sort_order13_argument'}->isValid()) return ${'sort_order13_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_iconshop_member`', '`iconshop_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`data_srl`',$s_data_srl1_argument,"equal")
,new ConditionWithArgument('`icon_srl`',$s_icon_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$s_member_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`user_id`',$s_user_id4_argument,"like", 'and')
,new ConditionWithArgument('`nick_name`',$s_nick_name5_argument,"like", 'and')
,new ConditionWithArgument('`start_date`',$s_start_date6_argument,"equal", 'and')
,new ConditionWithArgument('`start_date`',$s_start_date_less7_argument,"less", 'and')
,new ConditionWithArgument('`start_date`',$s_start_date_more8_argument,"more", 'and')
,new ConditionWithArgument('`end_date`',$s_end_date9_argument,"equal", 'and')
,new ConditionWithArgument('`end_date`',$s_end_date_less10_argument,"less", 'and')
,new ConditionWithArgument('`end_date`',$s_end_date_more11_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index12_argument'}, $sort_order13_argument)
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>