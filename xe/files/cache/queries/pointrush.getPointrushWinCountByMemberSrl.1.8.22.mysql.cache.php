<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPointrushWinCountByMemberSrl");
$query->setAction("select");
$query->setPriority("");

${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->checkNotNull();
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->checkFilter('number');
${'member_srl7_argument'}->checkNotNull();
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl7_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_winner`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>