<?php
if(!defined("__ZBXE__")) exit();

/**
 * @file soo_add_content.addon.php
 * @brief 게시글 추가내용 삽입
 * @nick_name misol(원저작자), 키스투엑스이(인계받음)
 * @license GPL v3
 **/

$module_info = Context::get('module_info');
if($called_position == 'before_display_content' && Context::getResponseMethod() == 'HTML' && $module_info->module=='board') { //     .
	$output = str_replace("<!--BeforeDocument(", $addon_info->soo_top."<!--BeforeDocument(", $output);
	$output = str_replace("<!--AfterDocument(", $addon_info->soo_bottom."<!--AfterDocument(", $output);
}