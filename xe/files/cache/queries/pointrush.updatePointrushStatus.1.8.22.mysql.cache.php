<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushStatus");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->rush_count)) {
${'rush_count25_argument'} = new Argument('rush_count', $args->{'rush_count'});
if(!${'rush_count25_argument'}->isValid()) return ${'rush_count25_argument'}->getErrorMessage();
} else
${'rush_count25_argument'} = NULL;if(${'rush_count25_argument'} !== null) ${'rush_count25_argument'}->setColumnType('number');
if(isset($args->rush_status)) {
${'rush_status26_argument'} = new Argument('rush_status', $args->{'rush_status'});
if(!${'rush_status26_argument'}->isValid()) return ${'rush_status26_argument'}->getErrorMessage();
} else
${'rush_status26_argument'} = NULL;if(${'rush_status26_argument'} !== null) ${'rush_status26_argument'}->setColumnType('varchar');
if(isset($args->total_point)) {
${'total_point27_argument'} = new Argument('total_point', $args->{'total_point'});
if(!${'total_point27_argument'}->isValid()) return ${'total_point27_argument'}->getErrorMessage();
} else
${'total_point27_argument'} = NULL;if(${'total_point27_argument'} !== null) ${'total_point27_argument'}->setColumnType('number');
if(isset($args->temp_count)) {
${'temp_count28_argument'} = new Argument('temp_count', $args->{'temp_count'});
if(!${'temp_count28_argument'}->isValid()) return ${'temp_count28_argument'}->getErrorMessage();
} else
${'temp_count28_argument'} = NULL;if(${'temp_count28_argument'} !== null) ${'temp_count28_argument'}->setColumnType('number');

${'document_srl29_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl29_argument'}->checkFilter('number');
${'document_srl29_argument'}->checkNotNull();
${'document_srl29_argument'}->createConditionValue();
if(!${'document_srl29_argument'}->isValid()) return ${'document_srl29_argument'}->getErrorMessage();
if(${'document_srl29_argument'} !== null) ${'document_srl29_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`rush_count`', ${'rush_count25_argument'})
,new UpdateExpression('`rush_status`', ${'rush_status26_argument'})
,new UpdateExpression('`total_point`', ${'total_point27_argument'})
,new UpdateExpression('`temp_count`', ${'temp_count28_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl29_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>