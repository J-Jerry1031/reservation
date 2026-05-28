<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMemberGroup");
$query->setAction("delete");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->group_srl)) {
${'group_srl2_argument'} = new ConditionArgument('group_srl', $args->group_srl, 'in');
${'group_srl2_argument'}->checkFilter('number');
${'group_srl2_argument'}->createConditionValue();
if(!${'group_srl2_argument'}->isValid()) return ${'group_srl2_argument'}->getErrorMessage();
} else
${'group_srl2_argument'} = NULL;if(${'group_srl2_argument'} !== null) ${'group_srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_member_group_member`', '`member_group_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`group_srl`',$group_srl2_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>