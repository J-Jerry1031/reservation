<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateYearly");
$query->setAction("update");
$query->setPriority("");

${'regdate38_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate38_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate38_argument'}->checkNotNull();
if(!${'regdate38_argument'}->isValid()) return ${'regdate38_argument'}->getErrorMessage();
if(${'regdate38_argument'} !== null) ${'regdate38_argument'}->setColumnType('varchar');
if(isset($args->yearly)) {
${'yearly39_argument'} = new Argument('yearly', $args->{'yearly'});
if(!${'yearly39_argument'}->isValid()) return ${'yearly39_argument'}->getErrorMessage();
} else
${'yearly39_argument'} = NULL;if(${'yearly39_argument'} !== null) ${'yearly39_argument'}->setColumnType('number');
if(isset($args->yearly_point)) {
${'yearly_point40_argument'} = new Argument('yearly_point', $args->{'yearly_point'});
if(!${'yearly_point40_argument'}->isValid()) return ${'yearly_point40_argument'}->getErrorMessage();
} else
${'yearly_point40_argument'} = NULL;if(${'yearly_point40_argument'} !== null) ${'yearly_point40_argument'}->setColumnType('number');

${'member_srl41_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl41_argument'}->ensureDefaultValue('admin');
${'member_srl41_argument'}->checkNotNull();
${'member_srl41_argument'}->createConditionValue();
if(!${'member_srl41_argument'}->isValid()) return ${'member_srl41_argument'}->getErrorMessage();
if(${'member_srl41_argument'} !== null) ${'member_srl41_argument'}->setColumnType('number');

${'year42_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year42_argument'}->checkNotNull();
${'year42_argument'}->createConditionValue();
if(!${'year42_argument'}->isValid()) return ${'year42_argument'}->getErrorMessage();
if(${'year42_argument'} !== null) ${'year42_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate38_argument'})
,new UpdateExpression('`yearly`', ${'yearly39_argument'})
,new UpdateExpression('`yearly_point`', ${'yearly_point40_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl41_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$year42_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>