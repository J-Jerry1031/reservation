<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistWeekly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl52_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl52_argument'}->createConditionValue();
if(!${'member_srl52_argument'}->isValid()) return ${'member_srl52_argument'}->getErrorMessage();
} else
${'member_srl52_argument'} = NULL;if(${'member_srl52_argument'} !== null) ${'member_srl52_argument'}->setColumnType('number');
if(isset($args->monday)) {
${'monday53_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday53_argument'}->createConditionValue();
if(!${'monday53_argument'}->isValid()) return ${'monday53_argument'}->getErrorMessage();
} else
${'monday53_argument'} = NULL;if(${'monday53_argument'} !== null) ${'monday53_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday54_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday54_argument'}->createConditionValue();
if(!${'sunday54_argument'}->isValid()) return ${'sunday54_argument'}->getErrorMessage();
} else
${'sunday54_argument'} = NULL;if(${'sunday54_argument'} !== null) ${'sunday54_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl52_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$monday53_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday54_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>