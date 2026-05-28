<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl30_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl30_argument'}->checkFilter('number');
${'member_srl30_argument'}->checkNotNull();
if(!${'member_srl30_argument'}->isValid()) return ${'member_srl30_argument'}->getErrorMessage();
if(${'member_srl30_argument'} !== null) ${'member_srl30_argument'}->setColumnType('number');

${'point31_argument'} = new Argument('point', $args->{'point'});
${'point31_argument'}->checkFilter('number');
${'point31_argument'}->ensureDefaultValue('0');
${'point31_argument'}->checkNotNull();
if(!${'point31_argument'}->isValid()) return ${'point31_argument'}->getErrorMessage();
if(${'point31_argument'} !== null) ${'point31_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl30_argument'})
,new InsertExpression('`point`', ${'point31_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>