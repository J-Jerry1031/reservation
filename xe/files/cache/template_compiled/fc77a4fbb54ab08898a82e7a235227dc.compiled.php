<?php if(!defined("__XE__"))exit;
echo Context::addHtmlHeader('<meta name="viewport" content="width=device-width, user-scalable=yes">') ?>
<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpB_limit/js/xe_official.js--><?php $__tmp=array('layouts/Door_cpB_limit/js/xe_official.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpB_limit/js/scroll.js--><?php $__tmp=array('layouts/Door_cpB_limit/js/scroll.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpB_limit/css/default.css--><?php $__tmp=array('layouts/Door_cpB_limit/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpB_limit/js/jquery.scrollUp.min.js--><?php $__tmp=array('layouts/Door_cpB_limit/js/jquery.scrollUp.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){ ?>
   <?php if(file_exists('./common/js/jquery.min.js')){ ?>
   <?php  Context::addJsFile("./common/js/jquery.min.js", true, '', -10000011)  ?>
   <?php }elseif(file_exists('./common/js/jquery.js')){ ?>
   <?php  Context::addJsFile("./common/js/jquery.js", true, '', -10000011)  ?>
   <?php } ?>
<?php } ?>
<!--#Meta:layouts/Door_cpB_limit/css/owl.carousel.css--><?php $__tmp=array('layouts/Door_cpB_limit/css/owl.carousel.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpB_limit/js/owl.carousel.min.js--><?php $__tmp=array('layouts/Door_cpB_limit/js/owl.carousel.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
<?php if($__Context->layout_info->layout_color){ ?>
<?php if($__Context->layout_info->layout_color=='Red'){ ?>
<?php  $__Context->layout_info->point_color = "#C62828" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Pink'){ ?>
<?php  $__Context->layout_info->point_color = "#E91E63" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Purple'){ ?>
<?php  $__Context->layout_info->point_color = "#9C27B0" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='DeepPurple'){ ?>
<?php  $__Context->layout_info->point_color = "#673AB7" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Indigo'){ ?>
<?php  $__Context->layout_info->point_color = "#3F51B5" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Blue'){ ?>
<?php  $__Context->layout_info->point_color = "#1E88E5" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='LightBlue'){ ?>
<?php  $__Context->layout_info->point_color = "#039BE5" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Cyan'){ ?>
<?php  $__Context->layout_info->point_color = "#00ACC1" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Teal'){ ?>
<?php  $__Context->layout_info->point_color = "#009688" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Green'){ ?>
<?php  $__Context->layout_info->point_color = "#4CAF50" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='LightGreen'){ ?>
<?php  $__Context->layout_info->point_color = "#7CB342" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Amber'){ ?>
<?php  $__Context->layout_info->point_color = "#FFA000" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Orange'){ ?>
<?php  $__Context->layout_info->point_color = "#FB8C00" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='DeepOrange'){ ?>
<?php  $__Context->layout_info->point_color = "#F4511E" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Brown'){ ?>
<?php  $__Context->layout_info->point_color = "#795548" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='BlueGrey'){ ?>
<?php  $__Context->layout_info->point_color = "#607D8B" ?>
<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->point_color){ ?>
#mm-menu a.active_a,
.dw_color:hover,
.in_section:hover .widget_box_h2 a,
.locNav .active a.locNav_first_a,
.breadclumb li.last_breadclumb,
.breadclumb li.last_breadclumb a{color:<?php echo $__Context->layout_info->point_color ?>}
.main_menu ul li.highlight a,
.main_menu ul li.highlight li.highlight a,
.xe .WSlide .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span,
.xe .owl-normal .owl-controls .owl-dots .active span,
.fix_header,
.mobile_heder,
.mobile_top_search,
.xe .over_DCPA_image,
.dw_bg,
.lnb_title h2,
.in_section:hover .widget_box_h2 .h2_more span,
.wrap_login .language ul,
.xe .list_span,
.top_login a.login_A,
#scrollUp{background-color:<?php echo $__Context->layout_info->point_color ?>}
.wrap_menu,
.wrap_sub_header{border-color:<?php echo $__Context->layout_info->point_color ?> !important}
<?php } ?>
<?php if($__Context->layout_info->e1_width){ ?>
.ec .in_body{padding-left:<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.ce .in_body{padding-right:<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.ec .e1{margin-right:-<?php echo $__Context->layout_info->e1_width ?>px;left:-<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.ce .e1{margin-left:-<?php echo $__Context->layout_info->e1_width ?>px;right:-<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.e1,
.sub_section{width:<?php echo $__Context->layout_info->e1_width ?>px;}
<?php } ?>
<?php if($__Context->layout_info->menu_padding){ ?>
.gnb li.first_li {padding-right:<?php echo $__Context->layout_info->menu_padding ?>px;}
.gnb_center .main_menu{padding-left:<?php echo $__Context->layout_info->menu_padding ?>px;}
.fix_header .gnb li.first_li{padding-right:<?php echo $__Context->layout_info->menu_padding-10 ?>px;}
<?php } ?>
<?php if($__Context->layout_info->sub_menu_width){ ?>
.main_menu ul{width:<?php echo $__Context->layout_info->sub_menu_width ?>px;}
.main_menu ul ul{left:<?php echo $__Context->layout_info->sub_menu_width+13 ?>px;}
<?php } ?>
<?php if($__Context->layout_info->menu_height){ ?>
.all_first div {*height:<?php echo $__Context->layout_info->menu_height ?>px;min-height:<?php echo $__Context->layout_info->menu_height ?>px}
<?php } ?>
<?php if($__Context->layout_info->menu_list){ ?>
.all_first{width:<?php echo $__Context->layout_info->menu_list ?>%;}
<?php if($__Context->layout_info->menu_list=='16.6'){ ?>
.all_first1,
.all_first2,
.all_first3,
.all_first4{width:16.7%}
<?php } ?>
<?php if($__Context->layout_info->menu_list=='14.3'){ ?>
.all_first1{width:14.2%}
<?php } ?>
<?php if($__Context->layout_info->menu_list=='33.3'){ ?>
.all_first1{width:33.4%}
<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->menu_font_size){ ?>
a.first_a{font-size:<?php echo $__Context->layout_info->menu_font_size ?>px;}
<?php } ?>
<?php if($__Context->layout_info->sub_bgimg){ ?>
.sub_header{background-image:url(<?php echo $__Context->layout_info->sub_bgimg ?>);}
<?php } ?>
<?php if($__Context->layout_info->bg_breadclumb){ ?>
.breadclumb_title{background:<?php echo $__Context->layout_info->bg_breadclumb ?>}
<?php } ?>
<?php if($__Context->layout_info->bg_sub){ ?>
.lnb_title h2{background:url(<?php echo $__Context->layout_info->bg_sub ?>)}
<?php } ?>
@media screen and (max-width:1270px){
<?php if($__Context->layout_info->min_menu_padding){ ?>
.gnb li.first_li {padding-right:<?php echo $__Context->layout_info->min_menu_padding ?>px;}
.fix_header .gnb li.first_li{padding-right:<?php echo $__Context->layout_info->min_menu_padding-10 ?>px;}
<?php } ?>
}
@media screen and (max-width:1023px){
<?php if($__Context->layout_info->m_sub_bgimg){ ?>
.sub_header{background-image:url(<?php echo $__Context->layout_info->m_sub_bgimg ?>);}
<?php } ?>
}
</style>
<div class="xe <?php echo $__Context->layout_info->layout_style ?> mobile-<?php echo $__Context->layout_info->header_style ?>">
<!-- 헤더 시작 -->
	<div class="header dw_bg <?php echo $__Context->layout_info->menu_align ?>" id="header">
		<div class="in_header">
			<p class="skip"><a href="#content"><?php echo $__Context->lang->skip_to_content ?></a></p>
			<div class="top_header">
				<div class="xe_width">
					<!-- 우상단 로그인 -->
					<div class="account">
						<ul class="clearBoth wrap_login">
							<?php if($__Context->layout_info->use_language=='Y'){ ?><li class="language first_login">
								<button type="button" class="toggle login_A"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></button>
								<ul class="selectLang">
									<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><button type="button" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></button></li><?php }} ?>
									<li class="close_selectLang"><a class="toggle" href="#">CLOSE</a></li>
								</ul>
							</li><?php } ?>
							<?php if($__Context->is_logged){ ?>
							<li<?php if($__Context->layout_info->use_language!=='Y'){ ?> class="first_login"<?php } ?>><a class="login_A" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
							<li><a class="login_A" href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
							<?php if($__Context->logged_info->is_admin=='Y' && !$__Context->site_module_info->site_srl){ ?><li><a class="login_A" href="<?php echo getUrl('','module','admin') ?>"><?php echo $__Context->lang->cmd_management ?></a></li><?php } ?>
							<?php } ?>
							<?php if(!$__Context->is_logged){ ?>
							<li<?php if($__Context->layout_info->use_language!=='Y'){ ?> class="first_login"<?php } ?>><a class="act_login login_A" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
							<li><a class="login_A" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
							<li><a class="login_A" href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
				<!-- 우상단 로그인 끝 -->
			<div class="middle_header xe_width">
				<h1 class="large_logo trans400">
					<?php if($__Context->layout_info->logo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
						<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
					</a><?php } ?>
					<?php if($__Context->layout_info->logo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
						<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
					</a><?php } ?>
					<?php if(!$__Context->layout_info->logo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img class="logo" src="/xe/layouts/Door_cpB_limit/img/logo.png" border="0" alt="logo"></a><?php } ?>
				</h1>	
				<a<?php if($__Context->lang_type == 'ko'){ ?> class="ViweAll offAll ViweAll_ko"<?php };
if($__Context->lang_type !== 'ko'){ ?> class="ViweAll offAll"<?php } ?> href="#">전체보기</a>
				<div class="top_search">
					<form action="<?php echo getUrl() ?>" method="post" id="isSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
						<?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?>
						<input type="hidden" name="mid" value="<?php echo $__Context->layout_info->DWmember_info ?>" />
						<input type="hidden" name="act" value="IS" />
						<input type="hidden" name="search_target" value="title_content" />
						<input name="is_keyword" type="text" class="TopinputText" title="keyword" value=" <?php echo $__Context->lang->cmd_search ?>..." onfocus="if(this.value==' <?php echo $__Context->lang->cmd_search ?>...')this.value='';" onblur="if(this.value=='')this.value=' <?php echo $__Context->lang->cmd_search ?>...';" />
						<input type="image" src="/xe/layouts/Door_cpB_limit/img/empty.gif" alt="submit" title="submit" class="Topsearch" />			
					</form>
				</div>
			</div>
			<div class="dw_bg all_Menu">
				<ul class="xe_width all_menu_ul">
					<?php $__Context->dx=1 ?>
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active all_first all_first<?php echo $__Context->dx ?>"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="all_first all_first<?php echo $__Context->dx ?>"<?php } ?>>
						<div>
							<a class="all_first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
							<?php if($__Context->val1['list']){ ?><ul class="all_first_ul">
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li<?php if($__Context->val2['selected']){ ?> class="active_second_li"<?php } ?>>
									<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="all_active_a"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?>
									</a>
									<?php if($__Context->val2['list']){ ?><ul class="all_second_ul">
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="all_active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
										</li><?php }} ?>
									</ul><?php } ?>
								</li><?php }} ?>
							</ul><?php } ?>
						</div>
					<?php $__Context->dx++ ?>
					</li><?php }} ?>		
				</ul>
				<div class="close_all"><a class="ViweAll offAll closeAll" href="#">전체보기</a></div>
			</div>
			<div class="wrap_menu" >
				<div class="xe_width clearBoth">
					<nav class="gnb">
						<ul id="menu" class="menu main_menu">
								<?php $__Context->dx=1 ?>
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight first_li first_li<?php echo $__Context->dx ?>"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="first_li first_li<?php echo $__Context->dx ?>"<?php } ?>>
								<a class="first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?><span<?php if(!$__Context->val1['selected']){ ?> class="hover_line"<?php };
