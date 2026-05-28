<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRecentRefererLog");
$query->setAction("select");
$query->setPriority("");

${'list_count2_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count2_argument'}->ensureDefaultValue('1');
if(!${'list_count2_argument'}->isValid()) return ${'list_count2_argument'}->getErrorMessage();

${'sort_index1_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index1_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index1_argument'}->isValid()) return ${'sort_index1_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_referer_log`', '`referer_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index1_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count2_argument'}));
return $query; ?>