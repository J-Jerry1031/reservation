<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/coupon/skins/default','box_header.html') ?>
    <h1 class="h1"><?php echo $__Context->lang->cmd_my_coupon_box ?></h1>
    <div class="table even">
	    <table class="rowTable" cellspacing="0">
	    <thead>
		    <tr>
		        <th class="title"><div><?php echo $__Context->lang->coupon_title ?></div></th>
		        <th class="title"><div><?php echo $__Context->lang->coupon_number ?></div></th>
		        <th class="title"><div><?php echo $__Context->lang->coupon_expire_date ?></div></th>
		        <th class="title"><div><?php echo $__Context->lang->save_point ?></div></th>
		        <th class="title"><div><?php echo $__Context->lang->cmd_coupon_use ?></div></th>
		    </tr>
	    </thead>
	    <tbody>
	        <?php if(count($__Context->coupon_list)){ ?>
	        <?php if($__Context->coupon_list&&count($__Context->coupon_list))foreach($__Context->coupon_list as $__Context->key => $__Context->oCoupon){ ?>
	        <tr>
	            <td><?php echo $__Context->oCoupon->getTitle() ?></td>
	            <td><?php echo $__Context->oCoupon->getCode() ?></td>
	            <td><?php if($__Context->oCoupon->get('expire_date')){;
echo $__Context->oCoupon->getExpireDate();
}else{ ?>-<?php } ?></td>
	            <td><?php echo number_format($__Context->oCoupon->getPoint()) ?></td>
	            <td><?php if($__Context->oCoupon->isUsed()){ ?>사용함<?php }elseif($__Context->oCoupon->isUseable()){ ?>사용가능<?php }else{ ?>사용불가<?php } ?></td>
	        </tr>
	        <?php } ?>
	        <?php }else{ ?>
	        <tr>
	            <td colspan="5" style="text-align:center">내 쿠폰함에 쿠폰이 없습니다.</td>
	        </tr>
	        <?php } ?>
	        </tbody>
	    </table>
    </div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/coupon/skins/default','box_footer.html') ?>