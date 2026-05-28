<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/flowing_pictures/skins/default/css/default.css--><?php $__tmp=array('widgets/flowing_pictures/skins/default/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/flowing_pictures/skins/default/js/jquery.mousewheel.js--><?php $__tmp=array('widgets/flowing_pictures/skins/default/js/jquery.mousewheel.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/flowing_pictures/skins/default/js/jcarousellite_1.0.1.js--><?php $__tmp=array('widgets/flowing_pictures/skins/default/js/jcarousellite_1.0.1.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/flowing_pictures/skins/default/js/jquery.easing.1.3.js--><?php $__tmp=array('widgets/flowing_pictures/skins/default/js/jquery.easing.1.3.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="carousel">
	
<?php if($__Context->widget_vals->controls == "buttons"){ ?>
	<a href="#" class="btn"><img src="/xe/widgets/flowing_pictures/skins/default/img/imageNavLeft.png" class="prev prev<?php echo $__Context->fi_widget_count ?> iePngFix" /></a>
<?php } ?> 
		<div class="jCarouselLite<?php echo $__Context->fi_widget_count ?> jCarouselLiteCommon">
			<ul>
<?php if(count($__Context->widget_vals->document_list)){ ?>
			<?php if($__Context->widget_vals->document_list&&count($__Context->widget_vals->document_list))foreach($__Context->widget_vals->document_list as $__Context->oDocument){ ?>
				<?php if($__Context->oDocument->document_srl != 0){ ?>
							<li><a href="<?php echo getUrl('','document_srl',$__Context->oDocument->document_srl) ?>" alt=""><img src="<?php echo $__Context->oDocument->getThumbnail($__Context->widget_vals->thumbnail_width,$__Context->widget_vals->thumbnail_height,$__Context->widget_vals->thumbnail_type) ?>">
							<?php if($__Context->widget_vals->title_visibility == "true"){ ?><div class="title"><?php echo $__Context->oDocument->getTitle($__Context->widget_vals->title_length,'..') ?></div><?php } ?></a></li>  
				<?php } ?>
			<?php } ?>
<?php }else{ ?>
							<li class="noimage" style="width:<?php echo $__Context->widget_vals->thumbnail_width ?>px; height: <?php echo $__Context->widget_vals->thumbnail_height ?>px; " alt="첨부된 이미지가 없습니다."></li>  
<?php } ?>
			</ul>
		</div>
<?php if($__Context->widget_vals->controls == "buttons"){ ?>
		<a href="#" class="btn"><img src="/xe/widgets/flowing_pictures/skins/default/img/imageNavRight.png" class="next next<?php echo $__Context->fi_widget_count ?> iePngFix" /></a>
<?php } ?> 
</div> 
<script type="text/javascript">
	function dj(val){
		if(window && window.console && window.console.debug) window.console.debug(val);
	}
jQuery(document).ready(function(){
	jQuery(".carousel .jCarouselLite<?php echo $__Context->fi_widget_count ?> li img")
		.css('width', <?php echo $__Context->widget_vals->thumbnail_width ?>)
		.css('height', <?php echo $__Context->widget_vals->thumbnail_height ?>)
		.css('margin', <?php echo $__Context->widget_vals->img_margin ?>)
		.css('border-width', <?php echo $__Context->widget_vals->border_width ?>)
		.css('border-color', '<?php echo $__Context->widget_vals->border_color ?>')
		.css('border-style', 'solid'); 
	jQuery(".carousel .jCarouselLite<?php echo $__Context->fi_widget_count ?> .title")
		.css("width", <?php echo $__Context->widget_vals->thumbnail_width ?> + <?php echo $__Context->widget_vals->img_margin ?> * 2)
		.css("color", '<?php echo $__Context->widget_vals->title_color ?>')
		.css("font-size", '<?php echo $__Context->widget_vals->title_size ?>')
		.css("font-family", '<?php echo $__Context->widget_vals->title_font ?>'); 
	if(jQuery(".jCarouselLite<?php echo $__Context->fi_widget_count ?>").jCarouselLite){
		jQuery(".jCarouselLite<?php echo $__Context->fi_widget_count ?>").jCarouselLite({
<?php if($__Context->widget_vals->controls == "buttons"){ ?>
					btnNext: ".next<?php echo $__Context->fi_widget_count ?>",
					btnPrev: ".prev<?php echo $__Context->fi_widget_count ?>",
<?php } ?>
<?php if($__Context->widget_vals->controls == "auto"){ ?>
					auto: <?php echo $__Context->widget_vals->auto_scroll_msec ?>,
					speed: <?php echo $__Context->widget_vals->scroll_speed ?>,
<?php } ?>
<?php if($__Context->widget_vals->scroll_speed){ ?>
					speed: <?php echo $__Context->widget_vals->scroll_speed ?>,
<?php } ?>
<?php if($__Context->widget_vals->mouseoverstop){ ?>
					mouseOverStop: <?php echo $__Context->widget_vals->mouseoverstop ?>,
<?php } ?>
<?php if($__Context->widget_vals->mouse_wheel){ ?>
					mouseWheel: <?php echo $__Context->widget_vals->mouse_wheel ?>,
<?php } ?>
<?php if($__Context->widget_vals->sliding_effect){ ?>
			easing: "<?php echo $__Context->widget_vals->sliding_effect ?>",
<?php } ?>
			visible: <?php echo $__Context->widget_vals->shown_image_num ?>
		});
	}
	jQuery('.carousel .prev<?php echo $__Context->fi_widget_count ?>, .carousel .next<?php echo $__Context->fi_widget_count ?>')
		.css('top', ( parseInt(jQuery('.jCarouselLite<?php echo $__Context->fi_widget_count ?> li').height()) - parseInt(jQuery('.carousel .prev<?php echo $__Context->fi_widget_count ?>').height()) ) / 2);
});
</script>  