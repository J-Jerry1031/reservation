<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSession");
$query->setAction("delete");
$query->setPriority("");

${'session_key1_argument'} = new ConditionArgument('session_key', $args->session_key, 'equal');
${'session_key1_argument'}->checkNotNull();
${'session_key1_argument'}->createConditionValue();
if(!${'session_key1_argument'}->isValid()) return ${'session_key1_argument'}->getErrorMessage();
if(${'session_key1_argument'} !== null) ${'session_key1_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_session`', '`session`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`session_key`',$session_key1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>