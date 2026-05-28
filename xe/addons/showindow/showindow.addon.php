<?php
	if(!defined("__XE__")) exit();

	/**
	 * @file showindow.addon.php
	 * @author anizen
	 * @brief 알림창을 띄웁니다.
	 *
	 **/

	if($called_position == 'after_module_proc' && !Context::get('addWindow'))
	{
		include_once(_XE_PATH_.'addons/showindow/showindow.addon.class.php');
		$showClass = new showWindowClass;

		if(Context::get('module') == 'admin' && Context::get('act') == 'dispAddonAdminSetup' && Context::get('selected_addon') == 'showindow')
		{
			$showClass->changeSkins();
		}else{
			$showClass->getWindow($addon_info);
		}
	}
?>