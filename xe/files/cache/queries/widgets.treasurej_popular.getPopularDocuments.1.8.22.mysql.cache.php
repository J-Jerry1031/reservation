<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPopularDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls16_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls16_argument'}->checkFilter('number');
${'module_srls16_argument'}->createConditionValue();
if(!${'module_srls16_argument'}->isValid()) return ${'module_srls16_argument'}->getErrorMessage();
} else
${'module_srls16_argument'} = NULL;if(${'module_srls16_argument'} !== null) ${'module_srls16_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate17_argument'} = new ConditionArgument('regdate', $args->regdate, 'more');
${'regdate17_argument'}->createConditionValue();
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();
} else
${'regdate17_argument'} = NULL;if(${'regdate17_argument'} !== null) ${'regdate17_argument'}->setColumnType('date');

${'list_count19_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count19_argument'}->ensureDefaultValue('5');
if(!${'list_count19_argument'}->isValid()) return ${'list_count19_argument'}->getErrorMessage();

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('readed_count');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls16_argument,"in")
,new ConditionWithArgument('`regdate`',$regdate17_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index18_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count19_argument'}));
return $query; ?>