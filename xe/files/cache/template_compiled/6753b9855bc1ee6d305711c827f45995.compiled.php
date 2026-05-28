<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/loginlog/ruleset/saveListSetting.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="listSetting"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="saveListSetting" />
	<fieldset>
		<legend><?php echo $__Context->lang->display_items ?></legend>
		<input type="hidden" name="module" value="loginlog" />
		<input type="hidden" name="act" value="procLoginlogAdminSaveListSetting" />
		<label class="x_inline"><input type="checkbox" name="listSetting[]"<?php if(in_array('member.user_name', $__Context->loginlog_config->listSetting)){ ?> checked<?php } ?> value="member.user_name"> <?php echo $__Context->lang->user_name ?></label>
		<label class="x_inline"><input type="checkbox" name="listSetting[]"<?php if(in_array('member.nick_name', $__Context->loginlog_config->listSetting)){ ?> checked<?php } ?> value="member.nick_name"> <?php echo $__Context->lang->nick_name ?></label>
		<label class="x_inline"><input type="checkbox" name="listSetting[]"<?php if(in_array('member.user_id', $__Context->loginlog_config->listSetting)){ ?> checked<?php } ?> value="member.user_id"> <?php echo $__Context->lang->user_id ?></label>
		<label class="x_inline"><input type="checkbox" name="listSetting[]"<?php if(in_array('member.email_address', $__Context->loginlog_config->listSetting)){ ?> checked<?php } ?> value="member.email_address"> <?php echo $__Context->lang->email_address ?></label>
		<label class="x_inline"><input type="checkbox" name="listSetting[]"<?php if(in_array('loginlog.ipaddress', $__Context->loginlog_config->listSetting)){ ?> checked<?php } ?> value="loginlog.ipaddress"> <?php echo $__Context->lang->ipaddress ?></label>
		<label class="x_inline"><input type="checkbox" name="listSetting[]"<?php if(in_array('loginlog.regdate', $__Context->loginlog_config->listSetting)){ ?> checked<?php } ?> value="loginlog.regdate"> <?php echo $__Context->lang->date ?></label>
		<button type="submit"  class="x_btn x_btn-mini"><?php echo $__Context->lang->cmd_save ?></button>
	</fieldset>
</form>
<?php  $__Context->column = 2; ?>
<?php if(in_array('member.user_name', $__Context->loginlog_config->listSetting)){ ?>
<?php 
	$__Context->listSettingUserName = true;
	$__Context->column++;
 ?>
<?php } ?>
<?php if(in_array('member.nick_name', $__Context->loginlog_config->listSetting)){ ?>
<?php 
	$__Context->listSettingNickName = true;
	$__Context->column++;
 ?>
<?php } ?>
<?php if(in_array('member.user_id', $__Context->loginlog_config->listSetting)){ ?>
<?php 
	$__Context->listSettingUserId = true;
	$__Context->column++;
 ?>
<?php } ?>
<?php if(in_array('member.email_address', $__Context->loginlog_config->listSetting)){ ?>
<?php 
	$__Context->listSettingEmail = true;
	$__Context->column++;
 ?>
<?php } ?>
<?php if(in_array('loginlog.ipaddress', $__Context->loginlog_config->listSetting)){ ?>
<?php 
	$__Context->listSettingIP = true;
	$__Context->column++;
 ?>
<?php } ?>
<?php if(in_array('loginlog.regdate', $__Context->loginlog_config->listSetting)){ ?>
<?php 
	$__Context->listSettingDate = true;
	$__Context->column++;
 ?>
<?php } ?>