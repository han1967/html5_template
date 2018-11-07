<!--#include file="topconnect.asp"-->
<%
response.Buffer=false
if Session("User")="" or Session("User")<>Session("adminUser") or session("accessLevel")=2 then Response.Redirect "default.asp" 


		 DateStart=Request.QueryString("DateStart")
		 DateEnd=Request.QueryString("DateEnd")
         HourStart=Request.QueryString("HourStart")
         HourEnd=Request.QueryString("HourEnd")
         MinStart=Request.QueryString("MinStart")
         MinEnd=Request.QueryString("MinEnd")
         referer=Request.QueryString("referer")
        afftranid=Request.QueryString("afftranid")
         refererExclude=Request.QueryString("refererExclude")
         landingPage=Request.QueryString("landingPage")
         clicks=Request.QueryString("clicks")
         typePC=Request.QueryString("typePC")
            
         if typePC="1" then checkPC="checked"
         if typePC="3" then checkPlanshet="checked"
         if typePC="2" then checkMobile="checked"
         group=Request.QueryString("group")
         if group="" then group="referer"
         if group="landing" then
            selecLanding="selected"
         elseif group="affid2" then
            selecaffid2="selected"
         elseif group="device" then
            selecdevice="selected"
       elseif group="afftranid" then
            selecafftranid="selected"
         end if

    if clicks="" then clicks=1
   	    SQL1 = "select dbo.fn_getServerDate(getDate()) as englandDate"
		rs.Open SQL1 ,Conn,3,3
		englandDate=rs("englandDate")
		DateToday=CDate(Day(englandDate)&"/"&Month(englandDate)&"/"&Year(englandDate))
		rs.close

		if DateStart="" then
		'DateStart=DateToday
		end if

		if DateEnd="" then
		'DateEnd=DateToday
		end if
		
		if HourStart="" then
		HourStart=0
		end if
			
		if HourEnd="" then
		HourEnd=23
		end if
	
		if MinStart="" then
		MinStart=0
		end if
			
		if MinEnd="" then
		MinEnd=59
		end if
	
		MEDIA_NEW=Request.QueryString("MEDIA_NEW")
        if MEDIA_NEW="1" then checkMEDIA_NEW="checked"
%>
 <head>
 <meta http-equiv="Content-Type" Content="text/html;charset=WINDOWS-1255">
 <script LANGUAGE="JavaScript" SRC="CalendarPopup.js"></script>
      <link href="css/menuh.css" rel="stylesheet" />
	<script LANGUAGE="JavaScript">
	    var cal = new CalendarPopup();
	    cal.showYearNavigation();
	</script>
<script LANGUAGE="JavaScript">
    function check() {
        var msg = ""

        //if ((document.form1.DateStart.value=="")||(document.form1.DateEnd.value=="")) msg=msg+'Choose dates\n';

        if (msg != "") {
            alert(msg)
            return false;
        }
    }


