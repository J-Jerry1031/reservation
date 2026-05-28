<?php if(!defined("__XE__"))exit;?><div class="board_read">
	<!-- //READ HEADER -->
	
	<div class="read_header_wrap">
	<div class="read_header">
		<h1>
			<?php if($__Context->module_info->use_category=='Y'){ ?><a href="<?php echo getUrl('category',$__Context->oDocument->get('category_srl'), 'document_srl', '') ?>" class="category"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></a><?php } ?>
			<a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getTitle() ?></a>
		</h1>
	</div>
	<?php if($__Context->oDocument->isNotice()){ ?>
	<div  class="read_header_meta">
	<span class="author"><?php if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl()){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?> author" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?></span>
	<span class="time">
		<?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?>
	</span>
	</div>
	<?php } ?>	
	</div>
	
	
	<!-- //pointrush -->		
    <?php if(!empty($__Context->pointrush) && !$__Context->oDocument->isNotice()){ ?>
    <?php if((!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted())){ ?><div class="exOut">
    	
		<?php  $__Context->oPointModel = &getModel('point'); $__Context->point = $__Context->oPointModel->getPoint($__Context->logged_info->member_srl); $__Context->oModuleModel = &getModel('module');  $__Context->config = $__Context->oModuleModel->getModuleConfig('point'); $__Context->level = $__Context->oPointModel->getLevel($__Context->point, $__Context->config->level_step); ?>
		<?php  $__Context->resultPoint = $__Context->point - $__Context->pointrush->rush_point ?>
		<table border="1" cellspacing="0" summary="Extra Form Output" style="width:47%;float:left;border-top:3px solid #ccc;">
			<tr>
	            <th scope="row">응모 기간 </th>
				<td>	            
	            	<font color="#0000FF"><?php echo zdate($__Context->pointrush->start_date,'Y-m-d') ?> ~ <?php if($__Context->pointrush->end_date == '99999999999999'){ ?>상품 소진시 마감<?php }else{;
echo zdate($__Context->pointrush->end_date,'Y-m-d');
} ?></font>&nbsp;&nbsp;
				</td>
	        </tr>
			<tr>
	            <th scope="row">응모 방법 </th>
	            <td>
	            	<?php echo $__Context->pointrush->rush_point ?> 포인트 소진
	            </td>
	        </tr>
			<tr>
	            <th scope="row">응모 제한 </th>
	            <td>
	            	<?php if($__Context->pointrush->rush_limit_day == 0){ ?>일 응모횟수 제한없음<?php }else{ ?>일일 <?php echo $__Context->pointrush->rush_limit_day ?> 회 응모가능<?php } ?>
	            </td>
	        </tr>
			<tr>
	            <th scope="row">응모 대상 </th>
	            <td>
				<?php  $__Context->use_group =  explode('|@|',$__Context->pointrush->use_group);  ?>
				<?php  $__Context->idx = 1;  ?>
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl=>$__Context->group_item){;
if(in_array($__Context->group_item->group_srl,$__Context->use_group)){ ?><label for="use_group_<?php echo $__Context->group_srl ?>">
					<?php echo $__Context->group_item->title;
if($__Context->idx != count($__Context->use_group)){ ?>,&nbsp;<?php } ?>
					<?php  ++$__Context->idx; ?>
				</label><?php }} ?>
				</td>
	        </tr>
			<tr>
	            <th scope="row">당첨자 수 </th>
	            <td>
	            	<?php echo $__Context->pointrush->winner_max ?> 명
	            </td>
	        </tr>
			<tr>
	            <th scope="row">마감 시간 </th>
	            <td>
<font style="font-size: 9pt" color="#FF6600" face="돋움">
<?php if (($__Context->pointrush->rush_status =='OPEN') && ($__Context->pointrush->end_date != '99999999999999')){ ?>
<?php $__Context->temp=$__Context->pointrush->end_date ?>
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
?>
<?php }else if (($__Context->pointrush->end_date == '99999999999999') || ($__Context->pointrush->rush_direct == 'DIRECT')){ ?>
상품 소진시
<?php }else if ($__Context->pointrush->rush_status =='OPEN'){ ?>
The END
<?php } ?>
</font>
	            </td>
	        </tr>
		</table>		
	
		<table border="1" cellspacing="0" summary="Extra Form Output" style="width:47%;float:right;border-top:3px solid #ccc;">
			<?php  $__Context->status = 'rush_status_'.$__Context->pointrush->rush_status; ?>
			<tr>
	            <th scope="row">진행 상태 </th>
	            <td>
					<?php if($__Context->pointrush->rush_status == 'OPEN'){ ?><label style="color:#0033FF;font-weight:bold;"><?php echo Context::getLang($__Context->status) ?></label><?php } ?>
					<?php if($__Context->pointrush->rush_status != 'OPEN'){ ?><label style="color:#0033FF;font-weight:bold;"><?php echo Context::getLang($__Context->status) ?></label><?php } ?>
	            </td>
	        </tr>
			<?php  $__Context->dstatus = 'rush_direct_'.$__Context->pointrush->rush_direct; ?>
			<tr>
	            <th scope="row">당첨 확인 </th>
	            <td>
					<?php if($__Context->pointrush->rush_direct == 'DIRECT'){ ?><label style="color:#006600;font-weight:normal;"><?php echo Context::getLang($__Context->dstatus) ?></label><?php } ?>
					<?php if($__Context->pointrush->rush_direct != 'DIRECT'){ ?><label style="color:#006600;font-weight:normal;"><?php echo Context::getLang($__Context->dstatus) ?></label><?php } ?>
	            </td>
	        </tr>
			<tr>
	            <th scope="row">상품 안내 </th>
	            <td>
	            	 <?php echo $__Context->pointrush->product_title ?>
	            </td>
	        </tr>
			<tr>
	            <th scope="row">이용 안내 </th>
	            <td>
	            	<?php echo $__Context->pointrush->product_info ?>
	            </td>
	        </tr>
			<tr>
	            <th scope="row">당첨 안내 </th>
	            <td>
					<?php echo $__Context->pointrush->product_delivery ?>
	            </td>
	        </tr>
<!--15. 12. 04
			<?php if($__Context->pointrush->product_homepage != ''){ ?><tr>
	            <th scope="row">홈페이지 </th>
	            <td>
	            	<a href="<?php echo $__Context->pointrush->product_homepage ?>" target="blank"><?php echo $__Context->pointrush->product_homepage ?></a>
	            </td>
	        </tr><?php } ?>
			<?php if($__Context->pointrush->product_homepage == ''){ ?><tr>
	            <th scope="row">&nbsp;</th>
	            <td>
	            	&nbsp;
	            </td>
	        </tr><?php } ?>
-->
			<tr>
	            <th scope="row">당첨 발표 </th>
	            <td>
					<font color="#FF6600"><?php if($__Context->pointrush->rush_direct == 'TERM'){;
echo zdate($__Context->pointrush->issue_date,'Y-m-d');
}else{ ?>즉 시<?php } ?></font>
	            </td>
	        </tr>
		</table>
	</div><?php } ?>
	
	<?php if($__Context->grant->manager){ ?><div class="iOut">
	    <table border="1" cellspacing="0" summary="Pointrush Status">
			<tr>
	            <th>담청 확률 </th>
	            <td>
	            	<?php echo $__Context->pointrush->num_min ?> / <?php echo $__Context->pointrush->num_max ?>
	            </td>
	            <th>당첨자</th>
	            <td>
	            	<?php echo $__Context->pointrush->winner_count ?> 명
	            </td>
	        </tr>
			<tr>
	            <th>추첨 제한 </th>
	            <td>
	            	<?php echo $__Context->pointrush->rush_limit ?> 회
	            </td>
	            <th>추첨제한 리셋</th>
	            <td>
	            	<?php echo $__Context->pointrush->rush_limit_reset ?>
	            </td>
	        </tr>
			<tr>
	            <th>응 모</th>
	            <td>
	            	<?php echo $__Context->pointrush->rush_count ?> 회 (<?php echo $__Context->pointrush->temp_count ?>) 
	            </td>
	            <th>소 진</th>
	            <td>
	            	<?php echo $__Context->pointrush->total_point ?> 포인트 
	            </td>
	        </tr>
			<tr>            
	            <td colspan="4">
				<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('mid',$__Context->mid,'act','dispPointrushLogList','document_srl',$__Context->oDocument->document_srl) ?>" class="btn">응모 리스트</a><?php } ?>
	            </td>
	        </tr>
	    </table>
    </div><?php } ?>
	
	<?php if($__Context->logged_info && $__Context->pointrush->rush_status == 'OPEN'){ ?><div id="rush_wrap">
		
		<div id="rush" style="padding:10px 0px 10px 0px">	
			<a href="#" onclick="doPointrushExecute('<?php echo $__Context->oDocument->document_srl ?>');return false;" class="btng btng-large btng-primary"><span>응 모 하 기</span></a>			
		</div>
		
		<div id="rexec" style="display:none">
			<div style="padding:10px;">
				<img src="/xe/modules/pointrush/skins/default/img/ajax-loader.gif"/>
			</div>
		</div>
		
		<?php if($__Context->pointrush->rush_direct == 'TERM'){ ?>
		<div id="rwin" style="display:none;" >
			<div style="width:300px; margin:0 auto;">
				<p>당첨을 기원하며, 소원글을 등록해 주세요.</p>
				<form action="./" method="post" onsubmit="return procFilter(this, window.insert_winner_comment)" id="fo_winner_comment" class="winner_comment"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			        <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				    <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
			        <input type="hidden" name="winner_comment_srl" value="<?php echo $__Context->winner_comment_srl ?>" id="winner_comment_srl"/>
				    <div class="winner_comment">	            	
						<textarea name="winner_comment" class="form-control" cols="80" rows="3" onKeyPress="javascript: if (event.keyCode==13) return false;" onchange="checkInputLength(this,'100');" onkeyup="checkInputLength(this,'100');"></textarea>		
			        </div>
				    <div style="padding:10px;">
						<input class="btng btng-large btng-primary" type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" />
			        </div>
				</form>
	  		</div>
		</div>
		<?php }else{ ?>
		<div id="rwin" style="display:none;" >
			<div style="width:300px; margin:0 auto;">
				<h3>축 당첨.! 축하합니다.~</h3>
				<p>당첨 소감글을 남겨주세요.</p>
				<form action="./" method="post" onsubmit="return procFilter(this, window.insert_winner_comment)" id="fo_winner_comment" class="winner_comment"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			        <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
			        <input type="hidden" name="winner_comment_srl" value="<?php echo $__Context->winner_comment_srl ?>" id="winner_comment_srl"/>
				    <div class="winner_comment">	            	
						<textarea name="winner_comment" class="form-control" rows="3" onKeyPress="javascript: if (event.keyCode==13) return false;" onchange="checkInputLength(this,'100');" onkeyup="checkInputLength(this,'100');"></textarea>		
					</div>
			        <div style="padding:10px;">
				        <input class="btng btng-large btng-primary" type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" />
					</div>
				</form>
  			</div>
		</div>
		<div id="rloss" style="display:none">
			<h3>꽝.~ 안타깝네요. ㅠㅠ</h3>
			<p>다시 도전해 보세요. ^^*</p>			
			<div style="padding:10px;">
				<a href="#" onclick="doPointrushExecute('<?php echo $__Context->oDocument->document_srl ?>');return false;" class="btng btng-large btng-primary">다시 응모하기</a>
			</div>
		</div>		
		<?php } ?>
	</div><?php } ?>
	
	<?php if(!$__Context->logged_info && $__Context->pointrush->rush_status == 'OPEN'){ ?><div id="rush_wrap">		
		<div id="rush">	
			<h3>로그인 필요</h3>
			<p>로그인을 하셔야 이벤트에 응모할 수 있습니다.</p>			
		</div>			
	</div><?php } ?>
	<?php } ?>
	<!-- //pointrush -->
	
	
	
	<!-- //READ HEADER -->
	<!-- //Extra Output -->
	<?php if($__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted())){ ?><div class="exOut">
		<table border="1" cellspacing="0" summary="Extra Form Output">
			<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key=>$__Context->val){ ?><tr>
				<th scope="row"><?php echo $__Context->val->name ?></th>
				<td><?php echo $__Context->val->getValueHTML() ?>&nbsp;</td>
			</tr><?php } ?>
		</table>
	</div><?php } ?>
	<!-- //Extra Output -->
	<!-- //READ BODY -->
	<div class="read_body">
		<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
		<form action="./" method="get" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
			<p><label for="cpw"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
			<p><input type="password" name="password" id="cpw" class="iText" /><input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" class="btn" />
			</p>
		</form>
		<?php }else{ ?>
		<?php echo $__Context->oDocument->getContent(false) ?>
		<?php } ?>
	</div>
	<!-- //READ BODY -->
	<!-- //READ FOOTER -->
	<div class="read_footer">
