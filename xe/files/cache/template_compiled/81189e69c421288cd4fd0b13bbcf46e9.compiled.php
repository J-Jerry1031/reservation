<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/poll_maker/tpl/popup.js--><?php $__tmp=array('modules/editor/components/poll_maker/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/poll_maker/tpl/popup.css--><?php $__tmp=array('modules/editor/components/poll_maker/tpl/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/editor/components/poll_maker/tpl/filter','insert_poll.xml');$__xmlFilter->compile(); ?>
<?php Context::loadLang('modules/editor/components/poll_maker/lang'); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<script>
    var msg_poll_cannot_modify = "<?php echo $__Context->lang->msg_poll_cannot_modify ?>";
</script>
<section class="section">
	<h1><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h1>
	<form action="./" method="post" id="fo_component" onSubmit="procFilter(this, insert_poll); return false;" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="component" value="<?php echo $__Context->component_info->component_name ?>" />
		<input type="hidden" name="method" value="insertPoll" />
		<input type="hidden" name="poll_srl" value="" />
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->poll_stop_date ?></label>
			<div class="x_controls">
				<input type="hidden" name="stop_date" id="stop_date" value="<?php echo date('Ymd',time()+60*60*24*7) ?>" />
				<input type="date" class="inputDate" value="<?php echo date('Y-m-d',time()+60*60*24*7) ?>" />
<script>
(function($){
$(function(){
	var option = {
		changeMonth:true
		,changeYear:true
		,gotoCurrent: false
		,yearRange:'-100:+10'
		, onSelect:function(){
			$(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""));
		}
		,minDate: new Date("<?php echo date('Y-m-d',time()) ?>")
	};
	$.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
	$(".inputDate").datepicker(option);
});
})(jQuery);
</script>
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin">
				<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->skin=>$__Context->skin_info){ ?>
				<option value="<?php echo $__Context->skin ?>"><?php echo $__Context->skin_info->title ?> (skin by <?php echo $__Context->skin_info->maker->name ?>)</option>
				<?php } ?>
				</select>
			</div>
		</div>
	<div id="poll_source" style="display:none">
		<div class="table">
		<table class="x_table x_table-striped x_table-hover">
			<thead>
			<col width="100" />
			<col />
			</thead>
			<tbody>
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->poll_chk_count ?></div></th>
				<td><input type="text" name="checkcount_tidx" value="1" size="1"  /></td>
			</tr>
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->poll_title ?></div></th>
				<td><input type="text" name="title_tidx" /></td>
			</tr>
			
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->poll_item ?> 1</div></th>
				<td><input type="text" name="item_tidx_1" /></td>
			</tr>
			
			<tr>
				<th scope="row"><div><?php echo $__Context->lang->poll_item ?> 2</div></th>
				<td><input type="text" name="item_tidx_2" /></td>
			</tr>
			</tbody>
		</table>
		</div>
		<button type="button" class="_add_item x_btn"><?php echo $__Context->lang->cmd_add_item ?></button>
		<button type="button" class="_del_item x_btn"><?php echo $__Context->lang->cmd_del_item ?></button>
		<button type="button" class="_del_poll x_btn"><?php echo $__Context->lang->cmd_del_poll ?></button>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary" /><?php echo $__Context->lang->cmd_submit ?></button>
				<button type="button" id="add_poll" class="x_btn"><?php echo $__Context->lang->cmd_add_poll ?></button>
				<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo $__Context->lang->about_component ?></a>
			</div>
		</div>
	</form>
</section>
