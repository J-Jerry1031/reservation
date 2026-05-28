<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateByMobile");
$query->setAction("update");
$query->setPriority("");

${'count1_argument'} = new Argument('count', $args->{'count'});
${'count1_argument'}->setColumnOperation('+');
${'count1_argument'}->ensureDefaultValue(1);
if(!${'count1_argument'}->isValid()) return ${'count1_argument'}->getErrorMessage();
if(${'count1_argument'} !== null) ${'count1_argument'}->setColumnType('number');

${'mobile_count2_argument'} = new Argument('mobile_count', $args->{'mobile_count'});
${'mobile_count2_argument'}->setColumnOperation('+');
${'mobile_count2_argument'}->ensureDefaultValue(1);
if(!${'mobile_count2_argument'}->isValid()) return ${'mobile_count2_argument'}->getErrorMessage();
if(${'mobile_count2_argument'} !== null) ${'mobile_count2_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
} else
${'site_srl3_argument'} = NULL;if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');
if(isset($args->type)) {
${'type4_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type4_argument'}->createConditionValue();
if(!${'type4_argument'}->isValid()) return ${'type4_argument'}->getErrorMessage();
} else
${'type4_argument'} = NULL;if(${'type4_argument'} !== null) ${'type4_argument'}->setColumnType('varchar');
if(isset($args->value)) {
${'value5_argument'} = new ConditionArgument('value', $args->value, 'equal');
${'value5_argument'}->createConditionValue();
if(!${'value5_argument'}->isValid()) return ${'value5_argument'}->getErrorMessage();
} else
${'value5_argument'} = NULL;if(${'value5_argument'} !== null) ${'value5_argument'}->setColumnType('varchar');
if(isset($args->insert_time)) {
${'insert_time6_argument'} = new ConditionArgument('insert_time', $args->insert_time, 'equal');
${'insert_time6_argument'}->createConditionValue();
if(!${'insert_time6_argument'}->isValid()) return ${'insert_time6_argument'}->getErrorMessage();
} else
${'insert_time6_argument'} = NULL;if(${'insert_time6_argument'} !== null) ${'insert_time6_argument'}->setColumnType('date');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count1_argument'})
,new UpdateExpression('`mobile_count`', ${'mobile_count2_argument'})
));
$query->setTables(array(
new Table('`xe_stats`', '`stats`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type4_argument,"equal", 'and')
,new ConditionWithArgument('`value`',$value5_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$insert_time6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>