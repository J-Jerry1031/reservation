<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl2_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl2_argument'}->checkFilter('number');
${'menu_item_srl2_argument'}->checkNotNull();
if(!${'menu_item_srl2_argument'}->isValid()) return ${'menu_item_srl2_argument'}->getErrorMessage();
if(${'menu_item_srl2_argument'} !== null) ${'menu_item_srl2_argument'}->setColumnType('number');

${'parent_srl3_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl3_argument'}->checkFilter('number');
${'parent_srl3_argument'}->ensureDefaultValue('0');
if(!${'parent_srl3_argument'}->isValid()) return ${'parent_srl3_argument'}->getErrorMessage();
if(${'parent_srl3_argument'} !== null) ${'parent_srl3_argument'}->setColumnType('number');

${'menu_srl4_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl4_argument'}->checkFilter('number');
${'menu_srl4_argument'}->checkNotNull();
if(!${'menu_srl4_argument'}->isValid()) return ${'menu_srl4_argument'}->getErrorMessage();
if(${'menu_srl4_argument'} !== null) ${'menu_srl4_argument'}->setColumnType('number');

${'name5_argument'} = new Argument('name', $args->{'name'});
${'name5_argument'}->checkNotNull();
if(!${'name5_argument'}->isValid()) return ${'name5_argument'}->getErrorMessage();
if(${'name5_argument'} !== null) ${'name5_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc6_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc6_argument'}->isValid()) return ${'desc6_argument'}->getErrorMessage();
} else
${'desc6_argument'} = NULL;if(${'desc6_argument'} !== null) ${'desc6_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url7_argument'} = new Argument('url', $args->{'url'});
if(!${'url7_argument'}->isValid()) return ${'url7_argument'}->getErrorMessage();
} else
${'url7_argument'} = NULL;if(${'url7_argument'} !== null) ${'url7_argument'}->setColumnType('varchar');

${'is_shortcut8_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut8_argument'}->ensureDefaultValue('N');
${'is_shortcut8_argument'}->checkNotNull();
if(!${'is_shortcut8_argument'}->isValid()) return ${'is_shortcut8_argument'}->getErrorMessage();
if(${'is_shortcut8_argument'} !== null) ${'is_shortcut8_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window9_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window9_argument'}->isValid()) return ${'open_window9_argument'}->getErrorMessage();
} else
${'open_window9_argument'} = NULL;if(${'open_window9_argument'} !== null) ${'open_window9_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand10_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand10_argument'}->isValid()) return ${'expand10_argument'}->getErrorMessage();
} else
${'expand10_argument'} = NULL;if(${'expand10_argument'} !== null) ${'expand10_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn11_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn11_argument'}->isValid()) return ${'normal_btn11_argument'}->getErrorMessage();
} else
${'normal_btn11_argument'} = NULL;if(${'normal_btn11_argument'} !== null) ${'normal_btn11_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn12_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn12_argument'}->isValid()) return ${'hover_btn12_argument'}->getErrorMessage();
} else
${'hover_btn12_argument'} = NULL;if(${'hover_btn12_argument'} !== null) ${'hover_btn12_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn13_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn13_argument'}->isValid()) return ${'active_btn13_argument'}->getErrorMessage();
} else
${'active_btn13_argument'} = NULL;if(${'active_btn13_argument'} !== null) ${'active_btn13_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls14_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls14_argument'}->isValid()) return ${'group_srls14_argument'}->getErrorMessage();
} else
${'group_srls14_argument'} = NULL;if(${'group_srls14_argument'} !== null) ${'group_srls14_argument'}->setColumnType('text');

${'listorder15_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder15_argument'}->checkNotNull();
if(!${'listorder15_argument'}->isValid()) return ${'listorder15_argument'}->getErrorMessage();
if(${'listorder15_argument'} !== null) ${'listorder15_argument'}->setColumnType('number');

${'regdate16_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate16_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate16_argument'}->isValid()) return ${'regdate16_argument'}->getErrorMessage();
if(${'regdate16_argument'} !== null) ${'regdate16_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl2_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl3_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl4_argument'})
,new InsertExpression('`name`', ${'name5_argument'})
,new InsertExpression('`desc`', ${'desc6_argument'})
,new InsertExpression('`url`', ${'url7_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut8_argument'})
,new InsertExpression('`open_window`', ${'open_window9_argument'})
,new InsertExpression('`expand`', ${'expand10_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn11_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn12_argument'})
,new InsertExpression('`active_btn`', ${'active_btn13_argument'})
,new InsertExpression('`group_srls`', ${'group_srls14_argument'})
,new InsertExpression('`listorder`', ${'listorder15_argument'})
,new InsertExpression('`regdate`', ${'regdate16_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>