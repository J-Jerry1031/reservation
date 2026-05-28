<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/loginlog/tpl/css/loginlog_admin.css--><?php $__tmp=array('modules/loginlog/tpl/css/loginlog_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/loginlog/tpl/js/loginlog_admin.js--><?php $__tmp=array('modules/loginlog/tpl/js/loginlog_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->loginlog ?></h1>
</div>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispLoginlogAdminList'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLoginlogAdminList') ?>"><?php echo $__Context->lang->loginlog_list ?></a>
	</li>
	<li<?php if($__Context->act == 'dispLoginlogAdminArrange'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLoginlogAdminArrange') ?>"><?php echo $__Context->lang->arrange_loginlog ?></a>
	</li>
	<li<?php if($__Context->act == 'dispLoginlogAdminSetting'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLoginlogAdminSetting') ?>"><?php echo $__Context->lang->cmd_loginlog_module_config ?></a>
	</li>
	<li<?php if($__Context->act == 'dispLoginlogAdminDesign'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLoginlogAdminDesign') ?>">
		<?php echo $__Context->lang->design ?></a>
	</li>
</ul>