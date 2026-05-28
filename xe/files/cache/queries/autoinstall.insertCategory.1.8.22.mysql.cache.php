<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl8_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl8_argument'}->checkFilter('number');
${'category_srl8_argument'}->checkNotNull();
if(!${'category_srl8_argument'}->isValid()) return ${'category_srl8_argument'}->getErrorMessage();
if(${'category_srl8_argument'} !== null) ${'category_srl8_argument'}->setColumnType('number');

${'parent_srl9_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl9_argument'}->checkFilter('number');
${'parent_srl9_argument'}->checkNotNull();
if(!${'parent_srl9_argument'}->isValid()) return ${'parent_srl9_argument'}->getErrorMessage();
if(${'parent_srl9_argument'} !== null) ${'parent_srl9_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title10_argument'} = new Argument('title', $args->{'title'});
if(!${'title10_argument'}->isValid()) return ${'title10_argument'}->getErrorMessage();
} else
${'title10_argument'} = NULL;if(${'title10_argument'} !== null) ${'title10_argument'}->setColumnType('varchar');

${'list_order11_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order11_argument'}->checkFilter('number');
${'list_order11_argument'}->checkNotNull();
if(!${'list_order11_argument'}->isValid()) return ${'list_order11_argument'}->getErrorMessage();
if(${'list_order11_argument'} !== null) ${'list_order11_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl8_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl9_argument'})
,new InsertExpression('`title`', ${'title10_argument'})
,new InsertExpression('`list_order`', ${'list_order11_argument'})
));
$query->setTables(array(
new Table('`xe_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>