<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/skins/sketchbook5_member_skin/js/member.js--><?php $__tmp=array('modules/member/skins/sketchbook5_member_skin/js/member.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/skins/sketchbook5_member_skin/js/login.js--><?php $__tmp=array('modules/member/skins/sketchbook5_member_skin/js/login.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/skins/sketchbook5_member_skin/css/member.css--><?php $__tmp=array('modules/member/skins/sketchbook5_member_skin/css/member.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->member_config->colorset=='black'){ ?><!--#Meta:modules/member/skins/sketchbook5_member_skin/css/black.css--><?php $__tmp=array('modules/member/skins/sketchbook5_member_skin/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<section class="xm">
	<?php if($__Context->is_logged && $__Context->logged_info->menu_list && (!$__Context->member_srl || $__Context->member_srl == $__Context->logged_info->member_srl)){ ?><ul class="nav nav-tabs">
		<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->key==$__Context->act||($__Context->key==dispMemberInfo&&($__Context->act==dispMemberModifyInfo||$__Context->act==dispMemberModifyPassword||$__Context->act==dispMemberLeave))){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'act',$__Context->key, 'mid', $__Context->mid, 'vid', $__Context->vid) ?>"><?php echo Context::getLang($__Context->val) ?></a>
		</li><?php } ?>
	</ul><?php } ?>
