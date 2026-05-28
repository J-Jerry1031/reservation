<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateRefererLog");
$query->setAction("update");
$query->setPriority("");

${'regdate_last1_argument'} = new Argument('regdate_last', $args->{'regdate_last'});
${'regdate_last1_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate_last1_argument'}->checkNotNull();
if(!${'regdate_last1_argument'}->isValid()) return ${'regdate_last1_argument'}->getErrorMessage();
if(${'regdate_last1_argument'} !== null) ${'regdate_last1_argument'}->setColumnType('date');
if(isset($args->request_uri)) {
${'request_uri2_argument'} = new Argument('request_uri', $args->{'request_uri'});
if(!${'request_uri2_argument'}->isValid()) return ${'request_uri2_argument'}->getErrorMessage();
} else
${'request_uri2_argument'} = NULL;if(${'request_uri2_argument'} !== null) ${'request_uri2_argument'}->setColumnType('varchar');

${'count3_argument'} = new Argument('count', $args->{'count'});
${'count3_argument'}->setColumnOperation('+');
${'count3_argument'}->ensureDefaultValue(1);
if(!${'count3_argument'}->isValid()) return ${'count3_argument'}->getErrorMessage();
if(${'count3_argument'} !== null) ${'count3_argument'}->setColumnType('number');
if(isset($args->remote)) {
${'remote4_argument'} = new ConditionArgument('remote', $args->remote, 'equal');
${'remote4_argument'}->createConditionValue();
if(!${'remote4_argument'}->isValid()) return ${'remote4_argument'}->getErrorMessage();
} else
${'remote4_argument'} = NULL;if(${'remote4_argument'} !== null) ${'remote4_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url5_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url5_argument'}->createConditionValue();
if(!${'url5_argument'}->isValid()) return ${'url5_argument'}->getErrorMessage();
} else
${'url5_argument'} = NULL;if(${'url5_argument'} !== null) ${'url5_argument'}->setColumnType('varchar');

${'uagent6_argument'} = new ConditionArgument('uagent', $args->uagent, 'equal');
${'uagent6_argument'}->checkNotNull();
${'uagent6_argument'}->createConditionValue();
if(!${'uagent6_argument'}->isValid()) return ${'uagent6_argument'}->getErrorMessage();
if(${'uagent6_argument'} !== null) ${'uagent6_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
} else
${'member_srl7_argument'} = NULL;if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

${'regdate8_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate8_argument'}->checkFilter('number');
${'regdate8_argument'}->checkNotNull();
${'regdate8_argument'}->createConditionValue();
if(!${'regdate8_argument'}->isValid()) return ${'regdate8_argument'}->getErrorMessage();
if(${'regdate8_argument'} !== null) ${'regdate8_argument'}->setColumnType('date');

$query->setColumns(array(
new UpdateExpression('`regdate_last`', ${'regdate_last1_argument'})
,new UpdateExpression('`request_uri`', ${'request_uri2_argument'})
,new UpdateExpression('`count`', ${'count3_argument'})
));
$query->setTables(array(
new Table('`xe_referer_log`', '`referer_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`remote`',$remote4_argument,"equal")
,new ConditionWithArgument('`url`',$url5_argument,"equal", 'and')
,new ConditionWithArgument('`uagent`',$uagent6_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>