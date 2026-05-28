<?php if(!defined("__XE__"))exit;?><!-- 설명 -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->iconList ?> </h3>
<!-- 검색 -->
<form action="./" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <fieldset>
        <select name="buy_limit">
            <option value="" <?php if(!in_array($__Context->buy_limit,$__Context->lang->iconshop_checked_list)){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->buy_limit ?></option>
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->buy_limit == $__Context->val){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <select name="send_limit">
            <option value="" <?php if(!in_array($__Context->send_limit,$__Context->lang->iconshop_checked_list)){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->send_limit ?></option>
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->send_limit == $__Context->val){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <select name="sell_limit">
            <option value="" <?php if(!in_array($__Context->sell_limit,$__Context->lang->iconshop_checked_list)){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->sell_limit ?></option>
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->sell_limit == $__Context->val){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <select name="event_limit">
            <option value="" <?php if(!in_array($__Context->event_limit,$__Context->lang->iconshop_checked_list)){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->event_limit ?></option>
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->event_limit == $__Context->val){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <select name="minute_limit">
            <option value="" <?php if(!in_array($__Context->minute_limit,$__Context->lang->iconshop_checked_list)){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->minute_limit ?></option>
            <?php if($__Context->lang->iconshop_checked_list&&count($__Context->lang->iconshop_checked_list))foreach($__Context->lang->iconshop_checked_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->minute_limit == $__Context->val){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <select name="search_target">
            <option value=""><?php echo $__Context->lang->search_target ?></option>
            <?php if($__Context->lang->iconshop_search_target&&count($__Context->lang->iconshop_search_target))foreach($__Context->lang->iconshop_search_target as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','module',$__Context->module,'act',$__Context->act) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
<!-- 목록 -->
<form method="get" action="./" id="icon_fo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" class="rowTable">
    <caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
    <thead>
        <tr>
            <th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
            <th scope="col"><div><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;"/></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->icon_file1 ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->icon_title ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->icon_total_count ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->icon_price ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->buy_limit ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->send_limit ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->sell_limit ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->event_limit ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->minute_limit ?></div></th>
            <th scope="col"><div>&nbsp;</div></th>
        </tr>
    </thead>
    <tbody>
        <?php if($__Context->icon_list&&count($__Context->icon_list))foreach($__Context->icon_list as $__Context->no => $__Context->val){ ?>
        <?php if($__Context->val->group_limit){;
$__Context->val->group_limit = implode(', ', $__Context->val->group_limit);
} ?>
        <tr class="row<?php echo $__Context->cycle_idx ?>">
            <td><?php echo $__Context->val->icon_srl ?></td>
            <td><input type="checkbox" name="cart" value="<?php echo $__Context->val->icon_srl ?>"/></td>
            <td><img src="<?php echo $__Context->val->file1 ?>" alt="<?php echo htmlspecialchars($__Context->val->title) ?>" title="<?php echo htmlspecialchars($__Context->val->title) ?>" /></td>
            <td><a href="<?php echo getUrl('act','dispIconshopAdminIconInsert','icon_srl',$__Context->val->icon_srl) ?>"><?php echo htmlspecialchars($__Context->val->title) ?></a></td>
            <td><?php if($__Context->val->total_count == -1){;
echo $__Context->lang->count_infinite;
}else{;
echo number_format($__Context->val->total_count);
echo $__Context->lang->unit_count;
} ?></td>
            <td><?php echo number_format($__Context->val->price) ?></td>
            <td><?php echo $__Context->val->buy_limit ?></td>
            <td><?php echo $__Context->val->send_limit ?></td>
            <td><?php echo $__Context->val->sell_limit ?></td>
            <td><?php echo $__Context->val->event_limit;
if($__Context->val->event_limit == "Y"){ ?>&nbsp;<img src="/xe/modules/iconshop/common/js/plugins/ui.tree/images/iconAdd.gif" alt="more" title="more" style="cursor:pointer;" onclick="alert('<?php if($__Context->val->event_start){;
echo zdate($__Context->val->event_start,'Y-m-d') ?> <?php } ?>~<?php if($__Context->val->event_end){ ?> <?php echo zdate($__Context->val->event_end,'Y-m-d');
} ?>');"><?php } ?></td>
            <td><?php echo $__Context->val->minute_limit;
if($__Context->val->minute_limit == "Y"){ ?>&nbsp;<img src="/xe/modules/iconshop/common/js/plugins/ui.tree/images/iconAdd.gif" alt="more" title="more" style="cursor:pointer;" onclick="alert('<?php echo $__Context->val->minute;
echo $__Context->lang->unit_min ?>');"><?php } ?></td>
            <td>
                <a href="<?php echo getUrl('act','dispIconshopAdminIconInsert','icon_srl',$__Context->val->icon_srl) ?>" title="<?php echo $__Context->lang->cmd_modify ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_modify ?></span></a>
                <a href="<?php echo getUrl('act','dispIconshopAdminMemberIconList','search_target','s_icon_srl','search_keyword',$__Context->val->icon_srl) ?>" title="<?php echo $__Context->lang->iconTrace ?>" class="buttonSet buttonLeft"><span><?php echo $__Context->lang->iconTrace ?></span></a>
                <a href="<?php echo getUrl('act','dispIconshopAdminLogList','search_target','s_icon_srl','search_keyword',$__Context->val->icon_srl) ?>" title="<?php echo $__Context->lang->logTrace ?>" class="buttonSet buttonRight"><span><?php echo $__Context->lang->logTrace ?></span></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    <!-- 버튼 -->
    <div class="clear">
        <div class="fl">
            <a href="#" onclick="doDeleteIcons(); return false;" class="button red"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
        </div>
        <div class="fr">
            <a href="<?php echo getUrl('act','dispIconshopAdminIconInsert','icon_srl','') ?>" class="button black strong"><span><?php echo $__Context->lang->iconInsert ?></span></a>
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
    var null_message = "<?php echo $__Context->lang->msg_cart_is_null ?>";
    var delete_message = "<?php echo $__Context->lang->confirm_delete ?>";
</script>