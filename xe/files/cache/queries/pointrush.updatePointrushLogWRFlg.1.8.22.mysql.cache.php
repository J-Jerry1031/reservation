<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushLogWRFlg");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->is_winner)) {
${'is_winner2_argument'} = new Argument('is_winner', $args->{'is_winner'});
if(!${'is_winner2_argument'}->isValid()) return ${'is_winner2_argument'}->getErrorMessage();
} else
${'is_winner2_argument'} = NULL;if(${'is_winner2_argument'} !== null) ${'is_winner2_argument'}->setColumnType('char');
if(isset($args->pointrush_srl)) {
${'pointrush_srl3_argument'} = new ConditionArgument('pointrush_srl', $args->pointrush_srl, 'equal');
${'pointrush_srl3_argument'}->createConditionValue();
if(!${'pointrush_srl3_argument'}->isValid()) return ${'pointrush_srl3_argument'}->getErrorMessage();
} else
${'pointrush_srl3_argument'} = NULL;if(${'pointrush_srl3_argument'} !== null) ${'pointrush_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`is_winner`', ${'is_winner2_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`pointrush_srl`',$pointrush_srl3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>