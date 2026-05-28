KCB 실명확인 OKname PHP Version Sample Page<br>
<?php
	@$name=$_POST['name'];
	@$ssn=$_POST['ssn'];
	@$memid=$_POST['memid'];
	@$qryIP=$_POST['qryIP'];
	@$qryDomain=$_POST['qryDomain'];
	@$qryKndCd=$_POST['qryKndCd'];
	@$qryRsnCd=$_POST['qryRsnCd'];
	@$EndPointURL=$_POST['EndPointURL'];

	// 지점이 없는 회사는 x
	$qryBrcCd = "x"; 
	$qryBrcNm = "x"; 
	// 다음 항목은 회원사 공통 
	$qryId = "u1234";// 쿼리ID, 현재는 고정값 
	// 현재 날짜 
	$qryDt = date(Ymd);//<- 현재 시간 함수로 적용하세요.

	// 화면에 PHP에러메세지 출력
	ini_set('display_errors', '1');

	$exe = $_SERVER["DOCUMENT_ROOT"]."/_SuperLog/_okname/exe/okname";//"d:\\oknameweb\\okname.exe";

	if(empty($name) || empty($ssn)) {
?>
		<form method="post" action="okname2.php">
		<table>
		<tr>
		<td>이름</td><td><input type="text" name="name"></td>
		</tr>
		<tr>
		<td>주민번호(숫자만)</td><td><input type="text" name="ssn"></td>
		</tr>
		<tr>
		<td>회원사ID</td><td><input type="text" name="memid" value="P08800000000"></td>
		</tr>
		<tr>
		<td>회원사DOMAIN</td><td><input type="text" name="qryDomain" value="clubeyes.net"></td>
		</tr>
		<tr>
		<td>회원사IP</td><td><input type="text" name="qryIP" value="<?=$_SERVER["SERVER_ADDR"]?>"></td>
		</tr>
		<tr>
		<td>내/외국인 구분</td><td> 
					<input type="radio" name="qryKndCd" value="1" checked>내국인
				<input type="radio" name="qryKndCd" value="2">외국인</td>
		</tr>
		<tr>
		<td>요청 구분</td><td>
				<input type="radio" name="qryRsnCd" value="01" checked>회원가입
				<input type="radio" name="qryRsnCd" value="02">회원정보수정
				<input type="radio" name="qryRsnCd" value="03">회원탈회
				<input type="radio" name="qryRsnCd" value="04">성인인증
				<input type="radio" name="qryRsnCd" value="05">기타</td>
		</tr>
		<tr>
			<td>
			EndPointURL</td>
			<td><input type="text" name="EndPointURL" size=80 value="http://www.allcredit.co.kr/KcbWebService/OkNameService">
			</td>
		</tr>
		<tr><td>
		<input type="submit" value="확인"><td>http://tallcredit.kcb4u.com:9088/KcbWebService/OkNameService은 테스트(TEST) 서버 URL입니다.</td>
		</td></tr>
		<tr><td>&nbsp;</td><td>http://www.allcredit.co.kr/KcbWebService/OkNameService은 운영(REAL) 서버 URL입니다.</td>
		</tr>
		</table>
		</form>	

<?php	
}
else {
	echo '<br>';
	//###########################################################################
	// KCB OKNAME 암호화 SOAP 통신
	// 콤포넌트가 있는지 체크
	$exist=file_exists($exe);
	if(!$exist) {
		echo "$exe 콤포넌트가 없습니다. 파일 경로를 확인하세요.<br><br>";
	}
	else {
		$cmd="$exe \"$name\" $ssn $memid $qryBrcCd $qryBrcNm $qryId $qryKndCd $qryRsnCd $qryIP $qryDomain $qryDt $EndPointURL";
		
		echo $cmd.'<br>';
		//system($cmd,$ret);
		exec($cmd, $out, $ret);
		echo 'ret='.$ret.'<br>';
		if($ret <=200)
			$result=sprintf("B%03d", $ret);
		else
			$result=sprintf("S%03d", $ret);
		//###########################################################################
		
		echo "<br>이름: $name<br>";
		echo "주민번호(숫자만): $ssn<br>";
		echo "회원사ID: $memid<br>";
		echo "회원사Domain: $qryDomain<br>";
		echo "회원사IP: $qryIP<br>";
		echo "내/외국인 구분: $qryKndCd (요청구분  개인 : 1, 외국인 : 2)<br>";
		echo "요청 구분: $qryRsnCd (조회사유  회원가입 : 01, 회원정보수정 : 02, 회원탈회 : 03, 성인인증 : 04, 기타 : 05)<br>";
	
		echo "<br>chkName result: $result<br>";
		echo '<br>';

		if($result=='B000'){
			echo "인증완료";
		}else if ($result=="B001" || $result=="B002"){
			?>
			<script src="http://www.ok-name.co.kr/member/js/okname.js" type="text/javascript" language="javascript1.5"></script>
			<script>
				KCB_okNameGuide();
			</script>
			<?
		}else if ($result=="B003"){
				echo "주민번호 형식 체계 오류입니다.";
		}else{
				echo "오류입니다.".$result;
		}
	}	
}


?>
 
 