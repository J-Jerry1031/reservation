<?php if(!defined("__XE__"))exit;?><!-- 설명 -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/sejin7940_nick/tpl','_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('','delete_checked.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/sejin7940_nick/tpl/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php 
$__Context->oModuleModel = &getModel('module');
$__Context->oMemberModel = &getModel('member');
$__Context->oCommentModel = &getModel('comment');
$__Context->oDocumentModel = &getModel('document');
 ?>
<form method="get" action="./" onsubmit="return procFilter(this, delete_checked)" id="message_fo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="delete_type">
	<table id="memberList" class="x_table x_table-striped x_table-hover">
    <caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
    <thead>
        <tr>
            <th scope="col" class="nowr"><div>회원 번호</div></th>
            <th scope="col" class="nowr"><div>예전 닉네임</div></th>
            <th scope="col" class="nowr"><div>새 닉네임</div></th>
            <th scope="col" class="nowr"><div>변경 날짜</div></th>
			<th scope="col" class="nowr"><div>삭제</div></th>
        </tr>
    </thead>
    <tbody>
        <?php if($__Context->nick_list&&count($__Context->nick_list))foreach($__Context->nick_list as $__Context->no => $__Context->val){ ?>
		<tr class="row<?php echo $__Context->cycle_idx ?>">
            <!--<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->reason_srl ?>"/></td>-->
			<td class="nowr"><a href="<?php echo getUrl('member_srl',$__Context->val->member_srl) ?>">[<?php echo $__Context->val->member_srl ?>] <?php echo $__Context->val->user_id ?></a></td>
			<td class="nowr"><?php echo $__Context->val->nick_name_old ?></td>
			<td class="nowr"><a href="#popup_menu_area" class="member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->nick_name_new ?></a></td>
			<td class="nowr"><?php echo zdate($__Context->val->regdate,'Y-m-d H:i:s') ?></td>
			<td class="nowr"><a onclick="if(confirm('정말 삭제하시겠습니까?')) {javascript:doCallModuleAction2('sejin7940_nick','procSejin7940_nickAdminDeleteLog',<?php echo $__Context->val->member_srl ?>,<?php echo zdate($__Context->val->regdate,'YmdHis') ?>)}"  title="<?php echo $__Context->lang->cmd_delete ?>" class="buttonSet buttonDelete" style="cursor:pointer"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
		</tr>
        <?php } ?>
    </tbody>
    </table>
</form>
<div class="x_clearfix center">
	<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination"  style="margin:0"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<?php if($__Context->order_target){ ?><input type="hidden" name="order_target" value="<?php echo $__Context->order_target ?>" /><?php } ?>
		<?php if($__Context->order_type){ ?><input type="hidden" name="order_type" value="<?php echo $__Context->order_type ?>" /><?php } ?>
		<?php if($__Context->category_srl){ ?><input type="hidden" name="category_srl" value="<?php echo $__Context->category_srl ?>" /><?php } ?>
		<?php if($__Context->childrenList){ ?><input type="hidden" name="childrenList" value="<?php echo $__Context->childrenList ?>" /><?php } ?>
		<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
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
	<!--
	<div class="x_pull-right x_btn-group">
		<a href="" data-value="delete" class="x_btn"><?php echo $__Context->lang->delete ?></a>
	</div>
	-->
</div>
<form action="./" method="get" class="search center x_input-append" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<select name="search_target" style="margin-right:4px">
		<option value=""><?php echo $__Context->lang->search_target ?></option>
		<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key => $__Context->val){ ?>
			<?php if($__Context->key=='nick_name' || $__Context->key=='user_id' || $__Context->key=='member_srl'){ ?>
			<option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key || (!$__Context->search_target && $__Context->key=='nick_name')){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
			<?php } ?>
		<?php } ?>
	</select>
	<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" style="width:140px">
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'page', $__Context->page) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
