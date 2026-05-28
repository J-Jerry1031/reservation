<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getQuizgameList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status_matter)) {
${'status_matter1_argument'} = new ConditionArgument('status_matter', $args->status_matter, 'equal');
${'status_matter1_argument'}->createConditionValue();
if(!${'status_matter1_argument'}->isValid()) return ${'status_matter1_argument'}->getErrorMessage();
} else
${'status_matter1_argument'} = NULL;if(${'status_matter1_argument'} !== null) ${'status_matter1_argument'}->setColumnType('varchar');
if(isset($args->nowdate)) {
${'nowdate2_argument'} = new ConditionArgument('nowdate', $args->nowdate, 'more');
${'nowdate2_argument'}->createConditionValue();
if(!${'nowdate2_argument'}->isValid()) return ${'nowdate2_argument'}->getErrorMessage();
} else
${'nowdate2_argument'} = NULL;if(${'nowdate2_argument'} !== null) ${'nowdate2_argument'}->setColumnType('varchar');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('5');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('matter_srl');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_quizgame_matter`', '`quizgame_matter`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status_matter`',$status_matter1_argument,"equal")
,new ConditionWithArgument('`enddate`',$nowdate2_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>