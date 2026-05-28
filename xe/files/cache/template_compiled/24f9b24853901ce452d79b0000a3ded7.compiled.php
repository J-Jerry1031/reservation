<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/pointrush/tpl/js/board_admin.js--><?php $__tmp=array('modules/pointrush/tpl/js/board_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->pointrush_board_management ?> 
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_board ?></p>
<?php if($__Context->module_info && $__Context->act != 'dispPointrushAdminContent' && $__Context->act != 'dispPointrushAdminDeletePointrush'){ ?><ul class="x_nav x_nav-tabs">
	<?php if($__Context->module=='admin'){ ?><li<?php if($__Context->act=='dispPointrushAdminContent'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminContent','module_srl','', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_board_list ?></a></li><?php } ?>
	<!--<?php if($__Context->act=='dispPointrushAdminInsertPointrush'){ ?><li class="x_active"><a href="<?php echo getUrl('act','dispPointrushAdminInsertPointrush', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_create_board ?></a></li><?php } ?>-->
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminPointrushInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminPointrushInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_board_info ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminCategoryInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminCategoryInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_category ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminExtraVars'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminExtraVars', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->extra_vars ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminGrantInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminPointrushAdditionSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminPointrushAdditionSetup', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_addition_setup ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminSkinInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispPointrushAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointrushAdminMobileSkinInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_mobile_skin ?></a></li><?php } ?>
</ul><?php } ?>
