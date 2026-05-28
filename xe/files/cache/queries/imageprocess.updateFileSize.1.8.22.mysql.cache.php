<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileSize");
$query->setAction("update");
$query->setPriority("");

${'file_size16_argument'} = new Argument('file_size', $args->{'file_size'});
${'file_size16_argument'}->checkNotNull();
if(!${'file_size16_argument'}->isValid()) return ${'file_size16_argument'}->getErrorMessage();
if(${'file_size16_argument'} !== null) ${'file_size16_argument'}->setColumnType('number');

${'file_srl17_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl17_argument'}->checkFilter('number');
${'file_srl17_argument'}->checkNotNull();
${'file_srl17_argument'}->createConditionValue();
if(!${'file_srl17_argument'}->isValid()) return ${'file_srl17_argument'}->getErrorMessage();
if(${'file_srl17_argument'} !== null) ${'file_srl17_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`file_size`', ${'file_size16_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>