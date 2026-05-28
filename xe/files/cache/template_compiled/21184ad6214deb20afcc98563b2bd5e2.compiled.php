<?php if(!defined("__XE__"))exit;
echo $__Context->module_info->header_text ?>
<!--#Meta:modules/board/skins/lune_board/stylesheets/common.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/common.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/lune_board/scripts/common.js--><?php $__tmp=array('modules/board/skins/lune_board/scripts/common.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->module_info->colorset == 'b'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.b.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.b.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == 'p'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.p.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.p.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == 'o'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.o.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.o.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == 'l'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.l.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.l.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == 'g'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.g.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.g.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == 'v'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.v.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.v.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/color.s.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/color.s.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php if($__Context->module_info->xv_title_a == 'cs'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/font.1.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/font.1.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->xv_title_a == 'sl'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/font.2.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/font.2.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->xv_title_a == 'ss'){ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/font.3.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/font.3.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/board/skins/lune_board/stylesheets/font.0.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/font.0.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php 
	$__Context->lb->name = $__Context->module_info->xv_name;
	$__Context->lb->name_i = $__Context->module_info->xv_name_i;
	$__Context->lb->date = $__Context->module_info->xv_date ? $__Context->module_info->xv_date : 'Y-m-d';
	$__Context->lb->noti = $__Context->module_info->xv_noti == 'n' ? false : true;
	$__Context->lb->bln = $__Context->module_info->xv_bln && $__Context->module_info->xv_bln != 'n' ? $__Context->module_info->xv_bln : false;
 ?>
<?php if($__Context->module_info->xv_bln && $__Context->module_info->xv_bln != 'n'){ ?>
	<?php if(substr($__Context->module_info->xv_bln, 0, 2) == 'v_'){ ?>
		<?php 
			$__Context->lb->bln = false;
			$__Context->lb->bln_v = substr($__Context->module_info->xv_bln, 2);
		 ?>
	<?php }else{ ?>
		<?php 
			$__Context->lb->bln = $__Context->lb->bln_v = $__Context->module_info->xv_bln;
		 ?>
	<?php } ?>
<?php }else{ ?>
	<?php 
		$__Context->lb->bln = $__Context->lb->bln_v = false;
	 ?>
<?php } ?>
<?php 
	$__Context->lb->photo_w = $__Context->module_info->xv_user_w ? $__Context->module_info->xv_user_w : 80;
	$__Context->lb->photo_h = $__Context->module_info->xv_user_h ? $__Context->module_info->xv_user_w : 80;
	$__Context->lb->photo_i = $__Context->module_info->xv_user_i ? getUrl().$__Context->module_info->xv_user_i : false;
	$__Context->module_info->xv_css ? Context::addHtmlHeader('<style type="text/css">'.$__Context->module_info->xv_css.'</style>') : '';
	$__Context->lb->gcf = false;
	
	$__Context->lb->type = $__Context->module_info->xv_list_t == 'gallery' ? 'gallery' : 'board';
	$__Context->lb->list->login = ($__Context->is_logged || $__Context->module_info->xv_login == 'n') ? false : true;
	$__Context->lb->list->sort = ($__Context->module_info->xv_sort == 'n' || ($__Context->module_info->xv_sort == 'a' && !$__Context->grant->manager)) ? false : true;
	$__Context->lb->new_hrs = $__Context->module_info->xv_new ? $__Context->module_info->xv_new : ''; // null to no markings
	$__Context->lb->new_p = !$__Context->module_info->xv_new_p || $__Context->module_info->xv_new_p == 'y' ? true : false;
	$__Context->lb->badges = $__Context->module_info->xv_badges == 'n' ? false : true;
	$__Context->lb->list->title_n = $__Context->module_info->xv_title_n;
	$__Context->lb->list->link_n = $__Context->module_info->xv_link_n == '-1' ? 'i' : $__Context->module_info->xv_link_n;
	$__Context->lb->list->summary_n = $__Context->module_info->xv_summary_n ? $__Context->module_info->xv_summary_n : '300';
	$__Context->lb->thumb_w = $__Context->module_info->xv_thumb_w ? $__Context->module_info->xv_thumb_w : 110;
	$__Context->lb->thumb_h = $__Context->module_info->xv_thumb_h ? $__Context->module_info->xv_thumb_h : 110;
	$__Context->lb->thumb_i = $__Context->module_info->xv_thumb_i ? getUrl().$__Context->module_info->xv_thumb_i : false;
	$__Context->lb->list->rss = $__Context->module_info->xv_rss == 'n' ? false : true;
	
	$__Context->lb->gl->t = $__Context->module_info->xv_gallery_n ? $__Context->module_info->xv_gallery_n : 4;
	$__Context->lb->gl->h = $__Context->module_info->xv_gallery_h == 'n' ? false : true;
	
	$__Context->lb->dm->image = $__Context->module_info->xv_d_image == 'n' ? false : $__Context->module_info->xv_d_image;
	$__Context->lb->dm->sb = $__Context->module_info->xv_d_sb == 'n' ? false : $__Context->module_info->xv_d_sb;
	$__Context->lb->sign = $__Context->module_info->xv_d_sign == 'n' ? false : true;
	$__Context->lb->dm->report = $__Context->module_info->xv_d_report == 'n' || $__Context->module_info->xv_d_report == 's' ? false : true;
	$__Context->lb->dm->scrap = $__Context->module_info->xv_d_report == 'n' || $__Context->module_info->xv_d_report == 'r' ? false : true;
	$__Context->lb->dm->vote = $__Context->module_info->xv_d_vote ? $__Context->module_info->xv_d_vote : 3;
	$__Context->lb->dm->files = $__Context->module_info->xv_d_files == 'n' ? false : true;
	$__Context->lb->dm->tb = $__Context->module_info->xv_d_tb == 'n' ? false : true;
	
	$__Context->lb->cm->photo = $__Context->module_info->xv_c_user == 'n' ? false : true;
	$__Context->lb->cm->report = $__Context->module_info->xv_c_report == 'n' ? false : true;
	$__Context->lb->cm->vote = $__Context->module_info->xv_c_vote ? $__Context->module_info->xv_c_vote : 3;
	
	$__Context->lb->category = ($__Context->module_info->use_category == 'Y' && count($__Context->category_list)) ? true : false;
	$__Context->lb->anonymous = ($__Context->module_info->use_anonymous == 'Y') ? true : false;
	$__Context->lb->secret = ($__Context->module_info->secret == 'Y') ? true : false;
	$__Context->lb->list->status = $__Context->lb->new_hrs && $__Context->lb->new_p ? true : false; // status icons col
	$__Context->lb->new_time = date("YmdHis", time() - $__Context->lb->new_hrs * 60 * 60);
	$__Context->lb->id = 0;
	$__Context->lb->palette = array('555555','222288','226622','2266EE','8866CC','88AA66','EE2222','EE6622','EEAA22','EEEE22');
	$__Context->lb->order_target;
	$__Context->lb->order_type;
	$__Context->lb->list->config_t = array();
	$__Context->lb->list->config_n = 0;
	$__Context->lb->list->notice = true;
	$__Context->lb->list->first = true;
 ?>
