<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'site_srl19_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl19_argument'}->checkNotNull();
if(!${'site_srl19_argument'}->isValid()) return ${'site_srl19_argument'}->getErrorMessage();
if(${'site_srl19_argument'} !== null) ${'site_srl19_argument'}->setColumnType('number');

${'module_srl20_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl20_argument'}->checkNotNull();
if(!${'module_srl20_argument'}->isValid()) return ${'module_srl20_argument'}->getErrorMessage();
if(${'module_srl20_argument'} !== null) ${'module_srl20_argument'}->setColumnType('number');

${'document_srl21_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl21_argument'}->checkNotNull();
if(!${'document_srl21_argument'}->isValid()) return ${'document_srl21_argument'}->getErrorMessage();
if(${'document_srl21_argument'} !== null) ${'document_srl21_argument'}->setColumnType('number');

${'user_session_id22_argument'} = new Argument('user_session_id', $args->{'user_session_id'});
${'user_session_id22_argument'}->checkNotNull();
if(!${'user_session_id22_argument'}->isValid()) return ${'user_session_id22_argument'}->getErrorMessage();
if(${'user_session_id22_argument'} !== null) ${'user_session_id22_argument'}->setColumnType('varchar');

${'user_agent23_argument'} = new Argument('user_agent', $args->{'user_agent'});
${'user_agent23_argument'}->checkNotNull();
if(!${'user_agent23_argument'}->isValid()) return ${'user_agent23_argument'}->getErrorMessage();
if(${'user_agent23_argument'} !== null) ${'user_agent23_argument'}->setColumnType('varchar');

${'user_referer24_argument'} = new Argument('user_referer', $args->{'user_referer'});
${'user_referer24_argument'}->checkNotNull();
if(!${'user_referer24_argument'}->isValid()) return ${'user_referer24_argument'}->getErrorMessage();
if(${'user_referer24_argument'} !== null) ${'user_referer24_argument'}->setColumnType('varchar');

${'user_ip_address25_argument'} = new Argument('user_ip_address', $args->{'user_ip_address'});
${'user_ip_address25_argument'}->checkNotNull();
if(!${'user_ip_address25_argument'}->isValid()) return ${'user_ip_address25_argument'}->getErrorMessage();
if(${'user_ip_address25_argument'} !== null) ${'user_ip_address25_argument'}->setColumnType('varchar');

${'user_now26_argument'} = new Argument('user_now', $args->{'user_now'});
${'user_now26_argument'}->checkNotNull();
if(!${'user_now26_argument'}->isValid()) return ${'user_now26_argument'}->getErrorMessage();
if(${'user_now26_argument'} !== null) ${'user_now26_argument'}->setColumnType('varchar');

${'is_bot27_argument'} = new Argument('is_bot', $args->{'is_bot'});
${'is_bot27_argument'}->ensureDefaultValue('0');
if(!${'is_bot27_argument'}->isValid()) return ${'is_bot27_argument'}->getErrorMessage();
if(${'is_bot27_argument'} !== null) ${'is_bot27_argument'}->setColumnType('number');

${'is_mobile28_argument'} = new Argument('is_mobile', $args->{'is_mobile'});
${'is_mobile28_argument'}->ensureDefaultValue('0');
if(!${'is_mobile28_argument'}->isValid()) return ${'is_mobile28_argument'}->getErrorMessage();
if(${'is_mobile28_argument'} !== null) ${'is_mobile28_argument'}->setColumnType('number');

${'insert_time29_argument'} = new Argument('insert_time', $args->{'insert_time'});
${'insert_time29_argument'}->checkNotNull();
if(!${'insert_time29_argument'}->isValid()) return ${'insert_time29_argument'}->getErrorMessage();
if(${'insert_time29_argument'} !== null) ${'insert_time29_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl19_argument'})
,new InsertExpression('`module_srl`', ${'module_srl20_argument'})
,new InsertExpression('`document_srl`', ${'document_srl21_argument'})
,new InsertExpression('`user_session_id`', ${'user_session_id22_argument'})
,new InsertExpression('`user_agent`', ${'user_agent23_argument'})
,new InsertExpression('`user_referer`', ${'user_referer24_argument'})
,new InsertExpression('`user_ip_address`', ${'user_ip_address25_argument'})
,new InsertExpression('`user_now`', ${'user_now26_argument'})
,new InsertExpression('`is_bot`', ${'is_bot27_argument'})
,new InsertExpression('`is_mobile`', ${'is_mobile28_argument'})
,new InsertExpression('`insert_time`', ${'insert_time29_argument'})
));
$query->setTables(array(
new Table('`xe_stats_log`', '`stats_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>