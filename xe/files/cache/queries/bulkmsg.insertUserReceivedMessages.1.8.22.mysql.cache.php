<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertUserReceivedMessages");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl6_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->checkNotNull();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

${'member_srl7_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl7_argument'}->checkFilter('number');
${'member_srl7_argument'}->checkNotNull();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl6_argument'})
,new InsertExpression('`target_member_srl`', ${'member_srl7_argument'})
));
$query->setTables(array(
new Table('`xe_bulk_message_target`', '`bulk_message_target`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>