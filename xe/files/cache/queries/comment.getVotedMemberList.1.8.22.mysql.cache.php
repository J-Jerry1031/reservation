<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getVotedMemberList");
$query->setAction("select");
$query->setPriority("");

${'comment_srl18_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'equal');
${'comment_srl18_argument'}->checkFilter('number');
${'comment_srl18_argument'}->checkNotNull();
${'comment_srl18_argument'}->createConditionValue();
if(!${'comment_srl18_argument'}->isValid()) return ${'comment_srl18_argument'}->getErrorMessage();
if(${'comment_srl18_argument'} !== null) ${'comment_srl18_argument'}->setColumnType('number');
if(isset($args->more_point)) {
${'more_point19_argument'} = new ConditionArgument('more_point', $args->more_point, 'more');
${'more_point19_argument'}->createConditionValue();
if(!${'more_point19_argument'}->isValid()) return ${'more_point19_argument'}->getErrorMessage();
} else
${'more_point19_argument'} = NULL;if(${'more_point19_argument'} !== null) ${'more_point19_argument'}->setColumnType('number');
if(isset($args->below_point)) {
${'below_point20_argument'} = new ConditionArgument('below_point', $args->below_point, 'below');
${'below_point20_argument'}->createConditionValue();
if(!${'below_point20_argument'}->isValid()) return ${'below_point20_argument'}->getErrorMessage();
} else
${'below_point20_argument'} = NULL;if(${'below_point20_argument'} !== null) ${'below_point20_argument'}->setColumnType('number');

${'sort_index21_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index21_argument'}->ensureDefaultValue('voted_log.regdate');
if(!${'sort_index21_argument'}->isValid()) return ${'sort_index21_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
));
$query->setTables(array(
new Table('`xe_comment_voted_log`', '`voted_log`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`voted_log`.`comment_srl`',$comment_srl18_argument,"equal")
,new ConditionWithoutArgument('`voted_log`.`member_srl`','`member`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`voted_log`.`point`',$more_point19_argument,"more", 'and')
,new ConditionWithArgument('`voted_log`.`point`',$below_point20_argument,"below", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index21_argument'}, "desc")
));
$query->setLimit();
return $query; ?>