<?php if($__Context->lang_type == 'ko'){ ?>
	<?php 
		$__Context->lang->cmd_sort = '정렬';
		$__Context->lang->cmd_top = '맨 위로';
		$__Context->lang->confirm_report = '신고하시겠습니까?';
		$__Context->lang->cmd_search_krzip = '우편번호 찾기';
		$__Context->lang->about_krzip = '읍, 면, 동을 입력한 후 검색을 누르세요.';
		$__Context->lang->select_zip = '주소를 선택해주세요.';
		$__Context->lang->search_isnull = '검색어를 입력해주세요.';
	 ?>
<?php }else{ ?>
	<?php 
		$__Context->lang->cmd_sort = 'Sort';
		$__Context->lang->cmd_top = 'Top';
		$__Context->lang->confirm_report = 'Are you sure?';
		$__Context->lang->cmd_search_krzip = 'Search Zipcode';
		$__Context->lang->about_krzip = 'Type in -eup, -myeon or -dong and press search.';
		$__Context->lang->select_zip = 'Please select a zipcode.';
		$__Context->lang->search_isnull = sprintf($__Context->lang->filter->isnull, $__Context->lang->search_keyword);
	 ?>
<?php } ?>
<script type="text/javascript">//<![CDATA[
	var lb = new Array;
	lb.lang = new Array;
	lb.lang['confirm_report'] = '<?php echo $__Context->lang->confirm_report ?>';
	lb.lang['select_zip'] = '<?php echo $__Context->lang->select_zip ?>';
	lb.lang['search_isnull'] = '<?php echo $__Context->lang->search_isnull ?>';
	lb.date_option = {
		changeMonth: true,
		changeYear: true,
		gotoCurrent : false,
		yearRange : '-100:+10',
		<?php if($__Context->lb->date == 'Y.m.d'){ ?>
			dateFormat: 'yy.mm.dd',
		<?php }elseif($__Context->lb->date == 'Y/m/d'){ ?>
			dateFormat: 'yy/mm/dd',
		<?php }else{ ?>
			dateFormat: 'yy-mm-dd',
		<?php } ?>
		onSelect : function() {
			jQuery(this).prev('input[type="hidden"]').val(this.value.replace(/[\.\-\/]/g,""))
		}
		<?php if($__Context->lang_type == 'ko'){ ?>
			,
			closeText: '닫기',
			prevText: '이전 달',
			nextText: '다음 달',
			currentText: '오늘',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			weekHeader: 'Wk',
			firstDay: 0,
			isRTL: false
		<?php } ?>
	};
