<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPageStatus");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ref_mid)) {
${'ref_mid27_argument'} = new ConditionArgument('ref_mid', $args->ref_mid, 'equal');
${'ref_mid27_argument'}->createConditionValue();
if(!${'ref_mid27_argument'}->isValid()) return ${'ref_mid27_argument'}->getErrorMessage();
} else
${'ref_mid27_argument'} = NULL;if(${'ref_mid27_argument'} !== null) ${'ref_mid27_argument'}->setColumnType('varchar');
if(isset($args->ref_document_srl)) {
${'ref_document_srl28_argument'} = new ConditionArgument('ref_document_srl', $args->ref_document_srl, 'equal');
${'ref_document_srl28_argument'}->createConditionValue();
if(!${'ref_document_srl28_argument'}->isValid()) return ${'ref_document_srl28_argument'}->getErrorMessage();
} else
${'ref_document_srl28_argument'} = NULL;if(${'ref_document_srl28_argument'} !== null) ${'ref_document_srl28_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_referer_page_statistics`', '`referer_page_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ref_mid`',$ref_mid27_argument,"equal")
,new ConditionWithArgument('`ref_document_srl`',$ref_document_srl28_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>