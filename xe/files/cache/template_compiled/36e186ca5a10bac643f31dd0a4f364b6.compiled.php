<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/attendance/skins/default/css/twitterstyle.css--><?php $__tmp=array('modules/attendance/skins/default/css/twitterstyle.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/attendance/skins/default/js/jquery.infinitescroll.js--><?php $__tmp=array('modules/attendance/skins/default/js/jquery.infinitescroll.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="sat">
    
    <?php if($__Context->module_info->order_type=='desc'){ ?>
        <?php $__Context->position=($__Context->module_info->start_num)-($__Context->module_info->list_count*($__Context->oAttendance->page-1)) ?>
    <?php }else{ ?>
        <?php $__Context->position=1+($__Context->oAttendance->page-1)*$__Context->module_info->list_count ?>
    <?php } ?>
	<script type="text/javascript"> 
	jQuery(function($) {
		$('.lulu-list').infinitescroll({
			loading: {
					speed: 0,
					img: 'modules/board/skins/Clarity/img/loading.gif',
					finishedMsg: '',
					msgText: '',
				},
			navSelector  	: ".elise-pagination",
			nextSelector 	: ".page-link",
			itemSelector 	: ".lulu-list .lulu-item",
			debug		 	: false,
			dataType	 	: 'html',
	    });
	});
	</script>
<ul class="lulu-list left cfix clarity-font">
	<?php if($__Context->oAttendance->data&&count($__Context->oAttendance->data))foreach($__Context->oAttendance->data as $__Context->data){ ?><li class="lulu-item cfix">
			
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
			<?php $__Context->is_perfect=$__Context->oAttendanceModel->isPerfect($__Context->data->member_srl, $__Context->selected_date) ?>
			<?php $__Context->weekly = $__Context->oAttendanceModel->getWeeklyData($__Context->data->member_srl, $__Context->week) ?>
			<?php $__Context->member = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->data->member_srl) ?>
	   <div class="lulu-block cfix">
			<div class="caret-block">
				<span class="caret-outer"></span>
				<span class="caret-inner"></span>
			</div>
			
			<div class="lulu-main cfix">
				<ul class="lulu-info cfix">
					<li class="lulu-info-item nickname clarity-font left">
					<?php if($__Context->position == 1){ ?>
						<img src="/xe/modules/attendance/skins/default/css/rank1.png" />1등
					<?php }elseif($__Context->position == 2){ ?>
						<img src="/xe/modules/attendance/skins/default/css/rank2.png" />2등
					<?php }elseif($__Context->position == 3){ ?>
						<img src="/xe/modules/attendance/skins/default/css/rank3.png" />3등
					<?php }else{ ?>
						<?php echo $__Context->position ?>등
					<?php } ?>
						<a href="#popup_menu_area" class="lulu-info-link member_<?php echo $__Context->member->member_srl ?>" onclick="return false"><?php echo $__Context->member->nick_name ?></a>
				<?php if($__Context->module_info->display_ip_address != 'N'){ ?>
					<?php if($__Context->data->ipaddress == 'none'){ ?>
						<?php echo $__Context->data->ipaddress ?>
					<?php }elseif(!$__Context->data->ipaddress){ ?>
						<?php echo $__Context->lang->attend_warn_ip ?>
					<?php }else{ ?>
						<?php if($__Context->data->member_srl == $__Context->logged_info->member_srl || $__Context->logged_info->is_admin =='Y'){ ?>
							<?php echo $__Context->data->ipaddress ?>
						<?php }else{ ?>
							<?php $__Context->ip_tmp = explode('.',$__Context->data->ipaddress) ?>
							<?php $__Context->i=0;
if($__Context->ip_tmp&&count($__Context->ip_tmp))foreach($__Context->ip_tmp as $__Context->ip){;
if($__Context->i==0 || $__Context->i==1){;
$__Context->i++ ?>*.<?php }elseif($__Context->i==2){;
$__Context->i++;
echo $__Context->ip ?>.<?php }else{;
$__Context->i++;
echo $__Context->ip;
};
} ?>
						<?php } ?>
					<?php } ?>
				<?php } ?>
					</li>
					<li class="lulu-info-item time-ago left"><?php echo substr($__Context->data->regdate,8,2).":".substr($__Context->data->regdate,10,2).":".substr($__Context->data->regdate,12,2) ?></li>
					<li class="lulu-info-item cla-comments right">
					<?php if($__Context->weekly->weekly == 7 && $__Context->selected_date == $__Context->week->sunday1){ ?>
					<span class="label label-info"><?php echo $__Context->lang->attendance_perfect ?></span>
					<?php }elseif($__Context->is_perfect->monthly_perfect){ ?>
					<span class="label label-success"><?php echo $__Context->lang->attendance_perfect ?></span>
					<?php }elseif($__Context->is_perfect->yearly_perfect){ ?>
					<span class="label label-warning"><?php echo $__Context->lang->attendance_perfect ?></span>
					<?php }else{ ?>
					<?php  
						$__Context->oAttendanceModel = &getModel('attendance');
						$__Context->total_info = $__Context->oAttendanceModel->getTotalData($__Context->member->member_srl);
						$__Context->perfect_de = $__Context->selected_date - date("Ymd");
						$__Context->perfect_dec = $__Context->total_info->continuity + $__Context->perfect_de;
					 ?>
					<a<?php if($__Context->logged_info->is_admin == 'Y'){ ?> href="<?php echo getUrl('','mid','attendance','act', 'dispAttendanceModifyContinuous', 'member_srl', $__Context->data->member_srl) ?>"<?php } ?>>
					<?php if($__Context->perfect_dec > 0){ ?>
					&nbsp;<?php echo $__Context->perfect_dec ?> 일째
					<?php }else{ ?>
					0 일째
					<?php } ?>
					</a>
					<?php } ?>
					</li>
					<li class="lulu-info-item bullet right" >•</li>
					<li class="lulu-info-item cla-comments right">
					총 출석일이 <?php echo number_format($__Context->oAttendanceModel->getTotalAttendance($__Context->member->member_srl)) ?>일째 입니다.
					</li>
					<li class="lulu-info-item bullet right" >•</li>
					<li class="lulu-info-item cla-comments right">
					<?php if($__Context->logged_info->is_admin=="Y" && $__Context->grant->manager == 1){ ?>
					<a href="<?php echo getUrl('act','dispAttendanceAdminModifyAttendance','mid','attendance','attendance_srl',$__Context->data->attendance_srl,'selected_date',$__Context->selected_date) ?>">
					<?php if($__Context->data->today_point > 5){ ?>
					<font color="#FF0000">
					포인트 <?php echo $__Context->data->today_point ?></font>
					<?php }else{ ?>
					포인트 <?php echo $__Context->data->today_point ?>
					<?php } ?>
					</a>
					<?php }else{ ?>
					<?php if($__Context->data->today_point > 5){ ?>
					<font color="#FF0000">
					포인트 <?php echo $__Context->data->today_point ?></font>
					<?php }else{ ?>
					포인트 <?php echo $__Context->data->today_point ?>
					<?php } ?>
					<?php } ?>
					</li>
					<li class="lulu-info-item bullet right" >•</li>
					<?php if($__Context->cd->about_random == 'yes'){ ?><li class="lulu-info-item cla-comments right">
						랜덤 <?php echo $__Context->lang->point ?> 
						<span<?php if($__Context->data->att_random_set=='1'){ ?> class="cri"<?php } ?> style="color:#222; font-weight:bold;">
						<?php if($__Context->data->today_random=='0'){ ?>꽝<?php } ?>
						<?php if($__Context->data->today_random>='1'){;
if($__Context->data->att_random_set=='1'){ ?><i class="fa fa-certificate"></i><?php } ?> <?php echo $__Context->data->today_random;
} ?>
						</span>
					</li><?php } ?>
				</ul>
				<div class="lulu-content">
				
					
					<div class="lulu-content-info pix-lulu">
						<div class="lulu-content-title">
							<a class="lulu-title-link">
							<?php if($__Context->weekly->weekly == 7 && $__Context->selected_date == $__Context->week->sunday1){ ?>
							<span class="label label-info"><?php echo $__Context->lang->attendance_perfect ?></span>
							<?php }elseif($__Context->is_perfect->monthly_perfect){ ?>
							<span class="label label-success"><?php echo $__Context->lang->attendance_perfect ?></span>
							<?php }elseif($__Context->is_perfect->yearly_perfect){ ?>
							<span class="label label-warning"><?php echo $__Context->lang->attendance_perfect ?></span>
							<?php } ?>
							<?php if($__Context->data->greetings){ ?>
								<?php if($__Context->exist_document == 1){ ?>
									<!-- <?php echo cut_str($__Context->oDocument->getContentText(text),$__Context->module_info->greetings_cut_size,'...') ?> -->
									<?php echo cut_str($__Context->oDocument->getContentText(text)) ?>
								<?php }else{ ?>
									<?php $__Context->greetings_filtering = str_replace('<','&lt;',$__Context->data->greetings) ?>
									<?php if($__Context->data->greetings!='^admin_checked^' && $__Context->data->greetings!='^auto^'){;
echo cut_str($__Context->greetings_filtering, $__Context->module_info->greetings_cut_size, '...') ?>
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
							</a>
						</div>
					</div><!-- .lulu-content-info -->
				</div><!-- .lulu-content -->
			</div><!-- .lulu-main -->
		</div><!-- .lulu-block -->
 
		<a class="lulu-thumb-link clarity-thumb avatar-radius">
			<?php if($__Context->member->profile_image->file){ ?><img class="lulu-thumb-img avatar-icons" src="<?php echo $__Context->member->profile_image->file ?>" /><?php } ?>
			<?php if(!$__Context->member->profile_image->file && $__Context->mi->no_profile){ ?><img class="lulu-thumb-img avatar-icons" src="<?php echo $__Context->mi->no_profile ?>" /><?php } ?>
			<?php if(!$__Context->member->profile_image->file && !$__Context->mi->no_profile){ ?><img class="lulu-thumb-img avatar-icons" src="/xe/modules/attendance/skins/default/noprofile.gif" /><?php } ?>
		</a>
		<?php if($__Context->module_info->order_type=='desc'){;
$__Context->position--;
}else{;
$__Context->position++;
} ?>
	</li><?php } ?>
<ul>
<div class="list_footer">
    <div class="elise-pagination cfix">
        <a href="<?php echo getUrl('page',$__Context->oAttendance->page_navigation->first_page,'module_srl','') ?>" class="page-direction page-prev"><span class="arrow-prev">←</span>First Page</a> 
        <div class="page-list">
        	<?php while($__Context->page_no=$__Context->oAttendance->page_navigation->getNextPage()){ ?>
            	<?php if($__Context->oAttendance->page == $__Context->page_no){ ?><span class="page page-current"><span class="page-current-mark"></span><?php echo $__Context->page_no ?></span><?php } ?>
                <?php if($__Context->oAttendance->page != $__Context->page_no){ ?><a class="page page-link" href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a><?php } ?>
			<?php } ?>
        </div>
        <a href="<?php echo getUrl('page',$__Context->oAttendance->page_navigation->last_page,'module_srl','') ?>" class="page-direction page-next">Last Page<span class="arrow-next">→</span></a>
    </div><!-- .elise-pagination -->
   
</div><!-- .list-footer -->
</div>