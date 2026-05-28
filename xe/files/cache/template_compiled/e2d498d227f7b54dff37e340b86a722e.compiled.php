<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/iconshop/tpl/filter','insert_membericon.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->member_icon_data->icon_srl){ ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->memberIconModify ?> </h3>
<form id="fo_insert" action="./" method="get" onsubmit="return procFilter(this, insert_membericon)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="data_srl" value="<?php echo $__Context->member_icon_data->data_srl ?>" />
    <input type="hidden" name="page" value="<?php echo Context::get('page') ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_srl ?></div></th>
        <td>
            <img src="<?php echo $__Context->icon_data->file1 ?>" title="<?php echo $__Context->icon_data->title ?>" alt="<?php echo $__Context->icon_data->title ?>" />
            <input type="text" name="icon_srl" id="icon_srl" value="<?php echo $__Context->member_icon_data->icon_srl ?>" readonly="readonly" />
            <a href="<?php echo getUrl('module','iconshop','act','dispIconshopAdminIconSearch','target_id','icon_srl') ?>" onclick="popopen(this.href,'iconSearch');return false;" class="button green"><span><?php echo $__Context->lang->cmd_search ?></span></a>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->member_srl ?></div></th>
        <td>
            <input type="text" name="member_srl" id="member_srl" value="<?php echo $__Context->member_icon_data->member_srl ?>" readonly="readonly" />
            <a href="<?php echo getUrl('module','iconshop','act','dispIconshopMemberSearch','target_id','member_srl') ?>" onclick="popopen(this.href,'memberSearch');return false;" class="button green"><span><?php echo $__Context->lang->cmd_search ?></span></a>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->is_selected ?></div></th>
        <td>
            <select name="is_selected">
            <?php if($__Context->lang->iconshop_checked_list2&&count($__Context->lang->iconshop_checked_list2))foreach($__Context->lang->iconshop_checked_list2 as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->member_icon_data->is_selected){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->minute_limit ?></div></th>
        <td>
            <select name="minute_limit">
            <?php if($__Context->lang->iconshop_checked_list2&&count($__Context->lang->iconshop_checked_list2))foreach($__Context->lang->iconshop_checked_list2 as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->member_icon_data->minute_limit){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->end_date ?></div></th>
        <td>
                <input type="hidden" name="end_date1" value="<?php echo zDate($__Context->member_icon_data->end_date,'Ymd') ?>" />
                <input type="text" value="<?php echo zDate($__Context->member_icon_data->end_date,'Y-m-d') ?>" readonly="readonly" class="inputDate inputTypeText w80" />
                <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
                <select name="end_date2">
                    <?php for($__Context->i=0;$__Context->i<=23;$__Context->i++){ ?>
                    <?php  $__Context->i = str_pad($__Context->i, 2, '0', STR_PAD_LEFT);  ?>
                    <option value='<?php echo $__Context->i ?>'<?php if(zDate($__Context->member_icon_data->end_date,'H') ==$__Context->i){ ?> selected="selected"<?php } ?>><?php echo $__Context->i;
echo $__Context->lang->unit_hour ?></option>
                    <?php } ?>
                </select>
                :
                <select name="end_date3">
                    <?php for($__Context->i=0;$__Context->i<=59;$__Context->i++){ ?>
                    <?php  $__Context->i = str_pad($__Context->i, 2, '0', STR_PAD_LEFT);  ?>
                    <option value='<?php echo $__Context->i ?>'<?php if(zDate($__Context->member_icon_data->end_date,'i') ==$__Context->i){ ?> selected="selected"<?php } ?>><?php echo $__Context->i;
echo $__Context->lang->unit_min ?></option>
                    <?php } ?>
                </select>
                :
                <select name="end_date4">
                    <?php for($__Context->i=0;$__Context->i<=59;$__Context->i++){ ?>
                    <?php  $__Context->i = str_pad($__Context->i, 2, '0', STR_PAD_LEFT);  ?>
                    <option value='<?php echo $__Context->i ?>'<?php if(zDate($__Context->member_icon_data->end_date,'H') ==$__Context->i){ ?> selected="selected"<?php } ?>><?php echo $__Context->i;
echo $__Context->lang->unit_sec ?></option>
                    <?php } ?>
                </select>
            <p><?php echo $__Context->lang->end_date_about ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button strong black"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<?php }else{ ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->memberIconInsert ?> </h3>
<form id="fo_insert" action="./" method="get" onsubmit="return procFilter(this, insert_membericon)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="page" value="<?php echo Context::get('page') ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->icon_srl ?></div></th>
        <td>
            <input type="text" name="icon_srl" id="icon_srl" value="" readonly="readonly" />
            <a href="<?php echo getUrl('module','iconshop','act','dispIconshopAdminIconSearch','target_id','icon_srl') ?>" onclick="popopen(this.href,'iconSearch');return false;" class="button green"><span><?php echo $__Context->lang->cmd_search ?></span></a>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->member_srl ?></div></th>
        <td>
            <input type="text" name="member_srl" id="member_srl" value="" readonly="readonly" />
            <a href="<?php echo getUrl('module','iconshop','act','dispIconshopMemberSearch','target_id','member_srl') ?>" onclick="popopen(this.href,'memberSearch');return false;" class="button green"><span><?php echo $__Context->lang->cmd_search ?></span></a>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->is_selected ?></div></th>
        <td>
            <select name="is_selected">
            <?php if($__Context->lang->iconshop_checked_list2&&count($__Context->lang->iconshop_checked_list2))foreach($__Context->lang->iconshop_checked_list2 as $__Context->key=>$__Context->val){ ?>
            <option value="<?php echo $__Context->val ?>" <?php if($__Context->val==$__Context->icon_data->is_selected){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
            <?php } ?>
            </select>
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
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->end_date ?></div></th>
        <td>
                <input type="hidden" name="end_date1" value="" />
                <input type="text" value="" readonly="readonly" class="inputDate inputTypeText w80" />
                <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
                <select name="end_date2">
                    <?php for($__Context->i=0;$__Context->i<=23;$__Context->i++){ ?>
                    <?php  $__Context->i = str_pad($__Context->i, 2, '0', STR_PAD_LEFT);  ?>
                    <option value='<?php echo $__Context->i ?>'><?php echo $__Context->i;
echo $__Context->lang->unit_hour ?></option>
                    <?php } ?>
                </select>
                :
                <select name="end_date3">
                    <?php for($__Context->i=0;$__Context->i<=59;$__Context->i++){ ?>
                    <?php  $__Context->i = str_pad($__Context->i, 2, '0', STR_PAD_LEFT);  ?>
                    <option value='<?php echo $__Context->i ?>'><?php echo $__Context->i;
echo $__Context->lang->unit_min ?></option>
                    <?php } ?>
                </select>
                :
                <select name="end_date4">
                    <?php for($__Context->i=0;$__Context->i<=59;$__Context->i++){ ?>
                    <?php  $__Context->i = str_pad($__Context->i, 2, '0', STR_PAD_LEFT);  ?>
                    <option value='<?php echo $__Context->i ?>'><?php echo $__Context->i;
echo $__Context->lang->unit_sec ?></option>
                    <?php } ?>
                </select>
            <p><?php echo $__Context->lang->end_date_about ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button strong black"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<?php } ?>
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
