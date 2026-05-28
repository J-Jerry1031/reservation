<?php if(!defined("__XE__"))exit;
$__Context->document->info['summary'] = (in_array('summary', $__Context->lb->list->config_t) && !$__Context->lb->list->notice) ? true : false;
	$__Context->document->info['rowspan'] = (in_array('summary', $__Context->lb->list->config_t) && !$__Context->lb->list->notice) ? 2 : 1;
	$__Context->document->info['colspan'] = 1;
	$__Context->document->info['colcount'] = 0;
	$__Context->document->info['webzine'] = in_array('summary', $__Context->lb->list->config_t) || in_array('thumbnail', $__Context->lb->list->config_t) ? true : false;
 ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.var.html') ?>
<tr>
	<?php if($__Context->lb->list->status){ ?><td class="lb-in-td lb-status lb-1<?php echo $__Context->lb->list->notice ? ' lb-notice' : '';
echo (!$__Context->document->info['webzine']) ? ' lb-in-no_webzine' : '' ?>"<?php if($__Context->document->info['summary']){ ?> rowspan="2"<?php } ?>>
		<?php if($__Context->document->info['status']){ ?><span class="lb-<?php echo $__Context->document->info['status'] ?> lb-i" title="<?php echo $__Context->document->info['status'] ?>">
			<span class="lb-h">
				<?php echo $__Context->document->info['status'] ?>
			</span>
		</span><?php } ?>
		<?php if(!$__Context->document->info['status']){ ?>&nbsp;<?php } ?>
		<?php  $__Context->document->info['colcount']++;  ?>
	</td><?php } ?>
	<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){;
if($__Context->val->type != 'summary' && (($__Context->val->type != 'thumbnail' || $__Context->lb->type != 'gallery') || $__Context->search_keyword)){ ?>
		<?php if($__Context->val->type == 'title' && $__Context->lb->bln == 'comment_count'){ ?><td class="lb-in-td<?php echo $__Context->document->info['colcount'] == 0 ? ' lb-1' : '';
echo (!$__Context->document->info['webzine']) ? ' lb-in-no_webzine' : '' ?>"<?php if($__Context->document->info['summary']){ ?> rowspan="2"<?php } ?>>
			<?php if(!$__Context->lb->list->notice){ ?><strong class="lb-bln <?php echo $__Context->document->info['webzine'] ? ' lb-bln-large' : ' lb-bln-small';
echo strlen($__Context->document->info[$__Context->val->type]) > 5 ? ' lb-bln-long' : '';
echo $__Context->document->variables['is_secret'] == 'Y' ? ' lb-secret' : '' ?>">
				<?php if($__Context->document->variables['is_secret'] != 'Y'){ ?><a class="lb-bln" href="<?php echo $__Context->document->info['url'] ?>" title="<?php echo htmlspecialchars($__Context->document->getTitleText()) ?>">
					<?php echo $__Context->document->variables['comment_count'] ? $__Context->document->variables['comment_count'] : '0' ?>
				</a><?php } ?>
			</strong><?php } ?>
			<?php if($__Context->lb->list->notice && !in_array('no', $__Context->lb->list->config_t)){ ?><span class="lb-in-notice"><?php echo $__Context->lang->notice ?></span><?php } ?>
		</td><?php } ?>
		<?php if($__Context->document->info['summary']){ ?>
			<?php 
				$__Context->val->type == 'title' ? $__Context->document->info['rowspan'] = 1 : null;
				$__Context->val->type == 'thumbnail' || $__Context->val->type == $__Context->lb->bln ? $__Context->document->info['rowspan'] = 2 : null;
			 ?>
		<?php } ?>
		<?php if($__Context->lb->list->no_title){ ?>
			<?php 
				$__Context->document->focus = (($__Context->lb->list->no_thumb || ($__Context->lb->type == 'gallery' && !$__Context->search_keyword)) && is_null($__Context->document->focus)) ? true : $__Context->document->focus;
			 ?>
		<?php } ?>
		<td class="lb-in-td lb-<?php echo $__Context->val->type;
echo $__Context->document->info['colcount'] == 0 ? ' lb-1' : '';
echo $__Context->lb->list->notice ? ' lb-notice' : '';
echo (!$__Context->document->info['webzine']) ? ' lb-in-no_webzine' : '';
echo $__Context->document->focus ? ' lb-in-focus' : '' ?>"<?php if($__Context->document->info['rowspan'] == 2){ ?> rowspan="2"<?php };
if($__Context->val->type == 'thumbnail' && !$__Context->lb->list->notice){ ?> style="height: <?php echo $__Context->lb->thumb_h ?>px"<?php } ?>>
			<?php if($__Context->val->type == $__Context->lb->bln){ ?>
				<?php if(!$__Context->lb->list->notice){ ?><strong class="lb-bln<?php echo $__Context->document->info['webzine'] ? ' lb-bln-large' : ' lb-bln-small';
echo strlen($__Context->document->info[$__Context->val->type]) > 5 ? ' lb-bln-long' : '';
echo $__Context->document->variables['is_secret'] == 'Y' ? ' lb-secret' : '' ?>">
					<?php if($__Context->document->variables['is_secret'] != 'Y'){ ?><a class="lb-bln" href="<?php echo $__Context->document->info['url'] ?>" title="<?php echo htmlspecialchars($__Context->document->getTitleText()) ?>">
						<?php echo $__Context->document->info[$__Context->val->type] ? $__Context->document->info[$__Context->val->type] : '0' ?>
					</a><?php } ?>
				</strong><?php } ?>
				<?php if($__Context->lb->list->notice && !in_array('no', $__Context->lb->list->config_t)){ ?><span class="lb-in-notice"><?php echo $__Context->lang->notice ?></span><?php } ?>
			<?php }elseif($__Context->val->type == 'thumbnail'){ ?>
				<?php if(!$__Context->lb->list->notice){ ?>
					<?php 
						$__Context->document->info['thumbnail'] = $__Context->document->getThumbnail($__Context->lb->thumb_w, $__Context->lb->thumb_h, 'crop');
					 ?>
					<?php if($__Context->document->info['thumbnail'] && $__Context->document->variables['is_secret'] != 'Y'){ ?>
						<a href="<?php echo $__Context->document->info['url'] ?>" title="<?php echo htmlspecialchars($__Context->document->getTitleText()) ?>">
							<img src="<?php echo $__Context->document->info['thumbnail'] ?>" alt="<?php echo $__Context->lang->thumbnail ?>" />
						</a>
					<?php }elseif($__Context->lb->thumb_i){ ?>
						<a href="<?php echo $__Context->document->info['url'] ?>" title="<?php echo htmlspecialchars($__Context->document->getTitleText()) ?>">
							<img src="<?php echo $__Context->lb->thumb_i ?>" alt="<?php echo $__Context->lang->thumbnail ?>" />
						</a>
					<?php }else{ ?>
						&nbsp;
					<?php } ?>
				<?php }else{ ?>
					&nbsp;
				<?php } ?>
			<?php }elseif($__Context->val->type == 'title'){ ?>
				<h3 class="lb-in-title<?php echo $__Context->lb->list->notice ? ' lb-notice' : '' ?>">
					<a class="lb-in-title lb-link" href="<?php echo $__Context->document->info['url'] ?>" title="<?php echo htmlspecialchars($__Context->document->getTitleText()) ?>">
						<?php echo $__Context->document->getTitle($__Context->lb->list->title_n, '…') ?>
					</a>
				</h3>
				<?php if($__Context->document->variables['category_srl']){ ?>
					<span class="lb-d lb-in-d<?php echo $__Context->lb->list->notice ? ' lb-notice' : '' ?>">|</span>
					<a class="lb-in-category lb-link<?php echo $__Context->lb->list->notice ? ' lb-notice' : '' ?>" href="<?php echo getUrl('category', $__Context->document->variables['category_srl'], 'page', '', 'document_srl', '', 'comment_srl', '', 'cpage', '') ?>" title="<?php echo $__Context->lang->category ?> : <?php echo $__Context->category_list[$__Context->document->variables['category_srl']]->title ?>">
						<?php echo $__Context->category_list[$__Context->document->variables['category_srl']]->title ?>
					</a>
				<?php } ?>
				<?php if($__Context->document->variables['trackback_count'] || ($__Context->document->variables['comment_count'] && ($__Context->lb->bln != 'comment_count' || $__Context->lb->list->notice))){ ?><span class="lb-in-count<?php echo $__Context->lb->list->notice ? ' lb-notice' : '' ?>">
					<?php if($__Context->document->variables['trackback_count']){ ?><a class="lb-in-trackbacks" href="<?php echo $__Context->document->info['url'] ?>#trackbacks" title="<?php echo $__Context->lang->trackback ?> : <?php echo $__Context->document->variables['trackback_count'] ?>">
						<?php echo $__Context->document->variables['trackback_count'] ?>
					</a><?php } ?>
					<?php if($__Context->document->variables['comment_count'] && ($__Context->lb->bln != 'comment_count' || $__Context->lb->list->notice)){ ?><a class="lb-in-comments" href="<?php echo $__Context->document->info['url'] ?>#comments" title="<?php echo $__Context->lang->replies ?> : <?php echo $__Context->document->variables['comment_count'] ?>">
						<?php echo $__Context->document->variables['comment_count'] ?>
						<span class="lb-hack-w"></span><span class="lb-hack-e"><span class="lb-hack-e-i"></span></span>
					</a><?php } ?>
					<span class="lb-hack-w"></span><span class="lb-hack-e"><span class="lb-hack-e-i"></span></span>
				</span><?php } ?>
				<?php if($__Context->document->info['badges']){ ?><ul class="lb-in-badges">
					<?php if($__Context->document->info['badges']&&count($__Context->document->info['badges']))foreach($__Context->document->info['badges'] as $__Context->val){ ?><li class="lb-in-badges">
						<span class="lb-has<?php echo $__Context->val ?> lb-i" title="<?php echo $__Context->val ?>">
							<span class="lb-h"><?php echo $__Context->val ?></span>
						</span>
					</li><?php } ?>
				</ul><?php } ?>
				<?php  ($__Context->document->info['summary']) ? $__Context->document->info['rowspan'] = 1 : null;  ?>
			<?php }else{ ?>
				<?php if($__Context->val->idx == -1){ ?>
					<?php echo $__Context->document->info[$__Context->val->type] ? $__Context->document->info[$__Context->val->type] : '&nbsp;' ?>
				<?php }else{ ?>
					<?php 
						$__Context->val->value = $__Context->document->getExtraValue($__Context->val->idx);
						$__Context->val->type = $__Context->extra_keys[$__Context->val->idx]->type;
					 ?>
					<?php if($__Context->val->value){ ?>
						<?php if($__Context->val->type == 'homepage'){ ?>
							<a href="<?php echo str_replace('&','&amp;',$__Context->document->getExtraValue($__Context->val->idx)) ?>" target="_blank" title="<?php echo htmlspecialchars($__Context->extra_keys[$__Context->val->idx]->name) ?> : <?php echo str_replace('&','&amp;',$__Context->document->getExtraValue($__Context->val->idx)) ?>">
								<?php if($__Context->lb->list->link_n == 'i'){ ?>
									<span class="lb-skip lb-i"></span><span class="lb-h"><?php echo $__Context->extra_keys[$__Context->val->idx]->name ?> : <?php echo str_replace('&','&amp;',$__Context->document->getExtraValue($__Context->val->idx)) ?></span></a>
								<?php }else{ ?>
									<?php echo str_replace('&','&amp;',$__Context->lb->list->link_n < 1 ? $__Context->document->getExtraValue($__Context->val->idx) : cut_str($__Context->document->getExtraValue($__Context->val->idx), $__Context->lb->list->link_n, '…')) ?></a>
								<?php } ?>
						<?php }elseif($__Context->val->type == 'date'){ ?>
							<?php echo zdate($__Context->document->getExtraValue($__Context->val->idx), $__Context->lb->date) ?>
						<?php }else{ ?>
							<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>
						<?php } ?>
					<?php }else{ ?>
						&nbsp;
					<?php } ?>
				<?php } ?>
				<?php  ($__Context->document->info['summary'] && $__Context->document->info['rowspan'] == 1) ? $__Context->document->info['colspan']++ : null;  ?>
			<?php } ?>
			<?php  $__Context->document->info['colcount']++;  ?>
		</td>
		<?php 
			$__Context->document->focus = ($__Context->lb->list->no_title && $__Context->val->type == 'thumbnail') ? true : false;
		 ?>
	<?php }} ?>
	<?php if($__Context->grant->manager){ ?><td class="lb-in-td lb-cart<?php echo $__Context->lb->list->notice ? ' lb-notice' : '';
echo (!$__Context->document->info['webzine']) ? ' lb-in-no_webzine' : '' ?>"<?php if($__Context->document->info['summary']){ ?> rowspan="2"<?php } ?>>
		<input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> />
	</td><?php } ?>
</tr>
<?php if($__Context->document->info['summary']){ ?><tr>
	<td class="lb-in-td lb-summary" colspan="<?php echo $__Context->document->info['colspan'] ?>">
		<p class="lb-in-summary">
			<?php if($__Context->document->variables['is_secret'] != 'Y'){ ?><a class="lb-in-summary" href="<?php echo $__Context->document->info['url'] ?>" title="<?php echo htmlspecialchars($__Context->document->getTitleText()) ?>">
				<?php echo $__Context->document->getSummary($__Context->lb->list->summary_n, '…') ?>
			</a><?php } ?>
			<?php if($__Context->document->variables['is_secret'] == 'Y'){ ?><span class="lb-sub">
				<?php echo $__Context->lang->msg_is_secret ?>
			</span><?php } ?>
		</p>
	</td>
</tr><?php } ?>