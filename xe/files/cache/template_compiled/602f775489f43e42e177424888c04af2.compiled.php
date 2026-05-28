<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_auction','_header.html') ?>
<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_auction','_view.html');
} ?>
<?php 
	if (!$__Context->module_info->thumbnail_width)  $__Context->module_info->thumbnail_width  = 200;
	if (!$__Context->module_info->thumbnail_height) $__Context->module_info->thumbnail_height = 130;
	if (!$__Context->module_info->content_cut_size) $__Context->module_info->content_cut_size = 200;
	$__Context->list_idx = 1;
 ?>
<div class="boardList" id="boardList">
	<?php if($__Context->notice_list){ ?><table width="100%" border="1" cellspacing="0" summary="List of Articles">
		<thead>
			<!-- LIST HEADER -->
			<tr>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->no ?></span></th><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?><th scope="col" class="title"><span><?php echo $__Context->lang->title ?></span></th><?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->writer ?></span></th><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->user_id ?></span></th><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->user_name ?></span></th><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->date ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_update ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_post ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->readed_count ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->voted_count ?></a></span></th><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><th scope="col"><span><?php echo $__Context->val->name ?></span></th><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><th scope="col"><span><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" class="iCheck" title="Check All" /></span></th><?php } ?>
			</tr>
			<!-- /LIST HEADER -->
		</thead>
		<tbody>
			<!-- NOTICE -->
			<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tr class="notice">
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="notice">
					<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&raquo;<?php } ?>
					<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->lang->notice;
} ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?><td class="title">
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>">
						<?php echo $__Context->document->getTitle() ?>
					</a>
					<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">
						[<?php echo $__Context->document->getCommentCount() ?>]
					</a><?php } ?>
					<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback" class="trackbackNum" title="Trackbacks">
						[<?php echo $__Context->document->getTrackbackCount() ?>]
					</a><?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></td><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserID() ?></td><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserName() ?></td><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="lastReply">
					<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
						<a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" title="Last Reply">
							<?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?>
						</a>
						<?php if($__Context->document->get('last_updater')){ ?><span>
							<sub>by</sub>
							<?php echo htmlspecialchars($__Context->document->get('last_updater')) ?>
						</span><?php } ?>
					<?php } ?>
					<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="readNum"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><td class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
			</tr><?php } ?>
			<!-- /NOTICE -->
		</tbody>
	</table><?php } ?>
