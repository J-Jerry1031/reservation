<?php
$lang->cmd_comment_do='Эту запись';
$lang->comment_list='Список записей';
$lang->cmd_toggle_checked_comment='Изменить выбранное';
$lang->cmd_delete_checked_comment='Удалить выбранное';
$lang->trash='Recycle Bin';
$lang->cmd_trash='Move to Recycle Bin';
$lang->comment_count='Количество ответов';
$lang->about_comment_count='Отображается указанное количество ответов, после превышения этого количества производится переход к списку.';
$lang->msg_cart_is_null='Пожалуйста, выберите записи для удаления.';
$lang->msg_checked_comment_is_deleted='%d записьуспешно удалена';
if(!is_array($lang->search_target_list)){
	$lang->search_target_list = array();
}
$lang->search_target_list['content']='Содержание';
$lang->search_target_list['user_id']='ID';
$lang->search_target_list['user_name']='Имя';
$lang->search_target_list['nick_name']='Ник';
$lang->search_target_list['member_srl']='Номер пользователя';
$lang->search_target_list['email_address']='Email адрес';
$lang->search_target_list['homepage']='Домашняя страница';
$lang->search_target_list['regdate']='Дата регистрации';
$lang->search_target_list['last_update']='Дата последнего обновления';
$lang->search_target_list['ipaddress']='IP-адрес';
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
