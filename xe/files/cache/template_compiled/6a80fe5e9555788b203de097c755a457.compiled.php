<?php if(!defined("__XE__"))exit;?><!-- CSS 로드 -->
<!--#Meta:layouts/columnist/css/default.css--><?php $__tmp=array('layouts/columnist/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/columnist/css/acc.css--><?php $__tmp=array('layouts/columnist/css/acc.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="outerWrapper">
	<div id="contentWrapper">
			<!-- 위젯 -->
			<div id="widget">
				<div id="logo"><h1>
					<?php if($__Context->layout_info->index_url){ ?>
						<a href="<?php echo $__Context->layout_info->index_url ?>" onfocus="this.blur()">
					<?php } ?>
						<?php if($__Context->layout_info->logo_image){ ?>
							<img src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->index_name ?>" class="iePngFix" />
						<?php }else{ ?>
							<img src="/xe/layouts/columnist/images/logo.gif" alt="<?php echo $__Context->layout_info->index_name ?>" class="iePngFix" />
						<?php } ?>
					<?php if($__Context->layout_info->index_url){ ?></a><?php } ?>
				</h1></div><!-- Logo end -->
				<div  id="menuBox">
				   <ul>
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
						<li <?php if($__Context->val['selected']){ ?> class="menuItem itemSelect" <?php $__Context->menu_1st = $__Context->val;
}else{ ?> class="menuItem itemOff" onmouseover="this.className='menuItem itemOn'" onmouseout="this.className='menuItem itemOff'" <?php } ?>><a class="menuText" href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a>
							<?php if($__Context->val['selected']){ ?>
							<ul id="lnb">
							<?php if($__Context->menu_1st['list']&&count($__Context->menu_1st['list']))foreach($__Context->menu_1st['list'] as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
								<li>
									<a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php };
if($__Context->val['selected']){ ?> class="on"<?php } ?>><?php echo $__Context->val['link'] ?></a>
								</li>
							<?php };
} ?>
							</ul>
							<?php } ?>
							<?php if(!$__Context->val['selected']&&$__Context->val['list']&&$__Context->val['expand']=='Y'){ ?>
							<ul id="lnb">
							<?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
								<li>
									<a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php };
if($__Context->val['selected']){ ?> class="on"<?php } ?>><?php echo $__Context->val['link'] ?></a>
								</li>
							<?php };
} ?>
							</ul>
							<?php } ?>
						</li>
						<?php };
} ?>
				   </ul>			   	  	   				   
				 </div>
			  
				  <div class="space">
					<?php if($__Context->layout_info->profile_text){ ?>
						<?php echo $__Context->layout_info->profile_text ?>
					<?php }else{ ?>
						Creative Designer<br />Director KSJade<br />enigma5685@naver.com<br />010.1234.5678
					<?php } ?>					  
				  </div>
				  <!-- 사이드위젯 1 -->
				  <div class="recent">
					<span class="widget_title">
						<?php if($__Context->layout_info->widget_title1){;
echo $__Context->layout_info->widget_title1;
}else{ ?>Widget Title No.1<?php } ?>							
					</span>
					<?php if($__Context->layout_info->widget_area1){ ?>						
						<img class="zbxe_widget_output" widget="content" skin="columnist_widget" colorset="black" content_type="document" list_type="normal" tab_type="none" option_view="regdate,title" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="Y" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="60" thumbnail_height="40" cols_list_count="1" list_count="5" page_count="1" duration_new="48" subject_cut_size="25" content_cut_size="30" module_srls="<?php echo $__Context->layout_info->widget_area1 ?>" markup_type="table" />
					<?php }else{ ?>
						위젯 첫 번째 코드 영역
					<?php } ?>	
				  </div>
				  <!-- 검색 -->
					<div id="search_block">
					  <form action="<?php echo getUrl() ?>" method="post" id="isSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="mid"<?php if($__Context->layout_info->default_page){ ?> value="<?php echo $__Context->layout_info->default_page ?>"<?php };
