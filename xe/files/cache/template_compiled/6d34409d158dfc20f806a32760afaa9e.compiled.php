<?php if(!defined("__XE__"))exit;?><!-- comment -->
<div class="fb" id="comment">
	<div class="fb_head fb_head2"><font style="FONT-SIZE: 12pt" color="#5F5F5F" face="굴림"><b><?php echo $__Context->lang->comment ?></b></font>&nbsp;<span class="fbcnt">(<?php echo $__Context->oDocument->getCommentcount() ?>)</span></div>
	<!-- Comment List -->
	<div class="fb_list">
		<?php if($__Context->oDocument->getCommentcount()){ ?><ul>
				
			<?php if($__Context->oDocument->getComments()&&count($__Context->oDocument->getComments()))foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?><li class="fb_thumb_off" id="comment_<?php echo $__Context->comment->comment_srl ?>">
	
			<?php if($__Context->comment->get('depth') > 0 && $__Context->comment->get('depth') <= 10){ ?><div class="fb_node ind<?php echo $__Context->comment->get('depth') ?>" style="width:40px;">ㄴ</div><?php } ?>
			<?php if($__Context->comment->get('depth') > 10){ ?><div class="fb_node ind_over" style="width:40px;">ㄴㄴ</div><?php } ?>
			
			<?php if($__Context->comment->get('depth') >= 0 && $__Context->comment->get('depth') <= 10){ ?><div class="fb_item_wrap idx<?php echo $__Context->comment->get('depth') ?>">
				<div class="fb_info">
					<div class="fb_sec">
						<?php if(!$__Context->comment->getProfileImage()){ ?><span class="profile"></span><?php } ?>				
						<span class="fb_nick_name">
							<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><strong><?php echo $__Context->comment->getNickName() ?></strong><?php } ?>
							<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
						</span>
						<span class="fb_date"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></span>
					</div>
					<div class="fb_sec2">
						<?php if($__Context->comment->get('voted_count')!=0){ ?><span class="fb_nobar"><?php echo $__Context->lang->cmd_vote ?>:<?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></span><?php } ?>
						<span class="fb_nobar"><?php if($__Context->oDocument->allowComment()){ ?><a href="<?php echo getUrl('act','dispPointrushReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="reply"><?php echo $__Context->lang->cmd_reply ?></a><?php } ?></span>
						<span class="fb_nobar"><?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispPointrushModifyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="modify"><?php echo $__Context->lang->cmd_modify ?></a><?php } ?></span>
						<span class="fb_nobar"><?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispPointrushDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="delete"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></span>
<!-- 15. 12. 04
						<span class="fb_nobar"><?php if($__Context->is_logged){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> this" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?></span>
-->
					</div>
				</div>
				<div class="fb_content">
					<p class="fb_dsc">
					<?php if(!$__Context->comment->isAccessible()){ ?>
					<form action="./" method="get" class="xe_content" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<p><label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
						<p><input type="password" name="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" class="iText" /><input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" /></p>
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
						<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
						<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					</form>
					<?php }else{ ?>
					<?php echo $__Context->comment->getContent(false) ?>
					<?php } ?>
					</p>
					<?php if($__Context->comment->hasUploadedFiles()){ ?><div class="fileList">
						<button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->comment->get('uploaded_count') ?></strong>]</button>
						<ul class="files">
							<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
						</ul>
					</div><?php } ?>	
				</div>
			</div><?php } ?>
			<?php if($__Context->comment->get('depth') > 10){ ?><div class="fb_item_wrap idx_over">				
				<div class="fb_info">
					<div class="fb_sec">
						<?php if(!$__Context->comment->getProfileImage()){ ?><span class="profile"></span><?php } ?>				
						<span class="fb_nick_name">
							<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><strong><?php echo $__Context->comment->getNickName() ?></strong><?php } ?>
							<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
						</span>
						<span class="fb_date"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></span>
					</div>
					<div class="fb_sec2">
						<?php if($__Context->comment->get('voted_count')!=0){ ?><span class="fb_nobar"><?php echo $__Context->lang->cmd_vote ?>:<?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></span><?php } ?>
						<span class="fb_nobar"><?php if($__Context->oDocument->allowComment()){ ?><a href="<?php echo getUrl('act','dispPointrushReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="reply"><?php echo $__Context->lang->cmd_reply ?></a><?php } ?></span>
						<span class="fb_nobar"><?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispPointrushModifyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="modify"><?php echo $__Context->lang->cmd_modify ?></a><?php } ?></span>
						<span class="fb_nobar"><?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispPointrushDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="delete"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></span>
<!-- 15. 12. 04						
						<span class="fb_nobar"><?php if($__Context->is_logged){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> this" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?></span>
-->
					</div>
				</div>
												
				<div class="fb_content">
					<p class="fb_dsc">
					<?php if(!$__Context->comment->isAccessible()){ ?>
					<form action="./" method="get" class="xe_content" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<p><label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
						<p><input type="password" name="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" class="iText" /><input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" /></p>
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
						<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
						<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					</form>
					<?php }else{ ?>
					<?php echo $__Context->comment->getContent(false) ?>
					<?php } ?>
					</p>
					<?php if($__Context->comment->hasUploadedFiles()){ ?><div class="fileList">
						<button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->comment->get('uploaded_count') ?></strong>]</button>
						<ul class="files">
							<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
						</ul>
					</div><?php } ?>			
				</div>
			</div><?php } ?>			
			</li><?php } ?>		
		</ul><?php } ?>
	</div>
	
	<!-- //Comment List -->
	
    <?php if($__Context->oDocument->comment_page_navigation){ ?><div class="pagination">
        <a href="<?php echo getUrl('cpage',1) ?>#comment" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a> 
        <?php while($__Context->page_no=$__Context->oDocument->comment_page_navigation->getNextPage()){ ?>
			<?php if($__Context->cpage==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->cpage!=$__Context->page_no){ ?><a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a><?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl('cpage',$__Context->oDocument->comment_page_navigation->last_page) ?>#comment" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
    </div><?php } ?>
    <div class="fb_wrt_box">
    <div class="fb_wrt_box2" style="padding:20px;">
	<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="write_comment" id="write_comment"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
		<input type="hidden" name="comment_srl" value="" />
        <input type="hidden" name="content" value="" />
        <?php echo $__Context->oDocument->getCommentEditor() ?>
		<div class="write_author">
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userName" class="iLabel"><?php echo $__Context->lang->writer ?></label>
				<input type="text" name="nick_name" id="userName" class="iText userName" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userPw" class="iLabel"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="userPw" class="iText userPw" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="homePage" class="iLabel"><?php echo $__Context->lang->homepage ?></label>
				<input type="text" name="homepage" id="homePage" class="iText homePage" />&nbsp;
			</span><?php } ?>
			<?php if($__Context->is_logged){ ?><input type="checkbox" name="notify_message" value="Y" id="notify_message" class="iCheck" /><?php } ?>
			<?php if($__Context->is_logged){ ?><label for="notify_message"><?php echo $__Context->lang->notify ?></label><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><input type="checkbox" name="is_secret" value="Y" id="is_secret" class="iCheck" /><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><label for="is_secret"><?php echo $__Context->lang->secret ?></label><?php } ?>
		</div>
		<div class="btnArea">
			<button type="submit" class="btn"><?php echo $__Context->lang->cmd_comment_registration ?></button>
		</div>
	</form><?php } ?>
	</div>
	</div>
	
</div>
<!-- //comment -->
<div class="fbFooter"> 
	<a href="<?php echo getUrl('document_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_list ?></a>
</div>
<!-- /COMMENT -->
