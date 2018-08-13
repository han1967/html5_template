<%@ Language=VBScript %>

<!--#include file="connect.asp"-->
<!--#include file="FixString.asp"-->
<!--#include file="include_funcs.asp"-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="JScript" runat="server" src="json2.js"></script>

 <%
    
      if request("ajax")<>"1" then response.write "PLEASE WAIT..."
     
     For k = 1 to Request.QueryString.Count
      fieldName = Request.QueryString.Key(k)
      fieldValue = Request.QueryString.Item(k)
      queryRes = queryRes & fieldName &": " &fieldValue&";"
     Next
   

    For k = 1 to Request.Form.Count
      fieldName = Request.Form.Key(k)
      fieldValue = Request.Form.Item(k)
      postRes = postRes & fieldName &": " &fieldValue&";"
     Next

   Conn.Execute "insert into tblPixelLog (data1,data2) values ('"&queryRes&"  "&postRes&"','"&Request.ServerVariables("HTTP_REFERER")&"')"

     Response.AddHeader "Access-Control-Allow-Origin", "*"
  
gotoPage=trim(request("goto"))
Email=trim(request("Email"))
Name=request("Name")
Password=trim(request("Password"))
if Session("coupon")="" then
    coupon=trim(request("coupon"))
    else
    coupon=Session("coupon")
    end if
phoneOngage=trim(request("phone"))
phone=trim(request("phone"))
ownerID=trim(request("ownerID"))
if ownerID="" then ownerID="NULL"
street=trim(request("street"))
city=trim(request("city"))
     if (city="" or street="") then 
       'Get info and print
'	myxml="https://api.ipinfodb.com/v3/ip-city/?key=6e991271332183fd8bf00c71ecd38233f061a2b786844cf7b3d60504c4cf6008&ip=" &Request.ServerVariables("HTTP_CF_CONNECTING_IP")&"&format=xml"
	myxml="http://lottobooking.io/getAddress.php?ip=" &Request.ServerVariables("HTTP_CF_CONNECTING_IP")&"&format=xml"
     set xml = server.CreateObject("MSXML2.DOMDocument.6.0")
	xml.async = "false"
	xml.resolveExternals = "false"
	xml.setProperty "ServerHTTPRequest", true
	xml.load(myxml)
	
     city=xml.documentElement.childNodes(0).text
     street=xml.documentElement.childNodes(1).text
     zip=xml.documentElement.childNodes(2).text
	'response.write city
     end if

  if (email<>"" ) then 
       'Get info and print
'	myxml="https://api.ipinfodb.com/v3/ip-city/?key=6e991271332183fd8bf00c71ecd38233f061a2b786844cf7b3d60504c4cf6008&ip=" &Request.ServerVariables("HTTP_CF_CONNECTING_IP")&"&format=xml"
	myxml="http://lottobooking.io/validateEmail.php?email="&email&"&format=xml"
     set xml = server.CreateObject("MSXML2.DOMDocument.6.0")
	xml.async = "false"
	xml.resolveExternals = "false"
	xml.setProperty "ServerHTTPRequest", true
	xml.load(myxml)
     valid=xml.documentElement.childNodes(1).text
	' response.write valid
     valid="valid"
     end if
     if valid="invalid" then
       if request("ajax")="1" then
             response.write "msg,Error Email"
     else
			Response.write "<script>alert('Check your Email Address');history.back();</script>"
     end if
			response.end
		end if
'zip=trim(request("zip"))
country=trim(request("country"))
 if  session("lang")="" then 
     lang=trim(request("lang"))
    session("lang")=lang
     if  session("lang")="" then  session("lang")="en"
end if

fromWhere=trim(request("fromWhere"))
    session("fromWhere")=fromWhere
ref=session("ref")
if ref="" then ref=trim(request("ref"))

promo=trim(request("promo"))
if promo="" then promo="MAIN"
tickets=trim(request("tickets"))
game=trim(request("game"))
mygame=trim(request("mygame"))

