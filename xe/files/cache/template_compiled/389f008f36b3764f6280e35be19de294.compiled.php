<?php if(!defined("__XE__"))exit;
if($__Context->grant->write_comment){ ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/skins/sosi_memo/filter','insert_comment.xml');$__xmlFilter->compile(); ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_comment)"  class="write_author" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
    <input type="hidden" name="comment_srl" value="" />
    <div style="padding:10px;">
	<div class="sm-input-body">
            <input type="text" name="content" style="width:70%; background:#FFF"  />
            <button type="submit" title="<?php echo $__Context->lang->cmd_comment ?>" class="sm-btn"><?php echo $__Context->lang->cmd_registration ?></button>
            <a href="#" onclick="toggle_object('reply_<?php echo $__Context->oDocument->document_srl ?>'); return false;" title="<?php echo $__Context->lang->cmd_cancel ?>" class="sm-btn-de"><?php echo $__Context->lang->cmd_cancel ?></a>
			<?php if(!$__Context->is_logged){ ?><div id="write_author" >
            <input type="text" name="nick_name" id="userName" class="iText" style="width:120px" required placeholder="<?php echo $__Context->lang->writer ?>" title="<?php echo $__Context->lang->writer ?>" />
			<?php if(!$__Context->is_logged){ ?><input type="password" name="password" id="userPw"  required placeholder="<?php echo $__Context->lang->password ?>" class="iText" style="width:120px" /><?php } ?>
            </div><?php } ?>
            </div>
            </div>
</form>
<?php } ?>        