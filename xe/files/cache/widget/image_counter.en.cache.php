<?php if(!defined("__XE__")) exit(); $widget_info = new stdClass;$widget_info->widget = "image_counter";$widget_info->path = "./widgets/image_counter/";$widget_info->title = "Image Counter";$widget_info->description = "
		Image counter widget presents a small graph showing the number of visitors, which you can attach to your blogs or sites.
		Unless you configure settings, such as size, and background color, it uses predefined configuration.
		To show the graph, GD library should be installed.
	";$widget_info->version = "0.1";$widget_info->date = "20070827";$widget_info->homepage = "";$widget_info->license = "";$widget_info->license_link = "";$widget_info->widget_srl = $widget_srl;$widget_info->widget_title = $widget_title;$widget_info->author[0] = new stdClass;$widget_info->author[0]->name = "zero";$widget_info->author[0]->email_address = "zero@zeroboard.com";$widget_info->author[0]->homepage = "http://www.zeroboard.com";$widget_info->extra_var_count = "9";$widget_info->extra_var->graph_width = new stdClass;$widget_info->extra_var->graph_width->group = "";$widget_info->extra_var->graph_width->name = "Width";$widget_info->extra_var->graph_width->type = "text";$widget_info->extra_var->graph_width->value = $vars->graph_width;$widget_info->extra_var->graph_width->description = "
				You can set the width of the graph image.
				If you don't input any value, it will be defined as 150px.
				This value is applied differently from widget's width you can find at the bottom of this page.
			";$widget_info->extra_var->graph_height = new stdClass;$widget_info->extra_var->graph_height->group = "";$widget_info->extra_var->graph_height->name = "Height";$widget_info->extra_var->graph_height->type = "text";$widget_info->extra_var->graph_height->value = $vars->graph_height;$widget_info->extra_var->graph_height->description = "
				You can set the height of the graph image.
				If you don't input any value, it will be defined as 100px.
			";$widget_info->extra_var->day_range = new stdClass;$widget_info->extra_var->day_range->group = "";$widget_info->extra_var->day_range->name = "Duration";$widget_info->extra_var->day_range->type = "text";$widget_info->extra_var->day_range->value = $vars->day_range;$widget_info->extra_var->day_range->description = "
				The graph would contain the data of the assigned duration from today.
				Input numerical value (unit:day, default: past 7 days).
			";$widget_info->extra_var->bg_color = new stdClass;$widget_info->extra_var->bg_color->group = "";$widget_info->extra_var->bg_color->name = "Background Color";$widget_info->extra_var->bg_color->type = "text";$widget_info->extra_var->bg_color->value = $vars->bg_color;$widget_info->extra_var->bg_color->description = "
				Set background color as the assigned color code.
				Default : <span style=\"color:#FFFFFF\">#FFFFFF</span>
				Input as # + 6 digit color code.
			";$widget_info->extra_var->check_bg_color = new stdClass;$widget_info->extra_var->check_bg_color->group = "";$widget_info->extra_var->check_bg_color->name = "Background Color for the Darker part";$widget_info->extra_var->check_bg_color->type = "text";$widget_info->extra_var->check_bg_color->value = $vars->check_bg_color;$widget_info->extra_var->check_bg_color->description = "
				Set background color of the darker part as the assigned color code.
				Default : <span style=\"color:#F9F9F9\">#F9F9F9</span>
				Input as # + 6 digit color code.
			";$widget_info->extra_var->grid_color = new stdClass;$widget_info->extra_var->grid_color->group = "";$widget_info->extra_var->grid_color->name = "Color of Grid";$widget_info->extra_var->grid_color->type = "text";$widget_info->extra_var->grid_color->value = $vars->grid_color;$widget_info->extra_var->grid_color->description = "
				Set the color of grid as the assigned color code.
				Default : <span style=\"color:#9d9d9d\">#9d9d9d</span>
				Input as # + 6 digit color code.
			";$widget_info->extra_var->unique_line_color = new stdClass;$widget_info->extra_var->unique_line_color->group = "";$widget_info->extra_var->unique_line_color->name = "Color of the Lines";$widget_info->extra_var->unique_line_color->type = "text";$widget_info->extra_var->unique_line_color->value = $vars->unique_line_color;$widget_info->extra_var->unique_line_color->description = "
				Set the color of the lines in the graph as the assigned color code.
				Default : <span style=\"color:#BBBBBB\">#BBBBBB</span>
				Input as # + 6 digit color code.
			";$widget_info->extra_var->unique_text_color = new stdClass;$widget_info->extra_var->unique_text_color->group = "";$widget_info->extra_var->unique_text_color->name = "Character Color of the number of visitors";$widget_info->extra_var->unique_text_color->type = "text";$widget_info->extra_var->unique_text_color->value = $vars->unique_text_color;$widget_info->extra_var->unique_text_color->description = "
				Set the color of the number of visitors as the assigned color code.
				Default : <span style=\"color:#666666\">#666666</span>
				Input as # + 6 digit color code.
			";$widget_info->extra_var->point_color = new stdClass;$widget_info->extra_var->point_color->group = "";$widget_info->extra_var->point_color->name = "Color of Points";$widget_info->extra_var->point_color->type = "text";$widget_info->extra_var->point_color->value = $vars->point_color;$widget_info->extra_var->point_color->description = "
				Set the color of the points as the assigned color code.
				Default : <span style=\"color:#ed3027\">#ed3027</span>
				Input as # + 6 digit color code.
			"; ?>