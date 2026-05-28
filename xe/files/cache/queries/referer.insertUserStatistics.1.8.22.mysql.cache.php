<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertUserStatistics");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'count4_argument'} = new Argument('count', $args->{'count'});
${'count4_argument'}->ensureDefaultValue('1');
if(!${'count4_argument'}->isValid()) return ${'count4_argument'}->getErrorMessage();
if(${'count4_argument'} !== null) ${'count4_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl3_argument'})
,new InsertExpression('`count`', ${'count4_argument'})
));
$query->setTables(array(
new Table('`xe_referer_user_statistics`', '`referer_user_statistics`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>