<%
 set Conn= server.CreateObject("ADODB.connection")
  ConnStr="Provider=SQLOLEDB;Persist Security Info=False;User ID=AdmiralDB;Password=al557575222H;Initial Catalog=Bcure;Data Source=52.56.35.63;"
  'response.write ConnStr
  Conn.Open ConnStr


 Conn.Cursorlocation = 3
     set rs = server.CreateObject("ADODB.recordset")
     set rs2 = server.CreateObject("ADODB.recordset")
     set CC = server.CreateObject("ADODB.recordset")
    path=request.ServerVariables("PATH_INFO")
    file_name=LCase(right(path,len(path)-InStrRev(path,"/")))

    %>
 
