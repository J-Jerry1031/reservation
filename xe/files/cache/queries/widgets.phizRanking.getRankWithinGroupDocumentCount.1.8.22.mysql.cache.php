<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRankWithinGroupDocumentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->selected_group_srl)) {
${'selected_group_srl28_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl28_argument'}->createConditionValue();
if(!${'selected_group_srl28_argument'}->isValid()) return ${'selected_group_srl28_argument'}->getErrorMessage();
} else
${'selected_group_srl28_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl29_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'more');
${'member_srl29_argument'}->createConditionValue();
if(!${'member_srl29_argument'}->isValid()) return ${'member_srl29_argument'}->getErrorMessage();
} else
${'member_srl29_argument'} = NULL;if(${'member_srl29_argument'} !== null) ${'member_srl29_argument'}->setColumnType('number');
if(isset($args->strDate)) {
${'strDate30_argument'} = new ConditionArgument('strDate', $args->strDate, 'more');
${'strDate30_argument'}->createConditionValue();
if(!${'strDate30_argument'}->isValid()) return ${'strDate30_argument'}->getErrorMessage();
} else
${'strDate30_argument'} = NULL;if(${'strDate30_argument'} !== null) ${'strDate30_argument'}->setColumnType('date');
if(isset($args->module_srl)) {
${'module_srl31_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl31_argument'}->checkFilter('number');
${'module_srl31_argument'}->createConditionValue();
if(!${'module_srl31_argument'}->isValid()) return ${'module_srl31_argument'}->getErrorMessage();
} else
${'module_srl31_argument'} = NULL;if(${'module_srl31_argument'} !== null) ${'module_srl31_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList32_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList32_argument'}->createConditionValue();
if(!${'statusList32_argument'}->isValid()) return ${'statusList32_argument'}->getErrorMessage();
} else
${'statusList32_argument'} = NULL;if(${'statusList32_argument'} !== null) ${'statusList32_argument'}->setColumnType('varchar');
if(isset($args->is_admin)) {
${'is_admin33_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin33_argument'}->createConditionValue();
if(!${'is_admin33_argument'}->isValid()) return ${'is_admin33_argument'}->getErrorMessage();
} else
${'is_admin33_argument'} = NULL;if(${'is_admin33_argument'} !== null) ${'is_admin33_argument'}->setColumnType('char');

${'list_count35_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count35_argument'}->ensureDefaultValue('5');
if(!${'list_count35_argument'}->isValid()) return ${'list_count35_argument'}->getErrorMessage();

${'sort_index34_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index34_argument'}->ensureDefaultValue('count');
if(!${'sort_index34_argument'}->isValid()) return ${'sort_index34_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`member_srl`', '`member_srl`')
,new SelectExpression('`documents`.`nick_name`', '`nick_name`')
,new SelectExpression('count(`documents`.`document_srl`)', '`count`')
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
,new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl28_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl29_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$strDate30_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl31_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList32_argument,"in", 'and')
,new ConditionWithArgument('`member`.`is_admin`',$is_admin33_argument,"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index34_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count35_argument'}));
return $query; ?>