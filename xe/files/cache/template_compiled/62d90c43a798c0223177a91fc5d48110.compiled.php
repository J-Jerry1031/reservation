<?php if(!defined("__XE__"))exit;
if(!$__Context->colorset){;
$__Context->colorset = 'default';
} ?>
<!--#Meta:widgets/content/skins/updatenews/js/updatenews.js--><?php $__tmp=array('widgets/content/skins/updatenews/js/updatenews.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->idx = 0 ?>
<?php if($__Context->colorset == 'default'){ ?>
  <!--#Meta:widgets/content/skins/updatenews/css/default.css--><?php $__tmp=array('widgets/content/skins/updatenews/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
  <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/updatenews','default.html') ?>
  <?php  $__Context->idx++ ?>
<?php } ?>
<?php if($__Context->colorset == 'white'){ ?>
  <!--#Meta:widgets/content/skins/updatenews/css/white.css--><?php $__tmp=array('widgets/content/skins/updatenews/css/white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
  <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/updatenews','white.html') ?>
  <?php  $__Context->idx++ ?>
<?php } ?>
<?php if($__Context->idx == 0){ ?>
  해당 Colorset이 존재하지 않습니다.
<?php } ?>