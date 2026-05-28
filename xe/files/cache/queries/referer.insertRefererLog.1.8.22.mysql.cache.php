<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertRefererLog");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->host)) {
${'host3_argument'} = new Argument('host', $args->{'host'});
if(!${'host3_argument'}->isValid()) return ${'host3_argument'}->getErrorMessage();
} else
${'host3_argument'} = NULL;if(${'host3_argument'} !== null) ${'host3_argument'}->setColumnType('varchar');
if(isset($args->remote)) {
${'remote4_argument'} = new Argument('remote', $args->{'remote'});
if(!${'remote4_argument'}->isValid()) return ${'remote4_argument'}->getErrorMessage();
} else
${'remote4_argument'} = NULL;if(${'remote4_argument'} !== null) ${'remote4_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url5_argument'} = new Argument('url', $args->{'url'});
if(!${'url5_argument'}->isValid()) return ${'url5_argument'}->getErrorMessage();
} else
${'url5_argument'} = NULL;if(${'url5_argument'} !== null) ${'url5_argument'}->setColumnType('varchar');
if(isset($args->uagent)) {
${'uagent6_argument'} = new Argument('uagent', $args->{'uagent'});
if(!${'uagent6_argument'}->isValid()) return ${'uagent6_argument'}->getErrorMessage();
} else
${'uagent6_argument'} = NULL;if(${'uagent6_argument'} !== null) ${'uagent6_argument'}->setColumnType('varchar');

${'count7_argument'} = new Argument('count', $args->{'count'});
${'count7_argument'}->ensureDefaultValue('1');
if(!${'count7_argument'}->isValid()) return ${'count7_argument'}->getErrorMessage();
if(${'count7_argument'} !== null) ${'count7_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl8_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
} else
${'member_srl8_argument'} = NULL;if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');
if(isset($args->request_uri)) {
${'request_uri9_argument'} = new Argument('request_uri', $args->{'request_uri'});
if(!${'request_uri9_argument'}->isValid()) return ${'request_uri9_argument'}->getErrorMessage();
} else
${'request_uri9_argument'} = NULL;if(${'request_uri9_argument'} !== null) ${'request_uri9_argument'}->setColumnType('varchar');
if(isset($args->ref_mid)) {
${'ref_mid10_argument'} = new Argument('ref_mid', $args->{'ref_mid'});
if(!${'ref_mid10_argument'}->isValid()) return ${'ref_mid10_argument'}->getErrorMessage();
} else
${'ref_mid10_argument'} = NULL;if(${'ref_mid10_argument'} !== null) ${'ref_mid10_argument'}->setColumnType('varchar');
if(isset($args->ref_document_srl)) {
${'ref_document_srl11_argument'} = new Argument('ref_document_srl', $args->{'ref_document_srl'});
if(!${'ref_document_srl11_argument'}->isValid()) return ${'ref_document_srl11_argument'}->getErrorMessage();
} else
${'ref_document_srl11_argument'} = NULL;if(${'ref_document_srl11_argument'} !== null) ${'ref_document_srl11_argument'}->setColumnType('number');
if(isset($args->country_code)) {
${'country_code12_argument'} = new Argument('country_code', $args->{'country_code'});
if(!${'country_code12_argument'}->isValid()) return ${'country_code12_argument'}->getErrorMessage();
} else
${'country_code12_argument'} = NULL;if(${'country_code12_argument'} !== null) ${'country_code12_argument'}->setColumnType('char');

${'regdate13_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate13_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate13_argument'}->checkNotNull();
if(!${'regdate13_argument'}->isValid()) return ${'regdate13_argument'}->getErrorMessage();
if(${'regdate13_argument'} !== null) ${'regdate13_argument'}->setColumnType('date');

${'regdate14_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate14_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate14_argument'}->checkNotNull();
if(!${'regdate14_argument'}->isValid()) return ${'regdate14_argument'}->getErrorMessage();
if(${'regdate14_argument'} !== null) ${'regdate14_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`host`', ${'host3_argument'})
,new InsertExpression('`remote`', ${'remote4_argument'})
,new InsertExpression('`url`', ${'url5_argument'})
,new InsertExpression('`uagent`', ${'uagent6_argument'})
,new InsertExpression('`count`', ${'count7_argument'})
,new InsertExpression('`member_srl`', ${'member_srl8_argument'})
,new InsertExpression('`request_uri`', ${'request_uri9_argument'})
,new InsertExpression('`ref_mid`', ${'ref_mid10_argument'})
,new InsertExpression('`ref_document_srl`', ${'ref_document_srl11_argument'})
,new InsertExpression('`country_code`', ${'country_code12_argument'})
,new InsertExpression('`regdate`', ${'regdate13_argument'})
,new InsertExpression('`regdate_last`', ${'regdate14_argument'})
));
$query->setTables(array(
new Table('`xe_referer_log`', '`referer_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>