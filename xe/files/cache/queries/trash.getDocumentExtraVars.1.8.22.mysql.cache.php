<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentExtraVars");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
} else
${'module_srl2_argument'} = NULL;if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl3_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl3_argument'}->createConditionValue();
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
} else
${'document_srl3_argument'} = NULL;if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('extra_keys.var_idx');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`extra_keys`.`module_srl`', '`module_srl`')
,new SelectExpression('`extra_keys`.`var_name`', '`name`')
,new SelectExpression('`extra_keys`.`var_type`', '`type`')
,new SelectExpression('`extra_keys`.`var_is_required`', '`is_required`')
,new SelectExpression('`extra_keys`.`var_search`', '`search`')
,new SelectExpression('`extra_keys`.`var_default`', '`default`')
,new SelectExpression('`extra_keys`.`var_desc`', '`desc`')
,new SelectExpression('`extra_keys`.`var_idx`', '`idx`')
,new SelectExpression('`extra_vars`.`document_srl`', '`document_srl`')
,new SelectExpression('`extra_vars`.`lang_code`', '`lang_code`')
,new SelectExpression('`extra_vars`.`value`', '`value`')
,new SelectExpression('`extra_keys`.`eid`', '`eid`')
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`extra_keys`')
,new JoinTable('`xe_document_extra_vars`', '`extra_vars`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_keys`.`module_srl`','`extra_vars`.`module_srl`',"equal")
,new ConditionWithoutArgument('`extra_keys`.`eid`','`extra_vars`.`eid`',"equal", 'and')))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`extra_keys`.`module_srl`',$module_srl2_argument,"equal")
,new ConditionWithArgument('`extra_vars`.`document_srl`',$document_srl3_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "asc")
));
$query->setLimit();
return $query; ?>