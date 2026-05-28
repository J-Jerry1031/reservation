<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/treasurej_popular/skins/neat_popular_tabs/neat_popular.css--><?php $__tmp=array('widgets/treasurej_popular/skins/neat_popular_tabs/neat_popular.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php 
	$__Context->tabc=count($__Context->widget_info->tab_view_arr);
	$__Context->optc=count($__Context->widget_info->option_view_arr);
	$__Context->li_width = $__Context->widget_info->widget_widths/$__Context->tabc;
	$__Context->img_width = $__Context->widget_info->thumbnail_width-2;
	$__Context->img_height = $__Context->widget_info->thumbnail_height-2;
 ?>
<?php if(!$__Context->global['popsid']){;
$__Context->global['popsid'] = 1;
};
$__Context->global['popsid']++ ?>
<div id="popular<?php echo $__Context->global['popsid'] ?>" class="neat-popular newClear">
	
	<div class="tabs_items newClear" style="width:<?php echo $__Context->widget_info->widget_widths ?>px">
		<ul>
			<?php for($__Context->i=0; $__Context->i<$__Context->tabc; $__Context->i++){ ?>
				<?php if($__Context->widget_info->tab_view_arr[$__Context->i]=='popular'){ ?>
					<li style="width:<?php echo $__Context->li_width ?>px"><a id="pd_link_s<?php echo $__Context->global['popsid'] ?>"<?php if($__Context->widget_info->tab_view_arr[0]=='popular'){ ?> class="tabs_active"<?php } ?> href="#"><?php echo $__Context->lang->ip_popular_documents ?></a></li>
				<?php }elseif($__Context->widget_info->tab_view_arr[$__Context->i]=='newestd'){ ?>
					<li style="width:<?php echo $__Context->li_width ?>px"><a id="nd_link_s<?php echo $__Context->global['popsid'] ?>"<?php if($__Context->widget_info->tab_view_arr[0]=='newestd'){ ?> class="tabs_active"<?php } ?> href="#"><?php echo $__Context->lang->ip_newest_documents ?></a></li>
				<?php }elseif($__Context->widget_info->tab_view_arr[$__Context->i]=='newestc'){ ?>
					<li style="width:<?php echo $__Context->li_width ?>px"><a id="nc_link_s<?php echo $__Context->global['popsid'] ?>"<?php if($__Context->widget_info->tab_view_arr[0]=='newestc'){ ?> class="tabs_active"<?php } ?> href="#"><?php echo $__Context->lang->ip_newest_comments ?></a></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>
	
	
	<div class="tabs_inner newClear" style="width:<?php echo $__Context->widget_info->widget_widths ?>px">
		
		<div id="popular_documents_s<?php echo $__Context->global['popsid'] ?>" class="tabs_content<?php if($__Context->widget_info->tab_view_arr[0]=='popular'){ ?> tabs_active<?php } ?>">
			<?php if($__Context->widget_info->popular_documents){ ?><ul>
				<?php if($__Context->widget_info->popular_documents&&count($__Context->widget_info->popular_documents))foreach($__Context->widget_info->popular_documents as $__Context->key=>$__Context->val){ ?><li class="newClear">
					<a href="<?php echo $__Context->val->getPermanentUrl() ?>">
						<?php for($__Context->i=0; $__Context->i<$__Context->optc; $__Context->i++){ ?>
						<?php if($__Context->widget_info->option_view_arr[$__Context->i]=='image'){ ?>
							<p class="tabs_thumb">
								<?php if($__Context->val->getThumbnail()){ ?><img src="<?php echo $__Context->val->getThumbnail($__Context->widget_info->thumbnail_width,$__Context->widget_info->thumbnail_height,crop) ?>" border="0" alt="" /><?php }else{ ?><span class="noimg" style="width:<?php echo $__Context->img_width ?>px; height:<?php echo $__Context->img_height ?>px"><i class="fa fa-camera icon-camera" style="line-height:<?php echo $__Context->img_height ?>px"></i></span><?php } ?>
							</p>
						<?php }elseif($__Context->widget_info->option_view_arr[$__Context->i]=='title'){ ?>
							<p class="text_title"><?php echo $__Context->val->getTitle($__Context->widget_info->subject_cut_size) ?></p>
						<?php }elseif($__Context->widget_info->option_view_arr[$__Context->i]=='content'){ ?>
							<p class="text_content"><?php echo $__Context->val->getSummary($__Context->widget_info->content_cut_size) ?></p>
						<?php }elseif($__Context->widget_info->option_view_arr[$__Context->i]=='regdate'){ ?>
							<p class="text_date"><?php echo $__Context->val->getRegdate("Y-m-d") ?></p>
						<?php } ?>
						<?php } ?>
					</a>
				</li><?php } ?>
			</ul><?php } ?>
		</div>
		
		
		
		<div id="newest_documents_s<?php echo $__Context->global['popsid'] ?>" class="tabs_content<?php if($__Context->widget_info->tab_view_arr[0]=='newestd'){ ?> tabs_active<?php } ?>">
			<ul>
				<?php if($__Context->widget_info->newest_documents&&count($__Context->widget_info->newest_documents))foreach($__Context->widget_info->newest_documents as $__Context->key=>$__Context->val){ ?><li class="newClear">
					<a href="<?php echo $__Context->val->getPermanentUrl() ?>">
						<?php for($__Context->i=0; $__Context->i<$__Context->optc; $__Context->i++){ ?>
						<?php if($__Context->widget_info->option_view_arr[$__Context->i]=='image'){ ?>
							<p class="tabs_thumb">
								<?php if($__Context->val->getThumbnail()){ ?><img src="<?php echo $__Context->val->getThumbnail($__Context->widget_info->thumbnail_width,$__Context->widget_info->thumbnail_height,crop) ?>" border="0" alt="" /><?php }else{ ?><span class="noimg" style="width:<?php echo $__Context->img_width ?>px; height:<?php echo $__Context->img_height ?>px"><i class="fa fa-camera icon-camera" style="line-height:<?php echo $__Context->img_height ?>px"></i></span><?php } ?>
							</p>
						<?php }elseif($__Context->widget_info->option_view_arr[$__Context->i]=='title'){ ?>
							<p class="text_title"><?php echo $__Context->val->getTitle($__Context->widget_info->subject_cut_size) ?></p>
						<?php }elseif($__Context->widget_info->option_view_arr[$__Context->i]=='content'){ ?>
							<p class="text_content"><?php echo $__Context->val->getSummary($__Context->widget_info->content_cut_size) ?></p>
						<?php }elseif($__Context->widget_info->option_view_arr[$__Context->i]=='regdate'){ ?>
							<p class="text_date"><?php echo $__Context->val->getRegdate("Y-m-d") ?></p>
						<?php } ?>
						<?php } ?>
					</a>
				</li><?php } ?>
			</ul>
		</div>
		
		
		
		<div id="newest_comments_s<?php echo $__Context->global['popsid'] ?>" class="tabs_content<?php if($__Context->widget_info->tab_view_arr[0]=='newestc'){ ?> tabs_active<?php } ?>">
			<ul>
				<?php if($__Context->widget_info->newest_comments&&count($__Context->widget_info->newest_comments))foreach($__Context->widget_info->newest_comments as $__Context->key=>$__Context->val){ ?><li class="newClear">
					<a href="<?php echo $__Context->val->getPermanentUrl() ?>">
						<p class="tabs_text">
							<span class="tabs_content2"><?php echo $__Context->val->getSummary($__Context->widget_info->comment_cut_size) ?></span>
							<span class="tabs_date2">&nbsp;&nbsp;<?php echo $__Context->val->getRegdate("Y-m-d") ?></span>
						</p>
					</a>
				</li><?php } ?>
			</ul>
		</div>
		
	</div>
</div>
<script>
jQuery(function($){
	var $popular = $("#popular<?php echo $__Context->global['popsid'] ?>"),
		$tabs_items = $popular.find(".tabs_items"),
		$tabs_itema = $tabs_items.find("a"),
		$tabs_inner = $popular.find(".tabs_inner");
	var $pds = $("#popular_documents_s<?php echo $__Context->global['popsid'] ?>"),
		$nds = $("#newest_documents_s<?php echo $__Context->global['popsid'] ?>"),
		$ncs = $("#newest_comments_s<?php echo $__Context->global['popsid'] ?>");
	function actTab($tid){
		$tabs_itema.removeClass("tabs_active");
		$tid.addClass("tabs_active");
	}
	function actItem($sid){
		$tabs_inner.find(".tabs_active").removeClass("tabs_active");
		$sid.addClass("tabs_active");
	}
	$tabs_itema.on("mouseover click",function(e){
		e.preventDefault();
		var $tid = $(this);
		actTab($tid);
	});
	$("#pd_link_s<?php echo $__Context->global['popsid'] ?>").on("mouseover click",function(e){
		e.preventDefault();
		actItem($pds);
	});
	$("#nd_link_s<?php echo $__Context->global['popsid'] ?>").on("mouseover click",function(e){
		e.preventDefault();
		actItem($nds);
	});
	$("#nc_link_s<?php echo $__Context->global['popsid'] ?>").on("mouseover click",function(e){
		e.preventDefault();
		actItem($ncs);
	});
});
</script>