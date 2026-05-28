<?php
$lang->page='Страница';
$lang->none_content='This is empty page.';
$lang->cmd_manage_selected_page='Manage Selected Page';
$lang->about_page='Это модуль блога, который создает полную страницу. Используя последние и другие виджеты, Вы можете создавать динамические страницы. Посредством компонента редактора, Вы можете также создать различные вариации страницы. URL модуля следует тем же правилам, что и другие модули: mid=имя_модуля. Если он выбран как модуль по умолчанию, то он будет главной страницей сайта.';
$lang->cmd_page_modify='Изменить';
$lang->cmd_page_create='Create a Page';
$lang->cmd_page_article_create='Create an Article';
$lang->page_caching_interval='Установить время кеширования';
$lang->about_page_caching_interval='Единица измерения равна одной минуте. Это отображает временно сохраненные данные для присвоенного времени. Рекомендуется устанавливать разумное время кеширования, если множество ресурсов нуждаются в показе данных с других серверов. Значение 0 отключает кеширование.';
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
