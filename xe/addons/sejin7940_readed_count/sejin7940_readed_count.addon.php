<?
    if(!defined("__ZBXE__")) exit();

    /**
     * @author sejin7940 (sejin7940@nate.com) 
 	 * http://sejin7940.co.kr
     * @brief 조회수 중복 증가 기능 / 랜덤 조회수 증가 기능
     **/


    $member_info = Context::get('logged_info');
	$document_srl = Context::get('document_srl');
	$readed_up = "";  // 중복 증가인지 여부
	$update_readed_count ="";  // 증가할 조회수 수
	$multi_readed_count =0;  

	// 조회수 중복 증가 기능
	$multi_limit = intval($addon_info->multi_limit);
	$multi_readed_count = $_SESSION['sejin7940_readed_count'][$document_srl];

	if(!$multi_readed_count) {
		$_SESSION['sejin7940_readed_count'][$document_srl]=="0";
		$multi_readed_count = 0;
	}

	if( ($addon_info->multi_use=="admin" || $addon_info->multi_use=="all") && $logged_info->is_admin=="Y" ) $readed_up = "Y";  // 관리자는 예외
	else if ( $addon_info->multi_use=="all") {
		if($multi_limit && $multi_readed_count >0 && $multi_readed_count < $multi_limit) {
			$readed_up = "Y";
		}
		elseif(!$multi_limit) {
			$readed_up = "Y";
		}
	}





	// 랜덤 조회수 증가 기능 사용
	if($logged_info->is_admin=="Y") {
		$random_max = $addon_info->random_max_admin;
		if(!$random_max) $random_max=1;
		if($random_max>20) $random_max=20;  // 관리자시 최대값 20으로 제한
		$random_min = $addon_info->random_min_admin;
		if(!$random_min) $random_min=1;
		if($random_max<$random_min) $random_min = $random_min;
	}
	else {
		$random_max = $addon_info->random_max;
		if(!$random_max) $random_max=1;
		if($random_max>10) $random_max=10;  // 일반회원의 경우 최대값 10으로 제한
		$random_min = $addon_info->random_min;
		if(!$random_min) $random_min=1;
		if($random_max<$random_min) $random_min = $random_min;
	}


	// 랜덤 증가  or  중복 조회로 랜덤증가시
	if ( $random_max>1 && (($addon_info->random_use=="admin" && $logged_info->is_admin=="Y") || $addon_info->random_use=="all")) {
		if($readed_up=="Y") $update_readed_count = rand ($random_min, $random_max);
		elseif(!$multi_readed_count) $update_readed_count = rand ($random_min, $random_max)-1;  // 첫 조회시엔 view 이후에 조회수 1증가되기에
	}
	// 중복 조회수 증가 - 1씩 증가시
	elseif ($readed_up=="Y") {  // 첫 조회시엔 이 애드온을 쓸 필요가 없기에 중복인 경우에만 적용
		$update_readed_count = 1;
	}



	//애드온 시작 조건 설정
	if($called_position == 'before_module_proc' && $this->act=='dispBoardContent' && $document_srl && $update_readed_count) {
		$args->document_srl = $document_srl;

		if($update_readed_count==20) executeQuery('addons.sejin7940_readed_count.updateReadedCount20', $args);
		elseif($update_readed_count==19) executeQuery('addons.sejin7940_readed_count.updateReadedCount19', $args);
		elseif($update_readed_count==18) executeQuery('addons.sejin7940_readed_count.updateReadedCount18', $args);
		elseif($update_readed_count==17) executeQuery('addons.sejin7940_readed_count.updateReadedCount17', $args);
		elseif($update_readed_count==16) executeQuery('addons.sejin7940_readed_count.updateReadedCount16', $args);
		elseif($update_readed_count==15) executeQuery('addons.sejin7940_readed_count.updateReadedCount15', $args);
		elseif($update_readed_count==14) executeQuery('addons.sejin7940_readed_count.updateReadedCount14', $args);
		elseif($update_readed_count==13) executeQuery('addons.sejin7940_readed_count.updateReadedCount13', $args);
		elseif($update_readed_count==12) executeQuery('addons.sejin7940_readed_count.updateReadedCount12', $args);
		elseif($update_readed_count==11) executeQuery('addons.sejin7940_readed_count.updateReadedCount11', $args);
		elseif($update_readed_count==10) executeQuery('addons.sejin7940_readed_count.updateReadedCount10', $args);
		elseif($update_readed_count==9) executeQuery('addons.sejin7940_readed_count.updateReadedCount9', $args);
		elseif($update_readed_count==8) executeQuery('addons.sejin7940_readed_count.updateReadedCount8', $args);
		elseif($update_readed_count==7) executeQuery('addons.sejin7940_readed_count.updateReadedCount7', $args);
		elseif($update_readed_count==6) executeQuery('addons.sejin7940_readed_count.updateReadedCount6', $args);
		elseif($update_readed_count==5) executeQuery('addons.sejin7940_readed_count.updateReadedCount5', $args);
		elseif($update_readed_count==4) executeQuery('addons.sejin7940_readed_count.updateReadedCount4', $args);
		elseif($update_readed_count==3) executeQuery('addons.sejin7940_readed_count.updateReadedCount3', $args);
		elseif($update_readed_count==2) executeQuery('addons.sejin7940_readed_count.updateReadedCount2', $args);
		elseif($update_readed_count==1) executeQuery('addons.sejin7940_readed_count.updateReadedCount1', $args);
	
		$_SESSION['sejin7940_readed_count'][$document_srl]=$multi_readed_count+1;  // 동일글 조회수	
	}
	elseif($called_position == 'before_module_proc' && $this->act=='dispBoardContent' && !$update_readed_count && !$multi_readed_count) {
		$_SESSION['sejin7940_readed_count'][$document_srl]=$multi_readed_count+1;  // 동일글 조회수	
	}


?>