<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/sketchbook5_member_skin','common_header.html') ?>
<div class="border full-width">
	<h1 class="h1"><?php echo $__Context->lang->member_info ?></h1>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/sketchbook5_member_skin/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<div class="table even">
	<table width="100%" border="1" cellspacing="0">
		<?php if($__Context->displayDatas&&count($__Context->displayDatas))foreach($__Context->displayDatas as $__Context->item){ ?>
		<tr>
			<th scope="row" class="title"><?php if($__Context->item->required || $__Context->item->mustRequired){ ?><em>*</em><?php } ?> <?php echo $__Context->item->title ?></th>
			<?php if($__Context->item->value){ ?><td class="text"><?php echo $__Context->item->value ?></td><?php } ?>
			<?php if(!$__Context->item->value){ ?><td class="text">&hellip;</td><?php } ?>
		</tr>
		<?php } ?>
		<tr>
			<th scope="row" class="title"><?php echo $__Context->lang->member_group ?></th>
			<td class="text"><?php echo implode(', ', $__Context->memberInfo['group_list']) ?></td>
		</tr>
		<tr>
			<th scope="row" class="title"><?php echo $__Context->lang->signup_date ?></th>
			<td class="text"><?php echo zdate($__Context->memberInfo[regdate],"Y-m-d") ?></td>
		</tr>
		<?php if($__Context->memberInfo[member_srl] == $__Context->logged_info->member_srl || $__Context->logged_info->is_admin == 'Y' ){ ?>
		<tr>
			<th scope="row" class="title"><?php echo $__Context->lang->last_login ?></th>
			<td class="text"><?php echo zdate($__Context->memberInfo[last_login],"Y-m-d") ?></td>
		</tr>
		<?php } ?>
	</table>
	<div class="group" style="margin-top:10px"><?php if($__Context->memberInfo['member_srl'] == $__Context->logged_info->member_srl){ ?><div class="btnArea btn-group pull-right">
		<?php if($__Context->member_config->identifier == 'email_address'){ ?><a href="<?php echo getUrl('act','dispMemberModifyEmailAddress') ?>" class="btn"><?php echo $__Context->lang->cmd_modify_member_email_address ?></a><?php } ?>
		<a href="<?php echo getUrl('act','dispMemberModifyInfo','member_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_modify_member_info ?></a>
		<a href="<?php echo getUrl('act','dispMemberModifyPassword','member_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_modify_member_password ?></a>
		<a href="<?php echo getUrl('act','dispMemberLeave','member_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_leave ?></a>
	</div><?php } ?></div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/sketchbook5_member_skin','common_footer.html') ?>