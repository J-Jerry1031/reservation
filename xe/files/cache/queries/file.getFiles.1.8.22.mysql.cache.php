<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl36_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl36_argument'}->checkFilter('number');
${'upload_target_srl36_argument'}->checkNotNull();
${'upload_target_srl36_argument'}->createConditionValue();
if(!${'upload_target_srl36_argument'}->isValid()) return ${'upload_target_srl36_argument'}->getErrorMessage();
if(${'upload_target_srl36_argument'} !== null) ${'upload_target_srl36_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid37_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid37_argument'}->createConditionValue();
if(!${'isvalid37_argument'}->isValid()) return ${'isvalid37_argument'}->getErrorMessage();
} else
${'isvalid37_argument'} = NULL;if(${'isvalid37_argument'} !== null) ${'isvalid37_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index38_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index38_argument'}->isValid()) return ${'sort_index38_argument'}->getErrorMessage();
} else
${'sort_index38_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl36_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid37_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index38_argument'}, "asc")
));
$query->setLimit();
return $query; ?>