<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMessageCount");
$query->setAction("select");
$query->setPriority("");

${'receiver_srl1_argument'} = new ConditionArgument('receiver_srl', $args->receiver_srl, 'equal');
${'receiver_srl1_argument'}->checkNotNull();
${'receiver_srl1_argument'}->createConditionValue();
if(!${'receiver_srl1_argument'}->isValid()) return ${'receiver_srl1_argument'}->getErrorMessage();
if(${'receiver_srl1_argument'} !== null) ${'receiver_srl1_argument'}->setColumnType('number');

${'readed2_argument'} = new ConditionArgument('readed', $args->readed, 'equal');
${'readed2_argument'}->ensureDefaultValue('N');
${'readed2_argument'}->checkNotNull();
${'readed2_argument'}->createConditionValue();
if(!${'readed2_argument'}->isValid()) return ${'readed2_argument'}->getErrorMessage();
if(${'readed2_argument'} !== null) ${'readed2_argument'}->setColumnType('char');

${'related_srl3_argument'} = new ConditionArgument('related_srl', $args->related_srl, 'equal');
${'related_srl3_argument'}->ensureDefaultValue('0');
${'related_srl3_argument'}->checkNotNull();
${'related_srl3_argument'}->createConditionValue();
if(!${'related_srl3_argument'}->isValid()) return ${'related_srl3_argument'}->getErrorMessage();
if(${'related_srl3_argument'} !== null) ${'related_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_message`', '`member_message`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_message`.`receiver_srl`',$receiver_srl1_argument,"equal")
,new ConditionWithArgument('`member_message`.`readed`',$readed2_argument,"equal", 'and')
,new ConditionWithoutArgument('`member_message`.`sender_srl`','`member`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`related_srl`',$related_srl3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>