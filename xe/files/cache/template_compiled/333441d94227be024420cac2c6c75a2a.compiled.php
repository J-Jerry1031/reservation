<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_header.html') ?>
<style>
.box{
	margin:10px 0px 10px 0px;
	*zoom:1;
}
.box:after {content:" "; display:block; clear:both;}
	</style>
<div class="feedbackx" >
	<h3>당첨 정보</h3>
	<div style="padding:10px;border:1px solid #dbdbdb;margin-bottom:20px">	
		<ul class="lst_type">
		<li><strong><?php echo $__Context->oWinnerComment->get('title') ?></strong></li>
		<li><span>당첨자</span><?php if($__Context->oWinnerComment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oWinnerComment->member_srl ?>" onclick="return false"><?php echo $__Context->oWinnerComment->get('nick_name') ?> / <?php echo $__Context->oWinnerComment->get('user_name') ?></a><?php } ?></li>		
		<li><span>당첨일</span><?php echo zdate($__Context->oWinnerComment->get('regdate'),'Y-m-d H:i') ?></li>
		<li><span>당첨번호</span><?php echo $__Context->oWinnerComment->get('winner_number') ?></li>
		</ul>
	</div>	
	
	<form action="./" method="post" onsubmit="return procFilter(this, insert_admin_winner_comment)" class="write_commentx"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="box">
		<h3 style="display:inline; line-height:40px; padding:0px;">당첨 관리</h3>
		<div style="float:right">
			<select name="status" id="delivery_status" class="form-control input-small">
				<?php if($__Context->lang->rush_delivery_status_list&&count($__Context->lang->rush_delivery_status_list))foreach($__Context->lang->rush_delivery_status_list as $__Context->key=>$__Context->type_info){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->oWinnerComment->get('status') == $__Context->key){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->rush_delivery_status_list[$__Context->key] ?>
				</option><?php } ?>
			</select>
		</div>
	</div>
	
	<div class="fbwr">		
		<div class="fb_wr fb_wr_default">
			<div class="fb_wr_box">
			<div class="fb_wr_box2">
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="document_srl" value="<?php echo $__Context->oWinnerComment->get('document_srl') ?>" />
						<input type="hidden" name="winner_comment_srl" value="<?php echo $__Context->oWinnerComment->get('winner_comment_srl') ?>" />
				<fieldset>
				<legend>당첨 소원글 등록 폼</legend>
					<div class="fb_usr_area">
						<div class="fb_txt_area">
							<table cellspacing="0" border="1" class="fb_section">
							<caption>당첨 소원글 입력박스</caption>
							<colgroup><col><col width="90">
							</colgroup><thead>
							<tr>
								<th colspan="2" scope="col">당첨 소원글</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<textarea cols="80" rows="20" name="pointrush_admin_memo" onKeyPress="javascript: if (event.keyCode==13) return false;" onchange="checkInputLength(this,'200');" onkeyup="checkInputLength(this,'200');">	<?php if($__Context->oWinnerComment->get('pointrush_admin_memo')){;
echo htmlspecialchars($__Context->oWinnerComment->get('pointrush_admin_memo'));
}else{ ?>당첨을 진심으로 축하드립니다.!<?php } ?></textarea>
								</td>
								<td class="fb_btn_area">
									<input type="submit" value="등록" class="btn_fbw">
								</td>
							</tr>
							<tr>
							<td>
								<div class="fb_dsc_area">
									<p class="fb_dsc">
										<span>최대 200자까지 입력가능 합니다.</span>
									</p>
								</div>
							</td>
							<td align="center">
								<button type="button" class="btn" onclick="history.back()">돌아가기</button>
							</td>
							</tr>
							</tbody>
							</table>									
						</div>
					</div>
				</fieldset>
				</div>
			</div>
		</div>
	</div>
	</form>	
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_footer.html') ?>
