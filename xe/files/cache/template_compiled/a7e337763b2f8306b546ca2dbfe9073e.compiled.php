<?php if(!defined("__XE__"))exit;?>
 
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('widgets/login_info/skins/xe_official/filter','login.xml');$__xmlFilter->compile(); ?> 
<!--#Meta:widgets/login_info/skins/xe_official/js/login.js--><?php $__tmp=array('widgets/login_info/skins/xe_official/js/login.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="text/javascript">
    var keep_signed_msg = "<?php echo $__Context->lang->about_keep_signed ?>";
    xAddEventListener(window, "load", function(){ doFocusUserId("fo_login_widget"); });
</script>
<table width="143" border=0 cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="23" valign="top"><img src="http://www.goggg.co.kr/_SuperLog/img/in_tx1.gif" width="234" height="15" ></td>
                  </tr>
                  <tr>
                    <td>
  
                     <TABLE  border=0 cellSpacing=0 cellPadding=0  width="90%">
                              <TBODY>
							  <form action="http://www.goggg.co.kr/xe/?mid=main" method="get" onsubmit="return procFilter(this, widget_login)" id="fo_login_widget" target='_top'><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
 
                               
                        <TR>
                          <TD width=143><TABLE border=0 cellSpacing=0 cellPadding=0  width="90%">
								
								<TR>
                                  <TD height=22><INPUT 
                                style="BACKGROUND-IMAGE: url(http://www.goggg.co.kr/_SuperLog/img/id.gif); WIDTH: 130px; HEIGHT: 19px"  class=input2  onfocus="this.style.backgroundImage = 'url(none)'"    name=user_id></TD>
                                </TR>
                                <TR>
                                  <TD height=25><SPAN class=t11_6>
                                    <INPUT 
                                style="BACKGROUND-IMAGE: url(http://www.goggg.co.kr/_SuperLog/img/pw.gif); WIDTH: 130px; HEIGHT: 19px"   class=input2  onfocus="this.style.backgroundImage = 'url(none)'"   type=password name=password>
                                  </SPAN></TD>
                                </TR>
                              </TBODY>
                          </TABLE></TD>
                          <TD vAlign=top ><input type="image"   border=0  src="http://www.goggg.co.kr/_SuperLog/img/b_login.gif"   width=114 height=51 type=image>
                              <!--<img src='/19/img/login_button.gif' onclick='go_login();' style='cursor:hand'>--></TD>
                        </TR>
  
 
</form>  
 
					</td>
                  </tr> 
                  <tr>
                    <td colspan='2'><a href="http://www.goggg.co.kr/xe/?mid=main&act=dispMemberSignUpForm" title="회원 가입" target='_top'><img src="http://www.goggg.co.kr/_SuperLog/img/b_join.gif" width="57" height="24" hspace="3" border=0></a><a href="http://www.goggg.co.kr/xe/?mid=main&act=dispMemberFindAccount" title="아이디/비밀번호 찾기" target='_top'><img src="http://www.goggg.co.kr/_SuperLog/img/b_idpw.gif" width="103" height="24" border=0></a></td>
                  </tr>
                  <tr>
                    <td colspan='2'><img src="http://www.goggg.co.kr/_SuperLog/img/in_tx2.gif" width="174" height="13" vspace="7"></td>
                    </tr> 
                      </TBODY>
                    </TABLE>
<script type="text/javascript">
  xAddEventListener(window, "load", function(){ doFocusUserId("fo_login_widget"); });
</script>
