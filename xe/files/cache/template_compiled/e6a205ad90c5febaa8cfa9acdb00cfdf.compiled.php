<?php if(!defined("__XE__"))exit;?>
<!--#Meta:layouts/newsub/js/xe_official.js--><?php $__tmp=array('layouts/newsub/js/xe_official.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->colorset == "white"){ ?>
    <!--#Meta:layouts/newsub/css/white.css--><?php $__tmp=array('layouts/newsub/css/white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->colorset == "black"){ ?>
    <!--#Meta:layouts/newsub/css/black.css--><?php $__tmp=array('layouts/newsub/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
    <!--#Meta:layouts/newsub/css/default.css--><?php $__tmp=array('layouts/newsub/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
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
        <h1><?php if($__Context->layout_info->logo_image){ ?><a href="<?php echo $__Context->layout_info->index_url ?>"><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="logo" border="0" class="iePngFix" /></a><?php }else{ ?> <?php } ?></h1>
        
        <!-- GNB -->
        <ul id="gnb">
            <!-- main_menu 1차 시작 -->
            <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
                <?php if($__Context->val['selected']){ ?>
                    <?php  $__Context->menu_1st = $__Context->val  ?>
                <?php } ?>
                <li <?php if($__Context->val['selected']){ ?>class="on"<?php } ?>><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a></li>
            <?php };
} ?>
        </ul>
    </div>
         
    <div id="contentBody">
        <div id="columnLeft">
            <!-- 로그인 위젯 -->
            <img class="zbxe_widget_output" widget="login_info" skin="xdom_login_v2" colorset="default_co_main" />
            <img class="zbxe_widget_output" widget="bannermgm_widget" skin="banner" bannermgm_srl="2920877" link_target="_top" />
            <img class="zbxe_widget_output" widget="bannermgm_widget" skin="banner" bannermgm_srl="2920873" link_target="_top" />
            <img class="zbxe_widget_output" widget="bannermgm_widget" skin="banner" bannermgm_srl="2930991" link_target="_top" />
                <!--
                <img class="zbxe_widget_output" widget="bannermgm_widget" skin="banner" bannermgm_srl="2930991" link_target="_top" />
                <img class="zbxe_widget_output" widget="bannermgm_widget" skin="banner" bannermgm_srl="2917717" link_target="_top" />
                -->
            <!-- 왼쪽 2차 메뉴 -->
            <img src="/xe/layouts/newsub/images/blank.gif" alt="" class="mask" />
			
            <?php if($__Context->menu_1st){ ?>
            <ol id="lnb">
                <?php  $__Context->idx = 1  ?>
                <?php if($__Context->menu_1st['list']&&count($__Context->menu_1st['list']))foreach($__Context->menu_1st['list'] as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
                <li <?php if($__Context->val['selected']){ ?>class="on"<?php } ?>><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a>
                    <!-- main_menu 3차 시작 -->
                    <?php if($__Context->val['list'] && ($__Context->val['expand']=='Y'||$__Context->val['selected']) ){ ?>
                    <ul>
                    <?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->k => $__Context->v){;
if($__Context->v['link']){ ?>
                        <li <?php if($__Context->v['selected']){ ?>class="on"<?php } ?>><a href="<?php echo $__Context->v['href'] ?>" <?php if($__Context->v['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->v['link'] ?></a></li>
                    <?php };
} ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php $__Context->idx++ ?>
                <?php };
} ?>
            </ol>
            <?php } ?>
        </div>
        <div id="columnRight">
            <!-- 컨텐츠 시작 -->
            <?php echo $__Context->content ?>
        </div>
    </div>
    <ul id="footer">
        <?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key => $__Context->val){ ?>
        <li><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a></li>
        <?php } ?>
    </ul>
</div>
<!-- 리포트2.0 로그분석코드 시작 -->
<script type="text/javascript">
var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
var uname = escape('구로소녀시대');
document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "kk33jj.weblog.cafe24.com/weblog.js?uid=kk33jj&uname="+uname+"' type='text/javascript'%3E%3C/script%3E"));
</script>
<!-- 리포트2.0  로그분석코드 완료 -->