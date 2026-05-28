<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistContinuity");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
} else
${'member_srl4_argument'} = NULL;if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');
if(isset($args->yesterday)) {
${'yesterday5_argument'} = new ConditionArgument('yesterday', $args->yesterday, 'equal');
${'yesterday5_argument'}->createConditionValue();
if(!${'yesterday5_argument'}->isValid()) return ${'yesterday5_argument'}->getErrorMessage();
} else
${'yesterday5_argument'} = NULL;
$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal", 'and')
,new ConditionWithArgument('substr(`regdate`,1,8)',$yesterday5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>