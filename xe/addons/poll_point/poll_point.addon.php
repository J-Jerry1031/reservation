<?php

if($called_position=='before_module_proc'){
	if($this->act=='procPoll'){
		$logged_info = Context::get('logged_info');
		$member_srl = $logged_info->member_srl;
		$oController = getController('point');
		$oController->setPoint($member_srl, $addon_info->point_add, 'add');
	}
}