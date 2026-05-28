<?php if(!defined("__XE__"))exit;?><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--#Meta:modules/sejin7940_nick/tpl/js/sejin7940_nick_admin.js--><?php $__tmp=array('modules/sejin7940_nick/tpl/js/sejin7940_nick_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->sejin7940_nick ?>
	</h1>
</div>
<ul class="x_nav x_nav-tabs">
	<li <?php if($__Context->act=='dispSejin7940_nickAdminConfig'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispSejin7940_nickAdminConfig') ?>"><?php echo $__Context->lang->config ?></a></li>
    <li <?php if($__Context->act=='dispSejin7940_nickAdminNickChangeLog'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispSejin7940_nickAdminNickChangeLog') ?>"><?php echo $__Context->lang->change_nick_log ?></a></li>
    <li <?php if($__Context->act=='dispMemberAdminSignUpConfig'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispMemberAdminSignUpConfig') ?>"><?php echo $__Context->lang->deny_nick ?></a></li>
</ul>