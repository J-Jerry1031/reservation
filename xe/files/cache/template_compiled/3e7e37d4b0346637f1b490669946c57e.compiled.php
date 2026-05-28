<?php if(!defined("__XE__"))exit;?>
<!--#Meta:layouts/webengine_white/js/jquery.cookie.js--><?php $__tmp=array('layouts/webengine_white/js/jquery.cookie.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/webengine_white/js/script.js--><?php $__tmp=array('layouts/webengine_white/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/webengine_white/css/style.css--><?php $__tmp=array('layouts/webengine_white/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><script type="text/javascript">
	jQuery(function($){
		$.layout_alert("<?php echo $__Context->XE_VALIDATOR_MESSAGE ?>", "<?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>");
	});
</script><?php } ?>
<style type="text/css">
	.gnb_a_hover_color
</style>
<div id="layout">
	<div id="layout_head">
		<div class="layout_width">
			<div class="layout_head_padding">
				<h1 class="logo">
					<a href="<?php echo ($__Context->layout_info->site_url)?$__Context->layout_info->site_url:getUrl() ?>"><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo ($__Context->layout_info->site_name)?$__Context->layout_info->site_name:'사이트 로고' ?>" /></a>
				</h1>
				<ul id="gnb">
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link'] || $__Context->val1['href']){ ?><li class="depth1_li<?php if($__Context->val1['selected']){ ?> selected<?php } ?>">
						<div class="depth1_div">
							<a class="depth1_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
								<?php echo $__Context->val1['link'] ?>
								<span class="depth1_arrow border"></span>
								<span class="depth1_arrow bg"></span>
							</a>
						</div>
						<?php if($__Context->val1['list']){ ?><ul class="depth1_sub">
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link'] || $__Context->val2['href']){ ?><li class="depth2_li">
								<a class="depth2_a" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
									<?php echo $__Context->val2['link'] ?>
									<span class="depth2_arrow border"></span>
									<span class="depth2_arrow bg"></span>
								</a>
								<?php if($__Context->val2['list']){ ?><ul class="depth2_sub">
									<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link'] || $__Context->val3['href']){ ?><li class="depth3_li">
										<a class="depth3_a" href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
										    <?php echo $__Context->val3['link'] ?>
										</a>
									</li><?php }} ?>
								</ul><?php } ?>
							</li><?php }} ?>
						</ul><?php } ?>
					</li><?php }} ?>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="layout_sub">
	</div>
	<div class="layout_width">
		<div id="layout_bannertop"><?php echo $__Context->layout_info->bannertop_content ?></div>
		<div id="layout_banner">
			<div id="banner_frame">
				<div id="banner_imgs">
					<?php  $__Context->idx = 0 ?>
					<?php if($__Context->banner_menu->list&&count($__Context->banner_menu->list))foreach($__Context->banner_menu->list as $__Context->key=>$__Context->val){ ?>
						<div class="banner_obj banner_obj_<?php echo $__Context->idx;
if(($__Context->idx == 0 && !isset($__Context->_COOKIE['ww_banner_img'])) || $__Context->idx == $__Context->_COOKIE['ww_banner_img']){ ?> selected" style="display:block;<?php } ?>">
							<a href="<?php echo $__Context->val['href'] ?>"><img src="<?php echo $__Context->val['normal_btn'] ?>" alt="<?php echo $__Context->val['text'] ?>" /></a>
							<?php  $__Context->idx++ ?>
						</div>
					<?php } ?>
				</div>
				<div id="banner_control"<?php if($__Context->layout_info->banner_control_visible == 'N' || $__Context->idx <= 1){ ?> class="hidden"<?php } ?>>
					<div id="banner_left_control" class="control"><span></span></div>
					<div id="banner_right_control" class="control"><span></span></div>
				</div>
				<div id="banner_loading"<?php if($__Context->layout_info->banner_timebar_visible == 'N' || $__Context->idx <= 1){ ?> class="hidden"<?php };
