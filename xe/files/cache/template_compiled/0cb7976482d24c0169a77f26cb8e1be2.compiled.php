<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/iconshop/tpl/filter','insert_config.xml');$__xmlFilter->compile(); ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->cmd_addition_setup ?></h3>
<form action="./" method="get" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->list_count ?></div></th>
        <td>
            <input type="text" name="list_count" value="<?php echo $__Context->iconshop_config->list_count ?>" class="inputTypeText w60" />
            <p><?php echo $__Context->lang->list_count_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->cols_list_count ?></div></th>
        <td>
            <input type="text" name="cols_list_count" value="<?php echo $__Context->iconshop_config->cols_list_count ?>" class="inputTypeText w60" />
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->member_info_print ?></div></th>
        <td>
            <select name="member_info_print">
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->iconshop_config->member_info_print){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_size ?></div></th>
        <td>
            <?php echo $__Context->lang->icon_max_width ?> : <input type="text" name="icon_width" maxlength="3" value="<?php echo $__Context->iconshop_config->icon_width ?>" class="inputTypeText w80" />px<br />
            <?php echo $__Context->lang->icon_max_height ?> : <input type="text" name="icon_height" maxlength="3" value="<?php echo $__Context->iconshop_config->icon_height ?>" class="inputTypeText w80" />px
            <p><?php echo $__Context->lang->icon_size_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->send_fee ?></div></th>
        <td>
            <input type="text" name="send_fee" value="<?php echo $__Context->iconshop_config->send_fee ?>" maxlength="3" class="inputTypeText w40" />%
            <p><?php echo $__Context->lang->send_fee_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->sell_per ?></div></th>
        <td>
            <input type="text" name="sell_per" value="<?php echo $__Context->iconshop_config->sell_per ?>" maxlength="3" class="inputTypeText w40" />%
            <p><?php echo $__Context->lang->sell_per_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->new_hour ?></div></th>
        <td>
            <input type="text" name="new_hour" value="<?php echo $__Context->iconshop_config->new_hour ?>" class="inputTypeText w40" /><?php echo $__Context->lang->unit_hour ?>
            <p><?php echo $__Context->lang->new_hour_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->member_max_count ?></div></th>
        <td>
            <input type="text" name="member_max_count" value="<?php echo $__Context->iconshop_config->member_max_count ?>" class="inputTypeText w60" />
            <p><?php echo $__Context->lang->member_max_count_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->log_save_day ?></div></th>
        <td>
            <input type="text" name="log_save_day" value="<?php echo $__Context->iconshop_config->log_save_day ?>" class="inputTypeText w60" /><?php echo $__Context->lang->unit_day ?>
            <p><?php echo $__Context->lang->log_save_day_about ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row" rowspan="2"><div><?php echo $__Context->lang->item_delete_event ?></div></th>
        <td>
            <select name="item_delete_event">
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->iconshop_config->item_delete_event){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
            <p><?php echo $__Context->lang->item_delete_event_about ?></p>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $__Context->lang->sender ?> : <input type="text" name="sender_srl" id="sender_srl" value="<?php echo $__Context->iconshop_config->sender_srl ?>" readonly="readonly" />
            <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
            <a href="<?php echo getUrl('module','iconshop','act','dispIconshopMemberSearch','target_id','sender_srl') ?>" onclick="popopen(this.href,'iconSearch');return false;" class="button green"><span><?php echo $__Context->lang->cmd_search ?></span></a><br />
            <?php echo $__Context->lang->sender_config_about ?><br />
            <input type="text" name="item_delete_title" value="<?php echo $__Context->iconshop_config->item_delete_title ?>" class="inputTypeText w300" /><br />
            <textarea name="item_delete_message" class="inputTypeTextArea w300" id="item_delete_message"><?php echo $__Context->iconshop_config->item_delete_message ?></textarea>
            <p><?php echo $__Context->lang->iconshop_replace_about ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button strong black"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<script type="text/javascript">
(function($){
    $(function(){
		$(".dateRemover").click(function() {
			$(this).parent().prevAll('input').val('');
			return false;});
    });
})(jQuery);
</script>