<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocument");
$query->setAction("update");
$query->setPriority("");
if(isset($args->readed_count)) {
${'readed_count1_argument'} = new Argument('readed_count', $args->{'readed_count'});
if(!${'readed_count1_argument'}->isValid()) return ${'readed_count1_argument'}->getErrorMessage();
} else
${'readed_count1_argument'} = NULL;if(${'readed_count1_argument'} !== null) ${'readed_count1_argument'}->setColumnType('number');
if(isset($args->voted_count)) {
${'voted_count2_argument'} = new Argument('voted_count', $args->{'voted_count'});
if(!${'voted_count2_argument'}->isValid()) return ${'voted_count2_argument'}->getErrorMessage();
} else
${'voted_count2_argument'} = NULL;if(${'voted_count2_argument'} !== null) ${'voted_count2_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate3_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
} else
${'regdate3_argument'} = NULL;if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');
if(isset($args->last_update)) {
${'last_update4_argument'} = new Argument('last_update', $args->{'last_update'});
if(!${'last_update4_argument'}->isValid()) return ${'last_update4_argument'}->getErrorMessage();
} else
${'last_update4_argument'} = NULL;if(${'last_update4_argument'} !== null) ${'last_update4_argument'}->setColumnType('date');
if(isset($args->list_order)) {
${'list_order5_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order5_argument'}->isValid()) return ${'list_order5_argument'}->getErrorMessage();
} else
${'list_order5_argument'} = NULL;if(${'list_order5_argument'} !== null) ${'list_order5_argument'}->setColumnType('number');

${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->checkNotNull();
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`readed_count`', ${'readed_count1_argument'})
,new UpdateExpression('`voted_count`', ${'voted_count2_argument'})
,new UpdateExpression('`regdate`', ${'regdate3_argument'})
,new UpdateExpression('`last_update`', ${'last_update4_argument'})
,new UpdateExpression('`list_order`', ${'list_order5_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>