if(!$__Context->layout_info->default_page){ ?> value="<?php echo $__Context->mid ?>"<?php } ?> />
						<input type="hidden" name="act" value="IS" />	
						<input name="is_keyword" type="text" class="inputText" title="keyword" />
						<input type="image" src="/xe/layouts/columnist/images/search.gif" alt="<?php echo $__Context->lang->cmd_search ?>" class="submit" />
						</form>
					</div>
				  <!-- 사이드위젯 2 -->
				  <div class="recent">
					<span class="widget_title">
						<?php if($__Context->layout_info->widget_title2){;
echo $__Context->layout_info->widget_title2;
}else{ ?>Widget Title No.2<?php } ?>							
					</span>
					<?php if($__Context->layout_info->widget_area2){ ?>						
						<img class="zbxe_widget_output" widget="content" skin="columnist_widget" colorset="black" content_type="document" list_type="gallery" tab_type="none" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" cols_list_count="3" list_count="9" page_count="1" duration_new="48" subject_cut_size="20" content_cut_size="30" module_srls="<?php echo $__Context->layout_info->widget_area2 ?>" markup_type="table" />
					<?php }else{ ?>
						위젯 두 번째 코드 영역
					<?php } ?>	
				  </div>
			  </div><!-- 위젯 끝 -->
			<div id="header" class="iePngFix"><div id="header_content">
				<div id="header_menu" class="iePngFix">
					<?php if($__Context->top_menu->list&&count($__Context->top_menu->list))foreach($__Context->top_menu->list as $__Context->key => $__Context->val){ ?>
					<a href="<?php echo $__Context->val['href'] ?>" <?php if(!$__Context->header_menu_tmp){ ?>style="border:none;"<?php } ?> <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php };
if($__Context->val['selected']){ ?> class="on"<?php } ?>><?php echo $__Context->val['link'] ?></a><?php $__Context->header_menu_tmp=1 ?>
					<?php } ?>
				</div>
				<div id="header_login" class="iePngFix">
					<div id="acc"><ul class="account">
							<li class="log">
					<?php if($__Context->is_logged){ ?>
					  <a href="<?php echo getUrl('act','dispMemberLogout') ?>"><img src="/xe/layouts/columnist/images/account/buttonLogout.gif" width="33" height="5" alt="LOGOUT" /></a>
					<?php }else{ ?>
					   <a href="#loginWindow" onclick="jQuery('#loginWindow').css('display','block');" accesskey="L"><img src="/xe/layouts/columnist/images/account/buttonLogin.gif" width="25" height="5" alt="LOGIN" /></a>
					<?php } ?>
				   </li>
					<?php if(!$__Context->is_logged){ ?>
					<li class="register"><a href="<?php if($__Context->layout_info->default_page){;
echo getUrl('act','dispMemberSignUpForm','mid', $__Context->layout_info->default_page);
}else{;
echo getUrl('act','dispMemberSignUpForm');
} ?>"><span>Register</span></a></li>
						<?php }else{ ?>
					<li class="profile">
						<button type="button" onclick="jQuery('#memberProfile').toggleClass('active');"><span>Profile</span></button>
						<!-- memberProfile -->
						<div id="memberProfile" class="memberProfile">
						<!-- class="memberProfile" | class="memberProfile active" -->
							<button type="button" class="close" onclick="jQuery('#memberProfile').toggleClass('active');" accesskey="X"><span>Close profile layer</span></button>
							<h2 class="authorName"><?php echo $__Context->logged_info->nick_name ?></h2>
							<ul>
								<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key => $__Context->val){ ?>
								  <li><a href="<?php if($__Context->layout_info->default_page){;
echo getUrl('act',$__Context->key,'member_srl','','mid',$__Context->layout_info->default_page);
}else{;
echo getUrl('act',$__Context->key,'member_srl','');
} ?>"><?php echo Context::getLang($__Context->val) ?></a></li>
								<?php } ?>
							</ul>
							<button type="button" class="close" onclick="jQuery('#memberProfile').toggleClass('active');" accesskey="X"><span>Close profile layer</span></button>
						</div>
						<!-- /memberProfile -->
					</li><?php } ?>
					</ul></div>
				</div>
		</div></div>
		<!-- 헤더 끝 -->
		<div id="top_visual">
			<div class="social_icon">
				<ul>
					<li class="facebook">
						<a href="<?php if($__Context->layout_info->facebook){;
echo $__Context->layout_info->facebook;
} ?>" target="_blank"><span>Facebook</span></a>
					</li>
					<li class="twitter">
						<a href="<?php if($__Context->layout_info->twitter){;
