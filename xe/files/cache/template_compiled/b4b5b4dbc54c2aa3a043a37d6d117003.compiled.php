<?php if(!defined("__XE__"))exit;
if($__Context->layout_info->colorset == "pink"){ ?><!--#Meta:layouts/CN_No3/css/pink.css--><?php $__tmp=array('layouts/CN_No3/css/pink.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->colorset == "yellow"){ ?><!--#Meta:layouts/CN_No3/css/yellow.css--><?php $__tmp=array('layouts/CN_No3/css/yellow.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->colorset == "green"){ ?><!--#Meta:layouts/CN_No3/css/green.css--><?php $__tmp=array('layouts/CN_No3/css/green.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->colorset == "blue"){ ?><!--#Meta:layouts/CN_No3/css/blue.css--><?php $__tmp=array('layouts/CN_No3/css/blue.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->layout_info->colorset == "purple"){ ?><!--#Meta:layouts/CN_No3/css/purple.css--><?php $__tmp=array('layouts/CN_No3/css/purple.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?><!--#Meta:layouts/CN_No3/css/default.css--><?php $__tmp=array('layouts/CN_No3/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<!--#Meta:layouts/CN_No3/css/common.css--><?php $__tmp=array('layouts/CN_No3/css/common.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/CN_No3/js/menu.js--><?php $__tmp=array('layouts/CN_No3/js/menu.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style type="text/css">
.side .widget_a { width:180px; <?php if($__Context->layout_info->widget1_height){ ?>height:<?php echo $__Context->layout_info->widget1_height ?>px;<?php }else{ ?>height:210px;<?php } ?> margin:auto; }
</style>
<div id="topwrap">
	<div id="contentwrap">
        <div class="white">
        </div>
        
  		<div id="menuwrap">
    	<img src="/xe/layouts/CN_No3/img/<?php echo $__Context->layout_info->colorset ?>/menu_l.png" width="20" height="34" class="menul" alt="" />
    	<div id="menu">
			<ul>		  
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
				<li class="menulist">
				<a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php };
if($__Context->val['selected']){;
$__Context->menu_1st=$__Context->val;
$__Context->tmp++ ?> class="fst fstselected" <?php }else{ ?> class="fst" <?php } ?>><?php echo $__Context->val['link'] ?></a>
					<?php if($__Context->val['list']){ ?>
					<ol class="snd">
					<?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->k => $__Context->v){ ?>
					<?php if($__Context->v['link']){ ?>
					<li <?php if($__Context->v['selected']){ ?>class="sndselected" <?php $__Context->menu_2nd=$__Context->v;
$__Context->tmp++;
} ?>><a href="<?php echo $__Context->v['href'] ?>"<?php if($__Context->v['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php } ?>><span><?php echo $__Context->v['link'] ?></span></a></li>
					<?php } ?>
					<?php } ?>
					</ol>
					<?php } ?>
				</li>
				<?php };
} ?>
			</ul>	
		</div>
    	<img src="/xe/layouts/CN_No3/img/<?php echo $__Context->layout_info->colorset ?>/menu_r.png" width="22" height="42" class="menur" alt="" />
    	</div>
        
   	    <div class="side">
        	<div class="bg">
            </div>
            
            <div class="content">
            
        		<div class="members">
        			<?php if($__Context->logged_info){ ?>
            		<div class="myinfo"><a href="<?php echo geturl('act','dispMemberInfo') ?>">info</a>
            		</div>
            		<div class="signout"><a href="<?php echo getUrl('act','dispMemberLogout') ?>">logout</a>
            		</div>            
            		<?php }else{ ?>
        			<div class="signup"><a href="<?php echo getUrl('act','dispMemberSignUpForm','member_srl') ?>">signin</a>
            		</div>
            		<div class="signin"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>">login</a>
            		</div>
            		<?php } ?>
        		</div>
                
                <div class="logo"><?php if($__Context->layout_info->logo_img){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>"><img src="<?php echo $__Context->layout_info->logo_img ?>" alt="" /></a><?php } ?>
        		</div>
                
                <table class="sidetable">
  					<tr>
    				<td>
                	<div class="sidemenuTitle">
        			<a href="<?php echo $__Context->menu_1st['href'] ?>"><?php echo $__Context->menu_1st['text'] ?></a>
 					</div>
					<div class="sidemenuList">
					<?php if($__Context->menu_1st){ ?>
        			<ol class="lsubMenu">
            			<?php  $__Context->idx = 1  ?>
            			<?php if($__Context->menu_1st['list']&&count($__Context->menu_1st['list']))foreach($__Context->menu_1st['list'] as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
            			<li <?php if($__Context->val['selected']){ ?>class="on"<?php } ?>><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a>
						</li>
            			<?php $__Context->idx++ ?>
            			<?php };
} ?>
        			</ol>
        			<?php } ?>
					</div>
                	</td>
  					</tr>
				</table> 
                
        		<div class="line">
        		<img src="/xe/layouts/CN_No3/img/line.jpg" width="180" height="2" alt="line" />
        		</div>
        
        		<div class="search_">
        			<form action="<?php echo getUrl() ?>" method="post" class="search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
		    		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="act" value="IS" />
					<input type="hidden" name="search_target" value="title_content" />
					<input name="is_keyword" type="text" title="Search" class="inputText" accesskey="S" />
					<input name="" type="image" src="/xe/layouts/CN_No3/img/search_bt.jpg" alt="Search" class="inputSearch" />
		  		</form>
      			</div>
                
                <?php if($__Context->layout_info->widget1_source){ ?>
        		<div class="line">
        		<img src="/xe/layouts/CN_No3/img/line.jpg" width="180" height="2" alt="line" />
        		</div>                
                <div class="widget_a"><?php echo $__Context->layout_info->widget1_source ?>
                </div>
                <?php } ?>
                
        		<div class="line">
        		<img src="/xe/layouts/CN_No3/img/line.jpg" width="180" height="2" alt="line" />
        		</div> 
                <div class="social"><?php if($__Context->layout_info->facebook_url){ ?><a href="http://www.facebook.com/<?php echo $__Context->layout_info->facebook_url ?>" target="_blank"><img src="/xe/layouts/CN_No3/img/facebook.png" width="24" height="24" title="facebook" /></a><?php };
