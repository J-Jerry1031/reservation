<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointsend/tpl','header.html') ?>
<!--#Meta:modules/pointsend/tpl/js/autoresize.jquery.min.js--><?php $__tmp=array('modules/pointsend/tpl/js/autoresize.jquery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/pointsend/ruleset/pointsendByUserId.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="pointsendByUserId" />
	<input type="hidden" name="module" value="pointsend" />
	<input type="hidden" name="act" value="procPointsendAdminSendToMember"/>
	<h2><?php echo $__Context->lang->pointsend_by_user_id ?></h2>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
		<tbody>
		<tr>
			<th><?php echo $__Context->lang->user_id ?></th>
			<td>
				<input type="text" name="user_id" value="" style="width:200px;" />
				<p><?php echo $__Context->lang->about_pointsend_by_user_id ?></p>
			</td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->point ?></th>
			<td>
				<input type="text" name="point" value="" style="width:200px;" />
			</td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->message_title ?></th>
			<td><input type="text" name="message_title" value="" style="width:400px;" /></td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->message_body ?></th>
			<td>
				<textarea name="message_body" cols="55" rows="10" class="inputContent"></textarea>
				<p><?php echo $__Context->lang->about_notification_message2 ?></p>
			</td>
		</tr>
		<tr>
			<td class="button" colspan="2"><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_pointsend ?>" /></span></td>
		</tr>
		</tbody>
	</table>
	</div>
</form>
<h2><?php echo $__Context->lang->cmd_batch_pointsend ?></h2>
<a href="<?php echo getUrl('act','dispPointsendAdminSendToGroup') ?>" class="btn"><span><?php echo $__Context->lang->cmd_group_pointsend ?></span></a>
<script type="text/javascript">
(function($){
	$('.inputContent').autoResize({
		animateDuration : 300,
		extraSpace : 0,
	});
})(jQuery);
</script>