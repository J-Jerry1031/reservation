<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocuments");
$query->setAction("select");
$query->setPriority("");

${'document_srls76_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls76_argument'}->checkNotNull();
${'document_srls76_argument'}->createConditionValue();
if(!${'document_srls76_argument'}->isValid()) return ${'document_srls76_argument'}->getErrorMessage();
if(${'document_srls76_argument'} !== null) ${'document_srls76_argument'}->setColumnType('number');

${'page79_argument'} = new Argument('page', $args->{'page'});
${'page79_argument'}->ensureDefaultValue('1');
if(!${'page79_argument'}->isValid()) return ${'page79_argument'}->getErrorMessage();

${'page_count80_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count80_argument'}->ensureDefaultValue('10');
if(!${'page_count80_argument'}->isValid()) return ${'page_count80_argument'}->getErrorMessage();

${'list_count81_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count81_argument'}->ensureDefaultValue('20');
if(!${'list_count81_argument'}->isValid()) return ${'list_count81_argument'}->getErrorMessage();

${'list_order77_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order77_argument'}->ensureDefaultValue('list_order');
if(!${'list_order77_argument'}->isValid()) return ${'list_order77_argument'}->getErrorMessage();

${'order_type78_argument'} = new SortArgument('order_type78', $args->order_type);
${'order_type78_argument'}->ensureDefaultValue('asc');
if(!${'order_type78_argument'}->isValid()) return ${'order_type78_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls76_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order77_argument'}, $order_type78_argument)
));
$query->setLimit(new Limit(${'list_count81_argument'}, ${'page79_argument'}, ${'page_count80_argument'}));
return $query; ?>