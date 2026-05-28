<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_header.html') ?>
<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_read.html');
} ?>
<div class="webzine_head_wrap">
<div class="webzine_head">	
	<div class="fleft">
	<p class="txt_notice">
		<?php if($__Context->grant->manager){ ?><span style="width:44px"><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" class="iCheck" title="Check All" /></span><?php } ?>		
		<strong><?php echo $__Context->module_info->browser_title ?></strong>
	</p>
	</div>
</div>
</div>
<?php if($__Context->notice_list){ ?><table cellspacing="0" border="1" summary="List of Articles" class="tb_list">
<thead>
</thead>
<tbody>
<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no => $__Context->document){ ?>
<tr class="notice">
	<td class="i_notice"><?php if($__Context->document_srl == $__Context->document->document_srl){ ?>&raquo;<?php }else{;
echo $__Context->lang->notice;
} ?></td>	
	<td class="title">
	<?php if($__Context->grant->manager){ ?>
		<input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check this" onclick="doAddDocumentCart(this)" <?php if($__Context->document->isCarted()){ ?>checked="checked"<?php } ?> />
	<?php } ?>
	<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
	<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>					
	<?php if($__Context->document->getCommentCount()){ ?>
		<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment"><span class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</span></a>
	<?php } ?>
	<?php if($__Context->document->getTrackbackCount()){ ?>
		<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback"><span class="trackbackNum" title="Trackbacks">[<?php echo $__Context->document->getTrackbackCount() ?>]</span></a>
	<?php } ?>
	</td>
	<td class="i_date"><?php echo $__Context->document->getRegdate('Y-m-d') ?></td>
</tr>
<?php } ?>
</tbody>
</table><?php } ?>
<?php 
	$__Context->mi = $__Context->module_info;
	if (!$__Context->mi->thumbnail_width)  $__Context->mi->thumbnail_width  = 250;
	if (!$__Context->mi->thumbnail_height) $__Context->mi->thumbnail_height = 150;
	if (!$__Context->mi->content_cut_size) $__Context->mi->content_cut_size = 200;
	$__Context->mi->thumbnail_type = ratio;
	$__Context->idx = 1;
 ?>
<?php if($__Context->document_list){ ?><ul class="webzine_list">
	<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><li class="<?php echo ($__Context->idx++%2)?'odd':'even' ?>" >
	<div class="item_wrap" >
		<div class="item_left">			
			<?php 
				$__Context->post_link     = getUrl('document_srl',$__Context->document->document_srl);
				$__Context->perm_link     = $__Context->document->getPermanentUrl();
				$__Context->comment_count = $__Context->document->getCommentCount();
				$__Context->has_thumbnail = $__Context->document->thumbnailExists($__Context->mi->thumbnail_width, $__Context->mi->thumbnail_height, $__Context->mi->thumbnail_type);
			 ?>
			<a href="<?php echo $__Context->post_link ?>">
			<span class="thumb">
			<?php if($__Context->has_thumbnail){ ?>
				<img src="<?php echo $__Context->document->getThumbnail($__Context->mi->thumbnail_width, $__Context->mi->thumbnail_height, $__Context->mi->thumbnail_type) ?>" width="<?php echo $__Context->mi->thumbnail_width ?>" height="<?php echo $__Context->mi->thumbnail_height ?>" alt="" />
			<?php }else{ ?>
				<img src="/xe/modules/pointrush/skins/default/img/no_image.gif" width="<?php echo $__Context->mi->thumbnail_width ?>" height="<?php echo $__Context->mi->thumbnail_height ?>" alt="" />
			<?php } ?>
			</span>
			</a>
		</div>
		<div class="item_content">		
			<div style="padding:0px;border:0px solid #ccc;" class="tes">	
				<ul class="lst_type">
				<li>
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> style="color:#ff6600"<?php } ?>>
					<font style="FONT-SIZE: 11pt" color="#0033FF" face="굴림"><b><?php if($__Context->grant->manager){ ?><em class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> />&nbsp;&nbsp;</em><?php };
