<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("countExpiredMembers");
$query->setAction("select");
$query->setPriority("");

${'is_admin1_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin1_argument'}->ensureDefaultValue('N');
${'is_admin1_argument'}->createConditionValue();
if(!${'is_admin1_argument'}->isValid()) return ${'is_admin1_argument'}->getErrorMessage();
if(${'is_admin1_argument'} !== null) ${'is_admin1_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id3_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id3_argument'}->createConditionValue();
if(!${'user_id3_argument'}->isValid()) return ${'user_id3_argument'}->getErrorMessage();
} else
${'user_id3_argument'} = NULL;if(${'user_id3_argument'} !== null) ${'user_id3_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address4_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address4_argument'}->createConditionValue();
if(!${'email_address4_argument'}->isValid()) return ${'email_address4_argument'}->getErrorMessage();
} else
${'email_address4_argument'} = NULL;if(${'email_address4_argument'} !== null) ${'email_address4_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name5_argument'} = new ConditionArgument('user_name', $args->user_name, 'equal');
${'user_name5_argument'}->createConditionValue();
if(!${'user_name5_argument'}->isValid()) return ${'user_name5_argument'}->getErrorMessage();
} else
${'user_name5_argument'} = NULL;if(${'user_name5_argument'} !== null) ${'user_name5_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name6_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name6_argument'}->createConditionValue();
if(!${'nick_name6_argument'}->isValid()) return ${'nick_name6_argument'}->getErrorMessage();
} else
${'nick_name6_argument'} = NULL;if(${'nick_name6_argument'} !== null) ${'nick_name6_argument'}->setColumnType('varchar');
if(isset($args->threshold)) {
${'threshold7_argument'} = new ConditionArgument('threshold', $args->threshold, 'less');
${'threshold7_argument'}->createConditionValue();
if(!${'threshold7_argument'}->isValid()) return ${'threshold7_argument'}->getErrorMessage();
} else
${'threshold7_argument'} = NULL;if(${'threshold7_argument'} !== null) ${'threshold7_argument'}->setColumnType('date');
if(isset($args->threshold)) {
${'threshold8_argument'} = new ConditionArgument('threshold', $args->threshold, 'less');
${'threshold8_argument'}->createConditionValue();
if(!${'threshold8_argument'}->isValid()) return ${'threshold8_argument'}->getErrorMessage();
} else
${'threshold8_argument'} = NULL;if(${'threshold8_argument'} !== null) ${'threshold8_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new JoinTable('`xe_member_expired_exceptions`', '`exc`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`exc`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`exc`.`member_srl`','``',"null")
,new ConditionWithArgument('`is_admin`',$is_admin1_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`user_id`',$user_id3_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address4_argument,"equal", 'and')
,new ConditionWithArgument('`user_name`',$user_name5_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name6_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$threshold7_argument,"less")
,new ConditionWithoutArgument('`regdate`','``',"null", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_login`',$threshold8_argument,"less")
,new ConditionWithoutArgument('`last_login`','``',"null", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>