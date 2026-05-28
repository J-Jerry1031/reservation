<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getBestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl5_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl5_argument'}->createConditionValue();
if(!${'category_srl5_argument'}->isValid()) return ${'category_srl5_argument'}->getErrorMessage();
} else
${'category_srl5_argument'} = NULL;if(${'category_srl5_argument'} !== null) ${'category_srl5_argument'}->setColumnType('number');
if(isset($args->search_date)) {
${'search_date6_argument'} = new ConditionArgument('search_date', $args->search_date, 'more');
${'search_date6_argument'}->createConditionValue();
if(!${'search_date6_argument'}->isValid()) return ${'search_date6_argument'}->getErrorMessage();
} else
${'search_date6_argument'} = NULL;if(${'search_date6_argument'} !== null) ${'search_date6_argument'}->setColumnType('date');
if(isset($args->voted_count)) {
${'voted_count7_argument'} = new ConditionArgument('voted_count', $args->voted_count, 'more');
${'voted_count7_argument'}->createConditionValue();
if(!${'voted_count7_argument'}->isValid()) return ${'voted_count7_argument'}->getErrorMessage();
} else
${'voted_count7_argument'} = NULL;if(${'voted_count7_argument'} !== null) ${'voted_count7_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList8_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList8_argument'}->createConditionValue();
if(!${'statusList8_argument'}->isValid()) return ${'statusList8_argument'}->getErrorMessage();
} else
${'statusList8_argument'} = NULL;if(${'statusList8_argument'} !== null) ${'statusList8_argument'}->setColumnType('varchar');

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('20');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index9_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index9_argument'}->ensureDefaultValue('documents.voted_count');
if(!${'sort_index9_argument'}->isValid()) return ${'sort_index9_argument'}->getErrorMessage();

${'order_type10_argument'} = new SortArgument('order_type10', $args->order_type);
${'order_type10_argument'}->ensureDefaultValue('asc');
if(!${'order_type10_argument'}->isValid()) return ${'order_type10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl4_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`regdate`',$search_date6_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`voted_count`',$voted_count7_argument,"more", 'and')
,new ConditionWithArgument('`status`',$statusList8_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index9_argument'}, $order_type10_argument)
));
$query->setLimit(new Limit(${'list_count11_argument'}));
return $query; ?>