<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginlog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl1_argument'} = new Argument('log_srl', $args->{'log_srl'});
${'log_srl1_argument'}->checkFilter('number');
${'log_srl1_argument'}->checkNotNull();
if(!${'log_srl1_argument'}->isValid()) return ${'log_srl1_argument'}->getErrorMessage();
if(${'log_srl1_argument'} !== null) ${'log_srl1_argument'}->setColumnType('number');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'ipaddress3_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress3_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'is_succeed4_argument'} = new Argument('is_succeed', $args->{'is_succeed'});
${'is_succeed4_argument'}->checkNotNull();
if(!${'is_succeed4_argument'}->isValid()) return ${'is_succeed4_argument'}->getErrorMessage();
if(${'is_succeed4_argument'} !== null) ${'is_succeed4_argument'}->setColumnType('char');

${'platform5_argument'} = new Argument('platform', $args->{'platform'});
${'platform5_argument'}->ensureDefaultValue('Unknown');
if(!${'platform5_argument'}->isValid()) return ${'platform5_argument'}->getErrorMessage();
if(${'platform5_argument'} !== null) ${'platform5_argument'}->setColumnType('varchar');

${'browser6_argument'} = new Argument('browser', $args->{'browser'});
${'browser6_argument'}->ensureDefaultValue('Unknown');
if(!${'browser6_argument'}->isValid()) return ${'browser6_argument'}->getErrorMessage();
if(${'browser6_argument'} !== null) ${'browser6_argument'}->setColumnType('varchar');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');
if(isset($args->user_id)) {
${'user_id8_argument'} = new Argument('user_id', $args->{'user_id'});
if(!${'user_id8_argument'}->isValid()) return ${'user_id8_argument'}->getErrorMessage();
} else
${'user_id8_argument'} = NULL;if(${'user_id8_argument'} !== null) ${'user_id8_argument'}->setColumnType('number');
if(isset($args->email_address)) {
${'email_address9_argument'} = new Argument('email_address', $args->{'email_address'});
if(!${'email_address9_argument'}->isValid()) return ${'email_address9_argument'}->getErrorMessage();
} else
${'email_address9_argument'} = NULL;if(${'email_address9_argument'} !== null) ${'email_address9_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress3_argument'})
,new InsertExpression('`is_succeed`', ${'is_succeed4_argument'})
,new InsertExpression('`platform`', ${'platform5_argument'})
,new InsertExpression('`browser`', ${'browser6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
,new InsertExpression('`user_id`', ${'user_id8_argument'})
,new InsertExpression('`email_address`', ${'email_address9_argument'})
));
$query->setTables(array(
new Table('`xe_member_loginlog`', '`member_loginlog`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>