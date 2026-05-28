<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_header.html') ?>
<!--#Meta:modules/pointrush/skins/default/js/jquery.validate.min.js--><?php $__tmp=array('modules/pointrush/skins/default/js/jquery.validate.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/pointrush/skins/default/js/messages_kr.js--><?php $__tmp=array('modules/pointrush/skins/default/js/messages_kr.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="post" id="fo_write" onsubmit="if(before_submit()) return procFilter(this, window.insert); else return false;" class="pointrush_write"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<div class="write_header_wrap">
	<div class="write_header">
		<?php if($__Context->module_info->use_category=='Y'){ ?><select name="category_srl">
			<option value=""><?php echo $__Context->lang->category ?></option>
			<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
				<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
			</option><?php } ?>
		</select><?php } ?>
		TITLE&nbsp;&nbsp;<?php if($__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="iText" title="<?php echo $__Context->lang->title ?>" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" /><?php } ?>
		<?php if(!$__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="iText" title="<?php echo $__Context->lang->title ?>" /><?php } ?>
		<?php if($__Context->grant->manager){ ?><input type="checkbox" name="is_notice" value="Y" class="iCheck"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" /><?php } ?>
		<?php if($__Context->grant->manager){ ?><label for="is_notice"><?php echo $__Context->lang->notice ?></label><?php } ?>
	</div>
	</div>
	
	<div class="exForm">
    <table border="1" cellspacing="0" summary="Extra Form">
    	<caption><em>*</em> : <font style="FONT-SIZE: 9pt" color="#3333FF" face="돋움">필수항목</font></caption>
    	<!-- 참여정보 --->
		<tr>
            <th scope="row"><em>*</em> 진행 상태 </th>
            <td>
				<select name="rush_status" id="rush_status" class="select">
				<?php if($__Context->lang->rush_status_list&&count($__Context->lang->rush_status_list))foreach($__Context->lang->rush_status_list as $__Context->key=>$__Context->type_info){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->pointrush->rush_status == $__Context->key){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->rush_status_list[$__Context->key] ?></option><?php } ?>
				</select>
                <p>진행상태 (OPEN / CLOSE)</p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 당첨 확인 </th>
            <td>
				<select name="rush_direct" id="rush_direct" class="select">
				<?php if($__Context->lang->rush_direct_list&&count($__Context->lang->rush_direct_list))foreach($__Context->lang->rush_direct_list as $__Context->key=>$__Context->type_info){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->pointrush->rush_direct == $__Context->key){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->rush_direct_list[$__Context->key] ?></option><?php } ?>
				</select>
                <p>당첨 확인방법 (즉시 확인 / 발표일 확인)</p>
                <p><font color="#FF6600">* 진행방법을 기간으로 설정하면 하단에 이벤트 종료일을 반드시 입력하세요.</font></p>
            </td>
        </tr>
		<?php  $__Context->use_group =  explode('|@|',$__Context->pointrush->use_group);  ?>
		<?php if($__Context->pointrush->use_group != ''){ ?><tr>
            <th scope="row"><em>*</em> 응모 대상 </th>
            <td>
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl=>$__Context->group_item){ ?><label for="use_group_<?php echo $__Context->group_srl ?>">
					<input type="checkbox" name="use_group[]" value="<?php echo $__Context->group_item->group_srl ?>" id="use_group_<?php echo $__Context->group_srl ?>"<?php if(in_array($__Context->group_item->group_srl,$__Context->use_group)){ ?> checked<?php } ?>/>
					<?php echo $__Context->group_item->title ?>
				</label><?php } ?>
                <p>참여가능 그룹을 지정하세요.</p>
            </td>
        </tr><?php } ?>
        <?php if($__Context->pointrush->use_group == ''){ ?><tr>
            <th scope="row"><em>*</em> 응모 대상 </th>
            <td>
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl=>$__Context->group_item){ ?><label for="use_group_<?php echo $__Context->group_srl ?>">
					<input type="checkbox" name="use_group[]" value="<?php echo $__Context->group_item->group_srl ?>" id="use_group_<?php echo $__Context->group_srl ?>" checked/>
					<?php echo $__Context->group_item->title ?>
				</label><?php } ?>
                <p>참여가능 그룹을 지정하세요.</p>
            </td>
        </tr><?php } ?>
		<tr>
            <th scope="row"><em>*</em> 담청 확률 </th>
            <td>
                <?php if(!$__Context->pointrush){ ?><input type="text" name="num_min" value="1" id="num_min" class="text" style="width:100px" maxlength="15"/><?php } ?>
                <?php if($__Context->pointrush){ ?><input type="text" name="num_min" value="<?php echo $__Context->pointrush->num_min ?>" id="num_min" class="text" style="width:100px" maxlength="15"/><?php } ?>
                &nbsp;/&nbsp;
                <?php if(!$__Context->pointrush){ ?><input type="text" name="num_max" value="1000" id="num_max" class="text" style="width:100px" maxlength="15"/><?php } ?>
                <?php if($__Context->pointrush){ ?><input type="text" name="num_max" value="<?php echo $__Context->pointrush->num_max ?>" id="num_max" class="text" style="width:100px" maxlength="15"/><?php } ?>
                <p>당첨확률을 입력해주세요 (ex: 1/1000 )  </p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 담청자 수 </th>
            <td>
                <?php if(!$__Context->pointrush){ ?><input type="text" name="winner_max" value="1" id="winner_max" class="text"/><?php } ?>
                <?php if($__Context->pointrush){ ?><input type="text" name="winner_max" value="<?php echo $__Context->pointrush->winner_max ?>" id="winner_max" class="text"/><?php } ?>
                <p>당첨자 수를 입력해주세요. ( 지정한 확률로 당첨자 수만큼 당첨자가 나올 때 까지 진행됩니다. )  </p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 차감 포인트 </th>
            <td>
            	<?php if(!$__Context->pointrush){ ?><input type="text" name="rush_point" value="10" id="rush_point" class="text"/><?php } ?>
                <?php if($__Context->pointrush){ ?><input type="text" name="rush_point" value="<?php echo $__Context->pointrush->rush_point ?>" id="rush_point" class="text"/><?php } ?>
                <p>포인트러시 1회 참여시 차감할 포인트를 입력하세요 (ex: 100 )  </p>
            </td>
        </tr>
		<tr>
            <th scope="row">일일 참여제한 </th>
            <td>
                <?php if(!$__Context->pointrush){ ?><input type="text" name="rush_limit_day" value="0" id="rush_point_day" class="text"/><?php } ?>
                <?php if($__Context->pointrush){ ?><input type="text" name="rush_limit_day" value="<?php echo $__Context->pointrush->rush_limit_day ?>" id="rush_point_day" class="text"/><?php } ?>
                <p>하루에 응모할 수 있는 횟수를 제한하려면 입력하세요( 제한없음 : 0 )</p>
            </td>
        </tr>
		<tr>
            <th scope="row">추첨 제한 </th>
            <td>
                <?php if(!$__Context->pointrush){ ?><input type="text" name="rush_limit" value="0" id="rush_point" class="text"/><?php } ?>
                <?php if($__Context->pointrush){ ?><input type="text" name="rush_limit" value="<?php echo $__Context->pointrush->rush_limit ?>" id="rush_point" class="text"/><?php } ?>
                <p>지정한 제한 횟수를 초가했을 때 실제 추첨이 시작 됩니다.( 제한없음 : 0 )</p>
            </td>
        </tr>
		<tr>
            <th scope="row">추첨제한 리셋</th>
            <td>
				<ul>
					<li>
						<input type="radio" name="rush_limit_reset" id="rush_limit_reset_y" value="Y" class="radio"<?php if($__Context->pointrush->rush_limit_reset == 'Y'){ ?> checked="checked"<?php } ?>><label for="rush_limit_reset_y">추첨제한 리셋</label>
					</li>
					<li>
						<input type="radio" name="rush_limit_reset" id="rush_limit_reset_n" value="N" class="radio"<?php if(!$__Context->pointrush || $__Context->pointrush->rush_limit_reset == 'N'){ ?> checked="checked"<?php } ?>><label for="rush_limit_reset_n" >추첨제한 리셋하지 않음</label>
					</li>
				</ul>
                <p>당첨자가 나오면 추첨제한 횟수를 리셋합니다. (추첨제한이 10회일 때 당첨 후 20회 가 넘어야 추첨이 진행됩니다.)</p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 상품 안내 </th>
            <td>
                <input type="text" name="product_title" value="<?php echo $__Context->pointrush->product_title ?>" id="product_title" class="text" style="width:100%" required/>
                <p>제공할 상품명을 입력하세요. </p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 이용 안내 </th>
            <td>
                <input type="text" name="product_info" value="<?php echo $__Context->pointrush->product_info ?>" id="product_info" class="text" style="width:100%" required/>
                <p>이용안내를 입력하세요.  </p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 당첨 안내 </th>
            <td>
                <input type="text" name="product_delivery" value="<?php echo $__Context->pointrush->product_delivery ?>" id="product_delivery" class="text" style="width:100%" required/>
                <p>상품 당첨 안내를 입력하세요. </p>
            </td>
        </tr>
		<tr>
            <th scope="row">홈페이지 </th>
            <td>
                <input type="text" name="product_homepage" value="<?php echo $__Context->pointrush->product_homepage ?>" id="product_homepage" class="text" style="width:100%"/>
                <p>상품관련 홈페이지가 있으면 입력하세요. (ex: http://www.example.com)  </p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 이벤트 시작일</th>
            <td>
				<input type="hidden" name="start_date" id="date_start_date" value="" /><input type="text" placeholder="YYYY-MM-DD" name="birthday_ui" class="start_date" id="start_date" value="" readonly="readonly" /> <input type="button" value="삭제" class="btn dateRemover" />
                <p>이벤트 시작일을 입력하세요.</p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 이벤트 종료일</th>
            <td>
				<input type="hidden" name="end_date" id="date_end_date" value="" /><input type="text" placeholder="YYYY-MM-DD" name="birthday_ui" class="end_date" id="end_date" value="" readonly="readonly" /> <input type="button" value="삭제" class="btn dateRemover" />
                <p>이벤트 종료일을 입력하세요. 상품 소신시 까지 진행할 경우 비워두세요.</p>
                <p><font color="#FF6600">* 상단에 진행방법을 기간으로 설정했으면 이벤트 종료일을 반드시 입력하세요.</font></p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 당첨자 발표일</th>
            <td>
				<input type="hidden" name="issue_date" id="date_issue_date" value="" /><input type="text" placeholder="YYYY-MM-DD" name="birthday_ui" class="issue_date" id="issue_date" value="" readonly="readonly" /> <input type="button" value="삭제" class="btn dateRemover" />
                <p>이벤트 당첨 발표일을 입력하세요.</p>
            </td>
        </tr>
		<tr>
            <th scope="row"><em>*</em> 당첨자 사용기한 </th>
            <td>
                <?php if(!$__Context->pointrush){ ?><input type="text" name="limit_date" style="width:15px" maxlength="2" value="30" id="date_limit_date" class="text"/><?php } ?> 일
                <?php if($__Context->pointrush){ ?><input type="text" name="limit_date" style="width:15px" maxlength="2" value="<?php echo $__Context->pointrush->limit_date ?>" id="limit_date" class="text"/><?php } ?>
                <p>당첨자 사용 기한을 몇일로 입력해주세요. ( 지정된 일자가 당첨자 사용기한으로 명시됩니다 - 기본은 30일 입니다 )  </p>
            </td>
        </tr>
        <!-- 진행정보
		<tr>
            <th scope="row">현재 당첨자 수 </th>
            <td>
                <input type="text" name="winner_count" value="<?php echo $__Context->pointrush->winner_count ?>" id="winner_countx" />
                <p>포인트러시 오픈 후 당첨자 수가 표시됩니다. ( 수정금지 )  </p>
            </td>
        </tr>
		<tr>
            <th scope="row">포인트러시 진행 횟수 </th>
            <td>
                <input type="text" name="rush_count" value="<?php echo $__Context->pointrush->rush_count ?>" id="rush_count" />
                <p>포인트러시 진행 횟수가 표시됩니다. ( 수정금지 )  </p>
            </td>
        </tr>
		<tr>
            <th scope="row">소모 포인트 합계</th>
            <td>
                <input type="text" name="total_point" value="<?php echo $__Context->pointrush->total_point ?>" id="total_point" />
                <p>포인트러시에 소모된 포인트 합계가 표시됩니다. ( 수정금지 )  </p>
            </td>
        </tr>
		--->
    </table>
    </div>
    <!-- pointrush //-->
    <?php if(count($__Context->extra_keys)){ ?><div class="exForm">
		<?php if(count($__Context->extra_keys)){ ?><table border="1" cellspacing="0" summary="Extra Form">
			<caption><em>*</em> : <?php echo $__Context->lang->is_required ?></caption>
			<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){ ?><tr>
				<th scope="row"><?php if($__Context->val->is_required=='Y'){ ?><em>*</em><?php } ?> <?php echo $__Context->val->name ?></th>
				<td><?php echo $__Context->val->getFormHTML() ?></td>
			</tr><?php } ?>
		</table><?php } ?>
	</div><?php } ?>
    <div class="write_editor">
		<?php echo $__Context->oDocument->getEditor() ?>
	</div>
	<div><p style="color:red">첫번째 이미지는 썸네일을 등록하세요. [ 가로:250px, 세로:150px ]</p></div>
	<div class="write_footer">
		<div class="write_option">
