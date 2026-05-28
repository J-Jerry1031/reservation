<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','header.html') ?>
<?php if($__Context->act == 'krzip'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','krzip.html') ?>
<?php }else{ ?>
	<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.view.html');
} ?>
	<div id="lb_list">
		<div class="lb-head">
			<?php if($__Context->lb->category){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.category.html');
} ?>
			<?php if($__Context->lb->name && !$__Context->lb->category && !$__Context->document_srl){ ?>
				<h1 id="lune_board_title" class="lb-l">
					<a class="lune_board_title lb-link" href="<?php echo getFullUrl('','mid',$__Context->mid) ?>">
						<?php if($__Context->lb->name_i){ ?>
							<img src="<?php echo getUrl();
echo $__Context->lb->name_i ?>" alt="<?php echo $__Context->lb->name ?>" />
						<?php }else{ ?>
							<?php echo $__Context->lb->name ?>
						<?php } ?>
					</a>
				</h1>
			<?php } ?>
			<div class="lb-bar lb-r">
				<div class="lb-bar-w"></div><div class="lb-bar-e"></div><div class="lb-bar-c"></div>
				<h2 class="lb-h">Board Menu</h2>
				<ul class="lb-list">
					<?php if($__Context->grant->manager){ ?>
						<li class="lb-list-i">
							<a class="lb-b lb-setup lb-i" href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" target="_blank" title="<?php echo $__Context->lang->cmd_setup ?>">
								<?php echo $__Context->lang->cmd_setup ?>
							</a>
						</li>
						<li class="lb-list-i">
							<a class="lb-b lb-manage lb-i" href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument'); return false;" title="<?php echo $__Context->lang->cmd_manage_document ?>">
								<?php echo $__Context->lang->cmd_manage_document ?>
							</a>
						</li>
					<?php } ?>
					<?php if($__Context->lb->list->login){ ?><li class="lb-list-i">
						<a class="lb-b lb-login lb-i" href="<?php echo getUrl('act','dispMemberLoginForm') ?>" accesskey="l" title="<?php echo $__Context->lang->cmd_login ?> (L)">
							<?php echo $__Context->lang->cmd_login ?>
						</a>
					</li><?php } ?>
					<li class="lb-list-i">
						<button class="lb-b lb-search lb-i" onclick="jQuery('#lb_search').show().find('input[type=text]').focus()" accesskey="s" title="<?php echo $__Context->lang->cmd_search ?> (S)">
							<?php echo $__Context->lang->cmd_search ?>
						</button>
					</li>
					<?php if($__Context->lb->list->sort){ ?><li class="lb-list-i">
						<button class="lb-b lb-sort lb-i" onclick="jQuery('#lb_sort').show().find('div.lb-m .lb-m-b').get(0).focus()" accesskey="o" title="<?php echo $__Context->lang->cmd_sort ?> (O)">
							<?php echo $__Context->lang->cmd_sort ?>
						</button>
					</li><?php } ?>
					<?php if($__Context->grant->write_document){ ?><li class="lb-list-i">
						<a class="lb-b lb-write lb-i" href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" accesskey="w" title="<?php echo $__Context->lang->cmd_write ?> (W)">
							<?php echo $__Context->lang->cmd_write ?>
						</a>
					</li><?php } ?>
				</ul>
			</div>
			<div class="lb-c"></div>
		</div>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.search.html') ?>
		<?php if($__Context->lb->list->sort){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.sort.html');
} ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.board.html') ?>
		<?php if($__Context->lb->type == 'gallery' && !$__Context->search_keyword && $__Context->document_list){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','list.gallery.html');
} ?>
		<div class="lb-bar">
			<div class="lb-bar-w"></div><div class="lb-bar-e"></div><div class="lb-bar-c"></div>
			<div class="lb-l">
				<h2 class="lb-h">Board Links</h2>
				<ul class="lb-list">
					<?php if($__Context->lb->list->rss){ ?><li class="lb-list-i">
						<a class="lb-b lb-rss lb-i" href="<?php echo getUrl('','mid',$__Context->mid,'act','rss') ?>" target="_blank" title="RSS">
							RSS
						</a>
					</li><?php } ?>
					<li class="lb-list-i">
						<a class="lb-b lb-tag lb-i" href="<?php echo getUrl('act','dispBoardTagList') ?>" title="<?php echo $__Context->lang->tag ?>">
							<?php echo $__Context->lang->tag ?>
						</a>
					</li>
				</ul>
			</div>
			<div class="lb-r">
				<h2 class="lb-h">Page Navigation</h2>
				<ul class="lb-list lb-p">
					<?php if($__Context->page_navigation->last_page > $__Context->module_info->page_count){ ?><li class="lb-p">
						<a class="lb-b lb-p-b lb-first lb-i" href="<?php echo getUrl('page','1') ?>" title="<?php echo $__Context->lang->first_page ?>">
							<span class="lb-h">
								<?php echo $__Context->lang->first_page ?>
							</span>
						</a>
					</li><?php } ?>
					<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
						<li class="lb-p">
							<?php if($__Context->page_no != $__Context->page){ ?><a class="lb-p" href="<?php echo getUrl('page', $__Context->page_no,'document_srl','','comment_srl','','cpage','') ?>">
								<?php echo $__Context->page_no ?>
							</a><?php } ?>
							<?php if($__Context->page_no == $__Context->page){ ?><strong class="lb-p">
								<span class="lb-hack-w"></span><span class="lb-hack-e"><span class="lb-hack-e-i"></span></span>
								<span class="lb-i-hack">
									<?php echo $__Context->page ?>
								</span>
							</strong><?php } ?>
						</li>
					<?php } ?>
					<?php if($__Context->page_navigation->last_page > $__Context->module_info->page_count){ ?><li class="lb-p">
						<a class="lb-b lb-p-b lb-last lb-i" href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->lang->last_page ?>">
							<span class="lb-h">
								<?php echo $__Context->lang->last_page ?>
							</span>
						</a>
					</li><?php } ?>
				</ul>
			</div>
		</div>
	</div>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/lune_board','footer.html') ?>