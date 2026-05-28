<?php if(!defined("__XE__"))exit;?>
<?php 
include_once('./modules/file/file.class.php');
include_once('./modules/file/file.controller.php');
$__Context->oFileController = &getController('file');
$__Context->editor_sequence = '1';
$__Context->upload_target_srl = $__Context->document_srl;
$__Context->oFileController->setUploadInfo($__Context->editor_sequence, $__Context->upload_target_srl);
$__Context->_SESSION['upload_info'][$__Context->editor_sequence]->enabled = true;
$__Context->_SESSION['upload_info'][$__Context->editor_sequence]->upload_target_srl = $__Context->upload_target_srl;
Context::loadLang('./modules/editor/lang');
// File config
$__Context->oFileModel = getModel('file');
$__Context->file_config = $__Context->oFileModel->getUploadConfig();
// Editor Config
$__Context->oDocument->getEditor()->option;
 ?>
<!--#Meta:modules/board/skins/sketchbook5/css/m_editor.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/m_editor.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/editor_m.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/editor_m.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/ajaxfileupload.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/ajaxfileupload.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>//<![CDATA[
var lang_confirm_delete ='<?php echo $__Context->lang->confirm_delete ?>';
var allowedFileTypes = '<?php if($__Context->grant->manager){ ?>*.*<?php }else{;
echo $__Context->file_config->allowed_filetypes;
} ?>';
//]]></script>
<?php if($__Context->document_srl){ ?>
<div class="context_data">
	<h3>※ <?php echo $__Context->lang->m_editor_notice ?>.</h3>
</div>
<div class="context_message"><br /></div>
<?php } ?>
<div class="bd_wrt bd_wrt_main clear">
<form action="./" method="post" id="ff" class="m_editor_v<?php echo $__Context->mi->m_editor ?>"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<input type="hidden" name="content" value="<?php if(!$__Context->oDocument->getContentText() && $__Context->mi->content_default){;
echo htmlspecialchars($__Context->mi->content_default);
}else{;
echo $__Context->oDocument->getContentText();
} ?>" />
	<input type="hidden" name="use_html" value="Y" />
	
	<table class="bd_wrt_hd bd_tb">
		<tr>
			<td>
				<?php if($__Context->mi->use_category=='Y' && $__Context->category_list){ ?><select name="category_srl" class="category">
					<option value=""><?php echo $__Context->lang->category ?></option>
					<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
						<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
					</option><?php } ?>
				</select><?php } ?>
			</td>
			<td width="100%">
				<span class="itx_wrp">
					<label for="postTitle"><?php echo $__Context->lang->title ?></label>
					<input type="text" name="title" class="itx" id="postTitle" title="<?php echo $__Context->lang->title ?>"<?php if($__Context->oDocument->getTitleText()){ ?> value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>"<?php } ?> />
				</span>
			</td>
		</tr>
	</table>
	<?php if(count($__Context->extra_keys)){ ?><table class="et_vars exForm bd_tb">
		<caption><strong><em>*</em></strong> <small>: <?php echo $__Context->lang->is_required ?></small></caption>
		<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){ ?><tr>
			<th scope="row"><?php if($__Context->val->is_required=='Y'){ ?><em>*</em><?php } ?> <?php echo $__Context->val->name ?></th>
			<td><?php echo $__Context->val->getFormHTML() ?></td>
		</tr><?php } ?>
	</table><?php } ?>
	<!-- Editor -->
	
	<?php if(!$__Context->mi->m_editor){ ?><div class="m_editor">
<!--#Meta:modules/board/skins/sketchbook5/js/editor_wysiwyg.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/editor_wysiwyg.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/bootstrap-wysiwyg.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/bootstrap-wysiwyg.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/jquery.hotkeys.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/jquery.hotkeys.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<div id="alerts"></div>
		<div class="btn-toolbar clear" data-role="editor-toolbar" data-target="#editor">
			<div class="btn-group">
				<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
				<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
				<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
			</div>
			<div class="btn-group">
				<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
				<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
				
			</div>
			<div class="btn-group hide_w320">
				<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
				
			</div>
			<div class="btn-group fr">
				<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
				<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
			</div>
			<div class="blind"><input type="text" data-edit="inserthtml" id="inserthtml" /></div>
		</div>
		<div id="editor"><p>&nbsp;</p></div>
	</div><?php } ?>
	
	<?php if($__Context->mi->m_editor==2){ ?><div class="m_editor">
<!--#Meta:modules/board/skins/sketchbook5/js/editor_textarea.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/editor_textarea.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<textarea id="nText" col="50" rows="8"></textarea>
	</div><?php } ?>
 
	
	<?php if($__Context->allow_fileupload){ ?><div id="mUpload">
		<div class="bg_f_f9 clear">
			<strong class="fl"><?php echo $__Context->lang->edit->upload_file ?></strong> <button type="button" class="bd_btn fr" onclick="jQuery('#Filedata').click()"><?php echo $__Context->lang->upload_file ?></button>
		</div>
		<ul id="files" class="clear">
			<?php if($__Context->oDocument->hasUploadedFiles()){;
if($__Context->oDocument->getUploadedFiles()&&count($__Context->oDocument->getUploadedFiles()))foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?>
<?php 
	$__Context->ext = substr($__Context->file->source_filename, -4);
	$__Context->ext = strtolower($__Context->ext);
	$__Context->type = 'etc';
	if(in_array($__Context->ext,array('.jpg','jpeg','.gif','.png'))) $__Context->type = 'img';
	if(in_array($__Context->ext,array('.mp3','.wav','.ogg','.aac'))) $__Context->type = 'music';
	if(in_array($__Context->ext,array('webm','.mp4','.ogv','.avi','.mov','.mkv'))) $__Context->type = 'media';
 ?>
			<?php if($__Context->type=='img'){ ?><li id="file_<?php echo $__Context->file->file_srl ?>" class="success"><button type="button" data-file="<?php echo $__Context->file->uploaded_filename ?>" data-type="img" title="<?php echo $__Context->file->source_filename ?>" style="background-image:url(<?php echo $__Context->file->uploaded_filename ?>)" onclick="jQuery(this).parent().toggleClass('select')"><b>✔</b></button><a class="delete_file" href="#" onclick="delete_file(<?php echo $__Context->file->file_srl ?>);return false;"><b>X</b></a><a class="insert_file" href="#" onclick="insert_file(<?php echo $__Context->file->file_srl ?>);return false;"><i class="fa fa-arrow-up"></i></a></li><?php } ?>
			<?php if($__Context->type!='img'){ ?><li id="file_<?php echo $__Context->file->file_srl ?>" class="success type2 <?php echo $__Context->type ?>"><small><?php echo $__Context->file->source_filename ?></small><button type="button" data-file="<?php echo $__Context->file->uploaded_filename ?>" data-type="<?php echo $__Context->type ?>" data-dnld="<?php echo $__Context->file->download_url ?>" onclick="jQuery(this).parent().toggleClass('select')"><b>✔</b></button><a class="delete_file" href="#" onclick="delete_file(<?php echo $__Context->file->file_srl ?>);return false;"><b>X</b></a><a class="insert_file" href="#" onclick="insert_file(<?php echo $__Context->file->file_srl ?>);return false;"><i class="fa fa-arrow-up"></i></a></li><?php } ?>
			<?php }} ?>
			<li id="loading"></li>
			<li class="info clear<?php if($__Context->oDocument->hasUploadedFiles()){ ?> is_img<?php } ?>">
				<span><?php echo $__Context->lang->no_files ?></span>
				<?php if(!$__Context->mi->m_editor){ ?><div>
					<button type="button" class="all bd_btn" id="mEditorSelect"><i class="fa fa-check"></i> <span><?php echo $__Context->lang->cmd_select_all ?></span><span><?php echo $__Context->lang->cmd_deselect_all ?></span></button>
					<button type="button" class="insert bd_btn" id="mEditorInsert"><i class="fa fa-arrow-up"></i> <?php echo $__Context->lang->edit->link_file ?></button>
					<button type="button" class="delete bd_btn" id="mEditorDelete"><i class="fa fa-trash-o"></i> <?php echo $__Context->lang->edit->delete_selected ?></button>
				</div><?php } ?>
				<?php if($__Context->mi->m_editor==2){ ?><div>
					<p><i class="tx_ico_chk">✔</i><?php echo $__Context->lang->select_files_to_insert ?></p>
					<input type="radio" name="m_img_upoad" id="m_img_upoad_1" checked="checked" /><label for="m_img_upoad_1"><?php echo $__Context->lang->m_img_upoad_1 ?></label>
					<input type="radio" name="m_img_upoad" id="m_img_upoad_2" /><label for="m_img_upoad_2"><?php echo $__Context->lang->m_img_upoad_2 ?></label>
				</div><?php } ?>
			</li>
		</ul>
	</div><?php } ?>
	
	<div class="tag itx_wrp">
		<span class="itx_wrp">
			<label for="tags"><?php echo $__Context->lang->tag ?> : <?php echo $__Context->lang->about_tag ?></label>
            <input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="itx" />
		</span>
	</div>
	
	<div class="edit_opt">
		<?php if(!$__Context->is_logged){ ?>
		<span class="itx_wrp">
			<label for="nick_name"><?php echo $__Context->lang->writer ?></label>
            <input type="text" name="nick_name" id="nick_name" value="<?php echo $__Context->oDocument->getNickName() ?>" class="itx n_p" />
		</span>
		<span class="itx_wrp">
			<label for="password"><?php echo $__Context->lang->password ?></label>
            <input type="password" name="password" id="password" class="itx n_p" />
		</span>
		<span class="itx_wrp">
			<label for="email_address"><?php echo $__Context->lang->email_address ?></label>
            <input type="text" name="email_address" id="email_address" value="<?php echo htmlspecialchars($__Context->oDocument->get('email_address')) ?>" class="itx m_h" />
		</span>
		<span class="itx_wrp">
			<label for="homepage"><?php echo $__Context->lang->homepage ?></label>
            <input type="text" name="homepage" id="homepage" value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" class="itx m_h" />
		</span>
		<?php } ?>
	</div>
	
	<div class="opt_chk clear">
		<?php if($__Context->grant->manager){ ?><div class="section">
			<input type="checkbox" name="is_notice" value="Y"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" />
			<label for="is_notice"><?php echo $__Context->lang->notice ?></label>
		</div><?php } ?>
		<div class="section">
			<input type="checkbox" name="comment_status" value="ALLOW"<?php if($__Context->oDocument->allowComment()){ ?> checked="checked"<?php } ?> id="comment_status" />
			<label for="comment_status"><?php echo $__Context->lang->allow_comment ?></label>
			<input type="checkbox" name="allow_trackback" value="Y"<?php if($__Context->oDocument->allowTrackback()){ ?> checked="checked"<?php } ?> id="allow_trackback" />
			<label for="allow_trackback"><?php echo $__Context->lang->allow_trackback ?></label>
		</div>
		<?php if($__Context->is_logged){ ?><div class="section">
			<input type="checkbox" name="notify_message" value="Y"<?php if($__Context->oDocument->useNotify() || (!$__Context->oDocument->useNotify() && @in_array('notify',$__Context->mi->wrt_opt))){ ?> checked="checked"<?php } ?> id="notify_message" />
			<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
		</div><?php } ?>
		<?php if(is_array($__Context->status_list)){ ?><div class="section">
			<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
			<?php if(@!in_array('secret',$__Context->mi->wrt_opt)){ ?><input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>"<?php if($__Context->oDocument->get('status')==$__Context->key || ($__Context->key=='PUBLIC' && !$__Context->document_srl)){ ?> checked="checked"<?php } ?> /><?php } ?>
			<?php if(@in_array('secret',$__Context->mi->wrt_opt)){ ?><input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>"<?php if($__Context->oDocument->get('status')==$__Context->key || ($__Context->key=='SECRET' && !$__Context->document_srl)){ ?> checked="checked"<?php } ?> /><?php } ?>
			<label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
			<?php } ?>
		</div><?php } ?>
	</div>
</form>
<form id="FiledataWrp" name="form" action="./" method="POST" enctype="multipart/form-data" class="blind"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input id="Filedata" type="file" name="Filedata" />
</form>
	
	<?php if($__Context->mi->cmt_wrt=='sns'){ ?><div class="sns_wrt">
		<p>※ <?php echo $__Context->lang->sns_wrt ?>.</p>
		<img class="zbxe_widget_output" widget="socialxe_info" colorset="<?php echo $__Context->mi->colorset ?>" skin="default"  />
	</div><?php } ?>
	
	<div class="regist">
		<?php if($__Context->is_logged && !$__Context->oDocument->isExists() || $__Context->oDocument->get('status')=='TEMP'){ ?><button type="button" onclick="doDocumentSave(this);" class="bd_btn temp"><?php echo $__Context->lang->cmd_temp_save ?></button><?php } ?>
        <input type="submit" id="frmSubmit" value="<?php echo $__Context->lang->cmd_submit ?>" class="bd_btn blue" onclick="frmSubmit();return false;" />
		<button type="button" onclick="history.back();" class="bd_btn cancle"><?php echo $__Context->lang->cmd_back ?></button>
	</div>
</div>