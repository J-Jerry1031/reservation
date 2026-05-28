<?php if(!defined("__XE__"))exit;?><div class="alert alert-warning"><?php echo $__Context->lang->attend_click_msg ?></div>
<div class="x">
	<?php Context::addJsFile("modules/attendance/ruleset/Attendanceinsert.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" id="click_button" style="text-align:center" class="write_author" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="Attendanceinsert" />                  
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="act" value="procAttendanceInsertAttendance" />
		<input type="hidden" name="xe_validator_id" value="modules/attendance/skins/default/attendanceinsert" />
		<span class="input-append" style="width:100%; display:inline-block">
	   
			<input type="text" name="greetings" id="greetings" style="width:50%; height:26px" value="<?php echo $__Context->greeting_name ?>" class="write_text" />
			<input type="hidden" name="about_position" value="yes" />
			
			<button type="submit" class="x_btn x_btn-inverse sm-btn"><i class="fa fa-paw fa-2x"></i></button>
		</span>
	</form>
</div>