<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/rockgame/tpl','header.html') ?>
<?php if(!$__Context->module_info->module_srl){ ?>
<div class="x_alert x_alert-info">모듈을 먼저 등록해주세요</div>
<?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php if($__Context->module_info->module_srl){ ?><section class="section">
	<h1>팝업창 띄우기</h1>
	<?php 
		$__Context->sample_code_link = sprintf('<a href="%s%s" onclick="popopen(this.href); return false">%s</a>', getFullUrl(),rockgame, 가위바위보);
		$__Context->sample_code = htmlspecialchars($__Context->sample_code_link);
	 ?>  
	<div>샘플코드 [<?php echo $__Context->sample_code_link ?>]
		<a href="#sample_code_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
		<p id="sample_code_help" class="x_help-block" hidden>'팝업창으로 띄우기 위해선 레이아웃을 미사용으로 변경하고 샘플코드를 이용하면된다<br/>샘플코드중 rockgame부분은 자신이 설정한 모듈이름으로 대체하면 된다.	</p>
	</div>
	<input style="width:700px; margin-top:5px;" value="<?php echo $__Context->sample_code ?>" onclick="this.select()" />
</section><?php } ?>
<form action="./" class="x_form-horizontal" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="rockgame" />
	<input type="hidden" name="act" value="procRockgameAdminStart" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
		
		<div class="x_control-group">
			<label class="x_control-label" for="mid"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="mid" id="mid" value="<?php if($__Context->module_info->mid){;
echo $__Context->module_info->mid;
}else{ ?>rockgame<?php } ?>" />
				<a href="#module_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" id="browser_title" value="<?php echo $__Context->module_info->browser_title ?>" class="lang_code" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="lang_header_text"><?php echo $__Context->lang->header_text ?></label>
			<div class="x_controls">
				<textarea name="header_text" id="header_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_header_text ?>"><?php if(strpos($__Context->module_info->header_text, '$user_lang->') === false){;
echo $__Context->module_info->header_text;
}else{;
echo htmlspecialchars($__Context->module_info->header_text);
} ?></textarea>
				<a href="#header_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="header_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_header_text ?></p>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="lang_footer_text"><?php echo $__Context->lang->footer_text ?></label>
			<div class="x_controls">
				<textarea name="footer_text" id="footer_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_footer_text ?>"><?php if(strpos($__Context->module_info->footer_text, '$user_lang->') === false){;
echo $__Context->module_info->footer_text;
}else{;
echo htmlspecialchars($__Context->module_info->footer_text);
} ?></textarea>
				<a href="#footer_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="footer_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_footer_text ?></p>
			</div>
		</div>
	</section>
	
	<section class="section">
		<h1>게임설정</h1>
		
		<div class="x_control-group">
			<label class="x_control-label" for="maxpoint">포인트 제한</label>
			<div class="x_controls">
				<input type="text" name="maxpoint" id="maxpoint" value="<?php if($__Context->module_info->maxpoint){;
echo $__Context->module_info->maxpoint;
}else{ ?>100<?php } ?>" />
				<a href="#maxpoint_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="maxpoint_help" class="x_help-block" hidden>한번에 걸수 있는 포인트 최대치를 설정해주세요 미입력시 100 입니다.</p>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="maxgame">하루 게임횟수 제한</label>
			<div class="x_controls">
				<input type="text" name="maxgame" id="maxgame" value="<?php if($__Context->module_info->maxgame){;
echo $__Context->module_info->maxgame;
}else{ ?>5<?php } ?>" />
				<a href="#maxgame_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="maxgame_help" class="x_help-block" hidden>하루동안 게임 횟수를 제한합니다 미입력시 5 입니다.</p>
			</div>
		</div>
	</section>
	
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>