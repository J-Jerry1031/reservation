<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/point/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/point/tpl/module_cofig/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<p><?php echo $__Context->lang->about_module_point ?></p>
<form action="./" method="post" id="fo_point"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="point" />
	<input type="hidden" name="act" value="procPointAdminInsertModuleConfig" />
	<input type="hidden" name="xe_validator_id" value="modules/point/tpl/module_cofig/1" />
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->module ?></th>
				<th scope="col"><?php echo $__Context->lang->point_insert_document ?></th>
				<th scope="col"><?php echo $__Context->lang->point_insert_comment ?></th>
				<th scope="col"><?php echo $__Context->lang->point_upload_file ?></th>
				<th scope="col"><?php echo $__Context->lang->point_download_file ?></th>
				<th scope="col"><?php echo $__Context->lang->point_read_document ?></th>
				<th scope="col"><?php echo $__Context->lang->point_voted ?></th>
				<th scope="col"><?php echo $__Context->lang->point_blamed ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->key=>$__Context->val){ ?><tr>
				<th scope="row"><?php echo $__Context->val->browser_title ?>(<?php echo $__Context->val->mid ?>)</th>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="insert_document[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['insert_document'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="insert_comment[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['insert_comment'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="upload_file[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['upload_file'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="download_file[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['download_file'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="read_document[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['read_document'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="voted[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['voted'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
				<td class="nowr"><input type="number" style="width:40px;text-align:right" name="blamed[<?php echo $__Context->val->module_srl ?>]" value="<?php echo $__Context->module_config[$__Context->val->module_srl]['blamed'] ?>" title="<?php echo $__Context->config->point_name ?>" /> <?php echo $__Context->config->point_name ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
    <div class="x_clearfix">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
	</div>
</form>
