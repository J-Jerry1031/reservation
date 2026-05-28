<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin4_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin4_argument'}->createConditionValue();
if(!${'is_admin4_argument'}->isValid()) return ${'is_admin4_argument'}->getErrorMessage();
} else
${'is_admin4_argument'} = NULL;if(${'is_admin4_argument'} !== null) ${'is_admin4_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied5_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied5_argument'}->createConditionValue();
if(!${'is_denied5_argument'}->isValid()) return ${'is_denied5_argument'}->getErrorMessage();
} else
${'is_denied5_argument'} = NULL;if(${'is_denied5_argument'} !== null) ${'is_denied5_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls6_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls6_argument'}->createConditionValue();
if(!${'member_srls6_argument'}->isValid()) return ${'member_srls6_argument'}->getErrorMessage();
} else
${'member_srls6_argument'} = NULL;if(${'member_srls6_argument'} !== null) ${'member_srls6_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id7_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id7_argument'}->createConditionValue();
if(!${'s_user_id7_argument'}->isValid()) return ${'s_user_id7_argument'}->getErrorMessage();
} else
${'s_user_id7_argument'} = NULL;if(${'s_user_id7_argument'} !== null) ${'s_user_id7_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name8_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name8_argument'}->createConditionValue();
if(!${'s_user_name8_argument'}->isValid()) return ${'s_user_name8_argument'}->getErrorMessage();
} else
${'s_user_name8_argument'} = NULL;if(${'s_user_name8_argument'} !== null) ${'s_user_name8_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name9_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name9_argument'}->createConditionValue();
if(!${'s_nick_name9_argument'}->isValid()) return ${'s_nick_name9_argument'}->getErrorMessage();
} else
${'s_nick_name9_argument'} = NULL;if(${'s_nick_name9_argument'} !== null) ${'s_nick_name9_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name10_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name10_argument'}->createConditionValue();
if(!${'html_nick_name10_argument'}->isValid()) return ${'html_nick_name10_argument'}->getErrorMessage();
} else
${'html_nick_name10_argument'} = NULL;if(${'html_nick_name10_argument'} !== null) ${'html_nick_name10_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address11_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address11_argument'}->createConditionValue();
if(!${'s_email_address11_argument'}->isValid()) return ${'s_email_address11_argument'}->getErrorMessage();
} else
${'s_email_address11_argument'} = NULL;if(${'s_email_address11_argument'} !== null) ${'s_email_address11_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday12_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday12_argument'}->createConditionValue();
if(!${'s_birthday12_argument'}->isValid()) return ${'s_birthday12_argument'}->getErrorMessage();
} else
${'s_birthday12_argument'} = NULL;if(${'s_birthday12_argument'} !== null) ${'s_birthday12_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars13_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars13_argument'}->createConditionValue();
if(!${'s_extra_vars13_argument'}->isValid()) return ${'s_extra_vars13_argument'}->getErrorMessage();
} else
${'s_extra_vars13_argument'} = NULL;if(${'s_extra_vars13_argument'} !== null) ${'s_extra_vars13_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate14_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate14_argument'}->createConditionValue();
if(!${'s_regdate14_argument'}->isValid()) return ${'s_regdate14_argument'}->getErrorMessage();
} else
${'s_regdate14_argument'} = NULL;if(${'s_regdate14_argument'} !== null) ${'s_regdate14_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login15_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login15_argument'}->createConditionValue();
if(!${'s_last_login15_argument'}->isValid()) return ${'s_last_login15_argument'}->getErrorMessage();
} else
${'s_last_login15_argument'} = NULL;if(${'s_last_login15_argument'} !== null) ${'s_last_login15_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more16_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more16_argument'}->createConditionValue();
if(!${'s_regdate_more16_argument'}->isValid()) return ${'s_regdate_more16_argument'}->getErrorMessage();
} else
${'s_regdate_more16_argument'} = NULL;if(${'s_regdate_more16_argument'} !== null) ${'s_regdate_more16_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less17_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less17_argument'}->createConditionValue();
if(!${'s_regdate_less17_argument'}->isValid()) return ${'s_regdate_less17_argument'}->getErrorMessage();
} else
${'s_regdate_less17_argument'} = NULL;if(${'s_regdate_less17_argument'} !== null) ${'s_regdate_less17_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more18_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more18_argument'}->createConditionValue();
if(!${'s_last_login_more18_argument'}->isValid()) return ${'s_last_login_more18_argument'}->getErrorMessage();
} else
${'s_last_login_more18_argument'} = NULL;if(${'s_last_login_more18_argument'} !== null) ${'s_last_login_more18_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less19_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less19_argument'}->createConditionValue();
if(!${'s_last_login_less19_argument'}->isValid()) return ${'s_last_login_less19_argument'}->getErrorMessage();
} else
${'s_last_login_less19_argument'} = NULL;if(${'s_last_login_less19_argument'} !== null) ${'s_last_login_less19_argument'}->setColumnType('date');

${'page22_argument'} = new Argument('page', $args->{'page'});
${'page22_argument'}->ensureDefaultValue('1');
if(!${'page22_argument'}->isValid()) return ${'page22_argument'}->getErrorMessage();

${'page_count23_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count23_argument'}->ensureDefaultValue('10');
if(!${'page_count23_argument'}->isValid()) return ${'page_count23_argument'}->getErrorMessage();

${'list_count24_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count24_argument'}->ensureDefaultValue('20');
if(!${'list_count24_argument'}->isValid()) return ${'list_count24_argument'}->getErrorMessage();

${'sort_index20_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index20_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index20_argument'}->isValid()) return ${'sort_index20_argument'}->getErrorMessage();

${'sort_order21_argument'} = new SortArgument('sort_order21', $args->sort_order);
${'sort_order21_argument'}->ensureDefaultValue('asc');
if(!${'sort_order21_argument'}->isValid()) return ${'sort_order21_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin4_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied5_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls6_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id7_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name8_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name9_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name10_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address11_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday12_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars13_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate14_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login15_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more16_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less17_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more18_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less19_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index20_argument'}, $sort_order21_argument)
));
$query->setLimit(new Limit(${'list_count24_argument'}, ${'page22_argument'}, ${'page_count23_argument'}));
return $query; ?>