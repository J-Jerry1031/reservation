<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl36_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl36_argument'}->createConditionValue();
if(!${'selected_group_srl36_argument'}->isValid()) return ${'selected_group_srl36_argument'}->getErrorMessage();
} else
${'selected_group_srl36_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl37_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl37_argument'}->createConditionValue();
if(!${'member_srl37_argument'}->isValid()) return ${'member_srl37_argument'}->getErrorMessage();
} else
${'member_srl37_argument'} = NULL;if(${'member_srl37_argument'} !== null) ${'member_srl37_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl38_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl38_argument'}->checkFilter('number');
${'module_srl38_argument'}->createConditionValue();
if(!${'module_srl38_argument'}->isValid()) return ${'module_srl38_argument'}->getErrorMessage();
} else
${'module_srl38_argument'} = NULL;if(${'module_srl38_argument'} !== null) ${'module_srl38_argument'}->setColumnType('number');
if(isset($args->strDate)) {
${'strDate39_argument'} = new ConditionArgument('strDate', $args->strDate, 'more');
${'strDate39_argument'}->createConditionValue();
if(!${'strDate39_argument'}->isValid()) return ${'strDate39_argument'}->getErrorMessage();
} else
${'strDate39_argument'} = NULL;if(${'strDate39_argument'} !== null) ${'strDate39_argument'}->setColumnType('date');
if(isset($args->statusComm)) {
${'statusComm40_argument'} = new ConditionArgument('statusComm', $args->statusComm, 'in');
${'statusComm40_argument'}->createConditionValue();
if(!${'statusComm40_argument'}->isValid()) return ${'statusComm40_argument'}->getErrorMessage();
} else
${'statusComm40_argument'} = NULL;if(${'statusComm40_argument'} !== null) ${'statusComm40_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin41_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin41_argument'}->createConditionValue();
if(!${'is_admin41_argument'}->isValid()) return ${'is_admin41_argument'}->getErrorMessage();
} else
${'is_admin41_argument'} = NULL;if(${'is_admin41_argument'} !== null) ${'is_admin41_argument'}->setColumnType('char');

${'list_count43_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count43_argument'}->ensureDefaultValue('5');
if(!${'list_count43_argument'}->isValid()) return ${'list_count43_argument'}->getErrorMessage();

${'sort_index42_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index42_argument'}->ensureDefaultValue('count');
if(!${'sort_index42_argument'}->isValid()) return ${'sort_index42_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`comments`.`member_srl`', '`member_srl`')
,new SelectExpression('`comments`.`nick_name`')
,new SelectExpression('count(`comments`.`comment_srl`)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_comments`', '`comments`')
,new Subquery('`member_group`', array(
new SelectExpression('`group_srl`')
,new SelectExpression('`member_srl`')
), 
array(
new Table('`xe_member_group_member`', '`member_group_member`')
),
array(),
array(
'`member_srl`' ),
array(),
null
)
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`member_group`.`member_srl`',"equal")
,new ConditionWithoutArgument('`member`.`member_srl`','`comments`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl36_argument,"in", 'and')
,new ConditionWithArgument('`comments`.`member_srl`',$member_srl37_argument,"more", 'and')
,new ConditionWithArgument('`comments`.`module_srl`',$module_srl38_argument,"in", 'and')
,new ConditionWithArgument('`comments`.`regdate`',$strDate39_argument,"more", 'and')
,new ConditionWithArgument('`comments`.`status`',$statusComm40_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin41_argument,"equal", 'and')))
));
$query->setGroups(array(
'`comments`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index42_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count43_argument'}));
return $query; ?>