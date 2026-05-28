<?php
if(!defined('__XE__')) exit();

if($called_position == 'after_module_proc'){
	if($addon_info->denied_edit=='Y')
	{
		if($this->act=='dispBoardWrite' && Context::get('document_srl')){
		$oDocument = Context::get('oDocument');
			if($oDocument->get('regdate') < date('YmdHis', strtotime('-'.$addon_info->permission_hours.' hours')))
			{
				$this->stop($addon_info->permission_hours.' 시간이 지난 게시글에는 수정을 할 수 없습니다');
			}
		}
	}
}

if($called_position == 'after_module_proc'){
	if($addon_info->denied_delete=='Y')
	{
		if($this->act=='dispBoardDelete'){
		$oDocument = Context::get('oDocument');
			if($oDocument->get('regdate') < date('YmdHis', strtotime('-'.$addon_info->permission_hours.' hours')))
			{
				$this->stop($addon_info->permission_hours.' 시간이 지난 게시글은 삭제할 수 없습니다');
			}
		}
	}
}

if($called_position == 'before_module_proc'){
	if($addon_info->denied_comment=='Y')
	{
		if ($this->act=='procBoardInsertComment' && Context::get('document_srl'))
		{
			$args->document_srl = Context::get('document_srl');
			$tmp_output = executeQuery('addons.regdate_edit.getDocumentComment', $args);
				if($tmp_output->toBool())
				{
					if($tmp_output->data->regdate < date('YmdHis', strtotime('-'.$addon_info->permission_hours.' hours')))
					{
						exit('<a>'.$addon_info->permission_hours.' 시간이 지난 게시글에는 수정을 할 수 없습니다'.'</a>');
					}
				}
		}
	}
}