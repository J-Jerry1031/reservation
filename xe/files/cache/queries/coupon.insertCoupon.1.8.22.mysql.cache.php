<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCoupon");
$query->setAction("insert");
$query->setPriority("");

${'coupon_srl3_argument'} = new Argument('coupon_srl', $args->{'coupon_srl'});
${'coupon_srl3_argument'}->checkFilter('number');
${'coupon_srl3_argument'}->checkNotNull();
if(!${'coupon_srl3_argument'}->isValid()) return ${'coupon_srl3_argument'}->getErrorMessage();
if(${'coupon_srl3_argument'} !== null) ${'coupon_srl3_argument'}->setColumnType('number');

${'member_srl4_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->ensureDefaultValue('0');
${'member_srl4_argument'}->checkNotNull();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

${'title5_argument'} = new Argument('title', $args->{'title'});
${'title5_argument'}->checkNotNull();
if(!${'title5_argument'}->isValid()) return ${'title5_argument'}->getErrorMessage();
if(${'title5_argument'} !== null) ${'title5_argument'}->setColumnType('varchar');

${'code6_argument'} = new Argument('code', $args->{'code'});
${'code6_argument'}->checkNotNull();
if(!${'code6_argument'}->isValid()) return ${'code6_argument'}->getErrorMessage();
if(${'code6_argument'} !== null) ${'code6_argument'}->setColumnType('varchar');

${'point7_argument'} = new Argument('point', $args->{'point'});
${'point7_argument'}->checkFilter('number');
${'point7_argument'}->ensureDefaultValue('0');
${'point7_argument'}->checkNotNull();
if(!${'point7_argument'}->isValid()) return ${'point7_argument'}->getErrorMessage();
if(${'point7_argument'} !== null) ${'point7_argument'}->setColumnType('number');

${'limit8_argument'} = new Argument('limit', $args->{'limit'});
${'limit8_argument'}->checkFilter('number');
${'limit8_argument'}->ensureDefaultValue('0');
${'limit8_argument'}->checkNotNull();
if(!${'limit8_argument'}->isValid()) return ${'limit8_argument'}->getErrorMessage();
if(${'limit8_argument'} !== null) ${'limit8_argument'}->setColumnType('number');

${'regdate9_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate9_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate9_argument'}->isValid()) return ${'regdate9_argument'}->getErrorMessage();
if(${'regdate9_argument'} !== null) ${'regdate9_argument'}->setColumnType('date');
if(isset($args->expire_date)) {
${'expire_date10_argument'} = new Argument('expire_date', $args->{'expire_date'});
${'expire_date10_argument'}->checkFilter('number');
if(!${'expire_date10_argument'}->isValid()) return ${'expire_date10_argument'}->getErrorMessage();
} else
${'expire_date10_argument'} = NULL;if(${'expire_date10_argument'} !== null) ${'expire_date10_argument'}->setColumnType('date');
if(isset($args->extra_vars)) {
${'extra_vars11_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars11_argument'}->isValid()) return ${'extra_vars11_argument'}->getErrorMessage();
} else
${'extra_vars11_argument'} = NULL;if(${'extra_vars11_argument'} !== null) ${'extra_vars11_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`coupon_srl`', ${'coupon_srl3_argument'})
,new InsertExpression('`member_srl`', ${'member_srl4_argument'})
,new InsertExpression('`title`', ${'title5_argument'})
,new InsertExpression('`code`', ${'code6_argument'})
,new InsertExpression('`point`', ${'point7_argument'})
,new InsertExpression('`limit`', ${'limit8_argument'})
,new InsertExpression('`regdate`', ${'regdate9_argument'})
,new InsertExpression('`expire_date`', ${'expire_date10_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars11_argument'})
));
$query->setTables(array(
new Table('`xe_coupon`', '`coupon`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>