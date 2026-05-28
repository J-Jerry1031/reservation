<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMovedMembers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id2_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id2_argument'}->createConditionValue();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
} else
${'user_id2_argument'} = NULL;if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address3_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address3_argument'}->createConditionValue();
if(!${'email_address3_argument'}->isValid()) return ${'email_address3_argument'}->getErrorMessage();
} else
${'email_address3_argument'} = NULL;if(${'email_address3_argument'} !== null) ${'email_address3_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name4_argument'} = new ConditionArgument('user_name', $args->user_name, 'equal');
${'user_name4_argument'}->createConditionValue();
if(!${'user_name4_argument'}->isValid()) return ${'user_name4_argument'}->getErrorMessage();
} else
${'user_name4_argument'} = NULL;if(${'user_name4_argument'} !== null) ${'user_name4_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name5_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name5_argument'}->createConditionValue();
if(!${'nick_name5_argument'}->isValid()) return ${'nick_name5_argument'}->getErrorMessage();
} else
${'nick_name5_argument'} = NULL;if(${'nick_name5_argument'} !== null) ${'nick_name5_argument'}->setColumnType('varchar');

${'page10_argument'} = new Argument('page', $args->{'page'});
${'page10_argument'}->ensureDefaultValue('1');
if(!${'page10_argument'}->isValid()) return ${'page10_argument'}->getErrorMessage();

${'page_count11_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count11_argument'}->ensureDefaultValue('10');
if(!${'page_count11_argument'}->isValid()) return ${'page_count11_argument'}->getErrorMessage();

${'list_count12_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count12_argument'}->ensureDefaultValue('10');
if(!${'list_count12_argument'}->isValid()) return ${'list_count12_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

${'orderby9_argument'} = new SortArgument('orderby9', $args->orderby);
${'orderby9_argument'}->ensureDefaultValue('asc');
if(!${'orderby9_argument'}->isValid()) return ${'orderby9_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('last_login');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

${'orderby7_argument'} = new SortArgument('orderby7', $args->orderby);
${'orderby7_argument'}->ensureDefaultValue('asc');
if(!${'orderby7_argument'}->isValid()) return ${'orderby7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_expired`', '`member_expired`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`user_id`',$user_id2_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address3_argument,"equal", 'and')
,new ConditionWithArgument('`user_name`',$user_name4_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, $orderby7_argument)
,new OrderByColumn(${'sort_index8_argument'}, $orderby9_argument)
));
$query->setLimit(new Limit(${'list_count12_argument'}, ${'page10_argument'}, ${'page_count11_argument'}));
return $query; ?>