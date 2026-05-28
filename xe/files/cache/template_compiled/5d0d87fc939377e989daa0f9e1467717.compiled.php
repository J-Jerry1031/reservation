<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/kin/tpl','_header.html') ?>
<form action="./" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="dispContactAdminContent" />
        <fieldset>
			<?php echo $__Context->lang->mid ?> <input type="text" name="s_mid" value="<?php echo $__Context->s_mid ?>" class="inputTypeText" />
			<?php echo $__Context->lang->browser_title ?> <input type="text" name="s_browser_title" value="<?php echo $__Context->s_browser_title ?>" class="inputTypeText" />
            <span class="button blue"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
            <a href="<?php echo getUrl('s_mid','','s_browser_title','','page','') ?>" class="btn black"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
        </fieldset>
</form>
<form action="./" method="get" onsubmit="return doChangeCategory(this);" id="fo_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<div class="table">
	<table cellspacing="0" class="rowTable">
	<caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
		<thead>
			<tr>
				<th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
				<th scope="col"><div><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;" /></div></th>
				<th scope="col" width="15%">
					<div>
						<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
						<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
						<select name="module_category_srl">
							<option value=""><?php echo $__Context->lang->module_category ?></option>
							<option value="0"<?php if($__Context->module_category_srl==='0'){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->not_exists ?></option>
							<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
							<option value="">---------</option>
							<option value="-1"><?php echo $__Context->lang->cmd_management ?></option>
						</select>
						<input type="submit" name="go_button" id="go_button" value="GO" class="buttonTypeGo" />
					</div>
				</th>
				<th scope="col" width="20%"><?php echo $__Context->lang->mid ?></th>
				<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
				<th scope="col"><?php echo $__Context->lang->regdate ?></th>
				<th scope="col">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->kin_list&&count($__Context->kin_list))foreach($__Context->kin_list as $__Context->no=>$__Context->val){ ?><tr>
				<td class="center number"><?php echo $__Context->no ?></td>
				<td class="center"><input type="checkbox" name="cart" value="<?php echo $__Context->val->module_srl ?>" /></td>
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
				<td><a href="<?php echo getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid) ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->val->browser_title ?></a></td>
				<td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
				<td>
					<a href="<?php echo getUrl('act','dispKinAdminInsert','module_srl',$__Context->val->module_srl) ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_setup ?></span></a>
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminCopyModule','module_srl',$__Context->val->module_srl) ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonCopy"><span><?php echo $__Context->lang->cmd_copy ?></span></a>
					<a href="<?php echo getUrl('act','dispKinAdminDelete','module_srl', $__Context->val->module_srl) ?>" class="buttonSet buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
				</td>
			</tr><?php } ?>
		</tbody>
	</table>
</div>
<!-- 버튼 -->
<div class="btnArea">
    <div class="etc">
        <a href="<?php echo getUrl('','module','module','act','dispModuleAdminModuleSetup') ?>" onclick="doCartSetup(this.href); return false;" class="btn green"><span><?php echo $__Context->lang->cmd_setup ?></span></a>
    </div>
    <a href="<?php echo getUrl('act','dispKinAdminInsert','module_srl','') ?>" class="btn black strong"><span><?php echo $__Context->lang->cmd_make ?></span></a>
</div>
</form>
