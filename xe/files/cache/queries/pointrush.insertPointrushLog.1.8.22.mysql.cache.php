<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPointrushLog");
$query->setAction("insert");
$query->setPriority("LOW");

${'pointrush_srl30_argument'} = new Argument('pointrush_srl', $args->{'pointrush_srl'});
${'pointrush_srl30_argument'}->checkFilter('number');
${'pointrush_srl30_argument'}->checkNotNull();
if(!${'pointrush_srl30_argument'}->isValid()) return ${'pointrush_srl30_argument'}->getErrorMessage();
if(${'pointrush_srl30_argument'} !== null) ${'pointrush_srl30_argument'}->setColumnType('number');

${'module_srl31_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl31_argument'}->checkFilter('number');
${'module_srl31_argument'}->checkNotNull();
if(!${'module_srl31_argument'}->isValid()) return ${'module_srl31_argument'}->getErrorMessage();
if(${'module_srl31_argument'} !== null) ${'module_srl31_argument'}->setColumnType('number');

${'document_srl32_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl32_argument'}->checkFilter('number');
${'document_srl32_argument'}->checkNotNull();
if(!${'document_srl32_argument'}->isValid()) return ${'document_srl32_argument'}->getErrorMessage();
if(${'document_srl32_argument'} !== null) ${'document_srl32_argument'}->setColumnType('number');

${'winner_comment_srl33_argument'} = new Argument('winner_comment_srl', $args->{'winner_comment_srl'});
${'winner_comment_srl33_argument'}->checkFilter('number');
${'winner_comment_srl33_argument'}->checkNotNull();
if(!${'winner_comment_srl33_argument'}->isValid()) return ${'winner_comment_srl33_argument'}->getErrorMessage();
if(${'winner_comment_srl33_argument'} !== null) ${'winner_comment_srl33_argument'}->setColumnType('number');

${'member_srl34_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl34_argument'}->checkFilter('number');
${'member_srl34_argument'}->checkNotNull();
if(!${'member_srl34_argument'}->isValid()) return ${'member_srl34_argument'}->getErrorMessage();
if(${'member_srl34_argument'} !== null) ${'member_srl34_argument'}->setColumnType('number');

${'nick_name35_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name35_argument'}->checkNotNull();
if(!${'nick_name35_argument'}->isValid()) return ${'nick_name35_argument'}->getErrorMessage();
if(${'nick_name35_argument'} !== null) ${'nick_name35_argument'}->setColumnType('varchar');

${'expense_point36_argument'} = new Argument('expense_point', $args->{'expense_point'});
${'expense_point36_argument'}->checkFilter('number');
${'expense_point36_argument'}->checkNotNull();
if(!${'expense_point36_argument'}->isValid()) return ${'expense_point36_argument'}->getErrorMessage();
if(${'expense_point36_argument'} !== null) ${'expense_point36_argument'}->setColumnType('number');

${'rush_number37_argument'} = new Argument('rush_number', $args->{'rush_number'});
${'rush_number37_argument'}->checkFilter('number');
${'rush_number37_argument'}->checkNotNull();
if(!${'rush_number37_argument'}->isValid()) return ${'rush_number37_argument'}->getErrorMessage();
if(${'rush_number37_argument'} !== null) ${'rush_number37_argument'}->setColumnType('number');

${'is_winner38_argument'} = new Argument('is_winner', $args->{'is_winner'});
${'is_winner38_argument'}->ensureDefaultValue('N');
${'is_winner38_argument'}->checkNotNull();
if(!${'is_winner38_argument'}->isValid()) return ${'is_winner38_argument'}->getErrorMessage();
if(${'is_winner38_argument'} !== null) ${'is_winner38_argument'}->setColumnType('char');

${'rush_direct39_argument'} = new Argument('rush_direct', $args->{'rush_direct'});
${'rush_direct39_argument'}->ensureDefaultValue('TERM');
${'rush_direct39_argument'}->checkNotNull();
if(!${'rush_direct39_argument'}->isValid()) return ${'rush_direct39_argument'}->getErrorMessage();
if(${'rush_direct39_argument'} !== null) ${'rush_direct39_argument'}->setColumnType('varchar');

${'ipaddress40_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress40_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress40_argument'}->isValid()) return ${'ipaddress40_argument'}->getErrorMessage();
if(${'ipaddress40_argument'} !== null) ${'ipaddress40_argument'}->setColumnType('varchar');

${'regdate41_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate41_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate41_argument'}->isValid()) return ${'regdate41_argument'}->getErrorMessage();
if(${'regdate41_argument'} !== null) ${'regdate41_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`pointrush_srl`', ${'pointrush_srl30_argument'})
,new InsertExpression('`module_srl`', ${'module_srl31_argument'})
,new InsertExpression('`document_srl`', ${'document_srl32_argument'})
,new InsertExpression('`winner_comment_srl`', ${'winner_comment_srl33_argument'})
,new InsertExpression('`member_srl`', ${'member_srl34_argument'})
,new InsertExpression('`nick_name`', ${'nick_name35_argument'})
,new InsertExpression('`expense_point`', ${'expense_point36_argument'})
,new InsertExpression('`rush_number`', ${'rush_number37_argument'})
,new InsertExpression('`is_winner`', ${'is_winner38_argument'})
,new InsertExpression('`rush_direct`', ${'rush_direct39_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress40_argument'})
,new InsertExpression('`regdate`', ${'regdate41_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush_log`', '`pointrush_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>