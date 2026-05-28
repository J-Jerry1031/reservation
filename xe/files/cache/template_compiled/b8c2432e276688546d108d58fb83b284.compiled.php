<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/imageprocess/tpl/filter','watermark_setup.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/imageprocess/tpl/css/imageprocess.css--><?php $__tmp=array('modules/imageprocess/tpl/css/imageprocess.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/imageprocess/tpl/js/imageprocess.js--><?php $__tmp=array('modules/imageprocess/tpl/js/imageprocess.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/imageprocess/tpl','header.html') ?>
<form class="x_form-horizontal" action="./" method="get" onsubmit="return procFilter(this, watermark_setup);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->watermark_use ?></label>
			<div class="x_controls">
			<label class="x_inline"><input type="radio" id="watermark_use_N" name="watermark_use" value="N" <?php if($__Context->imageprocess_info->watermark_use!='Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->notuse ?></label>
            <label class="x_inline"><input type="radio" id="watermark_use_Y" name="watermark_use" value="Y" <?php if($__Context->imageprocess_info->watermark_use == 'Y'){ ?>checked="checked"<?php } ?> /><?php echo $__Context->lang->use ?></label>
            <br /> <?php echo $__Context->lang->about_watermark_use ?>
		</div>
    </div>
<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->msg_watermark_type ?></label>
			<div class="x_controls">
		<?php if($__Context->lang->ext_type&&count($__Context->lang->ext_type))foreach($__Context->lang->ext_type as $__Context->val){ ?>
			<label class="x_inline"><input type="checkbox" value="<?php echo $__Context->val ?>" name="ext" <?php if(in_array($__Context->val,$__Context->imageprocess_info->ext)){ ?>checked="checked"<?php } ?> /> .<?php echo $__Context->val ?></label>
		<?php } ?> <?php echo $__Context->lang->abount_target_watermark ?>
		</div>
	</div>
<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->water_quality ?></label>
			<div class="x_controls">
        <input type="text" name="water_quality" value="<?php echo $__Context->imageprocess_info->water_quality ?>" class="inputTypeText w40" ><br /> <?php echo $__Context->lang->msg_water_quality ?>
    </div>
</div>
<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->watermark ?></label>
			<div class="x_controls">
			<?php if($__Context->stampList&&count($__Context->stampList))foreach($__Context->stampList as $__Context->fn=>$__Context->stamp){ ?>
            <label class="x_inline"><input type="radio" value="<?php echo $__Context->stamp ?>" name="watermark" <?php if($__Context->stamp == $__Context->imageprocess_info->watermark){ ?> checked="checked"<?php } ?> /> <br /><img src="<?php echo $__Context->stamp ?>"><br /><?php echo $__Context->fn ?></label>
        <?php } ?>
			<br /><?php echo $__Context->lang->msg_watermark ?>
</div></div>
<div class="x_control-group">
            <label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->water_margin ?></label>
            <div class="x_controls">
		<label class="x_inline"><?php echo $__Context->lang->xmargin ?>
		<input type="text" name="xmargin" value="<?php echo $__Context->imageprocess_info->xmargin ?>" class="inputTypeText w40" ></label>
		<label class="x_inline"><?php echo $__Context->lang->ymargin ?>
        <input type="text" name="ymargin" value="<?php echo $__Context->imageprocess_info->ymargin ?>" class="inputTypeText w40" ></label>
		<br /><?php echo $__Context->lang->msg_water_margin ?>
    </div>
</div>
<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->water_position ?></label>
			<div class="x_controls">
				<?php if($__Context->lang->watermark_type&&count($__Context->lang->watermark_type))foreach($__Context->lang->watermark_type as $__Context->key => $__Context->val){ ?>
				<label class="x_inline"><input type="radio" id="watermark_"<?php echo $__Context->key ?> name="water_position" value="<?php echo $__Context->key ?>" <?php if($__Context->imageprocess_info->water_position == $__Context->key){ ?>checked="checked"<?php } ?> /> <?php if(file_exists("./modules/imageprocess/tpl/images/".$__Context->key.".png")){ ?><br /><img src="/xe/modules/imageprocess/tpl/images/<?php echo $__Context->key ?>.png"><?php } ?> <br /><?php echo $__Context->val ?></label>
				<?php } ?>
				<br />* <?php echo $__Context->lang->msg_water_position ?>
            </div>
        </div>
<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->minimum_width ?></label>
			<div class="x_controls">
        <input type="text" name="minimum_width" value="<?php echo $__Context->imageprocess_info->minimum_width ?>" class="inputTypeText w40" />px * <?php echo $__Context->lang->msg_minimum_width ?></div>
    </div>
	<div class="x_control-group">
        <label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->nogroup ?></label>
        <div class="x_controls">
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <input type="checkbox" value="<?php echo $__Context->key ?>" name="nowatergroup" <?php if(in_array($__Context->key,$__Context->imageprocess_info->nowatergroup)){ ?>checked="checked"<?php } ?> id="member_group_<?php echo $__Context->key ?>"/> <?php echo $__Context->val->title ?> &nbsp;
            <?php } ?>
            <br><?php echo $__Context->lang->msg_nogroup ?>
        </div>
    </div>
</section>
<section class="section">
    <h1><?php echo $__Context->lang->watermark_use ?></h1>
    <div class="x_control-group"><?php echo $__Context->lang->about_image_mid ?></div>
<div class="x_controls"></div>
<div class="x_control-group">
            <label class="x_control-label"><input type="checkbox" onclick="XE.checkboxToggleAll('water_mid'); return false;" /> Check All</label>
            <div class="x_controls">
<fieldset>
        <?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->module_category_srl => $__Context->modules){ ?>
        <div class="module_category_title"><?php if($__Context->modules->title){ ?> <?php echo $__Context->modules->title ?> <?php }else{;
echo $__Context->lang->none_category;
} ?></div>
        <div id="section_<?php echo $__Context->module_category_srl ?>"><?php if($__Context->modules->list&&count($__Context->modules->list))foreach($__Context->modules->list as $__Context->key => $__Context->val){ ?>
        <div class="module_list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php echo $__Context->key ?>" name="water_mid" id="chk_water_mid_<?php echo $__Context->key ?>" <?php if(in_array($__Context->key,$__Context->imageprocess_info->water_mid)){ ?>checked="checked"<?php } ?> /> <?php echo $__Context->val->mid ?>(<?php echo $__Context->val->browser_title ?>)
<div class="each_logo" >
<?php echo $__Context->lang->each_setup ?>
<div class="x_control-group">
            <label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->each_watermark ?></label>
            <div class="x_controls">
            <?php if($__Context->stampList&&count($__Context->stampList))foreach($__Context->stampList as $__Context->fn=>$__Context->stamp){ ?>
            <label class="x_inline"><input type="radio" value="<?php echo $__Context->stamp ?>" name="watermark_<?php echo $__Context->key ?>" <?php if($__Context->stamp == $__Context->each_watermark[$__Context->key]){ ?> checked="checked"<?php } ?> /> <br /><img src="<?php echo $__Context->stamp ?>"><br /><?php echo $__Context->fn ?></label>
        <?php } ?>
            <br /><?php echo $__Context->lang->msg_watermark ?>
</div></div>
<div class="x_control-group">
            <label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->each_water_margin ?></label>
            <div class="x_controls">
        <label class="x_inline"><?php echo $__Context->lang->xmargin ?>
        <input type="text" name="xmargin_<?php echo $__Context->key ?>" value="<?php echo $__Context->imageprocess_info->each_xmargin[$__Context->key] ?>" class="inputTypeText w40" ></label>
        <label class="x_inline"><?php echo $__Context->lang->ymargin ?>
        <input type="text" name="ymargin_<?php echo $__Context->key ?>" value="<?php echo $__Context->imageprocess_info->each_ymargin[$__Context->key] ?>" class="inputTypeText w40" ></label>
        <br /><?php echo $__Context->lang->msg_water_margin ?>
    </div>
</div>
<div class="x_control-group">
            <label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->each_water_position ?></label>
            <div class="x_controls">
                <?php if($__Context->lang->watermark_type&&count($__Context->lang->watermark_type))foreach($__Context->lang->watermark_type as $__Context->k => $__Context->v){ ?>
                <label class="x_inline"><input type="radio" id="watermark_"<?php echo $__Context->key ?> name="water_position_<?php echo $__Context->key ?>" value="<?php echo $__Context->k ?>" <?php if($__Context->imageprocess_info->each_position[$__Context->key] == $__Context->k){ ?>checked="checked"<?php } ?> /> <?php if(file_exists("./modules/imageprocess/tpl/images/".$__Context->k.".png")){ ?><br /><img src="/xe/modules/imageprocess/tpl/images/<?php echo $__Context->k ?>.png"><?php } ?> <br /><?php echo $__Context->v ?></label>
                <?php } ?>
                <br />* <?php echo $__Context->lang->msg_water_position ?>
            </div>
        </div>
</div>
	</div>
        <?php } ?></div>
        <?php } ?>
</fieldset></div></div>
    <div class="x_clearfix btnArea">
        <div class="x_pull-left">
        </div>
        <div class="x_pull-right">
            <button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_save ?></button>
    </div>
</div>
</form>
