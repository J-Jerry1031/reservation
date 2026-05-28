<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/spamfilter/tpl','header.html') ?>
<section class="section">
	<ul class="x_nav x_nav-tabs">
		<li><a href="<?php echo getUrl('','module','admin','act','dispSpamfilterAdminDeniedIPList') ?>"><?php echo $__Context->lang->cmd_denied_ip ?></a></li>
		<li><a href="<?php echo getUrl('','module','admin','act','dispSpamfilterAdminDeniedWordList') ?>"><?php echo $__Context->lang->cmd_denied_word ?></a></li>
		<li class="x_active"><a href="<?php echo getUrl('','module','admin','act','dispSpamfilterAdminConfigBlock') ?>"><?php echo $__Context->lang->cmd_config_block ?></a></li>
	</ul>
	<form action="./" method="post" id="spamfilterConfig"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />	
		<input type="hidden" name="act" value="procSpamfilterAdminInsertConfig" />
		<input type="hidden" name="module" value="spamfilter" />
		<input type="hidden" name="ruleset" value="insertConfig" />
		<input type="hidden" name="xe_validator_id" value="modules/spamfilter/tpl/1" />
		<div class="x_control-group">
			<p><strong><?php echo $__Context->lang->cmd_interval ?></strong></p>
			<label for="spamCond1_yes" class="x_inline">
				<input type="radio" name="limits" id="spamCond1_yes" value="Y"<?php if($__Context->config->limits=='Y' || $__Context->config->limits ==''){ ?> checked="checked"<?php } ?> />
				<?php echo $__Context->lang->cmd_yes ?>
			</label>
			<label for="spamCond1_no" class="x_inline">
				<input type="radio" name="limits" id="spamCond1_no" value="N"<?php if($__Context->config->limits!='Y' && $__Context->config->limits !=''){ ?> checked="checked"<?php } ?> /> 
				<?php echo $__Context->lang->cmd_no ?>
			</label>
		</div>
		<div class="x_control-group">
			<p><strong><?php echo $__Context->lang->cmd_check_trackback ?></strong></p>
			<label for="spamCond2_yes" class="x_inline">
				<input type="radio" name="check_trackback" id="spamCond2_yes" value="Y"<?php if($__Context->config->check_trackback=='Y' || $__Context->config->check_trackback==''){ ?> checked="checked"<?php } ?> />
				<?php echo $__Context->lang->cmd_yes ?>
			</label>
			<label for="spamCond2_no" class="x_inline">
				<input type="radio" name="check_trackback" id="spamCond2_no" value="N"<?php if($__Context->config->check_trackback!='Y' &&  $__Context->config->check_trackback!=''){ ?> checked="checked"<?php } ?> / > 
				<?php echo $__Context->lang->cmd_no ?>
			</label>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</div>
	</form>
</section>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/spamfilter/tpl','footer.html') ?>
