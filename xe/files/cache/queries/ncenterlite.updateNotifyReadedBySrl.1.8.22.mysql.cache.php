<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateNotifyReadedBySrl");
$query->setAction("update");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'srl2_argument'} = new ConditionArgument('srl', $args->srl, 'equal');
${'srl2_argument'}->checkFilter('number');
${'srl2_argument'}->checkNotNull();
${'srl2_argument'}->createConditionValue();
if(!${'srl2_argument'}->isValid()) return ${'srl2_argument'}->getErrorMessage();
if(${'srl2_argument'} !== null) ${'srl2_argument'}->setColumnType('number');
if(isset($args->type)) {
${'type3_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type3_argument'}->createConditionValue();
if(!${'type3_argument'}->isValid()) return ${'type3_argument'}->getErrorMessage();
} else
${'type3_argument'} = NULL;if(${'type3_argument'} !== null) ${'type3_argument'}->setColumnType('char');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`readed`', "'Y'")
));
$query->setTables(array(
new Table('`xe_ncenterlite_notify`', '`ncenterlite_notify`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`srl`',$srl2_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>