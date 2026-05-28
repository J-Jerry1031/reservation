<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateReferer");
$query->setAction("update");
$query->setPriority("");

${'count1_argument'} = new Argument('count', $args->{'count'});
${'count1_argument'}->setColumnOperation('+');
${'count1_argument'}->ensureDefaultValue(1);
if(!${'count1_argument'}->isValid()) return ${'count1_argument'}->getErrorMessage();
if(${'count1_argument'} !== null) ${'count1_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
} else
${'site_srl2_argument'} = NULL;if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');
if(isset($args->referer)) {
${'referer3_argument'} = new ConditionArgument('referer', $args->referer, 'equal');
${'referer3_argument'}->createConditionValue();
if(!${'referer3_argument'}->isValid()) return ${'referer3_argument'}->getErrorMessage();
} else
${'referer3_argument'} = NULL;if(${'referer3_argument'} !== null) ${'referer3_argument'}->setColumnType('varchar');
if(isset($args->insert_time)) {
${'insert_time4_argument'} = new ConditionArgument('insert_time', $args->insert_time, 'equal');
${'insert_time4_argument'}->createConditionValue();
if(!${'insert_time4_argument'}->isValid()) return ${'insert_time4_argument'}->getErrorMessage();
} else
${'insert_time4_argument'} = NULL;if(${'insert_time4_argument'} !== null) ${'insert_time4_argument'}->setColumnType('date');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count1_argument'})
));
$query->setTables(array(
new Table('`xe_stats_referer`', '`stats_referer`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`referer`',$referer3_argument,"equal", 'and')
,new ConditionWithArgument('`insert_time`',$insert_time4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>