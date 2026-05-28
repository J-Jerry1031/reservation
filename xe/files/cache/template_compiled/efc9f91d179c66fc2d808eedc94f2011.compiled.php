<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member_expire/tpl','header.html') ?>
<!--#Meta:modules/member_expire/tpl/css/config.css--><?php $__tmp=array('modules/member_expire/tpl/css/config.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member_expire/tpl/js/config.js--><?php $__tmp=array('modules/member_expire/tpl/js/config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_clearfix">
	<div class="x_pull-left">
		지난 <?php echo $__Context->expire_threshold ?> 동안 로그인하지 않은
		<?php if($__Context->search_target){ ?> 회원 중 검색 조건에 해당하는<?php } ?>
		회원은 <?php echo number_format($__Context->paging->total_count) ?>명입니다.<br />
		최근 로그인순으로 표시합니다.
	</div>
	<div class="x_pull-right" style="margin-top:4px">
		<select name="list_count" id="list_count">
			<option value="10"<?php if($__Context->list_count == 10 || !$__Context->list_count){ ?> selected="selected"<?php } ?>>10명씩</option>
			<option value="20"<?php if($__Context->list_count == 20){ ?> selected="selected"<?php } ?>>20명씩</option>
			<option value="30"<?php if($__Context->list_count == 30){ ?> selected="selected"<?php } ?>>30명씩</option>
			<option value="50"<?php if($__Context->list_count == 50){ ?> selected="selected"<?php } ?>>50명씩</option>
			<option value="100"<?php if($__Context->list_count == 100){ ?> selected="selected"<?php } ?>>100명씩</option>
			<option value="200"<?php if($__Context->list_count == 200){ ?> selected="selected"<?php } ?>>200명씩</option>
			<option value="300"<?php if($__Context->list_count == 300){ ?> selected="selected"<?php } ?>>300명씩</option>
		</select>
	</div>
</div>
<table id="member_expire_log" class="x_table x_table-striped x_table-hover">
	<thead>
		<tr>
			<th scope="col" class="nowr">이메일</th>
			<th scope="col" class="nowr">아이디</th>
			<th scope="col" class="nowr">이름</th>
			<th scope="col" class="nowr">닉네임</th>
			<th scope="col" class="nowr">소속 그룹</th>
			<th scope="col" class="nowr">가입일</th>
			<th scope="col" class="nowr">최근 로그인</th>
			<th scope="col" class="nowr">정리</th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->expired_members&&count($__Context->expired_members))foreach($__Context->expired_members as $__Context->member){ ?><tr>
			<td class="nowr">
				<a href="#popup_menu_area" class="member_<?php echo $__Context->member->member_srl ?>" title="Info"><?php echo getEncodeEmailAddress($__Context->member->email_address) ?></a>
			</td>
			<td class="nowr"><?php echo $__Context->member->user_id ?></td>
			<td class="nowr"><?php echo $__Context->member->user_name ?></td>
			<td class="nowr"><?php echo $__Context->member->nick_name ?></td>
			<td class="nowr"><?php echo implode(', ', array_unique($__Context->expired_members_groups[$__Context->member->member_srl])) ?></td>
			<td class="nowr">
				<?php if($__Context->member->regdate){ ?>
					<?php echo zdate($__Context->member->regdate, 'Y-m-d') ?>
				<?php }else{ ?>
					<span class="graytext">가입 기록 없음</span>
				<?php } ?>
			</td>
			<td class="nowr">
				<?php if($__Context->member->last_login){ ?>
					<?php echo zdate($__Context->member->last_login, 'Y-m-d') ?>&nbsp;
					(<?php echo round((time() - ztime($__Context->member->last_login)) / 86400) ?>일 전)
				<?php }else{ ?>
					<span class="graytext">로그인 기록 없음</span>
				<?php } ?>
			</td>
			<td clas="nowr">
				<a href="#<?php echo $__Context->member->member_srl ?>" id="do_expire_<?php echo $__Context->member->member_srl ?>" class="do_expire_member" data-member-srl="<?php echo $__Context->member->member_srl ?>"><?php echo $__Context->mex_config->expire_method === 'delete' ? '삭제' : '별도저장' ?></a>
			</td>
		</tr><?php } ?>
		<?php if(!$__Context->expired_members){ ?><tr>
			<td>해당되는 회원이 없습니다.</td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_clearfix">
	<form class="x_pagination x_pull-left" style="margin-top:8px" action="<?php echo Context::getUrl('') ?>" method="post" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
		<ul>
			<li<?php if($__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
			<?php while($__Context->page_no = $__Context->paging->page_navigation->getNextPage()){ ?>
				<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
			<?php } ?>
			<li<?php if($__Context->page == $__Context->paging->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->paging->page_navigation->last_page) ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</form>
	<form class="x_pull-right x_input-append" style="margin-top:8px" action="<?php echo Context::getUrl('') ?>" method="get" ><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="width: 100px; margin-right: 4px">
			<option value="email_address"<?php if($__Context->search_target == 'email_address'){ ?> selected="selected"<?php } ?>>메일 주소</option>
			<option value="user_id"<?php if($__Context->search_target == 'user_id'){ ?> selected="selected"<?php } ?>>아이디</option>
			<option value="user_name"<?php if($__Context->search_target == 'user_name'){ ?> selected="selected"<?php } ?>>이름</option>
			<option value="nick_name"<?php if($__Context->search_target == 'nick_name'){ ?> selected="selected"<?php } ?>>닉네임</option>
		</select>
		<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_QUOTES, 'UTF-8') ?>" style="width: 160px">
		<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	</form>
</div>
