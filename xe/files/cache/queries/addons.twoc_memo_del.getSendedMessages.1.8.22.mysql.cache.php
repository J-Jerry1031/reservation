<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSendedMessages");
$query->setAction("select");
$query->setPriority("");

${'member_srl14_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'notequal');
${'member_srl14_argument'}->checkFilter('number');
${'member_srl14_argument'}->checkNotNull();
${'member_srl14_argument'}->createConditionValue();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');

${'member_srl15_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'notequal');
${'member_srl15_argument'}->checkFilter('number');
${'member_srl15_argument'}->checkNotNull();
${'member_srl15_argument'}->createConditionValue();
if(!${'member_srl15_argument'}->isValid()) return ${'member_srl15_argument'}->getErrorMessage();
if(${'member_srl15_argument'} !== null) ${'member_srl15_argument'}->setColumnType('number');

${'message_type16_argument'} = new ConditionArgument('message_type', $args->message_type, 'equal');
${'message_type16_argument'}->ensureDefaultValue('S');
${'message_type16_argument'}->createConditionValue();
if(!${'message_type16_argument'}->isValid()) return ${'message_type16_argument'}->getErrorMessage();
if(${'message_type16_argument'} !== null) ${'message_type16_argument'}->setColumnType('char');
if(isset($args->regdate)) {
${'regdate17_argument'} = new ConditionArgument('regdate', $args->regdate, 'below');
${'regdate17_argument'}->createConditionValue();
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();
} else
${'regdate17_argument'} = NULL;if(${'regdate17_argument'} !== null) ${'regdate17_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('`message_srl`')
));
$query->setTables(array(
new Table('`xe_member_message`', '`member_message`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sender_srl`',$member_srl14_argument,"notequal")
,new ConditionWithArgument('`receiver_srl`',$member_srl15_argument,"notequal", 'and')
,new ConditionWithArgument('`message_type`',$message_type16_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate17_argument,"below", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>