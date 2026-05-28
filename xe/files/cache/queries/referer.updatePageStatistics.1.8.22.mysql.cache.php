<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePageStatistics");
$query->setAction("update");
$query->setPriority("");

${'count29_argument'} = new Argument('count', $args->{'count'});
${'count29_argument'}->setColumnOperation('+');
${'count29_argument'}->ensureDefaultValue(1);
if(!${'count29_argument'}->isValid()) return ${'count29_argument'}->getErrorMessage();
if(${'count29_argument'} !== null) ${'count29_argument'}->setColumnType('number');
if(isset($args->ref_mid)) {
${'ref_mid30_argument'} = new ConditionArgument('ref_mid', $args->ref_mid, 'equal');
${'ref_mid30_argument'}->createConditionValue();
if(!${'ref_mid30_argument'}->isValid()) return ${'ref_mid30_argument'}->getErrorMessage();
} else
${'ref_mid30_argument'} = NULL;if(${'ref_mid30_argument'} !== null) ${'ref_mid30_argument'}->setColumnType('varchar');
if(isset($args->ref_document_srl)) {
${'ref_document_srl31_argument'} = new ConditionArgument('ref_document_srl', $args->ref_document_srl, 'equal');
${'ref_document_srl31_argument'}->createConditionValue();
if(!${'ref_document_srl31_argument'}->isValid()) return ${'ref_document_srl31_argument'}->getErrorMessage();
} else
${'ref_document_srl31_argument'} = NULL;if(${'ref_document_srl31_argument'} !== null) ${'ref_document_srl31_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count29_argument'})
));
$query->setTables(array(
new Table('`xe_referer_page_statistics`', '`referer_page_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ref_mid`',$ref_mid30_argument,"equal")
,new ConditionWithArgument('`ref_document_srl`',$ref_document_srl31_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>