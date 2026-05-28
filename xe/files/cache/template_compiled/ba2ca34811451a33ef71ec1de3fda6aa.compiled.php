<?php if(!defined("__XE__"))exit;
if($__Context->grant->write_comment){ ?>
		<?php if(!$__Context->comment->isGranted()){ ?>
		<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="write_author"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
    		<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
    <input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->comment_srl ?>" />
		<div class="sm-input-body">
        <input type="password" name="password" required placeholder="<?php echo $__Context->lang->password ?>" style="background:#FFF"   />
        <input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" class="sm-btn" />
        <a href="#" onclick="toggle_object('insert_<?php echo $__Context->comment->comment_srl ?>'); toggle_object('list_<?php echo $__Context->comment->comment_srl ?>'); return false;" title="<?php echo $__Context->lang->cmd_cancel ?>" class="sm-btn-de"><?php echo $__Context->lang->cmd_cancel ?></a>
        </div>
		</form>
		<?php }else{ ?>
        <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/skins/sosi_memo/filter','insert_comment.xml');$__xmlFilter->compile(); ?>
		<form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="write_author"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
    	<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->comment_srl ?>" />
		<div class="sm-input-body">
        <input type="text" name="content" value="<?php echo htmlspecialchars($__Context->comment->get('content')) ?>"style="width:70%; background:#FFF" class="xe_content"  />
        <button type="submit" title="<?php echo $__Context->lang->cmd_registration ?>" class="sm-btn"><?php echo $__Context->lang->cmd_registration ?></button>
        <a href="#" onclick="toggle_object('cinsert_<?php echo $__Context->comment->comment_srl ?>'); toggle_object('clist_<?php echo $__Context->comment->comment_srl ?>'); toggle('reply_<?php echo $__Context->comment->comment_srl ?>'); return false;" class="sm-btn-de" title="<?php echo $__Context->lang->cmd_cancel ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
			<?php if(!$__Context->is_logged){ ?><div id="write_author">
				<input type="text" name="nick_name" class="iText" title="<?php echo $__Context->lang->writer ?>" value="<?php echo htmlspecialchars($__Context->comment->nick_name) ?>" required placeholder="<?php echo $__Context->lang->writer ?>"   style="width:120px; margin-bottom:0;" />
				<input type="password" name="password" value="" title="<?php echo $__Context->lang->password ?>" required placeholder="<?php echo $__Context->lang->password ?>"  class="iText" style="width:120px; margin-bottom:0;" />
            </div><?php } ?></div>
			</form>
<?php } ?>
<?php } ?>      