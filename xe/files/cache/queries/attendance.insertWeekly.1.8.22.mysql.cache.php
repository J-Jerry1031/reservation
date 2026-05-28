<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertWeekly");
$query->setAction("insert");
$query->setPriority("");

${'regdate5_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate5_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate5_argument'}->checkNotNull();
if(!${'regdate5_argument'}->isValid()) return ${'regdate5_argument'}->getErrorMessage();
if(${'regdate5_argument'} !== null) ${'regdate5_argument'}->setColumnType('varchar');

${'member_srl6_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl6_argument'}->ensureDefaultValue('admin');
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');
if(isset($args->weekly)) {
${'weekly7_argument'} = new Argument('weekly', $args->{'weekly'});
if(!${'weekly7_argument'}->isValid()) return ${'weekly7_argument'}->getErrorMessage();
} else
${'weekly7_argument'} = NULL;if(${'weekly7_argument'} !== null) ${'weekly7_argument'}->setColumnType('number');
if(isset($args->weekly_point)) {
${'weekly_point8_argument'} = new Argument('weekly_point', $args->{'weekly_point'});
if(!${'weekly_point8_argument'}->isValid()) return ${'weekly_point8_argument'}->getErrorMessage();
} else
${'weekly_point8_argument'} = NULL;if(${'weekly_point8_argument'} !== null) ${'weekly_point8_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate5_argument'})
,new InsertExpression('`member_srl`', ${'member_srl6_argument'})
,new InsertExpression('`weekly`', ${'weekly7_argument'})
,new InsertExpression('`weekly_point`', ${'weekly_point8_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>