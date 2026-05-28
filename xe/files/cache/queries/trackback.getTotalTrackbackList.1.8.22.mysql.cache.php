<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalTrackbackList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trackbackSrlList)) {
${'trackbackSrlList1_argument'} = new ConditionArgument('trackbackSrlList', $args->trackbackSrlList, 'in');
${'trackbackSrlList1_argument'}->checkFilter('number');
${'trackbackSrlList1_argument'}->createConditionValue();
if(!${'trackbackSrlList1_argument'}->isValid()) return ${'trackbackSrlList1_argument'}->getErrorMessage();
} else
${'trackbackSrlList1_argument'} = NULL;if(${'trackbackSrlList1_argument'} !== null) ${'trackbackSrlList1_argument'}->setColumnType('number');
if(isset($args->s_module_srl)) {
${'s_module_srl2_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl2_argument'}->createConditionValue();
if(!${'s_module_srl2_argument'}->isValid()) return ${'s_module_srl2_argument'}->getErrorMessage();
} else
${'s_module_srl2_argument'} = NULL;if(${'s_module_srl2_argument'} !== null) ${'s_module_srl2_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl3_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl3_argument'}->createConditionValue();
if(!${'exclude_module_srl3_argument'}->isValid()) return ${'exclude_module_srl3_argument'}->getErrorMessage();
} else
${'exclude_module_srl3_argument'} = NULL;if(${'exclude_module_srl3_argument'} !== null) ${'exclude_module_srl3_argument'}->setColumnType('number');
if(isset($args->s_url)) {
${'s_url4_argument'} = new ConditionArgument('s_url', $args->s_url, 'like');
${'s_url4_argument'}->createConditionValue();
if(!${'s_url4_argument'}->isValid()) return ${'s_url4_argument'}->getErrorMessage();
} else
${'s_url4_argument'} = NULL;if(${'s_url4_argument'} !== null) ${'s_url4_argument'}->setColumnType('varchar');
if(isset($args->s_blog_name)) {
${'s_blog_name5_argument'} = new ConditionArgument('s_blog_name', $args->s_blog_name, 'like');
${'s_blog_name5_argument'}->createConditionValue();
if(!${'s_blog_name5_argument'}->isValid()) return ${'s_blog_name5_argument'}->getErrorMessage();
} else
${'s_blog_name5_argument'} = NULL;if(${'s_blog_name5_argument'} !== null) ${'s_blog_name5_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title6_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title6_argument'}->createConditionValue();
if(!${'s_title6_argument'}->isValid()) return ${'s_title6_argument'}->getErrorMessage();
} else
${'s_title6_argument'} = NULL;if(${'s_title6_argument'} !== null) ${'s_title6_argument'}->setColumnType('varchar');
if(isset($args->s_excerpt)) {
${'s_excerpt7_argument'} = new ConditionArgument('s_excerpt', $args->s_excerpt, 'like');
${'s_excerpt7_argument'}->createConditionValue();
if(!${'s_excerpt7_argument'}->isValid()) return ${'s_excerpt7_argument'}->getErrorMessage();
} else
${'s_excerpt7_argument'} = NULL;if(${'s_excerpt7_argument'} !== null) ${'s_excerpt7_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate8_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate8_argument'}->createConditionValue();
if(!${'s_regdate8_argument'}->isValid()) return ${'s_regdate8_argument'}->getErrorMessage();
} else
${'s_regdate8_argument'} = NULL;if(${'s_regdate8_argument'} !== null) ${'s_regdate8_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress9_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress9_argument'}->createConditionValue();
if(!${'s_ipaddress9_argument'}->isValid()) return ${'s_ipaddress9_argument'}->getErrorMessage();
} else
${'s_ipaddress9_argument'} = NULL;if(${'s_ipaddress9_argument'} !== null) ${'s_ipaddress9_argument'}->setColumnType('varchar');

${'page11_argument'} = new Argument('page', $args->{'page'});
${'page11_argument'}->ensureDefaultValue('1');
if(!${'page11_argument'}->isValid()) return ${'page11_argument'}->getErrorMessage();

${'page_count12_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count12_argument'}->ensureDefaultValue('10');
if(!${'page_count12_argument'}->isValid()) return ${'page_count12_argument'}->getErrorMessage();

${'list_count13_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count13_argument'}->ensureDefaultValue('20');
if(!${'list_count13_argument'}->isValid()) return ${'list_count13_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trackback_srl`',$trackbackSrlList1_argument,"in")
,new ConditionWithArgument('`module_srl`',$s_module_srl2_argument,"in", 'and')
,new ConditionWithArgument('`module_srl`',$exclude_module_srl3_argument,"notin", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`url`',$s_url4_argument,"like")
,new ConditionWithArgument('`blog_name`',$s_blog_name5_argument,"like", 'or')
,new ConditionWithArgument('`title`',$s_title6_argument,"like", 'or')
,new ConditionWithArgument('`excerpt`',$s_excerpt7_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate8_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress9_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count13_argument'}, ${'page11_argument'}, ${'page_count12_argument'}));
return $query; ?>