<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateAuthMail");
$query->setAction("update");
$query->setPriority("");

${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl3_argument'}->checkFilter('number');
${'member_srl3_argument'}->checkNotNull();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'auth_key4_argument'} = new Argument('auth_key', $args->{'auth_key'});
${'auth_key4_argument'}->checkNotNull();
if(!${'auth_key4_argument'}->isValid()) return ${'auth_key4_argument'}->getErrorMessage();
if(${'auth_key4_argument'} !== null) ${'auth_key4_argument'}->setColumnType('varchar');

${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->checkFilter('number');
${'member_srl5_argument'}->checkNotNull();
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl3_argument'})
,new UpdateExpression('`auth_key`', ${'auth_key4_argument'})
,new UpdateExpressionWithoutArgument('`regdate`', "'".date("YmdHis")."'")
));
$query->setTables(array(
new Table('`xe_member_auth_mail`', '`member_auth_mail`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>