<!-- 15. 12. 3
		<?php if($__Context->oDocument->hasUploadedFiles()){ ?><div class="fileList">
			<button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->oDocument->get('uploaded_count') ?></strong>]</button>
			<ul class="files">
				<?php if($__Context->oDocument->getUploadedFiles()&&count($__Context->oDocument->getUploadedFiles()))foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
			</ul>
		</div><?php } ?>
-->
		<div class="tns">
			<?php  $__Context->tag_list = $__Context->oDocument->get('tag_list')  ?>
			<?php if(count($__Context->tag_list)){ ?><span class="tags">
				<?php for($__Context->i=0;$__Context->i<count($__Context->tag_list);$__Context->i++){ ?>
					<?php  $__Context->tag = $__Context->tag_list[$__Context->i];  ?>
					<a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>" class="tag" rel="tag"><?php echo htmlspecialchars($__Context->tag) ?></a><span>,</span>
				<?php } ?>
			</span><?php } ?>
<!-- 15. 12. 3
			<a class="document_<?php echo $__Context->oDocument->document_srl ?> action" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_document_do ?></a>
			<ul class="sns">
				<li class="twitter link"><a href="http://twitter.com/">Twitter</a></li>
				<li class="me2day link"><a href="http://me2day.net/">Me2day</a></li>
				<li class="facebook link"><a href="http://facebook.com/">Facebook</a></li>
				<li class="delicious link"><a href="http://delicious.com/">Delicious</a></li>
			</ul>
