<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("minambonneung_");
$query->setAction("update");
$query->setPriority("");

${'nick_name37_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name37_argument'}->checkNotNull();
if(!${'nick_name37_argument'}->isValid()) return ${'nick_name37_argument'}->getErrorMessage();
if(${'nick_name37_argument'} !== null) ${'nick_name37_argument'}->setColumnType('varchar');

${'member_srl38_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl38_argument'}->checkFilter('number');
${'member_srl38_argument'}->checkNotNull();
${'member_srl38_argument'}->createConditionValue();
if(!${'member_srl38_argument'}->isValid()) return ${'member_srl38_argument'}->getErrorMessage();
if(${'member_srl38_argument'} !== null) ${'member_srl38_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`nick_name`', ${'nick_name37_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl38_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>