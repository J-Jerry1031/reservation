<?php
	if(!defined('__XE__')) exit();

	$point = $addon_info->point;
	if(!$addon_info->point) $point=50;
	$logged_info = Context::get('logged_info');
	$oPointModel = &getModel('point');
	$member_point = $oPointModel->getPoint($logged_info->member_srl);

	if($this->act == 'dispCommunicationSendMessage' && $called_position == 'after_module_proc'){
		if($member_point < $point) {
			Context::addHtmlHeader('<script type="text/javascript">alert("포인트가 부족합니다.");window.close();</script>');
		} else {
			Context::addHtmlHeader('<script type="text/javascript">alert("쪽지 전송시 '.$point.'포인트가 차감되므로 꼭 필요한 쪽지만 보내주세요.");</script>');
		}
	}

	if($this->act == 'procCommunicationSendMessage' && $called_position == 'before_module_proc') {
		if($member_point < $point) {
			alertScript('FAIL');
			closePopupScript();
			exit;
		} else {
			$oPointController = &getController('point');
			$oPointController->setPoint($logged_info->member_srl,$point,'minus');
			alertScript($point.'포인트가 차감되었습니다.');
		}
	}
?>