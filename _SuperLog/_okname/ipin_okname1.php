<?php
$name="";
$ssn="";
$memid = "";// 회원사 아이디 
$qryBrcCd = "x"; 
$qryBrcNm = "x"; 
$qryId = "u1234";// 쿼리ID, 현재는 고정값 
$qryKndCd = "1";// 요청구분  개인 : 1, 외국인 : 2 
$qryRsnCd = "01";// 조회사유  회원가입 : 01, 회원정보수정 : 02, 회원탈회 : 03, 성인인증 : 04, 기타 : 05
$qryIP = "";// 회원사 IP 
$qryDomain = "";// 회원사 도메인 
$qryDt = date(Ymd);//<- 현재 시간 함수로 적용하세요.
$EndPointURL  = "http://tallcredit.kcb4u.com:9088/KcbWebService/OkNameService"; 
$logpath = "d:\\okname\\src";
$cmd="d:\\okname\\bin\\win32\\exe\\okname.exe \"$name\" $ssn $memid $qryBrcCd $qryBrcNm $qryId $qryKndCd $qryRsnCd $qryIP $qryDomain $qryDt $EndPointURL $logpath NLX";

echo "$cmd<br>";

exec($cmd, $out, $ret);
echo "ret=$ret<br>";

if($ret == 0) {
	$ci = $out[0];
	$di = $out[1];
	echo "CI=$ci<br>";
	echo "DI=$di<br>";
}
