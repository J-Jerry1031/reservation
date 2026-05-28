<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPageStatistics");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->ref_mid)) {
${'ref_mid5_argument'} = new Argument('ref_mid', $args->{'ref_mid'});
if(!${'ref_mid5_argument'}->isValid()) return ${'ref_mid5_argument'}->getErrorMessage();
} else
${'ref_mid5_argument'} = NULL;if(${'ref_mid5_argument'} !== null) ${'ref_mid5_argument'}->setColumnType('varchar');
if(isset($args->ref_document_srl)) {
${'ref_document_srl6_argument'} = new Argument('ref_document_srl', $args->{'ref_document_srl'});
if(!${'ref_document_srl6_argument'}->isValid()) return ${'ref_document_srl6_argument'}->getErrorMessage();
} else
${'ref_document_srl6_argument'} = NULL;if(${'ref_document_srl6_argument'} !== null) ${'ref_document_srl6_argument'}->setColumnType('number');

${'count7_argument'} = new Argument('count', $args->{'count'});
${'count7_argument'}->ensureDefaultValue('1');
if(!${'count7_argument'}->isValid()) return ${'count7_argument'}->getErrorMessage();
if(${'count7_argument'} !== null) ${'count7_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`ref_mid`', ${'ref_mid5_argument'})
,new InsertExpression('`ref_document_srl`', ${'ref_document_srl6_argument'})
,new InsertExpression('`count`', ${'count7_argument'})
));
$query->setTables(array(
new Table('`xe_referer_page_statistics`', '`referer_page_statistics`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>