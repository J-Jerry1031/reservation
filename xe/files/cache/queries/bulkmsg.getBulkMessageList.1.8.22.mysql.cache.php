<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getBulkMessageList");
$query->setAction("select");
$query->setPriority("");

${'is_stop1_argument'} = new ConditionArgument('is_stop', $args->is_stop, 'in');
${'is_stop1_argument'}->ensureDefaultValue(array(Y,N));
${'is_stop1_argument'}->createConditionValue();
if(!${'is_stop1_argument'}->isValid()) return ${'is_stop1_argument'}->getErrorMessage();
if(${'is_stop1_argument'} !== null) ${'is_stop1_argument'}->setColumnType('char');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('30');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('document.list_order');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

${'sort_order3_argument'} = new SortArgument('sort_order3', $args->sort_order);
${'sort_order3_argument'}->ensureDefaultValue('asc');
if(!${'sort_order3_argument'}->isValid()) return ${'sort_order3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_bulk_message`', '`bulk`')
,new JoinTable('`xe_documents`', '`document`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`bulk`.`document_srl`','`document`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`bulk`.`is_stop`',$is_stop1_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, $sort_order3_argument)
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>