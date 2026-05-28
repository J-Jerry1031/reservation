<?php
$lang->exam='시험';
$lang->unit_score='점';
$lang->unit_hours='시간';
$lang->list_display_item='표시 항목';
$lang->exam_pass_setting='합격시 설정';
$lang->exam_pass_point='합격시 포인트';
$lang->exam_pass_group='합격시 그룹변경';
$lang->exam_pass_point_give='포인트 지급';
$lang->exam_pass_point_minus='포인트 차감';
$lang->exam_pass_group_give='소속그룹 변경';
$lang->search_result='검색결과';
$lang->exam_duration_new='new 표시 시간';
$lang->exam_management='시험 관리';
$lang->exam_create='모듈 생성';
$lang->about_exam_duration_new='새 시험지가 생성되었을때 new 아이콘을 출력할 시간을 입력하여 주세요. (단위: 시간)';
$lang->about_pass_point='합격시 지급할 포인트를 설정할 수 있습니다. (%d ~ %d 사이만 가능)';
$lang->about_pass_point_minus='Y를 선택하시면 포인트 지급 금액만큼 작성자의 포인트를 차감합니다.';
$lang->about_use_point_minus='참고! 지급된 포인트만큼 본인의 포인트가 차감됩니다';
$lang->about_pass_group='합격시 회원의 소속그룹을 변경 시킬 수 있습니다. ';
$lang->about_exam='시험형태로 문제를 생성하고 풀이할 수 있습니다.';
$lang->cmd_exam_list='시험 목록';
$lang->cmd_exam_info='시험 정보';
$lang->cmd_exam_config='시험 설정';
$lang->cmd_exam_category_config='분류 설정';
$lang->cmd_exam_grant_config='권한 설정';
$lang->cmd_exam_skin_config='스킨 설정';
$lang->cmd_exam_mskin_config='모바일스킨 설정';
$lang->cmd_exam_write='시험지 생성';
$lang->cmd_my_exam_result='시험 응시 현황';
$lang->cmd_change_editmode='편집모드 전환';
$lang->cmd_question_write='문제 출제';
$lang->cmd_question_edit='문제 수정';
$lang->cmd_question_delete='문제 삭제';
$lang->cmd_list_setting='목록설정';
$lang->cmd_selected_result_manage='시험 응시 내역 수정';
$lang->exam_srl='시험번호';
$lang->exam_join='응시';
$lang->exam_title='시험명';
$lang->exam_content='시험 설명';
$lang->exam_date='시험기간';
$lang->exam_regdate='등록일';
$lang->exam_result_time='소요시간';
$lang->exam_result_regdate='응시일';
$lang->exam_last_update='최근 수정일';
$lang->exam_page_type='시험 유형';
$lang->exam_result_type='채점 결과';
$lang->exam_cutline='합격 커트라인';
$lang->exam_score='점수';
$lang->exam_score_secert='비공개';
$lang->exam_time='제한 시간';
$lang->exam_join_point='응시료';
$lang->exam_correct_count='정답 수';
$lang->exam_wrong_count='오답 수';
$lang->exam_question_count='문제개수';
$lang->exam_join_count='응시자수';
$lang->exam_status='상태';
$lang->exam_status_modify='상태 변경';
$lang->exam_image='이미지';
$lang->q_level='난이도';
$lang->q_type='문제유형';
$lang->q_title='문제';
$lang->q_content='해설';
$lang->q_answer='정답';
$lang->q_description='지문';
$lang->q_answerCheckType='복수답안 처리';
$lang->use_description='사용';
$lang->q_description_title='머리글';
$lang->q_description_content='내　용';
$lang->hide_category='분류 숨기기';
$lang->about_hide_category='임시로 분류를 사용하지 않으려면 체크하세요.';
$lang->about_list_config='시험의 목록형식 사용시 원하는 항목들로 배치를 할 수 있습니다. 단 스킨에서 지원하지 않는 경우 불가능합니다. 대상항목/ 표시항목의 항목을 더블클릭하면 추가/ 제거가 됩니다.';
$lang->about_exam_editor_skin='시험문제 출제페이지에서 지문 입력 시 사용할 에디터스킨을 선택하세요.';
$lang->exam_delete_warning='모듈을 삭제하시면 이 모듈의 시험지 및 문제정보 등도 같이 삭제됩니다.';
$lang->no_exam_instance='생성된 시험이 없습니다.';
$lang->no_exam_list='진행중인 시험이 없습니다.';
$lang->no_question_list='출제된 문제가 없습니다.';
$lang->no_result_list='응시한 시험이 없습니다.';
if(!is_array($lang->exam_pass_pointOption)){
	$lang->exam_pass_pointOption = array();
}
$lang->exam_pass_pointOption['0']='사용안함';
$lang->exam_pass_pointOption['1']='작성자가 보유한만큼 지급 가능';
$lang->exam_pass_pointOption['2']='관리자가 설정한 범위내에서 지급 가능';
if(!is_array($lang->exam_pass_groupOption)){
	$lang->exam_pass_groupOption = array();
}
$lang->exam_pass_groupOption['0']='사용안함';
$lang->exam_pass_groupOption['1']='작성자가 소속한 그룹내에서 변경 가능';
$lang->exam_pass_groupOption['2']='관리자가 설정한 그룹내에서 변경 가능';
if(!is_array($lang->statusList)){
	$lang->statusList = array();
}
$lang->statusList['Y']='공개';
$lang->statusList['N']='종료';
if(!is_array($lang->pageTypeList)){
	$lang->pageTypeList = array();
}
$lang->pageTypeList['0']='시험지 형태';
if(!is_array($lang->resultTypeList)){
	$lang->resultTypeList = array();
}
$lang->resultTypeList['0']='비공개';
$lang->resultTypeList['1']='점수 공개';
$lang->resultTypeList['2']='풀이 공개';
$lang->resultTypeList['3']='전체 공개';
if(!is_array($lang->resultStatusList)){
	$lang->resultStatusList = array();
}
$lang->resultStatusList['P']='합격';
$lang->resultStatusList['N']='불합격';
if(!is_array($lang->qTypeList)){
	$lang->qTypeList = array();
}
$lang->qTypeList['0']='객관식';
$lang->qTypeList['1']='주관식';
if(!is_array($lang->qLevelList)){
	$lang->qLevelList = array();
}
$lang->qLevelList['0']='하';
$lang->qLevelList['1']='중';
$lang->qLevelList['2']='상';
if(!is_array($lang->answerCheckList)){
	$lang->answerCheckList = array();
}
$lang->answerCheckList['0']='하나만 일치해도 정답 인정';
$lang->answerCheckList['1']='모두 일치해야 정답 인정';
$lang->answerCheckList['2']='모두 일치해야 정답 인정 + 부분 점수';
if(!is_array($lang->numIconList)){
	$lang->numIconList = array();
}
$lang->numIconList['1']='①';
$lang->numIconList['2']='②';
$lang->numIconList['3']='③';
$lang->numIconList['4']='④';
$lang->numIconList['5']='⑤';
if(!is_array($lang->result_search_list)){
	$lang->result_search_list = array();
}
$lang->result_search_list['document_srl']='시험번호';
$lang->result_search_list['member_srl']='회원번호';
$lang->result_search_list['correct_count']='정답 수';
$lang->result_search_list['correct_count_more']='정답 수(이상)';
$lang->result_search_list['correct_count_less']='정답 수(이하)';
$lang->result_search_list['score']='점수';
$lang->result_search_list['score_more']='점수(이상)';
$lang->result_search_list['score_less']='점수(이하)';
$lang->result_search_list['regdate_more']='응시일(이상)';
$lang->result_search_list['regdate_less']='응시일(이하)';
$lang->about_pagetype='시험을 응시할 때 어떤 형태로 보일것인지 선택할 수 있습니다.';
$lang->about_resulttype='시험 응시 후 결과를 어떻게 알려줄 것인지 선택할 수 있습니다. 비공개를 설정하면 응시자는 결과를 확인할 수 없으며 전체 공개로 설정하시면 정답까지 보여줍니다.';
$lang->about_cutline='시험 점수가 커트라인 이상일경우 합격, 아니면 불합격으로 처리할 수 있습니다. (0~100 사이로 입력가능)';
$lang->about_date='시험기간을 설정하면 해당기간에만 시험에 응시할 수 있습니다.';
$lang->about_time='제한 시간을 설정하면 시험 응시 중 남은시간이 표시되며 남은 시간이 지날경우 시험은 자동 제출됩니다.';
$lang->about_join_point='시험 응시에 필요한 포인트를 설정하실 수 있습니다.';
$lang->about_exam_delete='시험지를 삭제하면 문제 및 참여자정보도 같이 삭제됩니다.';
$lang->msg_not_exam_title='시험명을 입력하여 주세요.';
$lang->msg_not_exam_date='시험기간 설정시 시작일 또는 종료일을 선택하여 주세요.';
$lang->msg_not_exam_time='제한할 시간(초)를 입력하여 주세요.';
$lang->msg_not_answer='정답을 입력(선택)하여 주세요.';
$lang->msg_invalid_exam_score='점수는 100점을 넘길 수 없습니다.';
$lang->msg_invalid_exam_cutline='합격 커트라인은 100점을 넘길 수 없습니다.';
$lang->msg_invalid_start_time='시험 시작일은 종료일보다 느릴 수 없습니다.';
$lang->msg_invalid_end_time='시험 종료일은 시작일보다 빠를 수 없습니다.';
$lang->msg_not_examitem='해당 시험지가 존재하지 않습니다.';
$lang->msg_not_exam_date='시험기간에만 응시할 수 있습니다.';
$lang->msg_time_over='제한시간이 초과되었습니다.';
$lang->msg_not_enough_point='포인트가 부족합니다';
$lang->msg_not_session='세션이 만료되었습니다. 다시 시도하여 주십시요.';
$lang->msg_not_answer_text='번 문제 정답을 입력하세요.';
$lang->msg_not_answer_radio='번 문제 정답을 선택하세요.';
$lang->msg_exists_result='이미 이 시험에 응시 하셨습니다.';
