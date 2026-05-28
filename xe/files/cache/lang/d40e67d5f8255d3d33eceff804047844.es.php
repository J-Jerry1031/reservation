<?php
$lang->page='Página';
$lang->none_content='This is empty page.';
$lang->cmd_manage_selected_page='Manage Selected Page';
$lang->about_page='Esto es un módulo de blog, lo cual usted puede crear una página completa. Usando los últimos u otros widgets, Usted puede crear una página dinámica. A través del componente del editor, también puede crear páginas de gran variedad. URL de conección es el mismo que de los otros módulos como mid=Nombre del módulo. Si selcciona como predefinido esta página será la página principal del sitio.';
$lang->cmd_page_modify='Modificar';
$lang->cmd_page_create='Create a Page';
$lang->cmd_page_article_create='Create an Article';
$lang->page_caching_interval='Establezca el tiempo de cache';
$lang->about_page_caching_interval='La unidad es minuto, y se muestra temporal de los datos guardados por el tiempo asignado.   Se recomienda a la cache para una buena vez si una gran cantidad de recursos se necesitan otros servidores cuando se muestran los datos o la informacion.   Un valor de 0 no cache.';
$lang->about_mcontent='This is the page for the mobile view. If you do not write this page, the mobile view display reoragnized PC view\'s page.';
$lang->page_type='Page Type';
$lang->click_choice='Select';
if(!is_array($lang->page_type_name)){
	$lang->page_type_name = array();
}
$lang->page_type_name['ARTICLE']='Article Page';
$lang->page_type_name['WIDGET']='Widget Page';
$lang->page_type_name['OUTSIDE']='External Page';
$lang->about_page_type='Select Page Type to build a page. <ol><li>Widget: Create multiple widgets.</li><li>Article: Create articles with titles, contents and tags for posting page. </li><li>External Page: Use external HTML or PHP files in XE.</li></ol>';
$lang->opage_path='Location of External Document';
$lang->about_opage='This module enables to use external html or php files in XE. It allows absolute or relative path, and if the url starts with \'http://\' , it can display the external page of the server.';
$lang->about_opage_path='Please enter the location of external document. Both absolute path such as \'/path1/path2/sample.php\' or relative path such as \'../path2/sample.php\' can be used. If you input the path like \'http://url/sample.php\', the result will be received and then displayed. This is current XE\'s absolute path. ';
$lang->opage_mobile_path='Location of External Document for Mobile View';
$lang->about_opage_mobile_path='Please enter the location of external document for mobile view. If not inputted, it uses the external document specified above. Both absolute path such as \'/path1/path2/sample.php\' or relative path such as \'../path2/sample.php\' can be used. If you input the path like \'http://url/sample.php\', the result will be received and then displayed. This is current XE\'s absolute path. ';
$lang->page_management='Manage of page';
$lang->page_delete_warning='If you delete a page, the files of the page will be removed also.';
$lang->msg_not_selected_page='선택한 페이지가 없습니다.';
