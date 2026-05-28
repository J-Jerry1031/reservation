<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/sejin7940_comment/skins/default','common_header.html') ?>
<h1 class="h1"><?php echo $__Context->member_title = $__Context->lang->cmd_my_comment  ?></h1>
<div class="table comment">
	<table class="table">
		<caption>
			<?php echo $__Context->lang->comment_total ?>  : <?php echo number_format($__Context->total_count) ?>
			<!--
			<span class="side">
				<a href="<?php echo getUrl('','module','module','act','dispModuleSelectList','id','target_module','type','single') ?>" onclick="popopen(this.href,'ModuleSelect');return false;"><?php echo $__Context->lang->cmd_find_module ?></a>
				<?php if($__Context->selected_module_srl){ ?><a href="<?php echo getUrl('selected_module_srl','') ?>"><?php echo $__Context->lang->cmd_cancel ?></a><?php } ?>
			</span>
			-->
			<span class="side" style="color:#999">
				<?php echo $__Context->lang->about_voted_member ?>
			</span>
		</caption>
		<col width="50%"><col width="10%"><col width="40%">
		<thead>
			<tr>
				<th scope="col" class="text" style="text-align:center"><?php echo $__Context->lang->comment ?></th>			
				<th scope="col" class="text" style="text-align:center"><?php echo $__Context->lang->cmd_delete ?></th>			
				<th scope="col" class="nowr" style="text-align:center"><?php echo $__Context->lang->date ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $__Context->lang->cmd_vote ?>/<?php echo $__Context->lang->cmd_blame ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->comment_list&&count($__Context->comment_list))foreach($__Context->comment_list as $__Context->no => $__Context->val){ ?>
				<?php  $__Context->comment = cut_str(trim(strip_tags($__Context->val->content)), $__Context->module_config->comment_cut_size, '...');
					$__Context->oDocumentModel = &getModel('document');
					$__Context->document_original = $__Context->oDocumentModel->getDocument($__Context->val->document_srl);
				 ?>
				<tr>
					<td class="nowr" rowspan=2 style="word-break:break-all; word-wrap:break-word; white-space:pre-wrap; "><a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>#comment_<?php echo $__Context->val->comment_srl ?>" target="_blank" style="word-break:break-all; word-wrap:break-word; "><?php if($__Context->val->isSecret()){ ?>[<?php echo $__Context->lang->secret ?>]<?php } ?> <?php if(strlen($__Context->comment)){;
echo $__Context->comment;
}else{ ?><em><?php echo $__Context->lang->no_text_comment ?></em><?php } ?></a></td>
					<?php if($__Context->grant->manager || abs($__Context->val->member_srl)==$__Context->logged_info->member_srl){ ?>
					<td class="nowr" rowspan=2>
						<a onclick="if(confirm('정말 삭제하시겠습니까?')) { doCallModuleAction('sejin7940_comment','procSejin7940_commentDeleteComment',<?php echo $__Context->val->comment_srl ?>) } " style="padding-left:10px; color:#c32222; cursor:pointer">[<?php echo $__Context->lang->cmd_delete ?>]</a>
					</td>
					<?php }else{ ?>
					<td>&nbsp;</td>
					<?php } ?>
					<td class="nowr" colspan=2><a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>" target="_blank"><?php echo $__Context->lang->document ?> : <?php echo $__Context->document_original->getTitle($__Context->module_config->title_cut_size) ?></a></td></tr>
				<tr>
					<td class="nowr"><?php echo $__Context->lang->comment ?> : <?php echo (zdate($__Context->val->regdate,"Y-m-d")) ?> <span style="color:#999; font-size:12px;"><?php echo (zdate($__Context->val->regdate,"H:i:s")) ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php if($__Context->module_config->display_voted_member=='Y'){ ?><a onclick="jQuery('#voted_member_<?php echo $__Context->val->comment_srl ?>').slideToggle('fast');" <?php if($__Context->val->get('voted_count')){ ?>style="cursor:pointer;"<?php } ?>><?php echo $__Context->val->get('voted_count')?$__Context->val->get('voted_count'):0 ?></a><?php }else{;
echo $__Context->val->get('voted_count')?$__Context->val->get('voted_count'):0;
} ?> / <?php if($__Context->module_config->display_blamed_member=='Y'){ ?><a onclick="jQuery('#blamed_member_<?php echo $__Context->val->comment_srl ?>').slideToggle('fast');" <?php if($__Context->val->get('blamed_count')){ ?>style="cursor:pointer;"<?php } ?>><?php echo $__Context->val->get('blamed_count')?$__Context->val->get('blamed_count'):0 ?></a>)<?php }else{;
echo $__Context->val->get('blamed_count')?$__Context->val->get('blamed_count'):0 ?></a>)<?php } ?></td>
				</tr>
				<?php if($__Context->module_config->display_voted_member=='Y'){ ?>
					<?php 
						$__Context->args_voted_member->comment_srl = $__Context->val->comment_srl;
						$__Context->args_voted_member->more_point=0;
						$__Context->output_voted_member = executeQueryArray('comment.getVotedMemberList',$__Context->args_voted_member);
						$__Context->voted_member_count=0;
					 ?>
					<?php if($__Context->output_voted_member->data){ ?>
					<tr id="voted_member_<?php echo $__Context->val->comment_srl ?>" style="display:none"><td colspan=3 style="border:0px; padding:0px;">
						<table style="border:0px;" ><tr><td style="vertical-align:top; background:#eee;"><?php echo $__Context->lang->voted_member ?> : </td>
						<td style="width:100%; text-align:left;">
						<?php if($__Context->output_voted_member->data&&count($__Context->output_voted_member->data))foreach($__Context->output_voted_member->data as $__Context->key_voted_member=>$__Context->val_voted_member){ ?>
							<?php $__Context->voted_member_count++ ?>
							<a href="#popup_menu_area" class="member_<?php echo $__Context->val_voted_member->member_srl ?>" onclick="return false"><?php echo $__Context->val_voted_member->nick_name ?></a>
							<?php if($__Context->voted_member_count>1){ ?> , <?php } ?>
						<?php } ?>
						</td></tr>
						</table>
					</td></tr>
					<?php } ?>
				<?php } ?>
				<?php if($__Context->module_config->display_blamed_member=='Y'){ ?>
					<?php 
						$__Context->args_blamed_member->document_srl = $__Context->val->comment_srl;
						$__Context->args_blamed_member->below_point=0;
						$__Context->output_blamed_member = executeQueryArray('comment.getVotedMemberList',$__Context->args_blamed_member);
						$__Context->blamed_member_count=0;
					 ?>
					<?php if($__Context->output_blamed_member->data){ ?>
					<tr id="blamed_member_<?php echo $__Context->val->comment_srl ?>" style="display:none" ><td colspan=3 style="border:0px; padding:0px;">
						<table style="border:0px;"><tr><td style="vertical-align:top; background:#eee;"><?php echo $__Context->lang->blamed_member ?> : </td>
						<td style="width:100%; text-align:left;">
						<?php if($__Context->output_blamed_member->data&&count($__Context->output_blamed_member->data))foreach($__Context->output_blamed_member->data as $__Context->key_blamed_member=>$__Context->val_blamed_member){ ?>
							<?php $__Context->blamed_member_count++ ?>
							<a href="#popup_menu_area" class="member_<?php echo $__Context->val->comment_srl->member_srl ?>" onclick="return false"><?php echo $__Context->val_blamed_member->nick_name ?></a>
							<?php if($__Context->blamed_member_count>1){ ?> , <?php } ?>
						<?php } ?>
						</td></tr>
						</table>
					</td></tr>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php if(count($__Context->comment_list)){ ?>
<div class="pagination pagination-centered">
	<ul>
		<li><a href="<?php echo getUrl('page','','module_srl','') ?>" class="direction">&laquo; <?php echo $__Context->lang->first_page ?></a></li> 
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<li<?php if($__Context->page == $__Context->page_no){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a></li>
		<?php } ?>
		<li><a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="direction"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
	</ul>
</div>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/sejin7940_comment/skins/default','common_footer.html') ?>
