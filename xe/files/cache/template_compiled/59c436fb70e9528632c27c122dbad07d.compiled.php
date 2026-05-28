<?php if(!defined("__XE__"))exit;?>
		
<?php if($__Context->widget_info->markup_type=="list"){ ?>
<div class="DWZineB DWZineB<?php echo $__Context->widget_info->cols_list_count ?>">
	<div class="clearBoth">
	<?php $__Context->_idx=0 ?>
	<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
		<div class="DWZineB_item DWZineB_item<?php echo $__Context->_idx ?>">
			
				
			<div class="in_DWZineB_item">
				<p class="DWZineB_item_thumbArea">
					<?php if($__Context->item->getThumbnail()){ ?>
					<a class="DWZineB_item_img" href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><img src="<?php echo $__Context->item->getThumbnail() ?>" alt=""></a>
					<?php }else{ ?>
					<a class="DWZineB_item_img" href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><img src="/xe/widgets/content/skins/Door_cpB/img/noneLarge_img.gif" alt=""></a>
					<?php } ?>
				</p>
				<?php for($__Context->j=0,$__Context->c=count($__Context->widget_info->option_view_arr);$__Context->j<$__Context->c;$__Context->j++){ ?>
				<?php if($__Context->widget_info->option_view_arr[$__Context->j]=='title'){ ?>
				<h3 class="slide_title">
					<a href="<?php echo $__Context->item->getLink() ?>" class="title dw_color"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
				</h3>
				<?php }else if($__Context->widget_info->option_view_arr[$__Context->j]=='regdate'){ ?>
				<div class="wrap_date">
					<div class="wrap_DW_Rep">
						 <span class="wrap_date"><i class="xi-calendar"></i><span class="slide_block"><?php echo $__Context->item->getRegdate("m-d") ?></span></span>
						 <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
						<span class="DW_Rep">
							<i class="xi-message"></i><a href="<?php echo $__Context->item->getLink() ?>#comment" class="DW_Replies"><span><?php echo $__Context->item->getCommentCount() ?></span></a>
						</span>
						<?php }elseif($__Context->widget_info->show_comment_count=='Y'){ ?>
						<span class="DW_Rep">
							<i class="xi-message"></i><span class="DW_Replies">0</span>
						</span>
						<?php } ?>
						<?php if($__Context->widget_info->option_view_arr[$__Context->j+1]=='nickname'){ ?>
						<span class="DW_Rep DW_Nic">
							<i class="xi-pen"></i><a <?php if($__Context->item->getMemberSrl()){ ?>href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"<?php }elseif($__Context->item->getAuthorSite()){ ?>href="<?php echo $__Context->item->getAuthorSite() ?>" onclick="window.open(this.href); return false;" class="author member"<?php }else{ ?>href="#" onclick="return false;" class="author member"<?php } ?> ><?php echo $__Context->item->getNickName($__Context->widget_info->nickname_cut_size) ?></a>
						</span>
						<?php } ?>
					</div>
					
				</div>
				
				<?php }else if($__Context->widget_info->option_view_arr[$__Context->j]=='content'){ ?>
				<p class="DWcontent">
					<a href="<?php echo $__Context->item->getLink() ?>" class="title"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getContent() ?></a>	
				</p>
				
				<?php } ?>
				<?php } ?>
			</div>
		</div>
		<?php $__Context->_idx++ ?>
	<?php } ?>
	</div>
</div>
<?php }else{ ?>
<div class="DWZineA">
	<div>
	<?php $__Context->_idx=0 ?>
	<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
		<div class="DWZineA_item DWZineA_item<?php echo $__Context->_idx ?>">
			<div class="wrap_slide_titleB clearBoth">
				<p class="DWZineA_item_thumbArea" style="width:<?php echo $__Context->widget_info->thumbnail_width ?>px;margin-right:-<?php echo $__Context->widget_info->thumbnail_width+2 ?>px;">
					<?php if($__Context->item->getThumbnail()){ ?>
					<a class="DWZineA_item_img" href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><img src="<?php echo $__Context->item->getThumbnail() ?>"   alt=""></a>
					<?php }else{ ?>
					<a class="DWZineA_item_img" href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><img src="/xe/widgets/content/skins/Door_cpB/img/noneMin_img.gif"  style="width:<?php echo $__Context->widget_info->thumbnail_width ?>px;height:<?php echo $__Context->widget_info->thumbnail_height ?>px;" alt=""></a>
					<?php } ?>
				</p>
				<div class="in_DWZineA_item" style="margin-left:<?php echo $__Context->widget_info->thumbnail_width+15 ?>px;">
					<?php for($__Context->j=0,$__Context->c=count($__Context->widget_info->option_view_arr);$__Context->j<$__Context->c;$__Context->j++){ ?>
					<?php if($__Context->widget_info->option_view_arr[$__Context->j]=='title'){ ?>
					<h3 class="slide_title">
						<a href="<?php echo $__Context->item->getLink() ?>" class="title dw_color"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
					</h3>
					<?php }else if($__Context->widget_info->option_view_arr[$__Context->j]=='regdate'){ ?>
					<div class="wrap_date">
						<div class="wrap_DW_Rep">
							 <span class="wrap_date"><i class="xi-calendar"></i><span class="slide_block"><?php echo $__Context->item->getRegdate("m-d") ?></span></span>
							 <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
							<span class="DW_Rep">
								<i class="xi-message"></i><a href="<?php echo $__Context->item->getLink() ?>#comment" class="DW_Replies"><span><?php echo $__Context->item->getCommentCount() ?></span></a>
							</span>
							<?php }elseif($__Context->widget_info->show_comment_count=='Y'){ ?>
							<span class="DW_Rep">
								<i class="xi-message"></i><span class="DW_Replies">0</span>
							</span>
							<?php } ?>
							<?php if($__Context->widget_info->option_view_arr[$__Context->j+1]=='nickname'){ ?>
							<span class="DW_Rep DW_Nic_B">
								<i class="xi-pen"></i><a <?php if($__Context->item->getMemberSrl()){ ?>href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"<?php }elseif($__Context->item->getAuthorSite()){ ?>href="<?php echo $__Context->item->getAuthorSite() ?>" onclick="window.open(this.href); return false;" class="author member"<?php }else{ ?>href="#" onclick="return false;" class="author member"<?php } ?> ><?php echo $__Context->item->getNickName($__Context->widget_info->nickname_cut_size) ?></a>
							</span>
							<?php } ?>
						</div>
					</div>
					<?php }else if($__Context->widget_info->option_view_arr[$__Context->j]=='content'){ ?>
					<p class="DWcontent">
						<a href="<?php echo $__Context->item->getLink() ?>" class="title"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getContent() ?></a>	
					</p>
					<?php } ?>
					<?php } ?>
				</div>
			</div>	
		</div>
		<?php $__Context->_idx++ ?>
	<?php } ?>
	</div>
</div>
<?php } ?>
				