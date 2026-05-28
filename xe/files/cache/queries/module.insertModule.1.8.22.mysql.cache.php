<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl17_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl17_argument'}->ensureDefaultValue('0');
${'site_srl17_argument'}->checkNotNull();
if(!${'site_srl17_argument'}->isValid()) return ${'site_srl17_argument'}->getErrorMessage();
if(${'site_srl17_argument'} !== null) ${'site_srl17_argument'}->setColumnType('number');

${'module_srl18_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl18_argument'}->checkNotNull();
if(!${'module_srl18_argument'}->isValid()) return ${'module_srl18_argument'}->getErrorMessage();
if(${'module_srl18_argument'} !== null) ${'module_srl18_argument'}->setColumnType('number');

${'module_category_srl19_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl19_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl19_argument'}->isValid()) return ${'module_category_srl19_argument'}->getErrorMessage();
if(${'module_category_srl19_argument'} !== null) ${'module_category_srl19_argument'}->setColumnType('number');

${'mid20_argument'} = new Argument('mid', $args->{'mid'});
${'mid20_argument'}->checkNotNull();
if(!${'mid20_argument'}->isValid()) return ${'mid20_argument'}->getErrorMessage();
if(${'mid20_argument'} !== null) ${'mid20_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin21_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin21_argument'}->isValid()) return ${'skin21_argument'}->getErrorMessage();
} else
${'skin21_argument'} = NULL;if(${'skin21_argument'} !== null) ${'skin21_argument'}->setColumnType('varchar');

${'is_skin_fix22_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix22_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix22_argument'}->isValid()) return ${'is_skin_fix22_argument'}->getErrorMessage();
if(${'is_skin_fix22_argument'} !== null) ${'is_skin_fix22_argument'}->setColumnType('char');

${'is_mskin_fix23_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix23_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix23_argument'}->isValid()) return ${'is_mskin_fix23_argument'}->getErrorMessage();
if(${'is_mskin_fix23_argument'} !== null) ${'is_mskin_fix23_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin24_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin24_argument'}->isValid()) return ${'mskin24_argument'}->getErrorMessage();
} else
${'mskin24_argument'} = NULL;if(${'mskin24_argument'} !== null) ${'mskin24_argument'}->setColumnType('varchar');

${'browser_title25_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title25_argument'}->checkNotNull();
if(!${'browser_title25_argument'}->isValid()) return ${'browser_title25_argument'}->getErrorMessage();
if(${'browser_title25_argument'} !== null) ${'browser_title25_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl26_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl26_argument'}->isValid()) return ${'layout_srl26_argument'}->getErrorMessage();
} else
${'layout_srl26_argument'} = NULL;if(${'layout_srl26_argument'} !== null) ${'layout_srl26_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description27_argument'} = new Argument('description', $args->{'description'});
if(!${'description27_argument'}->isValid()) return ${'description27_argument'}->getErrorMessage();
} else
${'description27_argument'} = NULL;if(${'description27_argument'} !== null) ${'description27_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content28_argument'} = new Argument('content', $args->{'content'});
if(!${'content28_argument'}->isValid()) return ${'content28_argument'}->getErrorMessage();
} else
${'content28_argument'} = NULL;if(${'content28_argument'} !== null) ${'content28_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent29_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent29_argument'}->isValid()) return ${'mcontent29_argument'}->getErrorMessage();
} else
${'mcontent29_argument'} = NULL;if(${'mcontent29_argument'} !== null) ${'mcontent29_argument'}->setColumnType('bigtext');

${'module30_argument'} = new Argument('module', $args->{'module'});
${'module30_argument'}->checkNotNull();
if(!${'module30_argument'}->isValid()) return ${'module30_argument'}->getErrorMessage();
if(${'module30_argument'} !== null) ${'module30_argument'}->setColumnType('varchar');

${'is_default31_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default31_argument'}->ensureDefaultValue('N');
${'is_default31_argument'}->checkNotNull();
if(!${'is_default31_argument'}->isValid()) return ${'is_default31_argument'}->getErrorMessage();
if(${'is_default31_argument'} !== null) ${'is_default31_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl32_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl32_argument'}->checkFilter('number');
if(!${'menu_srl32_argument'}->isValid()) return ${'menu_srl32_argument'}->getErrorMessage();
} else
${'menu_srl32_argument'} = NULL;if(${'menu_srl32_argument'} !== null) ${'menu_srl32_argument'}->setColumnType('number');

${'open_rss33_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss33_argument'}->ensureDefaultValue('Y');
${'open_rss33_argument'}->checkNotNull();
if(!${'open_rss33_argument'}->isValid()) return ${'open_rss33_argument'}->getErrorMessage();
if(${'open_rss33_argument'} !== null) ${'open_rss33_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text34_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text34_argument'}->isValid()) return ${'header_text34_argument'}->getErrorMessage();
} else
${'header_text34_argument'} = NULL;if(${'header_text34_argument'} !== null) ${'header_text34_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text35_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text35_argument'}->isValid()) return ${'footer_text35_argument'}->getErrorMessage();
} else
${'footer_text35_argument'} = NULL;if(${'footer_text35_argument'} !== null) ${'footer_text35_argument'}->setColumnType('text');

${'regdate36_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate36_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate36_argument'}->isValid()) return ${'regdate36_argument'}->getErrorMessage();
if(${'regdate36_argument'} !== null) ${'regdate36_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl37_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl37_argument'}->isValid()) return ${'mlayout_srl37_argument'}->getErrorMessage();
} else
${'mlayout_srl37_argument'} = NULL;if(${'mlayout_srl37_argument'} !== null) ${'mlayout_srl37_argument'}->setColumnType('number');

${'use_mobile38_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile38_argument'}->ensureDefaultValue('N');
if(!${'use_mobile38_argument'}->isValid()) return ${'use_mobile38_argument'}->getErrorMessage();
if(${'use_mobile38_argument'} !== null) ${'use_mobile38_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl17_argument'})
,new InsertExpression('`module_srl`', ${'module_srl18_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl19_argument'})
,new InsertExpression('`mid`', ${'mid20_argument'})
,new InsertExpression('`skin`', ${'skin21_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix22_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix23_argument'})
,new InsertExpression('`mskin`', ${'mskin24_argument'})
,new InsertExpression('`browser_title`', ${'browser_title25_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl26_argument'})
,new InsertExpression('`description`', ${'description27_argument'})
,new InsertExpression('`content`', ${'content28_argument'})
,new InsertExpression('`mcontent`', ${'mcontent29_argument'})
,new InsertExpression('`module`', ${'module30_argument'})
,new InsertExpression('`is_default`', ${'is_default31_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl32_argument'})
,new InsertExpression('`open_rss`', ${'open_rss33_argument'})
,new InsertExpression('`header_text`', ${'header_text34_argument'})
,new InsertExpression('`footer_text`', ${'footer_text35_argument'})
,new InsertExpression('`regdate`', ${'regdate36_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl37_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile38_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>