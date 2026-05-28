<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentList");
$query->setAction("select");
$query->setPriority("");

${'document_srl1_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
${'document_srl1_argument'}->createConditionValue();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('20');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'pointrush_srl2_argument'} = new Argument('pointrush_srl', $args->{'pointrush_srl'});
${'pointrush_srl2_argument'}->ensureDefaultValue('pointrush_srl');
if(!${'pointrush_srl2_argument'}->isValid()) return ${'pointrush_srl2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'pointrush_srl2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>