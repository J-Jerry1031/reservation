<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','_header.html') ?>
<!--#Meta:modules/attendance/m.skins/default/js/at.js--><?php $__tmp=array('modules/attendance/m.skins/default/js/at.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/m.skins/default/filter','insert_attendance.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/m.skins/default/filter','fix_attendance_data.xml');$__xmlFilter->compile(); ?>
<?php $__Context->year=substr($__Context->selected_date,0,4) ?>
<?php $__Context->month=substr($__Context->selected_date,4,2) ?>
<?php $__Context->day=substr($__Context->selected_date,6,2) ?>
<?php $__Context->week=$__Context->oAttendanceModel->getWeek($__Context->selected_date) ?>
<script type="text/javascript">
    var warn_msg = '<?php echo $__Context->lang->attend_warn ?>';
</script>
<div class="navi">
		<a class="calenderopen" href="#" >
			<strong class="att-btn att-btn-primary"><?php echo $__Context->year ?>년 <?php echo $__Context->month ?>월 <?php echo $__Context->day ?>일</strong>
		</a>
	<?php if($__Context->lgi->is_admin=='Y'){ ?>
		<span style="margin-left:20px;">
			<a href="<?php echo getUrl('module','','mid','attendance','document','','act','dispAttendanceAdminMobileBoardSkinConfig') ?>" class="att-btn att-btn-primary"> 스킨 <?php echo $__Context->lang->cmd_setup ?></a> 
		</span>
	<?php } ?>
	<?php if($__Context->is_logged){ ?>
		<span style="float:right;">
			<a href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->month-1, $__Context->day, $__Context->year)),'Ymd')) ?>" class="att-btn att-btn-primary"><<</a>
			<a href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis'),'Ymd')) ?>" class="att-btn att-btn-primary"><?php echo $__Context->year ?>년 <?php echo $__Context->month ?>월</a>
			<a href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->month+1, $__Context->day, $__Context->year)),'Ymd')) ?>" class="att-btn att-btn-primary">>> </a>
		</span>
	<?php } ?>
</div><!-- .navi -->
    <div class="point_list_body">
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0" border="0" class="point_list">
    	<tr>
        	<td class="title"><?php echo $__Context->lang->attendance_add_point ?></td>
            <td><?php if($__Context->cd->add_point > 0){;
echo $__Context->cd->add_point;
}elseif($__Context->cd->add_point == 0){ ?> <?php echo $__Context->lang->attend_none;
} ?></td>
            <td class="title">출석 권한</td>
            <td><?php if($__Context->mi->pomis){ ?><span class="label label-success"><?php echo $__Context->mi->pomis ?></span><?php };
if(!$__Context->mi->pomis){ ?><span class="label label-success">로그인 사용자</span><?php } ?></td>
        </tr>
        
        <tr>
            <td class="title">출석시간</td>
            <td><span class="<?php if($__Context->is_available == 0){ ?>label label-success <?php }else{ ?>label label-danger<?php } ?>"><?php if($__Context->mi->timestart){;
echo $__Context->mi->timestart;
}else{ ?>00:00:00<?php } ?>~<?php if($__Context->mi->timeend){;
echo $__Context->mi->timeend;
}else{ ?>24:00:00<?php } ?></span></td>
            <td class="title">출석여부</td>
            <td><?php if(!$__Context->is_logged){ ?><span class="label label-danger">비로그인</span><?php }elseif($__Context->oAttendanceModel->getIsChecked($__Context->logged_info->member_srl)==0){ ?><span class="label label-warning">출책안함</span><?php }elseif($__Context->oAttendanceModel->getIsChecked($__Context->logged_info->member_srl)==1){ ?> <span class="label label-success">출책완료</span><?php } ?></td>
        </tr>
        
    </table>
    </div><!-- .point_list_body -->
    
	
