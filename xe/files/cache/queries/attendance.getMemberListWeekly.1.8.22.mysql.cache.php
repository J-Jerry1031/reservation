<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberListWeekly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday1_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday1_argument'}->createConditionValue();
if(!${'monday1_argument'}->isValid()) return ${'monday1_argument'}->getErrorMessage();
} else
${'monday1_argument'} = NULL;if(${'monday1_argument'} !== null) ${'monday1_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday2_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday2_argument'}->createConditionValue();
if(!${'sunday2_argument'}->isValid()) return ${'sunday2_argument'}->getErrorMessage();
} else
${'sunday2_argument'} = NULL;if(${'sunday2_argument'} !== null) ${'sunday2_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name3_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name3_argument'}->createConditionValue();
if(!${'s_nick_name3_argument'}->isValid()) return ${'s_nick_name3_argument'}->getErrorMessage();
} else
${'s_nick_name3_argument'} = NULL;if(${'s_nick_name3_argument'} !== null) ${'s_nick_name3_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name4_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name4_argument'}->createConditionValue();
if(!${'s_user_name4_argument'}->isValid()) return ${'s_user_name4_argument'}->getErrorMessage();
} else
${'s_user_name4_argument'} = NULL;if(${'s_user_name4_argument'} !== null) ${'s_user_name4_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id5_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id5_argument'}->createConditionValue();
if(!${'s_user_id5_argument'}->isValid()) return ${'s_user_id5_argument'}->getErrorMessage();
} else
${'s_user_id5_argument'} = NULL;if(${'s_user_id5_argument'} !== null) ${'s_user_id5_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address6_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address6_argument'}->createConditionValue();
if(!${'s_email_address6_argument'}->isValid()) return ${'s_email_address6_argument'}->getErrorMessage();
} else
${'s_email_address6_argument'} = NULL;if(${'s_email_address6_argument'} !== null) ${'s_email_address6_argument'}->setColumnType('varchar');
if(isset($args->s_extra_vars)) {
${'s_extra_vars7_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars7_argument'}->createConditionValue();
if(!${'s_extra_vars7_argument'}->isValid()) return ${'s_extra_vars7_argument'}->getErrorMessage();
} else
${'s_extra_vars7_argument'} = NULL;if(${'s_extra_vars7_argument'} !== null) ${'s_extra_vars7_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate8_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate8_argument'}->createConditionValue();
if(!${'s_regdate8_argument'}->isValid()) return ${'s_regdate8_argument'}->getErrorMessage();
} else
${'s_regdate8_argument'} = NULL;if(${'s_regdate8_argument'} !== null) ${'s_regdate8_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login9_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login9_argument'}->createConditionValue();
if(!${'s_last_login9_argument'}->isValid()) return ${'s_last_login9_argument'}->getErrorMessage();
} else
${'s_last_login9_argument'} = NULL;if(${'s_last_login9_argument'} !== null) ${'s_last_login9_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more10_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more10_argument'}->createConditionValue();
if(!${'s_regdate_more10_argument'}->isValid()) return ${'s_regdate_more10_argument'}->getErrorMessage();
} else
${'s_regdate_more10_argument'} = NULL;if(${'s_regdate_more10_argument'} !== null) ${'s_regdate_more10_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less11_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less11_argument'}->createConditionValue();
if(!${'s_regdate_less11_argument'}->isValid()) return ${'s_regdate_less11_argument'}->getErrorMessage();
} else
${'s_regdate_less11_argument'} = NULL;if(${'s_regdate_less11_argument'} !== null) ${'s_regdate_less11_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more12_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more12_argument'}->createConditionValue();
if(!${'s_last_login_more12_argument'}->isValid()) return ${'s_last_login_more12_argument'}->getErrorMessage();
} else
${'s_last_login_more12_argument'} = NULL;if(${'s_last_login_more12_argument'} !== null) ${'s_last_login_more12_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less13_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less13_argument'}->createConditionValue();
if(!${'s_last_login_less13_argument'}->isValid()) return ${'s_last_login_less13_argument'}->getErrorMessage();
} else
${'s_last_login_less13_argument'} = NULL;if(${'s_last_login_less13_argument'} !== null) ${'s_last_login_less13_argument'}->setColumnType('date');

${'page15_argument'} = new Argument('page', $args->{'page'});
${'page15_argument'}->ensureDefaultValue('1');
if(!${'page15_argument'}->isValid()) return ${'page15_argument'}->getErrorMessage();

${'page_count16_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count16_argument'}->ensureDefaultValue('10');
if(!${'page_count16_argument'}->isValid()) return ${'page_count16_argument'}->getErrorMessage();

${'list_count17_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count17_argument'}->ensureDefaultValue('20');
if(!${'list_count17_argument'}->isValid()) return ${'list_count17_argument'}->getErrorMessage();

${'sort_index14_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index14_argument'}->ensureDefaultValue('attendance_weekly.weekly');
if(!${'sort_index14_argument'}->isValid()) return ${'sort_index14_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`attendance_weekly`.*')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`attendance_weekly`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`attendance_weekly`.`member_srl`',"equal")
,new ConditionWithArgument('`attendance_weekly`.`regdate`',$monday1_argument,"more", 'and')
,new ConditionWithArgument('`attendance_weekly`.`regdate`',$sunday2_argument,"less", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`nick_name`',$s_nick_name3_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_name`',$s_user_name4_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_id`',$s_user_id5_argument,"like", 'or')
,new ConditionWithArgument('`member`.`email_address`',$s_email_address6_argument,"like", 'or')
,new ConditionWithArgument('`member`.`extra_vars`',$s_extra_vars7_argument,"like", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate8_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login9_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more10_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less11_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more12_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less13_argument,"less", 'or')),'and')
));
$query->setGroups(array(
'`member`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index14_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count17_argument'}, ${'page15_argument'}, ${'page_count16_argument'}));
return $query; ?>