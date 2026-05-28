<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePointhistory");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->regdate)) {
${'regdate11_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate11_argument'}->checkFilter('number');
${'regdate11_argument'}->createConditionValue();
if(!${'regdate11_argument'}->isValid()) return ${'regdate11_argument'}->getErrorMessage();
} else
${'regdate11_argument'} = NULL;if(${'regdate11_argument'} !== null) ${'regdate11_argument'}->setColumnType('date');
if(isset($args->member_srl)) {
${'member_srl12_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl12_argument'}->checkFilter('number');
${'member_srl12_argument'}->createConditionValue();
if(!${'member_srl12_argument'}->isValid()) return ${'member_srl12_argument'}->getErrorMessage();
} else
${'member_srl12_argument'} = NULL;if(${'member_srl12_argument'} !== null) ${'member_srl12_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_pointhistory`', '`pointhistory`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate11_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>