<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getVotedMemberList");
$query->setAction("select");
$query->setPriority("");

${'document_srl4_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl4_argument'}->checkFilter('number');
${'document_srl4_argument'}->checkNotNull();
${'document_srl4_argument'}->createConditionValue();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');
if(isset($args->more_point)) {
${'more_point5_argument'} = new ConditionArgument('more_point', $args->more_point, 'more');
${'more_point5_argument'}->createConditionValue();
if(!${'more_point5_argument'}->isValid()) return ${'more_point5_argument'}->getErrorMessage();
} else
${'more_point5_argument'} = NULL;if(${'more_point5_argument'} !== null) ${'more_point5_argument'}->setColumnType('number');
if(isset($args->below_point)) {
${'below_point6_argument'} = new ConditionArgument('below_point', $args->below_point, 'below');
${'below_point6_argument'}->createConditionValue();
if(!${'below_point6_argument'}->isValid()) return ${'below_point6_argument'}->getErrorMessage();
} else
${'below_point6_argument'} = NULL;if(${'below_point6_argument'} !== null) ${'below_point6_argument'}->setColumnType('number');

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('4');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('voted_log.regdate');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`voted_log`.`regdate`', '`regdate`')
,new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
));
$query->setTables(array(
new Table('`xe_document_voted_log`', '`voted_log`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`voted_log`.`document_srl`',$document_srl4_argument,"equal")
,new ConditionWithoutArgument('`voted_log`.`member_srl`','`member`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`voted_log`.`point`',$more_point5_argument,"more", 'and')
,new ConditionWithArgument('`voted_log`.`point`',$below_point6_argument,"below", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count8_argument'}));
return $query; ?>