<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("countUnnotifiedMembers");
$query->setAction("select");
$query->setPriority("");

${'is_admin1_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin1_argument'}->ensureDefaultValue('N');
${'is_admin1_argument'}->createConditionValue();
if(!${'is_admin1_argument'}->isValid()) return ${'is_admin1_argument'}->getErrorMessage();
if(${'is_admin1_argument'} !== null) ${'is_admin1_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->threshold)) {
${'threshold3_argument'} = new ConditionArgument('threshold', $args->threshold, 'less');
${'threshold3_argument'}->createConditionValue();
if(!${'threshold3_argument'}->isValid()) return ${'threshold3_argument'}->getErrorMessage();
} else
${'threshold3_argument'} = NULL;if(${'threshold3_argument'} !== null) ${'threshold3_argument'}->setColumnType('date');
if(isset($args->threshold)) {
${'threshold4_argument'} = new ConditionArgument('threshold', $args->threshold, 'less');
${'threshold4_argument'}->createConditionValue();
if(!${'threshold4_argument'}->isValid()) return ${'threshold4_argument'}->getErrorMessage();
} else
${'threshold4_argument'} = NULL;if(${'threshold4_argument'} !== null) ${'threshold4_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new JoinTable('`xe_member_expired_notified`', '`notified`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`notified`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member`.`is_admin`',$is_admin1_argument,"equal")
,new ConditionWithArgument('`member`.`member_srl`',$member_srl2_argument,"equal", 'and')
,new ConditionWithoutArgument('`notified`.`notified_date`','``',"null", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`regdate`',$threshold3_argument,"less")
,new ConditionWithoutArgument('`member`.`regdate`','``',"null", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`last_login`',$threshold4_argument,"less")
,new ConditionWithoutArgument('`member`.`last_login`','``',"null", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>