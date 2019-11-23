<%
 set Conn= server.CreateObject("ADODB.connection")
  ConnStr="Provider=SQLOLEDB;Persist Security Info=False;User ID=;Password=;Initial Catalog=Bcure;Data Source=;"
  'response.write ConnStr
  Conn.Open ConnStr


 Conn.Cursorlocation = 3
     set rs = server.CreateObject("ADODB.recordset")
     set rs2 = server.CreateObject("ADODB.recordset")
     set CC = server.CreateObject("ADODB.recordset")
    path=request.ServerVariables("PATH_INFO")
    file_name=LCase(right(path,len(path)-InStrRev(path,"/")))


 uid=request.QueryString("uid")

    if not isNull(uid) then
    SQL1 = "select id from tblUsers where email='"&uid&"'"
	'response.write SQL1
    rs.Open SQL1 ,Conn,3,3
	if not(rs.EOF or  rs.BOF) then
     uid=rs("id")
    else
    Response.Write ("<script>alert('Err');window.close();</script>") 
    response.end
    end if
    rs.close
  end if

   
   
    
    sql="update tblUsers set lastcallstatusname='Mailer Call Request',lastcallID=24 where id="&uid
    ' response.Write sql
		Conn.Execute sql

     SQL="insert into tblCRMEvents (ownerId,recID,subject,textEvent,dateEvent,eventType) values (0,"&uid&",'MAILER CALL REQUEST','MAILER CALL REQUEST',getdate(),'CALL')"
		'Response.Write SQL
		Conn.Execute SQL
    
    Response.Write ("<script>alert('Thank you, your request has been received. Our representative will contact you shortly');location.href='https://bcure.bewelltime.com/files/mail.pdf';</script>") 
    %>
 
