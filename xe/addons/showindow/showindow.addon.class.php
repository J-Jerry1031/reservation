<?php
	if(!defined("__XE__")) exit();

	class showWindowClass{

		function changeSkins()
		{
			$skins_list = $this->getSkins();

			foreach($skins_list as $key => $val)
			{
				$skin = new stdClass;
				$skin->title = $val->title;
				$skin->value = $key;

				if(preg_match('/^default$/',$key))
				{
					Context::get('addon_info')->extra_vars[0]->options[0] = $skin;
				}else{
					$skins[] = $skin;
				}
			}

			foreach($skins as $val)
			{
				Context::get('addon_info')->extra_vars[0]->options[] = $val;
			}
		}

		function getSkins()
		{
			$path = _XE_PATH_ . 'addons/showindow';
			$skins = 'skins';
			$oModuleModel = getModel('module');
			$skin_list = $oModuleModel->getSkins($path,$skins);

			return $skin_list;
		}

		function getWindow($addon_info)
		{
			if(!$addon_info->skin) $addon_info->skin = 'default';
			if(!$addon_info->title) $addon_info->title = '주의사항';
			if(!$addon_info->content) $addon_info->content = '<p>XE 포럼은 자유게시판이 아닌 XE 관련 주제를 포괄적으로 다루지만 정보의 공유와 토의를 목적으로 합니다</p><p>필요에 따라 아래 게시판을 이용해주시기 바라며 이 게시판의 운영 목적에 맞지 않는 게시물은 예고없이 이동 또는 삭제될 수 있습니다</p><ul><li>XE 사용시 문제 해결이 필요할 때는 묻고답하기</li><li>사이트 운영/관리에 관한 정보 공유 및 조언을 구할 때는 웹마스터 포럼</li><li>자료 배포 및 패치관련 내용은 Download</li><li>공식사이트 관련 문의, 제안은 사이트 이용 문의</li></ul>';

			if(!$addon_info->button) $addon_info->button = '위 내용을 숙지하였으며 이에 동의합니다.';

			$tpl_path = sprintf("%sskins/%s/",_XE_PATH_.'addons/showindow/', $addon_info->skin);
			$tpl_file = 'window.html';

			Context::set('addon_info',$addon_info);
			$logged_info = Context::get('logged_info');
			$userLevel = $this->getLevel($logged_info->member_srl);
			$userGroup = $this->getGroups($logged_info->member_srl);

			Context::set('userLevel',$userLevel);
			Context::set('userGroup',$userGroup);

			$oTemplate = &TemplateHandler::getInstance();
			$window = $oTemplate->compile($tpl_path, $tpl_file);

			Context::addHtmlFooter($window);
			Context::set('addWindow',true);
		}

		function getLevel($member_srl)
		{
			$current_level = 0;

			if(!$member_srl) return $current_level;

			$oModuleModel = getModel('module');
			$oPointModel = getModel('point');
			$config = $oModuleModel->getModuleConfig('point');
			$current_point = $oPointModel->getPoint($member_srl, true);
			$current_level = $oPointModel->getLevel($current_point, $config->level_step);

			return $current_level;
		}

		function getGroups($member_srl)
		{
			$memberGroup = null;
			if(!$member_srl) return $memberGroup;

			$oMemberModel = getModel('member');
			$memberGroup = $oMemberModel->getMemberGroups($member_srl);

			return $memberGroup;
		}
	}
?>