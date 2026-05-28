<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteFavorite");
$query->setAction("delete");
$query->setPriority("");

${'admin_favorite_srls32_argument'} = new ConditionArgument('admin_favorite_srls', $args->admin_favorite_srls, 'in');
${'admin_favorite_srls32_argument'}->checkFilter('number');
${'admin_favorite_srls32_argument'}->checkNotNull();
${'admin_favorite_srls32_argument'}->createConditionValue();
if(!${'admin_favorite_srls32_argument'}->isValid()) return ${'admin_favorite_srls32_argument'}->getErrorMessage();
if(${'admin_favorite_srls32_argument'} !== null) ${'admin_favorite_srls32_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`admin_favorite_srl`',$admin_favorite_srls32_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>