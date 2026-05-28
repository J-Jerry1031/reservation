<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getYearlyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->yearly)) {
${'yearly10_argument'} = new ConditionArgument('yearly', $args->yearly, 'like_prefix');
${'yearly10_argument'}->createConditionValue();
if(!${'yearly10_argument'}->isValid()) return ${'yearly10_argument'}->getErrorMessage();
} else
${'yearly10_argument'} = NULL;if(${'yearly10_argument'} !== null) ${'yearly10_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl11_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl11_argument'}->createConditionValue();
if(!${'member_srl11_argument'}->isValid()) return ${'member_srl11_argument'}->getErrorMessage();
} else
${'member_srl11_argument'} = NULL;if(${'member_srl11_argument'} !== null) ${'member_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`yearly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$yearly10_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>