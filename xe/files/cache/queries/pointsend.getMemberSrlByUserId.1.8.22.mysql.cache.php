<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberSrlByUserId");
$query->setAction("select");
$query->setPriority("");

${'user_id1_argument'} = new ConditionArgument('user_id', $args->user_id, 'in');
${'user_id1_argument'}->checkNotNull();
${'user_id1_argument'}->createConditionValue();
if(!${'user_id1_argument'}->isValid()) return ${'user_id1_argument'}->getErrorMessage();
if(${'user_id1_argument'} !== null) ${'user_id1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>