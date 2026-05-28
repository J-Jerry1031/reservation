<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPointsendLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl12_argument'} = new Argument('log_srl', $args->{'log_srl'});
${'log_srl12_argument'}->checkFilter('number');
${'log_srl12_argument'}->ensureDefaultValue('getNextSequence()');
if(!${'log_srl12_argument'}->isValid()) return ${'log_srl12_argument'}->getErrorMessage();
if(${'log_srl12_argument'} !== null) ${'log_srl12_argument'}->setColumnType('number');

${'sender_srl13_argument'} = new Argument('sender_srl', $args->{'sender_srl'});
${'sender_srl13_argument'}->checkFilter('number');
${'sender_srl13_argument'}->checkNotNull();
if(!${'sender_srl13_argument'}->isValid()) return ${'sender_srl13_argument'}->getErrorMessage();
if(${'sender_srl13_argument'} !== null) ${'sender_srl13_argument'}->setColumnType('number');

${'receiver_srl14_argument'} = new Argument('receiver_srl', $args->{'receiver_srl'});
${'receiver_srl14_argument'}->checkFilter('number');
${'receiver_srl14_argument'}->checkNotNull();
if(!${'receiver_srl14_argument'}->isValid()) return ${'receiver_srl14_argument'}->getErrorMessage();
if(${'receiver_srl14_argument'} !== null) ${'receiver_srl14_argument'}->setColumnType('number');

${'ipaddress15_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress15_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress15_argument'}->isValid()) return ${'ipaddress15_argument'}->getErrorMessage();
if(${'ipaddress15_argument'} !== null) ${'ipaddress15_argument'}->setColumnType('varchar');

${'point16_argument'} = new Argument('point', $args->{'point'});
${'point16_argument'}->checkFilter('number');
${'point16_argument'}->checkNotNull();
if(!${'point16_argument'}->isValid()) return ${'point16_argument'}->getErrorMessage();
if(${'point16_argument'} !== null) ${'point16_argument'}->setColumnType('number');
if(isset($args->comment)) {
${'comment17_argument'} = new Argument('comment', $args->{'comment'});
if(!${'comment17_argument'}->isValid()) return ${'comment17_argument'}->getErrorMessage();
} else
${'comment17_argument'} = NULL;if(${'comment17_argument'} !== null) ${'comment17_argument'}->setColumnType('text');

${'regdate18_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate18_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl12_argument'})
,new InsertExpression('`sender_srl`', ${'sender_srl13_argument'})
,new InsertExpression('`receiver_srl`', ${'receiver_srl14_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress15_argument'})
,new InsertExpression('`point`', ${'point16_argument'})
,new InsertExpression('`comment`', ${'comment17_argument'})
,new InsertExpression('`regdate`', ${'regdate18_argument'})
));
$query->setTables(array(
new Table('`xe_pointsend_log`', '`pointsend_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>