if($__Context->_COOKIE['ww_banner_rest']){ ?> style="width:<?php echo $__Context->_COOKIE['ww_banner_rest'] ?>px;"<?php } ?>></div>
			</div>
			<div id="banner_right">
				<?php if(!$__Context->is_logged){ ?>
					<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="layout_login" action="<?php echo getUrl() ?>" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
						<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
						<input type="hidden" name="act" value="procMemberLogin" />
						<div class="box">
							<input id="user_id" class="l_gradient" name="user_id" type="text" />
							<input id="user_pw" class="l_gradient" name="password" type="password" />
						</div>
						<input id="layout_login_submit" class="submit l_gradient" type="button" value="<?php echo $__Context->lang->cmd_login ?>" />
						
						<div class="clear"></div>
						<div class="line" style="margin:0 0 4px 0;">
							<input type="checkbox" id="layout_keep" name="keep_signed" data-msg="<?php echo $__Context->lang->about_keep_signed ?>" />
							<label id="layout_keep_label" for="layout_keep"><?php echo $__Context->lang->keep_signed ?> <span class="off">Off</span></label>
							<a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>" class="fright"><?php echo $__Context->lang->cmd_signup ?></a>
							<div class="clear"></div>
						</div>
						<div class="line">
							<a href="<?php echo getUrl('act','dispMemberFindAccount') ?>" class="fleft"><?php echo $__Context->lang->cmd_find_member_account ?></a>
							<a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>" class="fright"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a>
							<div class="clear"></div>
						</div>
					</form>
				<?php } ?>
				<?php if($__Context->is_logged){ ?>
					<div id="layout_login">
						<div class="nickline">
							<a href="#popup_menu_area" class="nickname member_<?php echo $__Context->logged_info->member_srl ?>" onclick="return false"><?php echo $__Context->logged_info->nick_name ?></a>
							<?php if($__Context->logged_info->is_admin == 'Y'){ ?><a class="fright" href="<?php echo getUrl('', 'module','admin') ?>" target="_blank">[<?php echo $__Context->lang->cmd_management ?>]</a><?php } ?>
							<div class="clear"></div>
						</div>
						<ul class="member_menu">
							<?php 
								$__Context->member_menu = array(
									"dispMemberInfo"=>$__Context->lang->cmd_view_member_info,
									"dispMemberScrappedDocument"=>$__Context->lang->cmd_view_scrapped_document,
									"dispMemberSavedDocument"=>$__Context->lang->cmd_view_saved_document,
									"dispMemberOwnDocument"=>$__Context->lang->cmd_view_own_document,
									"dispCommunicationFriend"=>$__Context->lang->cmd_view_friend,
									"dispCommunicationMessages"=>$__Context->lang->cmd_view_message_box,
									"dispMemberLogout"=>$__Context->lang->cmd_logout
								);
								$__Context->idx=0
							 ?>
							<?php if($__Context->member_menu&&count($__Context->member_menu))foreach($__Context->member_menu as $__Context->key=>$__Context->val){ ?><li<?php if(!($__Context->idx%2)){ ?> class="menu fleft"<?php };
if($__Context->idx%2){ ?> class="menu fright"<?php } ?>>
								<a href="<?php echo getUrl('act',$__Context->key) ?>">
									<?php echo $__Context->val ?>
									<em class="border"></em>
								</a>
								<?php  $__Context->idx++ ?>
							</li><?php } ?>
							<li class="clear"></li>
						</ul>
						<div class="clear"></div>
					</div>
				<?php } ?>
				<div id="login_bottom">
					<form id="layout_search" action="<?php echo getUrl() ?>" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
					    <?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?>
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="act" value="IS" />
						<input type="hidden" name="search_target" value="title_content" />
						<input type="text" class="l_gradient" name="is_keyword" id="layout_searchText" value="<?php echo $__Context->is_keyword ?>" />
						<input type="submit" class="l_gradient" id="layout_searchSubmit" value="검색" />
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="layout_bannerbottom"><?php echo $__Context->layout_info->bannerbottom_content ?></div>
		<div id="layout_body">
			<?php echo $__Context->content ?>
			<div class="clear"></div>
		</div>
    	<div id="layout_mainbottom"><?php echo $__Context->layout_info->mainbottom_content ?></div>
		<div id="layout_foot">
			<div id="sitemap">
				<?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link'] || $__Context->val1['link']){ ?>
					<div class="section">
						<a class="topdepth l_gradient" href="<?php echo $__Context->val1['href'] ?>">
							<?php echo $__Context->val1['link'] ?>
							<span></span>
							<em></em>
						</a>
						<?php if($__Context->val1['list']){ ?><ul>
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link'] || $__Context->val2['link']){ ?><li>
								<a href="<?php echo $__Context->val2['href'] ?>"><?php echo $__Context->val2['link'] ?></a>
							</li><?php }} ?>
						</ul><?php } ?>
					</div>
				<?php }} ?>
				<div class="clear"></div>
			</div>
			<div id="footer">
				<div id="footContent" class="fleft">
					<?php echo $__Context->layout_info->foot_content ?>
				</div>
				<div id="copyright" class="fright">
					<?php echo $__Context->layout_info->copyright ?>
				</div>
				<div class="clear"></div>
				<div id="designed_by"><a href="http://www.webengine.co.kr">Designed by WebEngine.</a></div>
			</div>
		</div>
	</div>
</div>
<div id="layout_alert"></div>