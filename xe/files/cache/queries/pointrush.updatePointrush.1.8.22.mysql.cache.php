<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrush");
$query->setAction("update");
$query->setPriority("LOW");

${'use_group1_argument'} = new Argument('use_group', $args->{'use_group'});
${'use_group1_argument'}->checkNotNull();
if(!${'use_group1_argument'}->isValid()) return ${'use_group1_argument'}->getErrorMessage();
if(${'use_group1_argument'} !== null) ${'use_group1_argument'}->setColumnType('varchar');

${'num_min2_argument'} = new Argument('num_min', $args->{'num_min'});
${'num_min2_argument'}->checkFilter('number');
${'num_min2_argument'}->ensureDefaultValue('1');
${'num_min2_argument'}->checkNotNull();
if(!${'num_min2_argument'}->isValid()) return ${'num_min2_argument'}->getErrorMessage();
if(${'num_min2_argument'} !== null) ${'num_min2_argument'}->setColumnType('number');

${'num_max3_argument'} = new Argument('num_max', $args->{'num_max'});
${'num_max3_argument'}->checkFilter('number');
${'num_max3_argument'}->ensureDefaultValue('1000');
${'num_max3_argument'}->checkNotNull();
if(!${'num_max3_argument'}->isValid()) return ${'num_max3_argument'}->getErrorMessage();
if(${'num_max3_argument'} !== null) ${'num_max3_argument'}->setColumnType('number');

${'rush_point4_argument'} = new Argument('rush_point', $args->{'rush_point'});
${'rush_point4_argument'}->checkFilter('number');
${'rush_point4_argument'}->ensureDefaultValue('0');
${'rush_point4_argument'}->checkNotNull();
if(!${'rush_point4_argument'}->isValid()) return ${'rush_point4_argument'}->getErrorMessage();
if(${'rush_point4_argument'} !== null) ${'rush_point4_argument'}->setColumnType('number');

${'winner_max5_argument'} = new Argument('winner_max', $args->{'winner_max'});
${'winner_max5_argument'}->checkFilter('number');
${'winner_max5_argument'}->ensureDefaultValue('0');
${'winner_max5_argument'}->checkNotNull();
if(!${'winner_max5_argument'}->isValid()) return ${'winner_max5_argument'}->getErrorMessage();
if(${'winner_max5_argument'} !== null) ${'winner_max5_argument'}->setColumnType('number');

${'rush_limit6_argument'} = new Argument('rush_limit', $args->{'rush_limit'});
${'rush_limit6_argument'}->checkFilter('number');
${'rush_limit6_argument'}->ensureDefaultValue('0');
${'rush_limit6_argument'}->checkNotNull();
if(!${'rush_limit6_argument'}->isValid()) return ${'rush_limit6_argument'}->getErrorMessage();
if(${'rush_limit6_argument'} !== null) ${'rush_limit6_argument'}->setColumnType('number');

${'rush_limit_reset7_argument'} = new Argument('rush_limit_reset', $args->{'rush_limit_reset'});
${'rush_limit_reset7_argument'}->ensureDefaultValue('N');
${'rush_limit_reset7_argument'}->checkNotNull();
if(!${'rush_limit_reset7_argument'}->isValid()) return ${'rush_limit_reset7_argument'}->getErrorMessage();
if(${'rush_limit_reset7_argument'} !== null) ${'rush_limit_reset7_argument'}->setColumnType('char');

${'rush_limit_day8_argument'} = new Argument('rush_limit_day', $args->{'rush_limit_day'});
${'rush_limit_day8_argument'}->checkFilter('number');
${'rush_limit_day8_argument'}->ensureDefaultValue('0');
${'rush_limit_day8_argument'}->checkNotNull();
if(!${'rush_limit_day8_argument'}->isValid()) return ${'rush_limit_day8_argument'}->getErrorMessage();
if(${'rush_limit_day8_argument'} !== null) ${'rush_limit_day8_argument'}->setColumnType('number');

${'start_date9_argument'} = new Argument('start_date', $args->{'start_date'});
${'start_date9_argument'}->ensureDefaultValue(date("YmdHis"));
${'start_date9_argument'}->checkNotNull();
if(!${'start_date9_argument'}->isValid()) return ${'start_date9_argument'}->getErrorMessage();
if(${'start_date9_argument'} !== null) ${'start_date9_argument'}->setColumnType('date');

${'end_date10_argument'} = new Argument('end_date', $args->{'end_date'});
${'end_date10_argument'}->ensureDefaultValue('0');
${'end_date10_argument'}->checkNotNull();
if(!${'end_date10_argument'}->isValid()) return ${'end_date10_argument'}->getErrorMessage();
if(${'end_date10_argument'} !== null) ${'end_date10_argument'}->setColumnType('date');

${'issue_date11_argument'} = new Argument('issue_date', $args->{'issue_date'});
${'issue_date11_argument'}->ensureDefaultValue('null');
${'issue_date11_argument'}->checkNotNull();
if(!${'issue_date11_argument'}->isValid()) return ${'issue_date11_argument'}->getErrorMessage();
if(${'issue_date11_argument'} !== null) ${'issue_date11_argument'}->setColumnType('date');

