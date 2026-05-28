<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("update");
$query->setAction("update");
$query->setPriority("");

${'count5_argument'} = new Argument('count', $args->{'count'});
${'count5_argument'}->setColumnOperation('+');
${'count5_argument'}->ensureDefaultValue(1);
if(!${'count5_argument'}->isValid()) return ${'count5_argument'}->getErrorMessage();
if(${'count5_argument'} !== null) ${'count5_argument'}->setColumnType('number');
if(isset($args->bot_count)) {
${'bot_count6_argument'} = new Argument('bot_count', $args->{'bot_count'});
if(!${'bot_count6_argument'}->isValid()) return ${'bot_count6_argument'}->getErrorMessage();
} else
${'bot_count6_argument'} = NULL;if(${'bot_count6_argument'} !== null) ${'bot_count6_argument'}->setColumnType('number');
if(isset($args->mobile_count)) {
${'mobile_count7_argument'} = new Argument('mobile_count', $args->{'mobile_count'});
if(!${'mobile_count7_argument'}->isValid()) return ${'mobile_count7_argument'}->getErrorMessage();
} else
${'mobile_count7_argument'} = NULL;if(${'mobile_count7_argument'} !== null) ${'mobile_count7_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl8_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl8_argument'}->createConditionValue();
if(!${'site_srl8_argument'}->isValid()) return ${'site_srl8_argument'}->getErrorMessage();
} else
${'site_srl8_argument'} = NULL;if(${'site_srl8_argument'} !== null) ${'site_srl8_argument'}->setColumnType('number');
if(isset($args->type)) {
${'type9_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type9_argument'}->createConditionValue();
if(!${'type9_argument'}->isValid()) return ${'type9_argument'}->getErrorMessage();
} else
${'type9_argument'} = NULL;if(${'type9_argument'} !== null) ${'type9_argument'}->setColumnType('varchar');
if(isset($args->value)) {
${'value10_argument'} = new ConditionArgument('value', $args->value, 'equal');
${'value10_argument'}->createConditionValue();
if(!${'value10_argument'}->isValid()) return ${'value10_argument'}->getErrorMessage();
} else
${'value10_argument'} = NULL;if(${'value10_argument'} !== null) ${'value10_argument'}->setColumnType('varchar');
if(isset($args->insert_time)) {
${'insert_time11_argument'} = new ConditionArgument('insert_time', $args->insert_time, 'equal');
${'insert_time11_argument'}->createConditionValue();
if(!${'insert_time11_argument'}->isValid()) return ${'insert_time11_argument'}->getErrorMessage();
} else
${'insert_time11_argument'} = NULL;if(${'insert_time11_argument'} !== null) ${'insert_time11_argument'}->setColumnType('date');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count5_argument'})
,new UpdateExpression('`bot_count`', ${'bot_count6_argument'})
,new UpdateExpression('`mobile_count`', ${'mobile_count7_argument'})
));
$query->setTables(array(
new Table('`xe_stats`', '`stats`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl8_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type9_argument,"equal", 'and')
,new ConditionWithArgument('`value`',$value10_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$insert_time11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>