//]]></script>
<div id="lune_board" class="type-<?php echo $__Context->lb->type ?> font-<?php echo $__Context->lb->font ?>">
	<?php if($__Context->lb->gcf){ ?>
		<?php 
			require_once('modules/board/skins/lune_board/lib.php');
			Context::addHtmlHeader('<meta http-equiv="X-UA-Compatible" content="chrome=1" />');
		 ?>
		<?php if(!strpos($__Context->_SERVER['HTTP_USER_AGENT'], 'chromeframe')){ ?>
			<p id="lb_gcf" class="lb-warn">
				<span class="lb-i lb-warn"></span>
				<?php if($__Context->lang_type == 'ko'){ ?>
					이 화면을 올바르게 표시하기 위해서는 <a href="http://www.google.com/chromeframe?hl=ko" target="_blank">Google Chrome Frame 플러그인</a>의 설치가 필요합니다.
				<?php }else{ ?>
					In order to display contents of this page, <a href="http://www.google.com/chromeframe" target="_blank">Google Chrome Frame plugin</a> must be installed.
				<?php } ?>
			</p>
			<!--[if lte IE 7]>
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
				<div id="prompt"></div>
				<script type="text/javascript">//<![CDATA[
					window.attachEvent("onload", function() {
						CFInstall.check({
							mode: "overlay",
							onmissing: function() { jQuery('#lb_gcf').show(); }
						});
					});
				//]]></script>
			<![endif]-->
			<!--#Meta:modules/board/skins/lune_board/stylesheets/ie.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/ie.css','','IE','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!--#Meta:modules/board/skins/lune_board/stylesheets/ie6.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/ie6.css','','IE 6','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!--#Meta:modules/board/skins/lune_board/stylesheets/ie7.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/ie7.css','','IE 7','');Context::loadFile($__tmp);unset($__tmp); ?>
		<?php } ?>
	<?php }else{ ?>
		<!--#Meta:modules/board/skins/lune_board/stylesheets/ie.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/ie.css','','IE','');Context::loadFile($__tmp);unset($__tmp); ?>
		<!--#Meta:modules/board/skins/lune_board/stylesheets/ie6.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/ie6.css','','IE 6','');Context::loadFile($__tmp);unset($__tmp); ?>
		<!--#Meta:modules/board/skins/lune_board/stylesheets/ie7.css--><?php $__tmp=array('modules/board/skins/lune_board/stylesheets/ie7.css','','IE 7','');Context::loadFile($__tmp);unset($__tmp); ?>
	<?php } ?>
	<?php if($__Context->lb->name && $__Context->act != 'krzip' && $__Context->lb->category){ ?>
		<?php if($__Context->document_srl && !$__Context->act){ ?>
			<span id="lune_board_title">
		<?php }else{ ?>
			<h1 id="lune_board_title">
		<?php } ?>
			<a class="lune_board_title lb-link" href="<?php echo getFullUrl('','mid',$__Context->mid) ?>">
				<?php if($__Context->lb->name_i){ ?>
					<img src="<?php echo getUrl();
echo $__Context->lb->name_i ?>" alt="<?php echo $__Context->lb->name ?>" />
				<?php }else{ ?>
					<?php echo $__Context->lb->name ?>
				<?php } ?>
			</a>
		<?php if($__Context->document_srl && !$__Context->act){ ?>
			</span>
		<?php }else{ ?>
			</h1>
		<?php } ?>
	<?php } ?>
