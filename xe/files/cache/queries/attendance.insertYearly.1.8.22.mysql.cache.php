<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertYearly");
$query->setAction("insert");
$query->setPriority("");

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate7_argument'}->checkNotNull();
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('varchar');

${'member_srl8_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl8_argument'}->ensureDefaultValue('admin');
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');
if(isset($args->yearly)) {
${'yearly9_argument'} = new Argument('yearly', $args->{'yearly'});
if(!${'yearly9_argument'}->isValid()) return ${'yearly9_argument'}->getErrorMessage();
} else
${'yearly9_argument'} = NULL;if(${'yearly9_argument'} !== null) ${'yearly9_argument'}->setColumnType('number');
if(isset($args->yearly_point)) {
${'yearly_point10_argument'} = new Argument('yearly_point', $args->{'yearly_point'});
if(!${'yearly_point10_argument'}->isValid()) return ${'yearly_point10_argument'}->getErrorMessage();
} else
${'yearly_point10_argument'} = NULL;if(${'yearly_point10_argument'} !== null) ${'yearly_point10_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate7_argument'})
,new InsertExpression('`member_srl`', ${'member_srl8_argument'})
,new InsertExpression('`yearly`', ${'yearly9_argument'})
,new InsertExpression('`yearly_point`', ${'yearly_point10_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>