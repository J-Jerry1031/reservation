<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getReferer");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl7_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl7_argument'}->createConditionValue();
if(!${'site_srl7_argument'}->isValid()) return ${'site_srl7_argument'}->getErrorMessage();
} else
${'site_srl7_argument'} = NULL;if(${'site_srl7_argument'} !== null) ${'site_srl7_argument'}->setColumnType('number');
if(isset($args->referer)) {
${'referer8_argument'} = new ConditionArgument('referer', $args->referer, 'equal');
${'referer8_argument'}->createConditionValue();
if(!${'referer8_argument'}->isValid()) return ${'referer8_argument'}->getErrorMessage();
} else
${'referer8_argument'} = NULL;if(${'referer8_argument'} !== null) ${'referer8_argument'}->setColumnType('varchar');
if(isset($args->insert_time)) {
${'insert_time9_argument'} = new ConditionArgument('insert_time', $args->insert_time, 'equal');
${'insert_time9_argument'}->createConditionValue();
if(!${'insert_time9_argument'}->isValid()) return ${'insert_time9_argument'}->getErrorMessage();
} else
${'insert_time9_argument'} = NULL;if(${'insert_time9_argument'} !== null) ${'insert_time9_argument'}->setColumnType('date');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_stats_referer`', '`stats_referer`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`referer`',$referer8_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$insert_time9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>