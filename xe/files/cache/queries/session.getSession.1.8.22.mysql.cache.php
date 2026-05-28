<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSession");
$query->setAction("select");
$query->setPriority("");

${'session_key3_argument'} = new ConditionArgument('session_key', $args->session_key, 'equal');
${'session_key3_argument'}->checkNotNull();
${'session_key3_argument'}->createConditionValue();
if(!${'session_key3_argument'}->isValid()) return ${'session_key3_argument'}->getErrorMessage();
if(${'session_key3_argument'} !== null) ${'session_key3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_session`', '`session`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`session_key`',$session_key3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>