<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getImages");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls68_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls68_argument'}->checkFilter('number');
${'module_srls68_argument'}->createConditionValue();
if(!${'module_srls68_argument'}->isValid()) return ${'module_srls68_argument'}->getErrorMessage();
} else
${'module_srls68_argument'} = NULL;if(${'module_srls68_argument'} !== null) ${'module_srls68_argument'}->setColumnType('number');
if(isset($args->direct_download)) {
${'direct_download69_argument'} = new ConditionArgument('direct_download', $args->direct_download, 'equal');
${'direct_download69_argument'}->createConditionValue();
if(!${'direct_download69_argument'}->isValid()) return ${'direct_download69_argument'}->getErrorMessage();
} else
${'direct_download69_argument'} = NULL;if(${'direct_download69_argument'} !== null) ${'direct_download69_argument'}->setColumnType('char');
if(isset($args->isvalid)) {
${'isvalid70_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid70_argument'}->createConditionValue();
if(!${'isvalid70_argument'}->isValid()) return ${'isvalid70_argument'}->getErrorMessage();
} else
${'isvalid70_argument'} = NULL;if(${'isvalid70_argument'} !== null) ${'isvalid70_argument'}->setColumnType('char');

${'s_filename171_argument'} = new ConditionArgument('s_filename1', $args->s_filename1, 'like_tail');
${'s_filename171_argument'}->ensureDefaultValue('.jpg');
${'s_filename171_argument'}->createConditionValue();
if(!${'s_filename171_argument'}->isValid()) return ${'s_filename171_argument'}->getErrorMessage();
if(${'s_filename171_argument'} !== null) ${'s_filename171_argument'}->setColumnType('varchar');

${'s_filename272_argument'} = new ConditionArgument('s_filename2', $args->s_filename2, 'like_tail');
${'s_filename272_argument'}->ensureDefaultValue('.gif');
${'s_filename272_argument'}->createConditionValue();
if(!${'s_filename272_argument'}->isValid()) return ${'s_filename272_argument'}->getErrorMessage();
if(${'s_filename272_argument'} !== null) ${'s_filename272_argument'}->setColumnType('varchar');

${'s_filename373_argument'} = new ConditionArgument('s_filename3', $args->s_filename3, 'like_tail');
${'s_filename373_argument'}->ensureDefaultValue('.png');
${'s_filename373_argument'}->createConditionValue();
if(!${'s_filename373_argument'}->isValid()) return ${'s_filename373_argument'}->getErrorMessage();
if(${'s_filename373_argument'} !== null) ${'s_filename373_argument'}->setColumnType('varchar');

${'list_count75_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count75_argument'}->ensureDefaultValue('5');
if(!${'list_count75_argument'}->isValid()) return ${'list_count75_argument'}->getErrorMessage();

${'list_order74_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order74_argument'}->ensureDefaultValue('documents.list_order');
if(!${'list_order74_argument'}->isValid()) return ${'list_order74_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`files`.`upload_target_srl`', '`document_srl`')
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
,new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`files`.`module_srl`',$module_srls68_argument,"in")
,new ConditionWithArgument('`files`.`direct_download`',$direct_download69_argument,"equal", 'and')
,new ConditionWithArgument('`files`.`isvalid`',$isvalid70_argument,"equal", 'and')
,new ConditionWithoutArgument('`files`.`upload_target_srl`','`documents`.`document_srl`',"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`files`.`source_filename`',$s_filename171_argument,"like_tail", 'or')
,new ConditionWithArgument('`files`.`source_filename`',$s_filename272_argument,"like_tail", 'or')
,new ConditionWithArgument('`files`.`source_filename`',$s_filename373_argument,"like_tail", 'or')),'and')
));
$query->setGroups(array(
'`files`.`upload_target_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'list_order74_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count75_argument'}));
return $query; ?>