<?php
$lang->bulkmsg='전체쪽지 발송';
$lang->bulkmsg_exp='트리거를 사용하여, 당겨가는 방식의 쪽지발송을 사용합니다. 많은 대상에게 일괄쪽지 발송을 하기에 적합합니다.';
$lang->reception='수신';
$lang->cmd_start='시작';
$lang->cmd_stop='중단';
$lang->grant_to_member='특정 사용자';
$lang->cmd_do_start_message='이 쪽지가 다시 발송될 수 있도록 재개합니다. 기존 미 수신자를 대상으로만 발송합니다.';
$lang->cmd_do_stop_message='이 쪽지가 더이상 발송되지 않도록 중단합니다. 이미 발송된 쪽지는 삭제되지 않습니다.';
$lang->cmd_do_delete_message='이 쪽지를 삭제합니다. 이미 발송된 쪽지는 삭제되지 않습니다.';
if(!is_array($lang->target_type_array)){
	$lang->target_type_array = array();
}
$lang->target_type_array['A']='모든 사용자';
$lang->target_type_array['G']='특정 그룹';
$lang->target_type_array['I']='특정 사용자';
