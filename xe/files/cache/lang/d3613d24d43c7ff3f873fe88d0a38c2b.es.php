<?php
$lang->cmd_comment_do='Usted ';
$lang->comment_list='Comentarios Lista';
$lang->cmd_toggle_checked_comment='Invert Selection';
$lang->cmd_delete_checked_comment='Eliminar lo seleccionado';
$lang->trash='Recycle Bin';
$lang->cmd_trash='Move to Recycle Bin';
$lang->comment_count='Number of Comments';
$lang->about_comment_count='Display comments and if the number of them is over a specified number, move to the comment list.';
$lang->msg_cart_is_null='Selecciona el commentario que desea eliminar';
$lang->msg_checked_comment_is_deleted='%d comentario eliminado correctamente.';
if(!is_array($lang->search_target_list)){
	$lang->search_target_list = array();
}
$lang->search_target_list['content']='Contenido';
$lang->search_target_list['user_id']='ID';
$lang->search_target_list['user_name']='Nombre';
$lang->search_target_list['nick_name']='Apodo';
$lang->search_target_list['member_srl']='Member Serial';
$lang->search_target_list['email_address']='Correo Electrónico';
$lang->search_target_list['homepage']='Página web';
$lang->search_target_list['regdate']='Fecha del registro';
$lang->search_target_list['last_update']='Ultima actualización';
$lang->search_target_list['ipaddress']='Dirección IP';
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
