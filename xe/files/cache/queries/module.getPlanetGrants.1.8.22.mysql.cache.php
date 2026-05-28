<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPlanetGrants");
$query->setAction("select");
$query->setPriority("");

${'sort_index1_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index1_argument'}->ensureDefaultValue('module_grants.group_srl');
if(!${'sort_index1_argument'}->isValid()) return ${'sort_index1_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_grants`.*')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_module_grants`', '`module_grants`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'planet'","equal")
,new ConditionWithoutArgument('`modules`.`skin`',"'notnull'","notnull", 'and')
,new ConditionWithoutArgument('`modules`.`module_srl`','`module_grants`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index1_argument'}, "asc")
));
$query->setLimit();
return $query; ?>