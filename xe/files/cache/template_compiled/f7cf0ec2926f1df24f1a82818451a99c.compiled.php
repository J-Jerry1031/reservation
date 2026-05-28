<?php if(!defined("__XE__"))exit;?><script type="text/javascript">//<![CDATA[
    alert("<?php echo $__Context->message ?>");
 <?php if($__Context->reload == 1){ ?>
 top.location.href = top.location.href;
 <?php } ?>
//]]></script>
