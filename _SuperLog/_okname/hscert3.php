<?
/*
	본인인증 결과 화면
   (고객 인증정보 KCB팝업창에서 입력용)
*/
	/* 공통 리턴 항목 */
	$idcf_mbr_com_cd			=	$_POST["idcf_mbr_com_cd"];//		고객사코드
	$hs_cert_svc_tx_seqno	=	$_POST["hs_cert_svc_tx_seqno"];//	거래번호
	$ssn						=	$_POST["ssn"];//					주민번호 (결과 미전송];//
	$rqst_site_nm			=	$_POST["rqst_site_nm"];//			접속도메인	
	$hs_cert_msr_cd			=	$_POST["hs_cert_msr_cd"];//		인증요청수단코드(00:전체, 10:휴대폰, 20:신용카드, 30:공인인증서];//
	$hs_cert_rqst_caus_cd	=	$_POST["hs_cert_rqst_caus_cd"];//	인증요청사유코드 2byte  (00:회원가입, 01:성인인증, 02:회원정보수정, 03:비밀번호찾기, 04:상품구매, 99:기타];// 

	$rqst_ip					=	$_POST["rqst_ip"];//				사용자접속IP
	$rst_cd					=	$_POST["rst_cd"];//				결과코드
	$rst_msg					=	$_POST["rst_msg"];//				결과메세지
	$cert_dt_tm				=	$_POST["cert_dt_tm"];//			인증일시

	/* 임베디드 버젼 리턴 항목 */
	$mbl_tel_cmm_cd			=	$_POST["mbl_tel_cmm_cd"];//		통신사 구분코드 (01:SKT, 02:KTF, 03:LGT];//
	$mbphn_no				=	$_POST["mbphn_no"];//			휴대폰번호 (결과 미전송];//
	$re_snd_cnt				=	$_POST["re_snd_cnt"];//			인증번호 재요청 건수
	$card_no					=	$_POST["card_no"];//				카드번호   (결과 미전송];//
	$card_vld_term			=	$_POST["card_vld_term"];//		카드유효기간(YY/MM];//
	$card_pwd				=	$_POST["card_pwd"];//			카드비밀번호
	$card_com_nm				=	$_POST["card_com_nm"];// 			카드사명

	$orcs_iss_agnc_nm		=	$_POST["orcs_iss_agnc_nm"];// 		공인인증서발급기관명
	$orcs_iss_dt_tm			=	$_POST["orcs_iss_dt_tm"];//		공인인증서발급일시
	$orcs_exprt_dt_tm		=	$_POST["orcs_exprt_dt_tm"];//		공인인증서만료일시
?>
<html>
	<head>
	<title>KCB 본인인증 샘플</title>
	</head>
<body>
<?
 	echo ("결과코드		: ".$rst_cd."<br>");
	echo ("거래번호		: ".$hs_cert_svc_tx_seqno."<br>");
	echo ("인증요청코드	: ".$hs_cert_msr_cd."<br>");
	echo ("요청사유		: ".$hs_cert_rqst_caus_cd."<br>");
?>
</body>
</html>
