<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupPointCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl22_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl22_argument'}->createConditionValue();
if(!${'selected_group_srl22_argument'}->isValid()) return ${'selected_group_srl22_argument'}->getErrorMessage();
} else
${'selected_group_srl22_argument'} = NULL;if(isset($args->start_date)) {
${'start_date23_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date23_argument'}->createConditionValue();
if(!${'start_date23_argument'}->isValid()) return ${'start_date23_argument'}->getErrorMessage();
} else
${'start_date23_argument'} = NULL;if(${'start_date23_argument'} !== null) ${'start_date23_argument'}->setColumnType('date');
if(isset($args->last_date)) {
${'last_date24_argument'} = new ConditionArgument('last_date', $args->last_date, 'less');
${'last_date24_argument'}->createConditionValue();
if(!${'last_date24_argument'}->isValid()) return ${'last_date24_argument'}->getErrorMessage();
} else
${'last_date24_argument'} = NULL;if(${'last_date24_argument'} !== null) ${'last_date24_argument'}->setColumnType('date');
if(isset($args->is_admin)) {
${'is_admin25_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin25_argument'}->createConditionValue();
if(!${'is_admin25_argument'}->isValid()) return ${'is_admin25_argument'}->getErrorMessage();
} else
${'is_admin25_argument'} = NULL;if(${'is_admin25_argument'} !== null) ${'is_admin25_argument'}->setColumnType('char');

${'list_count27_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count27_argument'}->ensureDefaultValue('5');
if(!${'list_count27_argument'}->isValid()) return ${'list_count27_argument'}->getErrorMessage();

${'sort_index26_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index26_argument'}->ensureDefaultValue('count');
if(!${'sort_index26_argument'}->isValid()) return ${'sort_index26_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('substr(`member`.`nick_name`,1,10)', '`nick_name`')
,new SelectExpression('sum(`phistory`.`point`)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_pointhistory`', '`phistory`')
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
,new ConditionWithoutArgument('`member`.`member_srl`','`phistory`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl22_argument,"in", 'and')
,new ConditionWithoutArgument('trim(`phistory`.`act`)',"'procPointAdminUpdatePoint'","notequal", 'and')
,new ConditionWithoutArgument('trim(`phistory`.`act`)',"'procMemberInsert'","notequal", 'and')
,new ConditionWithArgument('`phistory`.`regdate`',$start_date23_argument,"more", 'and')
,new ConditionWithArgument('`phistory`.`regdate`',$last_date24_argument,"less", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin25_argument,"equal", 'and')))
));
$query->setGroups(array(
'`phistory`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index26_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count27_argument'}));
return $query; ?>