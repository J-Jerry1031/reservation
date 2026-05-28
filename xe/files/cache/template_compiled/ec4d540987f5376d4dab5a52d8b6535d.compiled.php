<?php if(!defined("__XE__"))exit;?>
<!--#Meta:layouts/main/js/xe_official.js--><?php $__tmp=array('layouts/main/js/xe_official.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->colorset == "white"){ ?>
    <!--#Meta:layouts/main/css/white.css--><?php $__tmp=array('layouts/main/css/white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->colorset == "black"){ ?>
    <!--#Meta:layouts/main/css/black.css--><?php $__tmp=array('layouts/main/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
    <!--#Meta:layouts/main/css/default.css--><?php $__tmp=array('layouts/main/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
 
<!--팝업창-->
<?php if($__Context->layout_info->background_image){ ?>
<style type="text/css">
    body {  background:#FFFFFF url(<?php echo getUrl();
echo $__Context->layout_info->background_image ?>) repeat-x left top; }
</style>
<?php } ?>
<?php if(!$__Context->layout_info->colorset){ ?>
    <?php $__Context->layout_info->colorset = "default" ?>
<?php } ?>
<div id="bodyWrap">
    <div id="header">
        <div style="position: absolute; top:0px; left:0px; z-index:99;">
           <embed src="./files/faceOff/037/178/images/menu.swf" width="1100" height="180" border=0>
        </div>
        <h1><?php if($__Context->layout_info->logo_image){ ?><a href="<?php echo $__Context->layout_info->index_url ?>"><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="logo" border="0" class="iePngFix" /></a><?php }else{ ?> <?php } ?></h1>
        
        <!-- GNB -->
        <ul id="gnb">
            <!-- main_menu 1차 시작 -->
            <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
                <?php if($__Context->val['selected']){ ?>
                    <?php  $__Context->menu_1st = $__Context->val  ?>
                <?php } ?>
            <?php };
} ?>
        </ul>
    </div>
    <div id="contentBody">
            <!-- 컨텐츠 시작 -->
            <?php echo $__Context->content ?>
       <div id="footer">
          <?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key => $__Context->val){ ?>
          <li><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a></li>
          <?php } ?>
       </div>
    </div>
</div>
<!-- 리포트2.0 로그분석코드 시작 -->
<script type="text/javascript">
var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
var uname = escape('구로소녀시대');
document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "kk33jj.weblog.cafe24.com/weblog.js?uid=kk33jj&uname="+uname+"' type='text/javascript'%3E%3C/script%3E"));
</script>
<!-- 리포트2.0  로그분석코드 완료 -->