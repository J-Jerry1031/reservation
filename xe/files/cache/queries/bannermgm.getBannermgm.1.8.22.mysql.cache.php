<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getBannermgm");
$query->setAction("select");
$query->setPriority("");
if(isset($args->bannermgm_srl)) {
${'bannermgm_srl4_argument'} = new ConditionArgument('bannermgm_srl', $args->bannermgm_srl, 'equal');
${'bannermgm_srl4_argument'}->createConditionValue();
if(!${'bannermgm_srl4_argument'}->isValid()) return ${'bannermgm_srl4_argument'}->getErrorMessage();
} else
${'bannermgm_srl4_argument'} = NULL;if(${'bannermgm_srl4_argument'} !== null) ${'bannermgm_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_bannermgm`', '`bannermgm`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`bannermgm_srl`',$bannermgm_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>