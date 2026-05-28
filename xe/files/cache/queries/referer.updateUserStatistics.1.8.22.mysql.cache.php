<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateUserStatistics");
$query->setAction("update");
$query->setPriority("");

${'count25_argument'} = new Argument('count', $args->{'count'});
${'count25_argument'}->setColumnOperation('+');
${'count25_argument'}->ensureDefaultValue(1);
if(!${'count25_argument'}->isValid()) return ${'count25_argument'}->getErrorMessage();
if(${'count25_argument'} !== null) ${'count25_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl26_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl26_argument'}->createConditionValue();
if(!${'member_srl26_argument'}->isValid()) return ${'member_srl26_argument'}->getErrorMessage();
} else
${'member_srl26_argument'} = NULL;if(${'member_srl26_argument'} !== null) ${'member_srl26_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count25_argument'})
));
$query->setTables(array(
new Table('`xe_referer_user_statistics`', '`referer_user_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>