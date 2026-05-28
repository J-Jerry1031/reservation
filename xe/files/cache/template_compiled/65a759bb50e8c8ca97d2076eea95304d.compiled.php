<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/faq/tpl/js/faq_admin.js--><?php $__tmp=array('modules/faq/tpl/js/faq_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->faq_management ?> 
		<?php if($__Context->module_info->mid){ ?><span class="path">&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a></span><?php } ?>
		<a href="#about_faq" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="about_faq" hidden><?php echo nl2br($__Context->lang->about_faq) ?></p>
<?php if($__Context->act != 'dispFaqAdminDeleteFaq' && $__Context->act != 'dispFaqAdminContent'){ ?><ul class="x_nav x_nav-tabs">
	<?php if($__Context->module=='admin'){ ?><li<?php if($__Context->act=='dispFaqAdminContent'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispFaqAdminContent','module_srl','') ?>"><?php echo $__Context->lang->cmd_faq_list ?></a></li><?php } ?>
	<?php if(!$__Context->module_srl && $__Context->act=='dispFaqAdminInsertFaq'){ ?><li<?php if($__Context->act=='dispFaqAdminInsertFaq'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispFaqAdminInsertFaq') ?>"><?php echo $__Context->lang->cmd_create_faq ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispFaqAdminFaqInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispFaqAdminFaqInfo') ?>"><?php echo $__Context->lang->cmd_faq_info ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispFaqAdminCategoryInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispFaqAdminCategoryInfo') ?>"><?php echo $__Context->lang->cmd_manage_category ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispFaqAdminFaqAdditionSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispFaqAdminFaqAdditionSetup') ?>"><?php echo $__Context->lang->cmd_addition_setup ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispFaqAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispFaqAdminGrantInfo') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li><?php } ?>
</ul><?php } ?>
