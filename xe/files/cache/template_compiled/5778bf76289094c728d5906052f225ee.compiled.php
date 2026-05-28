<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/skins/sosi_memo/js/board.js--><?php $__tmp=array('modules/board/skins/sosi_memo/js/board.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->module_info->infi_page == 'infinityEdge'){ ?>
<script type="text/javascript"> 
jQuery(function($) {
	var $container = $('.lulu-list');
	$container.infinitescroll({
	  navSelector  : '.elise-pagination',    // selector for the paged navigation 
	  nextSelector : '.page-link',  // selector for the NEXT link (to page 2)
	  itemSelector : '.lulu-list .lulu-item',     // selector for all items you'll retrieve
	  loading: {
		  finishedMsg: 'Last page',
		  img: 'modules/board/skins/Clarity_memo/img/shloading.gif'
		}
	  },
	  function( newElements ) {
		var $newElems = $( newElements ).css({ opacity: 0 });
		$newElems.imagesLoaded(function(){
		  $newElems.animate({ opacity: 1 });
		  $container.masonry( 'appended', $newElems, true ); 
		});
	  }
	);
  
});
</script>
<?php } ?>
<div class="write_author">
<?php if($__Context->grant->write_document && $__Context->oDocument){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','write_memo.html');
} ?>
<?php if($__Context->module_info->filter=='lulu_top'){ ?><div class="lulu-top cfixsosi">
	<?php if($__Context->module_info->use_category=='Y'){ ?><ul class="lulu-top-filter">
		<li<?php if(!$__Context->category){ ?> class="on"<?php } ?>><a class="clarity-white" href="<?php echo getUrl('category','','page','') ?>"><span><?php echo $__Context->lang->total ?></span></a></li>
		<?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?>
			<li<?php if($__Context->val->document_count){ ?> class="nm"<?php } ?>>
				<a class="clarity-white" href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','', 'page', '') ?>"><span><?php echo $__Context->val->title ?></span></a>
			</li>
			<?php if($__Context->val->document_count){ ?><li><a href="#" class="clarity-white arrow"><span><?php echo $__Context->val->document_count ?></span></a></li><?php } ?>
		<?php } ?>
	</ul><?php } ?>
	
	<div class="right">    
		<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board-search" class="board-search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<input type="hidden" name="search_target" value="title_content" />
			<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="elise-search css3pie" placeholder="Search.."  />
			<?php if($__Context->last_division){ ?><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="btn"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
		</form>
	</div>
</div><?php } ?>
<?php if($__Context->notice_list){ ?><ul class="lulu-notice-list clarity-font">
	<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->oDocument){ ?><li class="lulu-notice-item">
		<div class="pix-lulu-notice" id="list_<?php echo $__Context->oDocument->document_srl ?>">
			<span class="s-notice" href="#"<?php if($__Context->oDocument->isEditable()){ ?> onclick="toggle_object('insert_<?php echo $__Context->oDocument->document_srl ?>'); toggle_object('list_<?php echo $__Context->oDocument->document_srl ?>'); return false;"<?php } ?>>공지</span>
			<?php echo $__Context->oDocument->getTitle() ?>
			<input type="checkbox" name="cart" value="<?php echo $__Context->oDocument->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->oDocument->isCarted()){ ?> checked="checked"<?php } ?> />
		</div>
		<div id="insert_<?php echo $__Context->oDocument->document_srl ?>" style="display:none;"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','insert_document.html') ?></div>
	</li><?php } ?>
</ul><?php } ?><!-- .lulu-notice-list -->
 
