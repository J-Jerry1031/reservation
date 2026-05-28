<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertIcon");
$query->setAction("insert");
$query->setPriority("");

${'icon_srl1_argument'} = new Argument('icon_srl', $args->{'icon_srl'});
${'icon_srl1_argument'}->checkFilter('number');
${'icon_srl1_argument'}->checkNotNull();
if(!${'icon_srl1_argument'}->isValid()) return ${'icon_srl1_argument'}->getErrorMessage();
if(${'icon_srl1_argument'} !== null) ${'icon_srl1_argument'}->setColumnType('number');

${'title2_argument'} = new Argument('title', $args->{'title'});
${'title2_argument'}->checkNotNull();
if(!${'title2_argument'}->isValid()) return ${'title2_argument'}->getErrorMessage();
if(${'title2_argument'} !== null) ${'title2_argument'}->setColumnType('varchar');

${'total_count3_argument'} = new Argument('total_count', $args->{'total_count'});
${'total_count3_argument'}->checkFilter('number');
${'total_count3_argument'}->ensureDefaultValue('0');
if(!${'total_count3_argument'}->isValid()) return ${'total_count3_argument'}->getErrorMessage();
if(${'total_count3_argument'} !== null) ${'total_count3_argument'}->setColumnType('number');

${'price4_argument'} = new Argument('price', $args->{'price'});
${'price4_argument'}->checkFilter('number');
${'price4_argument'}->ensureDefaultValue('0');
if(!${'price4_argument'}->isValid()) return ${'price4_argument'}->getErrorMessage();
if(${'price4_argument'} !== null) ${'price4_argument'}->setColumnType('number');

${'buy_limit5_argument'} = new Argument('buy_limit', $args->{'buy_limit'});
${'buy_limit5_argument'}->ensureDefaultValue('Y');
if(!${'buy_limit5_argument'}->isValid()) return ${'buy_limit5_argument'}->getErrorMessage();
if(${'buy_limit5_argument'} !== null) ${'buy_limit5_argument'}->setColumnType('char');

${'send_limit6_argument'} = new Argument('send_limit', $args->{'send_limit'});
${'send_limit6_argument'}->ensureDefaultValue('Y');
if(!${'send_limit6_argument'}->isValid()) return ${'send_limit6_argument'}->getErrorMessage();
if(${'send_limit6_argument'} !== null) ${'send_limit6_argument'}->setColumnType('char');

${'sell_limit7_argument'} = new Argument('sell_limit', $args->{'sell_limit'});
${'sell_limit7_argument'}->ensureDefaultValue('Y');
if(!${'sell_limit7_argument'}->isValid()) return ${'sell_limit7_argument'}->getErrorMessage();
if(${'sell_limit7_argument'} !== null) ${'sell_limit7_argument'}->setColumnType('char');

${'point_limit8_argument'} = new Argument('point_limit', $args->{'point_limit'});
${'point_limit8_argument'}->ensureDefaultValue('Y');
if(!${'point_limit8_argument'}->isValid()) return ${'point_limit8_argument'}->getErrorMessage();
if(${'point_limit8_argument'} !== null) ${'point_limit8_argument'}->setColumnType('char');

${'minute_limit9_argument'} = new Argument('minute_limit', $args->{'minute_limit'});
${'minute_limit9_argument'}->ensureDefaultValue('N');
if(!${'minute_limit9_argument'}->isValid()) return ${'minute_limit9_argument'}->getErrorMessage();
if(${'minute_limit9_argument'} !== null) ${'minute_limit9_argument'}->setColumnType('char');

${'minute10_argument'} = new Argument('minute', $args->{'minute'});
${'minute10_argument'}->checkFilter('number');
${'minute10_argument'}->ensureDefaultValue('0');
if(!${'minute10_argument'}->isValid()) return ${'minute10_argument'}->getErrorMessage();
if(${'minute10_argument'} !== null) ${'minute10_argument'}->setColumnType('number');

