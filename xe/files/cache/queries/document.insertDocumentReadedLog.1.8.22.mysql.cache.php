<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentReadedLog");
$query->setAction("insert");
$query->setPriority("");

${'document_srl1_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->ensureDefaultValue('0');
${'document_srl1_argument'}->checkNotNull();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->ensureDefaultValue('0');
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'ipaddress3_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress3_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'regdate4_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress3_argument'})
,new InsertExpression('`regdate`', ${'regdate4_argument'})
));
$query->setTables(array(
new Table('`xe_document_readed_log`', '`document_readed_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>