if($__Context->val1['selected']){ ?> class="hover_line act_line"<?php } ?>></span></a>
								<?php if($__Context->val1['list']){ ?><div  class="sub1 sub_div">
									<ul class="first_ul round3">
												<?php $__Context->idx=1 ?>
										<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li class="second_li<?php echo $__Context->idx ?>">
											<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active_a second_a"<?php };
if(!$__Context->val2['selected']){ ?> class="second_a"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'];
if($__Context->val2['list']){ ?><i class="xi-angle-right"></i><?php } ?>
											</a>
											<?php if($__Context->val2['list']){ ?><ul class="second_ul sub2 round3">
												<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li class="second_li"><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
												</li><?php }} ?>
											</ul><?php } ?>
												<?php $__Context->idx++ ?>
										</li><?php }} ?>
									</ul>
								</div><?php } ?>
								<?php $__Context->dx++ ?>
							</li><?php }} ?>	
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fix_header">
		<div class="xe_width clearBoth">
			<h1 class="fix_logo trans400">
				<?php if($__Context->layout_info->logo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if($__Context->layout_info->logo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if(!$__Context->layout_info->logo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img class="logo" src="/xe/layouts/Door_cpB_limit/img/logo.png" border="0" alt="logo"></a><?php } ?>
			</h1>	
			<nav class="gnb">
				<ul class="menu main_menu">
							<?php $__Context->dx=1 ?>
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight first_li first_li<?php echo $__Context->dx ?>"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="first_li first_li<?php echo $__Context->dx ?>"<?php } ?>>
						<a class="first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						<?php if($__Context->val1['list']){ ?><div  class="sub1 sub_div">
							<ul class="first_ul round3">
											<?php $__Context->idx=1 ?>
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li class="second_li<?php echo $__Context->idx ?>">
									<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active_a second_a"<?php };
if(!$__Context->val2['selected']){ ?> class="second_a"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'];
if($__Context->val2['list']){ ?><i class="xi-angle-right"></i><?php } ?>
									</a>
									<?php if($__Context->val2['list']){ ?><ul class="second_ul sub2 round3">
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li class="second_li"><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
										</li><?php }} ?>
									</ul><?php } ?>
											<?php $__Context->idx++ ?>
								</li><?php }} ?>
							</ul>
						</div><?php } ?>
							<?php $__Context->dx++ ?>
					</li><?php }} ?>	
				</ul>
			</nav>
		</div>	
	</div>
	<div class="mobile_heder">
		<div class="mobile_top">
			<h1 class="logo_min">
				<?php if($__Context->layout_info->Mlogo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->Mlogo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if($__Context->layout_info->Mlogo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->Mlogo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if(!$__Context->layout_info->Mlogo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img class="logo" src="/xe/layouts/Door_cpB_limit/img/m_logo.png" border="0" alt="logo"></a><?php } ?>
			</h1>
			<!-- 메인메뉴 끝 -->	
			<a href="#" class="mobile_menu mobile_menu_act"><img src="/xe/layouts/Door_cpB_limit/img/menu.png" alt="메뉴보기" /></a>
			<a href="#" class="mobile_menu mobile_menu_search"><img src="/xe/layouts/Door_cpB_limit/img/b_search.png" alt="search" /></a>
		</div>
		<?php if($__Context->layout_info->header_style=='B'){ ?><div class="top_menu">
			<div class="top-owl-menu owl-menu owl-carousel">
				<?php $__Context->idx=1 ?>
				<?php if($__Context->mobile_top_menu->list&&count($__Context->mobile_top_menu->list))foreach($__Context->mobile_top_menu->list as $__Context->key1=>$__Context->val1){ ?><div class="item first_item">
					<a<?php if($__Context->val1['list']){ ?> href="#"<?php };
if(!$__Context->val1['list']){ ?> href="<?php echo $__Context->val1['href'] ?>"<?php } ?> class="tab_first_a first_a<?php echo $__Context->idx ?>" name="tab<?php echo $__Context->idx ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a>
				<?php $__Context->idx++ ?>
				</div><?php } ?>
				<div class="item last_item"><a class="tab_first_a" href="#">         </a></div>
			</div>
				<?php $__Context->idx=1 ?>
			<?php if($__Context->mobile_menu->list&&count($__Context->mobile_menu->list))foreach($__Context->mobile_menu->list as $__Context->key1=>$__Context->val1){ ?><div id="tab<?php echo $__Context->idx ?>"<?php if($__Context->val1['list']){ ?> class="sub_menu"<?php } ?> <?php if(!$__Context->val1['list']){ ?> class="sub_menu empty_sub_menu"<?php } ?>>
				<?php if($__Context->val1['list']){ ?><div class="owl-menu owl-carousel">
					<?php $__Context->iidx=1 ?>
					<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><div class="item item<?php echo $__Context->iidx ?>">
						<a<?php if($__Context->val2['selected']){ ?> class="second_a active_a"<?php } ?> <?php if(!$__Context->val2['selected']){ ?> class="second_a"<?php } ?> href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['text'] ?></a>
					<?php $__Context->iidx++ ?>
					</div><?php } ?>
					<div class="item last_item"><a class="second_a" href="#">         </a></div>
				</div><?php } ?>
				<?php $__Context->idx++ ?>
			</div><?php } ?>
				<script>
					jQuery(function($){
						$('.owl-menu').owlCarousel({
						margin:0,
						autoWidth:true,
						nav:true,
						loop:false,
						items:2
						})	
					});
				</script>
		</div><?php } ?>
		<div class="mobile_top_search none_top_search">
			<div class="top_in_search">
				<form action="<?php echo getUrl() ?>" method="post" id="isSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
					<?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?>
					<input type="hidden" name="mid" value="<?php echo $__Context->layout_info->DWmember_info ?>" />
					<input type="hidden" name="act" value="IS" />
					<input type="hidden" name="search_target" value="title_content" />
					<input name="is_keyword" type="text" class="mobile_TopinputText" title="keyword" value=" <?php echo $__Context->lang->cmd_search ?>..." onfocus="if(this.value==' <?php echo $__Context->lang->cmd_search ?>...')this.value='';" onblur="if(this.value=='')this.value=' <?php echo $__Context->lang->cmd_search ?>...';" />
					<input type="image" src="/xe/layouts/Door_cpB_limit/img/b_search.png" alt="submit" title="submit" class="mobile_Topsearch" />			
				</form>
			</div>
		</div>
	</div>
<!-- 헤더 끝 -->
	<?php if(!Mobile::isMobileCheckByAgent()){ ?>
	<?php if($__Context->layout_info->main_slide=='A'||$__Context->layout_info->main_slide=='B'){ ?><div class="wrap_slide">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpB_limit/slide','camera.html') ?>
	</div><?php } ?>
	<?php } ?>
	<?php if(Mobile::isMobileCheckByAgent()){ ?>
	<?php if($__Context->layout_info->mobile_slide){ ?><div class="wrap_slide wrap_slideB">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpB_limit/slide','da-owl-slider.html') ?>
	</div><?php } ?>
	<?php } ?>
	<?php if($__Context->layout_info->breadclumb=='Y'){ ?><div class="wrap_sub_header">
		<div class="has_bg_breadclumb sub_header animation-pulseBgSlow">
			<div class="bg_breadclumb">
				<!-- depth 1 -->
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key=>$__Context->val){;
if($__Context->val['selected']){;
$__Context->menu_depth1 = $__Context->val;
}} ?>
				<!-- depth 2 -->
				<?php if($__Context->menu_depth1['list']&&count($__Context->menu_depth1['list']))foreach($__Context->menu_depth1['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth1){;
$__Context->menu_depth2 = $__Context->val;
}} ?>
				<!-- depth 3 -->
				<?php if($__Context->menu_depth2['list']&&count($__Context->menu_depth2['list']))foreach($__Context->menu_depth2['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth2){;
$__Context->menu_depth3 = $__Context->val;
}} ?>
				<div class="ie_sub_header"><?php if($__Context->layout_info->sub_bgimg){ ?><img src="<?php echo $__Context->layout_info->sub_bgimg ?>" alt="배경이미지" /><?php };
if(!$__Context->layout_info->sub_bgimg){ ?><img src="/xe/layouts/Door_cpB_limit/img/sub.jpg" alt="배경이미지" /><?php } ?></div>
			
				<?php if($__Context->menu_depth1&&!$__Context->menu_depth3&&!$__Context->menu_depth2){ ?><h2><a href="<?php echo $__Context->menu_depth1['href'] ?>"><span><?php echo $__Context->menu_depth1['text'] ?></span></a></h2><?php } ?>
				<?php if($__Context->menu_depth2&&!$__Context->menu_depth3){ ?><h2><a href="<?php echo $__Context->menu_depth2['href'] ?>"><span><?php echo $__Context->menu_depth2['text'] ?></span></a></h2><?php } ?>
				<?php if($__Context->menu_depth3){ ?><h2><a href="<?php echo $__Context->menu_depth3['href'] ?>"><span><?php echo $__Context->menu_depth3['text'] ?></span></a></h2><?php } ?>
				<?php if(!$__Context->menu_depth1){ ?><h2><a href="#"><?php echo $__Context->module_info->browser_title ?></a></h2><?php } ?>
			</div>
		</div>
	</div><?php } ?>
	<?php if($__Context->layout_info->main_widget){ ?><div class="wrap_main_widget">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpB_limit/slide','main.html') ?>
	</div><?php } ?>
	<div id="content" class="body">
		<div class="xe_width wrap_body">
			<div class="in_body clearBoth">
				<?php if($__Context->layout_info->layout_style=='ec'||$__Context->layout_info->layout_style=='ce'){ ?><div class="e1">
				<?php if($__Context->layout_info->use_quick){ ?><!--#Meta:layouts/Door_cpB_limit/js/sub_scroll.js--><?php $__tmp=array('layouts/Door_cpB_limit/js/sub_scroll.js','body','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
					<div class="in_e1">
						<!-- 서브메뉴 하위메뉴 -->
						<div class="lnb_menu">
							<div class="lnb_title">
								<?php if($__Context->sub_menu->list&&count($__Context->sub_menu->list))foreach($__Context->sub_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><h2<?php if($__Context->layout_info->locNav_img){ ?> class="has_span"<?php } ?>>
									<?php if($__Context->layout_info->locNav_img){ ?>
									<span><img src="<?php echo $__Context->layout_info->locNav_img ?>" alt="" /></span>
									<?php } ?>
									<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
								</h2><?php }} ?>
							</div>
							<?php if($__Context->sub_menu->list&&count($__Context->sub_menu->list))foreach($__Context->sub_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><div class="section wrap_locNav">
								<div class="in_section">
									<ul class="locNav">
											<?php $__Context->dx=1 ?>
										<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="locNav_li<?php echo $__Context->dx ?> active"<?php };
if(!$__Context->val2['selected']){ ?> class="locNav_li<?php echo $__Context->dx ?>"<?php } ?>>
											<a href="<?php echo $__Context->val2['href'] ?>" class="locNav_first_a"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="act_span"><i class="xi-arrow-right"></i></span><span class="in_loc_span"><?php echo $__Context->val2['link'] ?></span></a>
											<?php if($__Context->val2['list']){ ?><button<?php if($__Context->val2['selected']){ ?> class="Loc_i on"<?php } ?> <?php if(!$__Context->val2['selected']){ ?> class="Loc_i"<?php } ?>><i class="xi-angle-down"></i><i class="xi-angle-up"> </i></button><?php } ?>
											<?php if($__Context->val2['list']){ ?><ul class="second_locNav">
												<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li class="second_li"><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="in_loc_span">· <?php echo $__Context->val3['link'] ?></span></a>
												</li><?php }} ?>
											</ul><?php } ?>
												<?php $__Context->dx++ ?>
										</li><?php } ?>
									</ul>
								</div>
							</div><?php }} ?>
						</div>
						<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpB_limit/slide','sub.html') ?>
					</div>
				</div><?php } ?>
				<div class="content">
					<?php if($__Context->layout_info->breadclumb=='Y'){ ?>
					<div class="wrap_breadclumb">
						<div class="left_breadclumb">
							<?php if($__Context->layout_info->notice_sub){ ?><h2 class="notoce_h2"><?php echo $__Context->layout_info->notice_sub ?></h2><?php } ?>
							<?php if($__Context->layout_info->notice_title_sub){ ?><div class="notoce_list">
								<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->notice_title_sub ?>" list_type="image_title" tab_type="none" markup_type="list" list_count="5" page_count="1" subject_cut_size="60" content_cut_size="330" option_view="regdate,title" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" />
							</div><?php } ?>
						</div>
						<ul class="breadclumb">											
							<li class="first_breadclumb png_bg">
								<a href="<?php echo getSiteUrl() ?>">
											HOME
								</a>
							</li>
							<?php if($__Context->menu_depth1){ ?><li>
								<a class="Ccolor" href="<?php echo $__Context->menu_depth1['href'] ?>"><?php echo $__Context->menu_depth1['text'] ?></a>
							</li><?php } ?>
							<?php if($__Context->menu_depth2){ ?><li class="breadclumb_li2">
								<a class="Ccolor" href="<?php echo $__Context->menu_depth2['href'] ?>"><?php echo $__Context->menu_depth2['text'] ?></a>
							</li><?php } ?>
							<?php if($__Context->menu_depth3){ ?><li class="breadclumb_li3">
								<a class="Ccolor" href="<?php echo $__Context->menu_depth3['href'] ?>"><?php echo $__Context->menu_depth3['text'] ?></a>
							</li><?php } ?>
							<?php if(!$__Context->menu_depth1){ ?><li>
											<?php echo $__Context->module_info->browser_title ?>
							</li><?php } ?>
						</ul>		
					</div>
					<?php } ?>
					<?php if($__Context->layout_info->ad_top){ ?><div class="ad_section ad_top"><?php echo $__Context->layout_info->ad_top ?></div><?php } ?>
					<div class="in_section">
							<?php echo $__Context->content ?>
					</div>
					<?php if($__Context->layout_info->ad_bottom){ ?><div class="ad_section ad_bottom"><?php echo $__Context->layout_info->ad_bottom ?></div><?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer footer<?php echo $__Context->layout_info->middle_widgetE ?>">
		<div class="in_footer xe_width clearBoth">
			<h1 class="foot_logo">
				<?php if($__Context->layout_info->foot_logo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->foot_logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if($__Context->layout_info->foot_logo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->foot_logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if(!$__Context->layout_info->foot_logo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img src="/xe/layouts/Door_cpB_limit/img/foot_logo.png" alt="Logo" /></a><?php } ?>
			</h1>
			<div class="foot_right">
				<div class="foot_menu">
					<ul class="clearBoth">
						<?php $__Context->idx=1 ?>
						<?php if($__Context->foot_menu->list&&count($__Context->foot_menu->list))foreach($__Context->foot_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li class="foot_li<?php echo $__Context->idx ?>">
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a>
						<?php $__Context->idx++ ?>
						</li><?php }} ?>
					</ul>
				</div>
		
				<?php if(!$__Context->layout_info->copyright){ ?><p class="copylight">
						<span>본 GGG 사이트의 컨텐츠는 성인만을 위한 공간이므로 만 19세미만의 청소년은 이용할 수 없습니다.</span></br>
						<span>Tel</span>: 010 2798 3050 or 02 2635 1050<br />
						Copyright 2017 <span>G.G.G</span>. All Rights Reserved
				</p><?php } ?>
				<?php if($__Context->layout_info->copyright){ ?><p class="copylight">
						<?php echo $__Context->layout_info->copyright ?>
				</p><?php } ?>
			</div>
			<div class="wrap_in_select">
					<a class="act_search" href="#">패밀리 사이트</a>
					<ul class="in_select">
						<?php if($__Context->select_menu->list&&count($__Context->select_menu->list))foreach($__Context->select_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li>
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						</li><?php }} ?>
					</ul>
				</div>
			<div class="foot_absolute">
				<?php if($__Context->layout_info->use_footer_SNS){ ?><ul class="foot_sns">
					<?php if($__Context->layout_info->facebook){ ?><li><a href="<?php echo $__Context->layout_info->facebook ?>" target="_blank"  title="Facebook 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/facebook.png" alt="facebook" /></a></li><?php } ?>
					<?php if($__Context->layout_info->twitter){ ?><li><a href="<?php echo $__Context->layout_info->twitter ?>" target="_blank" title="Twitter 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/twitter.png" alt="twitter" /></a></li><?php } ?>
					<?php if($__Context->layout_info->instagram){ ?><li><a href="<?php echo $__Context->layout_info->instagram ?>" target="_blank" title="Instagram 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/instagram.png" alt="Instagram" /></a></li><?php } ?>
					<?php if($__Context->layout_info->google){ ?><li><a href="<?php echo $__Context->layout_info->google ?>" target="_blank" title="Google 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/google.png" alt="google" /></a></li><?php } ?>
					<?php if($__Context->layout_info->pinterest){ ?><li><a href="<?php echo $__Context->layout_info->pinterest ?>" target="_blank" title="Pinterest 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/pinterest.png" alt="pinterest" /></a></li><?php } ?>
					<?php if($__Context->layout_info->kakaostory){ ?><li><a href="<?php echo $__Context->layout_info->kakaostory ?>" target="_blank" title="Kakaostory 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/kakaostory.png" alt="kakaostory" /></a></li><?php } ?>
					<?php if($__Context->layout_info->band){ ?><li><a href="<?php echo $__Context->layout_info->band ?>" target="_blank" title="Band 바로가기"><img src="/xe/layouts/Door_cpB_limit/img/band.png" alt="band" /></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image1){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url1 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt1 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image1 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt1 ?>" title="<?php echo $__Context->layout_info->sns_image_alt1 ?>" /></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image2){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url2 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt2 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image2 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt2 ?>" title="<?php echo $__Context->layout_info->sns_image_alt2 ?>" /></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image3){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url3 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt3 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image3 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt3 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt3 ?>"/></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image4){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url4 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt4 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image4 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt4 ?>" title="<?php echo $__Context->layout_info->sns_image_alt4 ?>" /></a></li><?php } ?>
				</ul><?php } ?>
				<a href="http://goggg.co.kr/xe" target="_self" class="ds_dw">Design by <span class="skin_by">G.G.G</span></a>
			</div>
		</div>
	</div>
</div>
<script>
	/* scrollUp Minimum setup */
	jQuery(function($){
			$.scrollUp();
		});
</script>
<div class="fix_mobile">
</div>
<div class="mm_mobile_menu none_mobile_menu">
	<div class="top-mm-menu">
		<ul class="top_login">
		<?php if($__Context->is_logged){ ?>
		<li class="fl"><a href="<?php echo getUrl('act', 'dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
		<li class="fl"><a class="login_A" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
					
		<?php }elseif($__Context->act!='dispMemberLoginForm'){ ?>
		<li class="fl"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
		<li class="fl"><a class="login_A" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
		<?php } ?>
		</ul>
		<a href="#" class="mobile_menu_act in_mobile_act">CLOSE</a>
	</div>
	<nav id="mm-menu">
					
		<ul class="mm-list">
			<?php if($__Context->layout_info->use_language=='Y'){ ?><li class="mm-list-li">
				<a class="mm_a mm_lang" href="#">Select language</a><button class="Nav_i"><i class="xi-angle-down"></i><i class="xi-angle-up"> </i></button>
				<ul class="selectLang none_login">
					<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;">- <?php echo $__Context->val ?></a></li><?php }} ?>
				</ul>
			</li><?php } ?>
			<?php if($__Context->mobile_menu->list&&count($__Context->mobile_menu->list))foreach($__Context->mobile_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active mm-list-li"<?php };
if(!$__Context->val1['selected']){ ?> class="mm-list-li"<?php } ?>><a<?php if(!$__Context->val1['selected']){ ?> class="mm_a"<?php };
if($__Context->val1['selected']){ ?> class="mm_a active_a"<?php } ?> href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a><?php if($__Context->val1['list']){ ?><button<?php if($__Context->val1['selected']){ ?> class="Nav_i hover"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="Nav_i"<?php } ?>><i class="xi-angle-down"></i><i class="xi-angle-up"> </i></button><?php } ?>
				<?php if($__Context->val1['list']){ ?><ul>
					<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li><a<?php if($__Context->val2['selected']){ ?> class="active_a"<?php } ?> href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>- <?php echo $__Context->val2['text'] ?></a>
						<?php if($__Context->val2['list']){ ?><ul>
							<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>>- <?php echo $__Context->val3['text'] ?></a>
							</li><?php }} ?>
						</ul><?php } ?>
					</li><?php } ?>
				</ul><?php } ?>
			</li><?php } ?>
		</ul>
	</nav>
</div>