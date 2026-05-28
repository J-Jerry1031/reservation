<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','_setting.html') ?>
<!-- css -->
<!--#Meta:modules/attendance/m.skins/default/css/default.css--><?php $__tmp=array('modules/attendance/m.skins/default/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->mi->header_text && $__Context->mi->headertextdisplay =='Y'){ ?><div class="">
<?php echo $__Context->mi->header_text ?>
</div><?php } ?>
<div class="att">
