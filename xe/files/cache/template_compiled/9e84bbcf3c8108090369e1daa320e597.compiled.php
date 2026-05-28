<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<h3 class="xeAdmin"><?php echo ($__Context->icon_data->icon_srl)?$__Context->lang->iconModify :$__Context->lang->iconInsert ?> </h3>
<form id="fo_insert" action="./" method="post" enctype="multipart/form-data" target="hidden_iframe"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="iconshop" />
<input type="hidden" name="act" value="procIconshopAdminIconInsert" />
<?php if($__Context->icon_data->icon_srl){ ?><input type="hidden" name="icon_srl" value="<?php echo $__Context->icon_data->icon_srl ?>" /><?php } ?>
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_title ?></div></th>
        <td>
            <input type="text" name="title" value="<?php echo $__Context->icon_data->title ?>" class="inputTypeText w200" />
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_total_count ?></div></th>
        <td>
            <input type="text" name="total_count" value="<?php echo $__Context->icon_data->total_count ?>" class="inputTypeText w80" />
            <p><?php echo $__Context->lang->total_count_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_price ?></div></th>
        <td>
            <input type="text" name="price" value="<?php echo $__Context->icon_data->price ?>" class="inputTypeText w80" />
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->buy_limit ?></div></th>
        <td>
            <select name="buy_limit">
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->buy_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
            <p><?php echo $__Context->lang->buy_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->send_limit ?></div></th>
        <td>
            <select name="send_limit">
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->send_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
            <p><?php echo $__Context->lang->send_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->sell_limit ?></div></th>
        <td>
            <select name="sell_limit">
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->sell_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
            <p><?php echo $__Context->lang->sell_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->point_limit ?></div></th>
        <td>
            <select name="point_limit">
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->point_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
            <p><?php echo $__Context->lang->point_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->minute_limit ?></div></th>
        <td>
            <select name="minute_limit">
            <?php if($__Context->lang->iconshop_checked_list2&&count($__Context->lang->iconshop_checked_list2))foreach($__Context->lang->iconshop_checked_list2 as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->minute_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
            <input type="text" name="minute" value="<?php echo $__Context->icon_data->minute ?>" class="inputTypeText w80" /><?php echo $__Context->lang->unit_min ?>
            <p><?php echo $__Context->lang->minute_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->event_limit ?></div></th>
        <td>
            <select name="event_limit">
            <?php if($__Context->lang->iconshop_checked_list2&&count($__Context->lang->iconshop_checked_list2))foreach($__Context->lang->iconshop_checked_list2 as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->event_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
                <span>
                    <input type="hidden" name="event_start" value="<?php echo $__Context->icon_data->event_start ?>" />
                    <input type="text" value="<?php echo zdate($__Context->icon_data->event_start,'Y-m-d') ?>" readonly="readonly" class="inputDate inputTypeText" />
                    <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
                </span>
            ~
                <span>
                    <input type="hidden" name="event_end" value="<?php echo $__Context->icon_data->event_end ?>" />
                    <input type="text" value="<?php echo zdate($__Context->icon_data->event_end,'Y-m-d') ?>" readonly="readonly" class="inputDate inputTypeText" />
                    <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
                </span>
            <p><?php echo $__Context->lang->event_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->level_limit ?></div></th>
        <td>
            <input type="text" name="level_limit" value="<?php echo $__Context->icon_data->level_limit ?>" class="inputTypeText w80" />
            <p><?php echo $__Context->lang->level_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->group_limit ?></div></th>
        <td>
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <label for="groups_<?php echo $__Context->key ?>"><input type="checkbox" name="group_limit[]" id="groups_<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>" <?php if($__Context->icon_data->group_limit && in_array($__Context->key,$__Context->icon_data->group_limit_list)){ ?>checked="checked"<?php } ?> /><?php echo $__Context->val->title ?></label> 
            <?php } ?>
            <p><?php echo $__Context->lang->group_limit_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->description ?></div></th>
        <td>
            <textarea name="content" class="inputTypeTextArea w400" id="content"><?php echo nl2br($__Context->icon_data->content) ?></textarea>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_file1 ?></div></th>
        <td>
            <input type="file" name="file1" value="" class="inputTypeText w400" />
            <?php if($__Context->icon_data->file1){ ?>
            <p>
                <img src="<?php echo $__Context->icon_data->file1 ?>" title="<?php echo $__Context->icon_data->title ?>" alt="<?php echo $__Context->icon_data->title ?>" />
                <label for="file1_del"><input type="checkbox" name="file1_del" id="file1_del" value="Y" /> <?php echo $__Context->lang->cmd_modify ?></label>
            </p>
            <?php } ?>
            <p><?php echo sprintf($__Context->lang->image_format_about,$__Context->module_config->icon_width,$__Context->module_config->icon_height) ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button strong black"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<iframe name="hidden_iframe" frameborder="0" style="display:none"></iframe>
<script type="text/javascript">
(function($){
    $(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', onSelect:function(){
            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).parent().prevAll('input').val('');
			return false;});
    });
})(jQuery);
</script>
