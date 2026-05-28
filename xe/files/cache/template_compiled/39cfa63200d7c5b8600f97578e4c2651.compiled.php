<?php if(!defined("__XE__"))exit;?><div>
	<h2 class="lb-h"><?php echo $__Context->lang->cmd_list ?></h2>
	<div class="lb-bar"><div class="lb-bar-w"></div><div class="lb-bar-e"></div><div class="lb-bar-c"></div></div>
	<table id="lb_index" cellspacing="0" cellpadding="0">
		<caption class="lb-h">Page <?php echo $__Context->page ?> / <?php echo $__Context->page_navigation->last_page ?></caption>
		<thead>
			<tr>
				<?php if($__Context->lb->list->status){ ?><th scope="col" class="lb-in-th lb-status lb-1">
					<span class="lb-h">Status</span>
					<?php  $__Context->lb->list->config_n++;  ?>
				</th><?php } ?>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->val){ ?>
					<?php 	$__Context->lb->list->config_t[] = $__Context->val->type;  ?>
					<?php if($__Context->val->type == 'title' && $__Context->lb->bln == 'comment_count'){ ?><th class="lb-in-th<?php echo $__Context->lb->list->config_n == 0 ? ' lb-1' : '' ?>">
						<?php echo $__Context->lang->comment_count ?>
						<?php  $__Context->lb->list->config_n++;  ?>
					</th><?php } ?>
					<?php if($__Context->val->type != 'summary' && (($__Context->val->type != 'thumbnail' || $__Context->lb->type != 'gallery') || $__Context->search_keyword)){ ?><th scope="col" class="lb-in-th lb-<?php echo $__Context->val->type;
echo $__Context->lb->list->config_n == 0 ? ' lb-1' : '' ?>">
						<?php if($__Context->val->type == 'nick_name'){ ?>
							<?php echo $__Context->lang->writer ?>
						<?php }elseif($__Context->val->type == 'regdate'){ ?>
							<?php echo $__Context->lang->date ?>
						<?php }elseif($__Context->val->type == 'thumbnail'){ ?>
							<span class="lb-h"><?php echo $__Context->lang->thumbnail ?></span>
						<?php }else{ ?>
							<?php echo $__Context->val->name ?>
						<?php } ?>
						<?php  $__Context->lb->list->config_n++;  ?>
					</th><?php } ?>
				<?php } ?>
				<?php if(!in_array('title', $__Context->lb->list->config_t)){ ?>
					<?php 
						$__Context->lb->list->no_title = true; // flag : no title in list config
						$__Context->lb->list->no_thumb = !in_array('thumbnail', $__Context->lb->list->config_t) ? true : false; // flag : no thumbnail in list config
					 ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><th scope="col" class="lb-in-th lb-cart">
					<input type="checkbox" onclick="jQuery('input[name=cart]:checkbox').each(function(){doAddDocumentCart(this); jQuery(this).attr('checked', (jQuery(this).attr('checked')) ? false : true)}); return false;" />
					<?php  $__Context->lb->list->config_n++;  ?>
				</th><?php } ?>
			</tr>
		</thead>
		<?php if(!$__Context->search_keyword){;
if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tbody class="lb-notice<?php echo $__Context->lb->list->first ? ' lb-in-1' : null ?>">
			<?php  $__Context->lb->list->first = false;  ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.board.tbody.html') ?>
		</tbody><?php }} ?>
		<?php 
			$__Context->lb->list->notice = false;
		 ?>
		<?php if($__Context->lb->type != 'gallery' || $__Context->search_keyword || !$__Context->document_list){ ?>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><tbody class="lb-document<?php echo $__Context->lb->list->first ? ' lb-in-1' : null ?>">
				<?php 
					$__Context->lb->list->first = false;
				 ?>
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.board.tbody.html') ?>
			</tbody><?php } ?>
			<?php if(!$__Context->document_list){ ?><tbody class="lb-no_documents<?php echo $__Context->lb->list->first ? ' lb-in-1' : null ?>">
				<?php  $__Context->lb->list->first = false;  ?>
				<tr>
					<td class="lb-in-td" colspan="<?php echo $__Context->lb->list->config_n ?>">
						<?php echo $__Context->lang->no_documents ?>
					</td>
				</tr>
			</tbody><?php } ?>
			<?php if($__Context->last_division){ ?><tbody class="lb-search_next<?php echo $__Context->lb->list->first ? ' lb-in-1' : null ?>">
				<?php  $__Context->lb->list->first = false;  ?>
				<tr>
					<td class="lb-in-td" colspan="<?php echo $__Context->lb->list->config_n ?>">
						<a class="lb-b lb-search lb-i" href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>">
							<?php echo $__Context->lang->cmd_search_next ?>
						</a>
					</td>
				</tr>
			</tbody><?php } ?>
		<?php } ?>
	</table>
</div>