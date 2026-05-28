<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncenterlite/tpl/js/ncenter_admin.js--><?php $__tmp=array('modules/ncenterlite/tpl/js/ncenter_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncenterlite/tpl/css/ncenter_admin.css--><?php $__tmp=array('modules/ncenterlite/tpl/css/ncenter_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncenterlite/tpl','header.html') ?>
<?php Context::addJsFile("modules/ncenterlite/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal" id="fo_ncenterlite"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="ncenterlite" />
	<input type="hidden" name="disp_act" value="dispNcenterliteAdminSkinsetting" />
	<input type="hidden" name="act" value="procNcenterliteAdminInsertConfig" />
	<section class="section">
		<h1><?php echo $__Context->lang->cmd_layout_setup ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->config->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#aboutLayout" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
				<p class="x_help-block" id="aboutLayout" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile ?> <?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->config->mlayout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#aboutMLayout" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
				<p class="x_help-block" id="aboutMLayout" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->ncenterlite_skin_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" onchange="doDisplaySkinColorset(this); return false;">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin == $__Context->key){ ?> selected="selected"<?php } ?>>
						<?php echo $__Context->val->title ?> (<?php echo htmlspecialchars($__Context->key) ?>)
					</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="colorset"><?php echo $__Context->lang->colorset ?></label>
			<div class="x_controls">
				<select name="colorset" id="colorset">
					<?php if($__Context->colorset_list&&count($__Context->colorset_list))foreach($__Context->colorset_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->name ?>"<?php if($__Context->config->colorset == $__Context->val->name){ ?> selected="selected"<?php } ?>>
						<?php echo $__Context->val->title ?> (<?php echo $__Context->val->name ?>)
					</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin" onchange="doDisplayMobileSkinColorset(this); return false;">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->mskin == $__Context->key){ ?> selected="selected"<?php } ?>>
						<?php echo $__Context->val->title ?> (<?php echo htmlspecialchars($__Context->key) ?>)
					</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mcolorset"><?php echo $__Context->lang->mobile_colorset ?></label>
			<div class="x_controls">
				<select name="mcolorset" id="mcolorset">
					<?php if($__Context->mcolorset_list&&count($__Context->mcolorset_list))foreach($__Context->mcolorset_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->name ?>"<?php if($__Context->config->mcolorset == $__Context->val->name){ ?> selected="selected"<?php } ?>>
						<?php echo $__Context->val->title ?> (<?php echo $__Context->val->name ?>)
					</option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="zindex"><?php echo $__Context->lang->ncenterlite_zindex ?></label>
			<div class="x_controls">
				<input type="number" name="zindex" id="zindex" value="<?php echo $__Context->config->zindex ?>" style="width:100px" />
				<p class="x_help-block"><?php echo $__Context->lang->ncenterlite_zindex_about ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
