<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/editor/skins/xquared/stylesheets/xq_ui.css--><?php $__tmp=array('modules/editor/skins/xquared/stylesheets/xq_ui.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/xquared/stylesheets/default.css--><?php $__tmp=array('modules/editor/skins/xquared/stylesheets/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="text/javascript">
    var editor_path = "<?php echo $__Context->editor_path ?>";
</script>
<!--#Meta:modules/editor/tpl/js/editor_common.js--><?php $__tmp=array('modules/editor/tpl/js/editor_common.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/xquared/javascripts/module/Full_merged_min.js--><?php $__tmp=array('modules/editor/skins/xquared/javascripts/module/Full_merged_min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/xquared/javascripts/xe_interface.js--><?php $__tmp=array('modules/editor/skins/xquared/javascripts/xe_interface.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- 자동저장용 폼 -->
<?php if($__Context->enable_autosave){ ?>
<input type="hidden" name="_saved_doc_srl" value="<?php echo $__Context->saved_doc->document_srl ?>" />
<input type="hidden" name="_saved_doc_title" value="<?php echo htmlspecialchars($__Context->saved_doc->title) ?>" />
<input type="hidden" name="_saved_doc_content" value="<?php echo htmlspecialchars($__Context->saved_doc->content) ?>" />
<input type="hidden" name="_saved_doc_message" value="<?php echo $__Context->lang->msg_load_saved_doc ?>" />
<?php } ?>
<!-- 에디터 -->
<div class="xeEditor" style="margin-top:5px; margin-bottom:5px;">
        <?php if($__Context->enable_component){ ?>
        <!-- 확장 컴포넌트 출력 -->
        <div class="optionDE">
            <div class="optionE">
                <div class="buttonGroup" id="editor_component_<?php echo $__Context->editor_sequence ?>">
                <?php if($__Context->component_list&&count($__Context->component_list))foreach($__Context->component_list as $__Context->component_name => $__Context->component){ ?>
                    <?php if(substr($__Context->component_name,0,11)!="colorpicker"){ ?>
                        <img src="/xe/modules/editor/components/<?php echo $__Context->component_name ?>/icon.gif" alt="<?php echo $__Context->component->title ?>" title="<?php echo $__Context->component->title ?>" id="component_<?php echo $__Context->editor_sequence ?>_<?php echo $__Context->component_name ?>" onmouseover="eOptionOver(this)" onmouseout="eOptionOut(this)" />
                    <?php } ?>
                <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    <!-- HTML 모드 사용 기능 및 자동저장 메세지 출력용 -->
    <div class="editor_info">
        <div class="editor_autosaved_message" id="editor_autosaved_message_<?php echo $__Context->editor_sequence ?>">&nbsp;</div>
    </div>
    <!-- 에디터 출력 -->
    <textarea id="xqEditor_<?php echo $__Context->editor_sequence ?>"></textarea>
    <textarea id="editor_textarea_<?php echo $__Context->editor_sequence ?>" class="editor_iframe_textarea" style="display:none; height:<?php echo $__Context->editor_height ?>"  rows="10" cols="10"></textarea>
    <!-- 에디터 크기 조절 bar -->
    <div class="textAreaDragIndicator"><div class="textAreaDragIndicatorBar" id="editor_drag_bar_<?php echo $__Context->editor_sequence ?>"></div></div>
<?php if($__Context->allow_fileupload){ ?>
    <!--#Meta:modules/editor/tpl/js/uploader.js--><?php $__tmp=array('modules/editor/tpl/js/uploader.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <!--#Meta:modules/editor/tpl/js/swfupload.js--><?php $__tmp=array('modules/editor/tpl/js/swfupload.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <script type="text/javascript">//<![CDATA[
        editorUploadInit(
            {
                "editorSequence" : <?php echo $__Context->editor_sequence ?>,
                "sessionName" : "<?php echo session_name() ?>",
                "allowedFileSize" : "<?php echo $__Context->file_config->allowed_filesize ?>",
                "allowedFileTypes" : "<?php echo $__Context->file_config->allowed_filetypes ?>",
                "allowedFileTypesDescription" : "<?php echo $__Context->file_config->allowed_filetypes ?>",
                "insertedFiles" : <?php echo (int)$__Context->files_count ?>,
                "replaceButtonID" : "swfUploadButton<?php echo $__Context->editor_sequence ?>",
                "fileListAreaID" : "uploaded_file_list_<?php echo $__Context->editor_sequence ?>",
                "previewAreaID" : "preview_uploaded_<?php echo $__Context->editor_sequence ?>",
                "uploaderStatusID" : "uploader_status_<?php echo $__Context->editor_sequence ?>"
            }
        );
    //]]></script>
    <table cellspacing="0" class="fileAttach">
    <col width="120" />
    <col width="100%" />
    <tr valign="top">
        <td width="120"><div class="preview" id="preview_uploaded_<?php echo $__Context->editor_sequence ?>"><img src="/xe/modules/editor/skins/xquared/images/blank.gif" alt="preview" width="100" height="100" /></div></td>
        <td>
            <!-- 파일 업로드 영역 -->
            <div class="fileListArea">
                <select id="uploaded_file_list_<?php echo $__Context->editor_sequence ?>" multiple="multiple" size="5" class="fileList"></select>
            </div>
            <div class="fileUploadControl">
                <span id="swfUploadButton<?php echo $__Context->editor_sequence ?>" style="display : block; float:left;"><span class="button"><button type="button"><?php echo $__Context->lang->edit->upload_file ?></button></span></span>
                <a href="#" onclick="removeUploadedFile('<?php echo $__Context->editor_sequence ?>');return false;" class="button"><span><?php echo $__Context->lang->edit->delete_selected ?></span></a>
                <a href="#" onclick="insertUploadedFile('<?php echo $__Context->editor_sequence ?>');return false;" class="button"><span><?php echo $__Context->lang->edit->link_file ?></span></a>
            </div>
            <div class="file_attach_info" id="uploader_status_<?php echo $__Context->editor_sequence ?>"><?php echo $__Context->upload_status ?></div>
        </td>
    </tr>
    </table>
<?php } ?>
</div>
<!-- 에디터 활성화 -->
<script type="text/javascript">//<![CDATA[
    var auto_saved_msg = "<?php echo $__Context->lang->msg_auto_saved ?>";
    var xed_<?php echo $__Context->editor_sequence ?>;
    var load_<?php echo $__Context->editor_sequence ?> = function() {
        setEditMode(xed_<?php echo $__Context->editor_sequence ?>, "<?php echo $__Context->editor_height ?>px", <?php echo $__Context->editor_sequence ?>);
    };
	if(document.getElementById("comment_<?php echo $__Context->editor_sequence ?>") == null || document.getElementById("comment_<?php echo $__Context->editor_sequence ?>").style.display != 'none') { 
        xed_<?php echo $__Context->editor_sequence ?> = editorStart_xq(xed_<?php echo $__Context->editor_sequence ?>, document.getElementById("xqEditor_<?php echo $__Context->editor_sequence ?>"), <?php echo $__Context->editor_sequence ?>, "<?php echo $__Context->editor_content_key_name ?>", "<?php echo $__Context->editor_height ?>px", "<?php echo $__Context->editor_primary_key_name ?>");
        xAddEventListener(window, 'load', load_<?php echo $__Context->editor_sequence ?>); 
	}
//]]></script>