<!--
			<?php if($__Context->grant->manager){ ?>
				<input type="checkbox" name="title_bold" id="title_bold" class="iCheck" value="Y"<?php if($__Context->oDocument->get('title_bold')=='Y'){ ?> checked="checked"<?php } ?> />
				<label for="title_bold"><?php echo $__Context->lang->title_bold ?></label>
			<?php } ?>
-->
			<?php if($__Context->module_info->secret=='Y'){ ?><input type="checkbox" name="is_secret" class="iCheck" value="Y"<?php if($__Context->oDocument->isSecret()){ ?> checked="checked"<?php } ?> id="is_secret" /><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><label for="is_secret"><?php echo $__Context->lang->secret ?></label><?php } ?>
            <input type="checkbox" name="comment_status" class="iCheck" value="ALLOW"<?php if($__Context->oDocument->allowComment()){ ?> checked="checked"<?php } ?> id="comment_status" />
            <label for="comment_status"><?php echo $__Context->lang->allow_comment ?></label>
            <input type="checkbox" name="allow_trackback" class="iCheck" value="Y"<?php if($__Context->oDocument->allowTrackback() && $__Context->oDocument->document_srl){ ?> checked="checked"<?php } ?> id="allow_trackback" />
            <label for="allow_trackback"><?php echo $__Context->lang->allow_trackback ?></label>
			<?php if($__Context->is_logged){ ?>
				<input type="checkbox" name="notify_message" class="iCheck" value="Y"<?php if($__Context->oDocument->useNotify()){ ?> checked="checked"<?php } ?> id="notify_message" />
				<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
			<?php } ?>
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
			<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn" />
			<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
			<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentSave(this);"><?php echo $__Context->lang->cmd_temp_save ?></button><?php } ?>
			<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentLoad(this);"><?php echo $__Context->lang->cmd_load ?></button><?php } ?>
			<?php } ?>
			<button type="button" class="btn" onclick="history.back()"><?php echo $__Context->lang->cmd_cancel ?></button>
		</div>
	</div>
</form>
<script>
(function($){
    $(document).ready(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', dateFormat:'yy-mm-dd', onSelect:function(){
            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".start_date").datepicker(option);
        $(".end_date").datepicker(option);
        $(".issue_date").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).prevAll('input').val('');
			return false;
		});
    });
    $('#fo_write').validate({
    });
})(jQuery);
function before_submit()
{
    var result = true;
    if(jQuery('#fo_write').valid())
    {
    }
    else
    {
        jQuery('.error').eq(0).focus();
        return false;
    }
    return result;
}
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pointrush/skins/default','_footer.html') ?>
