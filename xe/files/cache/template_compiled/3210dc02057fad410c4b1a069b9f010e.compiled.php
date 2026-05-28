<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/skins/sosi_memo/filter','insert.xml');$__xmlFilter->compile(); ?>
<?php if(!$__Context->oDocument->isGranted()){ ?>
<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="write_author "><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
	<div class="sm-input-body">
		<input type="password" name="password" required placeholder="<?php echo $__Context->lang->password ?>" style="background:#FFF" />
		<input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" class="sm-btn" />
		<a href="#" onclick="toggle_object('insert_<?php echo $__Context->oDocument->document_srl ?>'); toggle_object('list_<?php echo $__Context->oDocument->document_srl ?>'); return false;" title="<?php echo $__Context->lang->cmd_cancel ?>" class="sm-btn-de"><?php echo $__Context->lang->cmd_cancel ?></a></span>
	</div>   
</form>
<?php }else{ ?> 
<form action="./" method="post" onsubmit="return procFilter(this, window.insert)" class="write_author"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
	<div class="sm-input-body">
		<?php if($__Context->module_info->use_category=="Y"){ ?>
		<select name="category_srl" style="margin-right:5px; margin-bottom:0;">
		<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
		<option <?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?>selected="selected"<?php } ?>>
			<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
		</option>
		<?php } ?>
		</select>
		<?php } ?>
		<input type="text" name="title" value="<?php echo htmlspecialchars($__Context->oDocument->get('title')) ?>"style="width:60%; background:#FFF;" class="write_text xe_content" />
		<button type="submit" title="<?php echo $__Context->lang->cmd_registration ?>" class="sm-btn"><?php echo $__Context->lang->cmd_registration ?></button>
		<a href="#" onclick="toggle_object('insert_<?php echo $__Context->oDocument->document_srl ?>'); toggle_object('list_<?php echo $__Context->oDocument->document_srl ?>'); return false;" class="sm-btn-de" title="<?php echo $__Context->lang->cmd_cancel ?>"><?php echo $__Context->lang->cmd_cancel ?></a></span>
	</div>
	<?php if(!$__Context->is_logged){ ?><div id="write_author" >
		<input type="text" name="nick_name" id="userName" class="iText" style="width:120px" required placeholder="<?php echo $__Context->lang->writer ?>" title="<?php echo $__Context->lang->writer ?>" value="<?php echo htmlspecialchars($__Context->oDocument->get('nick_name')) ?>" />
		<?php if(!$__Context->is_logged){ ?><input type="password" name="password" id="userPw"  required placeholder="<?php echo $__Context->lang->password ?>" class="iText" style="width:120px" /><?php } ?>
	</div><?php } ?> 
	<div class="confirm">
		<?php  $__Context->_color = array('555555','222288','226622','2266EE','8866CC','88AA66','EE2222','EE6622','EEAA22','EEEE22','FF00CC')  ?>
		<?php if($__Context->grant->manager){ ?><span >
			<select name="title_color" id="title_color" <?php if($__Context->oDocument->get('title_color')){ ?>style="color:#<?php echo $__Context->oDocument->get('title_color') ?>;"<?php } ?> onchange="this.style.color=this.options[this.selectedIndex].style.color;">
			<option value="" style="color:#CCCCCC;"><?php echo $__Context->lang->title_color ?></option>
			<?php if($__Context->_color&&count($__Context->_color))foreach($__Context->_color as $__Context->_col){ ?>
				<option value="<?php echo $__Context->_col ?>" style="color:#<?php echo $__Context->_col ?>" <?php if($__Context->oDocument->get('title_color')==$__Context->_col){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->title_color ?></option>
			<?php } ?>
			</select>
		</span><?php } ?>
		<?php if($__Context->grant->manager){ ?><span style="display:inline-block"><label for="title_bold"><input type="checkbox" name="title_bold" id="title_bold" value="Y"<?php if($__Context->oDocument->get('title_bold')=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->title_bold ?></label> </span><?php } ?>
		<span style="display:none"><label for="comment_status"><input type="checkbox" name="comment_status" value="ALLOW" checked="checked" id="comment_status" /><?php echo $__Context->lang->allow_comment ?></label></span>
		<?php if($__Context->grant->manager){ ?><span style="display:inline-block"><?php if($__Context->grant->manager){ ?><label for="is_notice"><?php if($__Context->grant->manager){ ?><input type="checkbox" name="is_notice" value="Y"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" /><?php } ?> <?php echo $__Context->lang->notice ?></label><?php } ?></span><?php } ?>
	</div>
</form>
<?php } ?>