</script>	
</head>
<body>
<!--#include file="topMenu.asp"-->
<form name="form1" method="get" onsubmit="return check();">
<table width="100%" style="font-size:12px;background-color:#eaeaea;">

  <tr>
  <td align="center" valign="top"><font size="2" face="arial"><b>start
  </td> 
  <td><input type="text" name="DateStart" size="14" value="<%=DateStart%>">
       &nbsp;
		<a HREF="#" onClick="cal.select(document.forms['form1'].DateStart,'anchor1','dd/MM/yyyy'); return false;" NAME="anchor1" ID="anchor1"><img src="images/calendar.gif" width="25" alt border="0"></a>
   </td>
   
   <td><font size="2" face="arial"><b>hour
   </td>
      
   <td>
   <SELECT  name=HourStart>
   <%for i=0 to 23
     if cstr(i)=cstr(HourStart) then
      selec="selected"
     else
      selec=""
     end if%>
   <OPTION <%=selec%>><%=i%></OPTION>
   <%next%>
   </SELECT>
   </td>
    <td><font size="2" face="arial"><b>min
   </td>
    <td>
   <SELECT  name=MinStart>
   <%for i=0 to 59
     if cstr(i)=cstr(MinStart) then
      selec="selected"
     else
      selec=""
     end if%>
   <OPTION <%=selec%>><%=i%></OPTION>
   <%next%>
   </SELECT>
   </td>
   
  <td align="center" valign="top"><font size="2" face="arial"><b>end
  </td>
  
  <td><input type="text" name="DateEnd" size="14" value="<%=DateEnd%>">
              &nbsp;
		<a HREF="#" onClick="cal.select(document.forms['form1'].DateEnd,'anchor1','dd/MM/yyyy'); return false;" NAME="anchor1" ID="anchor1"><img src="images/calendar.gif" width="25" alt border="0"></a>
  </td>
    <td><font size="2" face="arial"><b>hour
   </td>
  <td>
   <SELECT  name=HourEnd>
   <%for i=0 to 23
     if i=cint(HourEnd) then
      selec="selected"
     else
      selec=""
     end if%>
   <OPTION <%=selec%>><%=i%></OPTION>
   <%next%>
   </SELECT>
  </td>  
     <td><font size="2" face="arial"><b>min
   </td>
 <td>
   <SELECT  name=MinEnd>
   <%for i=0 to 59
     if cstr(i)=cstr(MinEnd) then
      selec="selected"
     else
      selec=""
     end if%>
   <OPTION <%=selec%>><%=i%></OPTION>
   <%next%>
   </SELECT>
   </td>
      <!--
  <td align="center" valign="top"><font size="2" face="arial"><b>3 letters
  </td>
   <td>
   <INPUT type="checkbox" name="MEDIA_NEW" <%=checkMEDIA_NEW%> value="1">
  </td>  
      -->
 <td>
      <SELECT  name=group>
           <OPTION>referer</OPTION>
           <OPTION <%=selecLanding%>>landing</OPTION>
           <OPTION <%=selecaffID2%>>affid2</OPTION>
           <OPTION <%=selecdevice%>>device</OPTION>
            <OPTION <%=selecafftranid%>>afftranid</OPTION>
      </select>
 </td>
  <%if session("accessLevel")=1 then%>
    <td align="center" valign="top">
 <font size="2" face="arial"><b> referer:
 <INPUT size=10 type="text" id=referer name=referer value="<%=referer%>">
  </td>
   <td align="center" valign="top">
 <font size="2" face="arial"><b> exclude:
 <INPUT size=10 type="text" id="refererExclude" name="refererExclude" value="<%=refererExclude%>">
  </td>
<%end if%>
   <td align="center" valign="top">
 <font size="2" face="arial"><b> landing:
 <INPUT size=10 type="text" id="landingPage" name="landingPage" value="<%=landingPage%>">
  </td>
      <td align="center" valign="top">
 <font size="2" face="arial"><b> afftranid:
 <INPUT size=10 type="text" id="afftranid" name="afftranid" value="<%=afftranid%>">
  </td>
      

       <td align="center" valign="top">
 <font size="2" face="arial"><b> clicks:
 <INPUT size=1 type="text" id="clicks" name="clicks" value="<%=clicks%>">
  </td>
  <td align="center" valign="top">
 <font size="2" face="arial"><b> type:
 <INPUT type="radio" id="Text1" name="typePC" value="1" <%=checkPC%>>-pc
  </td>
  <td align="center" valign="top">
   <font size="2" face="arial"><b>
 <INPUT type="radio" id="Radio1" name="typePC" value="3" <%=checkPlanshet%>>-planshet
  </td>
  <td align="center" valign="top">
 <font size="2" face="arial"><b>
 <INPUT type="radio" id="Radio2" name="typePC" value="2" <%=checkMobile%>>-mobile
  </td>
    </tr>
  <%Randomize
	num=Rnd()%>  
   <tr>
  <td align="center" valign="top" colspan=5>
  <INPUT type="submit" value="Show" id=submit1 name=submit1>&nbsp;
  </td>
<!--
  <td><a href='reports/report.xls?num=<%=num%>' target="_blank">xls</a></td>
       -->
  </tr>
 </table>
 </form>
<div style="clear:both; height:5px;"></div>
<div style="padding:1%;background-color:#fff;">
<h1>Referers</h1>
<div align="center">


<table width="90%" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #bfcedb; padding:1%; background-color:#fff;">
<tr>
<td>
<table width="95%" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #bfcedb; padding:1%;">
<tr><td>