echo $__Context->layout_info->twitter;
} ?>" target="_blank"><span>Twitter</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div id="content">
			<?php if($__Context->layout_info->display_widget_area == 'Y'){ ?>
				<?php if($__Context->layout_info->display_widget){ ?><div class="display_widget"><?php echo $__Context->layout_info->display_widget ?></div><?php } ?>
			<?php } ?>
			<?php if($__Context->layout_info->display_screen_widget == 'Y'){ ?><div>
				<img class="zbxe_widget_output" widget="content" skin="columnist_widget" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->screen_widget_value ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="1" page_count="1" subject_cut_size="32" content_cut_size="200" option_view="thumbnail,title,content,regdate,nickname" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="Y" duration_new="48" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="460" thumbnail_height="280" />			
			</div><?php } ?>
			<?php if($__Context->layout_info->display_screen_widget !== 'Y'){ ?><div><?php echo $__Context->content ?></div><?php } ?>
		</div>
	</div>
	
	<!-- 하단 푸터 -->
	<div id="footer" class="iePngFix">
		<p class="footer_left">
			<?php if($__Context->layout_info->left_bottom){ ?>
				<?php echo $__Context->layout_info->left_bottom ?>
			<?php }else{ ?>
				하단 입력란<br />
				원하는 하단 정보를 입력하시면 출력이 됩니다.
			<?php } ?>
		</p>
		<p class="footer_right">
			<?php if($__Context->layout_info->right_bottom){ ?>
				Copyright (c)<?php echo $__Context->layout_info->right_bottom ?> All Right Reserved.
			<?php }else{ ?>
				Copyright (c) 2011 YOUR SITE NAME All Right Reserved.
			<?php } ?>
		</p>
	</div>
</div>
<?php if(!$__Context->is_logged){ ?>
    <?php  $__Context->member_config = MemberModel::getMemberConfig();  ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/columnist/filter','login.xml');$__xmlFilter->compile(); ?>
    <?php if($__Context->member_config->enable_openid=='Y'){;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/columnist/filter','openid_login.xml');$__xmlFilter->compile(); ?>
	<?php } ?>
    <!-- loginWindow -->
    <div id="loginWindow" class="loginWindow">
    <!-- class="loginWindow" | class="loginWindow open" -->
        <span class="modalWindow"></span>
        <div id="loginLayer" class="loginLayer loginTypeA">
        <!-- class="loginLayer loginTypeA" | class="loginLayer loginTypeB" -->
            <button type="button" class="close" onclick="document.getElementById('loginWindow').style.display='none'" accesskey="X"><span>Close Login Layer</span></button>
            <form action="./" method="post" class="typeA" id="commonLogin" onSubmit="return procFilter(this, login)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="act" value="procMemberLogin" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
                <fieldset>
                    <legend>XE Login</legend>
                    <dl>
                        <dt><label for="uid"><?php echo $__Context->lang->user_id ?></label></dt>
                        <dd><input name="user_id" type="text" class="inputText" id="uid" /></dd>
                        <dt><label for="upw"><?php echo $__Context->lang->password ?></label></dt>
                        <dd><input name="password" type="password" class="inputText" id="upw" /></dd>
                    </dl>
                    <p class="keep"><input name="keep_signed" type="checkbox" id="keepA" value="Y" class="inputCheck" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');"/><label for="keepA"><?php echo $__Context->lang->keep_signed ?></label></p>
                    <span class="loginButton"><input name="" type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span>
                </fieldset>
            </form>
            <?php if($__Context->member_config->enable_openid=='Y'){ ?>
            <form action="./" method="post" class="typeB" id="openidLogin"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <fieldset>
                    <legend>OpenID Login</legend>
                    <dl>
                        <dt><label for="oid">Open ID</label></dt>
                        <dd><input name="openid" type="text" class="inputText" id="oid" /></dd>
                    </dl>
                    <span class="loginButton"><input name="" type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span>
                </fieldset>
            </form>
            <?php } ?>
            <ul class="help">
                <li class="join"><a href="<?php if($__Context->layout_info->default_page){;
echo getUrl('act','dispMemberSignUpForm','mid', $__Context->layout_info->default_page);
}else{;
echo getUrl('act','dispMemberSignUpForm');
} ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
                <li class="find"><a href="<?php if($__Context->layout_info->default_page){;
echo getUrl('act','dispMemberFindAccount','mid', $__Context->layout_info->default_page);
}else{;
echo getUrl('act','dispMemberFindAccount');
} ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
                <li class="find"><a href="<?php if($__Context->layout_info->default_page){;
echo getUrl('act','dispMemberResendAuthMail','mid', $__Context->layout_info->default_page);
}else{;
echo getUrl('act','dispMemberResendAuthMail');
} ?>"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a></li>
                <?php if($__Context->member_config->enable_openid=='Y'){ ?>
                <li class="typeA"><a href="#openidLogin" onclick="document.getElementById('loginLayer').className='loginLayer loginTypeB'">OpenID</a></li>
                <li class="typeB"><a href="#commonLogin" onclick="document.getElementById('loginLayer').className='loginLayer loginTypeA'">OpenID</a></li>
                <?php } ?>
            </ul>
            <button type="button" class="close" onclick="document.getElementById('loginWindow').style.display='none'" accesskey="X"><span>Close Login Layer</span></button>
        </div>
    </div>
    <!-- /loginWindow -->
<?php } ?>
