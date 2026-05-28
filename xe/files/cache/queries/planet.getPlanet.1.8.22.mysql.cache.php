<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPlanet");
$query->setAction("select");
$query->setPriority("");

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.*')
,new SelectExpression('`planet`.`member_srl`', '`member_srl`')
,new SelectExpression('`planet`.`planet_title`', '`planet_title`')
,new SelectExpression('`planet`.`close_notice`', '`close_notice`')
,new SelectExpression('`planet`.`colorset`', '`colorset`')
,new SelectExpression('`member`.`nick_name`')
,new SelectExpression('`member`.`user_name`')
,new SelectExpression('`member`.`user_id`')
,new SelectExpression('`planet`.`me2day_uid`')
,new SelectExpression('`planet`.`me2day_ukey`')
,new SelectExpression('`planet`.`me2day_autopush`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_planet`', '`planet`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srl2_argument,"equal")
,new ConditionWithoutArgument('`modules`.`module_srl`','`planet`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`planet`.`member_srl`','`member`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>