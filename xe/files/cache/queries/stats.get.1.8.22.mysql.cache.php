<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("get");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
} else
${'site_srl1_argument'} = NULL;if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->type)) {
${'type2_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type2_argument'}->createConditionValue();
if(!${'type2_argument'}->isValid()) return ${'type2_argument'}->getErrorMessage();
} else
${'type2_argument'} = NULL;if(${'type2_argument'} !== null) ${'type2_argument'}->setColumnType('varchar');
if(isset($args->value)) {
${'value3_argument'} = new ConditionArgument('value', $args->value, 'equal');
${'value3_argument'}->createConditionValue();
if(!${'value3_argument'}->isValid()) return ${'value3_argument'}->getErrorMessage();
} else
${'value3_argument'} = NULL;if(${'value3_argument'} !== null) ${'value3_argument'}->setColumnType('varchar');
if(isset($args->insert_time)) {
${'insert_time4_argument'} = new ConditionArgument('insert_time', $args->insert_time, 'equal');
${'insert_time4_argument'}->createConditionValue();
if(!${'insert_time4_argument'}->isValid()) return ${'insert_time4_argument'}->getErrorMessage();
} else
${'insert_time4_argument'} = NULL;if(${'insert_time4_argument'} !== null) ${'insert_time4_argument'}->setColumnType('date');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_stats`', '`stats`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type2_argument,"equal", 'and')
,new ConditionWithArgument('`value`',$value3_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$insert_time4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>