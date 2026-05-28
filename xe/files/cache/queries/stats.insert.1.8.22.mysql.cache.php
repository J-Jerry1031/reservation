<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insert");
$query->setAction("insert");
$query->setPriority("");

${'site_srl1_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl1_argument'}->checkNotNull();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'type2_argument'} = new Argument('type', $args->{'type'});
${'type2_argument'}->checkNotNull();
if(!${'type2_argument'}->isValid()) return ${'type2_argument'}->getErrorMessage();
if(${'type2_argument'} !== null) ${'type2_argument'}->setColumnType('varchar');

${'depth3_argument'} = new Argument('depth', $args->{'depth'});
${'depth3_argument'}->ensureDefaultValue('0');
if(!${'depth3_argument'}->isValid()) return ${'depth3_argument'}->getErrorMessage();
if(${'depth3_argument'} !== null) ${'depth3_argument'}->setColumnType('number');

${'count4_argument'} = new Argument('count', $args->{'count'});
${'count4_argument'}->ensureDefaultValue('0');
if(!${'count4_argument'}->isValid()) return ${'count4_argument'}->getErrorMessage();
if(${'count4_argument'} !== null) ${'count4_argument'}->setColumnType('number');

${'value5_argument'} = new Argument('value', $args->{'value'});
${'value5_argument'}->ensureDefaultValue('');
if(!${'value5_argument'}->isValid()) return ${'value5_argument'}->getErrorMessage();
if(${'value5_argument'} !== null) ${'value5_argument'}->setColumnType('varchar');

${'bot_count6_argument'} = new Argument('bot_count', $args->{'bot_count'});
${'bot_count6_argument'}->ensureDefaultValue('0');
if(!${'bot_count6_argument'}->isValid()) return ${'bot_count6_argument'}->getErrorMessage();
if(${'bot_count6_argument'} !== null) ${'bot_count6_argument'}->setColumnType('number');

${'mobile_count7_argument'} = new Argument('mobile_count', $args->{'mobile_count'});
${'mobile_count7_argument'}->ensureDefaultValue('0');
if(!${'mobile_count7_argument'}->isValid()) return ${'mobile_count7_argument'}->getErrorMessage();
if(${'mobile_count7_argument'} !== null) ${'mobile_count7_argument'}->setColumnType('number');

${'insert_time8_argument'} = new Argument('insert_time', $args->{'insert_time'});
${'insert_time8_argument'}->checkNotNull();
if(!${'insert_time8_argument'}->isValid()) return ${'insert_time8_argument'}->getErrorMessage();
if(${'insert_time8_argument'} !== null) ${'insert_time8_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl1_argument'})
,new InsertExpression('`type`', ${'type2_argument'})
,new InsertExpression('`depth`', ${'depth3_argument'})
,new InsertExpression('`count`', ${'count4_argument'})
,new InsertExpression('`value`', ${'value5_argument'})
,new InsertExpression('`bot_count`', ${'bot_count6_argument'})
,new InsertExpression('`mobile_count`', ${'mobile_count7_argument'})
,new InsertExpression('`insert_time`', ${'insert_time8_argument'})
));
$query->setTables(array(
new Table('`xe_stats`', '`stats`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>