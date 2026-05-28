<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteHistories");
$query->setAction("delete");
$query->setPriority("");

${'target_srl7_argument'} = new ConditionArgument('target_srl', $args->target_srl, 'equal');
${'target_srl7_argument'}->checkNotNull();
${'target_srl7_argument'}->createConditionValue();
if(!${'target_srl7_argument'}->isValid()) return ${'target_srl7_argument'}->getErrorMessage();
if(${'target_srl7_argument'} !== null) ${'target_srl7_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_issues_history`', '`issues_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`target_srl`',$target_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>