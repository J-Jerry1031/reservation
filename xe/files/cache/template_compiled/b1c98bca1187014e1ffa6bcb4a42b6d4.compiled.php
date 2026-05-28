<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/imageprocess/tpl/css/imageProcess.css--><?php $__tmp=array('modules/imageprocess/tpl/css/imageProcess.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
<h1>
<?php echo $__Context->lang->imageprocess ?> <span class="gray"><?php echo $__Context->lang->cmd_management ?></span>
</h1>
</div>
<p><?php echo nl2br($__Context->lang->about_imageprocess) ?> ver.<?php echo $__Context->imageprocess_info->version ?></p>
<div class="header4">
    <ul class="x_nav x_nav-tabs">
        <li <?php if($__Context->act=='dispImageprocessAdminIndex'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispImageprocessAdminIndex','module','admin') ?>"><?php echo $__Context->lang->cmd_resize_use ?></a></li>
<li <?php if($__Context->act=='dispImageprocessAdminWatermark'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispImageprocessAdminWatermark','module','admin') ?>"><?php echo $__Context->lang->cmd_watermark ?></a></li>
	 <li <?php if($__Context->act=='dispImageprocessAdminTextlogo'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispImageprocessAdminTextlogo','module','admin') ?>"><?php echo $__Context->lang->cmd_textlogo ?></a></li>
<?php if($__Context->imageprocess_info->resize_use =='Y' || $__Context->imageprocess_info->watermark_use == 'Y' || $__Context->imageprocess_info->textlogo_use == 'Y'){ ?>
        <li <?php if($__Context->act=='dispImageprocessAdminOfile'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispImageprocessAdminOfile','module','admin') ?>"><?php echo $__Context->lang->cmd_original_store ?></a></li>
<?php } ?>
<li <?php if($__Context->act=='dispImageprocessAdminEtc'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispImageprocessAdminEtc','module','admin') ?>"><?php echo $__Context->lang->cmd_etc ?></a></li>
    </ul>
</div>
