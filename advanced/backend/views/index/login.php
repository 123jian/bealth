

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>用户登录</TITLE><LINK 
href="Images/Default.css" type=text/css rel=stylesheet><LINK 
href="Images/xtree.css" type=text/css rel=stylesheet><LINK 
href="Images/User_Login.css" type=text/css rel=stylesheet>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="MSHTML 6.00.6000.16674" name=GENERATOR></HEAD>
<BODY id=userlogin_body>
<DIV></DIV>

<DIV id=user_login>
<DL>
  <DD id=user_top>
  <UL>
    <LI class=user_top_l></LI>
    <LI class=user_top_c></LI>
    <LI class=user_top_r></LI></UL>
	<form action="index.php?r=index/login_pro" method="post">
  <DD id=user_main>
  <UL>
    <LI class=user_main_l></LI>
    <LI class=user_main_c>
	
    <DIV class=user_main_box>
    <UL>
      <LI class=user_main_text>用户名： </LI>
      <LI class=user_main_input><INPUT class=TxtUserNameCssClass id=TxtUserName 
      maxLength=20 name="username"> </LI></UL>
    <UL>
      <LI class=user_main_text>密 码： </LI>
      <LI class=user_main_input><INPUT class=TxtPasswordCssClass id=TxtPassword 
      type=password name="password"> </LI></UL>
    <UL>
      <LI class=user_main_text>Cookie： </LI>
      <LI class=user_main_input><SELECT id=DropExpiration name=DropExpiration> 
        <OPTION value="none" selected>不保存</OPTION> <OPTION value="day">保存一天</OPTION> 
        <OPTION value="month">保存一月</OPTION> <OPTION 
      value="year">保存一年</OPTION></SELECT> </LI></UL>
	  </DIV></LI>
    <LI class=user_main_r><!--<INPUT class=IbtnEnterCssClass id=IbtnEnter type="submit"
    style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" 
    onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("IbtnEnter", "", true, "", "", false, false))' 
    type=image src="Images/user_botton.gif" name=IbtnEnter> --><input type='submit' value="登录">
	</LI>
	</UL>
  <DD id=user_bottom></form>
  <UL>
    <LI class=user_bottom_l></LI>
    <LI class=user_bottom_c><SPAN style="MARGIN-TOP: 40px">如果您想获得更多后台模板，请点此 <A 
    href="http://www.mycodes.net">源码之家</A> 。</SPAN> </LI>
    <LI class=user_bottom_r></LI></UL></DD></DL></DIV><SPAN id=ValrUserName 
style="DISPLAY: none; COLOR: red"></SPAN><SPAN id=ValrPassword 
style="DISPLAY: none; COLOR: red"></SPAN><SPAN id=ValrValidateCode 
style="DISPLAY: none; COLOR: red"></SPAN>
<DIV id=ValidationSummary1 style="DISPLAY: none; COLOR: red"></DIV>

<DIV></DIV>

</FORM></BODY></HTML>
