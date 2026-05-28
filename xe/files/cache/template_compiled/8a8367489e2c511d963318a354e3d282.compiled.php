<?php if(!defined("__XE__"))exit;
$__Context->year_month=substr($__Context->selected_date,0,6) ?>
<?php $__Context->year = substr($__Context->selected_date,0,4) ?>
<?php $__Context->month = substr($__Context->selected_date,4,2) ?>
<?php $__Context->eom = date('t', mktime(0,0,0,$__Context->month,1,$__Context->year)) ?>
<?php $__Context->position=1+($__Context->user_data->page-1)*20 ?>
<div ><?php echo $__Context->lang->attendance_search_help ?></div>
<form action="<?php echo getUrl('') ?>" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="mid" value="" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
    <fieldset>
        <select name="unjoined_members">
            <option value="N" <?php if(!$__Context->unjoined_members){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_about_unjoined_member ?></option>
            <option value="Y" <?php if($__Context->unjoined_members){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_unjoined_member ?></option>
        </select>
        <select name="selected_group_srl">
            <option value="0"><?php echo $__Context->lang->group ?></option>
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val->group_srl ?>" <?php if($__Context->selected_group_srl==$__Context->val->group_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
            <?php } ?>
        </select>
        <select name="search_target">
            <option value="" <?php if(!$__Context->search_target){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->search_target ?></option>
            <option value="user_id" <?php if($__Context->search_target=='user_id'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->user_id ?></option>
            <option value="email_address" <?php if($__Context->search_target=='email_address'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->email ?></option>
            <option value="nick_name" <?php if($__Context->search_target=='nick_name'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','type',$__Context->type,'act',$__Context->act,'module',$__Context->module) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
<table cellspacing="0" class="rowTable attendanceTable" >
	<tr>
		<th class="center">
			<?php echo $__Context->lang->position ?>
		</th>
		<td class="center">
			<?php echo $__Context->lang->email ?>
		</td>
		<th class="center">
			<?php echo $__Context->lang->nick_name ?>
		</th>
		<!--td class="center">
			<?php echo $__Context->lang->user_name ?>
		</td-->
		<th width="40%" style="min-width:240px;" class="center">
			<?php echo $__Context->lang->view_monthly_day ?>
		</th>
		<td class="center">
			<?php echo $__Context->lang->view_monthly_point ?>
		</td>
	</tr>
<?php if($__Context->user_data->data&&count($__Context->user_data->data))foreach($__Context->user_data->data as $__Context->ranking){ ?>
<tr>
	<th class="center"> 
		<?php echo $__Context->position ?>
	</th>
	<td class="center"> 
		<?php $__Context->user_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->ranking->member_srl) ?>
        <?php echo $__Context->user_info->email_address ?>
	</td>
	<th class="center"> 
		<div class="member_<?php echo $__Context->user_info->member_srl ?>"><?php echo $__Context->user_info->nick_name ?></div>
	</th>
	<!--td class="center"> 
		<?php echo $__Context->user_info->user_name ?>
	</td-->
	<th width="40%" style="width:300px;">
			<div class="admin_graph">
				<?php $__Context->percent=(int)($__Context->ranking->monthly/$__Context->eom * 100) ?>
                <div class="progress" style="width:230px;">
                    <div class="bar bar-success" style="width:<?php echo $__Context->percent ?>%;"></div><?php if($__Context->percent>=50){;
if($__Context->percent == 100){;
echo $__Context->lang->attendance_perfect;
}else{;
echo $__Context->percent ?>%<?php };
}else{ ?>&nbsp;<?php } ?>
                </div>
					<div class="num" style="left:230px;width:70px;">
					<strong><?php echo $__Context->ranking->monthly ?></strong>/<?php echo $__Context->eom;
if($__Context->percent<50){ ?>(<?php echo $__Context->percent ?>%)<?php } ?>
					</div>
        		</div>
	</th>
	<td class="center">
       <?php echo $__Context->ranking->monthly_point ?>
	</td>
</tr>
<?php $__Context->position++ ?>
<?php } ?>
</table>
<div class="pagination a1">
   <a href="<?php echo getUrl('page',$__Context->user_data->page_navigation->first_page,'module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->user_data->page_navigation->getNextPage()){ ?>
        <?php if($__Context->user_data->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->user_data->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
