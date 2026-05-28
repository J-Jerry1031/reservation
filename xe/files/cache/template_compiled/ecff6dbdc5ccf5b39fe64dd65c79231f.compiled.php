<?php if(!defined("__XE__"))exit;?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->cmd_member_expire_module ?></h1>
</div>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispMember_expireAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminConfig') ?>">기본 설정</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminCleanup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminCleanup') ?>">휴면계정 일괄 정리</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminEmailSend'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminEmailSend') ?>">안내메일 일괄 발송</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminEmailTemplate'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminEmailTemplate') ?>">안내메일 내용 편집</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminEmailList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminEmailList') ?>">안내메일 발송 내역</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminListTargets'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminListTargets') ?>">정리대상 회원 목록</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminListMoved'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminListMoved') ?>">별도저장 회원 목록</a></li>
	<li<?php if($__Context->act == 'dispMember_expireAdminListExceptions'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMember_expireAdminListExceptions') ?>">예외 목록</a></li>
</ul>
