<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberListYearly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->year)) {
${'year1_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year1_argument'}->createConditionValue();
if(!${'year1_argument'}->isValid()) return ${'year1_argument'}->getErrorMessage();
} else
${'year1_argument'} = NULL;if(${'year1_argument'} !== null) ${'year1_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name2_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name2_argument'}->createConditionValue();
if(!${'s_nick_name2_argument'}->isValid()) return ${'s_nick_name2_argument'}->getErrorMessage();
} else
${'s_nick_name2_argument'} = NULL;if(${'s_nick_name2_argument'} !== null) ${'s_nick_name2_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name3_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name3_argument'}->createConditionValue();
if(!${'s_user_name3_argument'}->isValid()) return ${'s_user_name3_argument'}->getErrorMessage();
} else
${'s_user_name3_argument'} = NULL;if(${'s_user_name3_argument'} !== null) ${'s_user_name3_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id4_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id4_argument'}->createConditionValue();
if(!${'s_user_id4_argument'}->isValid()) return ${'s_user_id4_argument'}->getErrorMessage();
} else
${'s_user_id4_argument'} = NULL;if(${'s_user_id4_argument'} !== null) ${'s_user_id4_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address5_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address5_argument'}->createConditionValue();
if(!${'s_email_address5_argument'}->isValid()) return ${'s_email_address5_argument'}->getErrorMessage();
} else
${'s_email_address5_argument'} = NULL;if(${'s_email_address5_argument'} !== null) ${'s_email_address5_argument'}->setColumnType('varchar');
if(isset($args->s_extra_vars)) {
${'s_extra_vars6_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars6_argument'}->createConditionValue();
if(!${'s_extra_vars6_argument'}->isValid()) return ${'s_extra_vars6_argument'}->getErrorMessage();
} else
${'s_extra_vars6_argument'} = NULL;if(${'s_extra_vars6_argument'} !== null) ${'s_extra_vars6_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate7_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate7_argument'}->createConditionValue();
if(!${'s_regdate7_argument'}->isValid()) return ${'s_regdate7_argument'}->getErrorMessage();
} else
${'s_regdate7_argument'} = NULL;if(${'s_regdate7_argument'} !== null) ${'s_regdate7_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login8_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login8_argument'}->createConditionValue();
if(!${'s_last_login8_argument'}->isValid()) return ${'s_last_login8_argument'}->getErrorMessage();
} else
${'s_last_login8_argument'} = NULL;if(${'s_last_login8_argument'} !== null) ${'s_last_login8_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more9_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more9_argument'}->createConditionValue();
if(!${'s_regdate_more9_argument'}->isValid()) return ${'s_regdate_more9_argument'}->getErrorMessage();
} else
${'s_regdate_more9_argument'} = NULL;if(${'s_regdate_more9_argument'} !== null) ${'s_regdate_more9_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less10_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less10_argument'}->createConditionValue();
if(!${'s_regdate_less10_argument'}->isValid()) return ${'s_regdate_less10_argument'}->getErrorMessage();
} else
${'s_regdate_less10_argument'} = NULL;if(${'s_regdate_less10_argument'} !== null) ${'s_regdate_less10_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more11_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more11_argument'}->createConditionValue();
if(!${'s_last_login_more11_argument'}->isValid()) return ${'s_last_login_more11_argument'}->getErrorMessage();
} else
${'s_last_login_more11_argument'} = NULL;if(${'s_last_login_more11_argument'} !== null) ${'s_last_login_more11_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less12_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less12_argument'}->createConditionValue();
if(!${'s_last_login_less12_argument'}->isValid()) return ${'s_last_login_less12_argument'}->getErrorMessage();
} else
${'s_last_login_less12_argument'} = NULL;if(${'s_last_login_less12_argument'} !== null) ${'s_last_login_less12_argument'}->setColumnType('date');

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('10');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('attendance_yearly.yearly');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`attendance_yearly`.*')
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`attendance_yearly`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`attendance_yearly`.`member_srl`',"equal")
,new ConditionWithArgument('`attendance_yearly`.`regdate`',$year1_argument,"like_prefix", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`nick_name`',$s_nick_name2_argument,"like")
,new ConditionWithArgument('`member`.`user_name`',$s_user_name3_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_id`',$s_user_id4_argument,"like", 'or')
,new ConditionWithArgument('`member`.`email_address`',$s_email_address5_argument,"like", 'or')
,new ConditionWithArgument('`member`.`extra_vars`',$s_extra_vars6_argument,"like", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate7_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login8_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more9_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less10_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more11_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less12_argument,"less", 'or')),'and')
));
$query->setGroups(array(
'`member`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>