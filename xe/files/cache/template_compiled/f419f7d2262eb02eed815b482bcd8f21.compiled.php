<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xe.min.js", true, '', -100000)  ?>
<!--#Meta:modules/communication/m.skins/default/css/mcommunication.css--><?php $__tmp=array('modules/communication/m.skins/default/css/mcommunication.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/communication/m.skins/default/js/communication.js--><?php $__tmp=array('modules/communication/m.skins/default/js/communication.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="hx h2">
	<h2><?php echo $__Context->message->title ?></h2><span class="ex"><?php echo $__Context->message->nick_name ?> | <?php echo zdate($__Context->message->regdate, "Y.m.d H:i") ?></span>
</div>
<div class="co">
	<div class="xe_content"><?php echo $__Context->message->content ?></div>
</div>
<div class="bna">
	<span class="fl"><a href="<?php echo getUrl('message_srl', '') ?>" class="bn white"><?php echo $__Context->lang->cmd_list ?></a></span>
	<span class="fr"><a href="#" onClick="doDeleteMessage('<?php echo $__Context->message->message_srl ?>');" class="bn white"><?php echo $__Context->lang->cmd_delete ?></a></span>
	<?php if($__Context->message->sender_srl != $__Context->logged_info->member_srl){ ?><span class="fr"><a href="<?php echo getUrl('act','dispCommunicationSendMessage','receiver_srl',$__Context->message->sender_srl,'message_srl',$__Context->message->message_srl) ?>" class="bn white"><?php echo $__Context->lang->cmd_reply_message ?></a></span><?php } ?>
</div>
<script>
	var confirm_delete_msg = "<?php echo $__Context->lang->confirm_delete ?>";
</script>
