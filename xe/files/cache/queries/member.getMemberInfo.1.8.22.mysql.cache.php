<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfo");
$query->setAction("select");
$query->setPriority("");

${'user_id5_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id5_argument'}->checkNotNull();
${'user_id5_argument'}->createConditionValue();
if(!${'user_id5_argument'}->isValid()) return ${'user_id5_argument'}->getErrorMessage();
if(${'user_id5_argument'} !== null) ${'user_id5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>