<?php if(!defined("__XE__"))exit;
$__Context->document->info['url'] = getFullUrl('document_srl',$__Context->document->document_srl,'page','','mid','','cpage','','comment_srl','');
	$__Context->document->info['no'] = ($__Context->lb->list->notice) ? '<span class="lb-in-notice">'.$__Context->lang->notice.'</span>' : $__Context->no;
	$__Context->document->info['regdate'] = zdate($__Context->document->variables['regdate'], $__Context->lb->date);
	$__Context->document->info['user_id'] = $__Context->document->variables['user_id'];
	$__Context->document->info['user_name'] = $__Context->document->variables['user_name'];
	$__Context->document->info['nick_name'] = '<span class="lb-author member_'.$__Context->document->variables['member_srl'].'">'.$__Context->document->variables['nick_name'].'</span>';
	$__Context->document->info['readed_count'] = ($__Context->document->variables['readed_count'] > 0) ? $__Context->document->variables['readed_count'] : null;
	$__Context->document->info['voted_count'] = ($__Context->document->variables['voted_count'] != 0) ? $__Context->document->variables['voted_count'] : null;
	$__Context->document->info['last_post'] = htmlspecialchars($__Context->document->variables['last_updater']);
	$__Context->document->info['last_update'] =  zdate($__Context->document->variables['last_update'], $__Context->lb->date);
	$__Context->document->info['badges_temp'] = ($__Context->lb->badges) ? array_reverse($__Context->document->getExtraImages($__Context->lb->new_p ? 0 : 60 * 60 * $__Context->lb->new_hrs)) : false;
	(!$__Context->document->info['status'] && $__Context->document->variables['regdate'] > $__Context->lb->new_time) ? $__Context->document->info['status'] = 'new' : '';
	(!$__Context->document->info['status'] && $__Context->document->variables['last_update'] > $__Context->lb->new_time) ? $__Context->document->info['status'] = 'updated' : '';
 ?>
<?php if($__Context->document->info['badges_temp']){ ?>
	<?php if($__Context->document->info['badges_temp']&&count($__Context->document->info['badges_temp']))foreach($__Context->document->info['badges_temp'] as $__Context->val){;
if($__Context->val != 'secret'){ ?>
		<?php  $__Context->document->info['badges'][] = $__Context->val;  ?>
	<?php }} ?>
<?php } ?>