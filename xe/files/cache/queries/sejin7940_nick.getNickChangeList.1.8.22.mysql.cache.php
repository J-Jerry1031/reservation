<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNickChangeList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_member_srl)) {
${'s_member_srl1_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl1_argument'}->createConditionValue();
if(!${'s_member_srl1_argument'}->isValid()) return ${'s_member_srl1_argument'}->getErrorMessage();
} else
${'s_member_srl1_argument'} = NULL;if(${'s_member_srl1_argument'} !== null) ${'s_member_srl1_argument'}->setColumnType('number');
if(isset($args->nick_name_old)) {
${'nick_name_old2_argument'} = new ConditionArgument('nick_name_old', $args->nick_name_old, 'equal');
${'nick_name_old2_argument'}->createConditionValue();
if(!${'nick_name_old2_argument'}->isValid()) return ${'nick_name_old2_argument'}->getErrorMessage();
} else
${'nick_name_old2_argument'} = NULL;if(${'nick_name_old2_argument'} !== null) ${'nick_name_old2_argument'}->setColumnType('varchar');
if(isset($args->nick_name_new)) {
${'nick_name_new3_argument'} = new ConditionArgument('nick_name_new', $args->nick_name_new, 'equal');
${'nick_name_new3_argument'}->createConditionValue();
if(!${'nick_name_new3_argument'}->isValid()) return ${'nick_name_new3_argument'}->getErrorMessage();
} else
${'nick_name_new3_argument'} = NULL;if(${'nick_name_new3_argument'} !== null) ${'nick_name_new3_argument'}->setColumnType('varchar');

${'page6_argument'} = new Argument('page', $args->{'page'});
${'page6_argument'}->ensureDefaultValue('1');
if(!${'page6_argument'}->isValid()) return ${'page6_argument'}->getErrorMessage();

${'page_count7_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count7_argument'}->ensureDefaultValue('10');
if(!${'page_count7_argument'}->isValid()) return ${'page_count7_argument'}->getErrorMessage();

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('20');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('nick.regdate');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

${'order_type5_argument'} = new SortArgument('order_type5', $args->order_type);
${'order_type5_argument'}->ensureDefaultValue('asc');
if(!${'order_type5_argument'}->isValid()) return ${'order_type5_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`nick`.*')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`regdate`', '`signup_date`')
));
$query->setTables(array(
new Table('`xe_member_nick_log`', '`nick`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`nick`.`member_srl`','`member`.`member_srl`',"equal")
,new ConditionWithArgument('`nick`.`member_srl`',$s_member_srl1_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`nick`.`nick_name_old`',$nick_name_old2_argument,"equal")
,new ConditionWithArgument('`nick`.`nick_name_new`',$nick_name_new3_argument,"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, $order_type5_argument)
));
$query->setLimit(new Limit(${'list_count8_argument'}, ${'page6_argument'}, ${'page_count7_argument'}));
return $query; ?>