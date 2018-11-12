<%@ Language=VBScript %>
<html>
<!--#include file="../../connect.asp"-->
<head>
<Title>Photo-Galery</Title>
<%objname=Request.QueryString ("objname")
  BusId=Request.QueryString ("catId")
  if BusId<>"" then
   Set MyFileObject=Server.CreateObject("Scripting.FileSystemObject")
       if MyFileObject.FolderExists(server.MapPath("../../galery_images/"&BusId)) then
       else
       MyFileObject.CreateFolder(server.MapPath("../../galery_images/"&BusId))   
       end if
   Set MyFileObject=nothing
  path="galery_images/"&BusId&"/"
  else
  path="galery_images/"
  end if%>
  
  
<script language="JavaScript">
function SelectImage(ImageName) 
	{
window.opener.editor_insertHTML("<%=objname%>", "<IMG src='<%=path%>"+ImageName+"'>");
window.close();
	}
</script>
<style type="text/css">
<!--
a:link       { color: indigo }
a:visited    { color: indigo }
a:hover      { color: BLUE }
-->
</style>
</head>
<body bgcolor="#FBEED0" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" text="black">
<basefont face="arial" size="1" color="black">
<center>
<table cellpadding="0" cellspacing="0" width="100%">
<tr><td bgcolor="DeepSkyBlue" align="center"><font face="Arial" size="4"><b>
Photo Galery</td></tr></table>
<a href="../../upload.asp?objname=<%=objname%>&catId=<%=BusId%>"><img SRC="../../images/image_add.gif" border="0" alt="Upload Images" WIDTH="35" HEIGHT="35"></a>
<a href="../../delete_image.asp?objname=<%=objname%>&catId=<%=BusId%>"><img SRC="../../images/image_del.gif" border="0" alt="Delete images" WIDTH="35" HEIGHT="35"></a>
<%
Set MyFileObject=Server.CreateObject("Scripting.FileSystemObject")
Set MyFolder=MyFileObject.GetFolder (Server.MapPath("../../"&path))
if MyFolder.Size = 0 then
text="There are no images."
else
%>
<center><font size=2><b>Click on image you want to insert</b></font>
<table border="1" width="100%" cellpadding="1" cellspacing="1">
<tr valign="middle">
<%
i=1
For each thing in MyFolder.Files
FileName=Right (thing,Len(thing)-InStrRev(thing,"\"))
FileType=Right(FileName,3)
if FileType="gif" or FileType="jpg" then
 	if i=5 then
	i=1%>
	</tr><tr>
	<%end if%>
	<td align="center">
	<img style="cursor:hand;" onclick="SelectImage('<%=FileName%>')" alt="<%=FileName%>" src="../../galery_images/<%=FileName%>" width="60" border="0">
	<br>
	https://ssl.bidwiz.co.uk/admiralNew/galery_images/<%=FileName%>
	</td>
	<%
	i=i+1
end if	
Next
%>
</tr></table>
<%
end if
Set MyFolder=nothing
Set MyFileObject=nothing

%>
<br>
<font color="red" size=3><b><%Response.Write ("<BR>"& text)%></font><hr>

</body>
</html>
