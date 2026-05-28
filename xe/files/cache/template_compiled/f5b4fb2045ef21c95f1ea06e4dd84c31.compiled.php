<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/sejin7940_comment/tpl/js/sejin7940_comment.js--><?php $__tmp=array('modules/sejin7940_comment/tpl/js/sejin7940_comment.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->sejin7940_comment ?></h1>
</div>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispSejin7940_commentAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispSejin7940_commentAdminConfig') ?>"><?php echo $__Context->lang->cmd_setting ?></a></li>
	<li<?php if($__Context->act=='dispCommentAdminList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispCommentAdminList') ?>"><?php echo $__Context->lang->comment_list ?></a></li>
</ul>
