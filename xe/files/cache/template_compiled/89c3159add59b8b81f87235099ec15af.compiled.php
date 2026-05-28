<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/sketchbook5_member_skin','common_header.html') ?>
<div class="border">
<h1 class="h1"><?php echo $__Context->lang->cmd_find_member_account ?></h1>
<p><?php echo $__Context->lang->about_temp_password ?></p>
<p><?php echo $__Context->lang->user_id ?> : <?php echo $__Context->user_id ?></p>
<p><?php echo $__Context->lang->temp_password ?> : <?php echo $__Context->temp_password ?></p>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/sketchbook5_member_skin','common_footer.html') ?>
