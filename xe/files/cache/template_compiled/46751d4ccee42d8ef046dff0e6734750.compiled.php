<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','check_attendance_data.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','delete_attendance_data.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','fix_attendance_data.xml');$__xmlFilter->compile(); ?>
<form action="<?php echo getUrl('') ?>" method="POST" onsubmit="return procFilter(this, fix_attendance_data);" id="fixAttendanceData"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="" />
<input type="hidden" name="member_srl" value ="" />
<input type="hidden" name="count" value ="" />
</form>
<form action="<?php echo getUrl('') ?>" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="mid" value="" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
<?php $__Context->year_month = substr($__Context->selected_date, 0,6) ?>
    <fieldset>
        <select name="selected_group_srl">
            <option value="0"><?php echo $__Context->lang->group ?></option>
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val->group_srl ?>" <?php if($__Context->selected_group_srl==$__Context->val->group_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
            <?php } ?>
        </select>
        <select name="search_target">
            <option value="" <?php if(!$__Context->search_target){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->search_target ?></option>
            <option value="email_address" <?php if($__Context->search_target=='email_address'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->email ?></option>
            <option value="user_id" <?php if($__Context->search_target=='user_id'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->user_id ?></option>
            <!--option value="user_name" <?php if($__Context->search_target=='user_name'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->user_name ?></option-->
            <option value="nick_name" <?php if($__Context->search_target=='nick_name'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','type',$__Context->type,'act',$__Context->act,'module',$__Context->module) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
<form id="attendanceMode" action="<?php echo getUrl('') ?>" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
    <input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
    <input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
    <input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
    <input type="hidden" name="check_day" value=""/>
    <input type="hidden" name="member_srl" value ="" />
</form>
<table cellspacing="0" class="attendanceTable">
    <col align="center" />
        <tr>
            <th class="center">
                <?php echo $__Context->lang->nick_name ?>
            </th>
            <td class="center">
                <?php echo $__Context->lang->user_id ?>
            </td>
            <!--th class="center">
                <?php echo $__Context->lang->user_name ?>
            </th-->
            <?php for($__Context->j=1;$__Context->j<=$__Context->end_day;$__Context->j++){ ?>
            <td class="center">
                <?php if($__Context->j == $__Context->day){ ?><U><?php echo $__Context->j ?></U><?php }else{;
echo $__Context->j;
} ?>
            </td>
            <?php } ?>
        </tr>
    <?php if($__Context->user_data->data&&count($__Context->user_data->data))foreach($__Context->user_data->data as $__Context->val2){ ?>
    <tr>
        <th class="center"> 
            <?php $__Context->user_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val2->member_srl) ?><div class="member_<?php echo $__Context->user_info->member_srl ?>"><?php echo $__Context->user_info->nick_name ?></div>
        </th>
        <td class="center"> 
            <?php echo $__Context->user_info->user_id ?>
        </td>
        <!--th class="center"> 
            <?php echo $__Context->user_info->user_name ?>
        </th-->
        <?php for($__Context->j=1;$__Context->j<=$__Context->end_day;$__Context->j++){ ?>
        <td class="dotted">
            <?php $__Context->check_day=sprintf("%s%02d",$__Context->year_month,$__Context->j) ?>
            <?php $__Context->check =$__Context->Model->getAttendanceData($__Context->val2->member_srl,$__Context->check_day)  ?>
            <?php $__Context->check_error = $__Context->Model->getIsCheckedA($__Context->val2->member_srl, $__Context->check_day) ?>
            <?php if($__Context->check_error>=2){ ?>
                    <strong><a href="#fixAttendanceData" onclick="att_fix_attendance_data('<?php echo $__Context->val2->member_srl ?>','<?php echo $__Context->check_error ?>','<?php echo $__Context->check_day ?>','<?php echo $__Context->lang->attend_fix_att ?>','<?php echo $__Context->user_info->nick_name ?>');">?</a></strong>
	            <?php }elseif($__Context->check){ ?>
                    <a href="#uncheck" onclick="att_toggleStatus(0, '<?php echo $__Context->val2->member_srl ?>', '<?php echo $__Context->check_day ?>');">●</a>
	            <?php }elseif(!$__Context->check){ ?>
		            <a href="#check" onclick="att_toggleStatus(1, '<?php echo $__Context->val2->member_srl ?>', '<?php echo $__Context->check_day ?>');">×</a>
	            <?php } ?>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
        </form>
<div class="pagination a1">
   <a href="<?php echo getUrl('page','','module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->user_data->page_navigation->getNextPage()){ ?>
        <?php if($__Context->user_data->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->user_data->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
<form action="<?php echo getUrl('') ?>" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="mid" value="" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
    <fieldset>
        <select name="selected_group_srl">
            <option value="0"><?php echo $__Context->lang->group ?></option>
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val->group_srl ?>" <?php if($__Context->selected_group_srl==$__Context->val->group_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
            <?php } ?>
        </select>
        <select name="search_target">
		<option value="" <?php if(!$__Context->search_target){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->search_target ?></option>
        <option value="email_address" <?php if($__Context->search_target=='user_id'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->email ?></option>
		<option value="user_id" <?php if($__Context->search_target=='user_id'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->user_id ?></option>
		<!--option value="user_name" <?php if($__Context->search_target=='user_name'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->user_name ?></option-->
		<option value="nick_name" <?php if($__Context->search_target=='nick_name'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','type',$__Context->type,'act',$__Context->act,'module',$__Context->module) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
