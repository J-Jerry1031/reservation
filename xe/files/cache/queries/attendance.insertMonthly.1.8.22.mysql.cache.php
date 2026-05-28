<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMonthly");
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
if(isset($args->monthly)) {
${'monthly3_argument'} = new Argument('monthly', $args->{'monthly'});
if(!${'monthly3_argument'}->isValid()) return ${'monthly3_argument'}->getErrorMessage();
} else
${'monthly3_argument'} = NULL;if(${'monthly3_argument'} !== null) ${'monthly3_argument'}->setColumnType('number');
if(isset($args->monthly_point)) {
${'monthly_point4_argument'} = new Argument('monthly_point', $args->{'monthly_point'});
if(!${'monthly_point4_argument'}->isValid()) return ${'monthly_point4_argument'}->getErrorMessage();
} else
${'monthly_point4_argument'} = NULL;if(${'monthly_point4_argument'} !== null) ${'monthly_point4_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`monthly`', ${'monthly3_argument'})
,new InsertExpression('`monthly_point`', ${'monthly_point4_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>