<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateWeekly");
$query->setAction("update");
$query->setPriority("");

${'regdate58_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate58_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate58_argument'}->checkNotNull();
if(!${'regdate58_argument'}->isValid()) return ${'regdate58_argument'}->getErrorMessage();
if(${'regdate58_argument'} !== null) ${'regdate58_argument'}->setColumnType('varchar');
if(isset($args->weekly)) {
${'weekly59_argument'} = new Argument('weekly', $args->{'weekly'});
if(!${'weekly59_argument'}->isValid()) return ${'weekly59_argument'}->getErrorMessage();
} else
${'weekly59_argument'} = NULL;if(${'weekly59_argument'} !== null) ${'weekly59_argument'}->setColumnType('number');
if(isset($args->weekly_point)) {
${'weekly_point60_argument'} = new Argument('weekly_point', $args->{'weekly_point'});
if(!${'weekly_point60_argument'}->isValid()) return ${'weekly_point60_argument'}->getErrorMessage();
} else
${'weekly_point60_argument'} = NULL;if(${'weekly_point60_argument'} !== null) ${'weekly_point60_argument'}->setColumnType('number');

${'member_srl61_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl61_argument'}->ensureDefaultValue('admin');
${'member_srl61_argument'}->createConditionValue();
if(!${'member_srl61_argument'}->isValid()) return ${'member_srl61_argument'}->getErrorMessage();
if(${'member_srl61_argument'} !== null) ${'member_srl61_argument'}->setColumnType('number');
if(isset($args->monday)) {
${'monday62_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday62_argument'}->createConditionValue();
if(!${'monday62_argument'}->isValid()) return ${'monday62_argument'}->getErrorMessage();
} else
${'monday62_argument'} = NULL;if(${'monday62_argument'} !== null) ${'monday62_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday63_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday63_argument'}->createConditionValue();
if(!${'sunday63_argument'}->isValid()) return ${'sunday63_argument'}->getErrorMessage();
} else
${'sunday63_argument'} = NULL;if(${'sunday63_argument'} !== null) ${'sunday63_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate58_argument'})
,new UpdateExpression('`weekly`', ${'weekly59_argument'})
,new UpdateExpression('`weekly_point`', ${'weekly_point60_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl61_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$monday62_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday63_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>