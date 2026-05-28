<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAutologin");
$query->setAction("delete");
$query->setPriority("");

${'autologin_key2_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key2_argument'}->ensureDefaultValue('');
${'autologin_key2_argument'}->createConditionValue();
if(!${'autologin_key2_argument'}->isValid()) return ${'autologin_key2_argument'}->getErrorMessage();
if(${'autologin_key2_argument'} !== null) ${'autologin_key2_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`autologin_key`',$autologin_key2_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal", 'or')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>