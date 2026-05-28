<?
// 파라미터 정의
//$exe = "d:\\okname\\bin\\win32\\exe\\okname";
//$keypath = "d:\\okname\\src\\okname.key";
//$logpath = "d:\\okname\\src\\";
//$option = "KL";

$exe = "d:\\okname\\bin\\win32\\exe\\okname";
$keypath = "d:\\okname\\src\\okname.key";
$memid = "P00000000000";//memid
$reserved1 = "0";//reserved1
$reserved2 = "0";//reserved2
$EndPointURL = "http://tallcredit.kcb4u.com:9088/KcbWebService/OkNameService";//EndPointURL, 테스트 서버
//$EndPointURL = "http://www.allcredit.co.kr/KcbWebService/OkNameService";// 운영 서버
$logpath = "d:\\okname\\src\\";
$option = "CL";

// 명령어
//$cmd = "$exe $keypath $logpath $option";// K모드일 경우
$cmd = "$exe $keypath $memid %reserved1 $reserved2 $EndPointURL $logpath $option";
echo "$cmd<br>";

// 실행
exec($cmd, $out, $ret);

foreach($out as $a => $b) {
	if($a == 0)// 결과중 첫번째 라인
		echo "Client PublicKey(PHP): $b<br>";
	else if($a == 1)// 결과중 두번째 라인
		echo "Client Signature(PHP): $b<br>";
	else if($a == 2)// 결과중 마지막 라인
		echo "Time: $b<br>";
}
?>
