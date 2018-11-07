<%@Language="VBScript"  codepage= 65001%>

<%    response.Buffer=false
      'Response.AddHeader "Content-Type", "text/html;charset=UTF-8"
      Response.CodePage = 65001
      Response.CharSet = "UTF-8"
%>

<!--#include file="../connect.asp"-->
<%
 'response.write file_name
 if file_name<>"default.asp" and (Session("adminPass")="" or Session("adminUser")="") then Response.Redirect("default.asp")
 if session("mainDomain")="" then
     SQL1 = "select top 1 MainDomain from  tblWebsite"
	 rs.Open SQL1 ,Conn,3,3
	 if not(rs.EOF or  rs.BOF) then
      session("mainDomain")=rs("mainDomain")
     end if
     rs.close
 end if      
    %>






