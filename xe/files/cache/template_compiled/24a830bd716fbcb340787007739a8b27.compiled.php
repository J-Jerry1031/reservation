<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/imageprocess/tpl/js/imageProcess.js--><?php $__tmp=array('modules/imageprocess/tpl/js/imageProcess.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/imageprocess/tpl/filter','etc_setup.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/imageprocess/tpl','header.html') ?>
<form class="x_form-horizontal" action="./" method="get" onsubmit="return procFilter(this, etc_setup);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<?php if($__Context->EXIF){ ?><div class="x_control-group">
            <label class="x_control-label" for="rotate_use"><?php echo $__Context->lang->rotate_use ?></label>
            <div class="x_controls" id="rotate_use">
            <label class="x_inline"><input type="radio" id="rotate_use_N" name="rotate_use" value="N" <?php if($__Context->imageprocess_info->rotate_use!='Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->notuse ?></label>
            <label class="x_inline"><input type="radio" id="rotate_use_Y" name="rotate_use" value="Y" <?php if($__Context->imageprocess_info->rotate_use == 'Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->use ?></label>
         <br /> * <?php echo $__Context->lang->msg_rotate_use ?>
        </div>
    </div><?php } ?>
	<?php if(!$__Context->EXIF){ ?><div class="x_control-group">
            <label class="x_control-label" for="rotate_use"><?php echo $__Context->lang->rotate_use ?></label>
            <div class="x_controls" id="rotate_use">
            <label class="x_inline"><input type="radio" id="rotate_use_N" name="rotate_use" value="N" disabled /><?php echo $__Context->lang->notuse ?></label>
            <label class="x_inline"><input type="radio" id="rotate_use_Y" name="rotate_use" value="N" disabled /></label>
         <br /> * <?php echo $__Context->lang->msg_rotate_no_use ?>
        </div>
    </div><?php } ?>
        <div class="x_control-group" id="magic_use">
			<label class="x_control-label" for="magic_use"><?php echo $__Context->lang->magic_use ?></label>
		<div class="x_controls">
			<label class="x_inline"><input type="radio" id="magic_use_N" name="magic_use" value="N" <?php if($__Context->imageprocess_info->magic_use!='Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->gd ?></label>
            <label class="x_inline"><input type="radio" id="magic_use_Y" name="magic_use" value="Y" <?php if($__Context->imageprocess_info->magic_use == 'Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->magic ?></label>
       <br />  * <?php echo $__Context->lang->msg_magic_use ?>
        </div>
    </div>
<div id="magic_conversion">
    <div class="x_control-group">
            <label class="x_control-label" for="magic_path"><?php echo $__Context->lang->magic_path ?></label>
		<div class="x_controls">
		<input type="text" name="magic_path" value="<?php if(!$__Context->imageprocess_info->magic_path && $__Context->magic_path){;
echo $__Context->magic_path;
}else{;
echo $__Context->imageprocess_info->magic_path;
} ?>" class="inputTypeText w400" />
		<br /><?php echo $__Context->lang->msg_magic_path ?>
		<?php if($__Context->magic_path){ ?><br /><font color=red><?php echo $__Context->magic_path ?></font><?php echo $__Context->lang->mgaic_installed;
} ?>
		</div>
    </div>
<div class="x_control-group">
	<label class="x_control-label" for="magic_conversion"><?php echo $__Context->lang->magic_conversion ?></label>
		<div class="x_controls">
		<label class="x_inline"><input type="radio"  name="magic_conversion" value="N" <?php if($__Context->imageprocess_info->magic_conversion!='Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->notuse ?></label>
            <label class="x_inline"><input type="radio"  name="magic_conversion" value="Y" <?php if($__Context->imageprocess_info->magic_conversion == 'Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->use ?></label>
            <br />	* <?php echo $__Context->lang->msg_magic_conversion ?>
		</div>
</div>
<div class="x_control-group"  id="magic_conversion">
		<?php $__Context->original = explode('|@|',$__Context->imageprocess_info->original_format) ?>
	<label class="x_control-label" for="magic_conversion">		<?php echo $__Context->lang->original_format ?></label>
	<div class="x_controls">
		<?php if($__Context->lang->original_format_type&&count($__Context->lang->original_format_type))foreach($__Context->lang->original_format_type as $__Context->key=>$__Context->val){ ?><label class="x_inline"><input type="checkbox" name="original_format" value="<?php echo $__Context->key ?>"  <?php if(in_array($__Context->key,$__Context->original)){ ?>checked="checked"<?php } ?>><?php echo $__Context->val ?> </label> <?php } ?> 
		<br /><?php echo $__Context->lang->about_raw_format ?>
		</div></div>
<div class="x_control-group" id="target_format">
	 <label class="x_control-label" for="trans_format">	<?php echo $__Context->lang->trans_format ?></label>
	<div class="x_controls">
	<?php if($__Context->lang->ext_type&&count($__Context->lang->ext_type))foreach($__Context->lang->ext_type as $__Context->val){ ?>
	<label class="x_inline"><input type="radio" name="target_format" value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->imageprocess_info->target_format){ ?>checked="checked"<?php } ?>><?php echo $__Context->val ?> </label> 
	<?php } ?>
         </div>
        </div>
    </div>
<div class="x_clearfix btnArea">
		<div class="x_pull-left"></div>
	<div class="x_pull-right">
<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_save ?></button></div>
</div>
</form>