affTranID=request("affTranID")
     if affTranID="" then affTranID=request("reg")

affID=request("aff_id")
'if affID="" then affID=Response.Cookies("aff_id")
if affID="" then affID=request("aff")
affKey=request("affKey")
if affKey="" then affKey=request("subaffid")
OfferID=request("OfferID")

call FixString(Email)
call FixString(Name)
call FixString(Password)
call FixString(coupon)
call FixString(promo)
call FixString(street)
call FixString(city)
call FixString(zip)
call FixString(country)
call FixString(ref)
call FixString(game)




  Function Dot2LongIP (ByVal DottedIP)
	Dim i, pos
	Dim PrevPos, num
	If DottedIP = "" Then
	    Dot2LongIP = 0
	Else
	    For i = 1 To 4
	        pos = InStr(PrevPos + 1, DottedIP, ".", 1)
	        If i = 4 Then
	            pos = Len(DottedIP) + 1
	        End If
	        num = Int(Mid(DottedIP, PrevPos + 1, pos - PrevPos - 1))
	        PrevPos = pos
	        Dot2LongIP = ((num Mod 256) * (256 ^ (4 - i))) + Dot2LongIP
	    Next
	End If
   End Function

   IP_ADDRESS=Request.ServerVariables("HTTP_CF_CONNECTING_IP")
   IP_ADDRESS_long=Dot2LongIP(IP_ADDRESS)
    country=lcase(Request.ServerVariables("HTTP_CF_IPCOUNTRY"))
    
          '  if countrySHORT<>"" then
            '     SQL1 = "select top 1 phoneCode,dbo.fn_FIX_MOBILE('"&phone&"',country) as FixedMobilePhone from countryCodes where country='"&countrySHORT&"'"
            '    rs.Open SQL1 ,Conn,3,3
			'    if not rs.EOF then
			'     session("perfix")=rs("phoneCode")
            '     phone=rs("FixedMobilePhone")
			'    end if
			'    rs.close
        '    end if


     if lcase(country)="us" or lcase(country)="fr"  then
     Response.write "<script>alert('Registration is not allowed from your country!');</script>"
     response.end
    end if

     if request("first_name")<>"" then Name=request("first_name")
  
    surname=request("last_name")

    spaceInd=instr(Name," ")
    if spaceInd>0 then
        fName=Left(Name,spaceInd-1)
        lName=Right(name,Len(name)-spaceInd)
    else
      fName=Name
      lName=surname
    end if
     If HasNumber(fName) = True Then
    Response.write "<script>alert('Check Name');</script>"
     response.end
End If


