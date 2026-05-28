<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/faq/tpl','header.html') ?>
<form action="./" method="get" onsubmit="return doChangeCategory(this);" id="fo_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table class="x_table x_table-striped x_table-hover">
		<caption>
			<strong>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></strong>
		</caption>
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->no ?></th>
				<th scope="col">
					<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
					<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
					<select name="module_category_srl" style="width:auto;margin:0">
						<option value="0"<?php if($__Context->module_category_srl==0){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->module_category ?></option>
						<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>" <?php if($__Context->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
						<option value="">&hellip;</option>
						<option value="-1"><?php echo $__Context->lang->cmd_management ?></option>
					</select>
					<input type="submit" name="go_button" id="go_button" value="GO" class="x_btn" />
				</th>
				<th scope="col"><?php echo $__Context->lang->mid ?></th>
				<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
				<th scope="col"><?php echo $__Context->lang->regdate ?></th>
				<th scope="col"><?php echo $__Context->lang->cmd_edit ?></th>
				<th scope="col"><input type="checkbox" /></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->faq_list&&count($__Context->faq_list))foreach($__Context->faq_list as $__Context->no=>$__Context->val){ ?><tr>
				<td><?php echo $__Context->no ?></td>
				<td>
					<?php if(!$__Context->val->module_category_srl){ ?>
						<?php if($__Context->val->site_srl){ ?>
						<?php echo $__Context->lang->virtual_site ?>
						<?php }else{ ?>
						<?php echo $__Context->lang->not_exists ?>
						<?php } ?>
					<?php }else{ ?>
						<?php echo $__Context->module_category[$__Context->val->module_category_srl]->title ?>
					<?php } ?>
				</td>
				<td><?php echo htmlspecialchars($__Context->val->mid) ?></td>
				<td><a href="<?php echo getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid) ?>" target="_blank"><?php echo $__Context->val->browser_title ?></a></td>
				<td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
				<td>
					<a href="<?php echo getUrl('act','dispFaqAdminFaqInfo','module_srl',$__Context->val->module_srl) ?>" class="x_icon-cog" title="<?php echo $__Context->lang->cmd_setup ?>"><?php echo $__Context->lang->cmd_setup ?></a>
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminCopyModule','module_srl',$__Context->val->module_srl) ?>" onclick="popopen(this.href);return false;" class="x_icon-plus" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></a>
					<a href="<?php echo getUrl('act','dispFaqAdminDeleteFaq','module_srl', $__Context->val->module_srl) ?>" class="x_icon-remove" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></a>
				</td>
				<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->module_srl ?>" /></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<span class="x_btn-group x_pull-right">
			<a href="<?php echo getUrl('act','dispFaqAdminInsertFaq','module_srl','') ?>" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_make ?></a>
			<a href="<?php echo getUrl('','module','module','act','dispModuleAdminModuleSetup') ?>" onclick="doCartSetup(this.href); return false;" class="x_btn"><?php echo $__Context->lang->cmd_setup ?></a>
			<a href="<?php echo getUrl('','module','module','act','dispModuleAdminModuleAdditionSetup') ?>" onclick="doCartSetup(this.href); return false;" class="x_btn"><?php echo $__Context->lang->cmd_addition_setup ?></a>
		</span>
	</div>
</form>
<form action="./" method="get" class="search" style="margin-top:-36px"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="dispFaqAdminContent" />
	<fieldset>
		<input type="text" id="s_mid" name="s_mid" value="<?php echo $__Context->s_mid ?>" title="<?php echo $__Context->lang->mid ?>" placeholder="<?php echo $__Context->lang->mid ?>" style="width:100px" />
		<span class="x_input-append">
			<input type="text" id="s_browser_title" name="s_browser_title" value="<?php echo $__Context->s_browser_title ?>" title="<?php echo $__Context->lang->browser_title ?>" placeholder="<?php echo $__Context->lang->browser_title ?>" style="width:100px" />
			<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" class="x_btn x_btn-inverse" />
			<a href="<?php echo getUrl('s_mid','','s_browser_title','','page','') ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
		</span>
	</fieldset>
</form>
