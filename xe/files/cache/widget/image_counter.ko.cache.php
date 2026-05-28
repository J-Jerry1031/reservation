<?php if(!defined("__XE__")) exit(); $widget_info = new stdClass;$widget_info->widget = "image_counter";$widget_info->path = "./widgets/image_counter/";$widget_info->title = "이미지 카운터 위젯";$widget_info->description = "
		XE의 기본 카운터를 블로그나 사이트에 달 수 있는 작은 그래프로 표시를 합니다.
		크기, 배경색등의 조건을 설정하지 않으시면 기본 설정으로 사용됩니다.
		그래프를 그리기 위해서 GD 라이브러리가 설치되어 있어야 합니다.
	";$widget_info->version = "0.1";$widget_info->date = "20070827";$widget_info->homepage = "";$widget_info->license = "";$widget_info->license_link = "";$widget_info->widget_srl = $widget_srl;$widget_info->widget_title = $widget_title;$widget_info->author[0] = new stdClass;$widget_info->author[0]->name = "제로";$widget_info->author[0]->email_address = "zero@zeroboard.com";$widget_info->author[0]->homepage = "http://www.zeroboard.com";$widget_info->extra_var_count = "9";$widget_info->extra_var->graph_width = new stdClass;$widget_info->extra_var->graph_width->group = "";$widget_info->extra_var->graph_width->name = "가로 크기";$widget_info->extra_var->graph_width->type = "text";$widget_info->extra_var->graph_width->value = $vars->graph_width;$widget_info->extra_var->graph_width->description = "
				그래프 이미지의 가로크기를 지정하실 수 있습니다.
				지정하지 않으시면 150px로 지정되며 숫자로 입력을 해주세요.
				코드 생성 페이지의 하단에 있는 가로크기와 다르게 적용됩니다.
			";$widget_info->extra_var->graph_height = new stdClass;$widget_info->extra_var->graph_height->group = "";$widget_info->extra_var->graph_height->name = "세로 크기";$widget_info->extra_var->graph_height->type = "text";$widget_info->extra_var->graph_height->value = $vars->graph_height;$widget_info->extra_var->graph_height->description = "
				그래프 이미지의 세로 크기를 지정하실 수 있습니다.
				지정하지 않으시면 100px로 지정되며 숫자로 입력을 해주세요.
			";$widget_info->extra_var->day_range = new stdClass;$widget_info->extra_var->day_range->group = "";$widget_info->extra_var->day_range->name = "출력 기간";$widget_info->extra_var->day_range->type = "text";$widget_info->extra_var->day_range->value = $vars->day_range;$widget_info->extra_var->day_range->description = "
				오늘부터 지정하신 출력기간 만큼의 데이터를 그래프로 출력합니다.
				숫자를 입력해주세요. (기본 지난 7일)
			";$widget_info->extra_var->bg_color = new stdClass;$widget_info->extra_var->bg_color->group = "";$widget_info->extra_var->bg_color->name = "배경색";$widget_info->extra_var->bg_color->type = "text";$widget_info->extra_var->bg_color->value = $vars->bg_color;$widget_info->extra_var->bg_color->description = "
				지정하신 색상 코드로 배경을 그립니다.
				기본 : #FFFFFF
				#과 6자리의 색상코드 입력해주세요
			";$widget_info->extra_var->check_bg_color = new stdClass;$widget_info->extra_var->check_bg_color->group = "";$widget_info->extra_var->check_bg_color->name = "체크 무늬 배경색";$widget_info->extra_var->check_bg_color->type = "text";$widget_info->extra_var->check_bg_color->value = $vars->check_bg_color;$widget_info->extra_var->check_bg_color->description = "
				지정하신 색상 코드로 체크 무늬 배경을 그립니다.
				기본 : <span style=\"color:#F9F9F9\">#F9F9F9</span>
				#과 6자리의 색상코드 입력해주세요
			";$widget_info->extra_var->grid_color = new stdClass;$widget_info->extra_var->grid_color->group = "";$widget_info->extra_var->grid_color->name = "격자 선 색";$widget_info->extra_var->grid_color->type = "text";$widget_info->extra_var->grid_color->value = $vars->grid_color;$widget_info->extra_var->grid_color->description = "
				지정하신 색상 코드로 xy 격자를 그립니다.
				기본 : <span style=\"color:#9d9d9d\">#9d9d9d</span>
				#과 6자리의 색상코드 입력해주세요
			";$widget_info->extra_var->unique_line_color = new stdClass;$widget_info->extra_var->unique_line_color->group = "";$widget_info->extra_var->unique_line_color->name = "그래프 선색";$widget_info->extra_var->unique_line_color->type = "text";$widget_info->extra_var->unique_line_color->value = $vars->unique_line_color;$widget_info->extra_var->unique_line_color->description = "
				지정하신 색상 코드로 그래프 선색을 그립니다.
				기본 : <span style=\"color:#BBBBBB\">#BBBBBB</span>
				#과 6자리의 색상코드 입력해주세요
			";$widget_info->extra_var->unique_text_color = new stdClass;$widget_info->extra_var->unique_text_color->group = "";$widget_info->extra_var->unique_text_color->name = "방문자 수 글자색";$widget_info->extra_var->unique_text_color->type = "text";$widget_info->extra_var->unique_text_color->value = $vars->unique_text_color;$widget_info->extra_var->unique_text_color->description = "
				지정하신 색상 코드로 방문자 수 글자를 표시합니다.
				Predefinido : <span style=\"color:#666666\">#666666</span>
				Ingrese # + 6 espacios del código del color
			";$widget_info->extra_var->point_color = new stdClass;$widget_info->extra_var->point_color->group = "";$widget_info->extra_var->point_color->name = "포인트 점 색";$widget_info->extra_var->point_color->type = "text";$widget_info->extra_var->point_color->value = $vars->point_color;$widget_info->extra_var->point_color->description = ""; ?>