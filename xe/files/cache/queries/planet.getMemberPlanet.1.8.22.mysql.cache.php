<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberPlanet");
$query->setAction("select");
$query->setPriority("");

${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->checkFilter('number');
${'member_srl3_argument'}->checkNotNull();
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

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
new ConditionWithArgument('`planet`.`member_srl`',$member_srl3_argument,"equal")
,new ConditionWithoutArgument('`modules`.`module_srl`','`planet`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`member`.`member_srl`','`planet`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>