<?php
$lang->feed='Создать(Feed)';
$lang->total_feed='Общий Feed';
$lang->rss_disable='Отключить RSS';
$lang->feed_copyright='Копирайт';
$lang->feed_document_count='Количество записей на страницу';
$lang->feed_image='Картинка Feed';
$lang->rss_type='Тип RSS';
$lang->open_rss='Показать RSS';
if(!is_array($lang->open_rss_types)){
	$lang->open_rss_types = array();
}
$lang->open_rss_types['Y']='Показать все';
$lang->open_rss_types['H']='Показать выдержку';
$lang->open_rss_types['N']='Не показывать';
$lang->open_feed_to_total='Включено в общий Feed';
$lang->about_rss_disable='Если выбрано, RSS будет отключен.';
$lang->about_rss_type='Вы можете присвоить тип RSS.';
$lang->about_open_rss='Вы можете выбрать для того, чтобы RSS доступен публично.\nНезависимо от разрешений для статьи, RSS будет доступна публично согласно ее настройке.';
$lang->about_feed_description='You can enter the description on the RSS feed to be published. If you don\'t enter this, the description of each module is displayed by default.';
$lang->about_feed_copyright='You can enter copyright information on the RSS feed. If you don\'t enter this, the copyright of the entire RSS feeds is applied.';
$lang->about_feed_document_count='Number of articles to be displayed on one feed page (default: 15)';
$lang->msg_rss_is_disabled='Функция RSS выключена.';
$lang->msg_rss_invalid_image_format='Неправильный тип картинки\nПоддерживаются только JPEG, GIF, PNG файлы';
