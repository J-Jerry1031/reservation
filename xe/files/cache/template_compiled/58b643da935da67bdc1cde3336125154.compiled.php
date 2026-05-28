<?php if(!defined("__XE__"))exit;?><div class="updatenews">
  <div class="updatenews_obj">
    <div class="updatenews_box">
      <?php $__Context->_idx=0 ?>
      <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
        <?php if($__Context->_idx < $__Context->widget_info->list_count){ ?>
          <div>
            <?php if($__Context->widget_info->option_view_arr&&count($__Context->widget_info->option_view_arr))foreach($__Context->widget_info->option_view_arr as $__Context->k => $__Context->v){ ?>
              <?php if($__Context->v=='title'){ ?>
                <?php if($__Context->widget_info->show_browser_title=='Y' && $__Context->item->getBrowserTitle()){ ?>
                  <a class="updatenews_board" href="<?php if($__Context->item->contents_link){;
echo $__Context->item->contents_link;
}else{;
echo getSiteUrl($__Context->item->domain, '', 'mid', $__Context->item->get('mid'));
} ?>"><strong>* <?php echo $__Context->item->getBrowserTitle() ?></strong></a>
                <?php } ?>
                <?php if($__Context->widget_info->show_category=='Y' && $__Context->item->get('category_srl') ){ ?>
                  <a class="updatenews_category" href="<?php echo getSiteUrl($__Context->item->domain,'','mid',$__Context->item->get('mid'),'category',$__Context->item->get('category_srl')) ?>"><strong> <?php echo $__Context->item->getCategory() ?></strong></a>
                <?php } ?>
                <a class="updatenews_title" href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
                <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
                  <a class="updatenews_comment" title="Comments" href="<?php echo $__Context->item->getLink() ?>#comment">[<?php echo $__Context->item->getCommentCount() ?>]</a>
                <?php } ?>
                <?php if($__Context->widget_info->show_trackback_count=='Y' && $__Context->item->getTrackbackCount()){ ?>
                  <a class="updatenews_trackback" title="Trackbacks" href="<?php echo $__Context->item->getLink() ?>#trackback">[<?php echo $__Context->item->getTrackbackCount() ?>]</a>
                <?php } ?>
                <?php if($__Context->widget_info->show_icon=='Y'){ ?>
                  <span class="updatenews_icon"><?php echo $__Context->item->printExtraImages() ?></span>
                <?php } ?>
              <?php }else if($__Context->v=='nickname'){ ?>
                 <span class="updatenews_author">- <a <?php if($__Context->item->getMemberSrl()){ ?>href="#" onclick="return false;" class="member_<?php echo $__Context->item->getMemberSrl() ?>"<?php }elseif($__Context->item->getAuthorSite()){ ?>href="<?php echo $__Context->item->getAuthorSite() ?>" onclick="window.open(this.href); return false;" class="member"<?php }else{ ?>href="#" onclick="return false;" class="member"<?php } ?>><?php echo $__Context->item->getNickName() ?></a></span>
              <?php }else if($__Context->v=='regdate'){ ?>
                <span class="updatenews_date"><<?php echo $__Context->item->getRegdate("Y-m-d") ?></span>
              <?php } ?>
            <?php } ?>
          </div>
        <?php } ?>
        <?php $__Context->_idx++ ?>
      <?php } ?>
    </div>
  </div>
</div>