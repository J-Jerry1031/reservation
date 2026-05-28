<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
</head>
<body>
okname 테스트 PHP<br>
<?php
$name="";
$ssn="";
$qryBrcCd = "x"; 
$qryBrcNm = "x"; 
$qryId = "u1234";// 쿼리ID, 현재는 고정값 
$qryKndCd = "1";// 요청구분  개인 : 1, 외국인 : 2 

$qryDt = date(Ymd);//<- 현재 시간 함수로 적용하세요.

$cmd=$_SERVER["DOCUMENT_ROOT"]."/_SuperLog/_okname/exe/okname  \"$name\" $ssn $memid $qryBrcCd $qryBrcNm $qryId $qryKndCd $qryRsnCd $qryIP $qryDomain $qryDt $EndPointURL D";

echo "$cmd<br>";

exec($cmd, $out, $ret);
foreach($out as $a => $b) {
	echo "$b";
}

echo "ret=$ret<br>";

if($ret <=200)
	$result=sprintf("B%03d", $ret);
else
	$result=sprintf("S%03d", $ret);

echo $result.'<br>';
?>
</body>
</html>
