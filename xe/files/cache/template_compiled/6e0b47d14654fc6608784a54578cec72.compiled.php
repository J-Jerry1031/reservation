<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/rockgame/skins/default/css/default.css--><?php $__tmp=array('modules/rockgame/skins/default/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/rockgame/skins/default/js/default.js--><?php $__tmp=array('modules/rockgame/skins/default/js/default.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="rockgame_module_view">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/rockgame/skins/default','_header.html') ?>
	
	
	<h2 style="padding:0px; margin:0px;">가위바위보 게임 (과도한 노름은 패가망신 입니다.!)
		<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','admin','act','dispRockgameAdminStart') ?>" target="_blank" style="float:right; font-size:11px">
			<b class="xecenter_btn_black xecenter_effect">+관리자모드</b>
		</a><?php } ?>
	</h2>
	
	<?php if($__Context->is_logged){ ?><div class="xecenter_div_line"></div><?php } ?> 
	
	
	<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php if(!$__Context->is_logged){ ?><div class="message error">
		<p>로그인이 필요한 서비스 입니다</p>
	</div><?php } ?>
		
		
	
	<?php Context::addJsFile("modules/rockgame/ruleset/insert_game.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="insert_form" name="insert_form" action="./" method="post"  onsubmit="return rockgame_submit_check()" onKeyDown="if(event.keyCode==13){return false;}"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insert_game" /> 
		<input type="hidden" name="act" value="procRockgameUserView" /> 
		<input type="hidden" name="game_srl" value="" /> 
		
		
		
		
		<?php if($__Context->is_logged){ ?><div class="rockgame_top"> 
			<?php  $__Context->oPointModel = &getModel('point'); $__Context->point = $__Context->oPointModel->getPoint($__Context->logged_info->member_srl); $__Context->oModuleModel = &getModel('module'); $__Context->config = $__Context->oModuleModel->getModuleConfig('point'); ?>
			<span>보유<?php echo $__Context->config->point_name ?> : <input type="text" class="xecenter_form_box" style="width:50px; background:#eee;" value="<?php echo $__Context->point ?>" disabled="disabled" /> </span>
			<span>참가<?php echo $__Context->config->point_name ?> : <input type="text" class="xecenter_form_box" style="width:35px;" id="game_point" name="game_point" value="" /></span>
			<?php  $__Context->count = $__Context->module_info->maxgame - $__Context->game_count ?>
			<span>잔여횟수 : <input type="text" class="xecenter_form_box" style="width:23px; background:#eee;" value="<?php echo $__Context->count ?>" disabled="disabled" /></span>
			<span>오늘승률 : <input type="text" class="xecenter_form_box" style="width:35px; background:#eee;"<?php if($__Context->game_rate){ ?> value="<?php echo $__Context->game_rate ?>%"<?php } ?> disabled="disabled" /></span>
			<span>오늘결과 : <input type="text" class="xecenter_form_box" style="width:45px; background:#eee;"<?php if($__Context->game_point_sum){ ?> value="<?php echo $__Context->game_point_sum ?>p"<?php } ?> disabled="disabled" /></span>
		</div><?php } ?>
		
		
		
		<div class="rockgame_center">
			
			<div class="left_bar">
				<div class="game_result">
					<div class="com_select">
						<div class="com_name"><p>알파짱</p></div>
						<div class="rps_box"></div>
					</div>	
					<div class="fight"><img src="/xe/modules/rockgame/skins/default/img/versus.png" style="vertical-align:baseline; margin-bottom:35px;"/></div>
					<div class="user_select">
						<div class="user_name"><p><?php echo $__Context->logged_info->nick_name ?></p></div>
						<div class="rps_box"></div>
					</div>	
				</div>
				
				
				<div class="game_select">
					<input type="hidden" name="rsp_slect" value="" /> 
					<div class="rps_box">
						<input class="rps_img" type="image" id="rps_rock" src="/xe/modules/rockgame/skins/default/img/rock.gif" onclick="this.form.rsp_slect.value='rock'"<?php if(!$__Context->is_logged){ ?> disabled="disabled"<?php } ?> /> 
					</div>
					<div class="rps_box">
						<input class="rps_img" type="image" id="rps_scissors" src="/xe/modules/rockgame/skins/default/img/scissors.gif" onclick="this.form.rsp_slect.value='scissors'"<?php if(!$__Context->is_logged){ ?> disabled="disabled"<?php } ?> /> 
					</div>
					<div class="rps_box">
						<input class="rps_img" type="image" id="rps_paper" src="/xe/modules/rockgame/skins/default/img/paper.gif" onclick="this.form.rsp_slect.value='paper'" <?php if(!$__Context->is_logged){ ?> disabled="disabled"<?php } ?> /> 
					</div>
				</div>
			</div>
			
			
			<div class="right_bar">
				<div class="luck_rank">
					<p>오늘의 <?php echo $__Context->config->point_name ?> 왕 Top5</p>
					<table cellpadding='3' cellspacing="0" border='0'>
						<?php  $__Context->rank = 0 ?>
						<?php if($__Context->game_rank_desc&&count($__Context->game_rank_desc))foreach($__Context->game_rank_desc as $__Context->no => $__Context->game_today_desc){ ?>
							<?php if($__Context->game_today_desc->point_sum > 0){ ?><tr> <?php  $__Context->rank++ ?>	
								<td><b><?php echo $__Context->rank ?>위</b></td>
								<td><a class="member_<?php echo $__Context->game_today_desc->member_srl ?>" href="#" onclick="return false"><?php echo $__Context->game_today_desc->nick_name ?></a></td>
								<td style="color:cornflowerblue;"><b>+<?php echo $__Context->game_today_desc->point_sum ?>p</b></td>
							</tr><?php } ?> 
						<?php } ?>
					</table>
				</div>
				
				<div class="bad_rank">
					<p>오늘의 불행 왕 Top5</p>
					<table cellpadding='3' cellspacing="0" border='0'>
						<?php  $__Context->rank = 0 ?>
						<?php if($__Context->game_rank_asc&&count($__Context->game_rank_asc))foreach($__Context->game_rank_asc as $__Context->no => $__Context->game_today_asc){ ?>
							<?php if($__Context->game_today_asc->point_sum < 0){ ?><tr> <?php  $__Context->rank++ ?>	
								<td><b><?php echo $__Context->rank ?>위</b></td>
								<td><a class="member_<?php echo $__Context->game_today_asc->member_srl ?>" href="#" onclick="return false"><?php echo $__Context->game_today_asc->nick_name ?></a></td>
								<td style="color:tomato;"><b><?php echo $__Context->game_today_asc->point_sum ?>p</b></td>
							</tr><?php } ?> 
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
		
		
		<div class="rockgame_bottom">
			<p>참가<?php echo $__Context->config->point_name ?>를 입력한 후 가위 바위 보 중에 내고 싶은것을 선택합니다</p>
			<p>승리할 경우 참가<?php echo $__Context->config->point_name ?> 만큼 획득합니다 // 패배할 경우 참가<?php echo $__Context->config->point_name ?> 만큼 소모합니다</p>
		</div>
		<div class="xecenter_div_line"></div>  
	</form> 
	
	
	
<div style="clear:both;"></div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/rockgame/skins/default','_footer.html') ?>
</div>
<script type="text/javascript">
//폼을 중복전송 방지위해 전송후 가위바위보 버튼을 막음 // 엔터로 전송못하게 함
function rockgame_submit_check(){
		
	if(document.insert_form.game_point.value ==''){
		alert('참가<?php echo $__Context->config->point_name ?>를 입력하세요');
		return false;
	}else{
		document.getElementById('rps_rock').disabled=true;
		document.getElementById('rps_paper').disabled=true;
		document.getElementById('rps_scissors').disabled=true;
		return true;
	}
}
jQuery(function($){
	$('#game_point').focus(); //포인트 입력창에 포커스주기
});
</script>