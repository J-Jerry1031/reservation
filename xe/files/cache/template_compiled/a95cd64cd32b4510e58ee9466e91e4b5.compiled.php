<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/skins/default','_header.html') ?>
<!--#Meta:modules/attendance/skins/default/css/gift.css--><?php $__tmp=array('modules/attendance/skins/default/css/gift.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<table class="bd_lst bd_tb_lst bd_tb">
	<thead class="bg_f_f9">
		<tr>
			<th scope="col" class="no" style="width:100px;">상품고유번호</th>
			<th scope="col" class="no" style="width:100px;">닉네임</th>
			<th scope="col" class="title" style="width:500px;">상품명</th>
			<th scope="col" class="no" style="width:100px;">지급여부</th>
			<th scope="col" class="m_no" style="width:50px;">받은날짜</th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->attendance_gift&&count($__Context->attendance_gift))foreach($__Context->attendance_gift as $__Context->no => $__Context->val){ ?>
		<?php 
			$__Context->oMemberModel = getModel('member');
			$__Context->member_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->member_srl);
		 ?>
		<tr>
			<td><?php echo $__Context->val->present_srl ?></td>
			<td><?php echo $__Context->member_info->nick_name ?></td> <?php if(!$__Context->member_info->member_srl){ ?><td>타겟없음</td><?php } ?>
			<td><?php echo $__Context->val->present ?></td>
			<td>
				<?php if($__Context->val->sender==='Y'){ ?><span>지급완료</span><?php };
if($__Context->val->sender!=='Y'){ ?><span>지급중</span><?php } ?>
			</td>
			<td>
				<?php echo zdate($__Context->val->regdate,"Y-m-d") ?>
				</br>
				<?php echo zdate($__Context->val->regdate,"H:i:s") ?>
			</td>
		</tr>
		<?php } ?>
		<?php if(!$__Context->attendance_gift){ ?><tr>
			<td colspan="8"><?php echo $__Context->lang->msg_not_exist_data ?></td>
		</tr><?php } ?>
	</tbody>
</table>
<form action="./" method="get" class="bd_pg clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<a href="<?php echo getUrl('page','','module_srl','') ?>" class="direction">‹ Prev</a>
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
	<?php if($__Context->page==$__Context->page_no){ ?><strong class="this"><?php echo $__Context->page_no ?></strong><?php } ?> 
	<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php } ?>
	<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="direction">Next ›</a>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/skins/default','_footer.html') ?>
