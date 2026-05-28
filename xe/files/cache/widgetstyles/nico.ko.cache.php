<?php if(!defined("__XE__")) exit();
$widgetStyle_info = new stdClass();
$widgetStyle_info->widgetStyle = "nico";
$widgetStyle_info->path = "./widgetstyles/nico/";
$widgetStyle_info->title = "nico 위젯스타일";
$widgetStyle_info->description = "
    매우 심플하고 세련된 위젯 스타일입니다.
    이미지를 사용하지 않았습니다.
  ";
$widgetStyle_info->version = "1.2";
$widgetStyle_info->date = "20121026";
$widgetStyle_info->homepage = "";
$widgetStyle_info->license = "";
$widgetStyle_info->license_link = "";
$widgetStyle_info->preview = "./widgetstyles/nico/preview.png";
$widgetStyle_info->author[0] = new stdClass();
$widgetStyle_info->author[0]->name = "WebEngine";
$widgetStyle_info->author[0]->email_address = "gsts007@naver.com";
$widgetStyle_info->author[0]->homepage = "http://www.webengine.co.kr";
$widgetStyle_info->extra_var = new stdClass();
$widgetStyle_info->extra_var->ws_title = new stdClass();
$widgetStyle_info->extra_var->ws_title->group = "";
$widgetStyle_info->extra_var->ws_title->name = "제목";
$widgetStyle_info->extra_var->ws_title->type = "text";
$widgetStyle_info->extra_var->ws_title->value = $vars->ws_title;
$widgetStyle_info->extra_var->ws_title->description = "제목 텍스트 내용을 입력합니다.";
$widgetStyle_info->extra_var->ws_title_link = new stdClass();
$widgetStyle_info->extra_var->ws_title_link->group = "";
$widgetStyle_info->extra_var->ws_title_link->name = "제목 링크";
$widgetStyle_info->extra_var->ws_title_link->type = "text";
$widgetStyle_info->extra_var->ws_title_link->value = $vars->ws_title_link;
$widgetStyle_info->extra_var->ws_title_link->description = "제목 클릭시 이동할 링크입니다. 입력하지 않으면 작동하지 않고 접기 펼치기 보다 우선순위가 높습니다.";
$widgetStyle_info->extra_var->ws_bordercolor = new stdClass();
$widgetStyle_info->extra_var->ws_bordercolor->group = "";
$widgetStyle_info->extra_var->ws_bordercolor->name = "제목 테두리 색상";
$widgetStyle_info->extra_var->ws_bordercolor->type = "text";
$widgetStyle_info->extra_var->ws_bordercolor->value = $vars->ws_bordercolor;
$widgetStyle_info->extra_var->ws_bordercolor->description = "
        제목 부분의 테두리 색상을 설정합니다.
        RGB : rgb(0,0,0)<br />
        색상명 : black<br />
        16진수 : #000000<br />
        16진수 단축 : #000<br /><br />
        모두 사용 가능합니다.<br /><br />
        기본값 : #ddd
      ";
$widgetStyle_info->extra_var->ws_startcolor = new stdClass();
$widgetStyle_info->extra_var->ws_startcolor->group = "";
$widgetStyle_info->extra_var->ws_startcolor->name = "그라데이션 위쪽 색상";
$widgetStyle_info->extra_var->ws_startcolor->type = "text";
$widgetStyle_info->extra_var->ws_startcolor->value = $vars->ws_startcolor;
$widgetStyle_info->extra_var->ws_startcolor->description = "
        제목 부분의 그라데이션 배경의 맨 위쪽의 색상을 설정합니다.<br /><br />
        RGB : rgb(0,0,0)<br />
        색상명 : black<br />
        16진수 : #000000<br />
        16진수 단축 : #000<br /><br />
        모두 사용 가능합니다.<br /><br />
        기본값 : #fff
      ";
$widgetStyle_info->extra_var->ws_endcolor = new stdClass();
$widgetStyle_info->extra_var->ws_endcolor->group = "";
$widgetStyle_info->extra_var->ws_endcolor->name = "그라데이션 아래쪽 색상";
$widgetStyle_info->extra_var->ws_endcolor->type = "text";
$widgetStyle_info->extra_var->ws_endcolor->value = $vars->ws_endcolor;
$widgetStyle_info->extra_var->ws_endcolor->description = "
        제목 부분의 그라데이션 배경의 맨 위쪽의 색상을 설정합니다.<br /><br />
        RGB : rgb(0,0,0)<br />
        색상명 : black<br />
        16진수 : #000000<br />
        16진수 단축 : #000<br /><br />
        모두 사용 가능합니다.<br /><br />
        기본값 : #f7f7f7
      ";
$widgetStyle_info->extra_var->ws_border = new stdClass();
$widgetStyle_info->extra_var->ws_border->group = "";
$widgetStyle_info->extra_var->ws_border->name = "Content 테두리 및 배경 제거";
$widgetStyle_info->extra_var->ws_border->type = "select";
$widgetStyle_info->extra_var->ws_border->value = $vars->ws_border;
$widgetStyle_info->extra_var->ws_border->description = "Content 영역의 둥근 테두리 및 배경을 지우는 기능입니다.";
$widgetStyle_info->extra_var->ws_border->options["C"] = "제거";
$widgetStyle_info->extra_var->ws_border->options["O"] = "제거 안함";
$widgetStyle_info->extra_var_count = 6;