Function generatePassword()
  NUMLOWER    = 48  ' 48 = 0
 NUMUPPER    = 57  ' 57 = 9
 LOWERBOUND  = 65  ' 65 = A
 UPPERBOUND  = 90  ' 90 = Z
 LOWERBOUND1 = 97  ' 97 = a
 UPPERBOUND1 = 122 ' 122= z
 PASSWORD_LENGTH = 8

 ' initialize the random number generator
 Randomize()

		newPassword = ""
		count = 0
		DO UNTIL count = PASSWORD_LENGTH
		num=Int( ( 10 - 2 + 1 ) * Rnd + 2 )
		If num <= 3 Then
			pwd = Int( ( NUMUPPER - NUMLOWER ) * Rnd + NUMLOWER )
		ELSE
			pwd = Int( ( UPPERBOUND1 - LOWERBOUND1 ) * Rnd + LOWERBOUND1 )
		End If
			newPassword = newPassword + Chr( pwd )
			count = count + 1
			Loop
			generatePassword = newPassword
		End Function

		if Password="" then
		Password= generatePassword()
		end if
    'response.write Email
		sql="Select email from tblUsers where email='"&Email&"'"
		rs.Open sql ,Conn,3,3

		if not(rs.EOF or  rs.BOF) then
      if request("ajax")="1" then
             response.write "msg,Error Email"
     else
			Response.write "<script>alert('Email already exists');history.back();</script>"
     end if
			response.end
		end if
		rs.close









		if  session("lang")<>"" then
			lang= session("lang")
			langdir=ucase(lang)&"/"
		else
			lang=NULL
			langdir=""
		end if
     if ref= "" then ref=left(Request.ServerVariables("HTTP_REFERER"),150)
     if ref= "" then ref="Direct"
      if IP_ADDRESS= "" then IP_ADDRESS="NO IP"
     ' response.write ("insert into tblUsers (email,name,surname,initialPass,Lang,promoCode,coupon,MobilePhone,owner,street,city,zip,country,Referer,tickets,game,affTranID,affID,affKey,OfferID,device,IP) values ('"&Email&"','"&fName&"','"&lName&"','"&Password&"','"&lang&"','"&promo&"','"&coupon&"','"&phone&"',"&ownerID&",'"&street&"','"&city&"','"&zip&"','"&country&"','"&ref&"','"&tickets&"','"&game&"','"&affTranID&"','"&affID&"','"&affKey&"','"&OfferID&"','"&device&"','"&IP_ADDRESS&"')")
      Conn.Execute ("insert into tblUsers (email,name,surname,initialPass,Lang,promoCode,coupon,MobilePhone,owner,street,city,zip,country,Referer,tickets,game,affTranID,affID,affKey,OfferID,device,IP,sessionID) values ('"&Email&"','"&fName&"','"&lName&"','"&Password&"','"&lang&"','"&promo&"','"&coupon&"','"&phone&"',"&ownerID&",'"&street&"','"&city&"','"&zip&"','"&country&"','"&ref&"','"&tickets&"','"&game&"','"&affTranID&"','"&affID&"','"&affKey&"','"&OfferID&"','"&device&"','"&IP_ADDRESS&"',"&session.SessionID&")")
   
       sql="Select * from tblUsers where email='"&Email&"'"
        rs.Open sql ,Conn,3,3
'response.end
	   if not(rs.EOF or  rs.BOF) then
        Session("user_id")=rs("id")
        Session("email")=rs("email")
        Session("FirstName")=rs("name")
        Session("street")=rs("street")
        Session("city")=rs("city")
        Session("zip")=rs("zip")
        Session("coupon")=rs("coupon")
     	Session("tickets")=rs("tickets")
     	Session("game")=rs("game")

        Conn.Execute ("Insert into tblUserLoginLog (userID,sessionID,userIP) values ("&Session("user_id")&","&session.SessionID&",'"&Request.ServerVariables("REMOTE_ADDR")&"')")
		Conn.Execute "Update tblCart set userID="& Session("user_id") &" where sessionID='"&session.SessionID&"'"

		


          '  INCHARGE_URL="https://lottobooking.io/send_ongage_email.php/?first_name="&Name&"&uid="&Session("user_id")&"&pass="&password&"&email="&email&"&action=register&lang="&ucase(session("lang"))
              '          answer=sendHTTPGet(INCHARGE_URL,requestString)
     
           ' INCHARGE_URL="https://lottobooking.io/send_ongage_sms.php/?MobilePhone="&phone&"&first_name="&Name&"&uid="&Session("user_id")&"&pass="&password&"&email="&email&"&action=sendSms&lang="&ucase(session("lang"))
                    '    answer=sendHTTPGet(INCHARGE_URL,requestString)



           %>
<!--#include file="pixel_reg.asp"-->

  <%    end if
      rs.close

 

     
            if gotoPage<>"" then
              
               
               Response.redirect gotoPage&".asp?lang="&session("lang")
           
            
              else
      

     
                        Response.redirect "http://bwelltime.com/thankyou_bcureuk/"
        response.End
             
              end if
      
    


%>
