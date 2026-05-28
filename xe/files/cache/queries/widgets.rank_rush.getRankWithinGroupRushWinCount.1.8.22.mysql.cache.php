<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupRushWinCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->stDate)) {
${'stDate6_argument'} = new ConditionArgument('stDate', $args->stDate, 'more');
${'stDate6_argument'}->createConditionValue();
if(!${'stDate6_argument'}->isValid()) return ${'stDate6_argument'}->getErrorMessage();
} else
${'stDate6_argument'} = NULL;if(${'stDate6_argument'} !== null) ${'stDate6_argument'}->setColumnType('date');
if(isset($args->edDate)) {
${'edDate7_argument'} = new ConditionArgument('edDate', $args->edDate, 'less');
${'edDate7_argument'}->createConditionValue();
if(!${'edDate7_argument'}->isValid()) return ${'edDate7_argument'}->getErrorMessage();
} else
${'edDate7_argument'} = NULL;if(${'edDate7_argument'} !== null) ${'edDate7_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl8_argument'}->checkFilter('number');
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
} else
${'module_srl8_argument'} = NULL;if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin9_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin9_argument'}->createConditionValue();
if(!${'is_admin9_argument'}->isValid()) return ${'is_admin9_argument'}->getErrorMessage();
} else
${'is_admin9_argument'} = NULL;if(${'is_admin9_argument'} !== null) ${'is_admin9_argument'}->setColumnType('char');

${'list_count12_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count12_argument'}->ensureDefaultValue('5');
if(!${'list_count12_argument'}->isValid()) return ${'list_count12_argument'}->getErrorMessage();

${'sort_index11_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index11_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index11_argument'}->isValid()) return ${'sort_index11_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('count');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`pointrush`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('count(`pointrush`.`member_srl`)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_pointrush_log`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`pointrush`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`pointrush`.`regdate`',$stDate6_argument,"more", 'and')
,new ConditionWithArgument('`pointrush`.`regdate`',$edDate7_argument,"less", 'and')
,new ConditionWithArgument('`pointrush`.`module_srl`',$module_srl8_argument,"in", 'and')
,new ConditionWithoutArgument('`pointrush`.`is_winner`',"'Y'","equal", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin9_argument,"equal", 'and')))
));
$query->setGroups(array(
'`pointrush`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "desc")
,new OrderByColumn(${'sort_index11_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count12_argument'}));
return $query; ?>