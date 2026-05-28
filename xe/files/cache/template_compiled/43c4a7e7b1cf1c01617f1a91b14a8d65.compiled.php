<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/skins/sosi_memo/css/board.default.css--><?php $__tmp=array('modules/board/skins/sosi_memo/css/board.default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sosi_memo/css/clarity.default.css--><?php $__tmp=array('modules/board/skins/sosi_memo/css/clarity.default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sosi_memo/css/normalize.css--><?php $__tmp=array('modules/board/skins/sosi_memo/css/normalize.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->module_info->infi_page == 'infinityEdge'){ ?><!--#Meta:modules/board/skins/sosi_memo/js/jquery-ias.min.js--><?php $__tmp=array('modules/board/skins/sosi_memo/js/jquery-ias.min.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->module_info->infi_page == 'infinityEdge'){ ?><!--#Meta:modules/board/skins/sosi_memo/js/jquery.masonry.min.js--><?php $__tmp=array('modules/board/skins/sosi_memo/js/jquery.masonry.min.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<style type="text/css">
/* 커뮤니케이션 */
/* .pix-lulu { width:<?php echo ($__Context->module_info->pix_lulu)-($__Context->module_info->thumbnail_width)-11 ?>px } */ /* 셈네일 있을때 리스트 컨텐츠 크기 */
/* .pix-lulu-help { width:<?php echo ($__Context->module_info->pix_lulu) ?>px  } */ /* 썸네일 없을때 리스트 컨텐츠 크기 */
/* .pix-lulu-comment { width:<?php echo ($__Context->module_info->pix_lulu)-32 ?>px } */
/* .pix-lulu-notice { width:<?php echo ($__Context->module_info->pix_lulu)+57 ?>px } */
/* 리뷰 카드 */
.elise-notice { width:<?php echo ($__Context->module_info->elise_width)*2-26 ?>px}
.elise-width { width:<?php echo ($__Context->module_info->elise_width)-($__Context->module_info->spider_width)-40 ?>px} 
.elise-width-doran {  width:<?php echo ($__Context->module_info->elise_width)-30 ?>px }
.elise-list .elise-info  { height:<?php echo ($__Context->module_info->elise_height)-51 ?>px }
.elise-thumb,
.elise-thumb img { width:<?php echo $__Context->module_info->spider_width ?>px; height:<?php echo $__Context->module_info->spider_height ?>px; }
/* 스팟라이트 */
.spot-notice { width:<?php echo ($__Context->module_info->spot_width)-42 ?>px}
.spot-width { width:<?php echo ($__Context->module_info->spot_width)-($__Context->module_info->light_width)-20 ?>px }
.spot-width-light { width:<?php echo $__Context->module_info->spot_width ?>px }
.spot-thumb,
.spot-thumb img { width:<?php echo $__Context->module_info->light_width ?>px; height:<?php echo $__Context->module_info->light_height ?>px; }
</style>
<img class="zbxe_widget_output" widget="content" skin="updatenews" colorset="default" content_type="document" module_srls="2917881,2917952,2917949,2917887,2917893,2917885,2918074,2917959,2917966" list_type="normal" tab_type="none" markup_type="table" list_count="15" page_count="1" option_view="title,regdate,nickname" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="Y" show_icon="Y" duration_new="24" order_target="regdate" order_type="desc" thumbnail_type="crop" />
<?php if($__Context->order_type == "desc"){ ?>
    <?php  $__Context->order_type = "asc";  ?>
<?php }else{ ?>
    <?php  $__Context->order_type = "desc";  ?>
<?php } ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php  $__Context->cate_list = array(); $__Context->current_key = null;  ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
	<?php if(!$__Context->val->depth){ ?>
		<?php 
			$__Context->cate_list[$__Context->key] = $__Context->val;
			$__Context->cate_list[$__Context->key]->children = array();
			$__Context->current_key = $__Context->key;
		 ?>
	<?php }elseif($__Context->current_key){ ?>
		<?php  $__Context->cate_list[$__Context->current_key]->children[] = $__Context->val  ?>
	<?php } ?>
<?php } ?>
<div class="board">
	<div class="clarity-header cfixsosi sosi">
    
        <div class="header-text"><a href="<?php echo getUrl('document_srl','') ?>"><?php echo $__Context->module_info->header_title ?></a></div>	
        
        <div class="relative right cfixsosi sosi">
            <a class="clarity-white right arrow mr-f2" href="#"><span><?php echo number_format($__Context->total_count) ?></span></a>     
            <a class="clarity-white right" href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" ><span>@<?php echo $__Context->lang->cmd_write ?></span></a>
            <a class="clarity-white right" title="<?php echo $__Context->lang->tag ?>" href="<?php echo getUrl('act','dispBoardTagList') ?>"><span class="cla-icon cla-tag"><?php echo $__Context->lang->tag ?></span></a>
            
            <?php if($__Context->grant->manager){ ?><a class="clarity-white right" href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><span><?php echo $__Context->lang->cmd_setup ?></span></a><?php } ?>
        	<?php if($__Context->grant->manager){ ?><a class="clarity-white right" href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument'); return false;">
            	<span><?php echo $__Context->lang->cmd_manage_document ?></span>
            </a><?php } ?>
           
        </div><!-- .relative -->
	
	</div><!-- .clarity-header -->
