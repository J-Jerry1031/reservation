<?php
	if(!defined("__XE__")) exit();

	/**
	 * @file block_document.addon.php
     * @author showjean (showjean@naver.com, http://showjean.com)
	 * @author explode
	 * @brief 문서의 신고/비추천 수를 비교하여 조건 이상이면 내용을 보여주지 않습니다.
	 **/

	if($called_position != 'after_module_proc' || Context::get('module') == 'admin') return;
	if($this->act != "dispBoardContent" && $this->act != "procBoardInsertDocument" && $this->act != "dispBoardDelete") return;

	$oModuleModel = &getModel('module');
	$logged_info = Context::get('logged_info');
	$declared_max = (int)$addon_info->declared_max;
	$blamed_max = (int)$addon_info->blamed_max;
	if($blamed_max == 0 && $declared_max == 0) return;
	$useDeclared = $declared_max > 0;
	$useBlamed = $blamed_max > 0;

	$blocked_title = $addon_info->blocked_title;
    $blocked_message = $addon_info->blocked_message;

	$document_srl = Context::get('document_srl');
	$document_list = Context::get('document_list');

	if($document_list) {
		foreach($document_list as $key=>$document){
			if($useDeclared){
				$result = executeQuery('document.getDeclaredDocument', $document);
				$overDeclared = $result->data->declared_count >= $declared_max;
			}else{
				$overDeclared = false;
			}
			if($useBlamed){
				$overBlamed = abs($document->get('blamed_count')) >= $blamed_max;
			}else{
				$overBlamed = false;
			}
			if( $overDeclared || $overBlamed){
				$grant = $oModuleModel->getGrant($oModuleModel->getModuleInfoByModuleSrl($document->get('module_srl')), $logged_info);
				if($document->get('is_notice')!='Y'){
					if($logged_info->is_admin == 'Y' || $grant->manager){
						$document->add('title', $blocked_title.' - '.$document->get('title'));
					}else{
						$document->add('title', $blocked_title);
						$document->add('member_srl', "0");
						$document->add('nick_name', "익명");
						$document->add('comment_count', "0");
						$document->add('content', $blocked_message);
					}
				}
			}			
		}

	}
	if($document_srl) {
		$oDocumentModel = &getModel('document');
		$document = $oDocumentModel->getDocument($document_srl);

		if($document->isExists()) {
			if($useDeclared){
				$result = executeQuery('document.getDeclaredDocument', $document);
				$overDeclared = $result->data->declared_count >= $declared_max;
			}else{
				$overDeclared = false;
			}
			if($useBlamed){
				$overBlamed = abs($document->get('blamed_count')) >= $blamed_max;
			}else{
				$overBlamed = false;
			}
			if( $overDeclared || $overBlamed){
				$grant = $oModuleModel->getGrant($oModuleModel->getModuleInfoByModuleSrl($document->get('module_srl')), $logged_info);
				if($document->get('is_notice')!='Y'){
					if($logged_info->is_admin == 'Y' || $grant->manager){
					}else{
						$this->stop($blocked_message);
					}
				}
			}
		}
	}
?>
