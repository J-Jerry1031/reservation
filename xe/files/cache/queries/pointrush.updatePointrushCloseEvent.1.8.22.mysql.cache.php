<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushCloseEvent");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->now_date)) {
${'now_date3_argument'} = new ConditionArgument('now_date', $args->now_date, 'below');
${'now_date3_argument'}->createConditionValue();
if(!${'now_date3_argument'}->isValid()) return ${'now_date3_argument'}->getErrorMessage();
} else
${'now_date3_argument'} = NULL;if(${'now_date3_argument'} !== null) ${'now_date3_argument'}->setColumnType('date');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`rush_status`', "'CLOSE'")
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`end_date`',$now_date3_argument,"below")
,new ConditionWithoutArgument('`rush_status`',"'OPEN'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>