<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/loginlog/tpl','header.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/loginlog/tpl','_include.list_setting.html') ?>
<!--#Meta:modules/loginlog/tpl/js/checkHTML5.js--><?php $__tmp=array('modules/loginlog/tpl/js/checkHTML5.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<script>
var phpVersion = '<?php echo phpversion() ?>';
var phpWarning = '<?php echo sprintf($__Context->lang->php_version_warning, phpversion()) ?>';
</script>
<div class="exportToExcel">
	<?php Context::addJsFile("modules/loginlog/ruleset/exportToExcel.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" target="exportFrame" onsubmit="return checkPHPVersion();"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="exportToExcel" />
		<fieldset>
			<legend><?php echo $__Context->lang->cmd_export_to_xls ?></legend>
			<p><?php echo $__Context->lang->desc_exportToXls_forList ?></p>
			<input type="hidden" name="module" value="loginlog" />
			<input type="hidden" name="act" value="procLoginlogAdminExport" />
			<input type="hidden" name="type" value="excel" />
			<input type="hidden" name="startDate" value="<?php echo htmlspecialchars(Context::get('daterange_start')) ?>" />
			<input type="hidden" name="endDate" value="<?php echo htmlspecialchars(Context::get('daterange_end')) ?>" />
			<input type="submit" value="<?php echo $__Context->lang->cmd_export_to_xls ?>" class="x_btn x_btn-success" />
		</fieldset>
	</form>
	<iframe name="exportFrame" src="about:blank" style="position:absolute; left:-200px; top:-200px; width:1px; height:1px;"></iframe>
</div>
<div class="exportToHTML" style="display:none;">
	<?php Context::addJsFile("modules/loginlog/ruleset/exportToHTML.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" target="exportFrame" onsubmit="return checkPHPVersion();"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="exportToHTML" />
		<fieldset>
			<legend><?php echo $__Context->lang->cmd_export_to_html ?></legend>
			<p><?php echo $__Context->lang->desc_exportToHTML_forList ?></p>
			<input type="hidden" name="module" value="loginlog" />
			<input type="hidden" name="act" value="procLoginlogAdminExport" />
			<input type="hidden" name="type" value="html" />
			<input type="hidden" name="callback" value="completeGenerateHTMLFile" />
			<input type="submit" value="<?php echo $__Context->lang->cmd_generate_html_file ?>" class="x_btn x_btn-success" />
		</fieldset>
	</form>
</div>
<div style="x_clearfix"></div>
<?php if(version_compare(phpversion(), '5.2.0', '<')){ ?><div class="message info">
	<p><?php echo sprintf($__Context->lang->php_version_warning, phpversion()) ?></p>
</div><?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="./" method="get" class="x_form-horizontal rangeSearch"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>">
	<input type="hidden" name="module" value="admin">
	<input type="hidden" name="act" value="dispLoginlogAdminList">
	<div class="x_control-group">
		<div class="x_control-label"><?php echo $__Context->lang->daterange_search ?></div>
		<div class="x_controls">
			<input type="date" name="daterange_start" value="<?php echo htmlspecialchars($__Context->daterange_start) ?>" title="시작일: YYYY-MM-DD"> ~ 
			<input type="date" name="daterange_end" value="<?php echo htmlspecialchars($__Context->daterange_end) ?>" title="종료일: YYYY-MM-DD"> 
			<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" class="x_btn">
			<p class="x_help-block">
			YYYY-MM-DD(연-월-일) 형식으로 입력해 주세요.<br>
			예) 2010-12-30, 2011-01-13
			</p>
		</div>
	</div>
</form>
<?php Context::addJsFile("modules/loginlog/ruleset/deleteLogs.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteLogs" />
	<input type="hidden" name="module" value="loginlog">
	<input type="hidden" name="act" value="procLoginlogAdminDeleteChecked">
	<table width="100%" border="0" cellspacing="0" id="loginlogList" class="x_table x_table-striped x_table-hover">
		<caption>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLoginlogAdminList') ?>"<?php if(!$__Context->isSucceed){ ?> class="active"<?php } ?>><?php echo $__Context->lang->total;
if(!$__Context->isSucceed){ ?><span>(<?php echo number_format($__Context->total_count) ?>)</span><?php } ?></a> 
		<i class="vr">|</i> 
		<a href="<?php echo getUrl('isSucceed', 'Y') ?>"<?php if($__Context->isSucceed == 'Y'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->is_succeed;
if($__Context->isSucceed == 'Y'){ ?><span>(<?php echo number_format($__Context->total_count) ?>)</span><?php } ?></a> 
		<i class="vr">|</i> 
		<a href="<?php echo getUrl('isSucceed', 'N') ?>"<?php if($__Context->isSucceed == 'N'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->is_failed;
if($__Context->isSucceed == 'N'){ ?><span>(<?php echo number_format($__Context->total_count) ?>)</span><?php } ?></a>
		<div class="x_pull-right">
			
			<input type="submit" value="<?php echo $__Context->lang->cmd_delete_checked ?>" class="x_btn">
		</div>
		</caption>
		<thead>
		<tr>
			<th class="center" scope="col"><?php echo $__Context->lang->no ?></th>
			<th class="center" scope="col">
			<?php echo $__Context->lang->category ?>
			</th>
			<?php if($__Context->listSettingUserName){ ?><th scope="col"><?php echo $__Context->lang->user_name ?></th><?php } ?>
			<?php if($__Context->listSettingNickName || $__Context->listSettingUserId){ ?><th scope="col">
				<?php if($__Context->listSettingNickName && $__Context->listSettingUserId){ ?>
				<?php echo $__Context->lang->nick_name ?> (<?php echo $__Context->lang->user_id ?>)
				<?php } ?>
				<?php if($__Context->listSettingNickName && !$__Context->listSettingUserId){ ?>
				<?php echo $__Context->lang->nick_name ?>
				<?php } ?>
				<?php if(!$__Context->listSettingNickName && $__Context->listSettingUserId){ ?>
				<?php echo $__Context->lang->user_id ?>
				<?php } ?>
			</th><?php } ?>
			<?php if($__Context->listSettingEmail){ ?><th scope="col"><?php echo $__Context->lang->email_address ?></th><?php } ?>
			<th scope="col">OS</th>
			<th scope="col">브라우저</th>
			<?php if($__Context->listSettingIP){ ?><th scope="col"><?php echo $__Context->lang->ipaddress ?></th><?php } ?>
			<?php if($__Context->listSettingDate){ ?><th scope="col"><?php echo $__Context->lang->date ?></th><?php } ?>
			<th scope="col"><input type="checkbox" data-name="cart[]" title="Check All" /></th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<th class="center" scope="col"><?php echo $__Context->lang->no ?></th>
			<th class="center" scope="col"><?php echo $__Context->lang->category ?></th>
			<?php if($__Context->listSettingUserName){ ?><th scope="col"><?php echo $__Context->lang->user_name ?></th><?php } ?>
			<?php if($__Context->listSettingNickName || $__Context->listSettingUserId){ ?><th scope="col">
				<?php if($__Context->listSettingNickName && $__Context->listSettingUserId){ ?>
				<?php echo $__Context->lang->nick_name ?> (<?php echo $__Context->lang->user_id ?>)
				<?php } ?>
				<?php if($__Context->listSettingNickName && !$__Context->listSettingUserId){ ?>
				<?php echo $__Context->lang->nick_name ?>
				<?php } ?>
				<?php if(!$__Context->listSettingNickName && $__Context->listSettingUserId){ ?>
				<?php echo $__Context->lang->user_id ?>
				<?php } ?>
			</th><?php } ?>
			<?php if($__Context->listSettingEmail){ ?><th scope="col"><?php echo $__Context->lang->email_address ?></th><?php } ?>
			<th scope="col">OS</th>
			<th scope="col">브라우저</th>
			<?php if($__Context->listSettingIP){ ?><th scope="col"><?php echo $__Context->lang->ipaddress ?></th><?php } ?>
			<?php if($__Context->listSettingDate){ ?><th scope="col"><?php echo $__Context->lang->date ?></th><?php } ?>
			<th scope="col"><input type="checkbox" data-name="cart[]" title="Check All" /></th>
		</tr>
		</tfoot>
		<tbody>
			<?php if(!$__Context->total_count){ ?><tr>
				<td colspan="<?php echo $__Context->column ?>">로그인 기록이 없습니다.</td>
			</tr><?php } ?>
			<?php if($__Context->log_list&&count($__Context->log_list))foreach($__Context->log_list as $__Context->no=>$__Context->log){ ?><tr>
				<td class="number center"><?php echo $__Context->no ?></td>
				<td class="center">
					<?php if($__Context->log->is_succeed == 'Y'){ ?><strong class="succeed">[<?php echo $__Context->lang->is_succeed ?>]</strong><?php } ?>
					<?php if($__Context->log->is_succeed == 'N'){ ?><strong class="failed">[<?php echo $__Context->lang->is_failed ?>]</strong><?php } ?>
				</td>
				<?php if($__Context->listSettingUserName){ ?><td>
					<a href="<?php echo getUrl('search_target', 'member_srl', 'search_keyword', $__Context->log->member_srl) ?>"><?php echo $__Context->log->user_name ?></a>
				</td><?php } ?>
				<?php if($__Context->listSettingNickName || $__Context->listSettingUserId){ ?><td>
					<?php if($__Context->listSettingNickName && $__Context->listSettingUserId){ ?>
						<a href="<?php echo getUrl('search_target', 'member_srl', 'search_keyword', $__Context->log->member_srl) ?>"><span class="member_<?php echo $__Context->log->member_srl ?>"><?php echo $__Context->log->nick_name ?></span></a> 
						<a href="<?php echo getUrl('search_target', 'member_srl', 'search_keyword', $__Context->log->member_srl) ?>">(<?php echo $__Context->log->user_id ?>)</a>
					<?php } ?>
					<?php if($__Context->listSettingNickName && !$__Context->listSettingUserId){ ?>
						<span class="member_<?php echo $__Context->log->member_srl ?>"><?php echo $__Context->log->nick_name ?></span> <a href="<?php echo getUrl('search_target', 'member_srl', 'search_keyword', $__Context->log->member_srl) ?>">[검색]</a>
					<?php } ?>
					<?php if(!$__Context->listSettingNickName && $__Context->listSettingUserId){ ?>
						<a href="<?php echo getUrl('search_target', 'member_srl', 'search_keyword', $__Context->log->member_srl) ?>"><?php echo $__Context->log->user_id ?></a>
					<?php } ?>
				</td><?php } ?>
				<?php if($__Context->listSettingEmail){ ?><td>
					<a href="<?php echo getUrl('search_target', 'member_srl', 'search_keyword', $__Context->log->member_srl) ?>"><?php echo $__Context->log->email_address ?></a>
				</td><?php } ?>
				<td scope="col">
					<?php if($__Context->log->platform){ ?>
						<?php echo $__Context->log->platform ?>
					<?php } ?>
				</td>
				<td scope="col">
					<?php if($__Context->log->browser){ ?>
						<?php echo $__Context->log->browser ?>
					<?php } ?>
				</td>
				<?php if($__Context->listSettingIP){ ?><td><a href="<?php echo getUrl('search_target', 'ipaddress', 'search_keyword', $__Context->log->ipaddress) ?>"><?php echo $__Context->log->ipaddress ?></a></td><?php } ?>
				<?php if($__Context->listSettingDate){ ?><td class="date"><?php echo zdate($__Context->log->regdate, 'Y-m-d H:i:s') ?></td><?php } ?>
				<td><?php if(!$__Context->log->log_srl){ ?><span>-</span><?php };
if($__Context->log->log_srl){ ?><input type="checkbox" name="cart[]" value="<?php echo $__Context->log->log_srl ?>" /><?php } ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_pull-right">
		
		<input type="submit" value="<?php echo $__Context->lang->cmd_delete_checked ?>" class="x_btn">
	</div>
</form>
<div class="search">
	<form class="x_pagination x_pagination-centered"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="loginlog" />
		<input type="hidden" name="act" value="dispLoginlogAdminList" />
		<ul>
			<li<?php if($__Context->page == $__Context->page_navigation->first_page){ ?> class="x_disabled"<?php } ?>>
				<a href="<?php echo getUrl('page', '') ?>">« <?php echo $__Context->lang->first_page ?></a>
			</li>
			<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?><li<?php if($__Context->page == $__Context->page_no){ ?> class="x_active"<?php } ?>>
				<a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a>
			</li><?php } ?>
			<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>>
				<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>"><?php echo $__Context->lang->last_page ?> »</a>
			</li>
		</ul>
	</form>
	<form action="" method="get" class="search center x_input-append x_clearfix"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="dispLoginlogAdminList" />
		<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
			<option value="user_id"<?php if($__Context->search_target == 'user_id'){ ?> selected<?php } ?>><?php echo $__Context->lang->user_id ?></option>
			<option value="user_name"<?php if($__Context->search_target == 'user_name'){ ?> selected<?php } ?>><?php echo $__Context->lang->user_name ?></option>
			<option value="nick_name"<?php if($__Context->search_target == 'nick_name'){ ?> selected<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
			<option value="ipaddress"<?php if($__Context->search_target == 'ipaddress'){ ?> selected<?php } ?>><?php echo $__Context->lang->ipaddress ?></option>
			<option value="member_srl"<?php if($__Context->search_target == 'member_srl'){ ?> selected<?php } ?>><?php echo $__Context->lang->member_no ?></option>
			<option value="platform"<?php if($__Context->search_target == 'platform'){ ?> selected<?php } ?>>OS</option>
			<option value="browser"<?php if($__Context->search_target == 'browser'){ ?> selected<?php } ?>>브라우저</option>
		</select>
		<input type="text" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" >
		<button type="submit" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_search ?></button>
		<a href="<?php echo getUrl('search_target', '', 'search_keyword', '') ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancle ?></a>
	</form>
</div>
<script>
(function($){
	$(function(){
		if(!window.supportedHTML5.input.date)
		{
			var option = {
				changeMonth: true,
				changeYear: true,
				gotoCurrent: false,
				dateFormat:'yy-mm-dd',
				yearRange:'-100:+10',
				mandatory:true
			};
			$.extend(option,$.datepicker.regional['<?php echo Context::getLangType() ?>']);
			$('input[name=daterange_start], input[name=daterange_end]').datepicker(option);
		}
	});
})(jQuery);
</script>