<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress6_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress6_argument'}->createConditionValue();
if(!${'ipaddress6_argument'}->isValid()) return ${'ipaddress6_argument'}->getErrorMessage();
} else
${'ipaddress6_argument'} = NULL;if(${'ipaddress6_argument'} !== null) ${'ipaddress6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>