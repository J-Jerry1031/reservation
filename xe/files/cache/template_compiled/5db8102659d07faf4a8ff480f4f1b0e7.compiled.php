<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/coupon/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/coupon/tpl/filter','delete_checked.xml');$__xmlFilter->compile(); ?>
<!-- 정보 -->
<form id="fo_list" action="./" method="get" onsubmit="return procFilter(this, delete_checked)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table cellspacing="0" class="rowTable clear">
		<caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
		<thead>
			<tr>
				<th scope="row"><?php echo $__Context->lang->no ?></th>
				<th scope="row"><?php echo $__Context->lang->coupon_title ?></th>
				<th scope="row"><?php echo $__Context->lang->coupon_code ?></th>
				<th scope="row"><?php echo $__Context->lang->point ?></th>
				<th scope="row"><?php echo $__Context->lang->coupon_limit ?></th>
				<th scope="row"><?php echo $__Context->lang->coupon_used_count ?></th>
				<th scope="row"><?php echo $__Context->lang->coupon_used_log ?></th>
				<th scope="row"><?php echo $__Context->lang->expire_date ?></th>
				<th scope="row"><?php echo $__Context->lang->regdate ?></th>
				<th scope="row"><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;" /></th>
			</tr>
		</thead>
	    <tbody>
	    <?php if(count($__Context->coupon_list)){ ?>
	    <?php if($__Context->coupon_list&&count($__Context->coupon_list))foreach($__Context->coupon_list as $__Context->no => $__Context->oCoupon){ ?>
	    <tr>
	        <td><?php echo $__Context->no ?></td>
	        <td><?php if($__Context->oCoupon->getTitle()){ ?><a href="<?php echo getUrl('act', 'dispCouponAdminInsertCoupon', 'coupon_srl', $__Context->oCoupon->coupon_srl) ?>"><?php echo $__Context->oCoupon->getTitle() ?></a><?php }else{ ?>&nbsp;<?php } ?></td>
	        <td><a href="<?php echo getUrl('act', 'dispCouponAdminInsertCoupon', 'coupon_srl', $__Context->oCoupon->coupon_srl) ?>"><?php echo $__Context->oCoupon->getCode() ?></a></td>
	        <td><?php echo number_format($__Context->oCoupon->getPoint()) ?></td>
	        <td><?php if($__Context->oCoupon->getLimit()){;
echo number_format($__Context->oCoupon->getLimit());
echo $__Context->lang->unit__time;
}else{ ?>-<?php } ?></td>
	        <td><?php echo $__Context->oCoupon->getUsedCount();
echo $__Context->lang->unit__time ?></td>
	        <td><a href="<?php echo getUrl('act', 'dispCouponAdminCouponLogList', 'coupon_srl', $__Context->oCoupon->get('coupon_srl')) ?>"><?php echo $__Context->lang->cmd_view ?></a></td>
	        <td><?php if($__Context->oCoupon->get('expire_date')){;
echo $__Context->oCoupon->getExpireDate();
}else{ ?>-<?php } ?></td>
	        <td><?php echo $__Context->oCoupon->getRegdate() ?></td>
	        <td><input type="checkbox" name="cart" value="<?php echo $__Context->oCoupon->coupon_srl ?>" /></td>
	    </tr>
	    <?php } ?>
	    <?php }else{ ?>
	    <tr>
	        <td colspan="10" style="text-align:center"><?php echo $__Context->lang->msg_not_exists_coupons ?></td>
	    </tr>
	    <?php } ?>
	    </tbody>
	</table>
	<div style="text-align:right"><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" /></span></div>
	<!-- 페이지 네비게이션 -->
	<div class="pagination a1">
	    <a href="<?php echo getUrl('page','') ?>" class="prevEnd">&lt; <?php echo $__Context->lang->first_page ?></a> 
	    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
	        <?php if($__Context->page == $__Context->page_no){ ?>
	            <strong><?php echo $__Context->page_no ?></strong> 
	        <?php }else{ ?>
	            <a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a> 
	        <?php } ?>
	    <?php } ?>
	    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?> &gt;</a>
	</div>
</form>