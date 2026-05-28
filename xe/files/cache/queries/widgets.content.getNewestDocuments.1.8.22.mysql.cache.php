<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl61_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl61_argument'}->checkFilter('number');
${'module_srl61_argument'}->checkNotNull();
${'module_srl61_argument'}->createConditionValue();
if(!${'module_srl61_argument'}->isValid()) return ${'module_srl61_argument'}->getErrorMessage();
if(${'module_srl61_argument'} !== null) ${'module_srl61_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl62_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl62_argument'}->createConditionValue();
if(!${'category_srl62_argument'}->isValid()) return ${'category_srl62_argument'}->getErrorMessage();
} else
${'category_srl62_argument'} = NULL;if(${'category_srl62_argument'} !== null) ${'category_srl62_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList63_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList63_argument'}->createConditionValue();
if(!${'statusList63_argument'}->isValid()) return ${'statusList63_argument'}->getErrorMessage();
} else
${'statusList63_argument'} = NULL;if(${'statusList63_argument'} !== null) ${'statusList63_argument'}->setColumnType('varchar');

${'list_count66_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count66_argument'}->ensureDefaultValue('20');
if(!${'list_count66_argument'}->isValid()) return ${'list_count66_argument'}->getErrorMessage();

${'sort_index64_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index64_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index64_argument'}->isValid()) return ${'sort_index64_argument'}->getErrorMessage();

${'order_type65_argument'} = new SortArgument('order_type65', $args->order_type);
${'order_type65_argument'}->ensureDefaultValue('asc');
if(!${'order_type65_argument'}->isValid()) return ${'order_type65_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl61_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl62_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList63_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index64_argument'}, $order_type65_argument)
));
$query->setLimit(new Limit(${'list_count66_argument'}));
return $query; ?>