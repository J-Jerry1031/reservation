<?
// 파라미터 정의
//$exe = "d:\\okname\\bin\\win32\\exe\\okname";
//$keypath = "d:\\okname\\src\\okname.key";
//$cpubkey = "AgTZHm/JrvbNZ3HHJJnlmBCymNrK8g==";
//$csig = "pAZQb3brnUhaKi+UoOC26g==";
//$encdata = "6hSokv1yhV3RXfh6khB7p8ZJKtKwts3cDNaMTOWLtOjtrqMkbeP2PbcFjx1NLwyTxieSw2cLktCb4xEBgCMLM9J0bBSefANiZb1gNxr0DPso9zzNEgheWKH8F8gDRzvKu/4XdhZqbJ9Cn7ySNMSJAEeLXRdpmKWhDPC5K6p9wCkQtLhzujfu3r8dYpjGpgfw+dsWMwCrPtUgRllkbRelCK4p4GxkyzgqWvaIejFnff2hODU9sghXUrl7cpMPFmENu8FzDHpQ36LPSjnGN6QS/AD9UD5B04Bgz2O86ZELXaAM";
//$logpath = "d:\\okname\\src\\";
//$option = "IL";

$exe = "d:\\okname\\bin\\win32\\exe\\okname";
$keypath = "d:\\okname\\src\\okname.key";
$cpCode    = "P00000000000";//중복가입확인정보 생성을 위한 사이트 식별번호
$EndPointURL = "http://tallcredit.kcb4u.com:9088/KcbWebService/OkNameService";//EndPointURL, 테스트 서버
//$EndPointURL = "http://www.allcredit.co.kr/KcbWebService/OkNameService";// 운영 서버
$cpubkey = "AgTZHm/JrvbNZ3HHJJnlmBCymNrK8g==";
$csig = "pAZQb3brnUhaKi+UoOC26g==";
$encdata = "6hSokv1yhV3RXfh6khB7p8ZJKtKwts3cDNaMTOWLtOjtrqMkbeP2PbcFjx1NLwyTxieSw2cLktCb4xEBgCMLM9J0bBSefANiZb1gNxr0DPso9zzNEgheWKH8F8gDRzvKu/4XdhZqbJ9Cn7ySNMSJAEeLXRdpmKWhDPC5K6p9wCkQtLhzujfu3r8dYpjGpgfw+dsWMwCrPtUgRllkbRelCK4p4GxkyzgqWvaIejFnff2hODU9sghXUrl7cpMPFmENu8FzDHpQ36LPSjnGN6QS/AD9UD5B04Bgz2O86ZELXaAM";
$logpath = "d:\\okname\\src\\";
$option = "SL";

$field_name_IPIN_DEC = array(
	"dupInfo        ",/* 0*/
	"coinfo1        ",/* 1*/
	"coinfo2        ",/* 2*/
	"ciupdate       ",/* 3*/
	"virtualNo      ",/* 4*/
	"cpCode         ",/* 5*/
	"realName       ",/* 6*/
	"cpRequestNumber",/* 7*/
	"age            ",/* 8*/
	"sex            ",/* 9*/
	"nationalInfo   ",/* 10*/
	"birthDate      ",/* 11*/
	"authInfo       ",/* 12*/
);

// 명령어
$cmd = "$exe $keypath $cpubkey $csig $encdata $logpath $option"; // I모드일 경우
$cmd = "$exe $keypath $cpCode $EndPointURL $cpubkey $csig $encdata $logpath $option";
echo "$cmd<br>";

// 실행
exec($cmd, $out, $ret);

// 결과라인에서 값을 추출
foreach($out as $a => $b) {
	if($a < 13) {
		$field[$a] = $b;
	}
}

// 추출된 값 프린트
foreach($field as $a => $b) {
	echo $field_name_IPIN_DEC[$a].": ".$field[$a]."<br>";
}
?>
