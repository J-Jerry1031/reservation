<?include $_SERVER["DOCUMENT_ROOT"]."/_SuperLog/SiteInfo.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

$cmd=$_SERVER["DOCUMENT_ROOT"]."/_SuperLog/_okname/exe/okname  \"$name\" $ssn $memid $qryBrcCd $qryBrcNm $qryId $qryKndCd $qryRsnCd $qryIP $qryDomain $qryDt $EndPointURL DU";

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
<?

 if($result=='B000'){
			?>
			
			<form id="SLFrm" name="SLFrm" method="post" action="http://superlog.co.kr/_SuperLog/super_log_chk.php" onSubmit="return go_submit();" target="_top">
			<input type="hidden" name="Cfg_Super_Log" value="<?=$Cfg_Super_Log?>">
			<input type="hidden" name="Cfg_Self" value="<?=$Cfg_Self?>">
			<input type="hidden" name="Cfg_Main" value="<?=$Cfg_Main?>">
			<input type="hidden" name="Cfg_Result" value="<?=$Cfg_Result?>">
			<input type="hidden" name="SL_Cookie_Domain" value="<?=$SL_Cookie_Domain?>">
			<input type="hidden" name="SLMode" value="<?=$SLMode?>">  
			<input type="hidden" name="SLType" value="<?=$SLType?>"> 
			<input type="hidden" name="SLName"   value="<?=$SLName?>">
			<input type="hidden" name="SLJumin1"  value="<?=$SLJumin1?>" >
			<input type="hidden" name="SLJumin2"  value="<?=$SLJumin2?>" >
			<input type="hidden" name="SLAuth"  value="<?=$SLType?>"> 
			</form> 
			<script>

			document.SLFrm.submit();
			</script>


	<?		exit;
		}else if ($result=="B001" || $result=="B002"){
			?>
			<script src="http://www.ok-name.co.kr/member/js/okname.js" type="text/javascript" language="javascript1.5"></script>
			<script>
				//alert("입력하신 성명과 주민번호가 일치하지 않습니다..");
				window.open("http://www.ok-name.co.kr/oknm/okname.jsp?restCode=<?=$result?>", "KCB_GuideView", "toolbar=no,directories=no,scrollbars=no,resizable=no,status=no, menubar=no, width=560, height=416, top=0,left=20");
			</script>
			<?
				exit;
		}else if ($result=="B003"){
				?> 
			<script>
				//window.open("http://www.ok-name.co.kr/oknm/okname.jsp?restCode=<?=$result?>", "KCB_GuideView", "toolbar=no,directories=no,scrollbars=no,resizable=no,status=no, menubar=no, width=560, height=416, top=0,left=20");

				 alert("주민번호 형식 체계 오류입니다.");
			</script>
			<?
			exit;
		 }else if ($result=="B016"){
				?> 
				 <script>
		window.open("http://www.ok-name.co.kr/oknm/okname.jsp?restCode=<?=$result?>", "KCB_GuideView", "toolbar=no,directories=no,scrollbars=no,resizable=no,status=no, menubar=no, width=560, height=416, top=0,left=20");
       
				//alert("명의보호서비스 가입자입니다.");
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