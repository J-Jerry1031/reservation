<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentExtraKeys");
$query->setAction("select");
$query->setPriority("");

${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->checkNotNull();
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx10_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx10_argument'}->checkFilter('number');
${'var_idx10_argument'}->createConditionValue();
if(!${'var_idx10_argument'}->isValid()) return ${'var_idx10_argument'}->getErrorMessage();
} else
${'var_idx10_argument'} = NULL;if(${'var_idx10_argument'} !== null) ${'var_idx10_argument'}->setColumnType('number');

${'sort_index11_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index11_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index11_argument'}->isValid()) return ${'sort_index11_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`', '`module_srl`')
,new SelectExpression('`var_idx`', '`idx`')
,new SelectExpression('`var_name`', '`name`')
,new SelectExpression('`var_type`', '`type`')
,new SelectExpression('`var_is_required`', '`is_required`')
,new SelectExpression('`var_search`', '`search`')
,new SelectExpression('`var_default`', '`default`')
,new SelectExpression('`var_desc`', '`desc`')
,new SelectExpression('`eid`', '`eid`')
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl9_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index11_argument'}, "asc")
));
$query->setLimit();
return $query; ?>