<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberAdmins");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin1_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin1_argument'}->createConditionValue();
if(!${'is_admin1_argument'}->isValid()) return ${'is_admin1_argument'}->getErrorMessage();
} else
${'is_admin1_argument'} = NULL;if(${'is_admin1_argument'} !== null) ${'is_admin1_argument'}->setColumnType('char');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>