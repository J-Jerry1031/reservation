<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_auction','_header.html') ?>
<?php if($__Context->module_info->dateTimePicker != 'N'){ ?>
	<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
	<!--#JSPLUGIN:ui.datetimepicker--><?php Context::loadJavascriptPlugin('ui.datetimepicker'); ?>
<?php } ?>
<form action="./" method="post" name="writeFrm" class="boardWrite" id="writeFrm" onsubmit=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	
    <div class="exForm">
		<table border="1" cellspacing="0" summary="Extra Form">
			<caption><em>*</em> : <?php echo $__Context->lang->is_required ?></caption>
			<?php if($__Context->module_info->use_category=='Y'){ ?><tr>
			<select name="category_srl">
				<option value=""><?php echo $__Context->lang->category ?></option>
				<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
					<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
					</option><?php } ?>
				</select>
			</tr><?php } ?>
			<tr>
				<th scope="row"><?php echo $__Context->lang->io_product ?><em>*</em></th>
				<td>
					<?php if($__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="text" title="<?php echo $__Context->lang->title ?>" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" /><?php } ?>
					<?php if(!$__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="text" title="<?php echo $__Context->lang->title ?>" /><?php } ?>
					<?php if($__Context->grant->manager){ ?><input type="checkbox" name="is_notice" value="Y" class="iCheck"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" /><?php } ?>
					<?php if($__Context->grant->manager){ ?><label for="is_notice"><?php echo $__Context->lang->notice ?></label><?php } ?>
					<p><?php echo $__Context->lang->about_io_product ?></p>				
				</td>
			</tr>			
			<tr>
				<th scope="row"><?php echo $__Context->lang->io_provider ?><em>*</em></th>
				<td><input type="text" name="extra_vars1" value="<?php echo $__Context->oDocument->getExtraEidValue('provider') ?>" class="text" />
				<p><?php echo $__Context->lang->about_io_provider ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php echo $__Context->lang->io_summary ?><em>*</em></th>
				<td><textarea name="extra_vars2" class="textarea"><?php echo $__Context->oDocument->getExtraEidValue('summary') ?></textarea>
				<p><?php echo $__Context->lang->about_io_summary ?></p>
				</td>
			</tr>
			
			<?php if(!$__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_limit ?><em>*</em></th>
				<td>
				<?php if($__Context->oDocument->getExtraEidValue('limit')){ ?>
				<input type="text" name="extra_vars3" value="<?php echo $__Context->oDocument->getExtraEidValue('limit') ?>" class="w50" maxlength="5" readonly />
				<?php }else{ ?>
				<input type="text" name="extra_vars3" value="<?php echo $__Context->module_info->default_limit ?>" class="w50" maxlength="5" readonly />
				<?php } ?>	
				<p><?php echo $__Context->lang->about_io_limit ?></p>
				</td>
			</tr><?php } ?>
			
			<?php if($__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_limit ?><em>*</em></th>
				<td>
				<?php if($__Context->oDocument->getExtraEidValue('limit')){ ?>
				<input type="text" name="extra_vars3" value="<?php echo $__Context->oDocument->getExtraEidValue('limit') ?>" class="w50" maxlength="5" />
				<?php }else{ ?>
				<input type="text" name="extra_vars3" value="<?php echo $__Context->module_info->default_limit ?>" class="w50" maxlength="5" />
				<?php } ?>				
				<p><?php echo $__Context->lang->about_io_limit ?></p>
				</td>
			</tr><?php } ?>
			<?php if(!$__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_cost ?><em>*</em></th>
				<td>
				<?php if($__Context->oDocument->getExtraEidValue('cost')){ ?>
				<input type="text" name="extra_vars4" value="<?php echo $__Context->oDocument->getExtraEidValue('cost') ?>" class="w50" maxlength="5" readonly />
				<?php }else{ ?>
				<input type="text" name="extra_vars4" value="<?php echo $__Context->module_info->default_cost ?>" class="w50" maxlength="5" readonly />
				<?php } ?>
				<p><?php echo $__Context->lang->about_io_cost ?></p>
				</td>
			</tr><?php } ?>
   
			<?php if($__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_cost ?><em>*</em></th>
				<td>
				<?php if($__Context->oDocument->getExtraEidValue('cost')){ ?>
				<input type="text" name="extra_vars4" value="<?php echo $__Context->oDocument->getExtraEidValue('cost') ?>" class="w50" maxlength="5" />
				<?php }else{ ?>
				<input type="text" name="extra_vars4" value="<?php echo $__Context->module_info->default_cost ?>" class="w50" maxlength="5" />
				<?php } ?>
				<p><?php echo $__Context->lang->about_io_cost ?></p>
				</td>
			</tr><?php } ?>
   
   
		    <?php if(!$__Context->grant->manager){ ?><tr>
		        <th scope="row"><?php echo $__Context->lang->io_open_datetime ?><em>*</em></th>
		        <td> <?php echo $__Context->oDocument->getExtraEidValue('open_datetime') ?>
		        	<input type="hidden" name="extra_vars5" id="extra_vars5" value="<?php echo $__Context->oDocument->getExtraEidValue('open_datetime') ?>" />
		        	<?php if($__Context->oDocument->getExtraEidValue('open_datetime')){ ?>
		        	<input type="text" name="io_vars5" id="io_vars5" value="<?php echo zdate($__Context->oDocument->getExtraEidValue('open_datetime'),'Y-m-d H:i',false) ?>" class="w120" readonly="readonly"/>
		        	<?php }else{ ?>
		        	<?php 	$__Context->vTime = time();
		        		$__Context->vHour = '00';
		        		$__Context->vDate = '2';		        		
		        		if($__Context->module_info->open_hour) $__Context->vHour = $__Context->module_info->open_hour;
		        		if($__Context->module_info->review_date) $__Context->vDate = $__Context->module_info->review_date;		        		
						$__Context->openDateTime = date("Y-m-d ".$__Context->vHour.":00",strtotime("+".$__Context->vDate." day", $__Context->vTime));
					 ?>
		        	<input type="text" name="io_vars5" id="io_vars5" value="<?php echo $__Context->openDateTime ?>" class="w120" readonly="readonly"/>
		        	<?php } ?>
		        	<input type=button value="10" onclick="set_hour(10,'io_vars5')">
		        	<input type=button value="12" onclick="set_hour(12,'io_vars5')">
		        	<input type=button value="13" onclick="set_hour(13,'io_vars5')">
		        	<input type=button value="14" onclick="set_hour(14,'io_vars5')">
		        	<input type=button value="15" onclick="set_hour(15,'io_vars5')">
		        	<input type=button value="16" onclick="set_hour(16,'io_vars5')">
		        	<input type=button value="17" onclick="set_hour(17,'io_vars5')">
		        	<input type=button value="18" onclick="set_hour(18,'io_vars5')">
		        	<input type=button value="19" onclick="set_hour(19,'io_vars5')">
		        	<input type=button value="20" onclick="set_hour(20,'io_vars5')">
				<p><?php echo $__Context->lang->about_io_open_datetime ?></p>
				</td>
		    </tr><?php } ?>
		    
		    <?php if($__Context->grant->manager){ ?><tr>
		    <?php if($__Context->module_info->dateTimePicker != 'N'){ ?>
		        <th scope="row"><?php echo $__Context->lang->io_open_datetime ?><em>*</em></th>
		        <td> 
		        <input type="hidden" name="extra_vars5" value="<?php echo $__Context->oDocument->getExtraEidValue('open_datetime') ?>" />
		        <input type="text" id="date_extra_vars5" value="<?php echo zdate($__Context->oDocument->getExtraEidValue('open_datetime'),'Y-m-d H:i',false) ?>" class="w120" readonly="readonly"/>
				<script type="text/javascript">
						(function($){
								$(function(){
								var option = { showOn: "button", dateFormat: 'yy-mm-dd', timeFormat: 'hh:mm', stepHour: 1, stepMinute: 1, hourGrid:4, minuteGrid: 10, hourMin: 1, hourMax: 23,  onSelect:function(){
									var nDate = this.value.replace(/-/g,"");
									nDate = nDate.replace(/ /g,"");
									nDate = nDate.replace(/:/g,"");			
									$(this).prev('input[type="hidden"]').val(nDate)}
						        };		
								$('#date_extra_vars5').datetimepicker(option);
								})
						})(jQuery);
				</script>
				<p><?php echo $__Context->lang->about_io_open_datetime_admin ?></p>
				</td>				
			<?php }else{ ?>
		        <th scope="row"><?php echo $__Context->lang->io_open_datetime ?><em>*</em></th>
		        <td> 
		        <input type="text" name="extra_vars5" value="<?php echo $__Context->oDocument->getExtraEidValue('open_datetime') ?>" class="w120"/>
				<p><?php echo $__Context->lang->about_io_open_datetime_admin2 ?></p>
				</td>			
			<?php } ?>
		    </tr><?php } ?>
		    
			<?php if(!$__Context->grant->manager){ ?><tr>			
		        <th scope="row"><?php echo $__Context->lang->io_close_datetime ?><em>*</em></th> 
		        <td><?php echo $__Context->oDocument->getExtraEidValue('close_datetime') ?>
		        	<input type="hidden" name="extra_vars6" id="extra_vars6" value="<?php echo $__Context->oDocument->getExtraEidValue('close_datetime') ?>" />
		        	<?php if($__Context->oDocument->getExtraEidValue('close_datetime')){ ?>
		        	<input type="text" name="io_vars6" id="io_vars6" value="<?php echo zdate($__Context->oDocument->getExtraEidValue('close_datetime'),'Y-m-d H:i',false) ?>" class="w120" readonly="readonly"/>
		        	<?php }else{ ?>
		        	<?php 	$__Context->vTime = time();
		        		$__Context->vHour = '00';
		        		$__Context->vDate = '2';
		        		$__Context->vADate = "9";
		        		if($__Context->module_info->close_hour) $__Context->vHour = $__Context->module_info->close_hour;
		        		if($__Context->module_info->review_date) $__Context->vDate = $__Context->module_info->review_date;
						if($__Context->module_info->auction_period) $__Context->vADate = $__Context->module_info->auction_period;						
						$__Context->vDate = $__Context->vADate + $__Context->vDate; 
						
						$__Context->closeDateTime = date("Y-m-d ".$__Context->vHour.":00",strtotime("+".$__Context->vDate." day", $__Context->vTime));
					 ?>
		        	<input type="text" name="io_vars6" id="io_vars6" value="<?php echo $__Context->closeDateTime ?>" class="w120" readonly="readonly"/>
		        	<?php } ?>
		        	
		        	<input type=button value="10" onclick="set_hour(10,'io_vars6')">
		        	<input type=button value="12" onclick="set_hour(12,'io_vars6')">
		        	<input type=button value="13" onclick="set_hour(13,'io_vars6')">
		        	<input type=button value="14" onclick="set_hour(14,'io_vars6')">
		        	<input type=button value="15" onclick="set_hour(15,'io_vars6')">
		        	<input type=button value="16" onclick="set_hour(16,'io_vars6')">
		        	<input type=button value="17" onclick="set_hour(17,'io_vars6')">
		        	<input type=button value="18" onclick="set_hour(18,'io_vars6')">
		        	<input type=button value="19" onclick="set_hour(19,'io_vars6')">
		        	<input type=button value="20" onclick="set_hour(20,'io_vars6')">
				<p><?php echo $__Context->lang->about_io_close_datetime ?></p>
				</td>
		    </tr><?php } ?>
		    
			<?php if($__Context->grant->manager){ ?><tr>
			 <?php if($__Context->module_info->dateTimePicker != 'N'){ ?>
		        <th scope="row"><?php echo $__Context->lang->io_close_datetime ?><em>*</em></th> 
		        <td>
		        <input type="hidden" name="extra_vars6" value="<?php echo $__Context->oDocument->getExtraEidValue('close_datetime') ?>" />
		        <input type="text" id="date_extra_vars6" value="<?php echo zdate($__Context->oDocument->getExtraEidValue('close_datetime'),'Y-m-d H:i',false) ?>" class="w120" readonly="readonly"/>
				<script type="text/javascript">
						(function($){
								$(function(){
								var option = { showOn: "button", dateFormat: 'yy-mm-dd', timeFormat: 'hh:mm', stepHour: 1, stepMinute: 1, hourGrid:4, minuteGrid: 10, hourMin: 1, hourMax: 23,  onSelect:function(){
									var nDate = this.value.replace(/-/g,"");
									nDate = nDate.replace(/ /g,"");
									nDate = nDate.replace(/:/g,"");			
									$(this).prev('input[type="hidden"]').val(nDate)}
						        };		
								$('#date_extra_vars6').datetimepicker(option);
								})
						})(jQuery);
				</script>
				<p><?php echo $__Context->lang->about_io_close_datetime_admin ?></p>
				</td>
			<?php }else{ ?>
		        <th scope="row"><?php echo $__Context->lang->io_close_datetime ?><em>*</em></th> 
		        <td>
		        <input type="text" name="extra_vars6" value="<?php echo $__Context->oDocument->getExtraEidValue('close_datetime') ?>" class="w120"/>
				<p><?php echo $__Context->lang->about_io_close_datetime_admin2 ?></p>
				</td>			
			
			<?php } ?>				
		    </tr><?php } ?>
			
			<?php if(!$__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_status ?></th>
				<td>
	         	<?php if($__Context->oDocument->getExtraEidValue('status')){ ?>
	         	<input type="hidden" name="extra_vars7" value="<?php echo $__Context->oDocument->getExtraEidValue('status') ?>" />
	        	<?php  		        
		        	if($__Context->oDocument->getExtraEidValue('status') =='REVIEW') $__Context->status = 'auction_REVIEW';
		        	if($__Context->oDocument->getExtraEidValue('status') =='PENDING') $__Context->status = 'auction_PENDING'; 
		        	if($__Context->oDocument->getExtraEidValue('status') =='CANCEL') $__Context->status = 'auction_CANCEL';
		        	if($__Context->oDocument->getExtraEidValue('status') =='OPEN') $__Context->status = 'auction_OPEN';
		        	if($__Context->oDocument->getExtraEidValue('status') =='CLOSE') $__Context->status = 'auction_CLOSE';
		        	if($__Context->oDocument->getExtraEidValue('status') =='FAILURE') $__Context->status = 'auction_FAILURE';		        	
				 ?> 
		        <?php echo Context::getLang($__Context->status) ?>	         	
	            <?php }else{ ?>
	            <input type="hidden" name="extra_vars7" value="<?php echo $__Context->module_info->write_acution_status ?>" />
	        	<?php  		        
		        	if($__Context->module_info->write_acution_status =='REVIEW') $__Context->status = 'write_auction_REVIEW';
		        	if($__Context->module_info->write_acution_status =='OPEN') $__Context->status = 'write_auction_OPEN';
				 ?>
		        <?php echo Context::getLang($__Context->status) ?>
	            <?php } ?>
				</td>
			</tr><?php } ?>
			<?php if($__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_status ?></th>
				<td>
	         	<?php if($__Context->oDocument->getExtraEidValue('status')){ ?>
        		<select name="extra_vars7" class="select">
	            <?php if($__Context->lang->io_status_array&&count($__Context->lang->io_status_array))foreach($__Context->lang->io_status_array as $__Context->key => $__Context->val){ ?>
	                <option value="<?php echo $__Context->key ?>" <?php if($__Context->key == $__Context->oDocument->getExtraEidValue('status')){ ?>selected<?php } ?> ><?php echo $__Context->val ?></option>
	            <?php } ?>
	            </select>
	            <?php }else{ ?>
        		<select name="extra_vars7" class="select">
	            <?php if($__Context->lang->io_status_array&&count($__Context->lang->io_status_array))foreach($__Context->lang->io_status_array as $__Context->key => $__Context->val){ ?>
	                <option value="<?php echo $__Context->key ?>" <?php if($__Context->key == $__Context->module_info->write_acution_status ){ ?>selected<?php } ?> ><?php echo $__Context->val ?></option>
	            <?php } ?>
	            </select>
	            <?php } ?>
				</td>
			</tr><?php } ?>
			
			<?php if($__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_tender_count ?></th>
				<td> <input type="text" name="extra_vars8" value="<?php echo $__Context->oDocument->getExtraEidValue('tender_count') ?>" class="text" /></td>
			</tr><?php } ?>
			<?php if($__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_winner ?></th>
				<td> <input type="text" name="extra_vars9" value="<?php echo $__Context->oDocument->getExtraEidValue('winner') ?>" class="text" /></td>
			</tr><?php } ?>
			<?php if($__Context->grant->manager){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->io_winner_number ?></th>
				<td> <input type="text" name="extra_vars10" value="<?php echo $__Context->oDocument->getExtraEidValue('winner_number') ?>" class="text" /></td>
			</tr><?php } ?>
			</table>
			<div style="text-align:center;">
			<p>
				<strong class="fc_ff6600"><?php echo $__Context->lang->about_auction_start_info ?></strong>
			</p>
			</div>
	</div>
    <div class="writeEditor">
		<?php echo $__Context->oDocument->getEditor() ?>
	</div>
	<div>
		<p>
			<strong><?php echo $__Context->lang->about_attach_file_prefix ?></strong> : <?php echo $__Context->lang->about_attach_file_tail ?>
		</p>
	</div>
	<div class="writeFooter">
		<div class="wirteOption">
			<?php if($__Context->grant->manager){ ?>
				<input type="checkbox" name="title_bold" id="title_bold" class="iCheck" value="Y"<?php if($__Context->oDocument->get('title_bold')=='Y'){ ?> checked="checked"<?php } ?> />
				<label for="title_bold"><?php echo $__Context->lang->title_bold ?></label>
			<?php } ?>
						
			<?php if($__Context->module_info->secret=='Y'){ ?><input type="checkbox" name="is_secret" class="iCheck" value="Y"<?php if($__Context->oDocument->isSecret()){ ?> checked="checked"<?php } ?> id="is_secret" /><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><label for="is_secret"><?php echo $__Context->lang->secret ?></label><?php } ?>
            <input type="hidden" name="comment_status" value="ALLOW" />
            <input type="hidden" name="allow_trackback"  value="N"  />
            <input type="hidden" name="notify_message" value="N" />
            
			<?php if(is_array($__Context->status_list)){ ?>
				<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
				<input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>" <?php if($__Context->oDocument->get('status') == $__Context->key || ($__Context->key == 'PUBLIC' && !$__Context->document_srl)){ ?>checked="checked"<?php } ?> /> 
				<label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
				<?php } ?>
			<?php } ?>
		</div>
		<div class="write_author">
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userName" class="iLabel"><?php echo $__Context->lang->writer ?></label>
				<input type="text" name="nick_name" id="userName" class="iText userName" style="width:80px" value="<?php echo htmlspecialchars($__Context->oDocument->get('nick_name')) ?>" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userPw" class="iLabel"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="userPw" class="iText userPw" style="width:80px" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="homePage" class="iLabel"><?php echo $__Context->lang->homepage ?></label>
				<input type="text" name="homepage" id="homePage" class="iText homePage"  style="width:140px"value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" />
			</span><?php } ?>
			<span class="item">
				<label for="tags" class="iLabel"><?php echo $__Context->lang->tag ?>: <?php echo $__Context->lang->about_tag ?></label>
				<input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="iText" style="width:300px" title="Tag" />
			</span>		
		</div>
		<div class="btnArea">
			<span class="btn25 blue"><a href="javascript:frmSubmit();"  class="bn dark"><?php echo $__Context->lang->cmd_registration ?></a></span>
			<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
			<?php if($__Context->is_logged){ ?><span class="btn25"><button type="button" onclick="doDocumentSave(this);"><?php echo $__Context->lang->cmd_temp_save ?></button></span><?php } ?>
			<?php if($__Context->is_logged){ ?><span class="btn25"><button type="button" onclick="doDocumentLoad(this);"><?php echo $__Context->lang->cmd_load ?></button></span><?php } ?>
			<?php } ?>
		</div>
	</div>
</form>
<script type="text/javascript">
	function replaceAll(str, searchStr, replaceStr) {
		while (str.indexOf(searchStr) != -1) {
			str = str.replace(searchStr, replaceStr);
		}
		return str;
	}
		
	function frmSubmit(){
		var frm = document.getElementById('writeFrm');
		
		<?php if(!$__Context->grant->manager){ ?>
		var openDateTime = document.getElementById("io_vars5").value;
			openDateTime = replaceAll(openDateTime,' ', '');
			openDateTime = replaceAll(openDateTime,':', '');
			openDateTime = replaceAll(openDateTime,'-', '');			
		var closeDateTime = document.getElementById("io_vars6").value;
			closeDateTime = replaceAll(closeDateTime,' ', '');
			closeDateTime = replaceAll(closeDateTime,':', '');
			closeDateTime = replaceAll(closeDateTime,'-', '');
			
		document.getElementById("extra_vars5").value = openDateTime;
		document.getElementById("extra_vars6").value = closeDateTime;
		<?php } ?>
		
		procFilter(frm, insert);
	}
	function set_hour(hour,id){
	    var io = document.getElementById(id);
	    io.value = io.value.substring(0,10) + ' ' + hour + ':00';
	}
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_auction','_footer.html') ?>
