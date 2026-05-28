<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteIssue");
$query->setAction("delete");
$query->setPriority("");

${'target_srl6_argument'} = new ConditionArgument('target_srl', $args->target_srl, 'equal');
${'target_srl6_argument'}->checkNotNull();
${'target_srl6_argument'}->createConditionValue();
if(!${'target_srl6_argument'}->isValid()) return ${'target_srl6_argument'}->getErrorMessage();
if(${'target_srl6_argument'} !== null) ${'target_srl6_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_issues`', '`issues`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`target_srl`',$target_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>