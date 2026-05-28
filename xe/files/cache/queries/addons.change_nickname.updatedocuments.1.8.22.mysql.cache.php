<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("minambonneung");
$query->setAction("update");
$query->setPriority("");

${'nick_name35_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name35_argument'}->checkNotNull();
if(!${'nick_name35_argument'}->isValid()) return ${'nick_name35_argument'}->getErrorMessage();
if(${'nick_name35_argument'} !== null) ${'nick_name35_argument'}->setColumnType('varchar');

${'member_srl36_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl36_argument'}->checkFilter('number');
${'member_srl36_argument'}->checkNotNull();
${'member_srl36_argument'}->createConditionValue();
if(!${'member_srl36_argument'}->isValid()) return ${'member_srl36_argument'}->getErrorMessage();
if(${'member_srl36_argument'} !== null) ${'member_srl36_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`nick_name`', ${'nick_name35_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl36_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>