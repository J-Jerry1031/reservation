<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/spamfilter/tpl','header.html') ?>
<section>
	<ul class="x_nav x_nav-tabs">
		<li><a href="<?php echo getUrl('','module','admin','act','dispSpamfilterAdminDeniedIPList') ?>"><?php echo $__Context->lang->cmd_denied_ip ?></a></li>
		<li class="x_active"><a href="<?php echo getUrl('','module','admin','act','dispSpamfilterAdminDeniedWordList') ?>"><?php echo $__Context->lang->cmd_denied_word ?></a></li>
		<li><a href="<?php echo getUrl('','module','admin','act','dispSpamfilterAdminConfigBlock') ?>"><?php echo $__Context->lang->cmd_config_block ?></a></li>
	</ul>
	<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="act" value="procSpamfilterAdminDeleteDeniedWord" />
		<input type="hidden" name="module" value="spamfilter" />
		<input type="hidden" name="xe_validator_id" value="modules/spamfilter/tpl/1" />
		<table class="x_table x_table-striped x_table-hover">
			<caption>
				<strong><?php echo $__Context->lang->cmd_denied_word ?></strong>
				<button type="submit" class="x_btn x_pull-right"><?php echo $__Context->lang->cmd_delete ?></button>
			</caption>
			<thead>
				<tr>
					<th scope="col"><?php echo $__Context->lang->word ?></th>
					<th scope="col"><?php echo $__Context->lang->latest_hit ?></th>
					<th scope="col"><?php echo $__Context->lang->hit ?></th>
					<th scope="col"><?php echo $__Context->lang->regdate ?></th>
					<th scope="col"><input type="checkbox" name="word" title="Check All" /></th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->word_list&&count($__Context->word_list))foreach($__Context->word_list as $__Context->word_info){ ?><tr>
					<td><?php echo $__Context->word_info->word ?></td>
					<td><?php if($__Context->word_info->latest_hit){;
echo zdate($__Context->word_info->latest_hit,'Y-m-d H:i');
}else{ ?>-<?php } ?></td>
					<td><?php echo $__Context->word_info->hit ?></td>
					<td><?php echo zdate($__Context->word_info->regdate,'Y-m-d') ?></td>
					<td><input type="checkbox" name="word[]" value="<?php echo $__Context->word_info->word ?>" /></td>
				</tr><?php } ?>
				<?php if(!$__Context->word_list){ ?><tr>
					<td colspan="5" style="text-align:center"><?php echo $__Context->lang->no_data ?></td>
				</tr><?php } ?>
			</tbody>
		</table>
	</form>
	<form action="./" style="margin-right:14px" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="act" value="procSpamfilterAdminInsertDeniedWord" />
		<input type="hidden" name="module" value="spamfilter" />
		<input type="hidden" name="active" value="word" />
		<input type="hidden" name="xe_validator_id" value="modules/spamfilter/tpl/1" />
		<textarea name="word_list" title="<?php echo $__Context->lang->add_denied_word ?>: <?php echo $__Context->lang->about_denied_word ?>" placeholder="<?php echo $__Context->lang->about_denied_word ?>" rows="4" cols="42" style="width:100%"></textarea>
		<span class="x_pull-right" style="margin-right:-14px">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->add_denied_word ?></button>
		</span>
	</form>
</section>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/spamfilter/tpl','footer.html') ?>
