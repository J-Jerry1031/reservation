<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl53_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl53_argument'}->checkNotNull();
${'site_srl53_argument'}->createConditionValue();
if(!${'site_srl53_argument'}->isValid()) return ${'site_srl53_argument'}->getErrorMessage();
if(${'site_srl53_argument'} !== null) ${'site_srl53_argument'}->setColumnType('number');

${'addon54_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon54_argument'}->checkNotNull();
${'addon54_argument'}->createConditionValue();
if(!${'addon54_argument'}->isValid()) return ${'addon54_argument'}->getErrorMessage();
if(${'addon54_argument'} !== null) ${'addon54_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl53_argument,"equal")
,new ConditionWithArgument('`addon`',$addon54_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>