-->
			<script>			
				var sTitle = '<?php echo str_ireplace(array('<script', '</script'), array("<scr'+'ipt", "</scr'+'ipt"), addslashes($__Context->oDocument->getTitleText())) ?>';
				jQuery(function($){
					$('.twitter>a').snspost({
						type : 'twitter',
						content : sTitle + ' <?php echo $__Context->oDocument->getPermanentUrl() ?>'
					});
					$('.me2day>a').snspost({
						type : 'me2day',
						content : '\"' + sTitle + '\":<?php echo $__Context->oDocument->getPermanentUrl() ?>'
					});
					$('.facebook>a').snspost({
						type : 'facebook',
						content : sTitle
					});
					$('.delicious>a').snspost({
						type : 'delicious',
						content : sTitle
					});
				});
			</script>
		</div>
		<?php if($__Context->module_info->display_sign!='N'&&($__Context->oDocument->getProfileImage()||$__Context->oDocument->getSignature())){ ?><div class="sign">
			<?php if($__Context->oDocument->getProfileImage()){ ?><img src="<?php echo $__Context->oDocument->getProfileImage() ?>" alt="Profile" class="pf" /><?php } ?>
			<?php if($__Context->oDocument->getSignature()){ ?><div class="tx"><?php echo $__Context->oDocument->getSignature() ?></div><?php } ?>
		</div><?php } ?>
		<div class="btnArea"> 
			<?php if($__Context->oDocument->isEditable()){ ?><a class="btn" href="<?php echo getUrl('act','dispPointrushWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_modify ?></a><?php } ?>
			<?php if($__Context->oDocument->isEditable()){ ?><a class="btn" href="<?php echo getUrl('act','dispPointrushDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?>
			<span class="etc">
				<a href="<?php echo getUrl('document_srl','','winner_comment_srl','','comment_srl','','cpage','') ?>" class="btn"><?php echo $__Context->lang->cmd_list ?></a>
			</span>
		</div>
	</div>
	<!-- //READ FOOTER -->
</div>
<?php if(!empty($__Context->pointrush) && !$__Context->oDocument->isNotice()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_winner_comment.html');
} ?>
<?php if($__Context->oDocument->allowTrackback()){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_trackback.html') ?>
<?php } ?>
<br><br><br>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_comment.html') ?>
<script>	
	var point_name_txt = "포인트";
	var rush_confirm_txt = "이벤트에 응모하시겠습니까?";
	var rush_minus_txt = "차감";
	var before_point_txt = "보유 포인트";
	var after_point_txt = "차감 후 포인트";
	var rush_neeed_txt = "필요";
	var rush_point_not_enough ="포인트가 부족합니다.";
	
	var rush_point = <?php echo $__Context->pointrush->rush_point ?>;
	var before_point = <?php echo $__Context->point ?>;
	var after_point = before_point - rush_point;
	
	<?php if($__Context->point > $__Context->pointrush->rush_point){ ?>
		var confirm_pointrush_msg = rush_confirm_txt +"\n\n" +rush_minus_txt+" "+point_name_txt+" : "+rush_point+" " +point_name_txt+"\n\n" +before_point_txt+" : "+before_point
	+" "+point_name_txt+"\n\n"+after_point_txt+" : " +after_point +" "+point_name_txt+"\n\n";
	<?php }else{ ?>
		var confirm_pointrush_msg = rush_point_not_enough + "\n\n" + rush_neeed_txt +" "+point_name_txt +" : "+rush_point+" "+point_name_txt +"\n\n"+before_point_txt+" : " + before_point;
	<?php } ?>
</script>