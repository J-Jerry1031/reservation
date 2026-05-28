<?php
if(!defined('__XE__')) exit();

/**
* @file twoc_memo_del.addon.php
* @author TC (twocad@nate.com)
* @brief 메모삭제 애드온
**/

if($logged_info->is_admin == 'Y' && $called_position == 'after_module_proc' && $addon_info->memo_date != '') {

	if ($addon_info->memo_date) $memo_date = -$addon_info->memo_date." day";
	if ($addon_info->memo_del_admin) $memo_del_admin = $addon_info->memo_del_admin;
	else $memo_del_admin = 'N';
	if ($addon_info->memo_del_RS) $memo_del_RS = $addon_info->memo_del_RS;
	else $memo_del_RS = 'T';

	if($memo_del_admin == 'Y') $args->member_srl = '';
	else $args->member_srl = $logged_info->member_srl;

	if($memo_del_RS == 'R' || $memo_del_RS == 'T') {
		$args->message_type = 'R';
		$args->regdate = date('YmdHis', strtotime($memo_date));
		$output = executeQueryArray('addons.twoc_memo_del.getReceivedMessages', $args);
		if($output->data) {
			for($i=0;$i<count($output->data);$i++) {
				$message_list[] = $output->data[$i]->message_srl;
			}
		}
	}

	if($memo_del_RS == 'S' || $memo_del_RS == 'T') {
		$args->message_type = 'S';
		$args->regdate = date('YmdHis', strtotime($memo_date));
		$output = executeQueryArray('addons.twoc_memo_del.getSendedMessages', $args);
		if($output->data) {
			for($i=0;$i<count($output->data);$i++) {
				$message_list[] = $output->data[$i]->message_srl;
			}
		}
	}

	if($message_list) {
		if(count($message_list) == 1) $args->message_srl = $message_list[0];
		else $args->message_srl = implode(',',$message_list);
		$output = executeQuery('addons.twoc_memo_del.deleteMessages', $args);
	}
}
?>