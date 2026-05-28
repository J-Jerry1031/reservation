<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/quizgame/tpl','header.html') ?>
<?php if(!$__Context->module_info->module_srl){ ?>
<div class="x_alert x_alert-info">모듈을 먼저 등록해주세요</div>
<?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="./" class="x_form-horizontal" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="quizgame" />
	<input type="hidden" name="act" value="procQuizgameAdminSet" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
		
		<div class="x_control-group">
			<label class="x_control-label" for="mid"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="mid" id="mid" value="<?php if($__Context->module_info->mid){;
echo $__Context->module_info->mid;
}else{ ?>quizgame<?php } ?>" />
				<a href="#module_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div>
		
		<div class="x_control-group">
			<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" id="browser_title" value="<?php if($__Context->module_info->browser_title){;
echo $__Context->module_info->browser_title;
}else{ ?>퀴즈게임<?php } ?>" class="lang_code" />
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
		<h1><?php echo $__Context->lang->subtitle_advanced ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="list_count"><?php echo $__Context->lang->list_count ?></label>
			<div class="x_controls">
				<input type="text" name="list_count" id="list_count" value="<?php echo $__Context->module_info->list_count?$__Context->module_info->list_count:5 ?>" style="width:30px" />
				<p class="x_help-inline">한 페이지에 표시될 글 수를 지정할 수 있습니다. (기본 5개)</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="page_count"><?php echo $__Context->lang->page_count ?></label>
			<div class="x_controls">
				<input type="text" name="page_count" id="page_count" value="<?php echo $__Context->module_info->page_count?$__Context->module_info->page_count:10 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_page_count ?></p>
			</div>
		</div>
	</section>
	
	
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>