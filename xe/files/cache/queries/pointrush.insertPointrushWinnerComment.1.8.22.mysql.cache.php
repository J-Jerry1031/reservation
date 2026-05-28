<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPointrushWinnerComment");
$query->setAction("insert");
$query->setPriority("LOW");

${'winner_comment_srl8_argument'} = new Argument('winner_comment_srl', $args->{'winner_comment_srl'});
${'winner_comment_srl8_argument'}->checkFilter('number');
${'winner_comment_srl8_argument'}->checkNotNull();
if(!${'winner_comment_srl8_argument'}->isValid()) return ${'winner_comment_srl8_argument'}->getErrorMessage();
if(${'winner_comment_srl8_argument'} !== null) ${'winner_comment_srl8_argument'}->setColumnType('number');

${'document_srl9_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl9_argument'}->checkFilter('number');
${'document_srl9_argument'}->checkNotNull();
if(!${'document_srl9_argument'}->isValid()) return ${'document_srl9_argument'}->getErrorMessage();
if(${'document_srl9_argument'} !== null) ${'document_srl9_argument'}->setColumnType('number');

${'winner_number10_argument'} = new Argument('winner_number', $args->{'winner_number'});
${'winner_number10_argument'}->checkFilter('number');
${'winner_number10_argument'}->checkNotNull();
if(!${'winner_number10_argument'}->isValid()) return ${'winner_number10_argument'}->getErrorMessage();
if(${'winner_number10_argument'} !== null) ${'winner_number10_argument'}->setColumnType('number');

${'nick_name11_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name11_argument'}->checkNotNull();
if(!${'nick_name11_argument'}->isValid()) return ${'nick_name11_argument'}->getErrorMessage();
if(${'nick_name11_argument'} !== null) ${'nick_name11_argument'}->setColumnType('varchar');

${'user_id12_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id12_argument'}->ensureDefaultValue('');
if(!${'user_id12_argument'}->isValid()) return ${'user_id12_argument'}->getErrorMessage();
if(${'user_id12_argument'} !== null) ${'user_id12_argument'}->setColumnType('varchar');

${'user_name13_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name13_argument'}->ensureDefaultValue('');
if(!${'user_name13_argument'}->isValid()) return ${'user_name13_argument'}->getErrorMessage();
if(${'user_name13_argument'} !== null) ${'user_name13_argument'}->setColumnType('varchar');

${'member_srl14_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl14_argument'}->checkFilter('number');
${'member_srl14_argument'}->checkNotNull();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');

${'title15_argument'} = new Argument('title', $args->{'title'});
${'title15_argument'}->ensureDefaultValue('');
${'title15_argument'}->checkNotNull();
if(!${'title15_argument'}->isValid()) return ${'title15_argument'}->getErrorMessage();
if(${'title15_argument'} !== null) ${'title15_argument'}->setColumnType('varchar');

${'content16_argument'} = new Argument('content', $args->{'content'});
${'content16_argument'}->ensureDefaultValue('');
${'content16_argument'}->checkNotNull();
if(!${'content16_argument'}->isValid()) return ${'content16_argument'}->getErrorMessage();
if(${'content16_argument'} !== null) ${'content16_argument'}->setColumnType('text');

${'regdate17_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate17_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate17_argument'}->checkNotNull();
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();
if(${'regdate17_argument'} !== null) ${'regdate17_argument'}->setColumnType('date');

${'last_update18_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update18_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update18_argument'}->isValid()) return ${'last_update18_argument'}->getErrorMessage();
if(${'last_update18_argument'} !== null) ${'last_update18_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater19_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater19_argument'}->isValid()) return ${'last_updater19_argument'}->getErrorMessage();
} else
${'last_updater19_argument'} = NULL;if(${'last_updater19_argument'} !== null) ${'last_updater19_argument'}->setColumnType('varchar');

${'ipaddress20_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress20_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress20_argument'}->isValid()) return ${'ipaddress20_argument'}->getErrorMessage();
if(${'ipaddress20_argument'} !== null) ${'ipaddress20_argument'}->setColumnType('varchar');

${'list_order21_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order21_argument'}->ensureDefaultValue('0');
if(!${'list_order21_argument'}->isValid()) return ${'list_order21_argument'}->getErrorMessage();
if(${'list_order21_argument'} !== null) ${'list_order21_argument'}->setColumnType('number');

${'pointrush_admin_memo22_argument'} = new Argument('pointrush_admin_memo', $args->{'pointrush_admin_memo'});
${'pointrush_admin_memo22_argument'}->ensureDefaultValue('');
${'pointrush_admin_memo22_argument'}->checkNotNull();
if(!${'pointrush_admin_memo22_argument'}->isValid()) return ${'pointrush_admin_memo22_argument'}->getErrorMessage();
if(${'pointrush_admin_memo22_argument'} !== null) ${'pointrush_admin_memo22_argument'}->setColumnType('varchar');
if(isset($args->wr_flg)) {
${'wr_flg23_argument'} = new Argument('wr_flg', $args->{'wr_flg'});
if(!${'wr_flg23_argument'}->isValid()) return ${'wr_flg23_argument'}->getErrorMessage();
} else
${'wr_flg23_argument'} = NULL;if(${'wr_flg23_argument'} !== null) ${'wr_flg23_argument'}->setColumnType('char');

${'status24_argument'} = new Argument('status', $args->{'status'});
${'status24_argument'}->ensureDefaultValue('ON_PREPARE');
${'status24_argument'}->checkNotNull();
if(!${'status24_argument'}->isValid()) return ${'status24_argument'}->getErrorMessage();
if(${'status24_argument'} !== null) ${'status24_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`winner_comment_srl`', ${'winner_comment_srl8_argument'})
,new InsertExpression('`document_srl`', ${'document_srl9_argument'})
,new InsertExpression('`winner_number`', ${'winner_number10_argument'})
,new InsertExpression('`nick_name`', ${'nick_name11_argument'})
,new InsertExpression('`user_id`', ${'user_id12_argument'})
,new InsertExpression('`user_name`', ${'user_name13_argument'})
,new InsertExpression('`member_srl`', ${'member_srl14_argument'})
,new InsertExpression('`title`', ${'title15_argument'})
,new InsertExpression('`content`', ${'content16_argument'})
,new InsertExpression('`regdate`', ${'regdate17_argument'})
,new InsertExpression('`last_update`', ${'last_update18_argument'})
,new InsertExpression('`last_updater`', ${'last_updater19_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress20_argument'})
,new InsertExpression('`list_order`', ${'list_order21_argument'})
,new InsertExpression('`pointrush_admin_memo`', ${'pointrush_admin_memo22_argument'})
,new InsertExpression('`wr_flg`', ${'wr_flg23_argument'})
,new InsertExpression('`status`', ${'status24_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush_winner_comment`', '`pointrush_winner_comment`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>