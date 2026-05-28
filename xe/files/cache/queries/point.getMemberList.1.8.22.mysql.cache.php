<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin1_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin1_argument'}->createConditionValue();
if(!${'is_admin1_argument'}->isValid()) return ${'is_admin1_argument'}->getErrorMessage();
} else
${'is_admin1_argument'} = NULL;if(${'is_admin1_argument'} !== null) ${'is_admin1_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied2_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied2_argument'}->createConditionValue();
if(!${'is_denied2_argument'}->isValid()) return ${'is_denied2_argument'}->getErrorMessage();
} else
${'is_denied2_argument'} = NULL;if(${'is_denied2_argument'} !== null) ${'is_denied2_argument'}->setColumnType('char');
if(isset($args->s_user_id)) {
${'s_user_id3_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id3_argument'}->createConditionValue();
if(!${'s_user_id3_argument'}->isValid()) return ${'s_user_id3_argument'}->getErrorMessage();
} else
${'s_user_id3_argument'} = NULL;if(${'s_user_id3_argument'} !== null) ${'s_user_id3_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name4_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name4_argument'}->createConditionValue();
if(!${'s_user_name4_argument'}->isValid()) return ${'s_user_name4_argument'}->getErrorMessage();
} else
${'s_user_name4_argument'} = NULL;if(${'s_user_name4_argument'} !== null) ${'s_user_name4_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name5_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name5_argument'}->createConditionValue();
if(!${'s_nick_name5_argument'}->isValid()) return ${'s_nick_name5_argument'}->getErrorMessage();
} else
${'s_nick_name5_argument'} = NULL;if(${'s_nick_name5_argument'} !== null) ${'s_nick_name5_argument'}->setColumnType('varchar');
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

${'page11_argument'} = new Argument('page', $args->{'page'});
${'page11_argument'}->ensureDefaultValue('1');
if(!${'page11_argument'}->isValid()) return ${'page11_argument'}->getErrorMessage();

${'page_count12_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count12_argument'}->ensureDefaultValue('10');
if(!${'page_count12_argument'}->isValid()) return ${'page_count12_argument'}->getErrorMessage();

${'list_count13_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count13_argument'}->ensureDefaultValue('20');
if(!${'list_count13_argument'}->isValid()) return ${'list_count13_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('point');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member`.*')
,new SelectExpression('`point`.`point`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`point`.`member_srl`',"equal")
,new ConditionWithArgument('`is_admin`',$is_admin1_argument,"equal", 'and')
,new ConditionWithArgument('`denied`',$is_denied2_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id3_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name4_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name5_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address6_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars7_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate8_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login9_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count13_argument'}, ${'page11_argument'}, ${'page_count12_argument'}));
return $query; ?>