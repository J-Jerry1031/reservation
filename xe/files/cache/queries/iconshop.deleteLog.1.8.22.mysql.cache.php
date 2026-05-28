<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMemberIcon");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->data_srl)) {
${'data_srl1_argument'} = new ConditionArgument('data_srl', $args->data_srl, 'equal');
${'data_srl1_argument'}->checkFilter('number');
${'data_srl1_argument'}->createConditionValue();
if(!${'data_srl1_argument'}->isValid()) return ${'data_srl1_argument'}->getErrorMessage();
} else
${'data_srl1_argument'} = NULL;if(${'data_srl1_argument'} !== null) ${'data_srl1_argument'}->setColumnType('number');
if(isset($args->icon_srl)) {
${'icon_srl2_argument'} = new ConditionArgument('icon_srl', $args->icon_srl, 'equal');
${'icon_srl2_argument'}->checkFilter('number');
${'icon_srl2_argument'}->createConditionValue();
if(!${'icon_srl2_argument'}->isValid()) return ${'icon_srl2_argument'}->getErrorMessage();
} else
${'icon_srl2_argument'} = NULL;if(${'icon_srl2_argument'} !== null) ${'icon_srl2_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl3_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl3_argument'}->checkFilter('number');
${'category_srl3_argument'}->createConditionValue();
if(!${'category_srl3_argument'}->isValid()) return ${'category_srl3_argument'}->getErrorMessage();
} else
${'category_srl3_argument'} = NULL;if(${'category_srl3_argument'} !== null) ${'category_srl3_argument'}->setColumnType('number');
if(isset($args->sender_srl)) {
${'sender_srl4_argument'} = new ConditionArgument('sender_srl', $args->sender_srl, 'equal');
${'sender_srl4_argument'}->checkFilter('number');
${'sender_srl4_argument'}->createConditionValue();
if(!${'sender_srl4_argument'}->isValid()) return ${'sender_srl4_argument'}->getErrorMessage();
} else
${'sender_srl4_argument'} = NULL;if(${'sender_srl4_argument'} !== null) ${'sender_srl4_argument'}->setColumnType('number');
if(isset($args->receive_srl)) {
${'receive_srl5_argument'} = new ConditionArgument('receive_srl', $args->receive_srl, 'equal');
${'receive_srl5_argument'}->checkFilter('number');
${'receive_srl5_argument'}->createConditionValue();
if(!${'receive_srl5_argument'}->isValid()) return ${'receive_srl5_argument'}->getErrorMessage();
} else
${'receive_srl5_argument'} = NULL;if(${'receive_srl5_argument'} !== null) ${'receive_srl5_argument'}->setColumnType('number');
if(isset($args->regdate_less)) {
${'regdate_less6_argument'} = new ConditionArgument('regdate_less', $args->regdate_less, 'less');
${'regdate_less6_argument'}->createConditionValue();
if(!${'regdate_less6_argument'}->isValid()) return ${'regdate_less6_argument'}->getErrorMessage();
} else
${'regdate_less6_argument'} = NULL;if(${'regdate_less6_argument'} !== null) ${'regdate_less6_argument'}->setColumnType('date');

$query->setTables(array(
new Table('`xe_iconshop_log`', '`iconshop_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`data_srl`',$data_srl1_argument,"equal")
,new ConditionWithArgument('`icon_srl`',$icon_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`sender_srl`',$sender_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`receive_srl`',$receive_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate_less6_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>