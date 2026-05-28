<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/m.skins/sketchbook5_member_m.skin','common_header.html') ?>
<div class="border">
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/resendAuthMail.xml", FALSE, "", 0, "body", TRUE, "") ?><form  class="form" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="resendAuthMail" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberResendAuthMail" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl(act, $__Context->act) ?>" />
    <h1 class="h1"><?php echo $__Context->lang->cmd_resend_auth_mail ?></h1>
    <p><?php echo $__Context->lang->about_resend_auth_mail ?></p>
	<fieldset>
		<div class="control-group">
			<label for="email_address"><?php echo $__Context->lang->email_address ?></label>
			<input type="text" id="email_address" name="email_address" value="" />
		</div>
	</fieldset>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_resend_auth_mail ?>" /></span>
	</div>
</form>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/m.skins/sketchbook5_member_m.skin','common_footer.html') ?>
