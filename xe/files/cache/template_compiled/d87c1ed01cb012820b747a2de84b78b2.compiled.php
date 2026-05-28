<?php if(!defined("__XE__"))exit;?><!-- winner comment -->
<div style="text-align=left;padding-left:10px;" class="here"><?php if($__Context->pointrush->disp_flg != "Y"){;
if($__Context->grant->manager){ ?><button type="button" class="btn" onclick="doPointrushDispFlgExecute('<?php echo $__Context->pointrush->document_srl ?>');return false;">당첨자 발표</button><?php } ?>&nbsp;&nbsp;<?php if($__Context->grant->manager){ ?><button type="button" class="btn" onclick="javasript:disablechk();">보이기/감추기</button><?php };
}else{ ?>&nbsp;<?php } ?>
</div>
<div class="fb" id="winner_comment" style=<?php if($__Context->pointrush->disp_flg == "Y" && ($__Context->pointrush->rush_status == "OPEN" || $__Context->pointrush->rush_status == "CLOSE")){ ?>"display:"<?php }else{ ?>"display:none"<?php } ?>>
	<div class="title">
		당 첨 자&nbsp;&nbsp;<font style="font-size:9pt" face="돋움" color="#666666">(<?php echo count($__Context->winner_comment) ?>명)</font>
	</div>
	<div class="ta_ta">
		<table width="100%" border="0" cellspacing="0">
			<thead>
				<tr>
				    <td width="12%" align="center" height="30"><b>응모자</b></th>
			        <td width="12%" align="center" ><b>응모일</b></th>
				<?php if ($__Context->pointrush->rush_direct =='DIRECT'){ ?>					
					<td width="37%" align="center" ><b>당 첨 글</b></th>
				<?php }else{ ?>
					<td width="37%" align="center" ><b>당첨 기원글</b></th>	            
				<?php } ?>
			        <td width="9%" align="center" ><b>진행상태</b></th>
			        <td width="9%" align="center" ><b>당첨번호</b></th>
		            <td width="12%" align="center" ><b>사용기한</b></th>
					<td width="9%" align="center" ><b>관리</b></th>
				</tr>
			</thead>
			<?php if(empty($__Context->winner_comment)){ ?><tbody>
				<tr>
					<td colspan="6" height="40" align="center">
	           			<?php if($__Context->pointrush->rush_status == "OPEN"){ ?>
							<font style="font-size: 11pt" color="#CC3300" face="돋움"><p style="padding:20px 0px 20px 0px; text-align:center;background:#fafafa;">아직 당첨자가 없어요. 지금 바로 도전하세요!</font></p>
						<?php }else{ ?>
							<font style="font-size: 11pt" color="#CC3300" face="돋움"><p style="padding:20px 0px 20px 0px; text-align:center;background:#fafafa;">당첨자가 없습니다. 다음 기회에 다시 도전하세요!</font></p>
						<?php } ?>
		            </td>
		        </tr>
			</tbody><?php } ?>
			<?php if(!empty($__Context->winner_comment)){ ?><tbody>
				<?php if($__Context->winner_comment&&count($__Context->winner_comment))foreach($__Context->winner_comment as $__Context->key=>$__Context->winner_comment){ ?><tr class="<?php echo ($__Context->idx++%2)?'odd':'even' ?>" id="winner_comment_<?php echo $__Context->winner_comment->winner_comment_srl ?>">
				    <td class="i_txt" style="padding-left:4px;" align="left" height="30">
					    <?php if($__Context->winner_comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->winner_comment->member_srl ?>" onclick="return false"><?php echo $__Context->winner_comment->nick_name ?></a><?php } ?>
		            </td>
		            <td class="i_txt" align="center">
			            <?php echo zdate($__Context->winner_comment->regdate,'Y-m-d') ?>
				    </td>
					<td class="i_txt" style="padding-left:4px;" align="left">
						<?php echo $__Context->winner_comment->content ?>	            		            	
		            </td>
				    <td class="i_txt" align="center">
						<font color="#FF6666"><?php echo Context::getLang($__Context->winner_comment->status) ?></font>
					</td>
				    <td class="i_txt" align="center">
						<?php if($__Context->grant->manager || ($__Context->winner_comment->member_srl == $__Context->logged_info->member_srl)){ ?><span><font color="#FF9900"><?php echo Context::getLang($__Context->winner_comment->winner_comment_srl) ?></font></span><?php };
if(!$__Context->grant->manager && ($__Context->winner_comment->member_srl != $__Context->logged_info->member_srl)){ ?><span>*****</span><?php } ?>
					</td>
			        <td class="i_txt" align="center">
<font style="font-size: 9pt" color="#006600" face="돋움">
<?php if ($__Context->pointrush->rush_direct =='DIRECT'){ ?>
	<?php $__Context->temp=$__Context->winner_comment->regdate ?>
	<?php $__Context->limitdate=$__Context->pointrush->limit_date ?>
<?php }else{ ?>
	<?php $__Context->temp=$__Context->pointrush->end_date ?>
	<?php $__Context->limitdate=$__Context->pointrush->limit_date ?>
<?php } ?>
<?php
$now_date = date("YmdHis"); 
$imsi =Context::get('temp');
$limitdate =Context::get('limitdate');
$ty=substr($imsi,0,4);
$tm=substr($imsi,4,2);
$td=substr($imsi,6,2);
$edate = date("Y-m-d", mktime(0,0,0, $tm, $td+$limitdate+1, $ty));
echo "$edate";
?>
</font>
					</td>
					<td class="i_txt" align="center">
						<?php if ($__Context->grant->manager){ ?>
							<?php if($__Context->winner_comment->member_srl){ ?><a href="<?php echo getUrl('act','dispPointrushWinnerCommentManage','winner_comment_srl',$__Context->winner_comment->winner_comment_srl) ?>" class="delete"><font color="#0066FF">당첨 관리</font></a><?php } ?>
						<?php }else{ ?>
							&nbsp;
						<?php } ?>
					</td>
				</tr><?php } ?>
			</tbody><?php } ?>
		</table>
	</div>
</div>
<script>       
function disablechk(){
	if (winner_comment.style.display==""){
		winner_comment.style.display="none";  
	}else{
		winner_comment.style.display="";   
    }
}
</script>
<!-- /winner comment -->