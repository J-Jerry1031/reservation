<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/tpl/filter','delete_board.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/board/tpl/js/board_admin.js--><?php $__tmp=array('modules/board/tpl/js/board_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/tpl','header.html') ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_board)" class="section"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
    <h1><?php echo $__Context->lang->confirm_delete ?></h1>
	<dl class="x_dl-horizontal">
		<dt><?php echo $__Context->lang->module_name ?></dt>
		<dd><?php echo $__Context->module_info->mid ?></dd>
		<dt><?php echo $__Context->lang->module ?></dt>
		<dd><?php echo $__Context->module_info->module ?></dd>
		<dt><?php echo $__Context->lang->document_count ?></dt>
		<dd><?php echo $__Context->module_info->document_count ?></dd>
	</dl>
	<div class="btnArea">
		<a href="<?php echo getUrl('act','dispBoardAdminContent') ?>" class="x_btn x_pull-left"><?php echo $__Context->lang->cmd_back ?></a>
		<span><input class="x_btn x_btn-danger" type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" /></span>
	</div>
</form>
