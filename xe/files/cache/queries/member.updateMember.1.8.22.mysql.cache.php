<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMember");
$query->setAction("update");
$query->setPriority("");

${'password7_argument'} = new Argument('password', $args->{'password'});
${'password7_argument'}->checkNotNull();
if(!${'password7_argument'}->isValid()) return ${'password7_argument'}->getErrorMessage();
if(${'password7_argument'} !== null) ${'password7_argument'}->setColumnType('varchar');

${'user_name8_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name8_argument'}->checkNotNull();
if(!${'user_name8_argument'}->isValid()) return ${'user_name8_argument'}->getErrorMessage();
if(${'user_name8_argument'} !== null) ${'user_name8_argument'}->setColumnType('varchar');

${'nick_name9_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name9_argument'}->checkNotNull();
if(!${'nick_name9_argument'}->isValid()) return ${'nick_name9_argument'}->getErrorMessage();
if(${'nick_name9_argument'} !== null) ${'nick_name9_argument'}->setColumnType('varchar');

${'user_id10_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id10_argument'}->checkNotNull();
if(!${'user_id10_argument'}->isValid()) return ${'user_id10_argument'}->getErrorMessage();
if(${'user_id10_argument'} !== null) ${'user_id10_argument'}->setColumnType('varchar');

${'email_address11_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address11_argument'}->checkNotNull();
if(!${'email_address11_argument'}->isValid()) return ${'email_address11_argument'}->getErrorMessage();
if(${'email_address11_argument'} !== null) ${'email_address11_argument'}->setColumnType('varchar');
if(isset($args->email_id)) {
${'email_id12_argument'} = new Argument('email_id', $args->{'email_id'});
if(!${'email_id12_argument'}->isValid()) return ${'email_id12_argument'}->getErrorMessage();
} else
${'email_id12_argument'} = NULL;if(${'email_id12_argument'} !== null) ${'email_id12_argument'}->setColumnType('varchar');
if(isset($args->email_host)) {
${'email_host13_argument'} = new Argument('email_host', $args->{'email_host'});
if(!${'email_host13_argument'}->isValid()) return ${'email_host13_argument'}->getErrorMessage();
} else
${'email_host13_argument'} = NULL;if(${'email_host13_argument'} !== null) ${'email_host13_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question14_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question14_argument'}->isValid()) return ${'find_account_question14_argument'}->getErrorMessage();
} else
${'find_account_question14_argument'} = NULL;if(${'find_account_question14_argument'} !== null) ${'find_account_question14_argument'}->setColumnType('number');

${'find_account_answer15_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
${'find_account_answer15_argument'}->ensureDefaultValue('');
if(!${'find_account_answer15_argument'}->isValid()) return ${'find_account_answer15_argument'}->getErrorMessage();
if(${'find_account_answer15_argument'} !== null) ${'find_account_answer15_argument'}->setColumnType('varchar');

${'homepage16_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage16_argument'}->ensureDefaultValue('');
if(!${'homepage16_argument'}->isValid()) return ${'homepage16_argument'}->getErrorMessage();
if(${'homepage16_argument'} !== null) ${'homepage16_argument'}->setColumnType('varchar');

${'blog17_argument'} = new Argument('blog', $args->{'blog'});
${'blog17_argument'}->ensureDefaultValue('');
if(!${'blog17_argument'}->isValid()) return ${'blog17_argument'}->getErrorMessage();
if(${'blog17_argument'} !== null) ${'blog17_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday18_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday18_argument'}->isValid()) return ${'birthday18_argument'}->getErrorMessage();
} else
${'birthday18_argument'} = NULL;if(${'birthday18_argument'} !== null) ${'birthday18_argument'}->setColumnType('char');

${'allow_mailing19_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing19_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing19_argument'}->isValid()) return ${'allow_mailing19_argument'}->getErrorMessage();
if(${'allow_mailing19_argument'} !== null) ${'allow_mailing19_argument'}->setColumnType('char');
if(isset($args->allow_message)) {
${'allow_message20_argument'} = new Argument('allow_message', $args->{'allow_message'});
if(!${'allow_message20_argument'}->isValid()) return ${'allow_message20_argument'}->getErrorMessage();
} else
${'allow_message20_argument'} = NULL;if(${'allow_message20_argument'} !== null) ${'allow_message20_argument'}->setColumnType('char');
if(isset($args->denied)) {
${'denied21_argument'} = new Argument('denied', $args->{'denied'});
if(!${'denied21_argument'}->isValid()) return ${'denied21_argument'}->getErrorMessage();
} else
${'denied21_argument'} = NULL;if(${'denied21_argument'} !== null) ${'denied21_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date22_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date22_argument'}->isValid()) return ${'limit_date22_argument'}->getErrorMessage();
} else
${'limit_date22_argument'} = NULL;if(${'limit_date22_argument'} !== null) ${'limit_date22_argument'}->setColumnType('date');
if(isset($args->is_admin)) {
${'is_admin23_argument'} = new Argument('is_admin', $args->{'is_admin'});
if(!${'is_admin23_argument'}->isValid()) return ${'is_admin23_argument'}->getErrorMessage();
} else
${'is_admin23_argument'} = NULL;if(${'is_admin23_argument'} !== null) ${'is_admin23_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description24_argument'} = new Argument('description', $args->{'description'});
if(!${'description24_argument'}->isValid()) return ${'description24_argument'}->getErrorMessage();
} else
${'description24_argument'} = NULL;if(${'description24_argument'} !== null) ${'description24_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars25_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars25_argument'}->isValid()) return ${'extra_vars25_argument'}->getErrorMessage();
} else
${'extra_vars25_argument'} = NULL;if(${'extra_vars25_argument'} !== null) ${'extra_vars25_argument'}->setColumnType('text');

${'member_srl26_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl26_argument'}->checkFilter('number');
${'member_srl26_argument'}->checkNotNull();
${'member_srl26_argument'}->createConditionValue();
if(!${'member_srl26_argument'}->isValid()) return ${'member_srl26_argument'}->getErrorMessage();
if(${'member_srl26_argument'} !== null) ${'member_srl26_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`password`', ${'password7_argument'})
,new UpdateExpression('`user_name`', ${'user_name8_argument'})
,new UpdateExpression('`nick_name`', ${'nick_name9_argument'})
,new UpdateExpression('`user_id`', ${'user_id10_argument'})
,new UpdateExpression('`email_address`', ${'email_address11_argument'})
,new UpdateExpression('`email_id`', ${'email_id12_argument'})
,new UpdateExpression('`email_host`', ${'email_host13_argument'})
,new UpdateExpression('`find_account_question`', ${'find_account_question14_argument'})
,new UpdateExpression('`find_account_answer`', ${'find_account_answer15_argument'})
,new UpdateExpression('`homepage`', ${'homepage16_argument'})
,new UpdateExpression('`blog`', ${'blog17_argument'})
,new UpdateExpression('`birthday`', ${'birthday18_argument'})
,new UpdateExpression('`allow_mailing`', ${'allow_mailing19_argument'})
,new UpdateExpression('`allow_message`', ${'allow_message20_argument'})
,new UpdateExpression('`denied`', ${'denied21_argument'})
,new UpdateExpression('`limit_date`', ${'limit_date22_argument'})
,new UpdateExpression('`is_admin`', ${'is_admin23_argument'})
,new UpdateExpression('`description`', ${'description24_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars25_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>