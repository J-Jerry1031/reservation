<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMessages");
$query->setAction("delete");
$query->setPriority("");

${'message_srl1_argument'} = new ConditionArgument('message_srl', $args->message_srl, 'in');
${'message_srl1_argument'}->checkFilter('number');
${'message_srl1_argument'}->checkNotNull();
${'message_srl1_argument'}->createConditionValue();
if(!${'message_srl1_argument'}->isValid()) return ${'message_srl1_argument'}->getErrorMessage();
if(${'message_srl1_argument'} !== null) ${'message_srl1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_member_message`', '`member_message`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`message_srl`',$message_srl1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>