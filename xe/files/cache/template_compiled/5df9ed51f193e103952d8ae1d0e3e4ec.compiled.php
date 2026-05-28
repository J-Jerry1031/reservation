<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/module/tpl/copy_module/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<section class="section">
<form rule="copyModule" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="module" />
	<input type="hidden" name="act" value="procModuleAdminCopyModule" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/module/tpl/copy_module/1" />
	<h2><?php echo $__Context->lang->module_copy ?></h2>
	<table class="x_table x_table-striped x_table-hover">
		<tr>
			<th scope="row"><?php echo $__Context->lang->module ?></th>
			<td ><?php echo $__Context->module_info->module ?></td>
			</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->mid ?></th>
			<td><?php echo $__Context->module_info->mid ?></td>
			</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->browser_title ?></th>
			<td><?php echo $__Context->module_info->browser_title ?></td>
			</tr>
	</table>
	<table class="x_table x_table-striped x_table-hover">
		<tr>
			<th scope="col"><div><?php echo $__Context->lang->mid ?><div></th>
			<th scope="col"><div><?php echo $__Context->lang->browser_title ?><div></th>
			</tr>
		<tr>
			<td><input type="text" name="mid_1" /></td>
			<td><input type="text" name="browser_title_1" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_2" /></td>
			<td><input type="text" name="browser_title_2" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_3" /></td>
			<td><input type="text" name="browser_title_3" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_4" /></td>
			<td><input type="text" name="browser_title_4" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_5" /></td>
			<td><input type="text" name="browser_title_5" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_6" /></td>
			<td><input type="text" name="browser_title_6" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_7" /></td>
			<td><input type="text" name="browser_title_7" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_8" /></td>
			<td><input type="text" name="browser_title_8" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_9" /></td>
			<td><input type="text" name="browser_title_9" /></td>
			</tr>
		<tr>
			<td><input type="text" name="mid_10" /></td>
			<td><input type="text" name="browser_title_10" /></td>
			</tr>
	</table>
	<div class="x_clearfix">
		<div class="x_btn-group x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
</section>
