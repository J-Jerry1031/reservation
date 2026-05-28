<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin51_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin51_argument'}->ensureDefaultValue('.');
${'skin51_argument'}->createConditionValue();
if(!${'skin51_argument'}->isValid()) return ${'skin51_argument'}->getErrorMessage();
if(${'skin51_argument'} !== null) ${'skin51_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin51_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>