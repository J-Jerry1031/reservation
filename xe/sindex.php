<?include $_SERVER["DOCUMENT_ROOT"]."/_SuperLog/SiteInfo.php";?>
<html>
<head>
<title>슈퍼로그 성인인증 </title>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<? 

    
if($_COOKIE["SLJumin_chk"]=="" && $mode==""){

?>
<body>
<form id="SLFrmFI" name="SLFrmFI" method="post" action="http://superlog.co.kr/_SuperLog/super_log_chk_flow_in.php">
<input type="hidden" name="SLMode" value="flow_in">
<input type="hidden" name="SLType" value="PHP"> 
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
if($_COOKIE["SLJumin_chk"]!=""){ //쿠키가 있을 경우
//echo  $_COOKIE["SLJumin_chk"] ;
	echo "<meta http-equiv='refresh' content='0; URL=".$Cfg_Main."'>";
	exit;
}
?> 

<script>
function zb_login_check_submit() {
  if(!document.zb_login.user_id.value) {
   alert("ID를 입력하여 주십시요");
   document.zb_login.user_id.focus();
   return false;
  }
  if(!document.zb_login.password.value) {
   alert("Password를 입력하여 주십시요");
   document.zb_login.password.focus();
   return false;
  }  
  return true;
 } 


function autonext(vl, nextform) {
	if(vl.value.length == vl.smax) {  
		nextform.focus();    
		nextform.select();     
	}
}

function go_submit()
{
	var frm = document.SLFrm;
	 val1=frm.SLJumin1;
	 val2=frm.SLJumin2;
	 
	 if(frm.SLName.value=="")
	 {
		alert("이름을 입력해 주세요.");
		frm.SLName.focus();	
		return true;
	}
	 
	 if (val1.value == "")
	 {
		alert("주민등록 번호를 입력해 주세요.");	
		val1.focus();
		return true;
	  }

	 if (val2.value == "")
	 {
		alert("주민등록 번호를 입력해 주세요.");
		val2.focus();
		return true;
	  }
	 
	 if (val1.value.length < 6 || val2.value.length < 7)
	 {
		alert("주민등록 번호를 입력해 주세요.");
		val1.focus();
		return true;
	}
	var chk =0
	var yy = val1.value.substring(0,2)
	var mm = val1.value.substring(2,4)
	var dd = val1.value.substring(4,6)
	var Sex = val2.value.substring(0,1)

 	if ((val1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){
    		alert ("주민등록번호를 바로 입력하여 주십시오.");
    		val1.focus();
    		return false;
  	}

  	if ((Sex != 1 && Sex !=2 )||(val2.value.length != 7 )){
    		alert ("주민등록번호를 바로 입력하여 주십시오.");
    		val2.focus();
    		return false;
  	}   
	
  	for (var i = 0; i <=5 ; i++){ 
		chk = chk + ((i%8+2) * parseInt(val1.value.substring(i,i+1)))
 	}

  	for (var i = 6; i <=11 ; i++){ 
        	chk = chk + ((i%8+2) * parseInt(val2.value.substring(i-6,i-5)))
 	}

  	chk = 11 - (chk %11)
  	chk = chk % 10

  	if (chk != val2.value.substring(6,7)){
    		alert ("유효하지 않은 주민등록번호입니다.");
    		val1.focus();
    		return false;
  	}
	 
}
</script>
<body style="padding: 100px 0px 0px 0px">
<table width="690" align="center" cellpadding="0"  cellspacing="0">
  <tr>
    <td><img src="<?=$Cfg_Logo_img?>"  ></td>
  </tr>
  <tr>
    <td style="padding: 34px 0px 31px 0px"><table width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="179"><img src="img/19.gif" width="132" height="123" hspace="16"></td>
        <td><img src="img/19_tx.gif" width="496" height="76" border="0" usemap="#Map"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" cellpadding="0"  cellspacing="0" bordercolor="f9f9f9">
      <tr>
        <td width="16"><img src="img/mo1.gif" width="16" height="18"></td>
        <td background="img/mo1_bg.gif">&nbsp;</td>
        <td width="16"><img src="img/mo2.gif" width="16" height="18"></td>
      </tr>
      <tr>
        <td background="img/mo4_bg.gif">&nbsp;</td>
        <td bgcolor="f9f9f9"><table width="100%"  cellspacing="0" cellpadding="0">
          <tr valign="top">
            <td width="316" height="26"><img src="img/smt1.gif" width="79" height="14" hspace="11"></td>
            <td width="17" rowspan="2">&nbsp;</td>
            <td rowspan="2"><table width="312" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="img/super_logo.gif" width="163" height="29"></td>
                            <td width="56" align="right"class="t11"><a href="http://superlog.co.kr/01_intro/sub1.htm" >슈퍼로그란?</a></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" >



                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

<iframe id="hiddenFrm" frameborder="0"   width="0" height="0" scrolling="no"  name="hiddenFrm" style="display:none"></iframe> 
<form id="SLFrm" name="SLFrm" method="post" action="<?=$Cfg_OkName?>" onSubmit="return go_submit();" target="hiddenFrm">

 
<input type="hidden" name="Cfg_Super_Log" value="<?=$Cfg_Super_Log?>">
<input type="hidden" name="Cfg_Self" value="<?=$Cfg_Self?>">
<input type="hidden" name="Cfg_Main" value="<?=$Cfg_Main?>">
<input type="hidden" name="Cfg_Result" value="<?=$Cfg_Result?>">
<input type="hidden" name="SL_Cookie_Domain" value="<?=$SL_Cookie_Domain?>">
<input type="hidden" name="SLMode" value="direct">  
<input type="hidden" name="SLType" value="PHP"> 


 
                   


                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="72"><img src="img/f1.gif" width="24" height="13"></td>
                                        <td><input type="text" name="SLName" maxlength="5" style="width:177px; " class=input4></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td height="5"></td>
                                      </tr>
                                      <tr>
                                        <td><img src="img/f2.gif" width="62" height="13"></td>
                                        <td><input type="text" name="SLJumin1" maxlength="6" style="width:80px; "  smax="6" onKeyUp="autonext(this, SLJumin2);"class=input4>
                              -
                                <input type="text" name="SLJumin2" maxlength="7" style="width:83px; "class=input4></td>
                                      </tr>
                                  </table></td>
                                  <td width="11">&nbsp;</td>
                                  <td width="53"><input type="image" border=0 src="img/3b_but1.gif" width="53" height="53"></td>
                                </tr>  </form>
                            </table></td>
                          </tr>
                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td class="t11" style="padding: 5 0 14 0"><input type="checkbox" name="SLAuth" value="Y">
                        슈퍼로그 인증 유지하기</td>
                                </tr>
                                <tr>
                                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td valign="top"><table width="10" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td height="54" valign="top" class="t11_2">- <br><br></td>
                                            </tr>
                                            <tr>
                                              <td height="30" valign="top" class="t11_2">-<br>
                                              </td>
                                            </tr>
                                        </table></td>
                                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td height="54" class="t11_2">슈퍼로그 인증 유지하기를 체크하시면 슈퍼로그 패밀리사이트 <br>
                                                이용 시 반복적인 성인인증 없이 사이트 이용이 가능하며, 컴퓨터의 전원을 껐다 켜도 인증이 유지됩니다.</td>
                                            </tr>
                                            <tr>
                                              <td height="30" class="t11_2">슈퍼로그 해제는 <?=$Cfg_Site_Name?> 하단에 있는 [슈퍼로그 로고]를 클릭 <br>
                                                하시기 바랍니다.</td>
                                            </tr>
                                        </table></td>
                                      </tr>

									
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr valign="top">
            <td style="padding: 0px 0px 2px 4px"><table width="100%" border="0" cellpadding="0"  cellspacing="1" bgcolor="f1f1f1">
              <tr>
                <td bgcolor="#FFFFFF" style="padding: 22 26 24 25"><table width="100%"  cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="23" valign="top"><img src="img/in_tx1.gif" width="234" height="15" ></td>
                  </tr>
                  <tr>
                    <td><TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="100%">
                      <TBODY>





<script type="text/javascript"> 
    var keep_signed_msg = "브라우저를 닫더라도 로그인이 계속 유지될 수 있습니다.\n\n로그인 유지 기능을 사용할 경우 다음 접속부터는 로그인을 하실 필요가 없습니다.\n\n단, 게임방, 학교 등 공공장소에서 이용시 개인정보가 유출될 수 있으니 꼭 로그아웃을 해주세요";
    xAddEventListener(window, "load", function(){ doFocusUserId("fo_login_widget"); });
</script>
 
 <img class="zbxe_widget_output" widget="login_info" skin="xe_official" colorset="default" />

<fieldset id="login" class="login">
<legend>로그인</legend>
<form action="../xe" method="get" onsubmit="return procFilter(this, widget_login)" id="fo_login_widget">
 
    <div class="idpwWrap">
        <div class="idpw">
            <input name="user_id" type="text" title="user id" onfocus="this.className='idOn';" onblur="if (!this.value) this.className='idOff'" class="idOff" />
            <input name="password" type="password" title="password" onfocus="this.className='passOn';" onblur="if (!this.value) this.className='passOff'" class="passOff" />
        </div>
        <input type="image" src="/xe/widgets/login_info/skins/xdom_login_v2/images/buttonLogin.gif" alt="login" title="login" class="login" />
    </div>
    <!--<p class="save">
        <input type="checkbox" name="keep_signed" id="keepid" value="Y" onclick="return confirm(keep_signed_msg);" />
        <label for="keepid" title="로그인 유지" >로그인 유지</label>-->
 
 
            <!--</p>-->
    <ul class="help">
        <li class="first-child"><a href="http://www.goggg.co.kr/xe/?mid=kissme&amp;user_id=test12345&amp;password=testtest&amp;x=52&amp;y=19&amp;act=dispMemberSignUpForm" title="회원 가입">회원 가입</a></li>
        <li><a href="http://www.goggg.co.kr/xe/?mid=kissme&amp;user_id=test12345&amp;password=testtest&amp;x=52&amp;y=19&amp;act=dispMemberFindAccount" title="아이디/비밀번호 찾기">아이디/비밀번호 찾기</a></li>
    </ul>
</form> 
</fieldset>
 
<!-- OpenID -->
 
<script type="text/javascript"> 
  xAddEventListener(window, "load", function(){ doFocusUserId("fo_login_widget"); });
</script>


 


<form  action="http://www.goggg.co.kr/xe/" method="get" onsubmit="return procFilter(this, widget_login)" id="fo_login_widget" >
 
 
<img src="./images/blank.gif" class="zbxe_widget_output" widget="login_info" skin="xe_official" colorset="default"  />




<INPUT value="kissme" type=hidden name=mid>  
 


                        <TR>
                          <TD width=143><TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="90%">
                              <TBODY>
                                <TR>
                                  <TD height=22><INPUT 
                                style="BACKGROUND-IMAGE: url(./img/id.gif); WIDTH: 130px; HEIGHT: 19px"  class=input2  onfocus="this.style.backgroundImage = 'url(none)'"    name=user_id></TD>
                                </TR>
                                <TR>
                                  <TD height=25><SPAN class=t11_6>
                                    <INPUT 
                                style="BACKGROUND-IMAGE: url(./img/pw.gif); WIDTH: 130px; HEIGHT: 19px"   class=input2  onfocus="this.style.backgroundImage = 'url(none)'"   type=password name=password>
                                  </SPAN></TD>
                                </TR>
                              </TBODY>
                          </TABLE></TD>
                          <TD vAlign=top ><input type="image"   border=0  src="img/b_login.gif"   width=114 height=51 type=image>
                              <!--<img src='/19/img/login_button.gif' onclick='go_login();' style='cursor:hand'>--></TD>
                        </TR>
						</form>
                      </TBODY>
                    </TABLE>
					
 
				
					</td>
                  </tr> 
                  <tr>
                    <td><a href="http://www.goggg.co.kr/xe/?mid=kissme&act=dispMemberSignUpForm" title="회원 가입"><img src="img/b_join.gif" width="57" height="24" hspace="3" border=0></a><a href="http://www.goggg.co.kr/xe/?mid=kissme&act=dispMemberFindAccount" title="아이디/비밀번호 찾기"><img src="img/b_idpw.gif" width="103" height="24" border=0></a></td>
                  </tr>
                  <tr>
                    <td><img src="img/in_tx2.gif" width="174" height="13" vspace="7"></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            </tr>
        </table></td>
        <td background="img/mo2_bg.gif">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="img/mo4.gif" width="16" height="18"></td>
        <td background="img/mo3_bg.gif">&nbsp;</td>
        <td><img src="img/mo3.gif" width="16" height="18"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="img/copy.gif"  height="12" vspace="15"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="390,52,492,73" href="http://daum.net" target="_blank">
</map>
</body>
</html>












 