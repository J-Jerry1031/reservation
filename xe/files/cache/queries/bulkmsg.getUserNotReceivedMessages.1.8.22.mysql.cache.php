<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getUserNotReceivedMessages");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;
$query->setColumns(array(
new SelectExpression('`bulk_message`.*')
,new SelectExpression('`bulk_message_target`.`target_member_srl`')
));
$query->setTables(array(
new Subquery('`bulk_message_target`', array(
new StarExpression()
), 
array(
new Table('`xe_bulk_message_target`', '`bulk_message_target`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`target_member_srl`',$member_srl13_argument,"equal")))
),
array(),
array(),
null
)
,new JoinTable('`xe_bulk_message`', '`bulk_message`', "right join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`bulk_message`.`document_srl`','`bulk_message_target`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`is_stop`',"'N'","equal")
,new ConditionWithoutArgument('`target_member_srl`',"'isnull'","null", 'and')))
));
$query->setGroups(array(
'`bulk_message`.`document_srl`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>