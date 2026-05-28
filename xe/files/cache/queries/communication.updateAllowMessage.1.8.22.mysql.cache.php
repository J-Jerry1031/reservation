<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateAllowMessage");
$query->setAction("update");
$query->setPriority("");

${'allow_message1_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message1_argument'}->ensureDefaultValue('Y');
if(!${'allow_message1_argument'}->isValid()) return ${'allow_message1_argument'}->getErrorMessage();
if(${'allow_message1_argument'} !== null) ${'allow_message1_argument'}->setColumnType('char');

${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`allow_message`', ${'allow_message1_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>