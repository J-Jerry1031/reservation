<?php if(!defined("__XE__"))exit;?><!--#Meta:/popup.css--><?php $__tmp=array('/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/coupon/skins/default/js/coupon.js--><?php $__tmp=array('modules/coupon/skins/default/js/coupon.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/coupon/skins/default/filter','coupon.xml');$__xmlFilter->compile(); ?>
<div id="popHeader">
    <h1 class="h1"><?php echo $__Context->lang->cmd_use_coupon ?></h1>
</div>
<form method="post" onsubmit="return procFilter(this, coupon)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div id="popBody">
	    <table class="rowTable" cellspacing="0">
	    <tr>
	        <th><?php echo $__Context->lang->coupon_code ?></th>
	        <td>
	            <input type="text" name="coupon_code" value="<?php echo $__Context->code ?>" maxlength="17" class="inputTypeText w130" /> <span class="buttonGray medium"><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_use_coupon ?>" /></span></span>
	            <p class="description">
	         	   <?php echo $__Context->lang->description_use_coupon ?>
	            </p>
	        </td>
	    </tr>
	    </table>
	</div>
</form>