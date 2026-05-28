<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAdminId");
$query->setAction("insert");
$query->setPriority("");

${'module_srl1_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl1_argument'}->checkNotNull();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'regdate3_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate3_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`regdate`', ${'regdate3_argument'})
));
$query->setTables(array(
new Table('`xe_module_admins`', '`module_admins`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>