<%  
   

  if IsDate(DateStart) and IsDate(DateEnd) then
        
        if HourEnd=24 then HourEnd=23
        if len(MinStart)=1 then MinStart="0"&MinStart
        if len(MinEnd)=1 then MinEnd="0"&MinEnd
		date_from_split=split (DateStart,"/")
		date_from=date_from_split(2)&"-"&date_from_split(1)&"-"&date_from_split(0)&" "&HourStart&":"&MinStart&":01"
				 
		date_to_split=split (DateEnd,"/")
		date_to=date_to_split(2)&"-"&date_to_split(1)&"-"&date_to_split(0)&" "&HourEnd&":"&MinEnd&":59"


	addSql=" where dateInsert>='"&date_from&"' and dateInsert<='"&date_to&"'"
    addSqlReg=" where insertDate>='"&date_from&"' and insertDate<='"&date_to&"'"
    addSqlDates=" where dateInsert>='"&date_from&"' and dateInsert<='"&date_to&"'"
    else
    response.end
	end if
	

   if typePC<>"" then
    addSql=addSql&" and Device="&typePC
   end if
   	
   if  referer<>"" then
     addSql=addSQL&" and (referer='"&referer&"' or referer like '"&referer&"%')"
    end if

    if  refererExclude<>"" then
     addSql=addSQL&" and (referer<>'"&refererExclude&"' and referer not like '"&refererExclude&"%')"
    end if

    if  landingPage<>"" then
     addSql=addSQL&" and (landingPage='"&referer&"' or landingPage like '"&landingPage&"%' or landingPage like '%"&landingPage&"%')"
    end if
    
     if  afftranid<>"" then
     addSql=addSQL&" and (afftranid='"&afftranid&"' or afftranid like '"&afftranid&"%' or afftranid like '%"&afftranid&"%')"
    end if

	'if Session("adminUser")="affiliatemanager" then
      'addSql=addSql&" and affid2 = 'aff%'"
    'end if
	
    if clicks<>"" then
     addHaving=" having sum(numShow)>="&clicks
    end if

	set rs2 = server.CreateObject("ADODB.recordset")


    if session("accessLevel")=3 then
       addSql=addSql&" and affid2 = '"&session("affID2")&"'"
    end if

     'if MEDIA_NEW="1" then 
    '	SQL1 = "select  left(referer,3) as referer,sum(numShow) as NumShowTotal  from  tblComingReport "&addSql&"  group by left(referer,3)  "&addHaving&"  order by NumShowTotal DESC"
    ' else
      ' 	SQL1 = "select id,referer,landingPage,sum(numShow) as NumShowTotal,device  from tblComingReport "&addSql&"  group by id,referer,device,landingPage "&addHaving&" order by NumShowTotal DESC"
     'end if

     if group="referer" then
       SQL1 = "select id,referer,device,affid2,landingPage,sum(numShow) as NumShowTotal  from tblComingReport "&addSql&"  group by id,referer,affid2,landingPage,device "&addHaving&" order by NumShowTotal DESC"
     elseif group="landing" then
       SQL1 = "select landingPage,device,sum(numShow) as NumShowTotal  from tblComingReport "&addSql&"  group by landingPage,device "&addHaving&" order by NumShowTotal DESC"
     elseif group="affid2" then
       SQL1 = "select affid2,device,sum(numShow) as NumShowTotal  from tblComingReport "&addSql&"  group by affid2,device "&addHaving&" order by affid2,device,NumShowTotal DESC"
     elseif group="device" then
       SQL1 = "select device,sum(numShow) as NumShowTotal  from tblComingReport "&addSql&"  group by device "&addHaving&" order by NumShowTotal DESC"
    elseif group="afftranid" then
       SQL1 = "select afftranid,affid2,count(*) as NumShowTotal  from tblSessionsClicks "&addSql&"  group by afftranid,affid2 order by NumShowTotal DESC"
    end if

   'Response.Write SQL1
	rs.Open SQL1 ,Conn,3,3


    totalClicked=0
    totalNumUsersReg=0
    totalNumUsersPayed=0
	if rs.EOF or  rs.BOF then
	Response.Write ("<tr><td align='center' valign=top><B>There are no Records</b></td></tr>")
    Rcounter=0
	else
    Rcounter=Rcounter+rs.RecordCount
    
        
    %>
    
     <font style="background-color:#fffa09; font-weight:bold;"><%=Rcounter%> RECORDS</font> 

     <table width="100%" border="0" cellpadding="1" cellspacing="0" class="tableCSS">	
     <thead> <tr>
    <th>Clicked</th>
    <th>affid2</th>
    <th>descr</th>
    <th>Click to lead %</th>
   	<th>Click to payed %</th>
	<th>Referer</th>
    <th>Landing</th>
   	<th>N users registered</th>
   	<th>N users payed</th>
   	<th>%</th>
    <th>device</th>
    
    </tr>
  <%while not rs.EOF
       IsInReport=true
      ' referer=replace(rs("referer"),"'","")
	'	 SQL1 = "select top 1 id from tblComingReport where REFERER='"&rs("referer")&"'"
      '  rs2.Open SQL1 ,Conn,3,3
	'	 id=rs2("id")
    '    rs2.Close
     
    
		'if MEDIA_NEW="1" then
		'SQL1 = "select count(*) as NumUsersReg from tblUsers  "&addSqlReg&" and left(REFERER,3)='"&rs("referer")&"'"
		'else
       if group="referer" then
            'referer=replace(rs("referer"),"'","")
	     '	SQL1 = "select count(*) as NumUsersReg from tblUsers "&addSqlReg&" and REFERER='"&rs("referer")&"'"
      SQL1 = "select count(*) as NumUsersReg from tblUsers "&addSqlReg&" and clickID="&rs("id")
       elseif group="landing" then
      		SQL1 = "select count(*) as NumUsersReg from tblUsers  "&addSqlReg&" and landingPage='"&rs("landingPage")&"' and device='"&rs("device")&"'" 
         elseif group="affid2" then
         SQL1 = "select count(*) as NumUsersReg from tblUsers "&addSqlReg&" and affid='"&rs("affid2")&"' and device='"&rs("device")&"'"
      elseif group="device" then
         SQL1 = "select count(*) as NumUsersReg from tblUsers "&addSqlReg&" and device='"&rs("device")&"'"
      elseif group="afftranid" then
         SQL1 = "select count(*) as NumUsersReg from tblUsers "&addSqlReg&" and afftranid='"&rs("afftranid")&"'"
      end if

      'SQL1 = "select count(*) as NumUsersReg from tblUsers where sessionID in (select sessionID from tblSessions where recID="&rs("id")&")" 
        'tblSessions inner join tblUsers on tblUsers.sessionID=tblSessions.sessionID and tblSessions.recID="&id
		'end if

        'response.write SQL1
		rs2.Open SQL1 ,Conn,3,3
		NumUsersReg=rs2("NumUsersReg")
       
		if isNull(NumUsersReg) then NumUsersReg=0
		totalNumUsersReg=totalNumUsersReg+NumUsersReg
		rs2.Close

      '  landingPage=""
      '  SQL1 = "select top 1 landingPage from tblComingReport where REFERER='"&rs("referer")&"'"
      ' rs2.Open SQL1 ,Conn,3,3
		'landingPage=rs("landingPage")
      '  rs2.Close
       
       'if MEDIA_NEW="1" then
       ' SQL1 = "select count(*) as NumUsersPayed from tblUsers "&addSqlReg&" and  left(REFERER,3)='"&rs("referer")&"' and CUSTOMER_ID in (select UserId from tblRMTransactions where sumPayed>0 and descriptionId<>3)"
       'else
       ' SQL1 = "select count(*) as NumUsersPayed from tblSessions inner join tblUsers on tblUsers.sessionID=tblSessions.sessionID and tblSessions.recID="&id&" and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)"
       'end if
      
       if group="referer" then
       SQL1 = "select count(*) as NumUsersPayed from tblUsers "&addSqlReg&" and sessionID in (select sessionID from tblSessions where recID="&rs("id")&") and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)"  
      elseif group="landing" then
