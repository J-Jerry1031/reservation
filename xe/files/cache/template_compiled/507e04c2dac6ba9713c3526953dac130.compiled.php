<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointsend/skins/default','header.html') ?>
<!--#Meta:modules/pointsend/tpl/js/pointsend.js--><?php $__tmp=array('modules/pointsend/tpl/js/pointsend.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/pointsend/tpl/js/autoresize.jquery.min.js--><?php $__tmp=array('modules/pointsend/tpl/js/autoresize.jquery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_modal-header">
	<h1><?php echo $__Context->lang->pointsend ?></h1>
</div>
<div class="x_modal-body">
	<form id="fo_gift" action="./" method="post" class="x_form-horizontal" onsubmit="return procFilter(this, pointsend)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="pointsend">
		<input type="hidden" name="act" value="procPointsend">
		<input type="hidden" name="sender_srl" value="<?php echo $__Context->logged_info->member_srl ?>">
		<input type="hidden" name="receiver_srl" value="<?php echo $__Context->member_info->member_srl ?>">
		<input type="hidden" name="is_subtraction" value="N">
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->receiver ?></div>
			<div class="x_controls">
				<span class="member_<?php echo $__Context->member_info->member_srl ?>"><?php echo $__Context->member_info->nick_name ?></span>
				<?php if($__Context->logged_info->is_admin == 'Y'){ ?> (<?php echo $__Context->member_info->user_id ?>)<?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="input_send_point" class="x_control-label"><?php echo $__Context->lang->send_point ?></label>
			<div class="x_controls">
				<?php if($__Context->logged_info->is_admin == 'Y'){ ?><button type="button" class="x_btn x_btn-success btnSign">+</button><?php } ?>
				<input type="text" id="input_send_point" name="send_point" value="" class="inputTypeText" />
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->current_point ?></div>
			<div class="x_controls">
				<?php echo number_format($__Context->current_point) ?>
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->after_point ?></div>
			<div class="x_controls" id="afterPoint">
				<?php echo number_format($__Context->current_point) ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="gift_message" class="x_control-label"><?php echo $__Context->lang->gift_message ?></label>
			<div class="x_controls">
				<textarea name="gift_message" id="gift_message" cols="400" rows="3"></textarea>
				<p class="x_help-block"><?php echo $__Context->lang->about_gift_message ?><p>
			</div>
		</div>
		<?php if($__Context->pointsend_config->use_fee == 'Y'){ ?><div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->fee ?></div>
			<div class="x_controls" id="curFee">0</div>
		</div><?php } ?>
		<div class="btn-proc">
			<input type="submit" value="<?php echo $__Context->lang->pointsend ?>" class="x_btn">
		</div>
	</div>
	<script type="text/javascript">
	var cf_useFee = '<?php echo $__Context->pointsend_config->use_fee ?>';
	<?php if($__Context->pointsend_config->use_fee == 'Y'){ ?>
	var cf_fee = <?php echo $__Context->pointsend_config->fee ?>;
	var cf_feePoint = <?php echo $__Context->pointsend_config->fee_apply_point ?>;
	<?php } ?>
	var cf_curPoint = <?php echo $__Context->current_point ?>;
	</script>
	<script type="text/javascript">
	(function($){
		$('textarea[name=gift_message]').autoResize({
			animateDuration : 300,
			extraSpace : 0,
		});
	})(jQuery);
	</script>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointsend/skins/default','footer.html') ?>