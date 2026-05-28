<?php if(!defined("__XE__"))exit;
$__Context->mi = $__Context->module_info;
	$__Context->cd = $__Context->config;
	$__Context->lgi = $__Context->logged_info;
	$__Context->lang->yyear = '년';
	$__Context->lang->mmo = '월';
	$__Context->lang->dday = '일';
 ?>
<img class="zbxe_widget_output" widget="content"  skin="updatenews" colorset="default" content_type="document" module_srls="2917881,2917952,2917949,2917887,2917893,2917885,2918074,2917959,2917966" list_type="normal" tab_type="none" markup_type="table" list_count="15" page_count="1" option_view="title,regdate,nickname" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="Y" show_icon="Y" duration_new="24" order_target="regdate" order_type="desc" thumbnail_type="crop" />
<!--#Meta:modules/attendance/skins/default/css/gray.css--><?php $__tmp=array('modules/attendance/skins/default/css/gray.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/attendance/skins/default/css/font-awesome.css--><?php $__tmp=array('modules/attendance/skins/default/css/font-awesome.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section class="xl">
	<ul class="nav nav-tabs">
		<li<?php if($__Context->act!='dispAttendanceBoardGiftList' && $__Context->act != 'dispAttendanceModifyContinuous'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('','mid','attendance','act','dispAttendanceBoard') ?>">출석부</a>
		</li>
		<?php if($__Context->is_logged){ ?><li<?php if($__Context->act=='dispAttendanceBoardGiftList'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('','mid','attendance','act','dispAttendanceBoardGiftList') ?>">받은선물리스트</a>
		</li><?php } ?>
		<?php if($__Context->is_logged && $__Context->act=='dispAttendanceModifyContinuous' && $__Context->logged_info->is_admin=='Y'){ ?><li class="active"|cone="$act=='dispAttendanceModifyContinuous'">
			<a href="<?php echo getUrl('','mid','attendance','act','dispAttendanceModifyContinuous') ?>">연속출석 수정</a>
		</li><?php } ?>
	</ul>
	<?php if($__Context->module_info->header_text){ ?><div class="att_header">
		<div class="att_header_title">
			<span><?php echo $__Context->module_info->header_text ?></span>
		</div>
	</div><?php } ?>
	<div class="att">
