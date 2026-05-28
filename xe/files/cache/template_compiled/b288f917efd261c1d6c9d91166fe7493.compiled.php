<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<h3 class="xeAdmin" style="margin-bottom:0; border:none;"><?php echo $__Context->lang->attend_board_config ?></h3>
<div class="x_form-horizontal">
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attend_link_board ?></label>
			<div class="x_controls" style="padding-top:5px;">
				<?php echo $__Context->lang->attend_mid ?> : <a href="<?php echo getUrl('mid','attendance','module','','act','') ?>" ><u>attendance</u></a>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attend_board_config ?></label>
			<div class="x_controls" style="padding-top:5px;">
				<a href="<?php echo getUrl('mid','attendance','module','','act','dispAttendanceAdminBoardConfig') ?>"><u>click</u></a>
			</div>
		</div>
	</section>
</div>
<h3 class="xeAdmin" style="margin-bottom:0; border:none;"><?php echo $__Context->lang->attendance_module ?> <?php echo $__Context->lang->cmd_management ?></h3>
<?php Context::addJsFile("modules/attendance/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="<?php echo getUrl('') ?>" method="post" class="x_form-horizontal" id="fo_attendance"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="attendance" />
	<input type="hidden" name="act" value="procAttendanceAdminInsertAttendance" />
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?> <button type="button" class="snToggle x_icon-chevron-up">Toggle this section</button></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_document ?></label>
			<div class="x_controls">
				<select name="use_document">
					<option value="no"<?php if($__Context->config->use_document=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?>(<?php echo $__Context->lang->dn_use ?>)</option>
					<option value="yes"<?php if($__Context->config->use_document=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?>(<?php echo $__Context->lang->d_use ?>)</option>
				</select>
				<p><?php echo $__Context->lang->use_document_help ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_add_point ?></label>
			<div class="x_controls">
				<input type="text" name="add_point" value="<?php echo $__Context->config->add_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_first_point ?></label>
			<div class="x_controls">
				<input type="text" name="first_point" value="<?php echo $__Context->config->first_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_second_point ?></label>
			<div class="x_controls">
				<input type="text" name="second_point" value="<?php echo $__Context->config->second_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_third_point ?></label>
			<div class="x_controls">
				<input type="text" name="third_point" value="<?php echo $__Context->config->third_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_yearly_point ?></label>
			<div class="x_controls">
				<input type="text" name="yearly_point" value="<?php echo $__Context->config->yearly_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_monthly_point ?></label>
			<div class="x_controls">
				<input type="text" name="monthly_point" value="<?php echo $__Context->config->monthly_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_weekly_point ?></label>
			<div class="x_controls">
				<input type="text" name="weekly_point" value="<?php echo $__Context->config->weekly_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_about_target ?></label>
			<div class="x_controls">
				<select name="about_target" id="include_duplicated_user">
					<option value="yes"<?php if($__Context->config->about_target=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="gift"<?php if($__Context->config->about_target=='gift'){ ?> selected="selected"<?php } ?>>gift</option>
					<option value="no"<?php if($__Context->config->about_target=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
				<p><?php echo $__Context->lang->attendance_about_target_h ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_target_day ?></label>
			<div class="x_controls">
				<input type="text" name="target_day" value="<?php echo $__Context->config->target_day ?>" />
				<p><?php echo $__Context->lang->attendance_target_day_info ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_target_point ?></label>
			<div class="x_controls">
				<input type="text" name="target_point" value="<?php echo $__Context->config->target_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->giftnames ?></label>
			<div class="x_controls">
				<input type="text" name="giftname" value="<?php echo $__Context->config->giftname ?>" />
				<p><?php echo $__Context->lang->giftnames_h ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->manygiftlist ?></label>
			<div class="x_controls">
				<input type="text" name="manygiftlist" value="<?php echo $__Context->config->manygiftlist ?>" />
				<p><?php echo $__Context->lang->manygiftlists ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->gift_random ?></label>
			<div class="x_controls">
				<input type="number" name="gift_random" value="<?php echo $__Context->config->gift_random ?>" />
				<p><?php echo $__Context->lang->gift_random_h ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_about_continuity ?></label>
			<div class="x_controls">
				<select name="about_continuity">
					<option value="yes"<?php if($__Context->config->about_continuity=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="no"<?php if($__Context->config->about_continuity=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_continuity_day ?></label>
			<div class="x_controls">
				<input type="text" name="continuity_day" value="<?php echo $__Context->config->continuity_day ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_continuity_point ?></label>
			<div class="x_controls">
				<input type="text" name="continuity_point" value="<?php echo $__Context->config->continuity_point ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_about_time_control ?></label>
			<div class="x_controls">
				<select name="about_time_control">
					<option value="yes"<?php if($__Context->config->about_time_control=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="no"<?php if($__Context->config->about_time_control=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
				<p><?php echo $__Context->lang->attendance_description_ban_time ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_start_time ?></label>
			<div class="x_controls">
				<input type="text" name="start_hour" value="<?php echo $__Context->start_time->hour ?>" style="width:30px;"/> :
				<input type="text" name="start_min" value="<?php echo $__Context->start_time->min ?>" style="width:30px;"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_end_time ?></label>
			<div class="x_controls">
				<input type="text" name="end_hour" value="<?php echo $__Context->end_time->hour ?>" style="width:30px;"/> :
				<input type="text" name="end_min" value="<?php echo $__Context->end_time->min ?>" style="width:30px;"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_about_diligence_yearly ?></label>
			<div class="x_controls">
				<select name="about_diligence_yearly">
					<option value="yes"<?php if($__Context->config->about_diligence_yearly=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="no"<?php if($__Context->config->about_diligence_yearly=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_insert ?></label>
			<div class="x_controls">
				<input type="text" name="diligence_yearly" value="<?php echo $__Context->config->diligence_yearly ?>" style="width:30px;"/>
				<p><?php echo $__Context->lang->attendance_diligence_yearly ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_diligence_yearly_point ?></label>
			<div class="x_controls">
				<input type="text" name="diligence_yearly_point" value="<?php echo $__Context->config->diligence_yearly_point ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_about_diligence_monthly ?></label>
			<div class="x_controls">
				<select name="about_diligence_monthly">
					<option value="yes"<?php if($__Context->config->about_diligence_monthly=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="no"<?php if($__Context->config->about_diligence_monthly=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_insert ?></label>
			<div class="x_controls">
				<input type="text" name="diligence_monthly" value="<?php echo $__Context->config->diligence_monthly ?>" style="width:30px;"/>
				<p><?php echo $__Context->lang->attendance_diligence_monthly ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_diligence_monthly_point ?></label>
			<div class="x_controls">
				<input type="text" name="diligence_monthly_point" value="<?php echo $__Context->config->diligence_monthly_point ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_about_diligence_weekly ?></label>
			<div class="x_controls">
				<select name="about_diligence_weekly">
					<option value="yes"<?php if($__Context->config->about_diligence_weekly=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="no"<?php if($__Context->config->about_diligence_weekly=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_insert ?></label>
			<div class="x_controls">
				<input type="text" name="diligence_weekly" value="<?php echo $__Context->config->diligence_weekly ?>" style="width:30px;"/>
				<p><?php echo $__Context->lang->attendance_diligence_weekly ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attendance_diligence_weekly_point ?></label>
			<div class="x_controls">
				<input type="text" name="diligence_weekly_point" value="<?php echo $__Context->config->diligence_weekly_point ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attend_admin_check ?></label>
			<div class="x_controls">
				<select name="about_admin_check">
					<option value="no"<?php if($__Context->config->about_admin_check!='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
					<option value="yes"<?php if($__Context->config->about_admin_check=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attend_allow_duplicaton_ip_count ?></label>
			<div class="x_controls">
				<input type="text" name="allow_duplicaton_ip_count" value="<?php echo $__Context->config->allow_duplicaton_ip_count ?>" style="width:30px;"/>
				<p><?php echo $__Context->lang->attend_allow_duplicaton_ip_msg ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->attend_about_auto_attend ?></label>
			<div class="x_controls">
				<select name="about_auto_attend">
					<option value="yes"<?php if($__Context->config->about_auto_attend=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
					<option value="no"<?php if($__Context->config->about_auto_attend=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
				</select>
				<p><?php echo $__Context->lang->attend_about_auto_attend_more ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->randomp ?></label>
			<div class="x_controls">
				<select name="about_random">
					<option value="no"<?php if($__Context->config->about_random=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
					<option value="yes"<?php if($__Context->config->about_random=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->randomset ?></label>
			<div class="x_controls">
				<p><?php echo $__Context->lang->minimum ?> : <input type="text" name="minimum" value="<?php echo $__Context->config->minimum ?>" style="width:60px" /> &nbsp; 
				<?php echo $__Context->lang->maximum ?> : <input type="text" name="maximum" value="<?php echo $__Context->config->maximum ?>" style="width:60px" />
			</p>
			<?php echo $__Context->lang->randomsethelp ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->random_select ?></label>
			<div class="x_controls">
				<select name="about_lottery">
					<option value="no"<?php if($__Context->config->about_lottery=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
					<option value="yes"<?php if($__Context->config->about_lottery=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->random_input ?></label>
			<div class="x_controls">
				<input type="text" name="lottery" value="<?php echo $__Context->config->lottery ?>" style="width:60px;" />
				<p><?php echo $__Context->lang->random_input_help ?></p>
			</div>
			
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->event_random ?></label>
			<div class="x_controls">
				<select name="use_random_sm">
					<option value="no"<?php if($__Context->config->use_random_sm!='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
					<option value="yes"<?php if($__Context->config->use_random_sm=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
				</select>
				<a href="#use_random_sm" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a> <?php echo $__Context->lang->attimg ?>
				<p class="x_help-block" id="use_random_sm" hidden><img src="/xe/modules/attendance/tpl/config.jpg" /></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->random_small_win ?></label>
			<div class="x_controls">
				<input type="text" name="random_small_win" value="<?php echo $__Context->config->random_small_win ?>"/>
				<p><?php echo $__Context->lang->random_small_win_h ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->small_event_point ?></label>
			<div class="x_controls">
				<p>
					<?php echo $__Context->lang->minimum ?> : <input type="text" name="random_small_point_f" value="<?php echo $__Context->config->random_small_point_f ?>" style="width:60px" /> &nbsp; 
					<?php echo $__Context->lang->maximum ?> : <input type="text" name="random_small_point_s" value="<?php echo $__Context->config->random_small_point_s ?>" style="width:60px" />
				</p>
				<p><?php echo $__Context->lang->small_event_point_h ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->large_event_point ?></label>
			<div class="x_controls">
				<p>
					<?php echo $__Context->lang->minimum ?> : <input type="text" name="random_big_point_f" value="<?php echo $__Context->config->random_big_point_f ?>" style="width:60px" /> &nbsp; 
					<?php echo $__Context->lang->maximum ?> : <input type="text" name="random_big_point_s" value="<?php echo $__Context->config->random_big_point_s ?>" style="width:60px" />
				</p>
				<p><?php echo $__Context->lang->large_event_point_h ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->birthday_setting ?></label>
			<div class="x_controls">
				<select name="about_birth_day">
					<option value="no"<?php if($__Context->config->about_birth_day=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
					<option value="yes"<?php if($__Context->config->about_birth_day=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
				</select>
				<p><?php echo $__Context->lang->birthday_help ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->birthday_point ?></label>
			<div class="x_controls">
				<input type="text" name="brithday_point" value="<?php echo $__Context->config->brithday_point ?>" style="width:60px;" />
				<p><?php echo $__Context->lang->birthday_point_help ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->birthday_member ?></label>
			<div class="x_controls">
				<select name="about_birth_day_y">
					<option value="no"<?php if($__Context->config->about_birth_day_y=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_no ?></option>
					<option value="yes"<?php if($__Context->config->about_birth_day_y=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_yes ?></option>
				</select>
				<p><?php echo $__Context->lang->birthday_member_help ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->continuity_monthly ?></label>
			<div class="x_controls">
				<select name="continuity_monthly">
					<option value="no"<?php if($__Context->config->continuity_monthly=='no'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->monthly_one ?></option>
					<option value="yes"<?php if($__Context->config->continuity_monthly=='yes'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->monthly_two ?></option>
				</select>
				<p><?php echo $__Context->lang->continuity_monthly_help ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">인사말 설정</label>
			<div class="x_controls">
				<textarea name="greeting_list" style="width:300px; height:200px;"><?php echo htmlspecialchars($__Context->config->greeting_list) ?></textarea>
				<p>출석 인사말을 남길 수 있습니다. 출석 인사말구분은 엔터로 구분합니다. 한줄씩 내려서 기록하시면 됩니다. (여러개 사용가능합니다.)</p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_submit ?></button>
		</div>
	</div>
</form>
<br />
<h3 class="xeAdmin" style="margin-bottom:0; border:none;"><?php echo $__Context->lang->attend_init_all ?></h3>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','init_all.xml');$__xmlFilter->compile(); ?>
<form action="<?php echo getUrl('') ?>" method="post" onsubmit="return procFilter(this, init_all);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" class="rowTable" >
        <tr>
            <td rowspan="2" width="50%"><?php echo $__Context->lang->attend_init_all_msg ?></td>
            <td>
                <input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
                <input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
                <input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
                <input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
                <?php echo $__Context->lang->attend_insert_continuity ?><input type="text" name="continuity" value="1" class="inputTypeText w40" onclick=""/>
            </td>
        </tr>
        <tr>
            <td class="center"><span ><input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->attend_init_all ?>" onclick="return att_ban_dclick('<?php echo $__Context->lang->attend_warn2 ?>');"/></span></td>
        </tr>
    </table>
</form>
<h3 class="xeAdmin" style="margin-bottom:0; border:none;"><?php echo $__Context->lang->attend_remove_board ?></h3>
<table cellspacing="0" class="rowTable">
    <tr>
        <th width="150px"><?php echo $__Context->lang->attend_remove_board ?></th>
        <td>
            <?php echo $__Context->lang->attend_board_info ?><br/>
			<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','delete_attendance_board.xml');$__xmlFilter->compile(); ?>
            <form action="./" method="post" onsubmit="return procFilter(this, delete_attendance_board);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
                <input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
                <input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
                <span class="button black small"><button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->attendance_perfectly_delete ?></button></span>
            </form>
        </td>
    </tr>
</table>
