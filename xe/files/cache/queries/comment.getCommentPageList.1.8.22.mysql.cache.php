<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentPageList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status7_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status7_argument'}->createConditionValue();
if(!${'status7_argument'}->isValid()) return ${'status7_argument'}->getErrorMessage();
} else
${'status7_argument'} = NULL;if(${'status7_argument'} !== null) ${'status7_argument'}->setColumnType('number');

${'document_srl8_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl8_argument'}->checkNotNull();
${'document_srl8_argument'}->createConditionValue();
if(!${'document_srl8_argument'}->isValid()) return ${'document_srl8_argument'}->getErrorMessage();
if(${'document_srl8_argument'} !== null) ${'document_srl8_argument'}->setColumnType('number');

${'page12_argument'} = new Argument('page', $args->{'page'});
${'page12_argument'}->ensureDefaultValue('1');
if(!${'page12_argument'}->isValid()) return ${'page12_argument'}->getErrorMessage();

${'page_count13_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count13_argument'}->ensureDefaultValue('10');
if(!${'page_count13_argument'}->isValid()) return ${'page_count13_argument'}->getErrorMessage();

${'list_count14_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count14_argument'}->ensureDefaultValue('list_count');
if(!${'list_count14_argument'}->isValid()) return ${'list_count14_argument'}->getErrorMessage();

${'list_order11_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order11_argument'}->ensureDefaultValue('comments_list.arrange');
if(!${'list_order11_argument'}->isValid()) return ${'list_order11_argument'}->getErrorMessage();

${'list_order10_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order10_argument'}->ensureDefaultValue('comments_list.head');
if(!${'list_order10_argument'}->isValid()) return ${'list_order10_argument'}->getErrorMessage();

${'list_order9_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order9_argument'}->ensureDefaultValue('comments.status');
if(!${'list_order9_argument'}->isValid()) return ${'list_order9_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`comments`.*')
,new SelectExpression('`comments_list`.`depth`', '`depth`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
,new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comments`.`status`',$status7_argument,"equal", 'and')
,new ConditionWithArgument('`comments_list`.`document_srl`',$document_srl8_argument,"equal", 'and')
,new ConditionWithoutArgument('`comments_list`.`comment_srl`','`comments`.`comment_srl`',"equal", 'and')
,new ConditionWithoutArgument('`comments_list`.`head`','0',"more", 'and')
,new ConditionWithoutArgument('`comments_list`.`arrange`','0',"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order9_argument'}, "desc")
,new OrderByColumn(${'list_order10_argument'}, "asc")
,new OrderByColumn(${'list_order11_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count14_argument'}, ${'page12_argument'}, ${'page_count13_argument'}));
return $query; ?>