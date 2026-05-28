<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushOpenEvent");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->now_date)) {
${'now_date2_argument'} = new ConditionArgument('now_date', $args->now_date, 'less');
${'now_date2_argument'}->createConditionValue();
if(!${'now_date2_argument'}->isValid()) return ${'now_date2_argument'}->getErrorMessage();
} else
${'now_date2_argument'} = NULL;if(${'now_date2_argument'} !== null) ${'now_date2_argument'}->setColumnType('date');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`rush_status`', "'OPEN'")
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`start_date`',$now_date2_argument,"less")
,new ConditionWithoutArgument('`rush_status`',"'STANDBY'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>