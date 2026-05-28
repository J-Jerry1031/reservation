<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/pointsend/tpl/css/style.css--><?php $__tmp=array('modules/pointsend/tpl/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->logAct =  array('dispPointsendAdminLogList', 'dispPointsendAdminBatchLogList') ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->pointsend ?></h1>
</div>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispPointsendAdminIndex'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointsendAdminIndex') ?>"><?php echo $__Context->lang->cmd_setup ?></a></li>
	<li<?php if($__Context->act=='dispPointsendAdminSend'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointsendAdminSend') ?>"><?php echo $__Context->lang->cmd_pointsend ?></a></li>
	<li<?php if(in_array($__Context->act, $__Context->logAct)){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispPointsendAdminLogList') ?>"><?php echo $__Context->lang->cmd_pointsend_log_list ?></a></li>
</ul>