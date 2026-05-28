<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSavedDoc");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl12_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl12_argument'}->createConditionValue();
if(!${'module_srl12_argument'}->isValid()) return ${'module_srl12_argument'}->getErrorMessage();
} else
${'module_srl12_argument'} = NULL;if(${'module_srl12_argument'} !== null) ${'module_srl12_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress14_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress14_argument'}->createConditionValue();
if(!${'ipaddress14_argument'}->isValid()) return ${'ipaddress14_argument'}->getErrorMessage();
} else
${'ipaddress14_argument'} = NULL;if(${'ipaddress14_argument'} !== null) ${'ipaddress14_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl12_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl13_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>