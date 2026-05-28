<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/coupon/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/coupon/tpl/filter','insert_coupon.xml');$__xmlFilter->compile(); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<form action="./" method="get" onsubmit="return procFilter(this, insert_coupon)" class="table"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table class="rowTable" cellspacing="0" cellpadding="0">
		<tr>
			<th><?php echo $__Context->lang->coupon_title ?> <em style="color:red">*</em></th>
			<td>
				<input type="text" name="title" value="<?php echo $__Context->oCoupon->getTitle() ?>" />
			</td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->coupon_code ?> <em style="color:red">*</em></th>
			<td class="code">
				<input type="text" id="code" name="coupon_code" value="<?php echo $__Context->code ?>" maxlength="5" /> - 
				<input type="text" id="code2" name="coupon_code2" value="<?php echo $__Context->code2 ?>" maxlength="5" /> - 
				<input type="text" id="code3" name="coupon_code3" value="<?php echo $__Context->code3 ?>" maxlength="5" /> <span class="btn"><button type="button" onclick="doGenerateCode();"><?php echo $__Context->lang->cmd_generate ?></button></span>
			</td>
		</tr>
	<tr>
		<th><?php echo $__Context->lang->point ?></th>
		<td>
			<input type="text" name="point" value="<?php echo $__Context->oCoupon->getPoint() ?>" class="inputTypeText" />
			<p><?php echo $__Context->lang->about_point ?></p>
		</td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->coupon_limit ?></th>
		<td>
			<input type="text" name="coupon_limit" value="<?php echo $__Context->oCoupon->getLimit() ?>" class="inputTypeText" />
			<p><?php echo $__Context->lang->about_coupon_limit ?></p>
		</td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->expire_date ?></th>
		<td>
			<input type="hidden" name="expire_date" id="date_expire" value="<?php echo $__Context->oCoupon->get('expire_date') ?>" />
			<input type="text" class="inputDate inputTypeText" value="<?php echo $__Context->oCoupon->getExpireDate() ?>" readonly="readonly" />
			<span class="btn"><input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="dateRemover" /></span>
		</td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->own_member ?></th>
		<td>
			<input type="text" id="member_srl" name="member_srl" value="<?php if($__Context->oCoupon->get('member_srl')){;
echo $__Context->oCoupon->get('member_srl');
} ?>" class="inputTypeText" />
			<span class="btn"><a href="<?php echo getUrl('', 'module', 'coupon', 'act', 'dispCouponAdminFindMember', 'target', 'member_srl') ?>" onclick="popopen(this.href); return false;"><?php echo $__Context->lang->cmd_find_member ?></a></span>
			<p><?php echo $__Context->lang->about_own_member ?></p>
		</td>
	</tr>
	<tr>
		<th colspan="2"><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_coupon_registration ?>" /></span></th>
	</tr>
	</table>
<?php echo $__Context->addition_content ?>
</form>
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