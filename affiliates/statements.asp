<!--#include file="topconnect.asp"-->
<%

         DateStart=Request.QueryString("DateStart")
		 DateEnd=Request.QueryString("DateEnd")
         
	      DateToday=date()    
   	          
	if DateStart="" then
   
	DateStart=DateToday
	DateEnd=DateToday
	end if
    
%>
 <head>
 <meta http-equiv="Content-Type" Content="text/html;charset=WINDOWS-1255">
 <script LANGUAGE="JavaScript" SRC="CalendarPopup.js"></script>
	<script LANGUAGE="JavaScript">
	var cal = new CalendarPopup(); 
    cal.showYearNavigation();
	</script>
<script LANGUAGE="JavaScript">	
function check()
	{
	var msg="" 
 
  //if ((document.form1.DateStart.value=="")||(document.form1.DateEnd.value=="")) msg=msg+'Choose dates\n';
	
		 if(msg!="")
       {
        alert(msg)
       return false;
       }
}


function Alert(src) {
    if (confirm(" You can't undo this operation! \n Are you sure you want to delete record?"))
        document.location = src
}


function openWin(page){
    x=window.open(page,'newwin','width=1224,height=800,scrollbars=1,resizable=1')
}

</script>	
 <link href="css/menuh.css" rel="stylesheet" />
<style>
    .responstable {
    margin: 1em 0;
width: 100%;
max-width:600px;
overflow: hidden;
background: #FFF;
color: #024457;
border-radius: 10px;
border: 1px solid #167F92;
}
    .responstable td {
    text-align: left;
}
    .responstable tr:nth-child(2n+1) {
    background-color: #EAF3F3;
}
    .responstable tr {
    border: 1px solid #D9E4E6;
}
  
</style>

</head>
<body bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0" style="background-color:#5ab5de;" >
<!--#include file="topMenu.asp"-->
<table width="100%" style="font-size:12px;background-color:#eaeaea;">
<tr>


<form name="form1" method="get" onsubmit="return check();">

<td style="border-right:1px solid #0094ff;">
 
  <table border=0>	
  <tr><td style="font-size:12px;">Start</td> <td><input type="text" name="DateStart" size="10" value="<%=DateStart%>">
		<a HREF="#" onClick="cal.select(document.forms['form1'].DateStart,'anchor1','dd/MM/yyyy'); return false;" NAME="anchor1" ID="anchor1"><img src="images/calendar.gif" width="25" alt border="0"></a>
   </td></tr><tr>
<td style="font-size:12px;">End</td>
<td><input type="text" name="DateEnd" size="10" value="<%=DateEnd%>">
<a HREF="#" onClick="cal.select(document.forms['form1'].DateEnd,'anchor1','dd/MM/yyyy'); return false;" NAME="anchor1" ID="anchor1"><img src="images/calendar.gif" width="25" alt border="0"></a>
</td></tr></table>
</td>
 <td><INPUT type="submit" value="SHOW" id=submit1 name=submit1 class="myButtonSmall"></td>
</form>
</tr>
</table>



<div style="clear:both; height:5px;"></div>
<div style="padding:1%;background-color:#fff;">
    <h1>Statements</h1>
<div align="center">

    
<%  if DateStart<>"" and DateEnd<>"" then
    if IsDate(DateStart) and IsDate(DateEnd) then
		date_from_split=split (DateStart,"/")
		date_from=date_from_split(2)&"-"&date_from_split(1)&"-"&date_from_split(0)&" 0:00:01"
				 
		date_to_split=split (DateEnd,"/")
		date_to=date_to_split(2)&"-"&date_to_split(1)&"-"&date_to_split(0)&" 23:59:59"

    
  if IsDate(DateStart) and IsDate(DateEnd) then
        
        if HourEnd=24 then HourEnd=23
        if len(MinStart)=1 then MinStart="0"&MinStart
        if len(MinEnd)=1 then MinEnd="0"&MinEnd
		date_from_split=split (DateStart,"/")
		date_from=date_from_split(2)&"-"&date_from_split(1)&"-"&date_from_split(0)
				 
		date_to_split=split (DateEnd,"/")
		date_to=date_to_split(2)&"-"&date_to_split(1)&"-"&date_to_split(0)&" 23:59:59"


	addSql=" where insertDate>='"&date_from&"' and insertDate<='"&date_to&"'"
    addSqlTrans=" Dateinsert>='"&date_from&"' and Dateinsert<='"&date_to&"'"
    else
    response.end
	end if
	


    if session("accessLevel")=3 then
       addSql=addSql&" and affID = '"&session("affID2")&"'"
    end if

    
	
   
    
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

  
     SQL1="select count(id) as CountLeads from tblUsers "&addSQL&" "
  '  response.Write SQL1
      rs.Open SQL1 ,Conn,3,3
      if not(rs.EOF or  rs.BOF) then
	    CountLeads=rs("CountLeads")
    end if
	    rs.Close

    
     SQL1="select count(id) as CountSales from tblUsers "&addSQL&" and test is null and id in (select userID from tblTransactions where TransactionType like 'debit_%' and result=1)"
    
      rs.Open SQL1 ,Conn,3,3
    if not(rs.EOF or  rs.BOF) then
	    CountSales=rs("CountSales")
    end if
	    rs.Close
  
    
     if model="REV-SHARE" then
    SQL1="select sum(Amount) as NGRShare,count(id) as Countrev from tblTransactions where  "&addSqlTrans&" and (TransactionType like 'debit_%' or TransactionType like 'rebill_%' ) and result=1 and userID in (select id from tblUsers "&addSQL&"  )"
    'response.Write SQL1
      rs.Open SQL1 ,Conn,3,3
    if not(rs.EOF or  rs.BOF) then
	    NGRShare=rs("NGRShare")
    Countrev=rs("Countrev")
    end if
	    rs.Close

    SQL1="select sum(Amount) as cancel_amount,count(id) as Countrev from tblTransactions where  "&addSqlTrans&" and (TransactionType like '%CHB%' or TransactionType like '%REFUNDED%' ) and result=1 and userID in (select id from tblUsers where affID = '"&session("affID2")&"'  )"
   ' response.Write SQL1
      rs.Open SQL1 ,Conn,3,3
    if not(rs.EOF or  rs.BOF) then
     if date_to_split(1)<4 then 
	    cancel_amount=rs("cancel_amount")*1.7
    else
     cancel_amount=rs("cancel_amount")*2.6
    end if
    if isNULL(cancel_amount) then cancel_amount=0
     if date_to_split(1)<4 then 
    Count_cancel=rs("Countrev")*1.7
    else
    Count_cancel=rs("Countrev")*2.6
    end if

    end if
	    rs.Close

     SQL1 = "select sum(convert(float,transaction_cost_to_account)) as ticketCost from  CompletedTransactions where source_ref in (select ref from tblCart where userID in(select id from tblUsers "&addSQL&"))"
	    'response.Write SQL1
    '    rs.Open SQL1 ,ConnOrders,3,3
   ' if not(rs.EOF or  rs.BOF) then
	  '  ticketCost=rs("ticketCost")
    if date_to_split(1)<4 then 
         ticketCost=NGRShare*0.215
    else
    ticketCost=NGRShare*0.315
    end if
   ' end if
         if not isNUll(ticketCost) then ticketCost=FormatNumber(ticketCost,2)
	'    rs.Close
    NGRShare=NGRShare-ticketCost

    end if 

	end if
    end if%>
	


    <table class="responstable" style="padding:5px;font-size:large;margin:10px;">
 <tr><th style="text-align:right;">Date Range: </th><th style="text-align:left;"> <%=date_from %>  -  <%=date_to%> </th></tr>

