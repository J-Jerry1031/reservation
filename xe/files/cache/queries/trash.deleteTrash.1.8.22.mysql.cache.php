<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTrash");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->trashSrl)) {
${'trashSrl1_argument'} = new ConditionArgument('trashSrl', $args->trashSrl, 'equal');
${'trashSrl1_argument'}->checkFilter('number');
${'trashSrl1_argument'}->createConditionValue();
if(!${'trashSrl1_argument'}->isValid()) return ${'trashSrl1_argument'}->getErrorMessage();
} else
${'trashSrl1_argument'} = NULL;if(${'trashSrl1_argument'} !== null) ${'trashSrl1_argument'}->setColumnType('number');
if(isset($args->trashSrls)) {
${'trashSrls2_argument'} = new ConditionArgument('trashSrls', $args->trashSrls, 'in');
${'trashSrls2_argument'}->checkFilter('number');
${'trashSrls2_argument'}->createConditionValue();
if(!${'trashSrls2_argument'}->isValid()) return ${'trashSrls2_argument'}->getErrorMessage();
} else
${'trashSrls2_argument'} = NULL;if(${'trashSrls2_argument'} !== null) ${'trashSrls2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_trash`', '`trash`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trash_srl`',$trashSrl1_argument,"equal")
,new ConditionWithArgument('`trash_srl`',$trashSrls2_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>