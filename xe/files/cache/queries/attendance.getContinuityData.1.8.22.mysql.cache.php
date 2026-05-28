<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getContinuityData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->yesterday)) {
${'yesterday6_argument'} = new ConditionArgument('yesterday', $args->yesterday, 'equal');
${'yesterday6_argument'}->createConditionValue();
if(!${'yesterday6_argument'}->isValid()) return ${'yesterday6_argument'}->getErrorMessage();
} else
${'yesterday6_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
} else
${'member_srl7_argument'} = NULL;if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('substr(`regdate`,1,8)',$yesterday6_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>