<% if model="CPL" or model="HYBRID" or model="REV-SHARE" then %>
   <tr> 
    <td>CPL (<strong><%=price%></strong>) Revenue: </td>
    <td><%=CountLeads%> / <strong>&euro;<%=CountLeads*price%> </strong></td>
  </tr>
 <%
     Royalties=Royalties+(CountLeads*price)
     end if %>
 <% if model="HYBRID" then %>
  <tr>
      <td>Hybrid (<%=hybrid%>) Revenue: </td>
    <td><%=CountSales%> / &euro;<%=CountSales*hybrid%> </td>
  </tr>
 <% Royalties=Royalties+(CountSales*hybrid)
     end if %>
 <% if model="REV-SHARE" then %>  
  <tr>
    
    <td>Sales Count:<%=Countrev%></td>
  </tr>
  <tr>
    <td>Net Gaming Revenue:<%=NGRShare%> </td>
    <td>RevShare Profit (<strong>%<%=revshare%></strong>): <strong>&euro;<%=(NGRShare+cancel_amount)*(revshare/100)%> </strong></td>
  </tr>
  <tr>
    <td>Canceled Amount:<%=cancel_amount%> </td>
  </tr>
  <%
       Royalties=Royalties+((NGRShare+cancel_amount)*(revshare/100))
      end if %>
    <% if model="CPA" then %>  
  <tr>
    <td>CPA (%<%=price%>) Revenue:</td>
    <td><%=CountSales%> / <strong>&euro;<%=CountSales*price%></strong></td>
  </tr>
  <%
       Royalties=Royalties+(CountSales*price)
      end if %>
      
<%
   
     %>

        <tr><td colspan="2"><hr /></td></tr>
         <tr><td colspan="2">Invoices:</td></tr>
        <tr><td colspan="2">
             <table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%" class="tableCSS">	

  <thead> <tr>
     
     <th data-sort="string">ID</th>
     <th data-sort="string">Amount (EUR)</th>
     <th data-sort="string">Invoice date</th>
     <th data-sort="string">Payment Date</th>
     <th data-sort="string">Description</th>
	</tr>
	
<%	SQL1 = "select * from  tblInvoices where payDate is NOT NULL and invoiceDate>='"&date_from&"' and affID = '"&session("affID2")&"'  and  invoiceDate<=getdate()  ORDER BY id desc"
	'response.Write SQL1
    rs.Open SQL1 ,Conn,3,3
    totalInvoices=0
	if not(rs.EOF or  rs.BOF) then
	Rcounter=rs.RecordCount
	while not rs.EOF
        totalInvoices=totalInvoices+rs("amount")
    	if (Rcounter mod 2)=0 then
		Response.Write("<TR onMouseOver=this.bgColor='#0098D0' onMouseOut=this.bgColor='#D9D9D9' bgcolor=#D9D9D9 >")
		else
		Response.Write("<TR onMouseOver=this.bgColor='#0098D0' onMouseOut=this.bgColor='White' bgcolor=white>")
		end if
%>     
		
	   	<td><%=rs.fields("id")%></td>
        <td><%=rs.fields("amount")%></td>
	   	<td><%=rs.fields("invoiceDate")%></td>
	   	<td><%=rs.fields("payDate")%></td>
        <td><%=rs.fields("description")%></td>
<%	rs.MoveNext
	wend
	end if
	rs.Close
	%>
	
	</table></td></tr>
   <tr><td></td><td style="text-align:right;">Total Invoices: <%=totalInvoices%></td></tr>
         <!--tr><td></td><td style="text-align:right;">Royalties(<%=royalty%>%): CALCULATE</td></!--tr-->

         <tr><th></th><th style="text-align:right;">Total Payable: &euro;<%=Royalties-totalInvoices%></th></tr>
       


        
        </table>



</div></div>


