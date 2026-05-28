<?include $_SERVER["DOCUMENT_ROOT"]."/_SuperLog/SiteInfo.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
</head>
<body>
<?php
$name=$SLName;
$ssn=$SLJumin1.$SLJumin2;
$qryBrcCd = "x"; 
$qryBrcNm = "x"; 
$qryId = "u1234";// 쿼리ID, 현재는 고정값 
$qryKndCd = "1";// 요청구분  개인 : 1, 외국인 : 2 

$qryDt = date(Ymd);//<- 현재 시간 함수로 적용하세요.

$cmd=$_SERVER["DOCUMENT_ROOT"]."/_SuperLog/_okname/exe/okname  \"$name\" $ssn $memid $qryBrcCd $qryBrcNm $qryId $qryKndCd $qryRsnCd $qryIP $qryDomain $qryDt $EndPointURL UD";
  



//echo "$cmd<br>";

exec($cmd, $out, $ret);
foreach($out as $a => $b) {
	//echo "$b";
}

//echo "ret=$ret<br>";

if($ret <=200)
	$result=sprintf("B%03d", $ret);
else
	$result=sprintf("S%03d", $ret);

//echo $result.'<br>';
?>
</body>
</html>
<?

 if($result=='B000'){
			?>
			
			<form id="SLFrm" name="SLFrm" method="post" action="<?=$NxPg?>" onSubmit="return go_submit();" target="_top">
			 
			<input type="hidden" name="SLName"   value="<?=$SLName?>">
			<input type="hidden" name="SLJumin1"  value="<?=$SLJumin1?>" >
			<input type="hidden" name="SLJumin2"  value="<?=$SLJumin2?>" >
			<input type="hidden" name="group_no"  value="1" > 
			</form> 
			<script>

			document.SLFrm.submit();
			</script>


	<?		exit;
		}else if ($result=="B001" || $result=="B002"){
			?>
			<script src="http://www.ok-name.co.kr/member/js/okname.js" type="text/javascript" language="javascript1.5"></script>
			<script>
				alert("입력하신 성명과 주민번호가 일치하지 않습니다..");
				KCB_okNameGuide();
			</script>
			<?
				exit;
		}else if ($result=="B003"){
				?> 
			<script>
				alert("주민번호 형식 체계 오류입니다.");
			</script>
			<?
			exit;
		}else{
			?> 
			<script>
				alert("[<?=$result?>]오류입니다.\n관리자에게 문의 해 주십시요.");
			</script>
			<?
				exit; 
		}
?>
