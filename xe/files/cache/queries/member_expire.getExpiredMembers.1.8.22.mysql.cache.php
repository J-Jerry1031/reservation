<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExpiredMembers");
$query->setAction("select");
$query->setPriority("");

${'is_admin9_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin9_argument'}->ensureDefaultValue('N');
${'is_admin9_argument'}->createConditionValue();
if(!${'is_admin9_argument'}->isValid()) return ${'is_admin9_argument'}->getErrorMessage();
if(${'is_admin9_argument'} !== null) ${'is_admin9_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl10_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl10_argument'}->createConditionValue();
if(!${'member_srl10_argument'}->isValid()) return ${'member_srl10_argument'}->getErrorMessage();
} else
${'member_srl10_argument'} = NULL;if(${'member_srl10_argument'} !== null) ${'member_srl10_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id11_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id11_argument'}->createConditionValue();
if(!${'user_id11_argument'}->isValid()) return ${'user_id11_argument'}->getErrorMessage();
} else
${'user_id11_argument'} = NULL;if(${'user_id11_argument'} !== null) ${'user_id11_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address12_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address12_argument'}->createConditionValue();
if(!${'email_address12_argument'}->isValid()) return ${'email_address12_argument'}->getErrorMessage();
} else
${'email_address12_argument'} = NULL;if(${'email_address12_argument'} !== null) ${'email_address12_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name13_argument'} = new ConditionArgument('user_name', $args->user_name, 'equal');
${'user_name13_argument'}->createConditionValue();
if(!${'user_name13_argument'}->isValid()) return ${'user_name13_argument'}->getErrorMessage();
} else
${'user_name13_argument'} = NULL;if(${'user_name13_argument'} !== null) ${'user_name13_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name14_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name14_argument'}->createConditionValue();
if(!${'nick_name14_argument'}->isValid()) return ${'nick_name14_argument'}->getErrorMessage();
} else
${'nick_name14_argument'} = NULL;if(${'nick_name14_argument'} !== null) ${'nick_name14_argument'}->setColumnType('varchar');
if(isset($args->threshold)) {
${'threshold15_argument'} = new ConditionArgument('threshold', $args->threshold, 'less');
${'threshold15_argument'}->createConditionValue();
if(!${'threshold15_argument'}->isValid()) return ${'threshold15_argument'}->getErrorMessage();
} else
${'threshold15_argument'} = NULL;if(${'threshold15_argument'} !== null) ${'threshold15_argument'}->setColumnType('date');
if(isset($args->threshold)) {
${'threshold16_argument'} = new ConditionArgument('threshold', $args->threshold, 'less');
${'threshold16_argument'}->createConditionValue();
if(!${'threshold16_argument'}->isValid()) return ${'threshold16_argument'}->getErrorMessage();
} else
${'threshold16_argument'} = NULL;if(${'threshold16_argument'} !== null) ${'threshold16_argument'}->setColumnType('date');

${'page21_argument'} = new Argument('page', $args->{'page'});
${'page21_argument'}->ensureDefaultValue('1');
if(!${'page21_argument'}->isValid()) return ${'page21_argument'}->getErrorMessage();

${'page_count22_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count22_argument'}->ensureDefaultValue('10');
if(!${'page_count22_argument'}->isValid()) return ${'page_count22_argument'}->getErrorMessage();

${'list_count23_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count23_argument'}->ensureDefaultValue('10');
if(!${'list_count23_argument'}->isValid()) return ${'list_count23_argument'}->getErrorMessage();

${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index19_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

${'orderby20_argument'} = new SortArgument('orderby20', $args->orderby);
${'orderby20_argument'}->ensureDefaultValue('asc');
if(!${'orderby20_argument'}->isValid()) return ${'orderby20_argument'}->getErrorMessage();

${'sort_index17_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index17_argument'}->ensureDefaultValue('last_login');
if(!${'sort_index17_argument'}->isValid()) return ${'sort_index17_argument'}->getErrorMessage();

${'orderby18_argument'} = new SortArgument('orderby18', $args->orderby);
${'orderby18_argument'}->ensureDefaultValue('asc');
if(!${'orderby18_argument'}->isValid()) return ${'orderby18_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member`.*')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new JoinTable('`xe_member_expired_exceptions`', '`exc`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`exc`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`exc`.`member_srl`','``',"null")
,new ConditionWithArgument('`is_admin`',$is_admin9_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl10_argument,"equal", 'and')
,new ConditionWithArgument('`user_id`',$user_id11_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address12_argument,"equal", 'and')
,new ConditionWithArgument('`user_name`',$user_name13_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name14_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$threshold15_argument,"less")
,new ConditionWithoutArgument('`regdate`','``',"null", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_login`',$threshold16_argument,"less")
,new ConditionWithoutArgument('`last_login`','``',"null", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index17_argument'}, $orderby18_argument)
,new OrderByColumn(${'sort_index19_argument'}, $orderby20_argument)
));
$query->setLimit(new Limit(${'list_count23_argument'}, ${'page21_argument'}, ${'page_count22_argument'}));
return $query; ?>