<?php if($__Context->mi->calendar != 'Y'){ ?>
<div id="calendar" style="display:none;">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','calendar.html') ?>
</div>
<?php }else{ ?>
<div id="calendar">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','calendar.html') ?>
</div>
<?php } ?>
 
           
    
    <div class="cal">
		<div class="sat" style="margin:10px 1px">
		<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID  == 'modules/attendance/skins/default/attendanceinsert'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
		<?php if($__Context->is_logged){ ?>
		<?php if(!$__Context->oAttendanceModel->getIsChecked($__Context->logged_info->member_srl) == 0 && $__Context->is_available == 0 ){ ?>
			<?php if($__Context->is_logged){ ?><div class="alert alert-success">
				<h4><?php echo $__Context->lgi->nick_name ?> 님은</a><?php if($__Context->mi->logo_image){ ?><img style="margin-bottom:-10px;" src="<?php echo $__Context->mi->logo_image ?>" />에서<?php } ?> 출석이 완료되었습니다.</h4>
				출석은 하루 1회만 참여하실 수 있습니다. 내일 다시 출석해 주세요.^^
			</div><?php } ?>
		<?php } ?>
 
	    
	    <?php if($__Context->oAttendanceModel->getIsChecked($__Context->logged_info->member_srl) == 0 && $__Context->is_available == 0 ){ ?>
			<?php if($__Context->config->about_admin_check!='no'){ ?>
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','att.html') ?>
			<?php }else{ ?>
				<?php if($__Context->logged_info->is_admin != 'Y'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','att.html') ?>
				<?php } ?>
				<?php if($__Context->logged_info->is_admin == 'Y'){ ?><div class="sat" style="margin:10px 1px">
					<div class="alert alert-admin"><h4><?php echo $__Context->lang->attend_banned_admin ?></h4></div>	
				</div><?php } ?>
			<?php } ?>
	    <?php } ?>
		<?php } ?>
		<?php if(!$__Context->is_logged){ ?>
			<div class="alert alert-danger">
				<h4>현재 로그인이 되지 않은 상태입니다.</h4>
				로그인을 하신다음 출책이 가능합니다.
			</div>
		<?php } ?>
		</div>
	</div>
  		
  
    
    <?php if($__Context->mi->order_type=='desc'){ ?>
        <?php $__Context->position=($__Context->mi->start_num)-($__Context->mi->list_count*($__Context->oAttendance->page-1)) ?>
    <?php }else{ ?>
        <?php $__Context->position=1+($__Context->oAttendance->page-1)*$__Context->mi->list_count ?>
    <?php } ?>
    
    <?php if($__Context->oAttendanceAdminModel->getTodayTotalCount($__Context->selected_date)==0){ ?>
			
				<div class="alert alert-danger">
					<h4><?php echo $__Context->lang->attend_no_checked ?></h4>
					출석좀~ 해 쭈_쎄요~ (쭈_쎄요~)
				</div>
		
    <?php }else{ ?>
    
    
    
<div class="tablestart">
            <table cellspacing="0" class="table at_board_title">
			
            <thead>
        <tr align="center" >
			<th scope="col" class="no"><?php echo $__Context->lang->position ?></th>
			<th scope="col"><span><?php echo $__Context->lang->nick_name ?></span></th>
            <th scope="col" class="title"><span><?php echo $__Context->lang->greetings ?></span></th>
			<th scope="col"><span><?php echo $__Context->lang->point ?>(<?php echo $__Context->lang->random_point ?>)</span></th>
        </tr>
        
        </thead>
    <?php if($__Context->oAttendance->data&&count($__Context->oAttendance->data))foreach($__Context->oAttendance->data as $__Context->data){ ?>
        <?php $__Context->is_perfect=$__Context->oAttendanceModel->isPerfect($__Context->data->member_srl, $__Context->selected_date) ?>
        <?php $__Context->weekly = $__Context->oAttendanceModel->getWeeklyData($__Context->data->member_srl, $__Context->week) ?>
            <?php $__Context->member = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->data->member_srl) ?>
            <?php if(preg_match("/^#[0-9]+$/",$__Context->data->greetings)){ ?>
                <?php $__Context->length_greetings = strlen($__Context->data->greetings) -1 ?>
                <?php $__Context->oDocument = $__Context->oDocumentModel->getDocument(substr($__Context->data->greetings,1,$__Context->length_greetings)) ?>
                <?php if($__Context->oDocument->document_srl){ ?>
                    <?php $__Context->exist_document = 1 ?>
                <?php }else{ ?>
                    <?php $__Context->exist_document = 0 ?>
                <?php } ?>
            <?php }else{ ?>
                <?php $__Context->exist_document = 0 ?>
            <?php } ?>
            
                    
            <tbody>
            <tr <?php if($__Context->member->member_srl == $__Context->logged_info->member_srl){ ?>class="infome"<?php } ?>>
                <td class="no" style="text-align:center;">
                <?php if($__Context->position == 1){ ?>
                <img src="/xe/modules/attendance/m.skins/default/css/rank1.png" />
                 <?php }elseif($__Context->position == 2){ ?>
                 <img src="/xe/modules/attendance/m.skins/default/css/rank2.png" />
                 <?php }elseif($__Context->position == 3){ ?>
                 <img src="/xe/modules/attendance/m.skins/default/css/rank3.png" />
                 <?php }else{ ?>
                 <?php echo $__Context->position ?>
                 <?php } ?>
                </td>
                <td align="left" class="author">
                <span>
				<?php if($__Context->member->profile_image->file && $__Context->mi->profileimg=='Y'){ ?><img class="lulu-thumb-sosiimg avatar-icons" src="<?php echo $__Context->member->profile_image->file ?>" /><?php } ?>
				<?php if(!$__Context->member->profile_image->file && $__Context->mi->no_profile  && $__Context->mi->profileimg=='Y'){ ?><img class="lulu-thumb-sosiimg avatar-icons" src="<?php echo $__Context->mi->no_profile ?>" /><?php } ?>
				<?php if(!$__Context->member->profile_image->file && !$__Context->mi->no_profile  && $__Context->mi->profileimg=='Y'){ ?><img class="lulu-thumb-sosiimg avatar-icons" src="/xe/modules/attendance/m.skins/default/img/noprofile.gif" /><?php } ?>
				<a href="#popup_menu_area" class="member_<?php echo $__Context->member->member_srl ?>" onclick="return false">
					<?php echo $__Context->member->nick_name ?>
				</a></span>
                </td>                
                <td class="title" align="left">
                
            
                
                    <?php if($__Context->data->greetings){ ?>
                        <?php if($__Context->exist_document == 1){ ?>
							<?php echo $__Context->oDocument->getContentText(text) ?>
                        <?php }else{ ?>
                            <?php $__Context->greetings_filtering = str_replace('<','&lt;',$__Context->data->greetings) ?>
                            <?php if($__Context->data->greetings!='^admin_checked^' && $__Context->data->greetings!='^auto^'){;
echo cut_str($__Context->greetings_filtering, $__Context->mi->greetings_cut_size, '...') ?>
                            <?php }elseif($__Context->data->greetings=='^admin_checked^'){;
echo $__Context->lang->attendance_admin_checked ?>
                            <?php }elseif($__Context->data->greetings=='^auto^'){;
echo $__Context->lang->attend_auto_check ?>
                            <?php }else{;
echo $__Context->lang->default_greetings ?>
                            <?php } ?>
                        <?php } ?>
                    <?php }else{ ?>
                        <?php echo $__Context->lang->attend_no_greetings ?>
                    <?php } ?>
                    
                    
                    
                </td>
 
      
                
                <td class="point" style="text-align:center" align="center">
                <div style="text-align:right; color:#ff0000 !important;">
                <?php if($__Context->logged_info->is_admin=="Y" && $__Context->grant->manager == 1){ ?>
                <a href="<?php echo getUrl('act','dispAttendanceAdminModifyAttendance','mid','attendance','attendance_srl',$__Context->data->attendance_srl,'selected_date',$__Context->selected_date) ?>">
                
                <?php if($__Context->data->today_point > 5){ ?>
                <font color="#FF0000">
                <?php echo $__Context->data->today_point;
if($__Context->data->today_random){ ?>(<?php echo $__Context->data->today_random ?>)<?php } ?></font>
                <?php }else{ ?>
                <?php echo $__Context->data->today_point;
if($__Context->data->today_random){ ?>(<?php echo $__Context->data->today_random ?>)<?php } ?>
                <?php } ?>
               
                </a>
                
                <?php }else{ ?>
                
                <?php if($__Context->data->today_point > 5){ ?>
                <font color="#FF0000">
                <?php echo $__Context->data->today_point;
if($__Context->data->today_random){ ?>(<?php echo $__Context->data->today_random ?>)<?php } ?></font>
                <?php }else{ ?>
                <?php echo $__Context->data->today_point;
if($__Context->data->today_random){ ?>(<?php echo $__Context->data->today_random ?>)<?php } ?>
                <?php } ?>
                
                <?php } ?>
				</div>
				<div style="text-align:right; color:#690 !important;">
                <?php if($__Context->is_perfect->yearly_perfect){ ?>
				<span class="pery"><?php echo $__Context->lang->attendance_perfect ?></span>
                <?php }elseif($__Context->is_perfect->monthly_perfect){ ?>
				<span class="perm"><?php echo $__Context->lang->attendance_perfect ?></span>    
				<?php }elseif($__Context->weekly->weekly == 7 && $__Context->selected_date == $__Context->week->sunday1){ ?>
				<span class="per"><?php echo $__Context->lang->attendance_perfect ?></span>
				<?php } ?>
				<?php 
					$__Context->oAttendanceModel = &getModel('attendance');
					$__Context->total_info = $__Context->oAttendanceModel->getTotalData($__Context->member->member_srl);
				 ?>
				개근 <?php echo $__Context->total_info->continuity ?>일째
				</div>
				<div style="text-align:right;">
					<span style="color:#333">총 <?php echo number_format($__Context->oAttendanceModel->getTotalAttendance($__Context->member->member_srl)) ?>일.</span>
				</div>
				</td>
            </tr>
            </tbody>  
    		<?php if($__Context->mi->order_type=='desc'){;
$__Context->position--;
}else{;
$__Context->position++;
} ?>
    <?php } ?>
            </table>
			</div>
            
	<?php } ?>
	
    <?php if(!$__Context->oAttendanceAdminModel->getTodayTotalCount($__Context->selected_date)==0){ ?>
     <div style="position:relative; width:100%; padding:5px 0; text-align:center">       
            
			<ul class="pagination">
       		<li><a href="<?php echo getUrl('page',$__Context->oAttendance->page_navigation->first_page,'module_srl','') ?>"  class="direction prev">&lsaquo; <?php echo $__Context->lang->first_page ?></a></li>
	    <?php while($__Context->page_no = $__Context->oAttendance->page_navigation->getNextPage()){ ?>
		    <?php if($__Context->oAttendance->page == $__Context->page_no){ ?>
			    <li><a><?php echo $__Context->page_no ?></a></li>
		    <?php }else{ ?>
			    <li><a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a></li>
		    <?php } ?>
	    <?php } ?>
		<li><a href="<?php echo getUrl('page',$__Context->oAttendance->page_navigation->last_page,'module_srl','') ?>"  class="direction next"><?php echo $__Context->lang->last_page ?> &rsaquo;</a></li>
    </ul>
	</div>
	<?php } ?>
    
    
            
    
    
    <p></p>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/m.skins/default','_footer.html') ?>
