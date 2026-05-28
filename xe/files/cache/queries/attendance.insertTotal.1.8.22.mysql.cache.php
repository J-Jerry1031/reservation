<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTotal");
$query->setAction("insert");
$query->setPriority("");

${'regdate1_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate1_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate1_argument'}->checkNotNull();
if(!${'regdate1_argument'}->isValid()) return ${'regdate1_argument'}->getErrorMessage();
if(${'regdate1_argument'} !== null) ${'regdate1_argument'}->setColumnType('varchar');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->ensureDefaultValue('admin');
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'total3_argument'} = new Argument('total', $args->{'total'});
${'total3_argument'}->ensureDefaultValue('0');
if(!${'total3_argument'}->isValid()) return ${'total3_argument'}->getErrorMessage();
if(${'total3_argument'} !== null) ${'total3_argument'}->setColumnType('number');

${'total_point4_argument'} = new Argument('total_point', $args->{'total_point'});
${'total_point4_argument'}->ensureDefaultValue('0');
if(!${'total_point4_argument'}->isValid()) return ${'total_point4_argument'}->getErrorMessage();
if(${'total_point4_argument'} !== null) ${'total_point4_argument'}->setColumnType('number');

${'continuity5_argument'} = new Argument('continuity', $args->{'continuity'});
${'continuity5_argument'}->ensureDefaultValue('0');
if(!${'continuity5_argument'}->isValid()) return ${'continuity5_argument'}->getErrorMessage();
if(${'continuity5_argument'} !== null) ${'continuity5_argument'}->setColumnType('number');

${'continuity_point6_argument'} = new Argument('continuity_point', $args->{'continuity_point'});
${'continuity_point6_argument'}->ensureDefaultValue('0');
if(!${'continuity_point6_argument'}->isValid()) return ${'continuity_point6_argument'}->getErrorMessage();
if(${'continuity_point6_argument'} !== null) ${'continuity_point6_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`total`', ${'total3_argument'})
,new InsertExpression('`total_point`', ${'total_point4_argument'})
,new InsertExpression('`continuity`', ${'continuity5_argument'})
,new InsertExpression('`continuity_point`', ${'continuity_point6_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>