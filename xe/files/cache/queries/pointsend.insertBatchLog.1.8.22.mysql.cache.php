<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("inserBatchLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl2_argument'} = new Argument('log_srl', $args->{'log_srl'});
${'log_srl2_argument'}->checkFilter('number');
${'log_srl2_argument'}->ensureDefaultValue('getNextSequence()');
if(!${'log_srl2_argument'}->isValid()) return ${'log_srl2_argument'}->getErrorMessage();
if(${'log_srl2_argument'} !== null) ${'log_srl2_argument'}->setColumnType('number');

${'target3_argument'} = new Argument('target', $args->{'target'});
${'target3_argument'}->checkNotNull();
if(!${'target3_argument'}->isValid()) return ${'target3_argument'}->getErrorMessage();
if(${'target3_argument'} !== null) ${'target3_argument'}->setColumnType('varchar');

${'sender_srl4_argument'} = new Argument('sender_srl', $args->{'sender_srl'});
${'sender_srl4_argument'}->checkFilter('number');
${'sender_srl4_argument'}->checkNotNull();
if(!${'sender_srl4_argument'}->isValid()) return ${'sender_srl4_argument'}->getErrorMessage();
if(${'sender_srl4_argument'} !== null) ${'sender_srl4_argument'}->setColumnType('number');

${'target_srls5_argument'} = new Argument('target_srls', $args->{'target_srls'});
${'target_srls5_argument'}->checkNotNull();
if(!${'target_srls5_argument'}->isValid()) return ${'target_srls5_argument'}->getErrorMessage();
if(${'target_srls5_argument'} !== null) ${'target_srls5_argument'}->setColumnType('text');

${'point6_argument'} = new Argument('point', $args->{'point'});
${'point6_argument'}->checkFilter('number');
${'point6_argument'}->checkNotNull();
if(!${'point6_argument'}->isValid()) return ${'point6_argument'}->getErrorMessage();
if(${'point6_argument'} !== null) ${'point6_argument'}->setColumnType('number');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');
if(isset($args->title)) {
${'title8_argument'} = new Argument('title', $args->{'title'});
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
} else
${'title8_argument'} = NULL;if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');
if(isset($args->comment)) {
${'comment9_argument'} = new Argument('comment', $args->{'comment'});
if(!${'comment9_argument'}->isValid()) return ${'comment9_argument'}->getErrorMessage();
} else
${'comment9_argument'} = NULL;if(${'comment9_argument'} !== null) ${'comment9_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl2_argument'})
,new InsertExpression('`target`', ${'target3_argument'})
,new InsertExpression('`sender_srl`', ${'sender_srl4_argument'})
,new InsertExpression('`target_srls`', ${'target_srls5_argument'})
,new InsertExpression('`point`', ${'point6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
,new InsertExpression('`title`', ${'title8_argument'})
,new InsertExpression('`comment`', ${'comment9_argument'})
));
$query->setTables(array(
new Table('`xe_pointsend_batch_log`', '`pointsend_batch_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>