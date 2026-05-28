<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupVotedCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl52_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl52_argument'}->createConditionValue();
if(!${'selected_group_srl52_argument'}->isValid()) return ${'selected_group_srl52_argument'}->getErrorMessage();
} else
${'selected_group_srl52_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl53_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl53_argument'}->createConditionValue();
if(!${'member_srl53_argument'}->isValid()) return ${'member_srl53_argument'}->getErrorMessage();
} else
${'member_srl53_argument'} = NULL;if(${'member_srl53_argument'} !== null) ${'member_srl53_argument'}->setColumnType('number');
if(isset($args->strDate)) {
${'strDate54_argument'} = new ConditionArgument('strDate', $args->strDate, 'more');
${'strDate54_argument'}->createConditionValue();
if(!${'strDate54_argument'}->isValid()) return ${'strDate54_argument'}->getErrorMessage();
} else
${'strDate54_argument'} = NULL;if(${'strDate54_argument'} !== null) ${'strDate54_argument'}->setColumnType('date');
if(isset($args->is_admin)) {
${'is_admin55_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin55_argument'}->createConditionValue();
if(!${'is_admin55_argument'}->isValid()) return ${'is_admin55_argument'}->getErrorMessage();
} else
${'is_admin55_argument'} = NULL;if(${'is_admin55_argument'} !== null) ${'is_admin55_argument'}->setColumnType('char');

${'list_count57_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count57_argument'}->ensureDefaultValue('5');
if(!${'list_count57_argument'}->isValid()) return ${'list_count57_argument'}->getErrorMessage();

${'sort_index56_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index56_argument'}->ensureDefaultValue('count');
if(!${'sort_index56_argument'}->isValid()) return ${'sort_index56_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`member_srl`', '`member_srl`')
,new SelectExpression('`documents`.`nick_name`', '`nick_name`')
,new SelectExpression('sum(`documents`.`voted_count`)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_documents`', '`documents`')
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
,new ConditionWithoutArgument('`member`.`member_srl`','`documents`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl52_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl53_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$strDate54_argument,"more", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin55_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index56_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count57_argument'}));
return $query; ?>