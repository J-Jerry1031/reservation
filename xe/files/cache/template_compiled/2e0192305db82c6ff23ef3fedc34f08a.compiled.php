<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/iconshop/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/iconshop/tpl/filter','insert_module.xml');$__xmlFilter->compile(); ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->cmd_module_config ?></h3>
<form action="./" method="post" onsubmit="return procFilter(this, insert_module)" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module_srl" value="<?php echo $__Context->iconshop_info->module_srl ?>" />
<input type="hidden" name="mid" value="<?php echo $__Context->iconshop_info->mid ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->module_category ?></div></th>
        <td>
            <select name="module_category_srl">
                <option value="0"><?php echo $__Context->lang->notuse ?></option>
                <?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key => $__Context->val){ ?>
                <option value="<?php echo $__Context->key ?>" <?php if($__Context->iconshop_info->module_category_srl==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
                <?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_module_category ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->browser_title ?></div></th>
        <td>
            <input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->iconshop_info->browser_title) ?>"  class="inputTypeText w200" id="browser_title"/>
            <a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','browser_title') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->layout ?></div></th>
        <td>
            <select name="layout_srl">
            <option value="0"><?php echo $__Context->lang->notuse ?></option>
            <?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val->layout_srl ?>" <?php if($__Context->iconshop_info->layout_srl==$__Context->val->layout_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option>
            <?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_layout ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->skin ?></div></th>
        <td>
            <select name="skin">
                <?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?>
                <option value="<?php echo $__Context->key ?>" <?php if($__Context->iconshop_info->skin==$__Context->key ||(!$__Context->iconshop_info->skin && $__Context->key=='xe_board')){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
                <?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_skin ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->description ?></div></th>
        <td>
            <textarea name="description" class="inputTypeTextArea fullWidth"><?php echo htmlspecialchars($__Context->iconshop_info->description) ?></textarea>
            <p><?php echo $__Context->lang->about_description ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->header_text ?></div></th>
        <td>
            <textarea name="header_text" class="inputTypeTextArea fullWidth" id="header_text"><?php echo htmlspecialchars($__Context->iconshop_info->header_text) ?></textarea>
            <a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','header_text') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
            <p><?php echo $__Context->lang->about_header_text ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->footer_text ?></div></th>
        <td>
            <textarea name="footer_text" class="inputTypeTextArea fullWidth" id="footer_text"><?php echo htmlspecialchars($__Context->iconshop_info->footer_text) ?></textarea>
            <a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','footer_text') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
            <p><?php echo $__Context->lang->about_footer_text ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
