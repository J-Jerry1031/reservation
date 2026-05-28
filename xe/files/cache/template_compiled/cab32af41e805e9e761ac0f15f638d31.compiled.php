<?php if(!defined("__XE__"))exit;?><link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="http://fontface.kr/NanumGothic/css" />
<link rel="stylesheet" type="text/css" href="http://fontface.kr/NanumGothicBold/css" />
<!--#Meta:layouts/modern_line/css/layout.css--><?php $__tmp=array('layouts/modern_line/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->color == 'blue'){ ?>
	<!--#Meta:layouts/modern_line/css/blue.css--><?php $__tmp=array('layouts/modern_line/css/blue.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->color == 'red'){ ?>
	<!--#Meta:layouts/modern_line/css/red.css--><?php $__tmp=array('layouts/modern_line/css/red.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:layouts/modern_line/css/gray.css--><?php $__tmp=array('layouts/modern_line/css/gray.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<style type="text/css">
	<?php if($__Context->layout_info->bg_select == 'N'){ ?>
		body { background:url(./images/none.gif) <?php echo $__Context->layout_info->bg_color ?> }
	<?php }else{ ?>
		<?php if($__Context->layout_info->bg_img){ ?>
			body { 
			
				background:url(<?php echo $__Context->layout_info->bg_img ?>)  
				center top
		
				<?php echo $__Context->layout_info->bg_type ?>
						<?php if($__Context->layout_info->bg_fixed == 'Y'){ ?>
							fixed
						<?php } ?>
				<?php echo $__Context->layout_info->bg_color ?>
				
				;
				
				}
		<?php } ?>
	<?php } ?>
	<?php if($__Context->layout_info->content_weight){ ?>
		#bodyWrap {width:<?php echo $__Context->layout_info->content_weight ?>px;}
	
	<?php } ?>
	<?php if($__Context->layout_info->body_color){ ?>
		#bodyWrap {background-color:<?php echo $__Context->layout_info->body_color ?>;}
	
	<?php } ?>
	<?php if($__Context->layout_info->content_color){ ?>
		.contentWrap {background-color:<?php echo $__Context->layout_info->content_color ?>;}
	
	<?php } ?>
</style>
<div id="bodyWrap">
	<div id="header">
		<h1 class="title">
		<?php if($__Context->layout_info->logo_img){ ?>
		<a href="<?php echo $__Context->layout_info->home_url ?>"><img src="<?php echo $__Context->layout_info->logo_img ?>" alt="<?php echo $__Context->layout_info->site_title ?>" class="iePngFix"/></a>
		<?php }else{ ?>
		<a href="<?php echo $__Context->layout_info->home_url ?>"><?php if($__Context->layout_info->site_title){;
echo $__Context->layout_info->site_title;
}else{ ?>modern line<?php } ?></span></a>
		<?php } ?>
		</h1>
		<ul id="adminWrap">
			<?php if($__Context->layout_info->home_url){ ?>
				
				<li><a href="<?php echo $__Context->layout_info->home_url ?>">home</a></li>
			<?php } ?>
			<?php if(!$__Context->is_logged){ ?>
				<li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>">login</a></li>
				<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>">join</a></li>
				<?php if($__Context->layout_info->language == 'Y'){ ?>
				<!-- class="language" | class="language lanopen" -->
				<li><a href="#" class="sLanguage" onclick="jQuery('.language').slideToggle(); return false;"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a></li>
				<?php } ?>
			<?php }else{ ?>
				<li><b><?php echo $__Context->logged_info->nick_name ?></b></li>
				<?php if($__Context->grant->is_admin){ ?>
				<li><a href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href); return false;">manage</a></li>
				<?php } ?>
				<li><a href="<?php echo geturl('act','dispMemberInfo') ?>">info</a></li>
				<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>">logout</a></li>
				<?php if($__Context->layout_info->language == 'Y'){ ?>
				<!-- class="language" | class="language lanopen" -->
				<li><a href="#" class="sLanguage" onclick="jQuery('.language').slideToggle(); return false;"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a></li>
				<?php } ?>
			<?php } ?>
		</ul>
		<?php if($__Context->layout_info->language == 'Y'){ ?>
					
		<ul class="language">
			<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key => $__Context->val){ ?>
				<?php if($__Context->key!= $__Context->lang_type){ ?>
					<li ><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></a></li>
				<?php } ?>
			<?php } ?>
			<li class="close"><a href="#" onclick="jQuery('.language').slideToggle(); return false;">close</a></li>
		</ul>
		
		<?php } ?>
		<ul id="mainMenu" >
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){ ?>
				<?php if($__Context->val['link']){ ?>
				<?php if($__Context->val['selected']){ ?>
						<?php  $__Context->menu_1st = $__Context->val  ?>
				<?php } ?>
					<li <?php if($__Context->val['selected']){ ?>class="select"<?php } ?>>
						<a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'];
if($__Context->val['selected']){ ?><span>*</span><?php } ?></a>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
		
		
		<div id="searchWrap">
			<form action="<?php echo getUrl() ?>" method="post" id="isSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
				<?php if($__Context->vid){ ?>
				<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<?php } ?>
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="act" value="IS" />
				<input type="hidden" name="search_target" value="title_content" />
				<input name="is_keyword" type="text" class="searchText" title="keyword" />
				<input type="image" src="/xe/layouts/modern_line/images/none.gif" alt="<?php echo $__Context->lang->cmd_search ?>" class="submit" />
			</form>
		</div>
		<div id="rssWrap"><a href="<?php echo $__Context->layout_info->rss ?>" target="_blank"></a></div>
	</div>
<?php if($__Context->menu_1st['list']){ ?>	
	<div id="subWrap" >
		<ul class="submenu">
		
			<?php  $__Context->idx = 1  ?>
			<?php if($__Context->menu_1st['list']&&count($__Context->menu_1st['list']))foreach($__Context->menu_1st['list'] as $__Context->key => $__Context->val){ ?>
			
			<?php if($__Context->val['link']){ ?>
			<li <?php if($__Context->val['selected']){ ?>class="selected"<?php } ?>>
			<a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php };
if($__Context->val['list']){ ?>class="list"<?php } ?>><?php echo $__Context->val['link'] ?></a>
			</li>
			<?php $__Context->idx++ ?> <?php } ?>
			
			<?php } ?>
		</ul>	
	</div>
<?php } ?>
	<div class="CB"></div>	
	<div class="contentWrap">
				<?php echo $__Context->content ?>
		<div class="CB"></div>	
	</div>
	<div class="footer">
		<p><?php if($__Context->layout_info->copyright){;
echo $__Context->layout_info->copyright;
}else{ ?>2010 <b>XE Factory</b>. All rights reserved.<?php } ?><br/>
		powered by <a href="http://xpressengine.com" target="_blank">XpressEngine</a> / skin by <a href="http://xefactory.kr" target="_blank">XE Factory</a>
		</p>
		<ul class="bottomMenu">
			<?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key => $__Context->val){ ?>
			<li><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a></li>
			<?php } ?>
			<li><a href="#">page top ▲</a></li>
		</ul>
	</div>
</div>
