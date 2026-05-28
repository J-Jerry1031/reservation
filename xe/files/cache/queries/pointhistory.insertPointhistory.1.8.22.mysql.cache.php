<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPointhistory");
$query->setAction("insert");
$query->setPriority("");

${'member_srl5_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl5_argument'}->checkFilter('number');
${'member_srl5_argument'}->checkNotNull();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

${'module_srl6_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->ensureDefaultValue('0');
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');

${'htype7_argument'} = new Argument('htype', $args->{'htype'});
${'htype7_argument'}->checkNotNull();
if(!${'htype7_argument'}->isValid()) return ${'htype7_argument'}->getErrorMessage();
if(${'htype7_argument'} !== null) ${'htype7_argument'}->setColumnType('char');
if(isset($args->point)) {
${'point8_argument'} = new Argument('point', $args->{'point'});
if(!${'point8_argument'}->isValid()) return ${'point8_argument'}->getErrorMessage();
} else
${'point8_argument'} = NULL;if(${'point8_argument'} !== null) ${'point8_argument'}->setColumnType('number');
if(isset($args->content)) {
${'content9_argument'} = new Argument('content', $args->{'content'});
if(!${'content9_argument'}->isValid()) return ${'content9_argument'}->getErrorMessage();
} else
${'content9_argument'} = NULL;if(${'content9_argument'} !== null) ${'content9_argument'}->setColumnType('text');
if(isset($args->act)) {
${'act10_argument'} = new Argument('act', $args->{'act'});
if(!${'act10_argument'}->isValid()) return ${'act10_argument'}->getErrorMessage();
} else
${'act10_argument'} = NULL;if(${'act10_argument'} !== null) ${'act10_argument'}->setColumnType('varchar');

${'ipaddress11_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress11_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress11_argument'}->isValid()) return ${'ipaddress11_argument'}->getErrorMessage();
if(${'ipaddress11_argument'} !== null) ${'ipaddress11_argument'}->setColumnType('varchar');

${'regdate12_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate12_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate12_argument'}->isValid()) return ${'regdate12_argument'}->getErrorMessage();
if(${'regdate12_argument'} !== null) ${'regdate12_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl5_argument'})
,new InsertExpression('`module_srl`', ${'module_srl6_argument'})
,new InsertExpression('`htype`', ${'htype7_argument'})
,new InsertExpression('`point`', ${'point8_argument'})
,new InsertExpression('`content`', ${'content9_argument'})
,new InsertExpression('`act`', ${'act10_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress11_argument'})
,new InsertExpression('`regdate`', ${'regdate12_argument'})
));
$query->setTables(array(
new Table('`xe_pointhistory`', '`pointhistory`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>