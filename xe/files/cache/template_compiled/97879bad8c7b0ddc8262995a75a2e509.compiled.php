<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncenterlite/tpl/js/ncenter_admin.js--><?php $__tmp=array('modules/ncenterlite/tpl/js/ncenter_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncenterlite/tpl/css/ncenter_admin.css--><?php $__tmp=array('modules/ncenterlite/tpl/css/ncenter_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncenterlite/tpl','header.html') ?>
<?php Context::addJsFile("modules/ncenterlite/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal" id="fo_ncenterlite"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="ncenterlite" />
	<input type="hidden" name="disp_act" value="dispNcenterliteAdminConfig" />
	<input type="hidden" name="act" value="procNcenterliteAdminInsertConfig" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_io ?></label>
			<div class="x_controls">
				<label for="notify_mention" class="x_inline"><input type="checkbox" name="use[mention]" id="notify_mention" value="1"<?php if(isset($__Context->config->use['mention'])){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_mention ?></label>
				<label for="notify_comment" class="x_inline"><input type="checkbox" name="use[comment]" id="notify_comment" value="1"<?php if(isset($__Context->config->use['comment'])){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_comment ?></label>
				<label for="notify_comment_comment" class="x_inline"><input type="checkbox" name="use[comment_comment]" id="notify_comment_comment" value="1"<?php if(isset($__Context->config->use['comment_comment'])){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_comment_comment ?></label>
				<label for="notify_vote" class="x_inline"><input type="checkbox" name="use[vote]" id="notify_vote" value="1"<?php if(isset($__Context->config->use['vote'])){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_cmd_vote ?></label>
				<label for="notify_message" class="x_inline"><input type="checkbox" name="use[message]" id="notify_message" value="1"<?php if(isset($__Context->config->use['message'])){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_type_message ?></label>
				<label for="notify_admin_content" class="x_inline"><input type="checkbox" name="use[admin_content]" id="notify_admin_content" value="1"<?php if(isset($__Context->config->use['admin_content'])){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_admin_content ?></label>
				<p class="x_help-block"><?php echo $__Context->lang->about_admin_content ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="display_use"><?php echo $__Context->lang->ncenterlite_display ?></label>
			<div class="x_controls">
				<select name="display_use" id="display_use">
					<option value="all"<?php if($__Context->config->display_use == 'all'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->ncenterlite_display_all ?></option>
					<option value="none"<?php if($__Context->config->display_use == 'none'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->ncenterlite_display_none ?></option>
					<option value="pc"<?php if($__Context->config->display_use == 'pc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->ncenterlite_display_pc ?></option>
					<option value="mobile"<?php if($__Context->config->display_use == 'mobile'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->ncenterlite_display_mobile ?></option>
				</select>
				<p class="x_help-block"><?php echo $__Context->lang->ncenterlite_display_about ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->member_menu_view ?></label>
			<div class="x_controls">
				<label class="x_inline">
					<input type="radio" id="user_config_list_id" name="user_config_list" value="Y"<?php if($__Context->config->user_config_list == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->member_menu_on ?>
				</label>
				<label class="x_inline">
					<input type="radio" id="user_config_list_nick_name" name="user_config_list" value="N"<?php if($__Context->config->user_config_list != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->member_menu_off ?>
				</label>
				<p class="x_help-block"><?php echo $__Context->lang->about_member_menu_view ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_document_event_read ?></label>
			<div class="x_controls">
				<label class="x_inline"><input type="radio" name="document_read" value="Y"<?php if($__Context->config->document_read == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_document_event_read_delete ?></label>
				<label class="x_inline"><input type="radio" name="document_read" value="N"<?php if($__Context->config->document_read != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->ncenterlite_document_event_read_preserve ?></label>
				<p class="x_help-block"><?php echo $__Context->lang->ncenterlite_document_event_read_about ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
