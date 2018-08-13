<%
 set Conn= server.CreateObject("ADODB.connection")
  ConnStr="Provider=SQLOLEDB;Persist Security Info=False;User ID=admiraldb;Password=al557575222H;Initial Catalog=bcure;Data Source=10.100.101.12;"
  'response.write ConnStr
  Conn.Open ConnStr


 Conn.Cursorlocation = 3
     set rs = server.CreateObject("ADODB.recordset")
     set rs2 = server.CreateObject("ADODB.recordset")
     set CC = server.CreateObject("ADODB.recordset")
    path=request.ServerVariables("PATH_INFO")
    file_name=LCase(right(path,len(path)-InStrRev(path,"/")))

  

     
      

    supportemail="support@painlesslife.co.uk"
     function FixDate(dateVal)
	    if isDate(dateVal) then
		    if Len(Minute(dateVal))=1 then
		    Minutes="0"&Minute(dateVal)
		    else
		    Minutes=Minute(dateVal)
		    end if
	    dateVal=Day(dateVal)&"/"&Month(dateVal)&"/"&Right(Year(dateVal),2)&" "& Hour(dateVal)&":"&Minutes
	    end if
    FixDate=dateVal
    end function

    function FixDateShort(dateVal)
	    if isDate(dateVal) then
	    dateVal=Day(dateVal)&"/"&Month(dateVal)&"/"&Right(Year(dateVal),2)
	    end if
    FixDateShort=dateVal
    end function

    function XUp(parameter)
        Xup = Replace(parameter, "'", "''")
    end function

    function XDown(parameter)
        XDown = Replace(parameter, "''", "'")
    end function

    function quote(parameter)
        quote = "'"+XUp(parameter)+"'"
    end function

    function unquote(quoted)
        if Left(quoted,1) = "'" then
            quoted = Right(quoted,Len(quoted)-1)
        end if
        if Right(quoted,1)="'" then
            quoted = Left(quoted,Len(quoted)-1)
        end if
        unquote = XDown(quoted)
    end function



     

    
    


     %>
   
        <!--#include file="..\base_files\detectCountry.asp"-->
<%
     Function convertCurrency(sum,curRate,decim)
        curRate=session("convRate")
        curVal=sum*session("convRate")
        convertCurrency=FormatNumber(curVal,decim)
     End Function

      %>
        <!--#include file="..\base_files\detectDevice.asp"-->
     
         <!--#include file="..\base_files\detectInject.asp"-->
 
