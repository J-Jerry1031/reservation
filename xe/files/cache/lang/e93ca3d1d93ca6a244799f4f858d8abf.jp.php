<?php
$lang->seample='xxx';
$lang->no_pointrrush_log='로그가 없습니다.';
$lang->pointrush_management='Pointrush 관리';
$lang->about_pointrush='Point Rush 게시판을 생성하고 관리할 수 있습니다.';
if(!is_array($lang->rush_status_list)){
	$lang->rush_status_list = array();
}
$lang->rush_status_list['STANDBY']='준비중';
$lang->rush_status_list['OPEN']='진행중';
$lang->rush_status_list['CLOSE']='종료';
$lang->rush_status_list['CANCEL']='취소됨';
$lang->rush_status_STANDBY='준비중';
$lang->rush_status_OPEN='진행중';
$lang->rush_status_CLOSE='종료';
$lang->rush_status_CANCEL='취소됨';
if(!is_array($lang->rush_direct_list)){
	$lang->rush_direct_list = array();
}
$lang->rush_direct_list['DIRECT']='즉시 확인';
$lang->rush_direct_list['TERM']='발표일 확인';
$lang->rush_direct_DIRECT='즉시 확인';
$lang->rush_direct_TERM='발표일 확인';
if(!is_array($lang->rush_delivery_status_list)){
	$lang->rush_delivery_status_list = array();
}
$lang->rush_delivery_status_list['ON_PREPARE']='확인중...';
$lang->rush_delivery_status_list['OFF_COMPLETE']='당첨 확인';
$lang->ON_PREPARE='확인중...';
$lang->OFF_COMPLETE='당첨 확인';
$lang->rush_winner='축 당 첨';
$lang->rush_loss='꽝! 안타깝네요 다시 도전하세요.';
$lang->cmd_execute_pointrush='응모 하기';
$lang->cmd_retry_pointrush='재시도';
$lang->cmd_create_pointrush='Point Rush 게시판 등록';
$lang->use_group='응모대상 그룹';
$lang->pointrush_board='골드러시 게시판';
$lang->except_notice='공지사항 제외';
$lang->use_anonymous='익명 사용';
$lang->cmd_manage_menu='메뉴 관리';
$lang->list_target_item='대상 항목';
$lang->list_display_item='표시 항목';
$lang->summary='요약';
$lang->thumbnail='섬네일';
$lang->last_post='최종 글';
$lang->pointrush_board_management='골드러시 게시판 관리';
$lang->search_result='검색결과';
$lang->consultation='상담 기능';
$lang->secret='비밀글 기능';
$lang->thisissecret='비밀글입니다.';
$lang->admin_mail='관리자 메일';
$lang->cmd_pointrush_board_list='골드러시 게시판 목록';
$lang->cmd_module_config='골드러시 게시판 공통 설정';
$lang->cmd_pointrush_board_info='골드러시 게시판 정보';
$lang->cmd_list_setting='목록설정';
$lang->cmd_create_pointrush_board='골드러시 게시판 등록';
$lang->cmd_manage_selected_pointrush_board='선택한 골드러시 게시판 관리';
$lang->about_layout_setup='블로그의 레이아웃 코드를 직접 수정할 수 있습니다. 위젯 코드를 원하는 곳에 삽입하시거나 관리하세요';
$lang->about_pointrush_board_category='분류를 만들 수 있습니다. 분류가 오동작을 할 경우 캐시파일 재생성을 수동으로 해주시면 해결이 될 수 있습니다.';
$lang->about_except_notice='목록 상단에 늘 나타나는 공지사항을 일반 목록에서 공지사항을 출력하지 않도록 합니다.';
$lang->about_use_anonymous='글쓴이의 정보를 없애고 익명으로 골드러시 게시판 사용을 할 수 있게 합니다. 스킨설정에서 글쓴이 정보등을 보이지 않도록 하시면 더욱 유용합니다. 추가설정의 문서 히스토리 사용이 꺼져있지 않으면 문서 수정시 작성자가 표시될 수 있습니다.';
$lang->about_pointrush_board='골드러시 게시판을 생성하고 관리할 수 있습니다.';
$lang->about_consultation='상담 기능은 관리권한이 없는 회원은 자신이 쓴 글만 보이도록 하는 기능입니다. 단 상담기능 사용시 비회원 글쓰기는 자동으로 금지됩니다.';
$lang->about_secret='골드러시 게시판 및 댓글의 비밀글 사용할 수 있도록 합니다.';
$lang->about_admin_mail='글이나 댓글이 등록될때 등록된 메일주소로 메일이 발송됩니다. 콤마(,)로 연결시 다수의 메일주소로 발송할 수 있습니다.';
$lang->about_use_status='글 작성 시 선택할 수 있는 상태를 지정해주세요.';
$lang->msg_not_enough_point='포인트가 부족합니다';
$lang->write_comment='댓글 쓰기';
$lang->msg_not_allow_comment='해당 글의 댓글 쓰기가 잠겨있습니다.';
$lang->no_pointrush_board_instance='생성된 골드러시 게시판이 없습니다.';
$lang->choose_pointrush_board_instance='관리할 골드러시 게시판을 선택해 주세요.';
$lang->comment_status='댓글';
$lang->category_settings='분류 설정';
$lang->hide_category='분류 숨기기';
$lang->about_hide_category='임시로 분류를 사용하지 않으려면 체크하세요.';
