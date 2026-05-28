<? 
 

	echo "<div align=center><br>";
?>

<script>
 

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

<meta http-equiv=Content-Type content=text/html; charset=EUC-KR>
	<link rel=StyleSheet HREF=style.css type=text/css title=style>
<center>
<table border=0 cellspacing=1 cellpadding=0 width=520>
 
  <tr><td colspan=2><img src=images/member_joinin.gif><br><br></td></tr>
</table>

<br><BR><BR><BR>
<table  border="0" cellspacing="0" cellpadding="0">
<form id="SLFrm" name="SLFrm" method="post" action="/_SuperLog/okname_chk_mem.php" onSubmit="return go_submit();"  >
<input type="hidden" name='NxPg' value="/bbs/member_join2.php">
 
                                <tr>
                                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="72"><img src="/_SuperLog/img/f1.gif" width="24" height="13"></td>
                                        <td><input type="text" name="SLName" maxlength="5" style="width:177px; " class=input4></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td height="5"></td>
                                      </tr>
                                      <tr>
                                        <td><img src="/_SuperLog/img/f2.gif" width="62" height="13"></td>
                                        <td><input type="text" name="SLJumin1" maxlength="6" style="width:80px; "  smax="6" onKeyUp="autonext(this, SLJumin2);"class=input4>
                              -
                                <input type="text" name="SLJumin2" maxlength="7" style="width:83px; "class=input4></td>
                                      </tr>
                                  </table></td>
                                  <td width="11">&nbsp;</td>
                                  <td width="53"><input type="image" border=0 src="/_SuperLog/img/3b_but1.gif" width="53" height="53"></td>
                                </tr>  </form>
                            </table>
							</center>