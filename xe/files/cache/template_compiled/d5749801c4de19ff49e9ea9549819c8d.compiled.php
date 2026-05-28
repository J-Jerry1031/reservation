<?php if(!defined("__XE__"))exit;?>
<div class="x_page-header">
	<h1>퀴즈퀴즈 게임 모듈
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_quizgame ?></p>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispQuizgameAdminSet'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminSet') ?>">모듈설정</a></li>
	<?php if($__Context->module_info->module_srl){ ?>
	<li<?php if($__Context->act=='dispQuizgameAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminConfig') ?>">게임설정</a></li>
	<li<?php if($__Context->act=='dispQuizgameAdminGrantSet'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminGrantSet') ?>">권한설정</a></li>
	<li<?php if($__Context->act=='dispQuizgameAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminSkinInfo') ?>">스킨정보</a></li>
	<li<?php if($__Context->act=='dispQuizgameAdminMatterLog'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminMatterLog') ?>">로그(문제)</a></li>
	<li<?php if($__Context->act=='dispQuizgameAdminAnswerLog'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispQuizgameAdminAnswerLog') ?>">로그(답안)</a></li>
	<?php } ?>
</ul>