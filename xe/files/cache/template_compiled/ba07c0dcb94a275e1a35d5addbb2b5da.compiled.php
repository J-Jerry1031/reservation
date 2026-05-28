<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/sejin7940_comment/tpl','common_header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="./" method="get" class="x_form-horizontal" ><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="procSejin7940_commentAdminConfig">
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="comment_cut_size">댓글 글자수 제한</label>
			<div class="x_controls">
				<input type="text" id="comment_cut_size" name="comment_cut_size" value="<?php echo $__Context->config->comment_cut_size ?>" />
				<a href="#comment_cut_size_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="comment_cut_size_help" class="x_help-block" hidden>공백시 글자수 제한 없음</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="title_cut_size">제목 글자수 제한</label>
			<div class="x_controls">
				<input type="text" id="title_cut_size" name="title_cut_size" value="<?php echo $__Context->config->title_cut_size ?>" />
				<a href="#title_cut_size_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="title_cut_size_help" class="x_help-block" hidden>공백시 글자수 제한 없음</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="display_voted_member">댓글 추천인 목록 출력여부</label>
			<div class="x_controls">
				<input type="radio" name="display_voted_member" value="N" <?php if($__Context->config->display_voted_member!='Y'){ ?>checked<?php } ?>/>출력 안 함
				<input type="radio" name="display_voted_member" value="Y" <?php if($__Context->config->display_voted_member=='Y'){ ?>checked<?php } ?>>출력
				<a href="#display_voted_member_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="display_voted_member_help" class="x_help-block" hidden>작성 댓글 보기에서, 댓글의 추천수를 클릭하면 댓글 추천인 목록이 나타남</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="display_blamed_member">댓글 추천인 목록 출력여부</label>
			<div class="x_controls">
				<input type="radio" name="display_blamed_member" value="N" <?php if($__Context->config->display_blamed_member!='Y'){ ?>checked<?php } ?>/>출력 안 함
				<input type="radio" name="display_blamed_member" value="Y" <?php if($__Context->config->display_blamed_member=='Y'){ ?>checked<?php } ?>>출력
				<a href="#display_blamed_member_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="display_blamed_member_help" class="x_help-block" hidden>작성 댓글 보기에서, 댓글의 추천수를 클릭하면 댓글 추천인 목록이 나타남</p>
			</div>
		</div>
		<?php if($__Context->use=='Y'){ ?>
		<div class="x_control-group">
			<label class="x_control-label" for="annoymous_use">익명댓글 출력여부</label>
			<div class="x_controls">
				 <input type="radio" name="annoymous_use" value="N" <?php if($__Context->config->annoymous_use!='Y'){ ?>checked<?php } ?>/>출력 안 함
				<input type="radio" name="annoymous_use" value="Y" <?php if($__Context->config->annoymous_use=='Y'){ ?>checked<?php } ?>>출력
			</div>
		</div>
		<?php } ?>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->config->layout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->mobile_settings ?></h1>
		<!--
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_mobile"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_mobile_view ?></label>
			</div>
		</div>
		-->
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->config->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mobile_layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#mobile_skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-left">
			<a href="<?php echo getUrl('act', 'dispBoardAdminContent') ?>" type="button" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
		</div>
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>