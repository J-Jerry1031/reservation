<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPointrush");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl1_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->ensureDefaultValue('0');
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'use_group3_argument'} = new Argument('use_group', $args->{'use_group'});
${'use_group3_argument'}->checkNotNull();
if(!${'use_group3_argument'}->isValid()) return ${'use_group3_argument'}->getErrorMessage();
if(${'use_group3_argument'} !== null) ${'use_group3_argument'}->setColumnType('varchar');

${'num_min4_argument'} = new Argument('num_min', $args->{'num_min'});
${'num_min4_argument'}->checkFilter('number');
${'num_min4_argument'}->ensureDefaultValue('1');
${'num_min4_argument'}->checkNotNull();
if(!${'num_min4_argument'}->isValid()) return ${'num_min4_argument'}->getErrorMessage();
if(${'num_min4_argument'} !== null) ${'num_min4_argument'}->setColumnType('number');

${'num_max5_argument'} = new Argument('num_max', $args->{'num_max'});
${'num_max5_argument'}->checkFilter('number');
${'num_max5_argument'}->ensureDefaultValue('1000');
${'num_max5_argument'}->checkNotNull();
if(!${'num_max5_argument'}->isValid()) return ${'num_max5_argument'}->getErrorMessage();
if(${'num_max5_argument'} !== null) ${'num_max5_argument'}->setColumnType('number');

${'rush_point6_argument'} = new Argument('rush_point', $args->{'rush_point'});
${'rush_point6_argument'}->checkFilter('number');
${'rush_point6_argument'}->ensureDefaultValue('10');
${'rush_point6_argument'}->checkNotNull();
if(!${'rush_point6_argument'}->isValid()) return ${'rush_point6_argument'}->getErrorMessage();
if(${'rush_point6_argument'} !== null) ${'rush_point6_argument'}->setColumnType('number');

${'winner_max7_argument'} = new Argument('winner_max', $args->{'winner_max'});
${'winner_max7_argument'}->checkFilter('number');
${'winner_max7_argument'}->ensureDefaultValue('10');
${'winner_max7_argument'}->checkNotNull();
if(!${'winner_max7_argument'}->isValid()) return ${'winner_max7_argument'}->getErrorMessage();
if(${'winner_max7_argument'} !== null) ${'winner_max7_argument'}->setColumnType('number');

${'winner_count8_argument'} = new Argument('winner_count', $args->{'winner_count'});
${'winner_count8_argument'}->checkFilter('number');
${'winner_count8_argument'}->ensureDefaultValue('0');
${'winner_count8_argument'}->checkNotNull();
if(!${'winner_count8_argument'}->isValid()) return ${'winner_count8_argument'}->getErrorMessage();
if(${'winner_count8_argument'} !== null) ${'winner_count8_argument'}->setColumnType('number');

${'rush_limit9_argument'} = new Argument('rush_limit', $args->{'rush_limit'});
${'rush_limit9_argument'}->checkFilter('number');
${'rush_limit9_argument'}->ensureDefaultValue('0');
${'rush_limit9_argument'}->checkNotNull();
if(!${'rush_limit9_argument'}->isValid()) return ${'rush_limit9_argument'}->getErrorMessage();
if(${'rush_limit9_argument'} !== null) ${'rush_limit9_argument'}->setColumnType('number');

${'rush_limit_reset10_argument'} = new Argument('rush_limit_reset', $args->{'rush_limit_reset'});
${'rush_limit_reset10_argument'}->ensureDefaultValue('N');
${'rush_limit_reset10_argument'}->checkNotNull();
if(!${'rush_limit_reset10_argument'}->isValid()) return ${'rush_limit_reset10_argument'}->getErrorMessage();
if(${'rush_limit_reset10_argument'} !== null) ${'rush_limit_reset10_argument'}->setColumnType('char');

