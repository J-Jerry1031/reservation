<?php if(!defined("__XE__"))exit;?><script>
xe.lang.msg_empty_search_target = '<?php echo $__Context->lang->msg_empty_search_target ?>';
xe.lang.msg_empty_search_keyword = '<?php echo $__Context->lang->msg_empty_search_keyword ?>';
</script>
<!--#Meta:modules/trackback/tpl/js/trackback_admin.js--><?php $__tmp=array('modules/trackback/tpl/js/trackback_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_page-header">
		<h1><?php echo $__Context->lang->trackback ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_content_trackback" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
	</div>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/trackback/tpl/trackback_list/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<table width="100%" id="trackbackListTable" class="x_table x_table-striped x_table-hover">
		<caption>
			<strong><?php echo $__Context->lang->all ?>(<?php echo number_format($__Context->total_count) ?>)</strong>
			<span class="x_pull-right">
				<a href="#listManager" class="x_btn modalAnchor" onclick="getTrackbackList();"><?php echo $__Context->lang->delete ?></a>
			</span>
		</caption>
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->title ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->site ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->date ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
				<th scope="col"><input type="checkbox" title="Check All" /></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->trackback_list&&count($__Context->trackback_list))foreach($__Context->trackback_list as $__Context->no=>$__Context->val){ ?><tr>
				<td>
					<a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>#trackback_<?php echo $__Context->val->trackback_srl ?>" target="_blank"><?php echo htmlspecialchars($__Context->val->title) ?></a>
					<p><?php echo $__Context->val->excerpt ?></p>
				</td>
				<td class="nowr"><a href="<?php echo $__Context->val->url ?>" target="_blank"><?php echo htmlspecialchars($__Context->val->blog_name) ?></a></td>
				<td class="nowr"><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
				<td class="nowr"><a href="<?php echo getUrl('search_target','ipaddress','search_keyword',$__Context->val->ipaddress) ?>"><?php echo $__Context->val->ipaddress ?></a></td>
				<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->trackback_srl ?>" /></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_pull-right">
		<a href="#listManager" class="x_btn modalAnchor" onclick="getTrackbackList();"><?php echo $__Context->lang->delete ?></a>
	</div>
</form>
<form action="" class="x_pagination"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
	<ul>
		<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
		<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<li>
			<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
			<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
				<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
				<button type="submit" class="x_add-on">Go</button>
			</span><?php } ?>
		</li>
		<?php } ?>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php $__Context->last_page = $__Context->page_no ?>
		<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
		<?php } ?>
		<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<li>
			<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
			<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
				<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
				<button type="submit" class="x_add-on">Go</button>
			</span><?php } ?>
		</li>
		<?php } ?>
		<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->page_navigation->last_page ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
	</ul>
</form>
<form action="" class="search center x_input-append"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key => $__Context->val){ ?>
		<option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
		<?php } ?>
	</select>
	<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
	<button type="submit" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo getUrl('','module',$__Context->module,'act',$__Context->act) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
<?php Context::addJsFile("modules/trackback/ruleset/deleteChecked.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_modal" id="listManager"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteChecked" />
	<input type="hidden" name="module" value="trackback" />
	<input type="hidden" name="act" value="procTrackbackAdminDeleteChecked" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/trackback/tpl/trackback_list/1" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->trackback_manager ?>: <?php echo $__Context->lang->delete ?></h1>
	</div>
	<div class="x_modal-body">
		<table id="trackbackManageListTable" class="x_table x_table-striped x_table-hover">
			<caption>
				<strong><?php echo $__Context->lang->selected_trackback ?> <span id="selectedTrackbackCount"></span></strong>
			</caption>
			<thead>
				<tr>
					<th scope="col" class="title"><span><?php echo $__Context->lang->title ?></span></th>
					<th scope="col"><?php echo $__Context->lang->site ?></th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<div class="x_modal-footer">
		<button type="submit" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_delete ?></button>
	</div>
</form>
<script>
jQuery(function($){
	// Modal anchor activation
	var $docTable = $('#trackbackListTable');
	$docTable.find(':checkbox').change(function(){
		var $modalAnchor = $('a.modalAnchor');
		if($docTable.find('tbody :checked').length == 0){
			$modalAnchor.removeAttr('href').addClass('x_disabled');
		} else {
			$modalAnchor.attr('href','#listManager').removeClass('x_disabled');
		}
	}).change();
	// Modal anchor button action
	$('a.modalAnchor').bind('before-open.mw', function(){
		if($docTable.find('tbody :checked').length == 0){
			$('body').css('overflow','auto');
			alert('<?php echo $__Context->lang->msg_cart_is_null ?>');
			return false;
		}
	});
});
</script>