SQL1 = "select count(*) as NumUsersPayed from tblUsers "&addSqlReg&" and landingPage='"&rs("landingPage")&"' and device='"&rs("device")&"' and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)"  
         elseif group="affid2" then
       SQL1 = "select count(*) as NumUsersPayed from tblUsers "&addSqlReg&" and affid='"&rs("affid2")&"' and device='"&rs("device")&"' and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)"  
      elseif group="device" then
       SQL1 = "select count(*) as NumUsersPayed from tblUsers "&addSqlReg&" and device='"&rs("device")&"' and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)"  
       elseif group="afftranid" then
       SQL1 = "select count(*) as NumUsersPayed from tblUsers "&addSqlReg&" and afftranid='"&rs("afftranid")&"' and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)"  
       end if
      'where sessionID in (select sessionID from tblSessions where recID="&id&") and UserId in (select UserId from tblTransactions where (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount') and result<>0)" 
       rs2.Open SQL1 ,Conn,3,3
       NumUsersPayed=rs2("NumUsersPayed")
       if isNull(NumUsersPayed) then NumUsersPayed=0
       totalNumUsersPayed=totalNumUsersPayed+NumUsersPayed
       rs2.Close
       
       NumClick=rs("NumShowTotal")

     
       
        if NumClick>0 then
        percReg=NumUsersReg*100/(NumClick)
        percReg=FormatNumber(percReg,1,true)
        percPayed=NumUsersPayed*100/(NumClick)
        percPayed=FormatNumber(percPayed,1,true)
       else
        percReg=0
        percPayed=0
       end if
       
       if NumUsersReg>0 then
       procPayed=NumUsersPayed*100/(NumUsersReg)
       procPayed=FormatNumber(procPayed,1,true)
       else
       procPayed=0
       end if
      if group<>"afftranid" then 
          if rs("device")=1 then
          deviceText="PC"
          elseif rs("device")=2 then
          deviceText="mobile"
          elseif rs("device")=3 then
          deviceText="tablet"
          end if
      end if
        totalClicked=totalClicked+NumClick
        
        if IsInReport=false then
		Response.Write("<TR bgcolor='orange' >")
		elseif (rs.AbsolutePosition mod 2)=0 then
		Response.Write("<TR onMouseOver=this.bgColor='#FFF0A7' onMouseOut=this.bgColor='#ededed' bgcolor='#ededed' >")
		else
		Response.Write("<TR onMouseOver=this.bgColor='#FFF0A7' onMouseOut=this.bgColor='White' bgcolor='white' >")
		end if

      if group="referer" then
      referer=rs("referer")
      landingPage=rs("landingPage")
      affid2=rs("affid2")
      
      elseif group="landing" then
      landingPage=rs("landingPage")
       affid2=""
       referer=""
      elseif group="affid2" then
      landingPage=""
      affid2=rs("affid2")
     
       elseif group="afftranid" then
      landingPage=rs("afftranid")
      affid2=rs("affid2")
      afftranid=rs("afftranid")
       end if

            affDescr=""
            if affid2<>"" and not isNULL(affid2) and len(affid2)=4 then
                  SQL1 = "select description from tblAffiliatesPixels where affID2="&affid2
                  rs2.Open SQL1 ,Conn,3,3
                  if not(rs2.EOF or  rs2.BOF) then
                  affDescr=rs2("description")
                  else
                  affDescr=""
                  end if
                  rs2.close 
             end if

        %>

     <td><%=NumClick%></td>
     <td><%=affid2%></td>
     <td><%=affDescr%></td>
     <td><%=percReg%>%</td>
     <td><%=percPayed%>%</td>
     <td><textarea><%=referer%></textarea></td>
     <td><textarea><%=landingPage%></textarea></td>
	 <td><%=NumUsersReg%></td>
	 <td><%=NumUsersPayed%></td>
     <td><%=procPayed%>%</td>
     <td><%=deviceText%></td>
     
    </tr>
  <%
      rs.MoveNext
    wend
    end if
    rs.Close

set rs = Nothing
Conn.Close
set Conn = Nothing



if totalNumUsersReg>0 then
totalprocPayed=FormatNumber(totalNumUsersPayed*100/(totalNumUsersReg),2,true)
end if

if totalClicked>0 then
totalpercReg=FormatNumber(totalNumUsersReg*100/(totalClicked),2,true)
totalpercPay=FormatNumber(totalNumUsersPayed*100/(totalClicked),2,true)
end if

 %>
   <tr>
     <td align="center"><font size="2" face="arial" color="red"><%=totalClicked%></td>
       <td></td>
     <td align="center"><font size="2" face="arial" color="red"><%=totalpercReg%>%</td>
     <td align="center"><font size="2" face="arial" color="red"><%=totalpercPay%>%</td>
     <td></td>
     <td></td>
       <td></td>
     <td align="center"><font size="2" face="arial" color="red"><%=totalNumUsersReg%></td>
     <td align="center"><font size="2" face="arial" color="red"><%=totalNumUsersPayed%></td>
     <td align="center"><font size="2" face="arial" color="red"><%=totalprocPayed%>%</td>
 </tr>

   </table>

</td>
 

</table>
</form>
</div></div>