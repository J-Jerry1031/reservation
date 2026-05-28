<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSession");
$query->setAction("insert");
$query->setPriority("");

${'session_key3_argument'} = new Argument('session_key', $args->{'session_key'});
${'session_key3_argument'}->checkNotNull();
if(!${'session_key3_argument'}->isValid()) return ${'session_key3_argument'}->getErrorMessage();
if(${'session_key3_argument'} !== null) ${'session_key3_argument'}->setColumnType('varchar');

${'member_srl4_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->ensureDefaultValue('0');
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');
if(isset($args->expired)) {
${'expired5_argument'} = new Argument('expired', $args->{'expired'});
if(!${'expired5_argument'}->isValid()) return ${'expired5_argument'}->getErrorMessage();
} else
${'expired5_argument'} = NULL;if(${'expired5_argument'} !== null) ${'expired5_argument'}->setColumnType('date');
if(isset($args->val)) {
${'val6_argument'} = new Argument('val', $args->{'val'});
if(!${'val6_argument'}->isValid()) return ${'val6_argument'}->getErrorMessage();
} else
${'val6_argument'} = NULL;if(${'val6_argument'} !== null) ${'val6_argument'}->setColumnType('bigtext');

${'ipaddress7_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress7_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress7_argument'}->isValid()) return ${'ipaddress7_argument'}->getErrorMessage();
if(${'ipaddress7_argument'} !== null) ${'ipaddress7_argument'}->setColumnType('varchar');

${'last_update8_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update8_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update8_argument'}->isValid()) return ${'last_update8_argument'}->getErrorMessage();
if(${'last_update8_argument'} !== null) ${'last_update8_argument'}->setColumnType('date');
if(isset($args->cur_mid)) {
${'cur_mid9_argument'} = new Argument('cur_mid', $args->{'cur_mid'});
if(!${'cur_mid9_argument'}->isValid()) return ${'cur_mid9_argument'}->getErrorMessage();
} else
${'cur_mid9_argument'} = NULL;if(${'cur_mid9_argument'} !== null) ${'cur_mid9_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`session_key`', ${'session_key3_argument'})
,new InsertExpression('`member_srl`', ${'member_srl4_argument'})
,new InsertExpression('`expired`', ${'expired5_argument'})
,new InsertExpression('`val`', ${'val6_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress7_argument'})
,new InsertExpression('`last_update`', ${'last_update8_argument'})
,new InsertExpression('`cur_mid`', ${'cur_mid9_argument'})
));
$query->setTables(array(
new Table('`xe_session`', '`session`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>