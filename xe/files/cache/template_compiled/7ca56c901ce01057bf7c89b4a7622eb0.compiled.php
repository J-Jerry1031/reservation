<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointhistory/tpl','header.html') ?>
<?php if(__ZBXE_VERSION__<'1.7'){ ?>
	<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/pointhistory/tpl/filter','setting.xml');$__xmlFilter->compile(); ?>
	<form action="./" method="post" onsubmit="return procFilter(this, setting)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<table cellspacing="0" class="rowTable">
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->skin ?></div></th>
				<td>
					<select name="skin">
						<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=> $__Context->val){ ?>
							<option value="<?php echo $__Context->key ?>" <?php if($__Context->module_config->skin==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->mobile_skin ?></div></th>
				<td>
					<select name="mskin">
						<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=> $__Context->val){ ?>
							<option value="<?php echo $__Context->key ?>" <?php if($__Context->module_config->mskin==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->point_record_way ?></div></th>
				<td>
					<select name="point_record_way">
						<option value="realtime" <?php if($__Context->module_config->point_record_way=='realtime'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->phway_point_realtime ?></option>					
						<option value="trigger" <?php if($__Context->module_config->point_record_way=='trigger'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->phway_point_trigger ?></option>
					</select>
					<p><?php echo $__Context->lang->about_point_record_way ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->member_menu_name ?></div></th>
				<td>
					<input type="text" name="member_menu_name" id="member_menu_name" value="<?php echo $__Context->module_config->member_menu_name ?>" />
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','member_menu_name') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting" title="<?php echo $__Context->lang->cmd_find_langcode ?>"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
					<p><?php echo $__Context->lang->about_member_menu_name ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->point_unit_char ?></div></th>
				<td>
					<input type="text" name="point_unit_char" value="<?php echo $__Context->module_config->point_unit_char ?>" class="inputTypeText w100" />
					<p><?php echo $__Context->lang->about_point_unit_char ?></p>
				</td>
			</tr>
			<tr>
				<th colspan="2" class="button">
					<div class="btnArea">
						<span class="button black strong">
							<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
						</span>
					</div>
				</th>
			</tr>
		</table>
	</form>
	
<?php }else{ ?>
	<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="pointhistory" />
		<input type="hidden" name="act" value="procPointhistoryAdminSetting" />
		<input type="hidden" name="xe_validator_id" value="modules/pointhistory/tpl/setting/1" />
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_config->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_config->mskin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="point_record_way"><?php echo $__Context->lang->point_record_way ?></label>
			<div class="x_controls">
				<select name="point_record_way" id="point_record_way">
					<option value="trigger"<?php if($__Context->module_config->point_record_way=='trigger'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->phway_point_trigger ?></option>
					<option value="realtime"<?php if($__Context->module_config->point_record_way=='realtime'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->phway_point_realtime ?></option>
				</select>
				<a href="#point_record_way_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="point_record_way_help" class="x_help-block" hidden><?php echo $__Context->lang->about_point_record_way ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="member_menu_name"><?php echo $__Context->lang->member_menu_name ?></label>
			<div class="x_controls">
				<input type="text" name="member_menu_name" id="member_menu_name" value="<?php if(strpos($__Context->module_config->member_menu_name, '$user_lang->') === false){;
echo $__Context->module_config->member_menu_name;
}else{;
echo htmlspecialchars($__Context->module_config->member_menu_name);
} ?>" class="lang_code" />
				<a href="#member_menu_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="member_menu_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_member_menu_name ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="point_unit_char"><?php echo $__Context->lang->point_unit_char ?></label>
			<div class="x_controls">
				<input type="text" name="point_unit_char" id="point_unit_char" value="<?php echo $__Context->module_config->point_unit_char ?>" style="width:100px" />
				<a href="#point_unit_char_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="point_unit_char_help" class="x_help-block" hidden><?php echo $__Context->lang->about_point_unit_char ?></p>
			</div>
		</div>
		
		<div class="x_clearfix btnArea">
			<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</form>
<?php } ?>