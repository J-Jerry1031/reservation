<?php if(!defined("__XE__"))exit;?><section class="section">
	<h1><?php echo $__Context->lang->trackback ?></h1>
	<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="trackback" />
		<input type="hidden" name="act" value="procTrackbackAdminInsertModuleConfig" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		<input type="hidden" name="target_module_srl" value="<?php echo $__Context->trackback_config->module_srl?$__Context->trackback_config->module_srl:$__Context->module_srls ?>" />
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->enable_trackback ?></label>
			<div class="x_controls">
				<label for="trackback_y" class="x_inline"><input type="radio" name="enable_trackback" id="trackback_y" value="Y"<?php if($__Context->trackback_config->enable_trackback == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->yes ?></label>
				<label for="trackback_n" class="x_inline"><input type="radio" name="enable_trackback" id="trackback_n" value="N"<?php if($__Context->trackback_config->enable_trackback != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->not ?></label>
			</div>
		</div>
		<div class="btnArea">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
