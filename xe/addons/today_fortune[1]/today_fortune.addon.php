<?php
if(!defined('__XE__')) exit();

if($called_position != 'before_module_proc' || Context::getResponseMethod()!="HTML") return;

$logged_info = Context::get('logged_info');
if(!$logged_info) return;

$module = Context::get('module');
if(!$module) $module = $this->module;
if($module == 'admin') return;

if(!$logged_info->birthday) return;

//오늘 일자
$today = date('Ymd', time());
$showFortune = true;

// 오늘의 운세 제공 여부를 확인 
$flag_path = './files/member_extra_info/today_fortune_flags/'.getNumberingPath($logged_info->member_srl);
$flag_file = $flag_path.$logged_info->member_srl;

if(file_exists($flag_file)) {
	$today_fortune_date = trim(FileHandler::readFile($flag_file));
	
	if ($today == $today_fortune_date) {
		$showFortune = false;
	}
}

if (!$showFortune) return;

if ($showFortune) {
	FileHandler::writeFile($flag_file, $today);
}

Context::addCSSFile("./addons/today_fortune/jquery.jgrowl.css", false);
Context::addJsFile('./addons/today_fortune/jquery.jgrowl.min.js', false ,'', null, 'body');

require_once('./addons/today_fortune/today_fortune.lib.php');

$fortune = getTodayFortune($today, $logged_info->birthday, '1', '1');

$message = $message."\n$.jGrowl('[오늘의 운세]<br />".$fortune."<br /><br /><a href=\"http://www.erumy.com/free/todayFortune.aspx\" target=_blank>Copyright by ERUMY.COM</a></p>',{life: 60000 });";

$text = '<script type="text/javascript">jQuery(function($){'.$message.'});</script>';

if ($fortune) Context::addHtmlFooter($text);
?>