<?header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
include $_SERVER["DOCUMENT_ROOT"]."/_SuperLog/function.php"; //함수 파일은 호출한다. 사잍, 설치 경로에 따라  폴더변경.
 
#### 페이지 정보에  / . _ -  외의 특수문자를 사용하실 수 없으며 파일명은 한글을 지원하지 않습니다[영문,숫자, 영문 숫자 혼합].
#### 모든 경로는 상대경로가 아닌 도메인을 뺀 절대경로 입니다.



#### 슈퍼로그 사용 
$Cfg_Super_Log_Use="N";// Y / N 로 구분


#### 사이트 명 [수정]
$Cfg_Site_Name = "구로소녀시대";  


#### 슈퍼로그 페이지 [수정]
$Cfg_Super_Log = "/_SuperLog/index.php";  

#### 사이트 원 인증 페이지 [수정]
$Cfg_Self = "http://goggg.co.kr/index.html"; //원사이트 인증페이지의 설정 값도 $_COOKIE["ssSLJumin_chk"] 로 설정 되어 있어야 합니다.

#### 사이트 인증 후 첫페이지 [수정]
$Cfg_Main = "http://goggg.co.kr/xe/main"; 

#### 사이트 인증 결과페이지 [수정]
$Cfg_Result = "/_SuperLog/result.php";

#### 사이트 로고 이미지 경로[수정]
$Cfg_Logo_img ="/xe/layouts/main/files/faceOff/037/178/images/logo.gif";

#### 슈퍼로그 사이트에 신청되어 있는 사이트 주소(도메인)[수정]
$SL_Cookie_Domain="goggg.co.kr"; // http:// 와 www. 와 / 는 제외 하고 입력합니다. [예] $SL_Cookie_Domain="superlog.co.kr";
 
#### 사이트 OK NAME 인증 페이지 [수정]
$Cfg_OkName = "/_SuperLog/okname_chk.php"; 



#### OK NAME 정보
$qryIP = $_SERVER["SERVER_ADDR"];// 회원사 IP 
$qryDomain = "goggg.co.kr";// 회원사 도메인 
$EndPointURL  = "http://www.allcredit.co.kr/KcbWebService/OkNameService";//"http://www.allcredit.co.kr/KcbWebService/OkNameService"; 
$memid = "P13540000000";// 회원사 아이디 
$qryRsnCd = "04";// 조회사유  회원가입 : 01, 회원정보수정 : 02, 회원탈퇴 : 03, 성인인증 : 04, 기타 : 05

if($_COOKIE["ssSLJumin_chk"]==""){ 
	if($Cfg_Super_Log_Use!="Y"){
		 setcookie("ssSLJumin_chk", "ok",  0, "/",".".$SL_Cookie_Domain); 	
		 echo "<meta http-equiv='refresh' content='0; URL=".$Cfg_Self."'>";
		 exit;
	}


	/* 슈퍼로그 서버 응답확인, 변경하지 마세요*/ 
	if(url_validate("http://superlog.co.kr")==false){  
		 if($_COOKIE["ssSLJumin_chk"]==""){ 
			 setcookie("ssSLJumin_chk", "ok",  0, "/",".".$SL_Cookie_Domain); 	
			 echo "<meta http-equiv='refresh' content='0; URL=".$Cfg_Self."'>";
			exit;
		 }
	}
}
?>
