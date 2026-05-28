<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/rockgame/tpl/css/default.css--><?php $__tmp=array('modules/rockgame/tpl/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/rockgame/tpl/js/admin.js--><?php $__tmp=array('modules/rockgame/tpl/js/admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/rockgame/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<caption>
	<strong>전체:<?php echo number_format($__Context->total_count) ?> 페이지:<?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></strong>
</caption>
 
<!-- 광고현황 -->
<form method="get" action="./" id="game_log" class="table"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table cellpadding='6' cellspacing="0" border='0' style="width:100%">
		<thead bgcolor="efefef">
			<tr> 
				<th scope="col"><input type="checkbox" title="모두체크하기" data-name="cart"/></th>
				<th scope="col">게임번호</th>
				<th scope="col">member_srl</th>
				<th scope="col">닉네임</th>
				<th scope="col">컴퓨터선택</th>
				<th scope="col">사용자선택</th>
				<th scope="col">결과</th>
				<th scope="col">포인트</th>
				<th scope="col">게임날짜</th>
				<th scope="col">IP주소</th>
			</tr>
		</thead>
		<tbody class="text_center">   
		<?php if($__Context->game_log&&count($__Context->game_log))foreach($__Context->game_log as $__Context->no => $__Context->game_log_info){ ?>
			<tr>
				<td><input type="checkbox" name="cart" value="<?php echo $__Context->game_log_info->game_srl ?>" /></td>
				<td><?php echo $__Context->game_log_info->game_srl ?></td>
				<td><?php echo $__Context->game_log_info->member_srl ?></td>
				<td><a class="member_<?php echo $__Context->game_log_info->member_srl ?>" href="#" onclick="return false"><?php echo $__Context->game_log_info->nick_name ?></a></td>
				<td><?php if($__Context->game_log_info->com_select == 'rock'){ ?>주먹<?php }elseif($__Context->game_log_info->com_select == 'paper'){ ?>보<?php }else{ ?>가위<?php } ?></td>
				<td><?php if($__Context->game_log_info->user_select == 'rock'){ ?>주먹<?php }elseif($__Context->game_log_info->user_select == 'paper'){ ?>보<?php }else{ ?>가위<?php } ?></td>
				<td><?php if($__Context->game_log_info->result == 'win'){ ?><a style="color:tomato;">승리</a><?php }elseif($__Context->game_log_info->result == 'lose'){ ?><a style="color:#08c;">패배</a><?php }else{ ?><a style="color:#555;">비김</a><?php } ?></td>
				<td><?php echo $__Context->game_log_info->game_point ?></td> 
				<td><?php echo $__Context->game_log_info->regdate ?></td> 
				<td><?php echo $__Context->game_log_info->ipaddress ?></td> 
			</tr>
		<?php } ?>
		</tbody>
	</table>
	
	<div style="padding:10px 0; margin:10px 0;">
		<span class="btn x_pull-left"><button type="button" onclick="jsDeleteLog(); return false;">선택삭제</button></span>
		<span class="btn x_pull-left" style="margin-left:10px;"><button type="button" onclick="jsDeleteLogAll(); return false;">전체삭제</button></span>
	</div> 
</form>
<div class="xecenter_page_navi" style="margin-top:20px;"> 
	<a class="xecenter_effect" href="<?php echo getUrl('page','','module_srl','') ?>" ><?php echo $__Context->lang->first_page ?></a> 
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php if($__Context->page == $__Context->page_no){ ?>
			<a class="xecenter_page_navi xecenter_effect"><?php if($__Context->page_no == $__Context->page){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?></a>
		<?php }else{ ?>
			<a class="xecenter_page_navi xecenter_effect" href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
		<?php } ?>
	<?php } ?>
	<a class="xecenter_effect" href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" ><?php echo $__Context->lang->last_page ?></a>
</div>
<div class="search">
	<form action="" method="get"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="error_return_url" value="" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" /> 
		<input type="hidden" name="page" value="1" />
		<select name="search_target">
			<option value="">검색대상</option>					
			<option value="member_srl"<?php if($__Context->search_target == 'member_srl'){ ?> selected="selected"<?php } ?>>회원번호(member_srl)</option>
			<option value="ipaddress"<?php if($__Context->search_target == 'ipaddress'){ ?> selected="selected"<?php } ?>>IP주소</option>
			<option value="result"<?php if($__Context->search_target == 'result'){ ?> selected="selected"<?php } ?>>게임결과</option>
		</select>
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
		<div class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></div>
		<div class="btn"><a href="<?php echo getUrl('', 'module',$__Context->module, 'act',$__Context->act, 'search_target','', 'search_keyword','') ?>"><?php echo $__Context->lang->cmd_cancel ?></a></div>
	</form>
</div>
