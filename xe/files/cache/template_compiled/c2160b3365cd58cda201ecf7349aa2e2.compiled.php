<?php if(!defined("__XE__"))exit;?></div>
<?php if(!$__Context->lb->gcf || !strpos($__Context->_SERVER['HTTP_USER_AGENT'], 'chromeframe')){ ?>
	<!--[if lte IE 8]>
		<script type="text/javascript">//<![CDATA[
			jQuery('li.lb-dm-li:last-child').addClass('last-child');
		//]]></script>
	<![endif]-->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="/xe/modules/board/skins/lune_board/scripts/DD_belatedPNG_0.0.8a-min.js"></script>
		<script type="text/javascript">//<![CDATA[
			jQuery('li.lb-bc:first-child, li.lb-list-i:first-child, dt.lb-list-i:first-child').addClass('lb-1st').css('background', 'none');
			jQuery(document).ready(function () {
				DD_belatedPNG.fix('strong.lb-bln, .lb-i, button.lb-m-b, h2.lb-dm-sb-i, li.lb-list-i, dt.lb-list-i, div.lb-gl-status, span.lb-hack-w, span.lb-hack-e-i, a.lb-bc span.lb-bc-w, div.lb-bar-w, div.lb-bar-e, div.lb-bd-nw, div.lb-bd-ne, div.lb-bd-sw, div.lb-bd-se');
			});
		//]]></script>
	<![endif]-->
<?php } ?>
<?php echo $__Context->module_info->footer_text ?>