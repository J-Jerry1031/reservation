<?php
$lang->cmd_comment_do='将把此评论..';
$lang->comment_list='评论列表';
$lang->cmd_toggle_checked_comment='反选';
$lang->cmd_delete_checked_comment='删除所选';
$lang->trash='Recycle Bin';
$lang->cmd_trash='Move to Recycle Bin';
$lang->comment_count='每页评论数';
$lang->about_comment_count='可以指定要显示的每页评论数。';
$lang->msg_cart_is_null='请选择要删除的评论。';
$lang->msg_checked_comment_is_deleted='已删除%d个评论。';
if(!is_array($lang->search_target_list)){
	$lang->search_target_list = array();
}
$lang->search_target_list['content']='内容';
$lang->search_target_list['user_id']='I D';
$lang->search_target_list['user_name']='姓名';
$lang->search_target_list['nick_name']='昵称';
$lang->search_target_list['member_srl']='会员编号';
$lang->search_target_list['email_address']='电子信箱';
$lang->search_target_list['homepage']='主页';
$lang->search_target_list['regdate']='日期';
$lang->search_target_list['last_update']='最后更新 ';
$lang->search_target_list['ipaddress']='IP 地址';
$lang->search_target_list['is_secret']='Status';
$lang->no_text_comment='No text in this comment.';
if(!is_array($lang->secret_name_list)){
	$lang->secret_name_list = array();
}
$lang->secret_name_list['Y']='Secret';
$lang->secret_name_list['N']='Public';
if(!is_array($lang->published_name_list)){
	$lang->published_name_list = array();
}
$lang->published_name_list['Y']='Published';
$lang->published_name_list['N']='Unpublished';
$lang->comment_manager='Manage Selected Comment';
$lang->selected_comment='Selected Comment';
$lang->cmd_comment_validation='Use comment validation';
$lang->about_comment_validation='If you want to use comment validation before displaying on your module frontend select USE, otherwise select NOT USE.';
$lang->published='Publish status';
$lang->cmd_publish='Publish';
$lang->cmd_unpublish='Unpublish';
$lang->select_module='Select Module';
$lang->page='Page';
$lang->msg_not_selected_comment='There are no selected comment.';
