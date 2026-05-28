<?php if(!defined("__XE__"))exit;?>	<?php if($__Context->widget_info->markup_type=="list"){ ?>
<?php  $__Context->widget_info->slider_name = 'gySliderBot_'.rand(100000,500000).rand(100000,500000); ?>
<div style="height:18px !important; overflow:hidden;position:relative;line-height:18px; padding:0;">
	<div id="<?php echo $__Context->widget_info->slider_name ?>">
		<ul class="slideT slideT_data">
		 <?php $__Context->_idx=0 ?>
    <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
        <li class="clearBoth"<?php if($__Context->_idx >= $__Context->widget_info->list_count){ ?> style="display:none"<?php } ?>>
            <?php if($__Context->widget_info->option_view_arr&&count($__Context->widget_info->option_view_arr))foreach($__Context->widget_info->option_view_arr as $__Context->k => $__Context->v){ ?>
                <?php if($__Context->v=='title'){ ?>
                    <?php if($__Context->widget_info->show_browser_title=='Y' && $__Context->item->getBrowserTitle()){ ?>
                        <a href="<?php if($__Context->item->contents_link){;
echo $__Context->item->contents_link;
}else{;
echo getSiteUrl($__Context->item->domain, '', 'mid', $__Context->item->get('mid'));
} ?>" class="board"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><strong><?php echo $__Context->item->getBrowserTitle() ?></strong></a>
                    <?php } ?>
                    <?php if($__Context->widget_info->show_category=='Y' && $__Context->item->get('category_srl') ){ ?>
                        <a href="<?php echo getSiteUrl($__Context->item->domain,'','mid',$__Context->item->get('mid'),'category',$__Context->item->get('category_srl')) ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><strong class="category"><?php echo $__Context->item->getCategory() ?></strong></a>
                    <?php } ?>
                    <a href="<?php echo $__Context->item->getLink() ?>" class="title on_dw_color"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
                    <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
                        <em class="replyNum" title="Replies"><a href="<?php echo $__Context->item->getLink() ?>#comment"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getCommentCount() ?></a></em>
                    <?php } ?>
                    <?php if($__Context->widget_info->show_trackback_count=='Y' && $__Context->item->getTrackbackCount()){ ?>
                        <em class="trackbackNum" title="Trackbacks"><a href="<?php echo $__Context->item->getLink() ?>#trackback"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTrackbackCount() ?></a></em>
                    <?php } ?>
                    <?php if($__Context->widget_info->show_icon=='Y'){ ?>
                        <span class="icon"><?php echo $__Context->item->printExtraImages() ?></span>
                    <?php } ?>
                <?php }else if($__Context->v=='nickname'){ ?>
                    <a <?php if($__Context->item->getMemberSrl()){ ?>href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"<?php }elseif($__Context->item->getAuthorSite()){ ?>href="<?php echo $__Context->item->getAuthorSite() ?>" onclick="window.open(this.href); return false;" class="author member"<?php }else{ ?>href="#" onclick="return false;" class="author member"<?php } ?> ><?php echo $__Context->item->getNickName($__Context->widget_info->nickname_cut_size) ?></a>
                <?php }else if($__Context->v=='regdate'){ ?>
                   <span class="notoce_date"><span class="slide_block"><?php echo $__Context->item->getRegdate("m-d") ?></span></span>
                <?php } ?>
            <?php } ?>
        </li>
    <?php $__Context->_idx++ ?>
    <?php } ?>
		</ul>
	</div>
</div>
<?php if($__Context->_idx >= 1){ ?> 
<script type="text/javascript">
(function($){	
  $(function(){
   $('#<?php echo $__Context->widget_info->slider_name ?>').jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 1,
		auto:5000,
		speed:500
	});
  });	
}(jQuery))
</script>
<?php } ?>
<?php }else{ ?>
<div class="DWZineA DWZineC DWZineA<?php echo $__Context->widget_info->cols_list_count ?> clearBoth">
	<?php $__Context->_idx=0 ?>
	<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
	<div class="DWZineA_itemC DWZineA_itemC<?php echo $__Context->_idx ?>">
		<div class="DWZineA_itemC_thumbArea">
			<div class="item">
			
                <a href="<?php echo $__Context->item->getLink() ?>" class="DCP_box_link"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>>
                    <?php if($__Context->item->getThumbnail()){ ?>
                        <img src="<?php echo $__Context->item->getThumbnail() ?>" alt="" />
                    <?php }else{ ?>
                        <span><img src="/xe/widgets/content/skins/Door_cpB/img/empty.gif" alt="<?php echo $__Context->lang->none_image ?>" /></span>
                    <?php } ?>
                </a>
				
				<div class="over_DCPA_image DW_BG">
				<?php for($__Context->j=0,$__Context->c=count($__Context->widget_info->option_view_arr);$__Context->j<$__Context->c;$__Context->j++){ ?>
				<?php if($__Context->widget_info->option_view_arr[$__Context->j]=='title'){ ?>
					<h3><a href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a></h3>
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
								<span class="DW_RepB">
									<i class="xi-pen"></i> <a href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getNickName($__Context->widget_info->nickname_cut_size) ?></a>
								</span>
								<?php } ?>
							</div>
						
						
					</div>
					<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
		<?php $__Context->_idx++ ?>
	<?php } ?>
</div>
<?php } ?>