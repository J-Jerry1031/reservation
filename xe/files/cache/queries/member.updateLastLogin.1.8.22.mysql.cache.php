<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl7_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl7_argument'}->checkFilter('number');
${'member_srl7_argument'}->checkNotNull();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

${'last_login8_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login8_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_login8_argument'}->checkNotNull();
if(!${'last_login8_argument'}->isValid()) return ${'last_login8_argument'}->getErrorMessage();
if(${'last_login8_argument'} !== null) ${'last_login8_argument'}->setColumnType('date');

${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->checkNotNull();
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl7_argument'})
,new UpdateExpression('`last_login`', ${'last_login8_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>