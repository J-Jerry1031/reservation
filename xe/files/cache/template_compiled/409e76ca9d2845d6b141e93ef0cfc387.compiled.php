<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/quizgame/skins/default/css/default.css--><?php $__tmp=array('modules/quizgame/skins/default/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/quizgame/skins/default/js/default.js--><?php $__tmp=array('modules/quizgame/skins/default/js/default.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="quizgame_module_view">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/quizgame/skins/default','_header.html') ?>
	
	<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php if(!$__Context->is_logged){ ?><div class="message error">
		<p>로그인이 필요한 서비스 입니다</p>
	</div><?php } ?>
	
	
	 
	<div>
		
		<button class="qz_top1 ss_btn black_bg" id="quiz_insert_btn" onclick="jQuery('div.quiz_layer_wrap').fadeIn()">퀴즈등록</button>
		
		
		<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminSet') ?>" target="_blank">
			<button class="qz_top2 ss_btn black_bg xecenter_effect">+</button>
		</a><?php } ?>
		
		
		<form style="display:inline" onchange="return submit();"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="act" value="dispQuizgameList" />
			<select name="quiz_status" class="qz_top3 ss_box gray_bg" style="border:1px solid #bbb; float:right;" >
				<option value="">퀴즈상태</option>
				<option value="">모든문제</option>
				<option value="x">풀이가능</option>
				<option value="o">풀이완료</option>
			</select>
		</form>
	</div>
	
	
	
	<div class="quiz_layer_wrap">
		<div class="quiz_layer_bg" onclick="jQuery('div.quiz_layer_wrap').fadeOut()"></div>
		<div class="quiz_layer">
			<form onsubmit="return false" name="quiz_matter_form" id="quiz_matter_form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="matter_srl" value="" />
				<table summary="퀴즈게임 등록폼 입니다" class="quizgame_insert_table">
					<colgroup> 
						<col>
						<col> 
						<col>
						<col>
					</colgroup>
					<tbody>
						<tr>
							<?php  $__Context->oPointModel = &getModel('point'); $__Context->user_point = $__Context->oPointModel->getPoint($__Context->logged_info->member_srl);  ?>
							<td colspan="4" class="quiz_explain text_center">현재 보유 포인트는 <b><?php echo $__Context->user_point ?></b> 입니다.<br>정답 및 힌트는 수정이 가능합니다.</td>
						</tr>
						<tr>
							<th>포인트</th>
							<td><input type="number" min="<?php echo $__Context->module_config->minpoint ?>" value="<?php echo $__Context->module_config->minpoint ?>" name="point_set" class="qz_js_point xecenter_form_box xecenter_effect" style="width:120px;" required/></td>
							<th>풀이기간</th>
							<td>
								<select name="time" class="qz_js_time xecenter_form_box xecenter_effect">
									<?php if($__Context->quiz_time&&count($__Context->quiz_time))foreach($__Context->quiz_time as $__Context->val){ ?><option value="<?php echo $__Context->val ?>"><?php echo $__Context->val ?>시간</option><?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<th>정답</th>
							<td><input type="text" name="quiz_answer" id="quiz_answer" class="xecenter_form_box xecenter_effect" placeholder="예) 김치" style="width:120px;" required /></td>
							<th>힌트(자음)</th>
							<td><input type="text" name="quiz_hint1" class="xecenter_form_box xecenter_effect" placeholder="예) ㄱㅊ" style="width:120px;" required /></td>
						</tr>
						<tr>
							<th>힌트(설명글)</th>
							<td colspan="3"><textarea name="quiz_hint2" class="xecenter_form_box xecenter_effect" style="width:360px;" placeholder="예) 우리나라의 대표적인 발효식품은 무엇일까요?" required></textarea></td>
						</tr>
						<tr>
							<td colspan="4" class="text_center">
								<button class="ss_btn black_bg" onclick="insert_matter(this.form)">전송</button>
								<button class="ss_btn red_bg" onclick="jQuery('div.quiz_layer_wrap').fadeOut()">뒤로</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
	
	
	
	<table summary="퀴즈게임 입니다." class="quizgame_table">
		<colgroup> 
			<col width="90px">
			<col> 
			<col width="90px">
		</colgroup>
		<thead>
			<tr>
				<th scope="col">포인트</th>
				<th scope="col">퀴즈정보</th>
				<th scope="col">남은시간</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->quiz_list&&count($__Context->quiz_list))foreach($__Context->quiz_list as $__Context->no => $__Context->quiz_info){ ?>
				<tr>
					<?php   
						$__Context->mintime = intval((strtotime($__Context->quiz_info->enddate) - time()) / 60);
						$__Context->quiz_hours = ($__Context->mintime - ($__Context->mintime % 60)) / 60;
						$__Context->quiz_minute = $__Context->mintime % 60;
					 ?>
					<td class="text_center quiz_point" rowspan="2">
						<?php if($__Context->quiz_info->status_matter == 'o'){ ?>
							<span class="ss_box blue_bg"><?php echo $__Context->quiz_info->point_set ?> P</span>
						<?php }else if($__Context->mintime < 0){ ?>
							<span class="ss_box green_bg"><?php echo $__Context->quiz_info->point_set ?> P</span>
						<?php }else{ ?>
							<span class="ss_box red_bg"><?php echo $__Context->quiz_info->point_set ?> P</span>
						<?php } ?>	
					</td>
					<td class="text_center quiz_content">
						[ <b><?php if($__Context->quiz_info->status_matter == 'o' || $__Context->quiz_info->member_srl == $__Context->logged_info->member_srl){;
echo $__Context->quiz_info->quiz_answer;
}else{;
echo $__Context->quiz_info->quiz_hint1;
} ?></b> ]	
						<?php if($__Context->grant->manager){ ?><span style="color:#777"><?php echo $__Context->quiz_info->quiz_answer ?></span><?php } ?><br>
						<span class="quiz_hint"><img src="/xe/modules/quizgame/skins/default/img/hint5.png" alt="hint_img" /> <?php echo $__Context->quiz_info->quiz_hint2 ?></span><br>
						<span class="quiz_user"><a class="member_<?php echo $__Context->quiz_info->member_srl ?>" href="#" onclick="return false"><b><?php echo $__Context->quiz_info->nick_name ?></b></a> 님이 출제하신 문제입니다.</span>
					</td>
					<td class="text_center quiz_time" rowspan="2">
						<?php if($__Context->quiz_info->status_matter == 'o'){ ?>
							<span class="blue">풀이완료</span>
						<?php }else{ ?>
							<?php if($__Context->mintime < 0){ ?><span class="green">시간종료</span><?php } ?>
							<?php if($__Context->mintime >= 0){ ?><span class="red"><?php echo $__Context->quiz_hours ?>시간 <?php echo $__Context->quiz_minute ?>분</span><?php } ?>
						<?php } ?>	
					</td> 
				</tr>
				<tr> 
					<td class="text_center <?php if($__Context->quiz_info->status_matter == 'o' || $__Context->mintime < 0){ ?>gray_bg<?php } ?>">
						<?php if($__Context->quiz_info->status_matter == 'o'){ ?>
						<span class="quiz_user"><b><?php echo $__Context->quiz_info->answer_nick_name ?></b> 님께서 정답을 맞추셨습니다.</span>
						<?php }else if($__Context->mintime < 0){ ?>
						<span class="quiz_user"><b>시간종료</b>로 인해 더 이상 문제를 풀 수 없습니다.</span>
						<?php }else{ ?>
							<?php if($__Context->logged_info->member_srl != $__Context->quiz_info->member_srl){ ?>
							
							<form onsubmit="return false;"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
								<input type="hidden" name="matter_srl" value="<?php echo $__Context->quiz_info->matter_srl ?>">
								<input type="hidden" name="answer_srl" value="">
								<input type="hidden" name="minus_point" value="<?php echo $__Context->module_config->minus_point ?>">
								<input type="text" class="xecenter_form_box" style="height:10px" name="submit_answer">
								<button class="ss_btn black_bg" onclick="check_answer(this.form)">답안제출</button>
							</form>
							<?php }else{ ?>
							<form onsubmit="return false;"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
								<input type="hidden" name="matter_srl" value="<?php echo $__Context->quiz_info->matter_srl ?>">
								<button class="ss_btn green_bg quiz_update_btn" onclick="update_matter(this.form)">문제수정</button>
							</form>
							<?php } ?>
						<?php } ?>	
					</td>	
				</tr>
			<?php } ?>
		</tbody>
	</table>
	
	
	<div class="xecenter_page_navi">
		<a class="xecenter_effect" href="<?php echo getUrl('page','','module_srl','') ?>" ><?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<a class="pg_select xecenter_effect"><?php echo $__Context->page_no ?></a>
			<?php }else{ ?>
				<a class="xecenter_effect" href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
			<?php } ?>
		<?php } ?><a class="xecenter_effect" href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" ><?php echo $__Context->lang->last_page ?></a>
	</div>
		
		
	<div style="clear:both;"></div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/quizgame/skins/default','_footer.html') ?>
</div>
<script type="text/javascript">
</script>