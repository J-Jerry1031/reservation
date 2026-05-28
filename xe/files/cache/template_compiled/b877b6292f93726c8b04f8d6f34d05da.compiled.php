<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/gallery_layout/js/menu.js--><?php $__tmp=array('layouts/gallery_layout/js/menu.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/gallery_layout/css/default.css--><?php $__tmp=array('layouts/gallery_layout/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="wrapPage" class="">
	<div id="wrapCenter" class="center">
		<div id="head" class="">
			<div class="logoframe fl">
				<a href="<?php echo getUrl('', 'mid', $__Context->layout_info->home_module) ?>"><img alt="logo" class="logo iePngFix" src="<?php echo $__Context->layout_info->logo_image ?>" /></a>
			</div>
			<div class="loginframe fr">
				<img src="/xe/layouts/gallery_layout/images/blank.gif" class="zbxe_widget_output" widget="login_info" skin="gallery_layout_login" colorset="default" />
			</div>
			<div class="clear"></div>
		</div>
		<!-- 96 101 60 98 75 108 -->
		<div id="menu" class="iePngFix fl"><!-- 메인 1차메뉴 --><?php $__Context->mi1 = 1 ?>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1 => $__Context->val1){;
if($__Context->val1['link']){ ?>
				<?php if($__Context->val1['selected']){;
$__Context->sub_menu1 = $__Context->val1; $__Context->main_menu_text = $__Context->val1['text'];
} ?>
			<div class="item item<?php echo $__Context->mi1;
if($__Context->val1['selected']){ ?> item-sel<?php } ?>"><div class="itemButtonA" onclick="location.href='<?php echo $__Context->val1['href'] ?>';"><div class="itemButton<?php if($__Context->mi1 == 1){ ?> itemButton1st<?php } ?> "><?php echo $__Context->val1['text'] ?></div></div>
				<?php if($__Context->val1['list']){ ?>
				<div class="sub1Container">
					<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2 => $__Context->val2){ ?>
					<div class="sub1Item<?php if($__Context->val2['selected']){ ?> sub1Item-sel<?php } ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> onclick="window.open('<?php echo $__Context->val2['url'] ?>');"<?php }else{ ?> onclick="location.href='<?php echo $__Context->val2['href'] ?>';"<?php } ?>><?php echo $__Context->val2['text'] ?></div>
					<?php } ?>
				</div>
				<?php } ?>
				<span class="itemNumber"><?php echo $__Context->mi1 ?></span>
			</div><?php $__Context->mi1++ ?>
			<?php };
} ?>
			<div class="fe"></div>
		</div>
        <form action="<?php echo getUrl() ?>" method="post" id="isSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
			<div id="searching" class="iePngFix fr ">
				<?php if($__Context->vid){ ?>
				<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<?php } ?>
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="act" value="IS" />
				<input type="hidden" name="search_target" value="title_content" />
				<input name="is_keyword" type="text" class="searchingInput" />
				<input type="image" src="/xe/layouts/gallery_layout/img/searching.png" class="searchingButton iePngFix" />
				<div class="clear"></div>
			</div>
        </form>
		<div class="clear"></div>
		<div class="content">
			<?php echo $__Context->content ?>
		</div>
		
		<div class="clear"></div>
		<div id="bottom" class="noBar">
			<div class="title"><?php echo $__Context->layout_info->copyright ?></div>
		</div>
	</div>
</div>