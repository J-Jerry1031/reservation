<?php
	if(!defined("__XE__")) exit();

	/**
	 * @file beforecheckwrite.addon.php
	 * @author anizen
	 * @brief 이전 글 작성자가 동일한 경우 제한합니다.
	 *
	 **/

	if($called_position == 'before_module_proc') {

		//문서 정보가 있으면 리턴 (편집모드로 판단함)
		if(Context::get('document_srl')) return;

		if($this->act != 'procBoardInsertDocument' && Context::get('act') != 'dispBoardWrite') return;

		//회원정보를 불러온다.
		$logged_info = Context::get('logged_info');

		//기본 설정 세팅
		if(!$addon_info->admin) $addon_info->admin = 'N';
		if(!$addon_info->member) $addon_info->member = 'Y';
		if(!$addon_info->guest) $addon_info->guest = 'Y';
		if(!$addon_info->once_guest) $addon_info->once_guest = 'Y';
		if(!$addon_info->write_count) $addon_info->write_count = '4';
		if(!$addon_info->message) $addon_info->message = '글을 연달아 작성할 수 없습니다.';
		
		//회원정보가 있으면 ~
		if($logged_info->member_srl)
		{
			//관리자를 제외할 경우 리턴 (쓰기 허용)
			if($addon_info->admin != 'Y' && $logged_info->is_admin == 'Y') return;

			//회원제한을 하지 않을 경우 리턴
			if($addon_info->member != 'Y' && $logged_info->member_srl) return;			
		}
		// 회원 정보가 없으면~ 게스트로 판단.
		else
		{
			//회원 제한을 사용하지 않을 경우 리턴..
			if($addon_info->guest != 'Y') return;
		}


		//모듈아이디 구함
		$mid = Context::get('mid');

		//현재 회원번호 구함
		$member_srl = $logged_info->member_srl;

		//현재 모듈번호 구함
		$oModuleModel = &getModel('module');
		$target_module_info = $oModuleModel->getModuleInfoByMid($mid);
		$module_srl = $target_module_info->module_srl;

		//이전 글 정보 불러오기
		$args->module_srl = $module_srl;
		$args->list_count = intval($addon_info->write_count);
		
		$before = executeQueryArray('addons.beforecheckwrite.getDocuments', $args);

		$writed_count = 0;

		//현재시간을 구한다.
		$currentTime = date('Ymd');

		foreach($before->data as $before_document)
		{

			//회원이면 member_srl 기준으로 체크
			if($member_srl)
			{
				//마지막 작성자와 현재 회원이 같지 않으면 리턴 (쓰기 허용)
				if($before_document->member_srl != $member_srl)
				{
					if($writed_count == 0) return;
				}
				else
				{
					if($currentTime == zDate($before_document->regdate,'Ymd')) $writed_count++;
				}
			}
			//비회원이면 ipaddress를 기준으로 체크한다.
			else
			{
				//마지막 작성자와 현재 ip가 같지 않으면 리턴 (쓰기 허용)
				if($addon_info->once_guest == 'Y')
				{
					//이전 글이 비회원이 작성한 글이 아니면 리턴
					if($before->data->member_srl != 0)
					{
						if($writed_count == 0) return;
					}
					else
					{
						if($currentTime == zDate($before_document->regdate,'Ymd')) $writed_count++;
					}
				}
				else
				{
					if($before->data->ipaddress != $_SERVER['REMOTE_ADDR'])
					{
						if($writed_count == 0) return;
					}
					else
					{
						if($currentTime == zDate($before_document->regdate,'Ymd')) $writed_count++;
					}
				}
			}

		}

		if($writed_count < $addon_info->write_count) return;

		$this->stop($addon_info->message);
	}
?>