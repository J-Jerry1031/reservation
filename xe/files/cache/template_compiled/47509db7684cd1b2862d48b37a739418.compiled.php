<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointhistory/tpl','header.html') ?>
<?php if(__ZBXE_VERSION__<'1.7'){ ?>
	<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/pointhistory/tpl/filter','delete_history.xml');$__xmlFilter->compile(); ?>
	<form id="deleteForm" action="./" method="post" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="date_srl" id="date_srl" value="" />
	</form>
	
	<form action="./" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="act" value="dispPointhistoryAdminList" />
		<fieldset>
			<select name="htype" title="<?php echo $__Context->lang->htype ?>">
				<option value=""><?php echo $__Context->lang->htype ?></option>
				<option value="A" <?php if($__Context->htype=='A'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->cmd_saving ?></option>
				<option value="M" <?php if($__Context->htype=='M'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
			</select>
			<select name="search_target" title="<?php echo $__Context->lang->search_target ?>">
				<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key => $__Context->val){ ?>
				<option value="<?php echo $__Context->val ?>" <?php if($__Context->search_target==$__Context->val){ ?>selected="selected"<?php } ?>><?php echo Context::getLang($__Context->val) ?></option>
				<?php } ?>
			</select>
			<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />&nbsp;			
			<span class="button blue"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
			<a href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act) ?>" class="button black"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
		</fieldset>
	</form>
	<div class="summary">
		<strong>Total</strong> <em><?php echo number_format($__Context->total_count) ?></em>, Page <strong><?php echo number_format($__Context->page) ?></strong>/<?php echo number_format($__Context->total_page) ?>
	</div>
	<table cellspacing="0" class="rowTable">
		<thead>
			<tr>
				<th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
				<th scope="col"><div><?php echo $__Context->lang->member ?></div></th>				
				<th scope="col"><div><?php echo $__Context->lang->date ?></div></th>			
				<th scope="col"><div><?php echo $__Context->lang->htype ?></div></th>						
				<th scope="col" class="half_wide"><div><?php echo $__Context->lang->content ?></div></th>		
				<th scope="col"><div><?php echo $__Context->lang->point ?></div></th>
				<th scope="col"><div><?php echo $__Context->lang->cmd_delete ?></div></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->pointhistory_list&&count($__Context->pointhistory_list))foreach($__Context->pointhistory_list as $__Context->no => $__Context->val){ ?>
				<tr>
					<td><?php echo $__Context->no ?></td>
					<td><a href="#popup_menu_area" class="member_<?php echo $__Context->val->member_srl ?> author" onclick="return false"><?php echo $__Context->val->nick_name ?></a></td>
					<td><?php echo zdate($__Context->val->regdate,"Y-m-d H:i:s") ?></td>
					<td><?php if($__Context->val->htype=='A'){;
echo $__Context->lang->cmd_saving;
}elseif($__Context->val->htype=='M'){;
echo $__Context->lang->use;
} ?></td>
					<td><?php echo $__Context->val->content ?></td>
					<td><?php if($__Context->val->htype=='A'){ ?>+<?php };
echo number_format($__Context->val->point);
echo $__Context->module_config->point_unit_char ?></td>
					<td><a href="#" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>'))deleteDate('<?php echo $__Context->val->regdate ?>',true);return false;" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<div class="pagination a1">
		<a href="<?php echo getUrl('page','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong> 
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a> 
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
	</div>
<?php }else{ ?>
	<form id="deleteForm" action="./" method="POST" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="pointhistory" />
		<input type="hidden" name="act" value="procPointhistoryAdminDeleteHistory" />
		<input type="hidden" name="date_srl" id="date_srl" value="" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/pointhistory/tpl/1" />
	</form>
	<table class="x_table x_table-striped x_table-hover">
		<caption>
			<strong>Total: <?php echo number_format($__Context->total_count) ?>, Page: <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></strong>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="nowr"><?php echo $__Context->lang->no ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->member ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->date ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->htype ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->content ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->point ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->pointhistory_list&&count($__Context->pointhistory_list))foreach($__Context->pointhistory_list as $__Context->no=>$__Context->val){ ?><tr>
				<td class="nowr"><?php echo $__Context->no ?></td>
				<td class="nowr"><a href="#popup_menu_area" class="member_<?php echo $__Context->val->member_srl ?> author" onclick="return false"><?php echo $__Context->val->nick_name ?></a></td>
				<td class="nowr"><?php echo zdate($__Context->val->regdate,"Y-m-d H:i:s") ?></td>
				<td class="nowr"><?php if($__Context->val->htype=='A'){;
echo $__Context->lang->cmd_saving;
}elseif($__Context->val->htype=='M'){;
echo $__Context->lang->use;
} ?></td>
				<td class="nowr"><?php echo $__Context->val->content ?></td>
				<td class="nowr"><?php if($__Context->val->htype=='A'){ ?>+<?php };
echo number_format($__Context->val->point);
echo $__Context->module_config->point_unit_char ?></td>
				<td class="nowr"><a href="#" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>'))deleteDate('<?php echo $__Context->val->regdate ?>');return false;" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></a></td>
			</tr><?php } ?>
			<?php if(!$__Context->pointhistory_list){ ?><tr>
				<td><?php echo $__Context->lang->msg_not_exist_data ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left"  style="margin-top:0"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<?php 
				$__Context->urlInfo = parse_url(getRequestUriByServerEnviroment());
				parse_str($__Context->urlInfo['query'], $__Context->param);
			 ?>
			<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
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
		</form><?php } ?>
	</div>
	<form action="./" method="get" class="search center x_input-append" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<select name="htype" title="<?php echo $__Context->lang->htype ?>" style="margin-right:4px">
			<option value=""><?php echo $__Context->lang->htype ?></option>
			<option value="A" <?php if($__Context->htype=='A'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->cmd_saving ?></option>
			<option value="M" <?php if($__Context->htype=='M'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
		</select>
		<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
			<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key => $__Context->val){ ?>
			<option value="<?php echo $__Context->val ?>" <?php if($__Context->search_target==$__Context->val){ ?>selected="selected"<?php } ?>><?php echo Context::getLang($__Context->val) ?></option>
			<?php } ?>
		</select>
		<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
		<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
		<a class="x_btn" href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
	</form>
<?php } ?>