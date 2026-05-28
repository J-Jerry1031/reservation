<?php if(!defined("__XE__"))exit;?><!-- 설명 -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->iconshopLogList ?></h3>
<div class="infoText"><?php echo $__Context->lang->log_save_day ?> : <?php echo $__Context->module_config->log_save_day;
echo $__Context->lang->unit_day ?></div>
<!-- 검색 -->
<form action="./" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <fieldset>
        <span>
            <input type="text" name="s_regdate_more" value="<?php echo $__Context->s_regdate_more ?>" readonly="readonly" class="inputDate inputTypeText" />
            <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span> ~
        </span>
        <span>
            <input type="text" name="s_regdate_less" value="<?php echo $__Context->s_regdate_less ?>" readonly="readonly" class="inputDate inputTypeText" />
        <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
        </span>
        <select name="s_category_srl">
            <option value="" <?php if(!in_array($__Context->s_category_srl,$__Context->lang->iconshop_log_act_list)){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->module_action ?></option>
            <?php if($__Context->lang->iconshop_log_act_list&&count($__Context->lang->iconshop_log_act_list))foreach($__Context->lang->iconshop_log_act_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->key ?>" <?php if($__Context->s_category_srl == $__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <select name="search_target">
            <option value=""><?php echo $__Context->lang->search_target ?></option>
            <?php if($__Context->lang->iconshop_search_target3&&count($__Context->lang->iconshop_search_target3))foreach($__Context->lang->iconshop_search_target3 as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','module',$__Context->module,'act',$__Context->act) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
<!-- 목록 -->
<form method="get" action="./" id="log_fo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" class="rowTable">
    <caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
    <thead>
        <tr>
            <th scope="col"><div><?php echo $__Context->lang->data_srl ?></div></th>
            <th scope="col"><div><?php echo $__Context->lang->icon_srl ?></div></th>
            <th scope="col"><div><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;"/></div></th>
            <th scope="col"><div class="tCenter"><?php echo $__Context->lang->content ?></div></th>
            <th scope="col"><div><?php echo $__Context->lang->point ?></div></th>
            <th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
            <th scope="col"><div><?php echo $__Context->lang->ipaddress ?></div></th>
            <th scope="col"><div>-</div></th>
        </tr>
    </thead>
    <tbody>
        <?php if($__Context->log_list&&count($__Context->log_list))foreach($__Context->log_list as $__Context->no => $__Context->val){ ?>
        <?php if($__Context->val->group_limit){;
$__Context->val->group_limit = implode(', ', $__Context->val->group_limit);
} ?>
        <tr class="row<?php echo $__Context->cycle_idx ?>">
            <td><?php echo $__Context->val->data_srl ?></td>
            <td><?php echo $__Context->val->icon_srl ?></td>
            <td><input type="checkbox" name="cart" value="<?php echo $__Context->val->data_srl ?>"/></td>
            <td><?php echo $__Context->val->content ?></td>
            <td><?php echo number_format($__Context->val->point) ?></td>
            <td><?php echo zdate($__Context->val->regdate,'Y-m-d H:i:s') ?></td>
            <td><?php echo $__Context->val->ipaddress ?></td>
            <td><a href="<?php echo getUrl('act','dispIconshopAdminMemberIconList','search_target','s_data_srl','search_keyword',$__Context->val->data_srl) ?>" title="<?php echo $__Context->lang->iconTrace ?>" class="buttonSet buttonLeft"><span><?php echo $__Context->lang->iconTrace ?></span></a></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    <!-- 버튼 -->
    <div class="clear">
        <div class="fl">
            <a href="#" onclick="doDeleteLogs(); return false;" class="button red"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
        </div>
        <div class="fr">
            <a href="#" onclick="doResetLogs(); return false;" class="button black"><span><?php echo $__Context->lang->cmd_reset ?></span></a>
        </div>
    </div>
    <!-- 페이지 네비게이션 -->
    <div class="pagination a1">
        <a href="<?php echo getUrl('page','','module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
        <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
            <?php if($__Context->page == $__Context->page_no){ ?>
                <strong><?php echo $__Context->page_no ?></strong> 
            <?php }else{ ?>
                <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
            <?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
    </div>
</form>
<script type="text/javascript">
(function($){
    $(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', onSelect:function(){
            $(this).val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).parent().prevAll('input').val('');
			return false;});
    });
})(jQuery);
var null_message = "<?php echo $__Context->lang->msg_cart_is_null ?>";
var delete_message = "<?php echo $__Context->lang->confirm_delete ?>";
var reset_message = "<?php echo $__Context->lang->confirm_reset ?>";
</script>