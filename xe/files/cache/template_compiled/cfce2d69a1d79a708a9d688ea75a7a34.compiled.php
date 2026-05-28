<?php if(!defined("__XE__"))exit;
if($__Context->widget_info->list_type == "gallery"){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','gallery.html') ?>
<?php }elseif($__Context->widget_info->list_type == "image_title"){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','image_title.html') ?>
<?php }elseif($__Context->widget_info->list_type == "image_title_content"){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','image_title_content.html') ?>
<?php }elseif($__Context->widget_info->list_type == "title_content"){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','title_content.html') ?>
<?php }else{ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/Door_cpB','normal.html') ?>
<?php } ?>
