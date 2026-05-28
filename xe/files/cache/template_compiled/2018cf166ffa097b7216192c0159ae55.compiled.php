<?php if(!defined("__XE__"))exit;
$__Context->widget_info->slider_name = 'gySliderBot_'.rand(100000,500000).rand(100000,500000); ?>
		
<?php if($__Context->widget_info->markup_type=="list"){ ?>
<div class="wrap_owl owl-normal owl-normal-ITC-listC">
	<div class="owl-carousel <?php echo $__Context->widget_info->slider_name ?> ">
	<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
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
	<?php } ?>
	</div>
</div>
<script type="text/javascript">
			jQuery(function($){
			
			  $('.<?php echo $__Context->widget_info->slider_name ?>').owlCarousel({
				nav:true,
				items:4,
				loop:true,
				autoplay:false,
				autoplayTimeout:7000,
				margin:8,
				responsive:{
					0:{
					items:2
					},
					376:{
						items:2
					},
					533:{
						items:3
					},
					1020:{
						items:4
					}
				}
               
             });
		});
		</script>
<?php }else{ ?>
<div class="wrap_owl owl-normal owl-normal-ITC-list">
	<div class="owl-carousel <?php echo $__Context->widget_info->slider_name ?> ">
	<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
		<div class="item">
			<div class="wrap_slide_title door_bg">
				<a href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>>
				<?php if($__Context->item->getThumbnail()){ ?>
				<img class="w100" src="<?php echo $__Context->item->getThumbnail() ?>" alt="">
				<?php }else{ ?>
				<img class="w100" src="/xe/widgets/content/skins/Door_cpB/img/noneLarge_img.gif" alt="">
				<?php } ?>
				</a>
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
						<span class="DW_Rep">
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
	<?php } ?>
	</div>
</div>
<script type="text/javascript">
			jQuery(function($){
			
			  $('.<?php echo $__Context->widget_info->slider_name ?>').owlCarousel({
				nav:true,
				items:1,
				loop:true,
				autoplay:false,
				autoplayTimeout:7000,
				margin:0
               
             });
		});
</script>
<?php } ?>
