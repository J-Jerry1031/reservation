<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDeniedIP");
$query->setAction("insert");
$query->setPriority("");

${'ipaddress1_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress1_argument'}->checkNotNull();
if(!${'ipaddress1_argument'}->isValid()) return ${'ipaddress1_argument'}->getErrorMessage();
if(${'ipaddress1_argument'} !== null) ${'ipaddress1_argument'}->setColumnType('varchar');
if(isset($args->description)) {
${'description2_argument'} = new Argument('description', $args->{'description'});
if(!${'description2_argument'}->isValid()) return ${'description2_argument'}->getErrorMessage();
} else
${'description2_argument'} = NULL;if(${'description2_argument'} !== null) ${'description2_argument'}->setColumnType('varchar');

${'regdate3_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate3_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`ipaddress`', ${'ipaddress1_argument'})
,new InsertExpression('`description`', ${'description2_argument'})
,new InsertExpression('`regdate`', ${'regdate3_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_denied_ip`', '`spamfilter_denied_ip`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>