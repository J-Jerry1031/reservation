<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAttendance");
$query->setAction("insert");
$query->setPriority("");

${'attendance_srl15_argument'} = new Argument('attendance_srl', $args->{'attendance_srl'});
${'attendance_srl15_argument'}->checkNotNull();
if(!${'attendance_srl15_argument'}->isValid()) return ${'attendance_srl15_argument'}->getErrorMessage();
if(${'attendance_srl15_argument'} !== null) ${'attendance_srl15_argument'}->setColumnType('number');

${'regdate16_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate16_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate16_argument'}->checkNotNull();
if(!${'regdate16_argument'}->isValid()) return ${'regdate16_argument'}->getErrorMessage();
if(${'regdate16_argument'} !== null) ${'regdate16_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl17_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl17_argument'}->isValid()) return ${'member_srl17_argument'}->getErrorMessage();
} else
${'member_srl17_argument'} = NULL;if(${'member_srl17_argument'} !== null) ${'member_srl17_argument'}->setColumnType('number');

${'ipaddress18_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress18_argument'}->ensureDefaultValue('none');
if(!${'ipaddress18_argument'}->isValid()) return ${'ipaddress18_argument'}->getErrorMessage();
if(${'ipaddress18_argument'} !== null) ${'ipaddress18_argument'}->setColumnType('varchar');

${'greetings19_argument'} = new Argument('greetings', $args->{'greetings'});
${'greetings19_argument'}->ensureDefaultValue('');
if(!${'greetings19_argument'}->isValid()) return ${'greetings19_argument'}->getErrorMessage();
if(${'greetings19_argument'} !== null) ${'greetings19_argument'}->setColumnType('varchar');
if(isset($args->today_point)) {
${'today_point20_argument'} = new Argument('today_point', $args->{'today_point'});
if(!${'today_point20_argument'}->isValid()) return ${'today_point20_argument'}->getErrorMessage();
} else
${'today_point20_argument'} = NULL;if(${'today_point20_argument'} !== null) ${'today_point20_argument'}->setColumnType('number');

${'today_random21_argument'} = new Argument('today_random', $args->{'today_random'});
${'today_random21_argument'}->ensureDefaultValue('0');
if(!${'today_random21_argument'}->isValid()) return ${'today_random21_argument'}->getErrorMessage();
if(${'today_random21_argument'} !== null) ${'today_random21_argument'}->setColumnType('number');

${'att_random_set22_argument'} = new Argument('att_random_set', $args->{'att_random_set'});
${'att_random_set22_argument'}->ensureDefaultValue('0');
if(!${'att_random_set22_argument'}->isValid()) return ${'att_random_set22_argument'}->getErrorMessage();
if(${'att_random_set22_argument'} !== null) ${'att_random_set22_argument'}->setColumnType('number');

${'perfect_m23_argument'} = new Argument('perfect_m', $args->{'perfect_m'});
${'perfect_m23_argument'}->ensureDefaultValue('N');
if(!${'perfect_m23_argument'}->isValid()) return ${'perfect_m23_argument'}->getErrorMessage();
if(${'perfect_m23_argument'} !== null) ${'perfect_m23_argument'}->setColumnType('char');

${'present_y24_argument'} = new Argument('present_y', $args->{'present_y'});
${'present_y24_argument'}->ensureDefaultValue('N');
if(!${'present_y24_argument'}->isValid()) return ${'present_y24_argument'}->getErrorMessage();
if(${'present_y24_argument'} !== null) ${'present_y24_argument'}->setColumnType('char');

${'a_continuity25_argument'} = new Argument('a_continuity', $args->{'a_continuity'});
${'a_continuity25_argument'}->ensureDefaultValue('1');
if(!${'a_continuity25_argument'}->isValid()) return ${'a_continuity25_argument'}->getErrorMessage();
if(${'a_continuity25_argument'} !== null) ${'a_continuity25_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`attendance_srl`', ${'attendance_srl15_argument'})
,new InsertExpression('`regdate`', ${'regdate16_argument'})
,new InsertExpression('`member_srl`', ${'member_srl17_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress18_argument'})
,new InsertExpression('`greetings`', ${'greetings19_argument'})
,new InsertExpression('`today_point`', ${'today_point20_argument'})
,new InsertExpression('`today_random`', ${'today_random21_argument'})
,new InsertExpression('`att_random_set`', ${'att_random_set22_argument'})
,new InsertExpression('`perfect_m`', ${'perfect_m23_argument'})
,new InsertExpression('`present_y`', ${'present_y24_argument'})
,new InsertExpression('`a_continuity`', ${'a_continuity25_argument'})
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>