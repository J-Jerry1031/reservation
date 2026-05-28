<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTrash");
$query->setAction("select");
$query->setPriority("");

${'trashSrl1_argument'} = new ConditionArgument('trashSrl', $args->trashSrl, 'equal');
${'trashSrl1_argument'}->checkFilter('number');
${'trashSrl1_argument'}->checkNotNull();
${'trashSrl1_argument'}->createConditionValue();
if(!${'trashSrl1_argument'}->isValid()) return ${'trashSrl1_argument'}->getErrorMessage();
if(${'trashSrl1_argument'} !== null) ${'trashSrl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_trash`', '`trash`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trash_srl`',$trashSrl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>