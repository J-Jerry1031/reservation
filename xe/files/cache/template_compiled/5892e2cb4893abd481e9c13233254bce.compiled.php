<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_header.html') ?>
<h3>골드러시 결과 </h3>
<div id="loglist">
	<table width="100%" border="0" cellspacing="0" summary="List of Articles" class="tb_list">
		<caption>List of Articles</caption>
		<colgroup>
			<col width="">
			<col width="">
			<col width="">
			<col width="">
			<col width="">
			<col width="">
		</colgroup>	
		<thead>
			<tr>
	            <th scope="col"><?php echo $__Context->lang->no ?></th>
	            <th scope="col">러시번호</th>
	            <th scope="col">소원글번호</th>
	            <th scope="col">응모자</th>	            
	            <th scope="col">차감포인트</th>
	            <th scope="col">추첨번호</th>
	            <th scope="col">당첨여부</th>
	            <th scope="col">응모일</th>
			</tr>
		</thead>
		<?php if(empty($__Context->pointrush_log_list)){ ?><tbody>
	        <tr>
	            <td colspan="8">
	            	<p style="padding:100px 0px 100px 0px;text-align:center">
	                <?php echo $__Context->lang->no_pointrrush_log ?>
	                </p>
	            </td>
	        </tr>
		</tbody><?php } ?>
		<?php if(!empty($__Context->pointrush_log_list)){ ?><tbody>
			<?php if($__Context->pointrush_log_list&&count($__Context->pointrush_log_list))foreach($__Context->pointrush_log_list as $__Context->no=>$__Context->pointrush_log){ ?><tr class="<?php echo ($__Context->idx++%2)?'odd':'even' ?>">
	            <td class="i_num"><?php echo $__Context->no ?></td>
	            <td class="i_cnt">
	                <b><?php echo $__Context->pointrush_log->pointrush_srl ?></b>
	            </td>
	            <td class="i_cnt">
	                <?php echo $__Context->pointrush_log->winner_comment_srl ?>
	            </td>
	            <td class="i_cnt">
					<?php if($__Context->pointrush_log->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->pointrush_log->member_srl ?>" onclick="return false"><?php echo $__Context->pointrush_log->nick_name ?></a><?php } ?>	            		            	
	            </td>
	            <td class="i_cnt"><?php echo $__Context->pointrush_log->expense_point ?></td>
	            <td class="i_cnt"><?php echo $__Context->pointrush_log->rush_number ?></td>
<?php if($__Context->pointrush_log->rush_direct == 'TERM'){ ?>
				<td class="i_cnt"><span class="btn" onclick="doPointrushWRFlgExecute('<?php echo $__Context->pointrush_log->pointrush_srl ?>');return false;"><?php if($__Context->pointrush_log->is_winner == 'Y'){ ?>당첨<?php }else{ ?>실패<?php } ?></span></td>
<?php }else{ ?>
	            <td class="i_cnt"><sapn<?php if($__Context->pointrush_log->is_winner =='Y'){ ?> class="win"<?php } ?>><?php echo $__Context->pointrush_log->is_winner ?></span></td>
<?php } ?>
	            <td class="i_date"><?php echo zdate($__Context->pointrush_log->regdate,'Y-m-d H:i') ?></td>
			</tr><?php } ?>
		</tbody><?php } ?>
	</table>
</div>
<div class="list_footer">
	<?php if(!empty($__Context->pointrush_log_list)){ ?><div class="pagination">
		<a href="<?php echo getUrl('page','','document_srl',$__Context->pointrush_log->document_srl,'division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl',$__Context->pointrush_log->document_srl,'division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl',$__Context->pointrush_log->document_srl,'division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
	</div><?php } ?>
	<div class="btnArea">
		<a href="<?php echo getUrl('act','dispPointrushContent','document_srl',$__Context->pointrush_log->document_srl) ?>" class="btn">돌아가기</a>
	</div>
</div>
	
<script>
jQuery(function() {	
	jQuery(".tb_list tbody tr").hover(
		function() {
			var $tr = jQuery(this);
			$tr.addClass("over");
		},
		function() {
			var $tr = jQuery(this);		
			$tr.removeClass("over");
		}
	);
});
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_footer.html') ?>