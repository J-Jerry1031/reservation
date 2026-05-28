<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLatestPackage");
$query->setAction("select");
$query->setPriority("");

${'page5_argument'} = new Argument('page', $args->{'page'});
${'page5_argument'}->ensureDefaultValue('1');
if(!${'page5_argument'}->isValid()) return ${'page5_argument'}->getErrorMessage();

${'page_count6_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count6_argument'}->ensureDefaultValue('10');
if(!${'page_count6_argument'}->isValid()) return ${'page_count6_argument'}->getErrorMessage();

${'list_count7_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count7_argument'}->ensureDefaultValue('1');
if(!${'list_count7_argument'}->isValid()) return ${'list_count7_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('updatedate');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count7_argument'}, ${'page5_argument'}, ${'page_count6_argument'}));
return $query; ?>