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
    ftdonly="1"
		DateStart=DateToday
		end if

		if DateEnd="" then
		DateEnd=DateToday
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
	
        if ftdonly="" then ftdonly=Request.QueryString("ftdonly")
        if ftdonly="1" then checkftd="checked"


    
        SQL1 = "select * from  tblAffiliatesPixels where affID2='"&session("affID2")&"'"
	    rs.Open SQL1 ,Conn,3,3
      if not(rs.EOF or  rs.BOF) then
	    price=rs("price")
          hybrid=rs("hybrid")
        revshare=rs("revshare")
        model=rs("model")
            if model=2 then
                selectcpa="selected"
                model="CPA"
            elseif model=3 then
                selectmixed="selected"
                 model="HYBRID"
            elseif model=0 then
                selectother="selected"
                model="REV-SHARE"
            elseif model=1 then
                model="CPL"
            end if
    end if
	    rs.Close



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

  <tr >
  <td align="center" valign="top"><font size="2" face="arial">
  <table>
    <tr>
  <td>Start:&nbsp; <input type="text" name="DateStart" size="14" value="<%=DateStart%>">
       
		<a HREF="#" onClick="cal.select(document.forms['form1'].DateStart,'anchor1','dd/MM/yyyy'); return false;" NAME="anchor1" ID="anchor1"><img src="images/calendar.gif" width="25" alt border="0"></a>
   </td>
   
   <td><font size="2" face="arial"><b>Time
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
   </TR>
      <tr>
  <td align="center" valign="top"><font size="2" face="arial"><b>End:
  <input type="text" name="DateEnd" size="14" value="<%=DateEnd%>">
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
 </tr>
     </table>  
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
           <OPTION>Ref</OPTION>
           <OPTION <%=selecLanding%>>landing Page</OPTION>
           <!--OPTION <%=selecaffID2%>>Affiliate</!--OPTION-->
           <OPTION <%=selecdevice%>>Device</OPTION>
            <OPTION <%=selecafftranid%>>affTranID/ClickID</OPTION>
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
 <font size="2" face="arial"><b> DEVICE:
 <INPUT type="radio" id="Text1" name="typePC" value="1" <%=checkPC%>>-PC/DESK
  </td>
  <td align="center" valign="top">
   <font size="2" face="arial"><b>
 <INPUT type="radio" id="Radio1" name="typePC" value="3" <%=checkPlanshet%>>-Tablet
  </td>
  <td align="center" valign="top">
 <font size="2" face="arial"><b>
 <INPUT type="radio" id="Radio2" name="typePC" value="2" <%=checkMobile%>>-Mobile
  </td>

    </tr>
  <%Randomize
	num=Rnd()%>  
   <tr>
       <td align="center" valign="top">
 <font size="2" face="arial"><b>
 <INPUT type="checkbox" id="ftdonly" name="ftdonly" value="1" <%=checkftd%>>-Sales ONLY
  </td>
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
<h1>Account Transactions - <%=model %></h1>
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


	addSql=" where insertDate>='"&date_from&"' and insertDate<='"&date_to&"'"
    addSqlTrans=" and Dateinsert>='"&date_from&"' and Dateinsert<='"&date_to&"'"
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

	
    

    if session("accessLevel")=3 then
       addSql=addSql&" and affID = '"&session("affID2")&"'"
    end if

   SQL1="select count(id) as CountLeads from tblUsers "&addSQL&" "
   ' response.Write SQL1
      rs.Open SQL1 ,Conn,3,3
      if not(rs.EOF or  rs.BOF) then
	    CountLeads=rs("CountLeads")
    end if
	    rs.Close

    	if ftdonly<>"" then
    addSql=addSql&" and id in (select userID from tblTransactions where TransactionType like 'debit_%' and result=1) "
   end if

      if model="REV-SHARE" then
    SQL1="select sum(Amount) as NGRShare,count(id) as Countrev from tblTransactions where (TransactionType like 'debit_%' or TransactionType like 'rebill_%' ) and result=1 and userID in (select id from tblUsers "&addSQL&")"
    
      rs.Open SQL1 ,Conn,3,3
    if not(rs.EOF or  rs.BOF) then
	    NGRShare=rs("NGRShare")
    Countrev=rs("Countrev")
    end if
	    rs.Close

     SQL1 = "select sum(convert(float,transaction_cost_to_account)) as ticketCost from  CompletedTransactions where source_ref in (select ref from tblCart where userID in(select id from tblUsers "&addSQL&"))"
	    'response.Write SQL1
    '    rs.Open SQL1 ,ConnOrders,3,3
   ' if not(rs.EOF or  rs.BOF) then
	  '  ticketCost=rs("ticketCost")
         ticketCost=NGRShare*0.185
   ' end if
         if not isNUll(ticketCost) then ticketCost=FormatNumber(ticketCost,2)
	'    rs.Close
    NGRShare=NGRShare-ticketCost

    end if 

     SQL1="select count(id) as CountSales from tblUsers "&addSQL&" and id in (select userID from tblTransactions where TransactionType like 'debit_%' and result=1)"
    
      rs.Open SQL1 ,Conn,3,3
    if not(rs.EOF or  rs.BOF) then
	    CountSales=rs("CountSales")
    end if
	    rs.Close
  

     SQL1="select * from tblUsers "&addSQL&" order by insertDate DESC"
     'Response.Write SQL1
	 rs.Open SQL1 ,Conn,3,3


   
	if rs.EOF or  rs.BOF then
	Response.Write ("<tr><td align='center' valign=top><B>There are no Records</b></td></tr>")
    Rcounter=0
	else
    SumUserPayed=0
    totalSumUserPayed=0
    set rs2 = server.CreateObject("ADODB.recordset")
     SumUserPayed=0

    Rcounter=CountLeads
    
        
    %>
    <script type="text/javascript">
        var tableToExcel = (function () {
            var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
            return function (table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
                window.location.href = uri + base64(format(template, ctx))
            }
        })()
    </script>
     <font style="background-color:#fffa09; font-weight:bold;"><%=Rcounter%> LEADS  /  NGR: &euro;<%=NGRShare %>  / <%=CountSales%> FTD's</font> <input type="button" onclick="tableToExcel('MainResult', 'Data Export')" value="Export to Excel">

     <table width="100%" border="0" cellpadding="1" cellspacing="0" class="tableCSS" id="MainResult">	
     <thead> <tr>
         <th data-sort="int" align="center">ID</th>
         
		    <th>Created</th>
          <% if model="CPA" or model="HYBRID" or model="REV-SHARE" then %>
            <th>STATUS</th>
           <%end if %>
           <th data-sort="string">Referer</th>
            <th data-sort="string">Country</th>
            <th data-sort="string">AffId</th>
			<th data-sort="string">AffTranID</th>
            <th data-sort="string">IP</th>
            <th data-sort="string">LandingPage</th>
           <th data-sort="string">EventID</th>
           <th data-sort="string">ClickID</th>
           <th data-sort="string">SessionID</th>
           <th data-sort="string">AffKey</th>
         <% if model="CPA" or model="HYBRID" or model="REV-SHARE" then %>
          <th data-sort="string">Amount Spent</th>
          <%end if %>
         
         
    </tr>
  <%while not rs.EOF
       SQL1 = "select sum(Amount) as SumUserPayed from tblTransactions where userID="&rs("id")&" and (TransactionType='debit_wallet' or TransactionType='debit_creditcard' or TransactionType='debit_bankaccount' or TransactionType='rebill_creditcard') and result=1"& addSqlTrans 
    rs2.Open SQL1 ,Conn,3,3
       SumUserPayed=rs2("SumUserPayed")
      ticketCost=SumUserPayed*0.185
      SumUserPayed=SumUserPayed-ticketCost

       if isNull(SumUserPayed) then SumUserPayed=0
      statusName=""
      if SumUserPayed>0 then 
      countUserPayed=countUserPayed+1
        statusName="Transaction Approved"
      end if
       totalSumUserPayed=totalSumUserPayed+SumUserPayed
       rs2.Close
     
      %>
		    <td valign="top" align="center"><%=rs.fields("userID")%></td>
		    
            <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("insertDate")%></td>
           <% if model="CPA" or model="HYBRID" or model="REV-SHARE" then %>
            <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=statusName%></td>
            <%end if %>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><textarea><%=rs.fields("Referer")%></textarea></td>
        	<td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("Country")%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("AffId")%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=right(rs.fields("AffTranID"),25)%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("IP")%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><textarea><%=rs.fields("landingPage")%></textarea></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("EventID")%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("ClickID")%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=rs.fields("SessionID")%></td>
		     <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><textarea><%=rs.fields("AffKey")%></textarea></td>
		     <% if model="CPA" or model="HYBRID" or model="REV-SHARE" then %>
                  <td valign="top" align="center">&nbsp;&nbsp;<font face="arial" style="FONT-SIZE: 9pt;"><%=SumUserPayed%></td>
            <%end if %>
            </tr>
  <%
      rs.MoveNext
    wend
    end if
    rs.Close

set rs = Nothing
Conn.Close
set Conn = Nothing


 %>
   <% if model="CPA" or model="HYBRID" or model="REV-SHARE" then %> <tr><td colspan="12"></td><td> Acquisitions</td><td><%=countUserPayed %> - <%=totalSumUserPayed %></td></tr>  <%end if %>
   </table>

</td>
 

</table>
</div></div>