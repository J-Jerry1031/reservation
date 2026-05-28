<?php if(!defined("__XE__"))exit;?><table cellspacing="0" class="listTable">
    <tbody>
		<tr>    
    <?php $__Context->_day=1 ?>
    <?php $__Context->j=0 ?>
    <?php while($__Context->_day <= $__Context->admin_date_info->day_max){ ?>
        <?php while($__Context->j < $__Context->admin_date_info->week_start){ ?>
        <?php $__Context->j++ ?>
        <?php } ?>
			<td height="35px" class="stamp">
                <?php $__Context->check_date = sprintf("%s%s%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) ?>
                <?php $__Context->checked = $__Context->oAttendanceModel->getIsCheckedA($__Context->logged_info->member_srl, $__Context->check_date) ?>
                
               
                
                <?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) == $__Context->selected_date){ ?>
                
                <?php } ?>
                <?php if($__Context->checked == 1){ ?>
                
                <a <?php if($__Context->j%7==0){ ?>class="sunday"<?php }elseif($__Context->j%7==6){ ?>class="saturday"<?php } ?> href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->admin_date_info->_month, $__Context->_day, $__Context->admin_date_info->_year)),"Ymd")) ?>">
                
                
                <?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) == date("Ymd")){ ?>
                <span style="background:#000; padding:0 3px; color:#fff;"><?php echo $__Context->_day++ ?></span>
                <?php }else{ ?>
                <?php echo $__Context->_day++ ?>
                <?php } ?></a>
                
                <?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day-1) == $__Context->selected_date){ ?>
                
                <?php } ?><br/>
                <?php if($__Context->is_logged){ ?><div class="check">
                <img src="/xe/modules/attendance/m.skins/default/css/check.gif" />
                </div><?php } ?>
                <?php }elseif($__Context->checked >= 2){ ?>
                <?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) == date("Ymd")){ ?>
                <span style="background:#000; color:#fff;"><?php echo $__Context->_day++ ?></span>
                <?php }else{ ?>
                <?php echo $__Context->_day++ ?>
                <?php } ?>
                
                
                <?php if($__Context->is_logged){ ?><a href="#fixAttendanceData" onclick="att_fix_attendance_data('<?php echo $__Context->logged_info->member_srl ?>','<?php echo $__Context->checked ?>','<?php echo $__Context->check_date ?>','<?php echo $__Context->lang->attend_fix_att ?>','<?php echo $__Context->logged_info->nick_name ?>');"><p class="check">?</p></a><?php };
if($__Context->admin_date_info->_day == sprintf("%2d",$__Context->_day-1)){ ?>
                
                
                <?php } ?>
                
                <?php }else{ ?>
                
                
                <a <?php if($__Context->j%7==0){ ?>class="sunday"<?php }elseif($__Context->j%7==6){ ?>class="saturday"<?php } ?> href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->admin_date_info->_month, $__Context->_day, $__Context->admin_date_info->_year)),"Ymd")) ?>">
                
                <?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) == date("Ymd")){ ?>
                <span <?php if(sprintf("%04d%02d%02d",$__Context->year,$__Context->month,$__Context->day) == date("Ymd")){ ?>style="background:#f66;padding:0 3px; color:#fff;"<?php }else{ ?>style="background:#000; padding:0 3px; color:#fff;"<?php } ?>><?php echo $__Context->_day++ ?></span>
                <?php }else{ ?>
                <?php echo $__Context->_day++ ?>
                <?php } ?>
                </a>
                
                <?php if(substr($__Context->selected_date,6,2) == sprintf("%02d",$__Context->_day-1)){ ?>
                
                
                <?php } ?>
                
                <div class="check">
              
              <?php if(substr($__Context->selected_date,6,2) == sprintf("%02d",$__Context->_day-1)){ ?>
              
           <?php if($__Context->oAttendanceModel->getIsChecked($__Context->logged_info->member_srl) == 0 && $__Context->is_available == 0 ){ ?>    
                        
                <?php if(sprintf("%04d%02d%02d",$__Context->year,$__Context->month,$__Context->day) == date("Ymd")){ ?>
                
                <img src="/xe/modules/attendance/m.skins/default/css/day.gif" />
                <?php } ?>
                
                                
           <?php } ?>
                      
               <?php } ?> 
                </div>
                
               
                <?php } ?>
            </td>
        <?php if($__Context->_day-1 == $__Context->admin_date_info->day_max){ ?>
        <?php } ?>
        <?php $__Context->j++ ?>
    <?php } ?>
</tr>
    </tbody>
</table>