<?
echo $_POST["ssn"]."<br>";
echo $_POST["hs_cert_msr_cd"]."<br>";

/**************************************************************************
okname 파라미터
**************************************************************************/

$ssn = $_POST["ssn"];//                주민번호
$hs_cert_msr_cd = $_POST["hs_cert_msr_cd"];//  인증요청수단코드(00:전체, 10:휴대폰, 20:신용카드, 30:공인인증서)
$filler1 = "";//

$idcf_mbr_com_cd = "0000000000";
$client_ip = "192.168.102.109";
$client_domain = "test.co.kr";

$ebz_svc_tp_cd = "001";//                        서비스구분코드(001:팝업형, 002:임베디드형)
$hs_cert_svc_tx_seqno = "291200020089";//            거래일련번호

//okname을 호출할 파라미터 정보(내부에서 암호화 됨)
$mbphn_no = "mbphn_no";
$card_no = "card_no";
$email = "email";

//okname 실행 정보
$exe = "d:\\okname\\src\\okname.exe";
$server_domain = "tallcredit.kcb4u.com:9088";
$EndPointURL = "http://".$server_domain."/KcbWebService/OkNameService";

$logpath = "./";
$Options = "PL";

$cmd = "$exe $ssn $mbphn_no $card_no $hs_cert_msr_cd $email \"$filler1\" $idcf_mbr_com_cd $client_ip $client_domain $ebz_svc_tp_cd $hs_cert_svc_tx_seqno $EndPointURL $logpath $Options";

echo $cmd."<br>";

/**************************************************************************
okname 실행
**************************************************************************/

//cmd 실행
exec($cmd, $out, $ret);
echo "ret=".$ret."<br>";

/**************************************************************************
okname 응답 정보
**************************************************************************/

$retcode = "";
$retmsg = "";
$hs_cert_svc_tx_seqno = "";
$e_ssn = "";
$e_mbphn_no = "";
$e_card_no = "";
$e_email = "";

if ($ret == 0) {//성공일 경우 변수를 결과에서 얻음
	$retcode = $out[0];
	$retmsg  = $out[1];
	$hs_cert_svc_tx_seqno = $out[2];
	$e_ssn = $out[3];
	$e_mbphn_no = $out[4];
	$e_card_no = $out[5];
	$e_email = $out[6];
}
else
	$retcode = $out[0];


/**************************************************************************
hscert3.php 실행 정보(SOAP호출에서는 사용하지 않고 POPUP시에만 사용함)
**************************************************************************/

$rqst_site_nm = "OKName";// 사이트명 16byte (휴대폰인증번호 송신시 제휴사명에 노출)
$target_id = "";// 타겟ID (팝업오픈 스크립트의 window.name 과 동일하게 설정
$return_url = "http://localhost/hscert3.php";// 본인인증 완료후 리턴될 URL (도메인 포함 full path)
$hs_cert_rqst_caus_cd	=	"00";// 인증요청사유코드 2byte  (00:회원가입, 01:성인인증, 02:회원정보수정, 03:비밀번호찾기, 04:상품구매, 99:기타)
?>


<html>
	<head>
	<title>KCB 본인인증 샘플</title>
	<script>
		function openPop(obj){
		window.name = "";
		// IE8 변경
		//window.open("", "auth_popup", "width=432,height=560,scrollbar=yes");
		document.form1.action = "http://"+obj+"/CommonSvl";
		// IE8 변경
		//document.form1.target = "auth_popup";
		document.form1.method = "post";
		//alert(document.form1.action);
		document.form1.submit();
	}
	</script>
	</head>

 <body>
	<form name="form1">
	<!-- POP-UP 요청 정보정보 -->
	<!--// 필수 항목 -->
	<input type="hidden" name="tc" value="kcb.pis.front.gw.cmd.GW001AuthGWCmd">				<!-- 변경불가-->
	<input type="hidden" name="idcf_mbr_com_cd"			value="<?=$idcf_mbr_com_cd?>">		<!-- 고객사코드 -->
	<input type="hidden" name="hs_cert_svc_tx_seqno"	value="<?=$hs_cert_svc_tx_seqno?>">	<!-- 거래번호 -->
	<input type="hidden" name="ebz_svc_tp_cd"			value="<?=$ebz_svc_tp_cd?>">			<!-- 서비스구분코드 001:팝업형, 002:임베디드형 -->
	<input type="hidden" name="hs_cert_msr_cd"			value="<?=$hs_cert_msr_cd?>">		<!-- 인증요청수단코드 -->
	<input type="hidden" name="ssn"						value="<?=$e_ssn?>">					<!-- 주민번호 -->
	<input type="hidden" name="hs_cert_rqst_caus_cd"	value="<?=$hs_cert_rqst_caus_cd?>">	<!-- 인증요청사유코드 -->

	<input type="hidden" name="rqst_site_nm"			value="<?=$rqst_site_nm?>">			<!-- 사이트명 (휴대폰인증번호 송신시 제휴사명에 노출) -->
	<input type="hidden" name="target_id"				value="<?=$target_id?>">				<!-- 타겟ID --> 
	<input type="hidden" name="return_url"				value="<?=$return_url?>">			<!-- 리턴URL --> 
	<!-- 필수 항목 //-->	

	<!--// 선택 항목 -->
	<input type="hidden" name="email" value="">				<!-- 이메일주소 (고객에게 본인인증 결과 메일을 송신할 경우) - 서비스 예정  -->
	<input type="hidden" name="mbl_tel_cmm_cd" value="">	<!-- 통신사 구분코드 (01:SKT, 02:KTF, 03:LGT) -->
	<input type="hidden" name="mbphn_no" value="">			<!-- 휴대폰번호-->
	<input type="hidden" name="card_no" value="">			<!-- 신용카드번호 -->
	<input type="hidden" name="card_vld_term" value="">		<!-- 신용카드유효기간 YY/MM -->
	<input type="hidden" name="card_pwd" value="">			<!-- 신용카드빌밀번호 앞2자리 -->
	<!-- 선택 항목 //-->

	</form>
 </body>

<?
 	if ($retcode == "B000") {
		//팝업요청
		echo ("<script>openPop(\"$server_domain\");</script>");
	} else {
		//요청 실패 페이지로 리턴
		echo ("<script>alert(\"$retcode\"); window.history.back();</script>");
	}
?>
</html>
