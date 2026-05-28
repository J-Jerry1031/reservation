<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("countMovedMembers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id2_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id2_argument'}->createConditionValue();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
} else
${'user_id2_argument'} = NULL;if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address3_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address3_argument'}->createConditionValue();
if(!${'email_address3_argument'}->isValid()) return ${'email_address3_argument'}->getErrorMessage();
} else
${'email_address3_argument'} = NULL;if(${'email_address3_argument'} !== null) ${'email_address3_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name4_argument'} = new ConditionArgument('user_name', $args->user_name, 'equal');
${'user_name4_argument'}->createConditionValue();
if(!${'user_name4_argument'}->isValid()) return ${'user_name4_argument'}->getErrorMessage();
} else
${'user_name4_argument'} = NULL;if(${'user_name4_argument'} !== null) ${'user_name4_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name5_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name5_argument'}->createConditionValue();
if(!${'nick_name5_argument'}->isValid()) return ${'nick_name5_argument'}->getErrorMessage();
} else
${'nick_name5_argument'} = NULL;if(${'nick_name5_argument'} !== null) ${'nick_name5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member_expired`', '`member_expired`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`user_id`',$user_id2_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address3_argument,"equal", 'and')
,new ConditionWithArgument('`user_name`',$user_name4_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>