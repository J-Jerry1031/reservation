<?php if(!defined("__XE__"))exit;
$__Context->total_count = $__Context->oAttendanceAdminModel->getTodayTotalCount($__Context->selected_date) ?>
<table cellspacing="0" class="rowTable">
    <?php for($__Context->time=0;$__Context->time<24;$__Context->time++){ ?>
    <?php $__Context->today_time = $__Context->selected_date.sprintf("%02d",$__Context->time) ?>
    <?php $__Context->count = $__Context->oAttendanceAdminModel->getTodayTimeCount($__Context->today_time) ?>
    <tr>
        <th width="40px"><?php echo $__Context->time;
echo $__Context->lang->attendance_time ?></th>
        <td style="min-width:300px;">
            <div class="admin_graph">
				<?php if($__Context->total_count){ ?>
                <?php $__Context->percent=(int)($__Context->count/$__Context->total_count*100) ?>
				<?php } ?>
                <div class="progress" style="width:230px;">
                    <div class="bar bar-success" style="width:<?php echo $__Context->percent ?>%;"></div><?php if($__Context->percent>=50){;
echo $__Context->percent ?>%<?php }else{ ?>&nbsp;<?php } ?>
                </div>
                <div class="num" style="left:230px;width:70px;">
                <strong><?php echo $__Context->count ?></strong>/<?php echo $__Context->total_count ?>(<?php echo $__Context->percent ?>%)
			    </div>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>