</div>
<script type="text/javascript">
function set_left_time(id, year, month, day, hour, minute, second) {	
	month = (month -1);
	minute = (minute -1);
	var now = new Date();
	var nTime = new Date(year,month,day,hour,minute,second);
	var rTime = nTime.getTime() - now.getTime();
	document.getElementById('left_time_sta_'+id).innerHTML=make_left_time(rTime);	
} 
function make_left_time(ms) {
	if(ms < 0) 
	{
		<?php  echo 'tStr ="'.$__Context->lang->msg_auction_close.'";'; ?>
	} 
	else 
	{
		var tHour = ms / 3600000;
		var tMinute = (ms % 3600000) / 60000;
		var tSecond = ((ms % 3600000) / 1000) % 60; 
		var hour = Math.floor(tHour);
		var minute = Math.floor(tMinute);
		var second = Math.floor(tSecond); 
		tStr = is_nine_over(hour) + ":" + is_nine_over(minute) + ":" + is_nine_over(second) + "";
	}
	return tStr;
}
function is_nine_over(x) { return ((x>9)?"":"0")+x; }
</script>
<div class="auctionList" >
	<?php if($__Context->grant->manager && !$__Context->notice_list){ ?><span scope="col"><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" class="iCheck" title="Check All" /></span><?php } ?>
	<?php if($__Context->document_list){ ?><div class="article" style="padding:0px;margin:0px;">
		<!-- AUCTION LIST -->
			<div class="container" >
			<ul style=" padding:0px;margin:0px;">
				<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->document){ ?><li class="fbox article <?php echo ($__Context->list_idx++%2)?'odd':'even' ?>">
					<?php 
						$__Context->post_link     = getUrl('document_srl',$__Context->document->document_srl);
						$__Context->perm_link     = $__Context->document->getPermanentUrl();
						$__Context->comment_count = $__Context->document->getCommentCount();
						$__Context->has_thumbnail = $__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type);
					 ?>
					<?php if($__Context->grant->manager){ ?><span class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></span><?php } ?>
					<a href="<?php echo $__Context->post_link ?>">
					<div class="auctionItem" onClick="top.location='<?php echo $__Context->post_link ?>'">					
					<span class="thumb">
					<?php if($__Context->has_thumbnail){ ?>
						<img src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" width="<?php echo $__Context->module_info->thumbnail_width ?>" height="<?php echo $__Context->module_info->thumbnail_height ?>" alt="" />
					<?php }else{ ?>
						<img src="/xe/modules/board/skins/xe_auction/css/noimage.gif" width="<?php echo $__Context->module_info->thumbnail_width ?>" height="<?php echo $__Context->module_info->thumbnail_height ?>" alt="" />
					<?php } ?>
					</span>
					
					<ul class="flat meta">
						<li><strong><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?> <?php if($__Context->comment_count > 0){ ?><span class="reply">[<?php echo $__Context->comment_count ?>]</span><?php } ?> <?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?></strong></li>
						<li class="summary"><?php echo $__Context->document->getExtraEidValue('summary') ?></li>
						 <?php  
						 	$__Context->winner = $__Context->document->getExtraEidValue('winner');
						  	$__Context->status = $__Context->document->getExtraEidValue('status');
						    $__Context->oDate = $__Context->document->getExtraEidValue('open_datetime');
						    $__Context->cDate = $__Context->document->getExtraEidValue('close_datetime');
						 	$__Context->nDate = date('YmdHi');
						  ?>						
						<?php if($__Context->winner == '' && $__Context->status == 'OPEN' && $__Context->oDate <= $__Context->nDate ){ ?>
						<?php  $__Context->dateArray = $__Context->document->getExtraEidValue('close_datetime');						    
							$__Context->endYear = substr($__Context->dateArray, 0,4);
							$__Context->endMonth = substr($__Context->dateArray, 4,2);
							$__Context->endDay = substr($__Context->dateArray,6,2);
							$__Context->endHour = substr($__Context->dateArray,8,2);
							$__Context->endMin = substr($__Context->dateArray,10,2);
							$__Context->endSec = 59;
						 ?>
						<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->io_auction_left_time ?>: </span><span class="leftTime" id="left_time_sta_<?php echo $__Context->document->document_srl ?>"></span> </li>
							<script type="text/javascript"> 
							set_left_time(<?php echo $__Context->document->document_srl ?>,  <?php echo $__Context->endYear ?>, <?php echo $__Context->endMonth ?>, <?php echo $__Context->endDay ?>, <?php echo $__Context->endHour ?>, <?php echo $__Context->endMin ?>, <?php echo $__Context->endSec ?>);
							setInterval('set_left_time(<?php echo $__Context->document->document_srl ?>, <?php echo $__Context->endYear ?>, <?php echo $__Context->endMonth ?>, <?php echo $__Context->endDay ?>, <?php echo $__Context->endHour ?>, <?php echo $__Context->endMin ?>, <?php echo $__Context->endSec ?>)',1000);
							</script>
						<?php }elseif($__Context->winner == '' && $__Context->status == 'OPEN' && $__Context->oDate > $__Context->nDate ){ ?>
						<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->auction_STANDBY ?></span></li>	
						<?php }elseif($__Context->status == 'CLOSE'){ ?>
							<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->io_winner ?> : <?php echo $__Context->winner ?></span></li>
						<?php }elseif($__Context->status == 'REVIEW'){ ?>
							<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->auction_REVIEW ?></span></li>
						<?php }elseif($__Context->status == 'PENDING'){ ?>
							<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->auction_PENDING ?></span></li>
						<?php }elseif($__Context->status == 'CANCEL'){ ?>
							<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->auction_CANCEL ?></span></li>
						<?php }elseif($__Context->status == 'STANDBY'){ ?>
							<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->auction_STANDBY ?></span></li>
						<?php }elseif($__Context->status == 'FAILURE'){ ?>
						<li><span><?php echo $__Context->lang->io_auction_period ?>: <?php echo zdate($__Context->oDate,'Y/m/d H:i',false) ?> ~ <?php echo zdate($__Context->cDate,'Y/m/d H:i',false) ?></span><span class="status" ><?php echo $__Context->lang->auction_FAILURE ?></span></li>
						<?php } ?>
					</ul>					
					</div>
					</a>
				</li><?php } ?>
			</ul>
			</div>
		<!-- /AUCTION LIST -->
		
	</div><?php } ?>
	<?php if(!$__Context->document_list){ ?><div class="noList">
		<?php echo $__Context->lang->msg_no_auction ?>
	</div><?php } ?>	
</div>
<div class="listFooter">
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div class="pagination">
		<a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
	</div><?php } ?>
	<div class="btnArea">
		<span class="btn25 blue"><a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"><?php echo $__Context->lang->cmd_auction_wirite ?></a></span>
		<?php if($__Context->grant->manager){ ?><span class="btn25"><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument'); return false;"><?php echo $__Context->lang->cmd_manage_document ?></a></span><?php } ?>
	</div>
	<button type="button" class="bsToggle" title="<?php echo $__Context->lang->cmd_search ?>"><?php echo $__Context->lang->cmd_search ?></button>
	<?php if($__Context->grant->view){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board_search" class="board_search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
		<select name="search_target">
			<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<span class="btn25"><button type="submit" onclick="xGetElementById('board_search').submit();return false;"><?php echo $__Context->lang->cmd_search ?></button></span>
        <?php if($__Context->last_division){ ?><span class="btn25"><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>"><?php echo $__Context->lang->cmd_search_next ?></a></span><?php } ?>
	</form><?php } ?>
	<a href="<?php echo getUrl('act','dispBoardTagList') ?>" class="tagSearch" title="<?php echo $__Context->lang->tag ?>"><?php echo $__Context->lang->tag ?></a>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_auction','_footer.html') ?>