echo $__Context->document->getTitle() ?></b></font>
					</a>
					<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</a><?php } ?>
					<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback" class="trackbackNum" title="Trackbacks">[<?php echo $__Context->document->getTrackbackCount() ?>]</a><?php } ?>
					<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>				
				</li>
				<li><span>이벤트 상품</span><?php echo $__Context->document->pointrush->product_title ?></li>
				<li><span>응모 기간</span><strong><?php echo zdate($__Context->document->pointrush->start_date,'Y-m-d') ?> ~ <?php if($__Context->document->pointrush->end_date == '99999999999999'){ ?>상품 소진시 마감<?php }else{;
echo zdate($__Context->document->pointrush->end_date,'Y-m-d');
} ?></strong>&nbsp;
<font style="font-size: 9pt" color="#FF0C00" face="돋움">
<?php if (($__Context->document->pointrush->rush_status =='OPEN') && ($__Context->document->pointrush->end_date != '99999999999999') && ($__Context->document->pointrush->rush_direct == 'TERM')){ ?>
<?php $__Context->temp=$__Context->document->pointrush->end_date ?>
<font color="#006600"><b>[</b></font>&nbsp;마감&nbsp;
<?php
$now_date = date("YmdHis"); 
$imsi =Context::get('temp');
$ty=substr($imsi,0,4);
$tm=substr($imsi,4,2);
$td=substr($imsi,6,2);
$edate = date("Ymd", mktime(0,0,0, $tm, $td+1, $ty));
$result=strtotime($edate)-strtotime($now_date);
$rday=intval((int)$result/86400);
$ttime=($result%86400);
$rtime=intval((int)$ttime/3600);
$tmin=($ttime%3600);
$rmin=intval((int)$tmin/60);
$tsec=($tmin%60);
if (($rday < 1) and ($rtime > 0)){ $wtmp = $rtime.시간."&nbsp;".$rmin.분."&nbsp;".전; }
else if (($rday < 1) and ($rtime < 1) and ($rmin > 0)) { $wtmp = $rmin.분."&nbsp;".$tsec.초."&nbsp;".전; }
else if (($rday < 1) and ($rtime < 1) and ($rmin < 1) and ($tsec > 0)) { $wtmp = $tsec.초."&nbsp;".전; }
else { $wtmp = $rday.일."&nbsp;".$rtime.시간."&nbsp;".$rmin.분."&nbsp;".전; }
echo "$wtmp";
//$date = new DateTime($edate);
//$currentdate = new DateTime();
//echo $date->diff($currentdate)->format("%d일 %h시간 %i분 전");
?>&nbsp;<font color="#006600"><b>]</b></font>
<?php } ?></font>
</span>				
				</li>
				<?php  $__Context->use_group =  explode('|@|',$__Context->document->pointrush->use_group);  ?>
				<?php  $__Context->idx = 1;  ?>
				<li><span>응모 대상</span>	<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl=>$__Context->group_item){;
if(in_array($__Context->group_item->group_srl,$__Context->use_group)){ ?><label for="use_group_<?php echo $__Context->group_srl ?>">
							<?php echo $__Context->group_item->title;
if($__Context->idx != count($__Context->use_group)){ ?>,&nbsp;<?php } ?>
							<?php  ++$__Context->idx; ?>
				</label><?php }} ?></li>
				<?php  $__Context->status = 'rush_status_'.$__Context->document->pointrush->rush_status; ?>
				<li><span>진행 상태</span>
					<?php if($__Context->document->pointrush->rush_status == 'OPEN'){ ?><label style="color:#0033FF;font-weight:bold;"><?php echo Context::getLang($__Context->status) ?></label><?php } ?>
					<?php if($__Context->document->pointrush->rush_status != 'OPEN'){ ?><label style="color:#0033FF;font-weight:bold;"><?php echo Context::getLang($__Context->status) ?></label><?php } ?>
				</li>
				<li><span>당첨 발표</span><font color="#FF0C00"><?php if ($__Context->document->pointrush->rush_direct == 'TERM'){;
echo zdate($__Context->document->pointrush->issue_date,'Y-m-d');
}else{ ?>즉시 당첨<?php } ?></font>
				</li>
				</ul>
			</div>		
		</div>
	</div>
	</li><?php } ?>
</ul><?php } ?>
<?php if(!$__Context->document_list){ ?><div class="no_doc">	
	등록된 이벤트가 없습니다.
</div><?php } ?>
<div class="list_footer">
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div class="pagination">
		<a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
	</div><?php } ?>
	<div class="btnArea">
		<a href="<?php echo getUrl('act','dispPointrushWrite','document_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_write ?></a>
		<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" class="btn" onclick="popopen(this.href,'manageDocument'); return false;"><?php echo $__Context->lang->cmd_manage_document ?></a><?php } ?>
	</div>
	<button type="button" class="bsToggle" title="<?php echo $__Context->lang->cmd_search ?>"><?php echo $__Context->lang->cmd_search ?></button>
	<?php if($__Context->grant->view){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board_search" class="board_search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
		<select name="search_target">
			<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<button type="submit" class="btn" onclick="xGetElementById('board_search').submit();return false;"><?php echo $__Context->lang->cmd_search ?></button>
        <?php if($__Context->last_division){ ?><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="btn"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
	</form><?php } ?>
<!-- 15.12.04
	<a href="<?php echo getUrl('act','dispPointrushTagList') ?>" class="tagSearch" title="<?php echo $__Context->lang->tag ?>"><?php echo $__Context->lang->tag ?></a>
-->
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_footer.html') ?>
