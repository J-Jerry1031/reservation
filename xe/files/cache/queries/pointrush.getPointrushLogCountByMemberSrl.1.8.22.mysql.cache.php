<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointrushLogCountByMemberSrl");
$query->setAction("select");
$query->setPriority("");

${'document_srl3_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl3_argument'}->checkFilter('number');
${'document_srl3_argument'}->checkNotNull();
${'document_srl3_argument'}->createConditionValue();
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');

${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->checkNotNull();
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

${'sRegdate5_argument'} = new ConditionArgument('sRegdate', $args->sRegdate, 'like_prefix');
${'sRegdate5_argument'}->checkNotNull();
${'sRegdate5_argument'}->createConditionValue();
if(!${'sRegdate5_argument'}->isValid()) return ${'sRegdate5_argument'}->getErrorMessage();
if(${'sRegdate5_argument'} !== null) ${'sRegdate5_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl3_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$sRegdate5_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>