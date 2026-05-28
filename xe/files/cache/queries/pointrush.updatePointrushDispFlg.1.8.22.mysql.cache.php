<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePointrushDispFlg");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->document_srl)) {
${'document_srl1_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl1_argument'}->createConditionValue();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
} else
${'document_srl1_argument'} = NULL;if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`disp_flg`', "'Y'")
));
$query->setTables(array(
new Table('`xe_pointrush`', '`pointrush`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>