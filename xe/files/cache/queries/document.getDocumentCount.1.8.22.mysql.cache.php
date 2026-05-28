<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCount");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl2_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl2_argument'}->checkFilter('number');
${'exclude_module_srl2_argument'}->createConditionValue();
if(!${'exclude_module_srl2_argument'}->isValid()) return ${'exclude_module_srl2_argument'}->getErrorMessage();
} else
${'exclude_module_srl2_argument'} = NULL;if(${'exclude_module_srl2_argument'} !== null) ${'exclude_module_srl2_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl3_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl3_argument'}->checkFilter('number');
${'category_srl3_argument'}->createConditionValue();
if(!${'category_srl3_argument'}->isValid()) return ${'category_srl3_argument'}->getErrorMessage();
} else
${'category_srl3_argument'} = NULL;if(${'category_srl3_argument'} !== null) ${'category_srl3_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice4_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice4_argument'}->createConditionValue();
if(!${'s_is_notice4_argument'}->isValid()) return ${'s_is_notice4_argument'}->getErrorMessage();
} else
${'s_is_notice4_argument'} = NULL;if(${'s_is_notice4_argument'} !== null) ${'s_is_notice4_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->checkFilter('number');
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
} else
${'member_srl5_argument'} = NULL;if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList6_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList6_argument'}->createConditionValue();
if(!${'statusList6_argument'}->isValid()) return ${'statusList6_argument'}->getErrorMessage();
} else
${'statusList6_argument'} = NULL;if(${'statusList6_argument'} !== null) ${'statusList6_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title7_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title7_argument'}->createConditionValue();
if(!${'s_title7_argument'}->isValid()) return ${'s_title7_argument'}->getErrorMessage();
} else
${'s_title7_argument'} = NULL;if(${'s_title7_argument'} !== null) ${'s_title7_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content8_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content8_argument'}->createConditionValue();
if(!${'s_content8_argument'}->isValid()) return ${'s_content8_argument'}->getErrorMessage();
} else
${'s_content8_argument'} = NULL;if(${'s_content8_argument'} !== null) ${'s_content8_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name9_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name9_argument'}->createConditionValue();
if(!${'s_user_name9_argument'}->isValid()) return ${'s_user_name9_argument'}->getErrorMessage();
} else
${'s_user_name9_argument'} = NULL;if(${'s_user_name9_argument'} !== null) ${'s_user_name9_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id10_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id10_argument'}->createConditionValue();
if(!${'s_user_id10_argument'}->isValid()) return ${'s_user_id10_argument'}->getErrorMessage();
} else
${'s_user_id10_argument'} = NULL;if(${'s_user_id10_argument'} !== null) ${'s_user_id10_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name11_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name11_argument'}->createConditionValue();
if(!${'s_nick_name11_argument'}->isValid()) return ${'s_nick_name11_argument'}->getErrorMessage();
} else
${'s_nick_name11_argument'} = NULL;if(${'s_nick_name11_argument'} !== null) ${'s_nick_name11_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address12_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address12_argument'}->createConditionValue();
if(!${'s_email_address12_argument'}->isValid()) return ${'s_email_address12_argument'}->getErrorMessage();
} else
${'s_email_address12_argument'} = NULL;if(${'s_email_address12_argument'} !== null) ${'s_email_address12_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage13_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage13_argument'}->createConditionValue();
if(!${'s_homepage13_argument'}->isValid()) return ${'s_homepage13_argument'}->getErrorMessage();
} else
${'s_homepage13_argument'} = NULL;if(${'s_homepage13_argument'} !== null) ${'s_homepage13_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags14_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags14_argument'}->createConditionValue();
if(!${'s_tags14_argument'}->isValid()) return ${'s_tags14_argument'}->getErrorMessage();
} else
${'s_tags14_argument'} = NULL;if(${'s_tags14_argument'} !== null) ${'s_tags14_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl15_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl15_argument'}->createConditionValue();
if(!${'s_member_srl15_argument'}->isValid()) return ${'s_member_srl15_argument'}->getErrorMessage();
} else
${'s_member_srl15_argument'} = NULL;if(${'s_member_srl15_argument'} !== null) ${'s_member_srl15_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count16_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count16_argument'}->createConditionValue();
if(!${'s_readed_count16_argument'}->isValid()) return ${'s_readed_count16_argument'}->getErrorMessage();
} else
${'s_readed_count16_argument'} = NULL;if(${'s_readed_count16_argument'} !== null) ${'s_readed_count16_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count17_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count17_argument'}->createConditionValue();
if(!${'s_voted_count17_argument'}->isValid()) return ${'s_voted_count17_argument'}->getErrorMessage();
} else
${'s_voted_count17_argument'} = NULL;if(${'s_voted_count17_argument'} !== null) ${'s_voted_count17_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count18_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count18_argument'}->createConditionValue();
if(!${'s_blamed_count18_argument'}->isValid()) return ${'s_blamed_count18_argument'}->getErrorMessage();
} else
${'s_blamed_count18_argument'} = NULL;if(${'s_blamed_count18_argument'} !== null) ${'s_blamed_count18_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count19_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count19_argument'}->createConditionValue();
if(!${'s_comment_count19_argument'}->isValid()) return ${'s_comment_count19_argument'}->getErrorMessage();
} else
${'s_comment_count19_argument'} = NULL;if(${'s_comment_count19_argument'} !== null) ${'s_comment_count19_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count20_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count20_argument'}->createConditionValue();
if(!${'s_trackback_count20_argument'}->isValid()) return ${'s_trackback_count20_argument'}->getErrorMessage();
} else
${'s_trackback_count20_argument'} = NULL;if(${'s_trackback_count20_argument'} !== null) ${'s_trackback_count20_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count21_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count21_argument'}->createConditionValue();
if(!${'s_uploaded_count21_argument'}->isValid()) return ${'s_uploaded_count21_argument'}->getErrorMessage();
} else
${'s_uploaded_count21_argument'} = NULL;if(${'s_uploaded_count21_argument'} !== null) ${'s_uploaded_count21_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate22_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate22_argument'}->createConditionValue();
if(!${'s_regdate22_argument'}->isValid()) return ${'s_regdate22_argument'}->getErrorMessage();
} else
${'s_regdate22_argument'} = NULL;if(${'s_regdate22_argument'} !== null) ${'s_regdate22_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update23_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update23_argument'}->createConditionValue();
if(!${'s_last_update23_argument'}->isValid()) return ${'s_last_update23_argument'}->getErrorMessage();
} else
${'s_last_update23_argument'} = NULL;if(${'s_last_update23_argument'} !== null) ${'s_last_update23_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress24_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress24_argument'}->createConditionValue();
if(!${'s_ipaddress24_argument'}->isValid()) return ${'s_ipaddress24_argument'}->getErrorMessage();
} else
${'s_ipaddress24_argument'} = NULL;if(${'s_ipaddress24_argument'} !== null) ${'s_ipaddress24_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date25_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date25_argument'}->createConditionValue();
if(!${'start_date25_argument'}->isValid()) return ${'start_date25_argument'}->getErrorMessage();
} else
${'start_date25_argument'} = NULL;if(${'start_date25_argument'} !== null) ${'start_date25_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date26_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date26_argument'}->createConditionValue();
if(!${'end_date26_argument'}->isValid()) return ${'end_date26_argument'}->getErrorMessage();
} else
${'end_date26_argument'} = NULL;if(${'end_date26_argument'} !== null) ${'end_date26_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl2_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice4_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList6_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title7_argument,"like")
,new ConditionWithArgument('`content`',$s_content8_argument,"like", 'and')
,new ConditionWithArgument('`user_name`',$s_user_name9_argument,"like", 'and')
,new ConditionWithArgument('`user_id`',$s_user_id10_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name11_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address12_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage13_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags14_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl15_argument,"equal", 'and')
,new ConditionWithArgument('`readed_count`',$s_readed_count16_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count17_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count18_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count19_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count20_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count21_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate22_argument,"like_prefix", 'and')
,new ConditionWithArgument('`last_update`',$s_last_update23_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress24_argument,"like_prefix", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date25_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date26_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>