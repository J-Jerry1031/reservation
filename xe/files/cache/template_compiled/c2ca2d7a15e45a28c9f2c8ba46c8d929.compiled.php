<?php if(!defined("__XE__"))exit;
Context::addHtmlHeader('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
Context::set("admin_bar","false");
if(!$__Context->_COOKIE['fakeM']) Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1">');
 ?>
<!--#Meta:layouts/doorweb_v4/css/layout.css--><?php $__tmp=array('layouts/doorweb_v4/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->bootstrap=='YES'){ ?><!--#Meta:layouts/doorweb_v4/css/bootstrap.min.css--><?php $__tmp=array('layouts/doorweb_v4/css/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:layouts/doorweb_v4/css/font-awesome.min.css--><?php $__tmp=array('layouts/doorweb_v4/css/font-awesome.min.css','','','-1');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->WEB_FONT == 'YES'){ ?><!--#Meta:layouts/doorweb_v4/css/default.layout.webfont.css--><?php $__tmp=array('layouts/doorweb_v4/css/default.layout.webfont.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:common/js/respond.min.js--><?php $__tmp=array('common/js/respond.min.js','','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doorweb_v4/js/layout.js--><?php $__tmp=array('layouts/doorweb_v4/js/layout.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doorweb_v4/js/jquery.scrollUp.min.js--><?php $__tmp=array('layouts/doorweb_v4/js/jquery.scrollUp.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){ ?>
   <?php if(file_exists('./common/js/jquery.min.js')){ ?>
   <?php  Context::addJsFile("./common/js/jquery.min.js", true, '', -10000011)  ?>
   <?php }elseif(file_exists('./common/js/jquery.js')){ ?>
   <?php  Context::addJsFile("./common/js/jquery.js", true, '', -10000011)  ?>
   <?php } ?>
   <style>
   .wrap_content{width:100% !important;}
   .content{padding:0 !important;}
   </style>
<?php } ?>
<?php if(!$__Context->layout_info->basic_color){;
$__Context->layout_info->basic_color = "#526bbe";
} ?>
<?php if(!$__Context->layout_info->slide_speed){;
$__Context->layout_info->slide_speed = "5000";
} ?>
<style>
<?php if($__Context->layout_info->basic_bg){ ?>
.xe{background-color:<?php echo $__Context->layout_info->basic_bg ?>}
<?php } ?>
<?php if($__Context->layout_info->basic_bgimg){ ?>
.xe{background-image:url(<?php echo $__Context->layout_info->basic_bgimg ?>);background-repeat:repeat;}
<?php } ?>
<?php if($__Context->layout_info->basic_color){ ?>
.header,
.gnb .nav li a:hover, 
.gnb .nav li a:focus,
.da-dots span,
.da-arrows span,
.bootstrap_body .btn-group .btn:hover,
.da-slide .da-link:hover,
.h2_widget span,
.camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span,
.owl-theme .owl-controls .owl-page.active span, 
.owl-theme .owl-controls.clickable .owl-page:hover span,
#scrollUp:hover {background-color:<?php echo $__Context->layout_info->basic_color ?>;}
.gnb .nav .open a.first_a,
.total_menu a:hover,
.total_menu a:focus,
.da-slide .da-link,
.h2_widget_a,
a:hover,
a:focus{color:<?php echo $__Context->layout_info->basic_color ?>;}
.da-slide .da-link {border-color:<?php echo $__Context->layout_info->basic_color ?>;}
<?php } ?>
<?php if($__Context->layout_info->xe_width){ ?>
.xe_width{max-width:<?php echo $__Context->layout_info->xe_width ?>px;}
<?php } ?>
<?php if($__Context->layout_info->menu_padding){ ?>
.nav li a.first_a{padding:20px <?php echo $__Context->layout_info->menu_padding ?>px;}
<?php } ?>
<?php if($__Context->layout_info->dropmenu_width){ ?>
.navbar-left .dropdown-menu{width:<?php echo $__Context->layout_info->dropmenu_width ?>px;}
<?php } ?>
<?php if($__Context->layout_info->total_menu_list){ ?>
.total_menu ul .H_first_li{width:<?php echo 100/$__Context->layout_info->total_menu_list ?>%;}
<?php } ?>
<?php if($__Context->layout_info->footer_menu_list){ ?>
.footer_li{width:<?php echo 100/$__Context->layout_info->footer_menu_list ?>%;}
<?php } ?>
<?php if($__Context->layout_info->main_slide){ ?>
<?php if($__Context->layout_info->slide_bg){ ?>
.da-slider{background:url(<?php echo $__Context->layout_info->slide_bg ?>) repeat;}
<?php } ?>
<?php if($__Context->layout_info->slide_title_color){ ?>
.da-slide h2,
.slide_color1{color:<?php echo $__Context->layout_info->slide_title_color ?>;}
<?php } ?>
<?php if($__Context->layout_info->slide_text_color){ ?>
.da-slide p,
.slide_color2{color:<?php echo $__Context->layout_info->slide_text_color ?>;}
<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->c_bg_1){ ?>
.wrap_widget1{background:<?php echo $__Context->layout_info->c_bg_1 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bottom_bg){ ?>
.wrap_widget2{background:<?php echo $__Context->layout_info->bottom_bg ?>;}
<?php } ?>
<?php if($__Context->layout_info->footer_bg){ ?>
.footer,
body{background-color:<?php echo $__Context->layout_info->footer_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->lnb_color){ ?>
.footer,
.in_lnb li.active{background-color:<?php echo $__Context->layout_info->lnb_color ?>;}
.lnb ul.in_lnb a{color:<?php echo $__Context->layout_info->lnb_color ?>;}
<?php } ?>
<?php if($__Context->layout_info->sub_bgimg){ ?>
.sub_header{background-image:url(<?php echo $__Context->layout_info->sub_bgimg ?>);}
<?php } ?>
<?php if($__Context->layout_info->c_bg){ ?>
.in_content{background-color:<?php echo $__Context->layout_info->c_bg ?>;}
<?php } ?>
</style>
<?php  $__Context->layout_info->so_widget = $__Context->layout_info->layout_srl*100;  ?>
<div class="xe <?php echo $__Context->layout_info->LAYOUT_TYPE ?>">
	<p class="skip"><a href="#body"><?php echo $__Context->lang->skip_to_content ?></a></p>
	<header class="header">
		<div class="xe_width">
			<h1>
				<a href="<?php echo geturl('') ?>" id="siteTitle">
					<?php if(!Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){ ?><img src="/xe/layouts/doorweb_v4/img/logo.png" alt="XpressEngine"><?php } ?>
					<?php if(Context::getSiteTitle() && !$__Context->layout_info->LOGO_IMG && !$__Context->layout_info->LOGO_TEXT){;
echo Context::getSiteTitle();
} ?>
					<?php if($__Context->layout_info->LOGO_IMG){ ?><img src="<?php echo $__Context->layout_info->LOGO_IMG ?>" alt="<?php echo $__Context->layout_info->LOGO_TEXT ?>"><?php } ?>
					<?php if(!$__Context->layout_info->LOGO_IMG && $__Context->layout_info->LOGO_TEXT){;
echo $__Context->layout_info->LOGO_TEXT;
} ?>
				</a>
			</h1>
			
			<!-- GNB -->
			<nav class="gnb" id="gnb">
				<ul class="nav navbar-nav navbar-left">
					<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><li class="dropdown">
						<a class="first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						<?php if($__Context->val1['list']){ ?><ul class="dropdown-menu">
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a></li><?php } ?>
						</ul><?php } ?>
					</li><?php } ?>
				</ul>
			</nav>
			<!-- /GNB -->
			<!-- User Dropdown -->
			<div class="navbar-right gnb">
				<ul class="nav navbar-nav member-menu">
					<li class="dropdown">
						<?php if($__Context->is_logged){ ?><a class="first_a" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?><i class="fa fa14 fa-sign-out"></i></a><?php } ?>
						<?php if(!$__Context->is_logged){ ?><a class="first_a" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?><i class="fa fa14 fa-sign-in"></i></a><?php } ?>
						<ul class="dropdown-menu">
							<?php if(!$__Context->is_logged){ ?>
							<li><a class="act_login" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
							<li><a href="<?php echo getUrl('act','dispMemberSignUpForm','mid', $__Context->layout_info->fbmember_info) ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
							<li><a href="<?php echo getUrl('act','dispMemberFindAccount','mid', $__Context->layout_info->fbmember_info) ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
							<?php } ?>
							<?php if($__Context->is_logged){ ?>
							<?php if($__Context->logged_info->is_admin=='Y' && !$__Context->site_module_info->site_srl){ ?><li><a href="<?php echo getUrl('','module','admin') ?>"><?php echo $__Context->lang->cmd_management ?></a></li><?php } ?>
							<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
							<li><a href="<?php echo getUrl('act','dispMemberInfo','mid', $__Context->layout_info->fbmember_info) ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
							<?php } ?>	
						</ul>
					</li>
					<li class="total_act_li"><a href="#" class="first_a act_menu">전체<i class="fa fa14 fa-bars"> </i></a></li>
				</ul>
			</div>
			<!-- END User Dropdown -->
		</div>
	</header>
	<div class="total_menu">	
		<div class="xe_width">
			<ul class="clearBoth">
				<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight H_first_li"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="H_first_li"<?php } ?>>
					<a class="door_a total_first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a><?php if($__Context->val1['list']){ ?><button class="Nav_i"><i class="fa fa-plus-square"></i><i class="fa fa-minus-square"></i></button><?php } ?>
					<?php if($__Context->val1['list']){ ?><ul class="total_sub1">
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li class="H_second_li">
							<a href="<?php echo $__Context->val2['href'] ?>" class="door_a" <?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><i class="fa fa-caret-right"></i> <?php echo $__Context->val2['text'] ?></a>
							
						</li><?php }} ?>
					</ul><?php } ?>
				</li><?php }} ?>		
			</ul>
		</div>
	</div>
	<?php if($__Context->layout_info->main_slide=='A'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/doorweb_v4/slider','da-slider.html');
} ?>
	<?php if($__Context->layout_info->main_slide=='B'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/doorweb_v4/slider','camera.html');
} ?>
	<?php if($__Context->layout_info->main_slide=='C'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/doorweb_v4/slider','swiper.html');
} ?>
	<?php if($__Context->layout_info->sub_top&&!Mobile::isMobileCheckByAgent()){ ?><div class="sub_header animation-pulseBgSlow">
		<div class="ie_sub_header"><?php if($__Context->layout_info->sub_bgimg){ ?><img src="<?php echo $__Context->layout_info->sub_bgimg ?>" alt="배경이미지" /><?php };
if(!$__Context->layout_info->sub_bgimg){ ?><img src="/xe/layouts/doorweb_v4/img/bg004.jpg" alt="배경이미지" /><?php } ?></div>
		<div class="xe_width">
			<h1><?php echo Context::getBrowserTitle() ?></h1>
			<!-- depth 1 -->
			<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key=>$__Context->val){;
if($__Context->val['selected']){;
$__Context->menu_depth1 = $__Context->val;
}} ?>
			<!-- depth 2 -->
			<?php if($__Context->menu_depth1['list']&&count($__Context->menu_depth1['list']))foreach($__Context->menu_depth1['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth1){;
$__Context->menu_depth2 = $__Context->val;
}} ?>
			<?php if($__Context->layout_info->breadclumb){ ?><div class="wrap_breadclumb">
				<ul class="breadclumb">
																	
					<li class="first_breadclumb">
						<a href="<?php echo getSiteUrl() ?>">
							<span>HOME</span><i class="fa fa-home"></i>
						</a>
					</li>
					<?php if($__Context->menu_depth1){ ?><li>
						<a href="<?php echo $__Context->menu_depth1['href'] ?>"><?php echo $__Context->menu_depth1['text'] ?></a>
					</li><?php } ?>
					<?php if($__Context->menu_depth2){ ?><li>
						<a href="<?php echo $__Context->menu_depth2['href'] ?>"><?php echo $__Context->menu_depth2['text'] ?></a>
					</li><?php } ?>
				</ul>
			</div><?php } ?>
		</div>
	</div><?php } ?>
	<?php if($__Context->layout_info->c_widget){ ?><div class="wrap_widget wrap_widget1">
		<div class="xe_width clearBoth">
			<?php if($__Context->layout_info->c_widget1_1||$__Context->layout_info->c_mid1_1){ ?><div class="widgetDW">
				<?php if($__Context->layout_info->c_title1_1){ ?><h2 class="h2_widget">
					<span class="round4"><?php echo $__Context->layout_info->c_title1_1 ?></span>
					<a class="h2_widget_a" href="<?php echo $__Context->layout_info->c_url1_1 ?>"><i class="fa fa18 fa-plus"></i></a>
				</h2><?php } ?>
				<div class="in_widget">
					<?php if($__Context->layout_info->c_style1_1=='A'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="normal" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_1 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+1 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="6" option_view="title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php if($__Context->layout_info->c_style1_1=='B'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="image_title_content" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_1 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+1 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="2" option_view="title,regdate,thumbnail,content" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php if($__Context->layout_info->c_style1_1=='C'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="gallery" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_1 ?>" widget_sequence="194" widget_cache="<?php echo $__Context->layout_info->so_widget+1 ?>" markup_type="table" page_count="1" content_cut_size="200" list_count="4" cols_list_count="2" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php echo $__Context->layout_info->c_widget1_1 ?>
				</div>
			</div><?php } ?>
			<?php if($__Context->layout_info->c_widget1_2||$__Context->layout_info->c_mid1_2){ ?><div class="widgetDW widgetDW_1">
				<?php if($__Context->layout_info->c_title1_2){ ?><h2 class="h2_widget">
					<span class="round4"><?php echo $__Context->layout_info->c_title1_2 ?></span>
					<a class="h2_widget_a" href="<?php echo $__Context->layout_info->c_url1_2 ?>"><i class="fa fa18 fa-plus"></i></a>
				</h2><?php } ?>
				<div class="in_widget">
					<?php if($__Context->layout_info->c_style1_2=='A'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="normal" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_2 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+2 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="6" option_view="title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php if($__Context->layout_info->c_style1_2=='B'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="image_title_content" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_2 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+2 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="2" option_view="title,regdate,thumbnail,content" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php if($__Context->layout_info->c_style1_2=='C'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="gallery" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_2 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+2 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="4" cols_list_count="2" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php echo $__Context->layout_info->c_widget1_2 ?>
				</div>
			</div><?php } ?>
			
			<?php if($__Context->layout_info->c_widget1_3||$__Context->layout_info->c_mid1_3){ ?><div class="widgetDW widgetDW_1">
				<?php if($__Context->layout_info->c_title1_3){ ?><h2 class="h2_widget">
					<span class="round4"><?php echo $__Context->layout_info->c_title1_3 ?></span>
					<a class="h2_widget_a" href="<?php echo $__Context->layout_info->c_url1_3 ?>"><i class="fa fa18 fa-plus"></i></a>
				</h2><?php } ?>
				<div class="in_widget">
					<?php if($__Context->layout_info->c_style1_3=='A'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="normal" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_3 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+3 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="6" option_view="title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php if($__Context->layout_info->c_style1_3=='B'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="image_title_content" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_3 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+3 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="2" option_view="title,regdate,thumbnail,content" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php if($__Context->layout_info->c_style1_3=='C'){ ?>
					<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="gallery" tab_type="none" module_srls="<?php echo $__Context->layout_info->c_mid1_3 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+3 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="4" cols_list_count="2" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
					<?php } ?>
					<?php echo $__Context->layout_info->c_widget1_3 ?>
				</div>
			</div><?php } ?>
		</div>
	</div><?php } ?>	
	<?php if($__Context->content){ ?><div<?php if($__Context->layout_info->bootstrap=='YES'){ ?> class="body bootstrap_body"<?php };
if($__Context->layout_info->bootstrap=='NO'){ ?> class="body"<?php } ?> id="body">
		<div class="xe_width clearBoth">
			<!-- LNB -->
			<?php if($__Context->layout_info->LAYOUT_TYPE == 'ec'||$__Context->layout_info->LAYOUT_TYPE == 'ce'){ ?><div class="wrap_lnb">
				<?php if(!Mobile::isMobileCheckByAgent()){ ?><nav class="lnb">
					<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><div class="wrap_gnb">
						<ul class="lnb_section in_lnb">
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
								<?php if($__Context->val2['list']){ ?><ul>
									<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
								</ul><?php } ?>
							</li><?php } ?>
						</ul>
					</div><?php }} ?>
					<?php if($__Context->layout_info->ec_widget){ ?><div class="wrap_ec_widget">
						<div class="lnb_section">
							<?php if($__Context->layout_info->ec_widget1_1||$__Context->layout_info->ec_mid1_1){ ?><div class="widgetDW_sub">
								<?php if($__Context->layout_info->ec_title1_1){ ?><h2 class="h2_widget">
									<span><?php echo $__Context->layout_info->ec_title1_1 ?></span>
									<a class="h2_widget_a" href="<?php echo $__Context->layout_info->ec_url1_1 ?>"><i class="fa fa14 fa-plus"></i></a>
								</h2><?php } ?>
								<div class="in_widget">
									<?php if($__Context->layout_info->ec_style1_1=='A'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="normal" subject_cut_size="40" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_1 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+4 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="6" option_view="title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php if($__Context->layout_info->ec_style1_1=='B'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="image_title_content" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_1 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+4 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="5" option_view="title,regdate,thumbnail,content" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php if($__Context->layout_info->ec_style1_1=='C'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="gallery" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_1 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+4 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="4" cols_list_count="2" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php echo $__Context->layout_info->ec_widget1_1 ?>
								</div>
							</div><?php } ?>
							<?php if($__Context->layout_info->ec_widget1_2||$__Context->layout_info->ec_mid1_2){ ?><div class="widgetDW_sub widgetDW_sub1">
								<?php if($__Context->layout_info->ec_title1_2){ ?><h2 class="h2_widget">
									<span><?php echo $__Context->layout_info->ec_title1_2 ?></span>
									<a class="h2_widget_a" href="<?php echo $__Context->layout_info->ec_url1_2 ?>"><i class="fa fa14 fa-plus"></i></a>
								</h2><?php } ?>
								<div class="in_widget">
									<?php if($__Context->layout_info->ec_style1_2=='A'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="normal" subject_cut_size="40" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_2 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+5 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="6" option_view="title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php if($__Context->layout_info->ec_style1_2=='B'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="image_title_content" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_2 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+5 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="5" option_view="title,regdate,thumbnail,content" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php if($__Context->layout_info->ec_style1_2=='C'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="gallery" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_2 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+5 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="4" cols_list_count="2" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php echo $__Context->layout_info->ec_widget1_2 ?>
								</div>
							</div><?php } ?>
			
							<?php if($__Context->layout_info->ec_widget1_3||$__Context->layout_info->ec_mid1_3){ ?><div class="widgetDW_sub widgetDW_sub1">
								<?php if($__Context->layout_info->ec_title1_3){ ?><h2 class="h2_widget">
									<span><?php echo $__Context->layout_info->ec_title1_3 ?></span>
									<a class="h2_widget_a" href="<?php echo $__Context->layout_info->ec_url1_3 ?>"><i class="fa fa14 fa-plus"></i></a>
								</h2><?php } ?>
								<div class="in_widget">
									<?php if($__Context->layout_info->ec_style1_3=='A'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="normal" subject_cut_size="40" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_3 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+6 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="6" option_view="title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php if($__Context->layout_info->ec_style1_3=='B'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="image_title_content" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_3 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+6 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="5" option_view="title,regdate,thumbnail,content" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php if($__Context->layout_info->ec_style1_3=='C'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="doorweb" colorset="white" content_type="document" list_type="gallery" tab_type="none" module_srls="<?php echo $__Context->layout_info->ec_mid1_3 ?>" widget_sequence="<?php echo $__Context->layout_info->so_widget+6 ?>" widget_cache="1" markup_type="table" page_count="1" content_cut_size="200" list_count="4" cols_list_count="2" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="200" />
									<?php } ?>
									<?php echo $__Context->layout_info->ec_widget1_3 ?>
								</div>
							</div><?php } ?>
						</div>
					</div><?php } ?>
				</nav><?php } ?>
			</div><?php } ?>
			<!-- /LNB -->
			<!-- CONTENT -->
			<div<?php if($__Context->layout_info->c_bg){ ?> class="wrap_content has_bg"<?php };
if(!$__Context->layout_info->c_bg){ ?> class="wrap_content"<?php } ?>>
				<div class="content" id="content">
					<div class="in_content"><?php echo $__Context->content ?></div>
				</div>
			</div>
			<!-- /CONTENT -->
		</div>
	</div><?php } ?>
	<?php if($__Context->layout_info->bottom_slide){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/doorweb_v4/slider','owl.html');
} ?>
</div>
<footer class="footer">
	<div class="xe_width clearBoth">
		<div class="footer_left">
			<?php if($__Context->layout_info->footer_logo){ ?><a href="<?php echo geturl('') ?>">
				<img src="<?php echo $__Context->layout_info->footer_logo ?>" alt="<?php echo $__Context->layout_info->LOGO_TEXT ?>" />
			</a><?php } ?>
		</div>
		<div class="footer_right">
			<ul class="clearBoth">
				<?php if($__Context->footer_menu->list&&count($__Context->footer_menu->list))foreach($__Context->footer_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight footer_li"<?php };
if(!$__Context->val1['selected']){ ?> class="footer_li"<?php } ?>>
					<a class="foot_first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?><ul>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li>
							<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['text'] ?></a>
							
						</li><?php }} ?>
					</ul><?php } ?>
				</li><?php }} ?>		
			</ul>
			<div class="copylight">
				<?php if(!$__Context->layout_info->FOOTER){ ?><p>Powered by <a href="http://doorweb.net/xe">DoorWeb</a>.</p><?php } ?>
				<?php if($__Context->layout_info->FOOTER){ ?><p><?php echo $__Context->layout_info->FOOTER ?></p><?php } ?>
			</div>
		</div>
	</div>
</footer>
<script>
		/* scrollUp Minimum setup */
	jQuery(function($){
			$.scrollUp();
		});
	</script>
