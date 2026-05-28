<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/coupon/skins/default/css/coupon.css--><?php $__tmp=array('modules/coupon/skins/default/css/coupon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/coupon/skins/default/js/coupon.js--><?php $__tmp=array('modules/coupon/skins/default/js/coupon.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="couponBox">
    <?php if($__Context->is_logged && $__Context->logged_info->menu_list && (!$__Context->member_srl || $__Context->member_srl == $__Context->logged_info->member_srl)){ ?><div class="nav">
		<ul>
			<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->key==$__Context->act){ ?> class="active"<?php } ?>>
				<a href="<?php echo getUrl('', 'act',$__Context->key, 'mid', $__Context->mid, 'vid', $__Context->vid) ?>"><span><?php echo Context::getLang($__Context->val) ?></span></a>
			</li><?php } ?>
		</ul>
	</div><?php } ?>