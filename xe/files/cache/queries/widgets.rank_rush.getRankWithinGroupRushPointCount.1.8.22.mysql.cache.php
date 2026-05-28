<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupRushPointCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->stDate)) {
${'stDate20_argument'} = new ConditionArgument('stDate', $args->stDate, 'more');
${'stDate20_argument'}->createConditionValue();
if(!${'stDate20_argument'}->isValid()) return ${'stDate20_argument'}->getErrorMessage();
} else
${'stDate20_argument'} = NULL;if(${'stDate20_argument'} !== null) ${'stDate20_argument'}->setColumnType('date');
if(isset($args->edDate)) {
${'edDate21_argument'} = new ConditionArgument('edDate', $args->edDate, 'less');
${'edDate21_argument'}->createConditionValue();
if(!${'edDate21_argument'}->isValid()) return ${'edDate21_argument'}->getErrorMessage();
} else
${'edDate21_argument'} = NULL;if(${'edDate21_argument'} !== null) ${'edDate21_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl22_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl22_argument'}->checkFilter('number');
${'module_srl22_argument'}->createConditionValue();
if(!${'module_srl22_argument'}->isValid()) return ${'module_srl22_argument'}->getErrorMessage();
} else
${'module_srl22_argument'} = NULL;if(${'module_srl22_argument'} !== null) ${'module_srl22_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin23_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin23_argument'}->createConditionValue();
if(!${'is_admin23_argument'}->isValid()) return ${'is_admin23_argument'}->getErrorMessage();
} else
${'is_admin23_argument'} = NULL;if(${'is_admin23_argument'} !== null) ${'is_admin23_argument'}->setColumnType('char');

${'list_count26_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count26_argument'}->ensureDefaultValue('5');
if(!${'list_count26_argument'}->isValid()) return ${'list_count26_argument'}->getErrorMessage();

${'sort_index25_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index25_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index25_argument'}->isValid()) return ${'sort_index25_argument'}->getErrorMessage();

${'sort_index24_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index24_argument'}->ensureDefaultValue('sum');
if(!${'sort_index24_argument'}->isValid()) return ${'sort_index24_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`pointrush`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('sum(`pointrush`.`expense_point`)', '`sum`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_pointrush_log`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`pointrush`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`pointrush`.`regdate`',$stDate20_argument,"more", 'and')
,new ConditionWithArgument('`pointrush`.`regdate`',$edDate21_argument,"less", 'and')
,new ConditionWithArgument('`pointrush`.`module_srl`',$module_srl22_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin23_argument,"equal", 'and')))
));
$query->setGroups(array(
'`pointrush`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index24_argument'}, "desc")
,new OrderByColumn(${'sort_index25_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count26_argument'}));
return $query; ?>