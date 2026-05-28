<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteNotifyByMemberSrl");
$query->setAction("delete");
$query->setPriority("");

${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->checkNotNull();
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');
if(isset($args->readed)) {
${'readed10_argument'} = new ConditionArgument('readed', $args->readed, 'equal');
${'readed10_argument'}->createConditionValue();
if(!${'readed10_argument'}->isValid()) return ${'readed10_argument'}->getErrorMessage();
} else
${'readed10_argument'} = NULL;if(${'readed10_argument'} !== null) ${'readed10_argument'}->setColumnType('char');

$query->setTables(array(
new Table('`xe_ncenterlite_notify`', '`ncenterlite_notify`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal")
,new ConditionWithArgument('`readed`',$readed10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>