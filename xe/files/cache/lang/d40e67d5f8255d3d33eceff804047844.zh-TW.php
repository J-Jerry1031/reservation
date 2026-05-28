<?php
$lang->page='頁面';
$lang->none_content='This is empty page.';
$lang->cmd_manage_selected_page='Manage Selected Page';
$lang->about_page='可製作完整頁面的模組。利用最新主題列表或其他 Widgets 可以建立動態的頁面，且通過網頁編輯器做出多樣化的頁面。連結頁面網址和其他模組連結的方式相同。即：mid=模組名稱。選擇預設選項時，此頁面將變為首頁。';
$lang->cmd_page_modify='頁面編輯';
$lang->cmd_page_create='建立頁面';
$lang->cmd_page_article_create='建立主題';
$lang->page_caching_interval='暫存時間設置';
$lang->about_page_caching_interval='單位為分。暫存時間內頁面將輸出臨時儲存的資料。 輸出外部主機訊息或資料時，如消耗資源很大，盡量把暫存時間設大一點。 『0』表示不暫存。';
$lang->about_mcontent='此頁面為手機瀏覽頁面。如果沒有編輯此頁面，則會將預設頁面改編重新顯示。';
$lang->page_type='頁面類型';
$lang->click_choice='請選擇';
if(!is_array($lang->page_type_name)){
	$lang->page_type_name = array();
}
$lang->page_type_name['ARTICLE']='主題頁面';
$lang->page_type_name['WIDGET']='Widget 頁面';
$lang->page_type_name['OUTSIDE']='外連頁面';
$lang->about_page_type='請選擇想要建立的頁面。 <ol><li>Widget 頁面：是以 widgets 為主所建立的頁面。</li><li>主題頁面：可建立頁面的主題、內容及標簽。 </li><li>外連頁面：在 XE 中使用外部 HTML 或 PHP 檔案。</li></ol>';
$lang->opage_path='外連文章位置';
$lang->about_opage='This module enables to use external html or php files in XE. It allows absolute or relative path, and if the url starts with \'http://\' , it can display the external page of the server.';
$lang->about_opage_path='Please enter the location of external document. Both absolute path such as \'/path1/path2/sample.php\' or relative path such as \'../path2/sample.php\' can be used. If you input the path like \'http://url/sample.php\', the result will be received and then displayed. This is current XE\'s absolute path. ';
$lang->opage_mobile_path='手機外連文章位置';
$lang->about_opage_mobile_path='Please enter the location of external document for mobile view. If not inputted, it uses the external document specified above. Both absolute path such as \'/path1/path2/sample.php\' or relative path such as \'../path2/sample.php\' can be used. If you input the path like \'http://url/sample.php\', the result will be received and then displayed. This is current XE\'s absolute path. ';
$lang->page_management='頁面管理';
$lang->page_delete_warning='如果刪除頁面，頁面標題將會一起被刪除。';
$lang->msg_not_selected_page='선택한 페이지가 없습니다.';
