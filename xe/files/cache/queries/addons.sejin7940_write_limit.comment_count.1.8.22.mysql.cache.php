<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("comment_count");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress2_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress2_argument'}->createConditionValue();
if(!${'ipaddress2_argument'}->isValid()) return ${'ipaddress2_argument'}->getErrorMessage();
} else
${'ipaddress2_argument'} = NULL;if(${'ipaddress2_argument'} !== null) ${'ipaddress2_argument'}->setColumnType('varchar');

${'limit_start3_argument'} = new ConditionArgument('limit_start', $args->limit_start, 'more');
${'limit_start3_argument'}->checkNotNull();
${'limit_start3_argument'}->createConditionValue();
if(!${'limit_start3_argument'}->isValid()) return ${'limit_start3_argument'}->getErrorMessage();
if(${'limit_start3_argument'} !== null) ${'limit_start3_argument'}->setColumnType('date');
if(isset($args->limit_module_srl)) {
${'limit_module_srl4_argument'} = new ConditionArgument('limit_module_srl', $args->limit_module_srl, 'in');
${'limit_module_srl4_argument'}->createConditionValue();
if(!${'limit_module_srl4_argument'}->isValid()) return ${'limit_module_srl4_argument'}->getErrorMessage();
} else
${'limit_module_srl4_argument'} = NULL;if(${'limit_module_srl4_argument'} !== null) ${'limit_module_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`comments`.`module_srl`','`modules`.`module_srl`',"equal")
,new ConditionWithoutArgument('`modules`.`module`',"'board'","equal", 'and')
,new ConditionWithArgument('`comments`.`member_srl`',$member_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`comments`.`ipaddress`',$ipaddress2_argument,"equal", 'and')
,new ConditionWithArgument('`comments`.`regdate`',$limit_start3_argument,"more", 'and')
,new ConditionWithArgument('`comments`.`module_srl`',$limit_module_srl4_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>