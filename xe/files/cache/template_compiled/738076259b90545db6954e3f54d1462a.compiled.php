<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/coupon/tpl/css/coupon_admin.css--><?php $__tmp=array('modules/coupon/tpl/css/coupon_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/coupon/tpl/js/coupon_admin.js--><?php $__tmp=array('modules/coupon/tpl/js/coupon_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<h1 class="h1"><?php echo $__Context->lang->coupon ?> <?php echo $__Context->lang->module ?></h1>
<ul class="localNavigation" style="margin-top:1em !important">
    <li<?php if($__Context->act == 'dispCouponAdminSetup'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCouponAdminSetup') ?>"><?php echo $__Context->lang->cmd_coupon_setup ?></a></li>
    <li<?php if($__Context->act == 'dispCouponAdminList'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCouponAdminList') ?>"><?php echo $__Context->lang->cmd_coupon_list ?></a></li>
    <!--<li<?php if($__Context->act == 'dispCouponAdminSkinInfo'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCouponAdminSkinInfo') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li>-->
    <li<?php if($__Context->act == 'dispCouponAdminInsertCoupon'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCouponAdminInsertCoupon') ?>"><?php echo $__Context->lang->cmd_coupon_registration ?></a></li>
	<li<?php if($__Context->act == 'dispCouponAdminSampleCode'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispCouponAdminSampleCode') ?>"><?php echo $__Context->lang->sample_code ?></a></li>
</ul>