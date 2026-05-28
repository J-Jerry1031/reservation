<?php if(!defined("__XE__"))exit;?><!-- 설명 -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->memberIconList ?> </h3>
<!-- 검색 -->
<form action="./" method="get" class="adminSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <fieldset>
        <select name="search_target">
            <option value=""><?php echo $__Context->lang->search_target ?></option>
            <?php if($__Context->lang->iconshop_search_target2&&count($__Context->lang->iconshop_search_target2))foreach($__Context->lang->iconshop_search_target2 as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','module',$__Context->module,'act',$__Context->act) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
<!-- 목록 -->
<form method="get" action="./" id="member_icon_fo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" class="rowTable">
    <caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
    <thead>
        <tr>
            <th scope="col"><div><?php echo $__Context->lang->data_srl ?></div></th>
            <th scope="col"><div><?php echo $__Context->lang->icon_srl ?></div></th>
            <th scope="col"><div><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;"/></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->nick_name ?> (<?php echo $__Context->lang->user_id ?>)</div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->is_selected ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->minute_limit ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->start_date ?> ~ <?php echo $__Context->lang->end_date ?></div></th>
            <th scope="col" class="quarter_wide"><div><?php echo $__Context->lang->ipaddress ?></div></th>
            <th scope="col"><div>&nbsp;</div></th>
        </tr>
    </thead>
    <tbody>
        <?php if($__Context->icon_list&&count($__Context->icon_list))foreach($__Context->icon_list as $__Context->no => $__Context->val){ ?>
        <tr class="row<?php echo $__Context->cycle_idx ?>">
            <td><?php echo $__Context->val->data_srl ?></td>
            <td><?php echo $__Context->val->icon_srl ?></td>
            <td><input type="checkbox" name="cart" value="<?php echo $__Context->val->data_srl ?>"/></td>
            <td><span class="member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->nick_name ?> (<?php echo $__Context->val->user_id ?>)</span></td>
            <td><?php echo $__Context->val->is_selected ?></td>
            <td><?php echo $__Context->val->minute_limit ?></td>
            <td><?php echo zdate($__Context->val->start_date,'Y-m-d H:i:s') ?> ~ <?php echo zdate($__Context->val->end_date,'Y-m-d H:i:s') ?></td>
            <td><?php echo $__Context->val->ipaddress ?></td>
            <td>
                <a href="<?php echo getUrl('act','dispIconshopAdminMemberIconInsert','data_srl',$__Context->val->data_srl) ?>" title="<?php echo $__Context->lang->cmd_modify ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_modify ?></span></a>
                <a href="<?php echo getUrl('act','dispIconshopAdminLogList','search_target','s_data_srl','search_keyword',$__Context->val->data_srl) ?>" title="<?php echo $__Context->lang->logTrace ?>" class="buttonSet buttonRight"><span><?php echo $__Context->lang->logTrace ?></span></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    <!-- 버튼 -->
    <div class="clear">
        <div class="fl">
            <a href="#" onclick="doDeleteMemberIcons(); return false;" class="button red"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
        </div>
        <div class="fr">
            <a href="<?php echo getUrl('act','dispIconshopAdminMemberIconInsert','data_srl','') ?>" class="button black strong"><span><?php echo $__Context->lang->memberIconInsert ?></span></a>
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