<!--#include file="topconnect.asp"-->

<%
showForm=1
if len(Request("user"))>1 and len(Request("pass"))>1 then
	'adminPass="fsurdk"
	'adminUser="admin"

    SQL1 = "select * from  tblAffiliatesPixels  where email='"&trim(Request("user"))&"' and password='"&trim(Request("pass"))&"'"
	rs.Open SQL1 ,Conn,3,3
	if not(rs.EOF or  rs.BOF) then
       Session("User")=Request("user")
	   Session("Pass")=Request("pass")
	   Session("adminPass")=Request("pass")
	   Session("adminUser")=Request("user")
     
       session("accessLevel")=rs("accessLevel")
            if Session("User")="Demo" then 
            session("accessLevel")=1 
            end if
       session("affID")=rs("textaffID")
       session("affID2")=rs("affID2")
       session("id")=rs("id")
       response.redirect "main.asp"
       showForm=0

          'response.write "here"  
          'response.end  
    else
       text="Check Username or Password"
	   Session("adminPass")=""
	   Session("adminUser")=""
       session("accessLevel")=""
       session("affID")=""
       session("affID2")=""
       session("MainDomain")=""
       session("id")=""
       showForm=1
    end if
    rs.close 

    if Session("adminPass")<>"" then
          SQL1 = "select MainDomain from  tblWebsite"
          rs.Open SQL1 ,Conn,3,3
          if not(rs.EOF or  rs.BOF) then
            session("MainDomain")=rs("MainDomain")
          end if
          rs.close
    end if

end if%>



<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1.dtd"> 
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
<meta NAME="GENERATOR" Content="Microsoft Visual Studio 6.0">
<meta http-equiv="Content-Type" Content="text/html;charset=WINDOWS-1255">

 <!-- Begin Grab This - You'll need this external CSS file and the IE Statement below -->

<style type="text/css">@import url("css/menuh.css");</style>

<!--[if IE]><style type="text/css" media="screen">#menu{float:none;} /* This is required for IE to avoid positioning bug when placing content first in source. *//* IE Menu CSS *//*downloaded from https://www.seoconsultants.com/css/menus/horizontal/*//* csshover.htc file version: V1.21.041022 - Available for download from: https://www.xs4all.nl/~peterned/csshover.html */body{behavior:url(css/csshover.htc);font-size:100%; /* to enable text resizing in IE */}#menu ul li{float:left;width:100%;}#menu h2, #menu a{height:1%;font:bold 0.72em/1.4em arial;text-align:center;}</style><![endif]-->

<!-- End Grab This -->
<script LANGUAGE="JavaScript" SRC="CalendarPopup.js"></script>
	<script LANGUAGE="JavaScript">
	    var cal = new CalendarPopup();
	    cal.showYearNavigation();
	</script>
<script>
function openWin(page){
x=window.open(page,'newwin','width=1224,height=800,scrollbars=1,resizable=1')
}
</script>
</head>
<body bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0" style="background-color:#5ab5de;" >
<%if showForm=0 then%>
<!--#include file="topMenu.asp"-->
<%end if%>
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
   
<tr>
<td>
<!--check admin-->
<%

 

if  showForm=1 then%>
  <div style="clear:both; height:50px;"></div>
<form action method="post" id="form2" name="form2" class="login-form">


     <div class="header">
    <!--TITLE--><h1></h1><!--END TITLE-->
        <span><%=text%></span>
</div>

  <script>
function onBlur(el) {
    if (el.value == '') {
        el.value = el.defaultValue;
    }
}
function onFocus(el) {
    if (el.value == el.defaultValue) {
        el.value = '';
    }
}
</script>
<div class="content">
<!--USERNAME--> <input id="user" name="user" value="Username" size="10" class="input username"  onblur="onBlur(this)" onfocus="onFocus(this)"><!--END USERNAME-->
    <!--PASSWORD--> <input type="password" value="Password" id="pass" name="pass" size="10"  class="input password"  onblur="onBlur(this)" onfocus="onFocus(this)"><!--END PASSWORD-->
  
        <div style="clear:both; height:30px;"></div>
        <input type="submit" value="Sign in" id="submit2" name="submit2" class="myButton"> 
</div>
<script>form2.user.focus()</script>
<%else

  
  
   if session("numRecOnPage")="" then session("numRecOnPage")=100

 %>	    
</td>
</tr>


			<!-- End CSS Horizontal Popout Menu -->

<!--<tr><td width="100%" height="29" valign="top" background="images/back-b.GIF">	<table cellpadding="3" cellspacing="0" border="0">	<tr>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="products.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>מוצרים</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="menu1.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>prod-cat</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="auctions.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>מכרזים</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="auctionsHP.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>מכרזים HP</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="auctions.asp?closed=1" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>מכרזים סגורים</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('users.asp')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>users</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('users.asp?isAdmin=yes')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>admin users</b></td>		<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('users.asp?isMoreThan100=yes&amp;MoreOrLess=more')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>users payed&gt;=100</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('users.asp?isMoreThan4LogIn=yes&amp;MoreOrLess=more')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>users Log-in&gt;=4</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('users.asp?isNoCC=yes')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>users no CC</b></td>		<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('users.asp?isCCNoSlika=yes')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>users + CC no slika</b></td>		<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="usersBank.asp" target="updater"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>bank</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="delCC.asp" target="updater"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>del CC</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="winners.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>winners</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>users registered:<%=numUsers%></b></td>	</tr>	</table>	</td></tr><tr><td width="100%" height="29" valign="top" background="images/back-b.GIF">	<table cellpadding="3" cellspacing="0" border="0">	<tr>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="pages.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>pages</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="alerts.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>alerts</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="popups.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>popups</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="update-mivzaim.asp" target="updater"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>mivzaim</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="letters.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>emails</b></td>		<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="matanotUsers.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>מתנות לקוח</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="reportsUserBids.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>report users</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="reportsUserReferers.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>report referers</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="sampleAuctionStart.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>לאפס מכרז דוגמה</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="packages.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>packages</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="callStatus.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>call status</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="category.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>link category</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="allBanksTransactions.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>all trans.</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="allBanksTransactionsPerReferer.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>all trans. per referer</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="allBanksTransactionsPerRefererRegDate.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>all trans. per referer 2</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="allinvoices.asp" target="list"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>all invoices</b></td>		<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('reportAuctions.asp')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>report auctions</b></td>	<td align="center" onMouseOver="this.bgColor='#FFD600';this.style.cursor='hand'" onMouseOut="this.bgColor=''" HEIGHT="18"><a href="Javascript:void(0);" onclick="openWin('reportAuctionsHP.asp')"><font face="arial" id style="FONT-SIZE: 9pt;COLOR:DARKBLUE;text-decoration:none"><b>report HP</b></td>	</tr>	</table></td></tr>-->

<tr>
<td height="100%" width="100%">