${'rush_limit_day11_argument'} = new Argument('rush_limit_day', $args->{'rush_limit_day'});
${'rush_limit_day11_argument'}->checkFilter('number');
${'rush_limit_day11_argument'}->ensureDefaultValue('0');
${'rush_limit_day11_argument'}->checkNotNull();
if(!${'rush_limit_day11_argument'}->isValid()) return ${'rush_limit_day11_argument'}->getErrorMessage();
if(${'rush_limit_day11_argument'} !== null) ${'rush_limit_day11_argument'}->setColumnType('number');

${'rush_count12_argument'} = new Argument('rush_count', $args->{'rush_count'});
${'rush_count12_argument'}->checkFilter('number');
${'rush_count12_argument'}->ensureDefaultValue('0');
${'rush_count12_argument'}->checkNotNull();
if(!${'rush_count12_argument'}->isValid()) return ${'rush_count12_argument'}->getErrorMessage();
if(${'rush_count12_argument'} !== null) ${'rush_count12_argument'}->setColumnType('number');

${'total_point13_argument'} = new Argument('total_point', $args->{'total_point'});
${'total_point13_argument'}->checkFilter('number');
${'total_point13_argument'}->ensureDefaultValue('0');
${'total_point13_argument'}->checkNotNull();
if(!${'total_point13_argument'}->isValid()) return ${'total_point13_argument'}->getErrorMessage();
if(${'total_point13_argument'} !== null) ${'total_point13_argument'}->setColumnType('number');

${'start_date14_argument'} = new Argument('start_date', $args->{'start_date'});
${'start_date14_argument'}->ensureDefaultValue(date("YmdHis"));
${'start_date14_argument'}->checkNotNull();
if(!${'start_date14_argument'}->isValid()) return ${'start_date14_argument'}->getErrorMessage();
if(${'start_date14_argument'} !== null) ${'start_date14_argument'}->setColumnType('date');

${'end_date15_argument'} = new Argument('end_date', $args->{'end_date'});
${'end_date15_argument'}->ensureDefaultValue('0');
${'end_date15_argument'}->checkNotNull();
if(!${'end_date15_argument'}->isValid()) return ${'end_date15_argument'}->getErrorMessage();
if(${'end_date15_argument'} !== null) ${'end_date15_argument'}->setColumnType('date');

${'issue_date16_argument'} = new Argument('issue_date', $args->{'issue_date'});
${'issue_date16_argument'}->ensureDefaultValue('notnull');
${'issue_date16_argument'}->checkNotNull();
if(!${'issue_date16_argument'}->isValid()) return ${'issue_date16_argument'}->getErrorMessage();
if(${'issue_date16_argument'} !== null) ${'issue_date16_argument'}->setColumnType('date');

${'limit_date17_argument'} = new Argument('limit_date', $args->{'limit_date'});
${'limit_date17_argument'}->ensureDefaultValue('30');
${'limit_date17_argument'}->checkNotNull();
if(!${'limit_date17_argument'}->isValid()) return ${'limit_date17_argument'}->getErrorMessage();
if(${'limit_date17_argument'} !== null) ${'limit_date17_argument'}->setColumnType('number');

${'rush_status18_argument'} = new Argument('rush_status', $args->{'rush_status'});
${'rush_status18_argument'}->ensureDefaultValue('OPEN');
${'rush_status18_argument'}->checkNotNull();
if(!${'rush_status18_argument'}->isValid()) return ${'rush_status18_argument'}->getErrorMessage();
if(${'rush_status18_argument'} !== null) ${'rush_status18_argument'}->setColumnType('varchar');

${'rush_direct19_argument'} = new Argument('rush_direct', $args->{'rush_direct'});
${'rush_direct19_argument'}->ensureDefaultValue('TERM');
${'rush_direct19_argument'}->checkNotNull();
if(!${'rush_direct19_argument'}->isValid()) return ${'rush_direct19_argument'}->getErrorMessage();
if(${'rush_direct19_argument'} !== null) ${'rush_direct19_argument'}->setColumnType('varchar');

