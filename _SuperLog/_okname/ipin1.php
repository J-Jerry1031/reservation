<?
//KCB 개발서버를 호출할 경우
//$idpUrl    = "https://dipin.ok-name.co.kr/tis/ti/POTI90B_SendCertInfo.jsp";
//KCB 테스트서버를 호출할 경우
$idpUrl    = "https://tipin.ok-name.co.kr:8443/tis/ti/POTI90B_SendCertInfo.jsp";
//KCB 운영서버를 호출할 경우
//$idpUrl    = "https://ipin.ok-name.co.kr/tis/ti/POTI90B_SendCertInfo.jsp";
$returnUrl = "http://localhost/ipin2.php"; //웹사이트가 PERSONALINFO를 RECEIVE하는 페이지

$idpCode   = "V";//웹사이트 선호본인확인기관(KCB기관)코드
$cpCode    = "P00000000000";//중복가입확인정보 생성을 위한 사이트 식별번호

// 파라미터 정의
/*
$exe = "d:\\okname\\bin\\win32\\exe\\okname";
$keypath = "d:\\okname\\src\\okname.key";
$logpath = "d:\\okname\\src\\";
$option = "KL";
*/
$exe = "d:\\okname\\bin\\win32\\exe\\okname.exe";//exe
$keypath = "d:\\okname\\src\\okname.key";//keypath
$memid = $cpCode;//memid
$reserved1 = "0";//reserved1
$reserved2 = "0";//reserved2
$EndPointURL = "http://tallcredit.kcb4u.com:9088/KcbWebService/OkNameService";//EndPointURL, 테스트 서버
//$EndPointURL = "http://www.allcredit.co.kr/KcbWebService/OkNameService";// 운영 서버
$logpath = "d:\\okname\\src\\";// logpath
$option = "CL";// Option

// 명령어
$cmd = "$exe $keypath $memid %reserved1 $reserved2 $EndPointURL $logpath $option";
//$cmd = "$exe $keypath $logpath $option";
echo "$cmd<br>";

// 실행
exec($cmd, $out, $ret);

$pubkey = "";
$sig = "";
$curtime = "";

foreach($out as $a => $b) {
	if($a == 0)// 결과중 첫번째 라인
		$pubkey = $b;
	else if($a == 1)// 결과중 두번째 라인
		$sig = $b;
	else if($a == 2)// 결과중 마지막 라인
		$curtime = $b;
}

/*
echo "$pubkey<br>";
echo "$sig<br>";
echo "$curtime<br>";
*/
?>
<html>
<head>
<script language="JavaScript">
//<!--
function certKCBIpin(){
	var popupWindow = window.open( "", "kcbPop", "left=200, top=100, status=0, width=450, height=550" );
	document.kcbInForm.target = "kcbPop";
	
	//KCB 개발서버를 호출할 경우
	//document.kcbInForm.action = "https://dipin.ok-name.co.kr/tis/ti/POTI90B_SendCertInfo.jsp";
	//KCB 테스트서버를 호출할 경우
  document.kcbInForm.action = "https://tipin.ok-name.co.kr:8443/tis/ti/POTI01A_LoginRP.jsp";

  //KCB 운영서버를 호출할 경우
	//document.kcbInForm.action = "https://ipin.ok-name.co.kr/tis/ti/POTI01A_LoginRP.jsp";

	document.kcbInForm.submit();
	popupWindow.focus();	
	return;	
}
//-->
</script>

<%--
**************************************************************************************
* 자바스크립트 끝
**************************************************************************************
--%>
</head>
<body>
	<input type="button" value="아이핀" onclick="certKCBIpin()"/>
	<form name="kcbInForm" method="post" >
		<input type="hidden" name="IDPCODE" value="<?=$idpCode?>" />
		<input type="hidden" name="IDPURL" value="<?=$idpUrl?>" />
		<input type="hidden" name="CPCODE" value="<?=$cpCode?>" />	
		<input type="hidden" name="CPREQUESTNUM" value="<?=$curtime?>" />
		<input type="hidden" name="RETURNURL" value="<?=$returnUrl?>" />
		<input type="hidden" name="WEBPUBKEY" value="<?=$pubkey?>" />
		<input type="hidden" name="WEBSIGNATURE" value="<?=$sig?>" />
	</form>	
	<form name="kcbOutForm" method="post">
		<input type="hidden" name="encPsnlInfo" />
		<input type="hidden" name="virtualno" />
		<input type="hidden" name="dupinfo" />
		<input type="hidden" name="realname" />
		<input type="hidden" name="cprequestnumber" />
		<input type="hidden" name="age" />
		<input type="hidden" name="sex" />
		<input type="hidden" name="nationalinfo" />
		<input type="hidden" name="birthdate" />
		<input type="hidden" name="coinfo1" />
		<input type="hidden" name="coinfo2" />
		<input type="hidden" name="ciupdate" />
		<input type="hidden" name="cpcode" />
		<input type="hidden" name="authinfo" />
	</form>
</body>
</html>
