<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insert_game");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->game_srl)) {
${'game_srl1_argument'} = new Argument('game_srl', $args->{'game_srl'});
if(!${'game_srl1_argument'}->isValid()) return ${'game_srl1_argument'}->getErrorMessage();
} else
${'game_srl1_argument'} = NULL;if(${'game_srl1_argument'} !== null) ${'game_srl1_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->nick_name)) {
${'nick_name3_argument'} = new Argument('nick_name', $args->{'nick_name'});
if(!${'nick_name3_argument'}->isValid()) return ${'nick_name3_argument'}->getErrorMessage();
} else
${'nick_name3_argument'} = NULL;if(${'nick_name3_argument'} !== null) ${'nick_name3_argument'}->setColumnType('varchar');
if(isset($args->com_select)) {
${'com_select4_argument'} = new Argument('com_select', $args->{'com_select'});
if(!${'com_select4_argument'}->isValid()) return ${'com_select4_argument'}->getErrorMessage();
} else
${'com_select4_argument'} = NULL;if(${'com_select4_argument'} !== null) ${'com_select4_argument'}->setColumnType('varchar');
if(isset($args->user_select)) {
${'user_select5_argument'} = new Argument('user_select', $args->{'user_select'});
if(!${'user_select5_argument'}->isValid()) return ${'user_select5_argument'}->getErrorMessage();
} else
${'user_select5_argument'} = NULL;if(${'user_select5_argument'} !== null) ${'user_select5_argument'}->setColumnType('varchar');
if(isset($args->result)) {
${'result6_argument'} = new Argument('result', $args->{'result'});
if(!${'result6_argument'}->isValid()) return ${'result6_argument'}->getErrorMessage();
} else
${'result6_argument'} = NULL;if(${'result6_argument'} !== null) ${'result6_argument'}->setColumnType('varchar');
if(isset($args->game_point)) {
${'game_point7_argument'} = new Argument('game_point', $args->{'game_point'});
if(!${'game_point7_argument'}->isValid()) return ${'game_point7_argument'}->getErrorMessage();
} else
${'game_point7_argument'} = NULL;if(${'game_point7_argument'} !== null) ${'game_point7_argument'}->setColumnType('number');
if(isset($args->set_point)) {
${'set_point8_argument'} = new Argument('set_point', $args->{'set_point'});
if(!${'set_point8_argument'}->isValid()) return ${'set_point8_argument'}->getErrorMessage();
} else
${'set_point8_argument'} = NULL;if(${'set_point8_argument'} !== null) ${'set_point8_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate9_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate9_argument'}->isValid()) return ${'regdate9_argument'}->getErrorMessage();
} else
${'regdate9_argument'} = NULL;if(${'regdate9_argument'} !== null) ${'regdate9_argument'}->setColumnType('varchar');

${'ipaddress10_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress10_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress10_argument'}->isValid()) return ${'ipaddress10_argument'}->getErrorMessage();
if(${'ipaddress10_argument'} !== null) ${'ipaddress10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`game_srl`', ${'game_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`nick_name`', ${'nick_name3_argument'})
,new InsertExpression('`com_select`', ${'com_select4_argument'})
,new InsertExpression('`user_select`', ${'user_select5_argument'})
,new InsertExpression('`result`', ${'result6_argument'})
,new InsertExpression('`game_point`', ${'game_point7_argument'})
,new InsertExpression('`set_point`', ${'set_point8_argument'})
,new InsertExpression('`regdate`', ${'regdate9_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress10_argument'})
));
$query->setTables(array(
new Table('`xe_rockgame`', '`rockgame`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>