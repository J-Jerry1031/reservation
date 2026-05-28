<?php if(!defined("__XE__"))exit;
if($__Context->widget_info->page_count || count($__Context->widget_info->tab)){ ?><!--#Meta:widgets/content/skins/Door_cpB/js/content_widget.js--><?php $__tmp=array('widgets/content/skins/Door_cpB/js/content_widget.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:widgets/content/skins/Door_cpB/css/widget.css--><?php $__tmp=array('widgets/content/skins/Door_cpB/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->widget_info->list_type == 'gallery'){ ?>
<!--#Meta:widgets/content/skins/Door_cpB/css/owl.carousel.css--><?php $__tmp=array('widgets/content/skins/Door_cpB/css/owl.carousel.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/content/skins/Door_cpB/css/owl.theme.css--><?php $__tmp=array('widgets/content/skins/Door_cpB/css/owl.theme.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/content/skins/Door_cpB/js/owl.carousel.min.js--><?php $__tmp=array('widgets/content/skins/Door_cpB/js/owl.carousel.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php if($__Context->widget_info->list_type == 'image_title'){ ?>
<!--#Meta:widgets/content/skins/Door_cpB/js/jcarousellite.js--><?php $__tmp=array('widgets/content/skins/Door_cpB/js/jcarousellite.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<div class="cpB_Container widgetContainer<?php if($__Context->colorset=='black'){ ?> black<?php } ?>">
    <?php if($__Context->widget_info->tab_type  == "tab_left"){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','_tab_left.html') ?>
    <?php }elseif($__Context->widget_info->tab_type == "tab_top"){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','_tab_top.html') ?>
    <?php }else{ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','_tab_none.html') ?>
    <?php } ?>
</div>
