<!--#include file="topconnect.asp"-->
<!--#include file="fixString.incl"-->

<%
response.Buffer=false
if Session("User")="" or Session("User")<>Session("adminUser") or session("accessLevel")=2 then Response.Redirect "default.asp" 

if request.Form("Pass")<>"" then
 Pass=Request.Form("Pass")
 Call FixString(Pass)
 Conn.Execute ("update tblAffiliatesPixels set password='"&Pass&"'  where id="& session("id"))
end if
SQL1 = "select * from  tblAffiliatesPixels where id="& session("id")
rs.Open SQL1 ,Conn,3,3
  if rs.EOF or  rs.BOF then
  else
   password=rs("password")
   pixelURL=rs("pixelURL")
   pixelSaleURL=rs("pixelSaleURL")
   pixelFTD=rs("pixelFTD")
    model=rs("model")
    price=rs("price")
    affname=rs("name")
  end if
rs.Close
		
%>
 <head>
 <meta http-equiv="Content-Type" Content="text/html;charset=WINDOWS-1255">
      <link href="css/menuh.css" rel="stylesheet" />

</head>
<body>
<!--#include file="topMenu.asp"-->

<div style="clear:both; height:5px;"></div>
<div style="padding:1%;background-color:#fff;">
<h1><%=affname %></h1>
<div align="center">


<table width="90%" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #bfcedb; padding:1%; background-color:#fff;">
<tr>
<td>
    <table>
     <tr><td>Main affiliate link:</td><td>https://<%= session("mainDomain")%>/?aff_id=<%=session("affID")%>&affTranID={clickID}</td></tr>
        <tr><td>Powerball affiliate link:</td><td>https://<%= session("mainDomain")%>/ticket.asp?id=1&aff_id=<%=session("affID")%>&affTranID={clickID}</td></tr>
      
        <tr><td>Euromillions affiliate link:</td><td>https://<%= session("mainDomain")%>/ticket.asp?id=1&aff_id=<%=session("affID")%>&affTranID={clickID}</td></tr>
        <tr bgcolor="#C2C0C0">
	<td align="center"><font face="arial" color="000000" style="FONT-SIZE: 9pt;"><b>LP Signup form<br />PARAMS:  </td>
        <td align="center">
        <textarea name="SampleForm" rows="5" cols="100" wrap="hard"> <form novalidate id="registerForm" action="https://lottobooking.io/get_registration.asp" name="contactform" class="row form-style-7" method="post" target="bottomFrame">
                                            <input type="hidden" name="aff_id" value="<%=session("affID")%>">
                                            <input type="hidden" name="affTranID" value="{clickID}">
                                           
                                           
			                                      <input type="hidden" name="ref" id="ref" value="{LP_DESCRIPTION_LINE_30chars MAX}">
			                                      <input type="hidden" name="coupon" id="coupon" value="7EUR">
			                                      <input type="hidden" name="game" id="game" value="kiwiozi">
													<ul style="margin-top: 20px;">
													<li>
														<label for="Firstname">Full Name:</label>

														   <input id="name"  name="first_name" type="text"  maxlength="100">
													
													</li>
													<li>
													   <label for="Mobile Phone">Mobile:</label>
													   <input  name="phone"  id="form_telephone" value="" type="tel"   maxlength="100"/>                            
													 
													</li>
													<li>
														<label for="Email">Email:</label>
														<input id="email"  name="email" type="text"   maxlength="100">
                            
													</li>
                            	<li style="border: 0px solid #a28a47;margin-bottom: 0px;"><button class="btn" id="register" type="submit">PLAY NOW</button>
												
													</ul>
</form>
        </textarea> 
        </td>
        </tr>
         <tr bgcolor="#C2C0C0">
	<td align="center"><font face="arial" color="000000" style="FONT-SIZE: 9pt;"><b>S2S REG PIXEL URL<br />SAMPLE: http://SERVERURL.COM?transaction_id=[AffTranID]&UUID=[USERID] </td>
        <td align="center">
        <textarea name="pixelURL" rows="5" cols="30"><%=pixelURL%></textarea> 
        </td>
        </tr>

        <tr bgcolor="#C2C0C0">
	<td align="center"><font face="arial" color="000000" style="FONT-SIZE: 9pt;"><b>S2S CUSTOM CPA PIXEL URL<br />SAMPLE: http://SERVERURL.COM?transaction_id=[AffTranID]&security_token=XXXXX </td>
        <td align="center">
        <textarea name="pixelSaleURL" rows="5" cols="30"><%=pixelSaleURL%></textarea> 
        </td>
        </tr>
    
        <tr bgcolor="#C2C0C0">
	   <td align="center"><font face="arial" color="000000" style="FONT-SIZE: 9pt;"><b>S2S FTD PIXEL URL<br />SAMPLE: http://SERVERURL.COM?transaction_id=[AffTranID]&security_token=XXXXX </td>
        <td align="center">
        <textarea name="pixelFTD" rows="5" cols="30"><%=pixelFTD%></textarea> 
        </td>
        </tr>    
        <form method="Post" action="">         
         <tr bgcolor="#C2C0C0"><td align="center"><font face="arial" color="000000" style="FONT-SIZE: 9pt;">Password</td><td><input type="password" name="Pass" value="<%=password%>"></td></tr>
         <tr bgcolor="#C2C0C0"><td colspan="2" align="center"><input type="submit" name="submit" value="set"></td></tr>
        </form>
         </table>
</td>
 </table>

</div></div>