${'product_title20_argument'} = new Argument('product_title', $args->{'product_title'});
${'product_title20_argument'}->ensureDefaultValue('');
${'product_title20_argument'}->checkNotNull();
if(!${'product_title20_argument'}->isValid()) return ${'product_title20_argument'}->getErrorMessage();
if(${'product_title20_argument'} !== null) ${'product_title20_argument'}->setColumnType('varchar');

${'product_info21_argument'} = new Argument('product_info', $args->{'product_info'});
${'product_info21_argument'}->ensureDefaultValue('');
${'product_info21_argument'}->checkNotNull();
if(!${'product_info21_argument'}->isValid()) return ${'product_info21_argument'}->getErrorMessage();
if(${'product_info21_argument'} !== null) ${'product_info21_argument'}->setColumnType('varchar');

${'product_delivery22_argument'} = new Argument('product_delivery', $args->{'product_delivery'});
${'product_delivery22_argument'}->ensureDefaultValue('');
${'product_delivery22_argument'}->checkNotNull();
if(!${'product_delivery22_argument'}->isValid()) return ${'product_delivery22_argument'}->getErrorMessage();
if(${'product_delivery22_argument'} !== null) ${'product_delivery22_argument'}->setColumnType('varchar');

${'product_homepage23_argument'} = new Argument('product_homepage', $args->{'product_homepage'});
${'product_homepage23_argument'}->ensureDefaultValue('');
${'product_homepage23_argument'}->checkNotNull();
if(!${'product_homepage23_argument'}->isValid()) return ${'product_homepage23_argument'}->getErrorMessage();
if(${'product_homepage23_argument'} !== null) ${'product_homepage23_argument'}->setColumnType('varchar');

${'disp_flg24_argument'} = new Argument('disp_flg', $args->{'disp_flg'});
${'disp_flg24_argument'}->ensureDefaultValue('N');
${'disp_flg24_argument'}->checkNotNull();
if(!${'disp_flg24_argument'}->isValid()) return ${'disp_flg24_argument'}->getErrorMessage();
if(${'disp_flg24_argument'} !== null) ${'disp_flg24_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl1_argument'})
,new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`use_group`', ${'use_group3_argument'})
,new InsertExpression('`num_min`', ${'num_min4_argument'})
,new InsertExpression('`num_max`', ${'num_max5_argument'})
,new InsertExpression('`rush_point`', ${'rush_point6_argument'})
,new InsertExpression('`winner_max`', ${'winner_max7_argument'})
,new InsertExpression('`winner_count`', ${'winner_count8_argument'})
,new InsertExpression('`rush_limit`', ${'rush_limit9_argument'})
,new InsertExpression('`rush_limit_reset`', ${'rush_limit_reset10_argument'})
,new InsertExpression('`rush_limit_day`', ${'rush_limit_day11_argument'})
,new InsertExpression('`rush_count`', ${'rush_count12_argument'})
,new InsertExpression('`total_point`', ${'total_point13_argument'})
,new InsertExpression('`start_date`', ${'start_date14_argument'})
,new InsertExpression('`end_date`', ${'end_date15_argument'})
,new InsertExpression('`issue_date`', ${'issue_date16_argument'})
,new InsertExpression('`limit_date`', ${'limit_date17_argument'})
,new InsertExpression('`rush_status`', ${'rush_status18_argument'})
,new InsertExpression('`rush_direct`', ${'rush_direct19_argument'})
,new InsertExpression('`product_title`', ${'product_title20_argument'})
,new InsertExpression('`product_info`', ${'product_info21_argument'})
,new InsertExpression('`product_delivery`', ${'product_delivery22_argument'})
,new InsertExpression('`product_homepage`', ${'product_homepage23_argument'})
,new InsertExpression('`disp_flg`', ${'disp_flg24_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>