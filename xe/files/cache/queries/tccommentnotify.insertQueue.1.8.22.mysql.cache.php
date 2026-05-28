<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertQueue");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl40_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl40_argument'}->checkNotNull();
if(!${'comment_srl40_argument'}->isValid()) return ${'comment_srl40_argument'}->getErrorMessage();
if(${'comment_srl40_argument'} !== null) ${'comment_srl40_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl40_argument'})
));
$query->setTables(array(
new Table('`xe_tcnotifyqueue`', '`tcnotifyqueue`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>