<?php if(!defined("__XE__"))exit;
if($__Context->_COOKIE['ding_fixed_banner'] == null || $__Context->_COOKIE['ding_fixed_banner'] == ""){ ?>
<!--#Meta:addons/Ding_Fixed_Banner/css/Ding_Fixed_Banner.css--><?php $__tmp=array('addons/Ding_Fixed_Banner/css/Ding_Fixed_Banner.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
    var ding = ding || {}; // Ding namespace.
    ding.fixedNotice = ding.fixedNotice || {};
    ding.propertys = ding.propertys || {};
    ding.fixedNotice.propertys = {
        <?php if($__Context->addon_info->direction == "up"){ ?>
        context : '<?php echo $__Context->addon_info->context ?>',
        <?php }else{ ?>
        context : '',
        <?php } ?>
        animationSpped : <?php echo $__Context->addon_info->animation_speed ?>,
        cookieTime : <?php echo $__Context->addon_info->cookie_time ?>,
        deleteClassName : "<?php echo $__Context->addon_info->delete_class_name ?>",
        direction : "<?php echo $__Context->addon_info->direction ?>",
        defaults : "<?php echo $__Context->addon_info->default ?>",
        defaultColor : "<?php echo $__Context->addon_info->default_color ?>",
        z_index : <?php echo $__Context->addon_info->z_index ?>,
        height : "<?php echo $__Context->addon_info->h ?>",
        colors: "<?php echo $__Context->addon_info->colors ?>",
        bottom_position: "<?php echo $__Context->addon_info->bottom_position ?>",
        button_multi_position : "<?php echo $__Context->addon_info->button_multi_position ?>",
        target_css: "<?php echo $__Context->addon_info->target_css ?>",
        target_css_top: "<?php echo $__Context->addon_info->target_css_top ?>",
        inner_html: "<?php echo $__Context->addon_info->inner_html ?>",
        animation_decision: "<?php echo $__Context->addon_info->animation_decision ?>"
    };
</script>
<style> <?php echo $__Context->addon_info->css ?> </style>
<?php if($__Context->addon_info->direction == "down"){ ?>
<div class="ding-fixed-container"
    <?php if($__Context->addon_info->h && $__Context->addon_info->z_index && $__Context->addon_info->colors){ ?> style="z-index:<?php echo $__Context->addon_info->z_index ?>; height:<?php echo $__Context->addon_info->h ?>; min-height:<?php echo $__Context->addon_info->h ?>; max-height:<?php echo $__Context->addon_info->h ?>; background-color:<?php echo $__Context->addon_info->colors ?>"<?php } ?>>
<?php echo $__Context->addon_info->context ?>
<?php if($__Context->addon_info->default=="enable"){ ?>
    <svg class="close" style="<?php echo $__Context->addon_info->button_multi_position ?>;">
        <line style="fill:none;stroke:<?php echo $__Context->addon_info->default_color ?>;stroke-miterlimit:10;" x1="0.048" y1="0.048" x2="34.064"
              y2="34.064"/>
        <line style="fill:none;stroke:<?php echo $__Context->addon_info->default_color ?>;stroke-miterlimit:10;" x1="34.064" y1="0.048" x2="0.048"
              y2="34.064"/>
    </svg>
<?php } ?>
</div>
<?php } ?>
<script src="/xe/addons/Ding_Fixed_Banner/js/Ding_Fixed_Banner.js"></script>
<?php } ?>