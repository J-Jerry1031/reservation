<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCoupon");
$query->setAction("select");
$query->setPriority("");
if(isset($args->coupon_srl)) {
${'coupon_srl1_argument'} = new ConditionArgument('coupon_srl', $args->coupon_srl, 'equal');
${'coupon_srl1_argument'}->checkFilter('number');
${'coupon_srl1_argument'}->createConditionValue();
if(!${'coupon_srl1_argument'}->isValid()) return ${'coupon_srl1_argument'}->getErrorMessage();
} else
${'coupon_srl1_argument'} = NULL;if(${'coupon_srl1_argument'} !== null) ${'coupon_srl1_argument'}->setColumnType('number');
if(isset($args->code)) {
${'code2_argument'} = new ConditionArgument('code', $args->code, 'equal');
${'code2_argument'}->createConditionValue();
if(!${'code2_argument'}->isValid()) return ${'code2_argument'}->getErrorMessage();
} else
${'code2_argument'} = NULL;if(${'code2_argument'} !== null) ${'code2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_coupon`', '`coupon`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`coupon_srl`',$coupon_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`code`',$code2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>