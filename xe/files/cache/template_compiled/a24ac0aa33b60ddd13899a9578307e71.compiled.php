<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/pointhistory/tpl/js/pointhistory_admin.js--><?php $__tmp=array('modules/pointhistory/tpl/js/pointhistory_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(__ZBXE_VERSION__<'1.7'){ ?>
	<h3 class="xeAdmin"><span class="gray"><?php echo $__Context->lang->pointhistory ?></span></h3>
	<div class="infoText"><?php echo $__Context->lang->about_pointhistory ?></div>
	<div class="header4">
		<ul class="localNavigation">
			<li <?php if($__Context->act=='dispPointhistoryAdminSetting'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointhistoryAdminSetting') ?>"><?php echo $__Context->lang->cmd_environment_setting ?></a></li>
			<li <?php if($__Context->act=='dispPointhistoryAdminList'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointhistoryAdminList') ?>"><?php echo $__Context->lang->member_pointhistory_list ?></a></li>			
		</ul>
	</div>
	
<?php }else{ ?>
	<div class="x_page-header">
		<h1>
			<?php echo $__Context->lang->pointhistory ?> 
			<?php if($__Context->module_info->mid){ ?><span class="path">
				&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
			</span><?php } ?>
			<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
		</h1>
	</div>
	<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_pointhistory ?></p>
	<ul class="x_nav x_nav-tabs">
			<li<?php if($__Context->act=='dispPointhistoryAdminSetting'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointhistoryAdminSetting') ?>"><?php echo $__Context->lang->cmd_environment_setting ?></a></li>
			<li<?php if($__Context->act=='dispPointhistoryAdminList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointhistoryAdminList') ?>"><?php echo $__Context->lang->member_pointhistory_list ?></a></li>
	</ul>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/pointhistory/tpl/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
<?php } ?>