<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCouponUsedLogCount");
$query->setAction("select");
$query->setPriority("");

${'coupon_srl1_argument'} = new ConditionArgument('coupon_srl', $args->coupon_srl, 'equal');
${'coupon_srl1_argument'}->checkFilter('number');
${'coupon_srl1_argument'}->checkNotNull();
${'coupon_srl1_argument'}->createConditionValue();
if(!${'coupon_srl1_argument'}->isValid()) return ${'coupon_srl1_argument'}->getErrorMessage();
if(${'coupon_srl1_argument'} !== null) ${'coupon_srl1_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_coupon_used_log`', '`coupon_used_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`coupon_srl`',$coupon_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>