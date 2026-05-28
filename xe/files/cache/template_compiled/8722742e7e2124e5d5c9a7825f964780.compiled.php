<?php if(!defined("__XE__"))exit;?>
<div class="x_page-header">
	<h1>가위바위보 게임 모듈
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_rockgame ?></p>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispRockgameAdminStart'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispRockgameAdminStart') ?>">시작</a></li>
	<?php if($__Context->module_info->module_srl){ ?>
	<li<?php if($__Context->act=='dispRockgameAdminGrantSet'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispRockgameAdminGrantSet') ?>">권한설정</a></li>
	<li<?php if($__Context->act=='dispRockgameAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispRockgameAdminSkinInfo') ?>">스킨정보</a></li>
	<li<?php if($__Context->act=='dispRockgameAdminLog'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispRockgameAdminLog') ?>">게임로그</a></li>
	<?php } ?>
</ul>