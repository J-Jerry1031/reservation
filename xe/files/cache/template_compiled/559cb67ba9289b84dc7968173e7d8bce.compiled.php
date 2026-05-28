<?php if(!defined("__XE__"))exit;
if(!$__Context->layout_info->slide_height){;
$__Context->layout_info->slide_height = "300";
} ?>
<!--#Meta:layouts/doorweb_v4/css/camera.css--><?php $__tmp=array('layouts/doorweb_v4/css/camera.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doorweb_v4/js/jquery.mobile.customized.min.js--><?php $__tmp=array('layouts/doorweb_v4/js/jquery.mobile.customized.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doorweb_v4/js/jquery.easing.1.3.js--><?php $__tmp=array('layouts/doorweb_v4/js/jquery.easing.1.3.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/doorweb_v4/js/camera.min.js--><?php $__tmp=array('layouts/doorweb_v4/js/camera.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style type="text/css">
/* 메인 슬라이드 */
.wrap_slides{position:relative;z-index:1;height:<?php echo $__Context->layout_info->slide_height ?>px;border-bottom:1px solid #fff;overflow:hidden;}
.none_slide{height:0;overflow:hidden;border:0;}
#back_to_camera {background:rgba(255,255,255,.9);clear:both;display:block;height:40px;line-height:40px;padding:20px;position:relative;z-index:1;}
.fluid_container {bottom:0;height:100%;left:0;position:relative;right:0;top:0;z-index:0;}
#camera_wrap {bottom:0;height:100%;left:0;margin-bottom:0!important;position:relative;right:0;top:0;z-index:1;}
.camera_bar {z-index:2;}
.camera_thumbs {margin-top:-100px;position:relative;z-index:1;}
.camera_thumbs_cont {border-radius:0;-moz-border-radius:0;-webkit-border-radius:0;}
.camera_overlayer {opacity:.1;}
.top_camera{position:absolute;width:100%;height:7px;overflow:hidden;top:left:0;}
.wrap_slides .slide_link{position:absolute; z-index:3;left:0;top:0;width:100%;height:100%;text-indent:-9999px;}
</style>
	<!-- 메인 슬라이드 -->
	<?php if($__Context->layout_info->main_slide){ ?><div class="wrap_slides">
		<div class="camera_wrap camera_emboss" id="camera_wrap">
			<?php if($__Context->layout_info->slide_img1){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img1 ?>" alt="<?php echo $__Context->layout_info->slide_title1 ?>" />
				<div class="caption">
					<div class="in_caption">
						<div class="h1 slide_color1"><?php echo $__Context->layout_info->slide_title1 ?></div>
						<div class="h2 slide_color2"><?php echo $__Context->layout_info->slide_text1 ?></div>
					</div>
					<?php if($__Context->layout_info->slide_url1){ ?><a class="slide_link" href="<?php echo $__Context->layout_info->slide_url1 ?>">more</a><?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img2){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img2 ?>" alt="<?php echo $__Context->layout_info->slide_title2 ?>" />
				<div class="caption">
					<div class="in_caption">
						<div class="h1 slide_color1"><?php echo $__Context->layout_info->slide_title2 ?></div>
						<div class="h2 slide_color2"><?php echo $__Context->layout_info->slide_text2 ?></div>
					</div>
					<?php if($__Context->layout_info->slide_url2){ ?><a class="slide_link" href="<?php echo $__Context->layout_info->slide_url2 ?>">more</a><?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img3){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img3 ?>" alt="<?php echo $__Context->layout_info->slide_title3 ?>" />
				<div class="caption">
					<div class="in_caption">
						<div class="h1 slide_color1"><?php echo $__Context->layout_info->slide_title3 ?></div>
						<div class="h2 slide_color2"><?php echo $__Context->layout_info->slide_text3 ?></div>
					</div>
					<?php if($__Context->layout_info->slide_url3){ ?><a class="slide_link" href="<?php echo $__Context->layout_info->slide_url3 ?>">more</a><?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img4){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img4 ?>" alt="<?php echo $__Context->layout_info->slide_title4 ?>" />
				<div class="caption">
					<div class="in_caption">
						<div class="h1 slide_color1"><?php echo $__Context->layout_info->slide_title4 ?></div>
						<div class="h2 slide_color2"><?php echo $__Context->layout_info->slide_text4 ?></div>
					</div>
					<?php if($__Context->layout_info->slide_url4){ ?><a class="slide_link" href="<?php echo $__Context->layout_info->slide_url4 ?>">more</a><?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img5){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img5 ?>" alt="<?php echo $__Context->layout_info->slide_title5 ?>" />
				<div class="caption">
					<div class="in_caption">
						<div class="h1 slide_color1"><?php echo $__Context->layout_info->slide_title5 ?></div>
						<div class="h2 slide_color2"><?php echo $__Context->layout_info->slide_text5 ?></div>
					</div>
					<?php if($__Context->layout_info->slide_url5){ ?><a class="slide_link" href="<?php echo $__Context->layout_info->slide_url5 ?>">more</a><?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="top_camera">
		</div>
		<script>
			jQuery(function(){
				jQuery('#camera_wrap').camera({
					height: '<?php echo $__Context->layout_info->slide_height ?>',
					loader: 'bar',
					pagination: true,
					thumbnails: false,
					hover: false,
					overlayer: true,
					fx: 'scrollLeft',
					time: <?php echo $__Context->layout_info->slide_speed ?>,
					opacityOnGrid: true
				});
			});
		</script>
		<script type='text/javascript'>
		jQuery(function($){
			$(window).bind('resize.wrap_slides', function(event) {
			var clientWidth = $(window).width();
			$(".wrap_slides").css("width",clientWidth);
			}).trigger('resize.wrap_slides');
		});
		</script>
	</div><?php } ?>
	<!-- 메인 슬라이드 끝 -->