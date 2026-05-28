<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointsend/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/pointsend/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="pointsend" />
	<input type="hidden" name="act" value="procPointsendAdminInsertConfig" />
	<section class="section">
		<h1><?php echo $__Context->lang->skin ?></h1>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->skin ?></div>
			<div class="x_controls">
				<select name="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin==$__Context->key ||!$__Context->config->skin){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->key ?>)</option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->fee ?></h1>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->fee_function ?></div>
			<div class="x_controls">
				<label class="x_inline"><input type="checkbox" name="use_fee" value="Y"<?php if($__Context->config->use_fee == 'Y' ){ ?> checked<?php } ?>> <?php echo $__Context->lang->use ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->fee_apply_point ?></div>
			<div class="x_controls">
				<input type="text" name="fee_apply_point" value="<?php echo $__Context->config->fee_apply_point ?>">
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->fee_but_group ?></div>
			<div class="x_controls">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label class="x_inline"><input type="checkbox" name="fee_but_group[]" value="<?php echo $__Context->key ?>"<?php if(in_array($__Context->key, $__Context->config->fee_but_group)){ ?> checked<?php } ?>> <?php echo $__Context->val->title ?></label><?php } ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->fee_persent ?></h1>
		<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->val->title ?></div>
			<div class="x_controls">
				<input type="text" name="fee_<?php echo $__Context->key ?>" value="<?php echo $__Context->config->fee_[$__Context->key] ?>" style="width:40px"> %
			</div>
		</div><?php } ?>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->pointgift_limit ?></h1>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->pointgift_denied_group ?></div>
			<div class="x_controls">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label class="x_inline"><input type="checkbox" name="deny_group[]" id="deny_<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>"<?php if(in_array($__Context->key, $__Context->config->deny_group)){ ?> checked<?php } ?>> <?php echo $__Context->val->title ?></label><?php } ?>
				<p><?php echo $__Context->lang->about_deny_group ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->pointgift_daily_limit ?></div>
			<div class="x_controls">
				<input type="number" name="daily_limit" value="<?php echo (int)$__Context->config->daily_limit ?>">
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->pointgift_sameip_deny ?></div>
			<div class="x_controls">
				<label class="x_inline">
					<input type="checkbox" name="sameip_deny" value="Y"<?php if($__Context->config->sameip_deny == 'Y'){ ?> checked<?php };
if(!$__Context->loginlog_installed){ ?> disabled<?php } ?>> 
					<?php if($__Context->loginlog_installed){ ?>
						<?php echo $__Context->lang->use ?>
					<?php } ?>
					<?php if(!$__Context->loginlog_installed){ ?>
						<?php echo $__Context->lang->cannot_use ?>
					<?php } ?>
				</label>
				<?php if(!$__Context->loginlog_installed){ ?><div class="message alert">
					<p><?php echo $__Context->lang->about_cannot_use ?></p>
				</div><?php } ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->grant ?></h1>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->grant ?></div>
			<div class="x_controls">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label class="x_inline"><input type="checkbox" name="grants[]" value="<?php echo $__Context->key ?>"<?php if(in_array($__Context->key, $__Context->config->grants)){ ?> checked<?php } ?> /> <?php echo $__Context->val->title ?></label><?php } ?>
			</div>
			<div class="btnArea">
				<input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" accesskey="s" class="x_btn x_btn-primary">
			</div>
		</div>
	</section>
		<?php if(False){ ?>
		<h2 class="h2"><?php echo $__Context->lang->cmd_setup_notification_message ?></h2>
		<p><?php echo $__Context->lang->about_notification_message ?></p>
		<table width="100%" border="1" cellspacing="0">
		<tbody>
		<tr>
			<th><?php echo $__Context->lang->title ?></th>
			<td><input type="text" name="notification_title" id="notification_t" value="<?php echo htmlspecialchars($__Context->config->notification_title) ?>" class="inputTypeText w400 lang_code" /></td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->content ?></th>
			<td><textarea name="notification_content" id="notification_c" cols="55" rows="10" class="inputTypeTextArea lang_code"><?php echo htmlspecialchars($__Context->config->notification_content) ?></textarea></td>
		</tr>
		</tbody>
		</table>
		<?php } ?>
</form>