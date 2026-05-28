<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMembersGroups");
$query->setAction("select");
$query->setPriority("");

${'site_srl6_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl6_argument'}->ensureDefaultValue('0');
${'site_srl6_argument'}->createConditionValue();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

${'member_srls7_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls7_argument'}->checkFilter('numbers');
${'member_srls7_argument'}->checkNotNull();
${'member_srls7_argument'}->createConditionValue();
if(!${'member_srls7_argument'}->isValid()) return ${'member_srls7_argument'}->getErrorMessage();
if(${'member_srls7_argument'} !== null) ${'member_srls7_argument'}->setColumnType('number');

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('a.group_srl');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`a`.`title`', '`title`')
,new SelectExpression('`a`.`group_srl`', '`group_srl`')
,new SelectExpression('`b`.`member_srl`', '`member_srl`')
));
$query->setTables(array(
new Table('`xe_member_group`', '`a`')
,new Table('`xe_member_group_member`', '`b`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`b`.`site_srl`',$site_srl6_argument,"equal")
,new ConditionWithoutArgument('`a`.`group_srl`','`b`.`group_srl`',"equal", 'and')
,new ConditionWithArgument('`b`.`member_srl`',$member_srls7_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit();
return $query; ?>