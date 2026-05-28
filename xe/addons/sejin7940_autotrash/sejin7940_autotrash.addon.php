<?php
   
	if(!defined("__XE__")) exit();
	
	if($called_position!='before_module_proc') return;

	// 로그인 정보 가져오기
	$logged_info = Context::get('logged_info');
	if(!$logged_info) return;


	$oModuleModel = &getModel('module');
	$module_grant = $oModuleModel->getGrant($oModuleModel->getModuleInfoByMid(Context::get('mid')), $logged_info);
//  $module_grant->manager  -> 관리권한 있으면 1, 없으면 0

	// 관리자 게시물 삭제시 예외처리 여부
	if ($logged_info->is_admin == 'Y' && $addon_info->exceptAdmin == 'Y')return;
	if ($module_grant->manager && $addon_info->exceptManager == 'Y')return;

	if($addon_info->trash_document=='Y' && $this->act=='procBoardDeleteDocument' && Context::get('document_srl'))	{
		$document_srl = Context::get('document_srl');
			
		if($document_srl)
		{
			// triggerDeleteDocumentComments 가 실행되어 댓글이 삭제되어 복원 안 되는 현상 막기 위해
			Context::set('trash_delete','Y');  
			/*
			modules/comment/comment.controller.php 에서
			function triggerDeleteDocumentComments(&$obj) 함수 를 아래 문구로 둘러 쌈
					if(Context::get('trash_delete')!='Y') { ~~~~ }
			*/
  	
			$args->description = $addon_info->DeleteComment;
			$oDB = &DB::getInstance();
			$oDB->begin();
			$args->document_srl = $document_srl;	
			$oDocumentController = &getController('document');			
			$oDocumentController->moveDocumentToTrash($args);		
			$oDB->commit();
			

		}
	}

	if($addon_info->trash_comment=='Y' && $this->act=='procBoardDeleteComment' && Context::get('comment_srl'))	{		
		$comment_srl = Context::get('comment_srl');
		
		if($comment_srl)
		{		
			$oCommentController = &getController('comment');
			$oCommentAdminController = &getAdminController('comment');
						
			$oDB = &DB::getInstance();
			$oDB->begin();
			$comment_srl_list[0] = $comment_srl;
			$oCommentAdminController->_moveCommentToTrash($comment_srl_list, $oCommentController, $oDB);
			$oDB->commit();

		}
	}	
?>