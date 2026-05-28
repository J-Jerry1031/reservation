<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->cmd_trash ?> <?php echo $__Context->lang->trash_description ?></h1>
</div>
<h2><?php echo $__Context->lang->delete_info ?></h2>
<table class="x_table x_table-striped x_table-hover">
	<col width="120">
	<tr>
		<th scope="col" class="nowr"><?php echo $__Context->lang->trasher ?></th>
		<td>
		<?php echo htmlspecialchars($__Context->remover_info->nick_name) ?> <a href="#popup_menu_area" class="member_<?php echo $__Context->oTrashVO->getRemoverSrl() ?>" onclick="return false">[<?php echo $__Context->remover_info->user_id ?>]</a>
		</td>
	</tr>
	<tr>
		<th scope="col" class="nowr"><?php echo $__Context->lang->trash_date ?></th>
		<td><?php echo zdate($__Context->oTrashVO->getRegdate(), "Y-m-d H:i:s") ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->trash_description ?></th>
		<td class="text"><?php echo $__Context->oTrashVO->getDescription() ?></td>
	</tr>
</table>
<br>
<h2><?php echo $__Context->lang->origin_info ?></h2>
<table class="x_table x_table-striped x_table-hover">
	<col width="120">
	<tr>
		<th scope="row"><?php echo $__Context->lang->module ?></th>
		<td class="text">
		<?php echo $__Context->module_info->browser_title ?> (<?php echo $__Context->module_info->mid ?>)
		</td>
	</tr>	
	<tr>
		<th scope="row"><?php echo $__Context->lang->title ?></th>
		<td class="text"><?php echo $__Context->oOrigin->title ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->writer ?></th>
		<td class="text"><?php echo htmlspecialchars($__Context->oOrigin->nick_name) ?> <a href="#popup_menu_area" class="member_<?php echo $__Context->oOrigin->member_srl ?>" onclick="return false">[<?php echo $__Context->oOrigin->user_id ?>]</a></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->regdate ?></th>
		<td class="text"><?php echo zdate($__Context->oOrigin->regdate,'Y.m.d H:i:s') ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->ipaddress ?></th>
		<td class="text"><?php echo $__Context->oOrigin->ipaddress ?></td>
	</tr>
	<?php if($__Context->oOriginExtraVars&&count($__Context->oOriginExtraVars))foreach($__Context->oOriginExtraVars as $__Context->key=>$__Context->val){ ?>
	<tr><th><?php echo $__Context->val->name ?></th>	
		<td><?php echo $__Context->val->value ?></td>
	</tr>
	<?php } ?>
	<tr>
		<th scope="row"><?php echo $__Context->lang->content ?></th>
		<td class="text"><?php echo $__Context->oOrigin->content ?></td>
	</tr>
</table>
<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="trash" />
	<input type="hidden" name="act" value="procTrashAdminEmptyTrash" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="is_all" value="false" />
	<input type="hidden" name="origin_module" value="<?php echo $__Context->oTrashVO->getOriginModule() ?>" />
	<input type="hidden" name="cart[]" value="<?php echo $__Context->oTrashVO->getTrashSrl() ?>" />
	<div class="x_pull-left"><button class="x_btn" type="button" onclick="history.go(-1)"><?php echo $__Context->lang->cmd_list ?></button></div>
	<div class="x_pull-right">
		<button type="submit" name="is_all" class="x_btn"  value="false"><?php echo $__Context->lang->cmd_delete ?></button>
		<button type="submit" name="act" class="x_btn x_btn-primary"  value="procTrashAdminRestore"><?php echo $__Context->lang->cmd_restore ?></button>
	</div>
</form>
