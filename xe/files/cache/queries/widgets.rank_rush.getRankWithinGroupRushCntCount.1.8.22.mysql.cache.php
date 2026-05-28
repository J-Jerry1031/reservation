<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupRushCntCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->stDate)) {
${'stDate13_argument'} = new ConditionArgument('stDate', $args->stDate, 'more');
${'stDate13_argument'}->createConditionValue();
if(!${'stDate13_argument'}->isValid()) return ${'stDate13_argument'}->getErrorMessage();
} else
${'stDate13_argument'} = NULL;if(${'stDate13_argument'} !== null) ${'stDate13_argument'}->setColumnType('date');
if(isset($args->edDate)) {
${'edDate14_argument'} = new ConditionArgument('edDate', $args->edDate, 'less');
${'edDate14_argument'}->createConditionValue();
if(!${'edDate14_argument'}->isValid()) return ${'edDate14_argument'}->getErrorMessage();
} else
${'edDate14_argument'} = NULL;if(${'edDate14_argument'} !== null) ${'edDate14_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
} else
${'module_srl15_argument'} = NULL;if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin16_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin16_argument'}->createConditionValue();
if(!${'is_admin16_argument'}->isValid()) return ${'is_admin16_argument'}->getErrorMessage();
} else
${'is_admin16_argument'} = NULL;if(${'is_admin16_argument'} !== null) ${'is_admin16_argument'}->setColumnType('char');

${'list_count19_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count19_argument'}->ensureDefaultValue('5');
if(!${'list_count19_argument'}->isValid()) return ${'list_count19_argument'}->getErrorMessage();

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('member.member_srl');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

${'sort_index17_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index17_argument'}->ensureDefaultValue('count');
if(!${'sort_index17_argument'}->isValid()) return ${'sort_index17_argument'}->getErrorMessage();

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
,new ConditionWithArgument('`pointrush`.`regdate`',$stDate13_argument,"more", 'and')
,new ConditionWithArgument('`pointrush`.`regdate`',$edDate14_argument,"less", 'and')
,new ConditionWithArgument('`pointrush`.`module_srl`',$module_srl15_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin16_argument,"equal", 'and')))
));
$query->setGroups(array(
'`pointrush`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index17_argument'}, "desc")
,new OrderByColumn(${'sort_index18_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count19_argument'}));
return $query; ?>