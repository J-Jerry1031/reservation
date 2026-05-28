<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushWinnerWrCount");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->winner_count)) {
${'winner_count7_argument'} = new Argument('winner_count', $args->{'winner_count'});
if(!${'winner_count7_argument'}->isValid()) return ${'winner_count7_argument'}->getErrorMessage();
} else
${'winner_count7_argument'} = NULL;if(${'winner_count7_argument'} !== null) ${'winner_count7_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl8_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl8_argument'}->createConditionValue();
if(!${'document_srl8_argument'}->isValid()) return ${'document_srl8_argument'}->getErrorMessage();
} else
${'document_srl8_argument'} = NULL;if(${'document_srl8_argument'} !== null) ${'document_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`winner_count`', ${'winner_count7_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>