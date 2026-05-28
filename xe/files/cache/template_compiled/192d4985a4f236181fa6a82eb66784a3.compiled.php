<?php if(!defined("__XE__"))exit;?><script>
var newTitle = '<?php echo $__Context->lang->new_title ?>';
var layoutTitle = '<?php echo $__Context->layout->layout_title ?>';
var addLang = '<?php echo $__Context->lang->cmd_insert ?>';
</script>
<!--#Meta:modules/layout/tpl/js/layout_admin.js--><?php $__tmp=array('modules/layout/tpl/js/layout_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/layout/tpl/copy_layout/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->cmd_layout_copy ?></h1>
	</div>
	<div class="x_modal-body x_form-horizontal" id="inputDiv">
		<input type="hidden" name="layout" value="<?php echo $__Context->layout->layout ?>" />
		<input type="hidden" name="act" value="procLayoutAdminCopyLayout" />
		<input type="hidden" name="layout_srl" value="<?php echo $__Context->layout->layout_srl ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/layout/tpl/copy_layout/1" />
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->layout_name ?></div>
			<div class="x_controls"><?php echo $__Context->layout->title ?></div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->title ?></div>
			<div class="x_controls"><?php echo $__Context->layout->layout_title ?></div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for=""><?php echo $__Context->lang->new_title ?></label>
			<div class="x_controls">
				<span class="x_input-append">
					<input type="text" name="title[]" required placeholder="<?php echo $__Context->layout->layout_title ?>" />
					<input type="button" value="<?php echo $__Context->lang->cmd_insert ?>" onclick="addLayoutCopyInputbox()" class="x_btn" />
				</span>
			</div>
		</div>
	</div>
	<div class="x_modal-footer">
		<button type="button" class="x_btn x_pull-left" onclick="window.close();"><?php echo $__Context->lang->cmd_close ?></button>
		<input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" class="x_btn x_btn-primary x_pull-right" />
	</div>
</form>
