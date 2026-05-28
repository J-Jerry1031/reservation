<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentUsers");
$query->setAction("select");
$query->setPriority("");

${'document_srl1_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
${'document_srl1_argument'}->createConditionValue();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`member_srl`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`status`','1',"equal", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl1_argument,"equal", 'and')
,new ConditionWithoutArgument('`member_srl`','0',"excess", 'and')))
));
$query->setGroups(array(
'`member_srl`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>