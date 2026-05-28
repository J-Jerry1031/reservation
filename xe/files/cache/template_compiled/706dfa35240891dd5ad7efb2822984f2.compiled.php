<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncenterlite/tpl/js/ncenter_admin.js--><?php $__tmp=array('modules/ncenterlite/tpl/js/ncenter_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncenterlite/tpl/css/ncenter_admin.css--><?php $__tmp=array('modules/ncenterlite/tpl/css/ncenter_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncenterlite/tpl','header.html') ?>
<div class="x_form-horizontal" id="fo_ncenterlite">
	<section class="section">
		<h1><?php echo $__Context->lang->etc ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_test_mention ?></label>
			<div class="x_controls">
				<label><input type="button" name="dummy" onClick="doDummyDataInsert();" class="x_btn" value="<?php echo $__Context->lang->ncenterlite_test_make_dummy ?>"> <?php echo $__Context->lang->ncenterlite_test_mention_about ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->ncenterlite_test_push ?></label>
			<div class="x_controls">
				<label><input type="button" name="dummy" onClick="doDummyPushDataInsert();" class="x_btn" value="<?php echo $__Context->lang->ncenterlite_test_make_dummy ?>"> <?php echo $__Context->lang->ncenterlite_test_push_about ?></label>
			</div>
		</div>
	</section>
</div>
