<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "0";
$layout_info->layout = "newsub";
$layout_info->type = "";
$layout_info->path = "./layouts/newsub/";
$layout_info->title = "";
$layout_info->description = "";
$layout_info->version = "0.1";
$layout_info->date = "20090505";
$layout_info->homepage = "http://www.goggg.co.kr";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "";
$layout_info->author[0]->email_address = "kisscome1@naver.com";
$layout_info->author[0]->homepage = "";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->colorset = new stdClass;
$layout_info->extra_var->colorset->group = "";
$layout_info->extra_var->colorset->title = "Colorset";
$layout_info->extra_var->colorset->type = "select";
$layout_info->extra_var->colorset->value = $vars->colorset;
$layout_info->extra_var->colorset->description = "Please select a colorset you want.";
$layout_info->extra_var->colorset->options = array();
$layout_info->extra_var->colorset->options["default"] = new stdClass;
$layout_info->extra_var->colorset->options["default"]->val = "Basic";
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "Logo image";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "Please input a logo image which will be displayed on the top of layout. (Transparent image with height of 23px is recommended.)";
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = "";
$layout_info->extra_var->index_url->title = "Homepage URL";
$layout_info->extra_var->index_url->type = "text";
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = "Please input the URL to redirect when user clicks the logo";
$layout_info->extra_var->background_image = new stdClass;
$layout_info->extra_var->background_image->group = "";
$layout_info->extra_var->background_image->title = "Background Image";
$layout_info->extra_var->background_image->type = "image";
$layout_info->extra_var->background_image->value = $vars->background_image;
$layout_info->extra_var->background_image->description = "Please input if you want to use background image.";
$layout_info->extra_var_count = "4";
$layout_info->menu_count = "2";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "Top menu";
$layout_info->menu->main_menu->maxdepth = "3";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";
$layout_info->menu->bottom_menu = new stdClass;
$layout_info->menu->bottom_menu->name = "bottom_menu";
$layout_info->menu->bottom_menu->title = "Bottom menu";
$layout_info->menu->bottom_menu->maxdepth = "1";
$layout_info->menu->bottom_menu->menu_srl = $vars->bottom_menu;
$layout_info->menu->bottom_menu->xml_file = "./files/cache/menu/".$vars->bottom_menu.".xml.php";
$layout_info->menu->bottom_menu->php_file = "./files/cache/menu/".$vars->bottom_menu.".php";
 $layout_info->header_script = "<meta name=\"keywords\" content=\"키스방,종로키스방,키스미,을지로키스방,동대문키스방,종각키스방,영등포키스방,사당키스방,홍대키스방,마포키스방,강남키스방,수원키스방,일산키스방,홍데키스데이,키스데이,연신내키스방,방배키스방,여의도키스방,목동키스방,신림키스방,신촌키스방,서울대입구키스방,분당키스방,건대키스방,강동키스방,노원키스방,천호동키스방,길동키스방,수유리키스방,미아리키스방,성신여대키스방,구로키스방,용산키스방,보문키스방,서대문키스방,논현동키스방,역삼키스방,잠실키스방,명동키스방,엘프키스방,인천키스방,부평키스방,부천키스방,구로키스방,화곡키스방,이태원키스방,압구정키스방,종로2가키스방,키스방후기,키스방추천,키스방매니저,키스방가격,키스방수위,키스방위치\">
<meta name=\"description\" content=\"키스미 종로키스방\">

<meta name=\"keywords\" content=\"키스방,종로키스방,키스미,을지로키스방,동대문키스방,종각키스방,키스방,종로키스방,키스미,을지로키스방,동대문키스방,종각키스방,영등포키스방,사당키스방,홍대키스방,마포키스방,강남키스방,수원키스방,일산키스방,홍데키스데이,키스데이,연신내키스방,방배키스방,여의도키스방,목동키스방,신림키스방,신촌키스방,서울대입구키스방,분당키스방,건대키스방,강동키스방,노원키스방,천호동키스방,길동키스방,수유리키스방,미아리키스방,성신여대키스방,구로키스방,용산키스방,보문키스방,서대문키스방,논현동키스방,역삼키스방,잠실키스방,명동키스방,엘프키스방,인천키스방,부평키스방,부천키스방,구로키스방,화곡키스방,이태원키스방,압구정키스방,종로2가키스방,키스방후기,키스방추천,키스방매니저,키스방가격,키스방수위,키스방위치\">
<meta name=\"description\" content=\"키스방,종로키스방,키스미,을지로키스방,동대문키스방,종각키스방,영등포키스방,사당키스방,홍대키스방,마포키스방,강남키스방,수원키스방,일산키스방,홍데키스데이,키스데이,연신내키스방,방배키스방,여의도키스방,목동키스방,신림키스방,신촌키스방,서울대입구키스방,분당키스방,건대키스방,강동키스방,노원키스방,천호동키스방,길동키스방,수유리키스방,미아리키스방,성신여대키스방,구로키스방,용산키스방,보문키스방,서대문키스방,논현동키스방,역삼키스방,잠실키스방,명동키스방,엘프키스방,인천키스방,부평키스방,부천키스방,구로키스방,화곡키스방,이태원키스방,압구정키스방,종로2가키스방,키스방후기,키스방추천,키스방매니저,키스방가격,키스방수위,키스방위치\">
<!-- LOG corp Web Analitics & Live Chat START -->
<script type=\"text/javascript\">
	var HTTP_MSN_MEMBER_NAME=\"\";/*member name*/
	var _HUsrSvrAddr=\"http://asp9.http.or.kr\",_HRndTmpGuid=\"r\"+(new Date().getTime()*Math.random()*9*Math.random()*0.9);
	function _HLogChkHead(){
		if(document.getElementsByTagName(\"head\")[0]){_HDwnLogSrc()}else{window.setTimeout(_HLogChkHead,30)}
	}
	function _HDwnLogSrc(){
		var h=document.getElementsByTagName(\"head\")[0];var s=document.createElement(\"script\");s.type=\"text/javascript\";
		if(h){h.appendChild(s);s.src=_HUsrSvrAddr+\"/HTTP_MSN/UsrConfig/kk22jj/js/ASP_Conf.js?s=\"+_HRndTmpGuid;}
	};
	document.write('<img src=\"'+_HUsrSvrAddr+'/[sr].gif?d='+_HRndTmpGuid+'\" style=\"width:1px;height:1px;display:none;position:absolute;\" onload=\"_HLogChkHead()\" />');
</script>
<noscript><img src=\"http://asp9.http.or.kr/HTTP_MSN/Messenger/Noscript.asp?key=kk22jj\" border=\"0\" style=\"display:none;width:0;height:0;\" /></noscript>
<!-- LOG corp Web Analitics & Live Chat END -->"; 