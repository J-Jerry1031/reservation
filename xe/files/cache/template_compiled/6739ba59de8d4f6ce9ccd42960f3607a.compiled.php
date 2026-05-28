<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointsend/tpl','header.html') ?>
<h2><?php echo $__Context->lang->cmd_pointsend_log_list ?></h2>
<?php if(in_array($__Context->act, $__Context->logAct)){ ?><div class="cnb">
	<ul>
		<li<?php if($__Context->act == 'dispPointsendAdminLogList'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPointsendAdminLogList') ?>">회원 포인트 선물</a></li>
		<li<?php if($__Context->act == 'dispPointsendAdminBatchLogList'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPointsendAdminBatchLogList') ?>">일괄 포인트 선물</a></li>
	</ul>
</div><?php } ?>
<table cellspacing="0" class="x_table">
	<caption><?php echo $__Context->lang->total ?>(<?php echo $__Context->total_count ?>)</caption>
	<thead>
		<tr>
			<th><?php echo $__Context->lang->no ?></th>
			<th><?php echo $__Context->lang->sender ?></th>
			<th><?php echo $__Context->lang->receiver ?></th>
			<th><?php echo $__Context->lang->point ?></th>
			<th><?php echo $__Context->lang->ipaddress ?></th>
			<th><?php echo $__Context->lang->date ?></th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php if(count($__Context->log_list)){ ?>
		<?php  $__Context->oMemberModel = getModel('member') ?>
		<?php if($__Context->log_list&&count($__Context->log_list))foreach($__Context->log_list as $__Context->no => $__Context->val){ ?>
		<?php 
			$__Context->sender = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->sender_srl);
			$__Context->receiver = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->receiver_srl);
		 ?>
		<tr>
			<td><?php echo $__Context->no ?></td>
			<td><div class="member_<?php echo $__Context->sender->member_srl ?>"><?php echo $__Context->sender->nick_name ?></div></td>
			<td><div class="member_<?php echo $__Context->receiver->member_srl ?>"><?php echo $__Context->receiver->nick_name ?></div></td>
			<td><?php echo $__Context->val->point ?></td>
			<td><?php echo $__Context->val->ipaddress ?></td>
			<td><?php echo zdate($__Context->val->regdate) ?></td>
			<td class="center">
				<a href="<?php echo getUrl('act','dispPointsendAdminRevert','log_srl',$__Context->val->log_srl) ?>" title="<?php echo $__Context->lang->cmd_revert_pointgift ?>"><span class="buttonSet buttonDisable"></span></a>&nbsp;&nbsp;<a href="<?php echo getUrl('act','dispPointsendAdminDeleteLog','log_srl',$__Context->val->log_srl) ?>" title="<?php echo $__Context->lang->cmd_delete ?>" class="buttonSet buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
			</td>
		</tr>
		<?php if($__Context->val->comment){ ?><tr>
			<td colspan="7"><?php echo htmlspecialchars($__Context->val->comment) ?></td>
		</tr><?php } ?>
		<?php } ?>
		<?php }else{ ?>
		<tr>
			<td colspan="7"><?php echo $__Context->lang->msg_not_exists_pointgift_log ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<div class="search">
	<form action="./" method="get" class="pagination"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="dispPointsendAdminLogList" />
		<a href="<?php echo getUrl('page','') ?>" class="direction">« <?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong> 
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a> 
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="direction"><?php echo $__Context->lang->last_page ?> »</a>
	</form>
	<form action="./" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="dispPointsendAdminLogList" />
		<select name="search_target">
			<option value=""><?php echo $__Context->lang->search_target ?></option>
			<option value="s_nick_name"<?php if($__Context->search_target == 's_nick_name'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->sender ?> (<?php echo $__Context->lang->nick_name ?>)</option>
			<option value="s_user_id"<?php if($__Context->search_target == 's_user_id'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->sender ?> (<?php echo $__Context->lang->user_id ?>)</option>
			<option value="r_nick_name"<?php if($__Context->search_target == 'r_nick_name'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->receiver ?> (<?php echo $__Context->lang->nick_name ?>)</option>
			<option value="r_user_id"<?php if($__Context->search_target == 'r_user_id'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->receiver ?> (<?php echo $__Context->lang->user_id ?>)</option>
			<option value="point_more"<?php if($__Context->search_target == 'point_more'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->point ?> (이상)</option>
			<option value="point_less"<?php if($__Context->search_target == 'point_less'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->point ?> (이하)</option>
			<option value="regdate_more"<?php if($__Context->search_target == 'regdate_more'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->date ?> (이상)</option>
			<option value="regdate_less"<?php if($__Context->search_target == 'regdate_less'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->date ?> (이하)</option>
			<option value="ipaddress"<?php if($__Context->search_target == 'ipaddress'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->ipaddress ?></option>
		</select> 
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" /> <input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /> <a href="<?php echo getUrl('act', 'dispPointsendAdminLogList', 'search_target', '', 'search_keyword', '') ?>"><?php echo $__Context->lang->cmd_cancle ?></a>
	</form>
</div>