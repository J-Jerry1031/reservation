<?include  "/home/hosting_users/kk33jj4/www/_SuperLog/SiteInfo.php"; 

if($_COOKIE["ssSLJumin_chk"]==""){
	
	?>
<html>
<head>
<title>슈퍼로그 성인인증 </title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<body>
	<form id="SLFrmFI" name="SLFrmFI" method="post" action="http://superlog.co.kr/_SuperLog/super_log_chk_flow_in.php">
	<input type="hidden" name="SLType" value="<?=$Cfg_SLType?>">
	<input type="hidden" name="SLMode" value="flow_in">
	<input type="hidden" name="Cfg_Super_Log" value="<?=$Cfg_Super_Log?>">
	<input type="hidden" name="Cfg_Self" value="<?=$Cfg_Self?>">
	<input type="hidden" name="Cfg_Main" value="<?=$Cfg_Main?>">
	<input type="hidden" name="Cfg_Result" value="<?=$Cfg_Result?>">
	<input type="hidden" name="SL_Cookie_Domain" value="<?=$SL_Cookie_Domain?>">
	</form> 
	<script>
		document.SLFrmFI.submit();
	</script>
</body> 
</html>
	<?	  
	exit;   
} 
?>