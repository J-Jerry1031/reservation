<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentsSameNick");
$query->setAction("update");
$query->setPriority("");

${'nick_name31_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name31_argument'}->checkNotNull();
if(!${'nick_name31_argument'}->isValid()) return ${'nick_name31_argument'}->getErrorMessage();
if(${'nick_name31_argument'} !== null) ${'nick_name31_argument'}->setColumnType('varchar');

${'member_srl32_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl32_argument'}->checkFilter('number');
${'member_srl32_argument'}->checkNotNull();
${'member_srl32_argument'}->createConditionValue();
if(!${'member_srl32_argument'}->isValid()) return ${'member_srl32_argument'}->getErrorMessage();
if(${'member_srl32_argument'} !== null) ${'member_srl32_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`nick_name`', ${'nick_name31_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl32_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>