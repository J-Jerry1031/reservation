<?php
/**
========================================
   요약 : 추천인 표시 애드온
=========================================
   제작 : 숭숭군 ( samswnlee@naver.com )
=========================================
   문의 : http://xecenter.com
========================================= 
**/

if(!defined('__ZBXE__')) exit();

//컨텐츠 출력전에만 작동
if($called_position == 'before_display_content'){
	
	//문서번호 가져옴
	$document_srl = Context::get('document_srl');
	
	//문서(번호)가 있다면 작동
	if($document_srl){
		
		//추천인 구해옴
		$args = null;
		if($addon_info->list_count ? $addon_info->list_count : $addon_info->list_count = 4);
		$args->list_count = 20;
		$args->document_srl = $document_srl;
		$args->more_point = 1;
		$member_info = executeQueryArray('addons.aa_add_vote_list.getVotedMemberList',$args);
		$total_count = executeQuery('addons.aa_add_vote_list.getVotedMemberListCount',$args);
		
		//추천인 배열을 섞음
		shuffle($member_info->data);
		
		//사용자 문구값 가져옴
		if($addon_info->user_text1 ? $user_text1 = $addon_info->user_text1 : $user_text1 = '이 글을');
		if($addon_info->user_text2 ? $user_text2 = $addon_info->user_text2 : $user_text2 = '명이 추천합니다');
		
		//정보세팅
		Context::set('list_limit',$addon_info->list_count);
		Context::set('user_text1',$user_text1);
		Context::set('user_text2',$user_text2);
		Context::set('profile_img_use',$addon_info->profile_img_use);
		Context::set('response_size',$addon_info->list_count);
		Context::set('total_count',$total_count->data);
		Context::set('member_info',$member_info->data);
		
		//템플릿 설정
		$oTemplate = &TemplateHandler::getInstance();
		$vote_list = $oTemplate->compile('./addons/aa_add_vote_list/tpl','vote_list');
		
		//출력위치 애드온에서 가져옴 (본문 상단 하단)
		$position = $addon_info->output_position;
		
		//출력위치 찾음(정규식 사용)
		$pattern = '/<\!--'.$position.'\(([0-9]+),([0-9]+)\)-->/i';
		
		//최종결과물
		$change_output = '<!--'.$position.'(${1},${2})-->'.$vote_list;
		
		//리스트출력
		$output = preg_replace($pattern, $change_output, $output);
		
		//생성한 변수해제 해줌
		unset($args, $member_info, $user_text1, $user_text2, $profile_img_use, $total_count, $response_size, $oTemplate, $vote_list, $position, $pattern, $change_output);
	}
}
?>