<?php if($__Context->module_info->filter=='lulu'){ ?><div class="lulu-sidebar clarity-font right">
	<div class="search-container">    
		<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board-search" class="board-search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<input type="hidden" name="search_target" value="title_content" />
			<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="elise-search css3pie" placeholder="Search.."  />
			<?php if($__Context->last_division){ ?><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="btn"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
		</form>
	</div>
	
	<?php if($__Context->module_info->use_category=='Y'){ ?><div class="lulu-filter">
		<div class="lulu-filter-header">Filter By</div>
		
		<ul class="lulu-filter-list">
			<li class="lulu-filter">
				<a class="lulu-filter-item first" href="<?php echo getUrl('category','','page','') ?>" ><?php echo $__Context->lang->total ?></a>	
			</li>
			
			<?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li class="lulu-filter">
				<a class="lulu-filter-item <?php if($__Context->val->last){ ?>last<?php } ?>" href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','', 'page', '') ?>"><?php echo $__Context->val->title ?>
					<?php if($__Context->val->document_count){ ?><span class="filter-count right"><?php echo $__Context->val->document_count ?></span><?php } ?>
				</a>
			</li><?php } ?>   
		</ul>
	</div><?php } ?><!-- .lulu-filter -->
		
</div><?php } ?><!-- .lulu-sidebar-->
	
						   
<ul class="lulu-list left cfixsosi clarity-font" id="lulu">
	<li class="lulu-border"></li>
	
	<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->oDocument){ ?><li class="lulu-item cfixsosi">
		<div class="lulu-block cfixsosi" id="wiget_<?php echo $__Context->oDocument->document_srl ?>">
			<div class="caret-block">
				<span class="caret-outer"></span>
				<span class="caret-inner"></span>
			</div>
			
			<div class="lulu-main cfixsosi">
			
				<ul class="lulu-info cfixsosi">
					<li class="lulu-info-item nickname clarity-font left">
						<a href="#popup_menu_area" class="lulu-info-link member_<?php echo $__Context->oDocument->get('member_srl') ?>" onclick="return false">@<?php echo $__Context->oDocument->getNickName() ?></a>
					</li>
					<?php if(in_array('new',$__Context->oDocument->getExtraImages($__Context->module_info->duration_new*3600))){ ?><li class="lulu-info-item spotify green left">•</li><?php } ?> 
					<?php if($__Context->oDocument->get('voted_count')){ ?><li class="lulu-info-item spotify red left">•</li><?php } ?> 
					<?php if($__Context->oDocument->getCommentCount()){ ?><li class="lulu-info-item spotify blue left">•</li><?php } ?> 
					<li class="lulu-info-item time-ago left"><?php echo getTimeGap($__Context->oDocument->get('regdate'), "Y.m.d H:i") ?></li>
					
					<?php if($__Context->grant->manager){ ?><li class="lulu-info-item manager right">
						<input type="checkbox" name="cart" value="<?php echo $__Context->oDocument->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->oDocument->isCarted()){ ?> checked="checked"<?php } ?> />
					</li><?php } ?>
					<?php if($__Context->oDocument->hasUploadedFiles()){ ?><li class="lulu-info-item cla-file right"></li><?php } ?>
					<?php if($__Context->oDocument->hasUploadedFiles()){ ?><li class="lulu-info-item bullet right">•</li><?php } ?>
					
					
					<li class="lulu-info-item cla-comments right">댓글 <span class="stats red"><?php echo $__Context->oDocument->getCommentCount() ?></span></li>
					<li class="lulu-info-item bullet right">•</li>
					<!-- <li class="lulu-info-item right">Likes <span class="stats red"><?php echo $__Context->oDocument->get('voted_count')!=0?$__Context->oDocument->get('voted_count'):'0' ?></span></li> -->
										<!-- <li class="lulu-info-item bullet right">•</li> -->
					<li class="lulu-info-item cla-comments right">조회 수 <span class="stats purple"><?php echo $__Context->oDocument->get('readed_count') ?></span></li>
				</ul>
				
				<div class="lulu-content">
					<div class="lulu-content-info pix-lulu<?php if(!$__Context->oDocument->getThumbnail()){ ?>-help<?php } ?>">
						<div class="lulu-content-title" >
							<a id="list_<?php echo $__Context->oDocument->document_srl ?>" href="#"<?php if(!$__Context->oDocument->isNotice() && $__Context->grant->write_comment){ ?> onclick="toggle_object('comment_<?php echo $__Context->oDocument->document_srl ?>'); return false;"<?php } ?> class="lulu-title-link"><?php echo $__Context->oDocument->getTitle($__Context->module_info->title_cut_size) ?></a>
							<!-- 글수정 -->
							<div id="insert_<?php echo $__Context->oDocument->document_srl ?>" style="display:none;"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','insert_document.html') ?></div>
							<div class="lulu-button-link">
								<?php if(!$__Context->oDocument->isNotice() && $__Context->grant->write_comment){ ?>
								<a href="#" onclick="toggle_object('comment_<?php echo $__Context->oDocument->document_srl ?>'); return false;" class="clarity-white mr-f4 right" style="margin-left:10px;"><span><?php echo $__Context->lang->cmd_comment_registration ?></span></a>
								<?php } ?>
								<?php if($__Context->oDocument->isEditable()){ ?><a class="clarity-white right" href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a><?php } ?>
								<?php if($__Context->oDocument->isEditable()){ ?><a class="clarity-white mr-f4 right" href="#" onclick="toggle_object('insert_<?php echo $__Context->oDocument->document_srl ?>'); toggle_object('list_<?php echo $__Context->oDocument->document_srl ?>'); return false;"><span><?php echo $__Context->lang->cmd_modify ?></span></a><?php } ?>
							</div>
						</div>
						<div class="lulu-content-text"></div>
					</div><!-- .lulu-content-info -->
					<?php if($__Context->oDocument->getThumbnail()){ ?><a class="lulu-content-thumb clarity-thumb clarity-trans"<?php if($__Context->oDocument->isEditable()){ ?> href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"<?php } ?>>
						<img class="lulu-content-thumb2" src="<?php echo $__Context->oDocument->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, ratio) ?>" alt="" />
					</a><?php } ?><!-- .lulu-content-thumb -->
				</div><!-- .lulu-content -->
				   
			</div><!-- .lulu-main -->
										<!-- 댓글 -->
			<div id="comment_<?php echo $__Context->oDocument->document_srl ?>" style="display:none; background-color:#f7f7f7;"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','document_reply.html') ?></div>
			
		  
			<?php if($__Context->oDocument->getCommentCount()){ ?><ul class="lulu-comment"><?php $__Context->lulu=1 ?>
			
				<?php if($__Context->oDocument->getComments()&&count($__Context->oDocument->getComments()))foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?>
					<li id="comment_<?php echo $__Context->comment->comment_srl ?>" class="lulu-comment-block cfixsosi" <?php if($__Context->comment->get('depth')){ ?> style="margin-left:<?php echo ($__Context->comment->get('depth'))*20 ?>px" <?php } ?>  >
					
						<a  class="lulu-comment-thumb-link clarity-thumb avatar-radius" href="<?php echo getUrl('document_srl', $__Context->oDocument->document_srl) ?>#comment">
							<?php if($__Context->comment->getProfileImage()){ ?><img class="lulu-comment-thumb-img avatar-icons" src="<?php echo $__Context->comment->getProfileImage() ?>" /><?php } ?>
							<?php if(!$__Context->comment->getProfileImage() && $__Context->module_info->no_profile){ ?><img class="lulu-comment-thumb-img avatar-icons" src="<?php echo $__Context->module_info->no_profile ?>" /><?php } ?>
							<?php if(!$__Context->comment->getProfileImage() && !$__Context->module_info->no_profile){ ?><img class="lulu-comment-thumb-img avatar-icons" src="/xe/modules/board/skins/sosi_memo/img/no-profile.jpg" /><?php } ?>
						</a>
						
						<div class="lulu-comment-info pix-lulu-comment">
							<div class="comment-info-top cfixsosi">
								<div class="lulu-comment-nick left">
								<a href="#popup_menu_area" class="lulu-info-link member_<?php echo $__Context->comment->get('member_srl') ?>" onclick="return false">@<?php echo $__Context->comment->getNickName() ?></a>
									
								</div>
								<div class="bullet left">•</div>
								<div class="lulu-comment-time left"><?php echo getTimeGap($__Context->comment->get('regdate'), "Y.m.d H:i") ?></div>
							</div>
							
							<div id="clist_<?php echo $__Context->comment->comment_srl ?>" class="lulu-comment-content cfixsosi">
								<?php if($__Context->comment->parent_srl){ ?>
								<?php 
									$__Context->oComment = &getModel('comment');
									$__Context->comment_parent = $__Context->oComment->getComment($__Context->comment->parent_srl);
								 ?>
								<?php } ?>
								<span>
									<?php if($__Context->comment->parent_srl){ ?><strong style="margin-right:5px;">@<?php echo $__Context->comment_parent->getNickName() ?></strong><?php } ?> 
									
									<?php echo $__Context->comment->getContentText(text) ?>
								</span>
							</div>
							<div id="cinsert_<?php echo $__Context->comment->comment_srl ?>" style="display:none;"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','insert_comment.html') ?></div>
							
							
							<div class="lulu-comment-button">
								<?php if(!$__Context->oDocument->isNotice() && $__Context->grant->write_comment){ ?>
								<?php if($__Context->grant->write_comment){ ?><a href="#" onclick="toggle_object('reply_<?php echo $__Context->comment->comment_srl ?>'); return false;" title="<?php echo $__Context->lang->cmd_reply ?>" class="clarity-white btn_reply mr-f4" style="float:right" ><span><?php echo $__Context->lang->cmd_reply ?></span></a><?php } ?>			
								<?php } ?>
								<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="clarity-white mr-f4 right"><span><?php echo $__Context->lang->cmd_delete ?></span></a><?php } ?>
								<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="#" onclick="toggle_object('cinsert_<?php echo $__Context->comment->comment_srl ?>'); toggle_object('clist_<?php echo $__Context->comment->comment_srl ?>'); toggle('reply_<?php echo $__Context->comment->comment_srl ?>'); return false;" class="clarity-white mr-f4 mr-f2 right" ><span><?php echo $__Context->lang->cmd_modify ?></span></a><?php } ?>
							</div>
						
					
							<div id="reply_<?php echo $__Context->comment->comment_srl ?>" style="display:none;">
								<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','comment_reply.html') ?>      
							</div>
						</div>
						
					</li><?php $__Context->lulu++ ?>
				<?php } ?>
  
			</ul><?php } ?><!-- .lulu-comment -->
	
		</div><!-- .lulu-block -->
		
		<a href="<?php echo getUrl('document_srl',$__Context->oDocument->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>" class="lulu-thumb-link clarity-thumb avatar-radius">
			<?php if($__Context->oDocument->getProfileImage()){ ?><img class="lulu-thumb-img avatar-icons" src="<?php echo $__Context->oDocument->getProfileImage() ?>" /><?php } ?>
			<?php if(!$__Context->oDocument->getProfileImage() && $__Context->module_info->no_profile){ ?><img class="lulu-thumb-img avatar-icons" src="<?php echo $__Context->module_info->no_profile ?>" /><?php } ?>
			<?php if(!$__Context->oDocument->getProfileImage() && !$__Context->module_info->no_profile){ ?><img class="lulu-thumb-img avatar-icons" src="/xe/modules/board/skins/sosi_memo/img/no-profile.jpg" /><?php } ?>
		</a>
	</li><?php } ?><!-- .lulu-item -->
	 
</ul><!-- .lulu-list -->
</div>