<?php if(!defined("__XE__"))exit;
Context::loadLang('modules/editor/components/multimedia_link/lang'); ?>
<?php if(__DEBUG__){ ?>
	<!--#Meta:modules/editor/components/multimedia_link/tpl/popup.css--><?php $__tmp=array('modules/editor/components/multimedia_link/tpl/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/multimedia_link/tpl/popup.js--><?php $__tmp=array('modules/editor/components/multimedia_link/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/editor/components/multimedia_link/tpl/popup.min.css--><?php $__tmp=array('modules/editor/components/multimedia_link/tpl/popup.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/multimedia_link/tpl/popup.min.js--><?php $__tmp=array('modules/editor/components/multimedia_link/tpl/popup.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<section class="section">
	<h1><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h1>
	<form action="./" method="get" onsubmit="return false" id="fo" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->multimedia_url ?></label>
			<div class="x_controls">
				<input type="text" id="multimedia_url" value="<?php echo $__Context->manual_url ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->multimedia_caption ?></label>
			<div class="x_controls">
				<input type="text" id="multimedia_caption" value="" />
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->multimedia_width ?></label>
			<div class="x_controls">
				<input type="text"  size="3" id="multimedia_width" value="400" /> px
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->multimedia_height ?></label>
			<div class="x_controls">
				<input type="text"  size="3" id="multimedia_height" value="400" /> px
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->multimedia_auto_start ?></label>
			<div class="x_controls">
				<input type="checkbox" id="multimedia_auto_start" value="Y" />
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->multimedia_wmode ?></label>
			<div class="x_controls">
				<select id="multimedia_wmode">
					<option value="window"><?php echo $__Context->lang->multimedia_wmode_window ?></option>
					<option value="opaque"><?php echo $__Context->lang->multimedia_wmode_opaque ?></option>
					<option value="transparent" selected="selected"><?php echo $__Context->lang->multimedia_wmode_transparent ?></option>
				</select>
				<p><?php echo $__Context->lang->about_ccl_allow_modification ?></p>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="button" id="btn_insert" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_insert ?></button>
				<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo $__Context->lang->about_component ?></a>
			</div>
		</div>
	</form>
</section>