${'limit_date12_argument'} = new Argument('limit_date', $args->{'limit_date'});
${'limit_date12_argument'}->ensureDefaultValue('30');
${'limit_date12_argument'}->checkNotNull();
if(!${'limit_date12_argument'}->isValid()) return ${'limit_date12_argument'}->getErrorMessage();
if(${'limit_date12_argument'} !== null) ${'limit_date12_argument'}->setColumnType('number');

${'rush_status13_argument'} = new Argument('rush_status', $args->{'rush_status'});
${'rush_status13_argument'}->ensureDefaultValue('OPEN');
${'rush_status13_argument'}->checkNotNull();
if(!${'rush_status13_argument'}->isValid()) return ${'rush_status13_argument'}->getErrorMessage();
if(${'rush_status13_argument'} !== null) ${'rush_status13_argument'}->setColumnType('varchar');

${'rush_direct14_argument'} = new Argument('rush_direct', $args->{'rush_direct'});
${'rush_direct14_argument'}->ensureDefaultValue('TERM');
${'rush_direct14_argument'}->checkNotNull();
if(!${'rush_direct14_argument'}->isValid()) return ${'rush_direct14_argument'}->getErrorMessage();
if(${'rush_direct14_argument'} !== null) ${'rush_direct14_argument'}->setColumnType('varchar');

${'product_title15_argument'} = new Argument('product_title', $args->{'product_title'});
${'product_title15_argument'}->ensureDefaultValue('');
${'product_title15_argument'}->checkNotNull();
if(!${'product_title15_argument'}->isValid()) return ${'product_title15_argument'}->getErrorMessage();
if(${'product_title15_argument'} !== null) ${'product_title15_argument'}->setColumnType('varchar');

${'product_info16_argument'} = new Argument('product_info', $args->{'product_info'});
${'product_info16_argument'}->ensureDefaultValue('');
${'product_info16_argument'}->checkNotNull();
if(!${'product_info16_argument'}->isValid()) return ${'product_info16_argument'}->getErrorMessage();
if(${'product_info16_argument'} !== null) ${'product_info16_argument'}->setColumnType('varchar');

${'product_delivery17_argument'} = new Argument('product_delivery', $args->{'product_delivery'});
${'product_delivery17_argument'}->ensureDefaultValue('');
${'product_delivery17_argument'}->checkNotNull();
if(!${'product_delivery17_argument'}->isValid()) return ${'product_delivery17_argument'}->getErrorMessage();
if(${'product_delivery17_argument'} !== null) ${'product_delivery17_argument'}->setColumnType('varchar');

${'product_homepage18_argument'} = new Argument('product_homepage', $args->{'product_homepage'});
${'product_homepage18_argument'}->ensureDefaultValue('');
${'product_homepage18_argument'}->checkNotNull();
if(!${'product_homepage18_argument'}->isValid()) return ${'product_homepage18_argument'}->getErrorMessage();
if(${'product_homepage18_argument'} !== null) ${'product_homepage18_argument'}->setColumnType('varchar');

${'document_srl19_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl19_argument'}->checkFilter('number');
${'document_srl19_argument'}->checkNotNull();
${'document_srl19_argument'}->createConditionValue();
if(!${'document_srl19_argument'}->isValid()) return ${'document_srl19_argument'}->getErrorMessage();
if(${'document_srl19_argument'} !== null) ${'document_srl19_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`use_group`', ${'use_group1_argument'})
,new UpdateExpression('`num_min`', ${'num_min2_argument'})
,new UpdateExpression('`num_max`', ${'num_max3_argument'})
,new UpdateExpression('`rush_point`', ${'rush_point4_argument'})
,new UpdateExpression('`winner_max`', ${'winner_max5_argument'})
,new UpdateExpression('`rush_limit`', ${'rush_limit6_argument'})
,new UpdateExpression('`rush_limit_reset`', ${'rush_limit_reset7_argument'})
,new UpdateExpression('`rush_limit_day`', ${'rush_limit_day8_argument'})
,new UpdateExpression('`start_date`', ${'start_date9_argument'})
,new UpdateExpression('`end_date`', ${'end_date10_argument'})
,new UpdateExpression('`issue_date`', ${'issue_date11_argument'})
,new UpdateExpression('`limit_date`', ${'limit_date12_argument'})
,new UpdateExpression('`rush_status`', ${'rush_status13_argument'})
,new UpdateExpression('`rush_direct`', ${'rush_direct14_argument'})
,new UpdateExpression('`product_title`', ${'product_title15_argument'})
,new UpdateExpression('`product_info`', ${'product_info16_argument'})
,new UpdateExpression('`product_delivery`', ${'product_delivery17_argument'})
,new UpdateExpression('`product_homepage`', ${'product_homepage18_argument'})
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl19_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>