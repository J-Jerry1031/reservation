<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getReceivedMessages");
$query->setAction("select");
$query->setPriority("");

${'member_srl10_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'notequal');
${'member_srl10_argument'}->checkFilter('number');
${'member_srl10_argument'}->checkNotNull();
${'member_srl10_argument'}->createConditionValue();
if(!${'member_srl10_argument'}->isValid()) return ${'member_srl10_argument'}->getErrorMessage();
if(${'member_srl10_argument'} !== null) ${'member_srl10_argument'}->setColumnType('number');

${'member_srl11_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'notequal');
${'member_srl11_argument'}->checkFilter('number');
${'member_srl11_argument'}->checkNotNull();
${'member_srl11_argument'}->createConditionValue();
if(!${'member_srl11_argument'}->isValid()) return ${'member_srl11_argument'}->getErrorMessage();
if(${'member_srl11_argument'} !== null) ${'member_srl11_argument'}->setColumnType('number');

${'message_type12_argument'} = new ConditionArgument('message_type', $args->message_type, 'equal');
${'message_type12_argument'}->ensureDefaultValue('R');
${'message_type12_argument'}->createConditionValue();
if(!${'message_type12_argument'}->isValid()) return ${'message_type12_argument'}->getErrorMessage();
if(${'message_type12_argument'} !== null) ${'message_type12_argument'}->setColumnType('char');
if(isset($args->regdate)) {
${'regdate13_argument'} = new ConditionArgument('regdate', $args->regdate, 'below');
${'regdate13_argument'}->createConditionValue();
if(!${'regdate13_argument'}->isValid()) return ${'regdate13_argument'}->getErrorMessage();
} else
${'regdate13_argument'} = NULL;if(${'regdate13_argument'} !== null) ${'regdate13_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('`message_srl`')
));
$query->setTables(array(
new Table('`xe_member_message`', '`member_message`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`receiver_srl`',$member_srl10_argument,"notequal")
,new ConditionWithArgument('`sender_srl`',$member_srl11_argument,"notequal", 'and')
,new ConditionWithArgument('`message_type`',$message_type12_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate13_argument,"below", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>