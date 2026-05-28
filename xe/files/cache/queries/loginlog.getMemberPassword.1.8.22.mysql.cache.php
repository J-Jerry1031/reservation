<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberPassword");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_id)) {
${'user_id4_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id4_argument'}->createConditionValue();
if(!${'user_id4_argument'}->isValid()) return ${'user_id4_argument'}->getErrorMessage();
} else
${'user_id4_argument'} = NULL;if(${'user_id4_argument'} !== null) ${'user_id4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`user_id`')
,new SelectExpression('`email_address`')
,new SelectExpression('`member_srl`')
,new SelectExpression('`password`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>