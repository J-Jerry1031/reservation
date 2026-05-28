<?php
    if(!defined("__ZBXE__") && !defined("__XE__")) exit();

    /**
     * @file sejin7940_write_limit.addon.php
     * @author sejin7940 ( http://sejin7940.co.kr) 
	 * @source author 난다날아 (sinsy200@gmail.com)
     * @brief 하루에 작성할 수 있는 글/댓글을 제한합니다.
     *
     **/

	// 로그인 정보 가져오기
	$logged_info = Context::get('logged_info');

	// 관리자면 통과!!
	if ($logged_info->is_admin == 'Y')	return;

	// 오늘 작성글 개수를 가져온다.
	// 비회원은 ip를 기준으로...

	if(!$addon_info->term) $addon_info->term=1;
	$args->limit_start = date("Ymd",time() - ($addon_info->term-1) * 86400);

	if (!$logged_info)	$args->ipaddress = 	$_SERVER['REMOTE_ADDR'];
	else				$args->member_srl = $logged_info->member_srl;

	if($addon_info->mid_list) {
	    $oModuleModel = &getModel('module');
		$limit_module_srl_array = $oModuleModel->getModuleSrlByMid($addon_info->mid_list);
		$limit_module_srls=implode(',',$limit_module_srl_array);
	}
	if($addon_info->mid_together=="Y") {  // 선택한 게시판 통합 적용
		if(count($addon_info->mid_list)) $args->limit_module_srl = $limit_module_srls;  // 선택한 게시판
		else $args->limit_module_srl="";  // 전체
	}
	elseif($addon_info->mid_list) {  // 선택한 게시판 별도 각각 적용
		if(strstr(','.$limit_module_srls.',',','.$this->module_info->module_srl.',')) {
			$args->limit_module_srl = $this->module_info->module_srl;
		}
		else return; 
	}
	else $args->limit_module_srl="";  // 전체


//echo $addon_info->mid_list[0]."<br>";   // 모듈목록
//echo $this->module_info->mid;   // 현재위치의 module_srl 값
    Context::loadLang(_XE_PATH_.'addons/sejin7940_write_limit/lang');
    
	// 글 작성시
	if( ( $called_position == 'before_module_init' || $called_position=='before_module_proc') && $this->act == 'procBoardInsertDocument' && !Context::get('document_srl')) {  // sejin7940 수정 (수정시 작동 안 하도록 하기 위해서)
		// 제한이 걸려있지 않으면 통과!
		if (!$addon_info->document_limit)	return;
		


		$output = executeQuery('addons.sejin7940_write_limit.document_count', $args);

		if (!$output->toBool()) {
            $error = $output->getMessage();
			// xml_rpc return
			header("Content-Type: text/xml; charset=UTF-8");
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			print("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<response>\r\n<error>-1</error>\r\n<message>$error</message>\r\n</response>");

			Context::close();
			exit();
		}

		// 설정된 개수 이상의 작성이면 중단!

		if ($output->data->count >= $addon_info->document_limit  ) {
			// xml_rpc return
			header("Content-Type: text/xml; charset=UTF-8");
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			printf("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<response>\r\n<error>-1</error>\r\n<message>".Context::getLang('msg_limit_document')."</message>\r\n</response>", $addon_info->document_limit);

			Context::close();
			exit();
		}

    // 글 작성 화면
    }else if($called_position == 'after_module_proc' && $this->act == 'dispBoardWrite' && !Context::get('document_srl')) {  // sejin7940 수정 (수정시 작동 안 하도록 하기 위해서)
        // 제한이 걸려있지 않으면 통과!
		if (!$addon_info->document_limit)	return;

        // 게시판에서 메시지가 나가면 중단
        if ($this->getTemplateFile() == 'message.html') return;
        
		$db_output = executeQuery('addons.sejin7940_write_limit.document_count', $args);

		if (!$db_output->toBool()) {
			$this->errer = "SQL Error";
			return;
		}

		// 설정된 개수 이상의 작성이면 중단!
		if ($db_output->data->count >= $addon_info->document_limit) {
			$output = new Object(-1, sprintf(Context::getLang('msg_limit_document'), $addon_info->document_limit));
			return;
		}
	// 댓글 작성 때
    }else if( ($called_position == 'before_module_init' || $called_position=='before_module_proc') && $this->act == 'procBoardInsertComment') {

		// 제한이 걸려있지 않으면 통과!
		if (!$addon_info->comment_limit)	return;
		
		// 오늘 작성 댓글 개수를 가져온다.
		$output = executeQuery('addons.sejin7940_write_limit.comment_count', $args);
		if (!$output->toBool()) {
            $error = $output->getMessage();
			// xml_rpc return
			header("Content-Type: text/xml; charset=UTF-8");
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			print("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<response>\r\n<error>-1</error>\r\n<message>$error</message>\r\n</response>");

			Context::close();
			exit();
		}

		// 설정된 개수 이상의 작성이면 중단!
		if ($output->data->count >= $addon_info->comment_limit) {
			// xml_rpc return
			header("Content-Type: text/xml; charset=UTF-8");
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			printf("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<response>\r\n<error>-1</error>\r\n<message>".Context::getLang('msg_limit_comment')."</message>\r\n</response>", $addon_info->comment_limit);

			Context::close();
			exit();
		}

    }
?>
