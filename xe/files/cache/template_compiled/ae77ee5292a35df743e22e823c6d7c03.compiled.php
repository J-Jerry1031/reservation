<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->ncenterlite ?></h1>
</div>
<div class="header4">
	<ul class="x_nav x_nav-tabs">
		<li<?php if($__Context->act=='dispNcenterliteAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcenterliteAdminConfig') ?>"><?php echo $__Context->lang->ncenterlite_basic_settings ?></a></li>
		<li<?php if($__Context->act=='dispNcenterliteAdminAdvancedconfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act', 'dispNcenterliteAdminAdvancedconfig') ?>"><?php echo $__Context->lang->ncenterlite_advenced_config ?></a></li>
		<li<?php if($__Context->act=='dispNcenterliteAdminSeletedmid'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcenterliteAdminSeletedmid') ?>"><?php echo $__Context->lang->ncenterlite_mid_use ?></a></li>
		<li<?php if($__Context->act=='dispNcenterliteAdminSkinsetting'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcenterliteAdminSkinsetting') ?>"><?php echo $__Context->lang->ncenterlite_skin_settings ?></a></li>
		<li<?php if($__Context->act=='dispNcenterliteAdminTest'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcenterliteAdminTest') ?>"><?php echo $__Context->lang->ncenterlite_test ?></a></li>
		<li<?php if($__Context->act=='dispNcenterliteAdminList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcenterliteAdminList') ?>"><?php echo $__Context->lang->ncenterlite_notice_list ?></a></li>
	</ul>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
