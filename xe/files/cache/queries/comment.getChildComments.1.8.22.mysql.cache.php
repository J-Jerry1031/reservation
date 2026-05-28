<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getChildComments");
$query->setAction("select");
$query->setPriority("");

${'comment_srl9_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'equal');
${'comment_srl9_argument'}->checkFilter('number');
${'comment_srl9_argument'}->checkNotNull();
${'comment_srl9_argument'}->createConditionValue();
if(!${'comment_srl9_argument'}->isValid()) return ${'comment_srl9_argument'}->getErrorMessage();
if(${'comment_srl9_argument'} !== null) ${'comment_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`comment_srl`')
,new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`parent_srl`',$comment_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>