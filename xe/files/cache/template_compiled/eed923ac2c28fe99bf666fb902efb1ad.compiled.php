<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncenterlite/tpl/js/ncenter_admin.js--><?php $__tmp=array('modules/ncenterlite/tpl/js/ncenter_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncenterlite/tpl/css/ncenter_admin.css--><?php $__tmp=array('modules/ncenterlite/tpl/css/ncenter_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncenterlite/tpl','header.html') ?>
<?php Context::addJsFile("modules/ncenterlite/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal" id="fo_ncenterlite"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="ncenterlite" />
	<input type="hidden" name="disp_act" value="dispNcenterliteAdminSeletedmid" />
	<input type="hidden" name="act" value="procNcenterliteAdminInsertConfig" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_notify_setting ?></label>
			<div class="x_controls">
				<p class="x_help-block"><?php echo $__Context->lang->ncenterlite_about_notify_setting ?></p>
				<?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->mid=>$__Context->item){ ?><div>
					<label>
						<input type="checkbox" value="<?php echo $__Context->item->module_srl ?>" name="hide_module_srls[]"<?php if(is_array($__Context->config->hide_module_srls) && in_array($__Context->item->module_srl, $__Context->config->hide_module_srls)){ ?> checked="checked"<?php } ?> />
						<strong><?php echo $__Context->item->browser_title ?></strong> (<?php echo $__Context->item->mid ?> / <?php echo strtoupper($__Context->item->module) ?>)
					</label>
				</div><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_notify_mid_all ?></label>
			<div class="x_controls">
				<p class="x_help-block"><?php echo $__Context->lang->ncenterlite_about_mid_all ?></p>
				<?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->mid=>$__Context->item){ ?><div>
					<label>
						<input type="checkbox" value="<?php echo $__Context->item->module_srl ?>" name="admin_notify_module_srls[]"<?php if(is_array($__Context->config->admin_notify_module_srls) && in_array($__Context->item->module_srl, $__Context->config->admin_notify_module_srls)){ ?> checked="checked"<?php } ?> />
						<strong><?php echo $__Context->item->browser_title ?></strong> (<?php echo $__Context->item->mid ?> / <?php echo strtoupper($__Context->item->module) ?>)
					</label>
				</div><?php } ?>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
