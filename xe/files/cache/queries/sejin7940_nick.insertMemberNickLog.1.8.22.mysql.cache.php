<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMemberNickLog");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl27_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl27_argument'}->isValid()) return ${'member_srl27_argument'}->getErrorMessage();
} else
${'member_srl27_argument'} = NULL;if(${'member_srl27_argument'} !== null) ${'member_srl27_argument'}->setColumnType('number');
if(isset($args->nick_name_old)) {
${'nick_name_old28_argument'} = new Argument('nick_name_old', $args->{'nick_name_old'});
if(!${'nick_name_old28_argument'}->isValid()) return ${'nick_name_old28_argument'}->getErrorMessage();
} else
${'nick_name_old28_argument'} = NULL;if(${'nick_name_old28_argument'} !== null) ${'nick_name_old28_argument'}->setColumnType('varchar');
if(isset($args->nick_name_new)) {
${'nick_name_new29_argument'} = new Argument('nick_name_new', $args->{'nick_name_new'});
if(!${'nick_name_new29_argument'}->isValid()) return ${'nick_name_new29_argument'}->getErrorMessage();
} else
${'nick_name_new29_argument'} = NULL;if(${'nick_name_new29_argument'} !== null) ${'nick_name_new29_argument'}->setColumnType('varchar');

${'regdate30_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate30_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate30_argument'}->isValid()) return ${'regdate30_argument'}->getErrorMessage();
if(${'regdate30_argument'} !== null) ${'regdate30_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl27_argument'})
,new InsertExpression('`nick_name_old`', ${'nick_name_old28_argument'})
,new InsertExpression('`nick_name_new`', ${'nick_name_new29_argument'})
,new InsertExpression('`regdate`', ${'regdate30_argument'})
));
$query->setTables(array(
new Table('`xe_member_nick_log`', '`member_nick_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>