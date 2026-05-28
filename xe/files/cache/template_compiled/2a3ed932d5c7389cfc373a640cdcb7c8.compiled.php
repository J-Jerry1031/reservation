<?php if(!defined("__XE__"))exit;?><script type="text/javascript" src="//uchat.co.kr/uchat.php" charset="UTF-8"></script>
<script type="text/javascript">
u_chat({
	room:"<?php echo $__Context->u->room ?>"
	, width:<?php echo $__Context->u->u_width ?>
	, height:<?php echo $__Context->u->u_height ?>
	<?php if($__Context->u->user_interlock){ ?>
	, md5:"<?php echo $__Context->u->md5 ?>"
	, nick:"<?php echo $__Context->u->nick ?>"
	, mb_id:"<?php echo $__Context->u->mb_id ?>"
	, level:"<?php echo $__Context->u->level ?>"
	, icon:"<?php echo $__Context->u->uicon ?>"
	, nickcon:"<?php echo $__Context->u->nickcon ?>"
	<?php } ?>
	, no_inout:<?php echo $__Context->u->no_inout ?>
	, chat_record:<?php echo $__Context->u->chat_record ?>
	, skin:<?php echo $__Context->u->uskin ?>
	<?php echo $__Context->u->etc_setting ?>
});
</script>