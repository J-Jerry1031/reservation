<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLog");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl12_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl12_argument'}->createConditionValue();
if(!${'site_srl12_argument'}->isValid()) return ${'site_srl12_argument'}->getErrorMessage();
} else
${'site_srl12_argument'} = NULL;if(${'site_srl12_argument'} !== null) ${'site_srl12_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
} else
${'module_srl13_argument'} = NULL;if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl14_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl14_argument'}->createConditionValue();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
} else
${'document_srl14_argument'} = NULL;if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');
if(isset($args->user_session_id)) {
${'user_session_id15_argument'} = new ConditionArgument('user_session_id', $args->user_session_id, 'equal');
${'user_session_id15_argument'}->createConditionValue();
if(!${'user_session_id15_argument'}->isValid()) return ${'user_session_id15_argument'}->getErrorMessage();
} else
${'user_session_id15_argument'} = NULL;if(${'user_session_id15_argument'} !== null) ${'user_session_id15_argument'}->setColumnType('varchar');
if(isset($args->user_referer)) {
${'user_referer16_argument'} = new ConditionArgument('user_referer', $args->user_referer, 'equal');
${'user_referer16_argument'}->createConditionValue();
if(!${'user_referer16_argument'}->isValid()) return ${'user_referer16_argument'}->getErrorMessage();
} else
${'user_referer16_argument'} = NULL;if(${'user_referer16_argument'} !== null) ${'user_referer16_argument'}->setColumnType('varchar');
if(isset($args->from)) {
${'from17_argument'} = new ConditionArgument('from', $args->from, 'more');
${'from17_argument'}->createConditionValue();
if(!${'from17_argument'}->isValid()) return ${'from17_argument'}->getErrorMessage();
} else
${'from17_argument'} = NULL;if(${'from17_argument'} !== null) ${'from17_argument'}->setColumnType('date');
if(isset($args->to)) {
${'to18_argument'} = new ConditionArgument('to', $args->to, 'less');
${'to18_argument'}->createConditionValue();
if(!${'to18_argument'}->isValid()) return ${'to18_argument'}->getErrorMessage();
} else
${'to18_argument'} = NULL;if(${'to18_argument'} !== null) ${'to18_argument'}->setColumnType('date');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_stats_log`', '`stats_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl12_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl13_argument,"equal", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl14_argument,"equal", 'and')
,new ConditionWithArgument('`user_session_id`',$user_session_id15_argument,"equal", 'and')
,new ConditionWithArgument('`user_referer`',$user_referer16_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$from17_argument,"more", 'and')
,new ConditionWithArgument('`insert_time`',$to18_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>