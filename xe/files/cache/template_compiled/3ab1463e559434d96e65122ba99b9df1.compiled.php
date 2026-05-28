<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/communication/m.skins/default/css/mcommunication.css--><?php $__tmp=array('modules/communication/m.skins/default/css/mcommunication.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="hx h2">
	<h2><?php echo $__Context->lang->message_box[$__Context->message_type] ?><a href="<?php echo getUrl('page','','act','dispCommunicationMessageBoxList','') ?>" class="ca"><?php echo $__Context->lang->cmd_message_box ?></a></h2>
</div>
<ul class="lt">
	<?php if($__Context->message_list&&count($__Context->message_list))foreach($__Context->message_list as $__Context->no=>$__Context->val){ ?><li<?php if($__Context->val->readed == 'Y'){ ?> class="read"<?php };
if($__Context->val->readed != 'Y'){ ?> class="unread"<?php } ?>>
		<a href="<?php echo getUrl('message_srl', $__Context->val->message_srl) ?>"><?php echo $__Context->val->title ?></a>
		<span class="memberInfo"><?php echo $__Context->val->nick_name ?>  (<?php echo zdate($__Context->val->regdate,"Y-m-d") ?>)</span>
	</li><?php } ?>
</ul>
<div class="pn">
	<?php if($__Context->page != 1){ ?><a href="<?php echo getUrl('page',$__Context->page-1,'document_srl','') ?>" class="prev"><?php echo $__Context->lang->cmd_prev ?></a><?php } ?> 
	<strong><?php echo $__Context->page ?> / <?php echo $__Context->page_navigation->last_page ?></strong>
	<?php if($__Context->page != $__Context->page_navigation->last_page){ ?><a href="<?php echo getUrl('page',$__Context->page+1,'document_srl','') ?>" class="next"><?php echo $__Context->lang->cmd_next ?></a><?php } ?>
</div>
