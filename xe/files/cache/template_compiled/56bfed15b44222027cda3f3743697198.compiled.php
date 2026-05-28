<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/ding_member_ranking/skins/Ranking_Style4/css/Ding_Member4.css--><?php $__tmp=array('widgets/ding_member_ranking/skins/Ranking_Style4/css/Ding_Member4.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="<?php echo $__Context->rank_option['CSS_Title'] ?>4" style="<?php echo $__Context->rank_option['skin4_style_total_border'] ?>">
    <?php if($__Context->rank_option['title_view'] == "view"){ ?>
    <div class="rank-title-view" style="<?php echo $__Context->rank_option['title_center'] ?> <?php echo $__Context->rank_option['skin4_style_title_border'] ?>">
        <div class="rank-title" style="<?php echo $__Context->rank_option['font_size'] ?> <?php echo $__Context->rank_option['size'] ?> <?php echo $__Context->rank_option['color'] ?> <?php echo $__Context->rank_option['font_color'] ?>">
            <?php echo $__Context->rank_option[widget_title] ?>
        </div>
    </div>
    <?php } ?>
    <ul class="rank-list-view">
        <?php for($__Context->i= 0; $__Context->i < $__Context->rank_option[count]; $__Context->i++){ ?>
<?php if($__Context->rank_array[$__Context->i]['list_count']> 0){ ?>
        <?php if($__Context->i < 3 && $__Context->rank_option['image'] == "crown"){ ?>
        <li class="rank-crown-list">
            <?php }else{ ?>
        <li class="rank-list">
            <?php } ?>
            <div class="rank-order" style="<?php echo $__Context->rank_option[order_width] ?>">
                <?php if($__Context->i < 3){ ?>
                <div class="ding-rank-image ding-image-rank<?php echo $__Context->i+1 ?>"></div>
                <?php }else{ ?>
                <div class="ding-rank-number"><?php echo $__Context->i+1 ?></div>
                <?php } ?>
            </div>
            <?php if($__Context->i < 3 && $__Context->rank_option['image'] == "crown"){ ?>
            <div class="list-content">
                <?php }else{ ?>
                <div>
                    <?php } ?>
                    <div class="list-title">
                        <a class="aTag-none member_<?php echo $__Context->rank_array[$__Context->i]['member_srl'] ?>" href="#" onclick="return false">
                            <?php echo $__Context->rank_array[$__Context->i]['nick_name'] ?>
                        </a>
                        <?php if($__Context->rank_option[use_level_icon] == "use"){ ?>
                            <img class="level_image" width="13px" height="13px" src="<?php echo $__Context->level_icon ?>/<?php echo $__Context->rank_array[$__Context->i]['level'] ?>.gif">
                        <?php } ?>
                    </div>
                    <div class="list-nickname" style="<?php echo $__Context->rank_option[value_nick_width] ?>">
                        <?php echo $__Context->rank_option[value_nick] ?>
                    </div>
                    <div class="list-nickname" style="<?php echo $__Context->rank_option[value_width] ?>">
                        <?php echo $__Context->rank_array[$__Context->i]['list_count'] ?>
                    </div>
                </div>
        </li>
<?php } ?>
        <?php } ?>
    </ul>
</div>