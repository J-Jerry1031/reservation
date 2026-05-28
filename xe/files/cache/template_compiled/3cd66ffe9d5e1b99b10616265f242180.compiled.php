<?php if(!defined("__XE__"))exit;
if($__Context->widgetstyle_extra_var->ws_colorset == "gray"){ ?>
    <?php  $__Context->_wsClassName = "gray" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "lightsky"){ ?>
    <?php  $__Context->_wsClassName = "lightsky" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "orange"){ ?>
    <?php  $__Context->_wsClassName = "orange" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "sky"){ ?>
    <?php  $__Context->_wsClassName = "sky" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "green"){ ?>
    <?php  $__Context->_wsClassName = "green" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "deeppink"){ ?>
    <?php  $__Context->_wsClassName = "deeppink" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "lightpink"){ ?>
    <?php  $__Context->_wsClassName = "lightpink" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "tomato"){ ?>
    <?php  $__Context->_wsClassName = "tomato" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "royalblue"){ ?>
    <?php  $__Context->_wsClassName = "royalblue" ?>
<?php }elseif($__Context->widgetstyle_extra_var->ws_colorset == "gold"){ ?>
    <?php  $__Context->_wsClassName = "gold" ?>
<?php } ?>
<!--#Meta:widgetstyles/sketchbook5_wincomi/style.css--><?php $__tmp=array('widgetstyles/sketchbook5_wincomi/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="sbwidgetstyle <?php echo $__Context->_wsClassName ?>">
    <h2 <?php if($__Context->widgetstyle_extra_var->korean == "yes"){ ?>style="font-family:inherit;font-style:normal"<?php } ?>>
		<b></b><?php echo $__Context->widgetstyle_extra_var->ws_title ?>
		<?php if($__Context->widgetstyle_extra_var->more == "yes"){ ?>
			<a class="more" href="<?php echo $__Context->widgetstyle_extra_var->more_url ?>"></a>
		<?php } ?>
	</h2>
    <?php echo $__Context->widget_content ?>
</div>