<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncenterlite/tpl','header.html') ?>
<?php Context::addJsFile("modules/ncenterlite/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal" id="fo_ncenterlite"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="ncenterlite" />
	<input type="hidden" name="disp_act" value="dispNcenterliteAdminAdvancedconfig" />
	<input type="hidden" name="act" value="procNcenterliteAdminInsertConfig" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_mention_target ?></label>
			<div class="x_controls">
				<label class="x_inline">
					<input type="radio" id="mention_names_id" name="mention_names" value="id"<?php if($__Context->config->mention_names == 'id'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->user_id ?>
				</label>
				<label class="x_inline">
					<input type="radio" id="mention_names_nick_name" name="mention_names" value="nick_name"<?php if($__Context->config->mention_names == 'nick_name'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->nick_name ?>
				</label>
				<p class="x_help-block"><?php echo $__Context->lang->ncenterlite_mention_target_about ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mention_suffixes ?></label>
			<div class="x_controls">
				<label class="x_inline">
					<input type="text" name="mention_suffixes" value="{escape(implode(', ', $config->mention_suffixes), false)}" />
				</label>
				<p class="x_help-block"><?php echo $__Context->lang->about_mention_suffixes ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mention_suffix_always_cut ?></label>
			<div class="x_controls">
				<label class="x_inline">
					<input type="radio" id="mention_suffix_always_cut_y" name="mention_suffix_always_cut" value="Y"<?php if($__Context->config->mention_suffix_always_cut == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->mention_suffix_always_cut_y ?>
				</label>
				<label class="x_inline">
					<input type="radio" id="mention_suffix_always_cut_n" name="mention_suffix_always_cut" value="N"<?php if($__Context->config->mention_suffix_always_cut != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->mention_suffix_always_cut_n ?>
				</label>
				<p class="x_help-block"><?php echo $__Context->lang->about_mention_suffix_always_cut ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mention_limit ?></label>
			<div class="x_controls">
				<label class="x_inline">
					<input type="number" name="mention_limit" value="<?php echo intval($__Context->config->mention_limit) ?>" />
				</label>
				<p class="x_help-block"><?php echo $__Context->lang->about_mention_limit ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
