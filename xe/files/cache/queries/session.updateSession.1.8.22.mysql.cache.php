<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSession");
$query->setAction("update");
$query->setPriority("");

${'member_srl22_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl22_argument'}->checkFilter('number');
${'member_srl22_argument'}->ensureDefaultValue('0');
if(!${'member_srl22_argument'}->isValid()) return ${'member_srl22_argument'}->getErrorMessage();
if(${'member_srl22_argument'} !== null) ${'member_srl22_argument'}->setColumnType('number');
if(isset($args->expired)) {
${'expired23_argument'} = new Argument('expired', $args->{'expired'});
if(!${'expired23_argument'}->isValid()) return ${'expired23_argument'}->getErrorMessage();
} else
${'expired23_argument'} = NULL;if(${'expired23_argument'} !== null) ${'expired23_argument'}->setColumnType('date');

${'val24_argument'} = new Argument('val', $args->{'val'});
${'val24_argument'}->checkNotNull();
if(!${'val24_argument'}->isValid()) return ${'val24_argument'}->getErrorMessage();
if(${'val24_argument'} !== null) ${'val24_argument'}->setColumnType('bigtext');
if(isset($args->cur_mid)) {
${'cur_mid25_argument'} = new Argument('cur_mid', $args->{'cur_mid'});
if(!${'cur_mid25_argument'}->isValid()) return ${'cur_mid25_argument'}->getErrorMessage();
} else
${'cur_mid25_argument'} = NULL;if(${'cur_mid25_argument'} !== null) ${'cur_mid25_argument'}->setColumnType('varchar');

${'session_key26_argument'} = new ConditionArgument('session_key', $args->session_key, 'equal');
${'session_key26_argument'}->checkNotNull();
${'session_key26_argument'}->createConditionValue();
if(!${'session_key26_argument'}->isValid()) return ${'session_key26_argument'}->getErrorMessage();
if(${'session_key26_argument'} !== null) ${'session_key26_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl22_argument'})
,new UpdateExpression('`expired`', ${'expired23_argument'})
,new UpdateExpression('`val`', ${'val24_argument'})
,new UpdateExpressionWithoutArgument('`ipaddress`', "'".$_SERVER['REMOTE_ADDR']."'")
,new UpdateExpressionWithoutArgument('`last_update`', "'".date("YmdHis")."'")
,new UpdateExpression('`cur_mid`', ${'cur_mid25_argument'})
));
$query->setTables(array(
new Table('`xe_session`', '`session`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`session_key`',$session_key26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>