${'level_limit11_argument'} = new Argument('level_limit', $args->{'level_limit'});
${'level_limit11_argument'}->checkFilter('number');
${'level_limit11_argument'}->ensureDefaultValue('0');
if(!${'level_limit11_argument'}->isValid()) return ${'level_limit11_argument'}->getErrorMessage();
if(${'level_limit11_argument'} !== null) ${'level_limit11_argument'}->setColumnType('number');

${'group_limit12_argument'} = new Argument('group_limit', $args->{'group_limit'});
${'group_limit12_argument'}->ensureDefaultValue('');
if(!${'group_limit12_argument'}->isValid()) return ${'group_limit12_argument'}->getErrorMessage();
if(${'group_limit12_argument'} !== null) ${'group_limit12_argument'}->setColumnType('varchar');

${'event_limit13_argument'} = new Argument('event_limit', $args->{'event_limit'});
${'event_limit13_argument'}->ensureDefaultValue('N');
if(!${'event_limit13_argument'}->isValid()) return ${'event_limit13_argument'}->getErrorMessage();
if(${'event_limit13_argument'} !== null) ${'event_limit13_argument'}->setColumnType('char');
if(isset($args->event_start)) {
${'event_start14_argument'} = new Argument('event_start', $args->{'event_start'});
${'event_start14_argument'}->checkFilter('number');
if(!${'event_start14_argument'}->isValid()) return ${'event_start14_argument'}->getErrorMessage();
} else
${'event_start14_argument'} = NULL;if(${'event_start14_argument'} !== null) ${'event_start14_argument'}->setColumnType('date');
if(isset($args->event_end)) {
${'event_end15_argument'} = new Argument('event_end', $args->{'event_end'});
${'event_end15_argument'}->checkFilter('number');
if(!${'event_end15_argument'}->isValid()) return ${'event_end15_argument'}->getErrorMessage();
} else
${'event_end15_argument'} = NULL;if(${'event_end15_argument'} !== null) ${'event_end15_argument'}->setColumnType('date');
if(isset($args->content)) {
${'content16_argument'} = new Argument('content', $args->{'content'});
if(!${'content16_argument'}->isValid()) return ${'content16_argument'}->getErrorMessage();
} else
${'content16_argument'} = NULL;if(${'content16_argument'} !== null) ${'content16_argument'}->setColumnType('text');

${'file117_argument'} = new Argument('file1', $args->{'file1'});
${'file117_argument'}->checkNotNull();
if(!${'file117_argument'}->isValid()) return ${'file117_argument'}->getErrorMessage();
if(${'file117_argument'} !== null) ${'file117_argument'}->setColumnType('varchar');

${'regdate18_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate18_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`icon_srl`', ${'icon_srl1_argument'})
,new InsertExpression('`title`', ${'title2_argument'})
,new InsertExpression('`total_count`', ${'total_count3_argument'})
,new InsertExpression('`price`', ${'price4_argument'})
,new InsertExpression('`buy_limit`', ${'buy_limit5_argument'})
,new InsertExpression('`send_limit`', ${'send_limit6_argument'})
,new InsertExpression('`sell_limit`', ${'sell_limit7_argument'})
,new InsertExpression('`point_limit`', ${'point_limit8_argument'})
,new InsertExpression('`minute_limit`', ${'minute_limit9_argument'})
,new InsertExpression('`minute`', ${'minute10_argument'})
,new InsertExpression('`level_limit`', ${'level_limit11_argument'})
,new InsertExpression('`group_limit`', ${'group_limit12_argument'})
,new InsertExpression('`event_limit`', ${'event_limit13_argument'})
,new InsertExpression('`event_start`', ${'event_start14_argument'})
,new InsertExpression('`event_end`', ${'event_end15_argument'})
,new InsertExpression('`content`', ${'content16_argument'})
,new InsertExpression('`file1`', ${'file117_argument'})
,new InsertExpression('`regdate`', ${'regdate18_argument'})
));
$query->setTables(array(
new Table('`xe_iconshop_admin`', '`iconshop_admin`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>