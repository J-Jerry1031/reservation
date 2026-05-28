<?include  "./SiteInfo.php";    //사이트에 맞게 경로 조정해 주세요. ?>
<?

$OKMode=base64_decode($OKMode);
$OKMode=explode("|",$OKMode);
$OKMode=$OKMode[1];
//echo $OKMode;
//exit;
if($OKMode=="FISessionsOk"){ //체크정보가 있을 경우
		setcookie("ssSLJumin_chk", "3",  0, "/",".".$SL_Cookie_Domain); 		 
		echo " <script>location.href='".$Cfg_Main."';</script>";
		exit;
}elseif($OKMode=="direct"){ //체크정보가 있을 경우 
		echo " <script> location.href='".$Cfg_Super_Log."?mode=d';</script>";
		exit;
}elseif($OKMode=="checkOk"||$_GET[OKMode]=="checkOk"){ //다이렉트 체크 확인
		setcookie("ssSLJumin_chk", "5",  0, "/",".".$SL_Cookie_Domain); 	
		echo "<script> location.href='".$Cfg_Main."';</script>";
		exit; 
}else{ //체크정보가 없을 경우
	echo "<script> location.href='".$Cfg_Super_Log."?mode=d';</script>";
	exit; 
} 
?>
<html>
<head>
<title>슈퍼로그 성인인증 </title> 


</head>
<body>
</body>

</html>