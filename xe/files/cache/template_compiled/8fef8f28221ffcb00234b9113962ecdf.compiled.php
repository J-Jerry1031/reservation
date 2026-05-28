<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/editor/skins/simple_editor/css/default.css--><?php $__tmp=array('modules/editor/skins/simple_editor/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/js/editor_common.js--><?php $__tmp=array('modules/editor/tpl/js/editor_common.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->colorset == "black" || $__Context->colorset == "black_texteditor" || $__Context->colorset == "black_text_nohtml" || $__Context->colorset == "black_text_usehtml"){ ?>
    <!--#Meta:modules/editor/skins/simple_editor/css/black.css--><?php $__tmp=array('modules/editor/skins/simple_editor/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <?php  $__Context->editor_class = "black"  ?>
<?php } ?>
<?php if($__Context->colorset == "white_texteditor" || $__Context->colorset == "black_texteditor" || $__Context->colorset == "white_text_nohtml" || $__Context->colorset == "black_text_nohtml" || $__Context->colorset == "white_text_usehtml" || $__Context->colorset == "black_text_usehtml"){ ?>
    <!--#Meta:modules/editor/skins/simple_editor/js/xe_textarea.js--><?php $__tmp=array('modules/editor/skins/simple_editor/js/xe_textarea.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <div class="xeTextEditor <?php echo $__Context->editor_class ?>">
        <input type="hidden" id="htm_<?php echo $__Context->editor_sequence ?>" value="<?php if($__Context->colorset == "white_text_nohtml" || $__Context->colorset == "black_text_nohtml"){ ?>n<?php };
if($__Context->colorset == "white_texteditor" || $__Context->colorset == "white_texteditor"){ ?>br<?php } ?>" />
        <textarea id="editor_<?php echo $__Context->editor_sequence ?>" style="height:<?php echo $__Context->editor_height ?>px;" cols="50" rows="5" class="inputTextarea"></textarea>
    </div>
    <script type="text/javascript">//<![CDATA[
        editorStartTextarea(<?php echo $__Context->editor_sequence ?>, "<?php echo $__Context->editor_content_key_name ?>", "<?php echo $__Context->editor_primary_key_name ?>");
    //]]></script>
<?php }else{ ?>
    
    <!--#Meta:modules/editor/skins/simple_editor/js/Xpress_Editor.js--><?php $__tmp=array('modules/editor/skins/simple_editor/js/Xpress_Editor.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <!--#Meta:modules/editor/skins/simple_editor/js/xe_interface.js--><?php $__tmp=array('modules/editor/skins/simple_editor/js/xe_interface.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <!-- 자동저장용 폼 -->
    <?php if($__Context->enable_autosave){ ?>
    <input type="hidden" name="_saved_doc_title" value="<?php echo htmlspecialchars($__Context->saved_doc->title) ?>" />
    <input type="hidden" name="_saved_doc_content" value="<?php echo htmlspecialchars($__Context->saved_doc->content) ?>" />
    <input type="hidden" name="_saved_doc_message" value="<?php echo $__Context->lang->msg_load_saved_doc ?>" />
    <?php } ?>
    <!-- 에디터 -->
    <div class="xpress-editor <?php echo $__Context->editor_class ?>">
        <div id="smart_content"> <a href="#xe-editor-container-<?php echo $__Context->editor_sequence ?>" class="skip">&raquo; <?php echo $__Context->lang->edit->jumptoedit ?></a>
        <?php if($__Context->enable_default_component||$__Context->enable_component||$__Context->html_mode){ ?>
        <!-- 편집 컴포넌트 -->
        <div class="tool off">
            <?php if($__Context->enable_default_component){ ?>
            <!-- 기본 컴포넌트 출력 -->
            <ul class="style">
                <li class="bold xpress_xeditor_ui_bold">
                    <button type="button" title="Ctrl+B:<?php echo $__Context->lang->edit->help_bold ?>"><span><?php echo $__Context->lang->edit->bold ?></span></button>
                </li>
                <li class="underline xpress_xeditor_ui_underline">
                    <button type="button" title="Ctrl+U:<?php echo $__Context->lang->edit->help_underline ?>"><span><?php echo $__Context->lang->edit->underline ?></span></button>
                </li>
                <li class="italic xpress_xeditor_ui_italic">
                    <button type="button" title="Ctrl+I:<?php echo $__Context->lang->edit->help_italic ?>"><span><?php echo $__Context->lang->edit->italic ?></span></button>
                </li>
                <li class="del xpress_xeditor_ui_lineThrough">
                    <button type="button" title="Ctrl+D:<?php echo $__Context->lang->edit->help_strike ?>"><span><?php echo $__Context->lang->edit->strike ?></span></button>
                </li>
            </ul>
            <ul class="paragraph">
                <li class="left xpress_xeditor_ui_justifyleft">
                    <button type="button" title="<?php echo $__Context->lang->edit->help_align_left ?>"><span><?php echo $__Context->lang->edit->align_left ?></span></button>
                </li>
                <li class="center xpress_xeditor_ui_justifycenter">
                    <button type="button" title="<?php echo $__Context->lang->edit->help_align_center ?>"><span><?php echo $__Context->lang->edit->align_center ?></span></button>
                </li>
                <li class="right xpress_xeditor_ui_justifyright">
                    <button type="button" title="<?php echo $__Context->lang->edit->help_align_right ?>"><span><?php echo $__Context->lang->edit->align_right ?></span></button>
                </li>
                <li class="justify xpress_xeditor_ui_justifyfull">
                    <button type="button" title="<?php echo $__Context->lang->edit->help_align_justify ?>"><span><?php echo $__Context->lang->edit->align_justify ?></span></button>
                </li>
                <li class="ol xpress_xeditor_ui_orderedlist">
                    <button type="button" title="<?php echo $__Context->lang->edit->help_list_number ?>"><span><?php echo $__Context->lang->edit->list_number ?></span></button>
                </li>
                <li class="ul xpress_xeditor_ui_unorderedlist">
                    <button type="button" title="<?php echo $__Context->lang->edit->help_list_bullet ?>"><span><?php echo $__Context->lang->edit->list_bullet ?></span></button>
                </li>
                <li class="outdent xpress_xeditor_ui_outdent">
                    <button type="button" title="Shift+Tab:<?php echo $__Context->lang->edit->help_remove_indent ?>"><span><?php echo $__Context->lang->edit->help_remove_indent ?></span></button>
                </li>
                <li class="indent xpress_xeditor_ui_indent">
                    <button type="button" title="Tab:<?php echo $__Context->lang->edit->help_add_indent ?>"><span><?php echo $__Context->lang->edit->add_indent ?></span></button>
                </li>
            </ul>
            <?php } ?>
            <?php if($__Context->enable_component){ ?>
            <ul class="extra2">
                <!-- 확장 컴포넌트 출력 -->
                <li class="extensions xpress_xeditor_ui_extension">
                    <span class="exButton"><button type="button" title="<?php echo $__Context->lang->edit->extension ?>"><?php echo $__Context->lang->edit->extension ?></button></span>
                    <div class="layer extension2 xpress_xeditor_extension_layer" id="editorExtension_<?php echo $__Context->editor_sequence ?>">
                        <ul id="editor_component_<?php echo $__Context->editor_sequence ?>" class="editorComponent">
                            <?php if($__Context->component_list&&count($__Context->component_list))foreach($__Context->component_list as $__Context->component_name => $__Context->component){ ?>
                                <li><?php if($__Context->component->component_icon){ ?><img src="/xe/modules/editor/components/<?php echo $__Context->component_name ?>/component_icon.gif" alt="" width="13" height="12"/> <?php } ?><a href="#" onclick="return false;" id="component_<?php echo $__Context->editor_sequence ?>_<?php echo $__Context->component_name ?>"><?php echo $__Context->component->title ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <?php } ?>
            <ul class="extra3"<?php if(!$__Context->html_mode){ ?> style="display:none"<?php } ?>>
                
                <li class="html"><span><button class="xpress_xeditor_mode_toggle_button" type="button" title="<?php echo $__Context->lang->edit->html_editor ?>"><?php echo $__Context->lang->edit->html_editor ?></button></span></li>
                
            </ul>
            
        </div>
        <?php }else{ ?>
            <div class="tool off disable"></div>
        <?php } ?>
        <!-- 에디터 출력 -->
        <div id="xe-editor-container-<?php echo $__Context->editor_sequence ?>" class="input_area xpress_xeditor_editing_area_container">
            <textarea id="xpress-editor-<?php echo $__Context->editor_sequence ?>" cols="10" rows="10"></textarea>
        </div>
        <?php if($__Context->enable_autosave){ ?>
        <p class="editor_autosaved_message autosave_message" id="editor_autosaved_message_<?php echo $__Context->editor_sequence ?>">&nbsp;</p>
        <?php } ?>
        <!-- /입력 -->
        <button type="button" class="input_control xpress_xeditor_editingArea_verticalResizer" title="<?php echo $__Context->lang->edit->edit_height_control ?>"><span><?php echo $__Context->lang->edit->edit_height_control ?></span></button>
        </div>
    </div>
    <!-- 에디터 활성화 -->
    <script type="text/javascript">//<![CDATA[
        var editor_path = "<?php echo $__Context->editor_path ?>";
        var auto_saved_msg = "<?php echo $__Context->lang->msg_auto_saved ?>";
        var oEditor = editorStart_xe("<?php echo $__Context->editor_sequence ?>", "<?php echo $__Context->editor_primary_key_name ?>", "<?php echo $__Context->editor_content_key_name ?>", "<?php echo $__Context->editor_height ?>", "<?php echo $__Context->colorset ?>", "<?php echo $__Context->content_style ?>",'<?php echo $__Context->content_font ?>','<?php echo $__Context->content_font_size ?>');
    //]]></script>
<?php } ?>
