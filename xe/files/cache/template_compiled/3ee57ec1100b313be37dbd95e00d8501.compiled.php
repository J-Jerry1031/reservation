<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/url_link/tpl/popup.js--><?php $__tmp=array('modules/editor/components/url_link/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/url_link/tpl/popup.css--><?php $__tmp=array('modules/editor/components/url_link/tpl/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/editor/components/url_link/lang'); ?>
<div id="popHeadder">
    <h3><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h3>
</div>
<form action="./" method="get" id="fo_component" onSubmit="return false"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <div id="popBody">
        <table cellspacing="0" class="adminTable">
        <col width="100" />
        <col />
        <tr>
            <th scope="row"><?php echo $__Context->lang->urllink_title ?></th>
            <td><input type="text" name="text" class="inputTypeText w400" /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->urllink_url ?></th>
            <td><input type="text" name="url" class="inputTypeText w400" value="<?php echo $__Context->manual_url ?>"/></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->urllink_open_window ?></th>
            <td><input type="checkbox" name="open_window" value="Y" id="editor_open_window" /> <label for="editor_open_window"><?php echo $__Context->lang->about_url_link_open_window ?></label></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->urllink_bold ?></th>
            <td><input type="checkbox" name="bold" value="Y" id="editor_bold" /> <label for="editor_bold"><?php echo $__Context->lang->about_url_link_bold ?></label></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->urllink_color ?></th>
            <td>
                <div class="link_color">
                    <input type="radio" name="color" value="none" id="color_none" />
                    <label for="color_none"><?php echo $__Context->lang->not_exists ?></label>
                </div>
                <div class="link_color">
                    <input type="radio" name="color" value="blue" id="color_blue" />
                    <label for="color_blue" class="editor_blue_text"><?php echo $__Context->lang->urllink_color_blue ?></label>
                </div>
                <div class="link_color">
                    <input type="radio" name="color" value="red" id="color_red" />
                    <label for="color_red" class="editor_red_text"><?php echo $__Context->lang->urllink_color_red ?></label>
                </div>
                <div class="link_color">
                    <input type="radio" name="color" value="yellow" id="color_yellow" />
                    <label for="color_yellow" class="editor_yellow_text"><?php echo $__Context->lang->urllink_color_yellow ?></label>
                </div>
                <div class="link_color">
                    <input type="radio" name="color" value="green" id="color_green" />
                    <label for="color_green" class="editor_green_text"><?php echo $__Context->lang->urllink_color_green ?></label>
                </div>
            </td>
        </tr>
        </table>
    </div>
    <div id="popFooter" class="tCenter">
        <a href="#" onclick="setText()" class="button"><span><?php echo $__Context->lang->cmd_insert ?></span></a>
        <a href="#" onclick="window.close(); return false;" class="button"><span><?php echo $__Context->lang->cmd_close ?></span></a>
        <a href="#" onclick="winopen('./?module=editor&amp;act=dispEditorComponentInfo&amp;component_name=<?php echo $__Context->component_info->component_name ?>','ComponentInfo','left=10,top=10,width=10,height=10,resizable=no,scrollbars=no,toolbars=no');return false;" class="button"><span><?php echo $__Context->lang->about_component ?></span></a>
    </div>
</form>
