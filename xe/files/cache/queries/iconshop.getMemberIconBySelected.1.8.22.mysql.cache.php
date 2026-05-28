<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberIconBySelected");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'is_selected2_argument'} = new ConditionArgument('is_selected', $args->is_selected, 'equal');
${'is_selected2_argument'}->ensureDefaultValue('Y');
${'is_selected2_argument'}->createConditionValue();
if(!${'is_selected2_argument'}->isValid()) return ${'is_selected2_argument'}->getErrorMessage();
if(${'is_selected2_argument'} !== null) ${'is_selected2_argument'}->setColumnType('char');

$query->setColumns(array(
new SelectExpression('`member`.*')
,new SelectExpression('`admin`.`title`')
,new SelectExpression('`admin`.`file1`')
));
$query->setTables(array(
new Table('`xe_iconshop_member`', '`member`')
,new Table('`xe_iconshop_admin`', '`admin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`admin`.`icon_srl`','`member`.`icon_srl`',"equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`member`.`is_selected`',$is_selected2_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>