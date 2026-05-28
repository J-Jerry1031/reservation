<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->_attendance_env_agreement == 'NULL'){ ?><div style="margin-top:20px;">
  <form action="<?php echo getUrl('') ?>" method="post" class="message info x_clearfix"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
   <input type="hidden" name="module" value="attendance" />
   <input type="hidden" name="act" value="procAttendanceAdminEnviromentGatheringAgreement" />
    <h2><span class="x_label x_label-important">도와주세요!</span> 사용 환경 정보 제공 동의</h2>
    <p>'출석부'는 <a href="http://ko.wikipedia.org/wiki/자유소프트웨어" target="_blank">자유소프트웨어</a>로 제공하고 있습니다.</p>
   <p>'출석부'는 사용자의 버그 보고, 의견 제출을 통해 공동의 힘으로 발전하고 있습니다.<br>'제공 동의'를 선택하면 아래와 같은 항목이 전송되며, 출석부의 기능을 개선하는데 참고하겠습니다. 감사합니다.</p>
   <ul>
     <li>이 사이트의 도메인</li>
      <li>출석부의 버전</li>
    <li>XE 버전</li>
      <li>PHP 버전</li>
  </ul>
   <div class="x_pull-right" style="margin-bottom:10px">
    <button type="submit" name="is_agree" value="Y" class="x_btn x_btn-small x_btn-primary">제공 동의</button>
    <button type="submit" name="is_agree" value="N" class="x_btn x_btn-small">제공 안 함</button>
   </div>
  </form>
</div><?php } ?>
<!--#Meta:modules/attendance/tpl/js/attendance_admin.js--><?php $__tmp=array('modules/attendance/tpl/js/attendance_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/attendance/tpl/css/attendance.css--><?php $__tmp=array('modules/attendance/tpl/css/attendance.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<?php if(!$__Context->selected_date){ ?>
	<?php $__Context->selected_date = zDate(date('YmdHis'),"Ymd") ?>
<?php } ?>
<?php if($__Context->act=='dispAttendanceAdminList' && !$__Context->type){ ?>
	<?php $__Context->type='config' ?>
<?php }elseif(!$__Context->type && $__Context->act=='dispAttendanceAdminGift'){ ?>
<?php } ?>
<script type="text/javascript">
    function moveDate() {
        xGetElementById('fo_calendar').submit();
        return true;
    }
</script>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->attendance_module ?><span class="gray"><?php echo $__Context->lang->cmd_management ?></span></h1>
</div>
<div class="header4 gap1">
    <form action="./index.php" method="get" id="fo_calendar"><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="error_return_url" value="" />
    <input type="hidden" name="mid" value="" />
    <input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
    <input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
    <input type="hidden" name="selected_date" id="selected_date" value="<?php echo $__Context->selected_date ?>" />
<div class="center" style="color:#5c5c5c; margin-bottom:5px;"><?php echo $__Context->lang->select_date ?>
<span id="str_selected_date">&nbsp;&nbsp; [<?php echo zdate($__Context->selected_date, "Y-m-d") ?>]</span>
<input type="hidden" class="inputDate" value="<?php echo zdate($__Context->selected_date, "Ymd") ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
                <script type="text/javascript">
(function($){
    $(function(){
        var option = {
            changeMonth: true,
            changeYear: true,
            gotoCurrent: false
            ,yearRange:'-100:+10'
            ,showOn:"button"
            ,buttonImage:"./modules/attendance/tpl/images/buttonCalendar.gif"
            ,buttonImageOnly:true
            ,mandatory:true
            ,onSelect:function(){
                $("#str_selected_date").html(this.value);
                $("#selected_date").val(this.value.replace(/-/g,''));
                moveDate();
            }
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
    });
})(jQuery);
                </script>
            </div>
    </form>
    <ul class="x_nav x_nav-tabs">
        <?php if($__Context->lang->view_type&&count($__Context->lang->view_type))foreach($__Context->lang->view_type as $__Context->key => $__Context->val){ ?>
        <li<?php if($__Context->type==$__Context->key){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispAttendanceAdminList','type',$__Context->key,'page',1) ?>"><?php echo $__Context->val ?></a></li>
        <?php } ?>
		<li<?php if($__Context->act=='dispAttendanceAdminGift'){ ?> class="x_active"<?php } ?>><a href="./index.php?module=admin&act=dispAttendanceAdminGift"><?php echo $__Context->lang->dispAttgiftList ?></a></li>
    </ul>
</div>
<?php if($__Context->type=='day'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','day.html') ?>
<?php }elseif($__Context->type=='rank_total'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','rank_total.html') ?>
<?php }elseif($__Context->type=='rank_yearly'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','rank_yearly.html') ?>
<?php }elseif($__Context->type=='rank_monthly'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','rank_monthly.html') ?>
<?php }elseif($__Context->type=='rank_weekly'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','rank_weekly.html') ?>
<?php }elseif($__Context->type=='speed_search'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','speed_search.html') ?>
<?php }elseif($__Context->type=='config'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','config.html') ?>
<?php }elseif($__Context->type=='time'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','time.html') ?>
<?php }elseif($__Context->act=='dispAttendanceAdminGift'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/tpl','giftlist.html') ?>
<?php } ?>
<?php if($__Context->_attendance_iframe_url){ ?><div style="margin-top:20px;">
	<p>설치된 출석부 스킨 버전 : ver<?php echo $__Context->attendance_module_info->version ?></p>
	<iframe frameborder="0" src="<?php echo $__Context->_attendance_iframe_url ?>" style="display:block; margin:10px auto; padding:0; width:90%;border:3px solid #7361d6; border-radius:10px; height:200px; overflow:scroll; "></iframe>
</div><?php } ?>