if($__Context->layout_info->twitter_url){ ?>&nbsp;&nbsp;<a href="http://twitter.com/<?php echo $__Context->layout_info->twitter_url ?>" target="_blank"><img src="/xe/layouts/CN_No3/img/twitter.png" width="24" height="24" title="twitter" /></a><?php } ?>&nbsp;&nbsp;<?php if($__Context->layout_info->me2day_url){ ?><a href="http://me2day.net/<?php echo $__Context->layout_info->me2day_url ?>" target="_blank"><img src="/xe/layouts/CN_No3/img/me2day.png" width="24" height="24" title="me2day" /></a><?php };
if($__Context->layout_info->yozm_url){ ?>&nbsp;&nbsp;<a href="http://yozm.daum.net/<?php echo $__Context->layout_info->yozm_url ?>" target="_blank"><img src="/xe/layouts/CN_No3/img/yozm.png" width="24" height="24" title="yozm" /></a><?php } ?>
                </div>                
            
            </div>
            
        </div>
        
        <div class="main">
        	<div class="gray">
       	    </div> 
            
			<div class="location">
				<ul>
					<li class="locationBlank"><span class="grayLink"><a href="<?php echo $__Context->layout_info->logo_url ?>">Home</a></span></li>
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){ ?>
					<?php if($__Context->val['link']){ ?>
					<?php if($__Context->val['selected']){ ?>
						<li><span class="grayLink"><a href="<?php echo $__Context->val['href'] ?>"><?php echo $__Context->val['text'] ?></a></span></li>
						<?php  $__Context->menu_1st = $__Context->val  ?>
					<?php } ?>
					<?php } ?>
					<?php } ?>
					<?php if($__Context->menu_1st){ ?>
						<?php  $__Context->idx = 1  ?>
					<?php if($__Context->menu_1st['list']&&count($__Context->menu_1st['list']))foreach($__Context->menu_1st['list'] as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
						<?php if($__Context->val['selected']){ ?>
						<li><span class="grayLink"><a href="<?php echo $__Context->val['href'] ?>"><?php echo $__Context->val['text'] ?></a></span></li>
						<?php $__Context->idx++ ?>
							<?php if($__Context->val['list'] && ($__Context->val['expand']=='Y'||$__Context->val['selected']) ){ ?>
							<?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->k => $__Context->v){;
if($__Context->v['link']){ ?>
								<?php if($__Context->v['selected']){ ?>
						<li><span class="grayLink"><a href="<?php echo $__Context->v['href'] ?>"><?php echo $__Context->v['text'] ?></a></span></li>
								<?php } ?>
							<?php };
} ?>
							<?php } ?>
	
						<?php } ?>
					<?php };
} ?>
					<?php } ?>
				</ul>
			</div>
            
            <table class="contentbox">
  				<tr>
    				<td>
            			<div class="content"><?php echo $__Context->content ?>
            			</div>     
            		</td>
  				</tr>
			</table>    
                       
        </div>
        
        <div class="content_clear">
        </div>            	        
    </div>
</div>
<div id="bottomwrap">
    <div class="line">
    </div>
	
    <div class="bottom">
    
		<!-- 본 레이아웃의 제작자정보 삭제를 금합니다. CieNDesign -->
    	<div class="cnd">skin by <a href="http://ciendesign.com" target="_blank">CieNDesign</a>
    	</div>
        
		<div class="topbutton">
		<a href="#" onfocus="blur();"><img src="/xe/layouts/CN_No3/img/<?php echo $__Context->layout_info->colorset ?>/top.png" alt="top" border=0></a>
    	</div>        
        
        <div class="wrap">
    		<div class="ourinfo">
        		<div class="address"><?php if($__Context->layout_info->address){;
echo $__Context->layout_info->address;
} ?>
            	</div>
            	<div class="phone"><?php if($__Context->layout_info->phone){;
echo $__Context->layout_info->phone;
} ?>
            	</div>
            	<div class="email"><?php if($__Context->layout_info->email){;
echo $__Context->layout_info->email;
} ?>
            	</div>
        	</div>
        	<div class="logo_bt"><?php if($__Context->layout_info->logo_bt){ ?><img src="<?php echo $__Context->layout_info->logo_bt ?>" alt="" /><?php } ?>
        	</div>
        	<div class="copyright"><?php if($__Context->layout_info->copyright){;
echo $__Context->layout_info->copyright;
}else{ ?>copyright<?php } ?>
        	</div>
    	</div>
	</div>
    
</div>