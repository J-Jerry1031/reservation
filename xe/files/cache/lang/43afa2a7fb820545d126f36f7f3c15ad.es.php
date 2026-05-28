<?php
$lang->feed='Publish RSS Feed';
$lang->total_feed='Aggregated Feeds';
$lang->rss_disable='Desactivar RSS';
$lang->feed_copyright='Copyright';
$lang->feed_document_count='Number of articles per page';
$lang->feed_image='Feed Image';
$lang->rss_type='Tipo de RSS a imprimir';
$lang->open_rss='Abrir RSS';
if(!is_array($lang->open_rss_types)){
	$lang->open_rss_types = array();
}
$lang->open_rss_types['Y']='Abrir todo';
$lang->open_rss_types['H']='Abrir el sumario';
$lang->open_rss_types['N']='No abrir';
$lang->open_feed_to_total='Included in aggregated feed';
$lang->about_rss_disable='Si selecciona esta opción, RSS será desactivado.';
$lang->about_rss_type='Usted puede asignar el tipo de RSS a imprimir.';
$lang->about_open_rss='Usted puede seleccionar RSS abierto al público en el módulo actual.\nIndependiente de la atribución de ver, dependiendo de la opción de RSS puede ser abierto al público.';
$lang->about_feed_description='You can enter the description on the RSS feed to be published. If you don\'t enter this, the description of each module is displayed by default.';
$lang->about_feed_copyright='You can enter copyright information on the RSS feed. If you don\'t enter this, the copyright of the entire RSS feeds is applied.';
$lang->about_feed_document_count='Number of articles to be displayed on one feed page (default: 15)';
$lang->msg_rss_is_disabled='Función de RSS esta desactivada.';
$lang->msg_rss_invalid_image_format='Invalid image format. \nOnly JPEG, GIF, and PNG files are supported.';
