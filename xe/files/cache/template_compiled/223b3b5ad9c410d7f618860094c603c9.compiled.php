<?php if(!defined("__XE__"))exit;
if($__Context->link_url && $__Context->link_url != ""){ ?>
<a href="<?php echo $__Context->link_url ?>" target="<?php echo $__Context->target ?>">
<?php } ?>
<img src="<?php echo $__Context->image_path ?>" <?php echo $__Context->img_width;
echo $__Context->img_height ?>>
<?php if($__Context->link_url && $__Context->link_url != ""){ ?>
</a>
<?php } ?>
