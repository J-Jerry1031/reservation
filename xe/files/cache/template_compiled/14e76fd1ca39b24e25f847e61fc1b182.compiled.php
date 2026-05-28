<?php if(!defined("__XE__"))exit;
if(!$__Context->mi->gall_tl_font){;
$__Context->mi->gall_tl_font = np;
} ?>
<style type="text/css">
#tmb_lst li{float:<?php echo $__Context->mi->gall_align ?>;width:<?php echo $__Context->mi->thumbnail_width+40 ?>px;height:<?php echo $__Context->mi->thumbnail_height+80 ?>px;width:<?php echo $__Context->mi->li_width ?>px;height:<?php echo $__Context->mi->li_height ?>px}
#tmb_lst .no_img{width:<?php echo $__Context->mi->thumbnail_width ?>px;<?php if($__Context->mi->thumbnail_type=='crop'){ ?>height:<?php echo $__Context->mi->thumbnail_height ?>px;line-height:<?php echo $__Context->mi->thumbnail_height ?>px<?php }else{ ?>height:<?php echo $__Context->mi->thumbnail_width ?>px;line-height:<?php echo $__Context->mi->thumbnail_width ?>px<?php } ?>}
#tmb_lst .deco_img{background-image:url(<?php echo $__Context->mi->deco_img ?>)}
#tmb_lst .tmb_wrp,#tmb_lst.frame_style .tmb_wrp{max-width:<?php echo $__Context->mi->thumbnail_width ?>px;<?php echo $__Context->mi->thumb_css ?> }
<?php if($__Context->mi->tmb_hover_bg){ ?>
.tmb_wrp .info{background:#<?php echo $__Context->mi->color ?>;color:#FFF;<?php if($__Context->mi->tmb_hover_bg=='3'){ ?>filter:alpha(opacity=80);opacity:.8<?php } ?>}
<?php } ?>
<?php if($__Context->mi->gall_deg){ ?>
#tmb_lst .tmb_wrp{ -moz-transition:-moz-transform .5s;-webkit-transition:-webkit-transform .5s;transition:transform .5s}
#tmb_lst .tmb_wrp:hover{z-index:1;-ms-transform:rotate(0) !important;-moz-transform:rotate(0) !important;-webkit-transform:rotate(0) !important;transform:rotate(0) !important}
<?php } ?>
@media screen and (max-width:533px){
<?php if($__Context->mi->thumbnail_width > 280){ ?>
#tmb_lst li{width:100%}
<?php }elseif($__Context->mi->thumbnail_width > 140){ ?>
#tmb_lst li{width:46%;padding:0 2% 4%}
<?php }else{ ?>
#tmb_lst li{width:33%}
<?php } ?>
}
</style>
<?php if($__Context->mi->gall_deg){ ?><script type="text/javascript">
jQuery(function($){
	$('#tmb_lst .tmb_wrp').each(function(){
		var m = Math.floor(Math.random()*<?php echo $__Context->mi->gall_deg*2 ?>-<?php echo $__Context->mi->gall_deg ?>);
		$(this).css({
			'msTransform':'rotate('+m+'deg)',
			'-moz-transform':'rotate('+m+'deg)',
			'-webkit-transform':'rotate('+m+'deg)'
		});
	});
});
</script><?php } ?>
<?php if($__Context->notice_list && $__Context->mi->notice_style=='2'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5_youtube','_notice.html');
} ?>
<ul id="tmb_lst" class="bd_lst<?php if($__Context->mi->gall_style=='2'){ ?> frame_style<?php };
if(!$__Context->mi->tmb_effect){ ?> img_load<?php };
if($__Context->mi->tmb_effect=='2'){ ?> img_load2<?php };
if($__Context->mi->tmb_hover_bg=='2'){ ?> tmb_bg2<?php }elseif($__Context->mi->tmb_hover_bg=='3'){ ?> tmb_bg3<?php } ?> clear">
<?php if($__Context->notice_list && !$__Context->mi->notice_style){;
if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><li class="notice">
	<div class="tmb_wrp ribbon_v<?php echo $__Context->mi->ribbon_style ?>">
		
		<?php if($__Context->mi->gall_shadow!='N'){ ?>
		<i class="bg fixed"></i><i class="bg2 fixed"></i>
		<img class="ie8_only shadow" src="/xe/modules/board/skins/sketchbook5_youtube/modules/board/skins/sketchbook5/img/ie/shadow.png" alt="" />
		<?php } ?>
		
		<?php if(!$__Context->document->thumbnailExists()){ ?><span class="no_img tmb">No Image</span><?php } ?>
		<?php if($__Context->document->thumbnailExists()){;
if($__Context->mi->tmb_effect=='2'){ ?><span class="no_img loading"></span><?php } ?><img class="tmb" src="<?php echo $__Context->document->getThumbnail($__Context->mi->thumbnail_width, $__Context->mi->thumbnail_height, $__Context->mi->thumbnail_type) ?>" alt="" /><?php } ?>
		
		<?php if(!$__Context->mi->gallery_tl && $__Context->mi->gall_style=='2'){ ?><p class="frame_tl <?php echo $__Context->mi->gall_tl_font ?>"><?php echo $__Context->document->getTitle($__Context->mi->gall_tl_cut) ?></p><?php } ?>
		
		<span class="ribbon nnu notice"><i>notice</i></span>
		
		<?php if($__Context->mi->trans_window!='N'){ ?><span class="trans_window fixed">
			<?php if($__Context->mi->trans_window!='date'){ ?>by <?php echo $__Context->document->getNickName();
} ?>
			<?php if($__Context->mi->trans_window=='date'){ ?><b><?php echo $__Context->document->getRegdate("Y.m.d") ?></b><?php } ?>
		</span><?php } ?>
		
		<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>" class="fixed">
			<?php if($__Context->mi->tmb_hover!='N'){ ?><span class="info_wrp">
				<span class="info st<?php if($__Context->mi->tmb_hover=='R'){;
echo rand(1,4);
}else{;
echo $__Context->mi->tmb_hover;
} ?>">
					<span class="padding">
						<?php if($__Context->mi->gallery_tl=='N'){ ?><b class="tl"><?php echo $__Context->document->getTitle($__Context->mi->gall_tl_cut) ?></b><?php } ?>
						<?php if($__Context->list_config['regdate']){ ?><b class="tl"><?php echo $__Context->document->getRegdate("Y/m/d") ?></b><?php } ?>
						<?php if($__Context->list_config['nick_name']){ ?>by <b><?php echo $__Context->document->getNickName() ?></b><br /><?php } ?>
						<?php if($__Context->mi->use_category=='Y' && $__Context->document->get('category_srl')){ ?>in <b><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></b><br /><?php } ?>
						<span><?php if($__Context->list_config['readed_count']){ ?>Views <b><?php echo $__Context->document->get('readed_count') ?></b>&nbsp;<?php } ?> <?php if($__Context->list_config['voted_count']){ ?>Like <b><?php echo $__Context->document->get('voted_count') ?></b><?php } ?></span>
						<?php if($__Context->document->getCommentCount()){ ?>Reply <b><?php echo $__Context->document->getCommentCount() ?></b><?php } ?>
					</span>
				</span>
			</span><?php } ?>
		</a>
		
		<?php if(!$__Context->mi->deco){ ?><i class="ico_32px deco1 fixed"></i><i class="ico_32px deco2 fixed"></i><?php } ?>
		<?php if($__Context->mi->deco=='2'){ ?><i class="deco deco3 fixed"></i><?php } ?>
		<?php if($__Context->mi->deco_img){ ?><i class="deco deco_img fixed"></i><?php } ?>
	</div>
	
	<?php if(!$__Context->mi->gallery_tl && !$__Context->mi->gall_style){ ?><p><b><?php echo $__Context->document->getTitle($__Context->mi->gall_tl_cut) ?></b> <?php if(@in_array(gall,$__Context->mi->cmt_count)){ ?><a class="replyNum" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>#comment"><?php echo $__Context->document->getCommentCount() ?></a><?php } ?> <?php if(@in_array(gall,$__Context->mi->ext_img)){ ?><span class="extraimages"><?php echo $__Context->document->printExtraImages(60*60*$__Context->mi->duration_new) ?></span><?php } ?> <?php if($__Context->grant->manager){ ?><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check this" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><?php } ?></p><?php } ?>
</li><?php }} ?>
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><li<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> class="select"<?php } ?>>
	<div class="tmb_wrp ribbon_v<?php echo $__Context->mi->ribbon_style ?>">
		
		<?php if($__Context->mi->gall_shadow!='N'){ ?>
		<i class="bg fixed"></i><i class="bg2 fixed"></i>
		<img class="ie8_only shadow" src="/xe/modules/board/skins/sketchbook5_youtube/modules/board/skins/sketchbook5/img/ie/shadow.png" alt="" />
		<?php } ?>
		
        <?php if(!$__Context->document->getExtraValueHTML(1)){ ?><span class="no_img tmb">No Image</span><?php } ?>
        <?php if($__Context->document->getExtraValueHTML(1)){;
if($__Context->mi->tmb_effect=='2'){ ?><span class="no_img loading"></span><?php } ?><img class="tmb" src="<?php echo str_replace('http://youtu.be/', 'http://img.youtube.com/vi/', $__Context->document->getExtraValueHTML(1)) ?>/0.jpg" width="<?php echo $__Context->mi->zine_thumb_width ?>" height="<?php echo $__Context->mi->zine_thumb_height ?>" border="0" alt="" /><?php } ?>
		
		<?php if(!$__Context->mi->gallery_tl && $__Context->mi->gall_style=='2'){ ?><p class="frame_tl <?php echo $__Context->mi->gall_tl_font ?>"><?php echo $__Context->document->getTitle($__Context->mi->gall_tl_cut) ?></p><?php } ?>
		
		<?php if($__Context->mi->gall_ribbon!='N'){ ?>
		<?php if(!$__Context->mi->gall_ribbon || $__Context->mi->gall_ribbon=='new_update'){ ?>
		<?php if((int)($__Context->document->getRegdate('YmdHis')>date("YmdHis", time()-$__Context->mi->duration_new*60*60))){ ?>
		<span class="ribbon nnu new"><i>new</i></span>
		<?php }elseif((int)(zdate($__Context->document->get('last_update'),'YmdHis')>date("YmdHis", time()-$__Context->mi->duration_new*60*60))){ ?>
		<span class="ribbon nnu update"><i>update</i></span>
		<?php }else{ ?>
		<?php if(!$__Context->mi->gall_ribbon){ ?><span class="ribbon"><i class="date"><b><?php echo $__Context->document->getRegdate("d") ?></b><small><?php echo $__Context->document->getRegdate("M") ?></small></i></span><?php } ?>
		<?php } ?>
		<?php } ?>
		<?php if($__Context->mi->gall_ribbon && $__Context->mi->gall_ribbon!='new_update'){ ?><span class="ribbon">
			<?php if($__Context->mi->gall_ribbon=='cate' && $__Context->document->get('category_srl')){ ?><i class="cate"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></i><?php } ?>
			<?php if($__Context->mi->gall_ribbon=='date'){ ?><i class="date"><b><?php echo $__Context->document->getRegdate("d") ?></b><small><?php echo $__Context->document->getRegdate("M") ?></small></i><?php } ?>
			<?php if($__Context->mi->gall_ribbon=='read'){ ?><i><b><?php echo $__Context->document->get('readed_count') ?></b><small>Views</small></i><?php } ?>
			<?php if($__Context->mi->gall_ribbon=='vote'){ ?><i><b><?php echo $__Context->document->get('voted_count') ?></b><small>Likes</small></i><?php } ?>
			<?php if($__Context->mi->gall_ribbon=='cmt'){ ?><i><b><?php echo $__Context->document->getCommentCount() ?></b><small>Replies</small></i><?php } ?>
			<?php if($__Context->mi->gall_ribbon=='extra'){ ?><i><?php echo $__Context->document->getExtraValueHTML($__Context->mi->extra_num) ?><!--<small><?php $__Context->extravar_list = $__Context->document->getExtraVars();
echo $__Context->extravar_list[$__Context->mi->extra_num]->name ?></small>--></i><?php } ?>
		</span><?php } ?>
		<?php } ?>
		
		<?php if($__Context->mi->trans_window!='N'){ ?><div class="trans_window fixed">
			<?php if(!$__Context->mi->trans_window){ ?>by <?php echo $__Context->document->getNickName();
} ?>
			<?php if($__Context->mi->trans_window=='date'){ ?><b><?php echo $__Context->document->getRegdate("Y.m.d") ?></b><?php } ?>
			<?php if($__Context->mi->trans_window=='cate' && $__Context->document->get('category_srl')){ ?>Category : <?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title;
} ?>
			<?php if($__Context->mi->trans_window=='read'){ ?>Views : <?php echo $__Context->document->get('readed_count');
} ?>
			<?php if($__Context->mi->trans_window=='vote'){ ?>Likes : <?php echo $__Context->document->get('voted_count');
} ?>
			<?php if($__Context->mi->trans_window=='cmt'){ ?>Replies : <?php echo $__Context->document->getCommentCount();
} ?>
			<?php if($__Context->mi->trans_window=='extra'){;
$__Context->extravar_list = $__Context->document->getExtraVars();
echo $__Context->extravar_list[$__Context->mi->extra_num2]->name ?> : <?php echo $__Context->document->getExtraValueHTML($__Context->mi->extra_num2);
} ?>
		</div><?php } ?>
		
		<a class="hx fixed" <?php if(!$__Context->mi->link_board){ ?>href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle,'cpage','') ?>"<?php }else{ ?>href="<?php echo $__Context->document->getExtraEidValue('link_url') ?>" target="_blank"<?php } ?> data-viewer="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle','viewer','page','') ?>">
			<?php if($__Context->mi->tmb_hover!='N'){ ?><span class="info_wrp">
				<span class="info st<?php if($__Context->mi->tmb_hover=='R'){;
echo rand(1,4);
}else{;
echo $__Context->mi->tmb_hover;
} ?>">
					<span class="padding">
						<?php if($__Context->mi->gallery_tl=='N'){ ?><b class="tl"><?php echo $__Context->document->getTitle($__Context->mi->gall_tl_cut) ?></b><?php } ?>
						<?php if($__Context->list_config['regdate']){ ?><b class="tl"><?php echo $__Context->document->getRegdate("Y/m/d") ?></b><?php } ?>
						<?php if($__Context->list_config['nick_name']){ ?>by <b><?php echo $__Context->document->getNickName() ?></b><br /><?php } ?>
						<?php if($__Context->mi->use_category=='Y' && $__Context->document->get('category_srl')){ ?>in <b><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></b><br /><?php } ?>
						<span><?php if($__Context->list_config['readed_count']){ ?>Views <b><?php echo $__Context->document->get('readed_count') ?></b>&nbsp;<?php } ?> <?php if($__Context->list_config['voted_count']){ ?>Like <b><?php echo $__Context->document->get('voted_count') ?></b><?php } ?></span>
						<?php if($__Context->document->getCommentCount()){ ?>Reply <b><?php echo $__Context->document->getCommentCount() ?></b><?php } ?>
					</span>
				</span>
			</span><?php } ?>
		</a>
		
		<?php if(!$__Context->mi->deco){ ?><i class="ico_32px deco1 fixed"></i><i class="ico_32px deco2 fixed"></i><?php } ?>
		<?php if($__Context->mi->deco=='2'){ ?><i class="deco deco3 fixed"></i><?php } ?>
		<?php if($__Context->mi->deco_img){ ?><i class="deco deco_img fixed"></i><?php } ?>
	</div>
	
	<?php if(!$__Context->mi->gallery_tl && !$__Context->mi->gall_style){ ?><p><b><?php echo $__Context->document->getTitle($__Context->mi->gall_tl_cut) ?></b> <?php if(@in_array(gall,$__Context->mi->cmt_count)){ ?><a class="replyNum" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>#comment"><?php echo $__Context->document->getCommentCount() ?></a><?php } ?> <?php if(@in_array(gall,$__Context->mi->ext_img)){ ?><span class="extraimages"><?php echo $__Context->document->printExtraImages(60*60*$__Context->mi->duration_new) ?></span><?php } ?> <?php if($__Context->grant->manager){ ?><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check this" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><?php } ?></p><?php } ?>
</li><?php } ?>
<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><li><?php echo $__Context->lang->no_documents ?></li><?php } ?>
</ul>