<%
Private Sub FixString(ByRef strData)
    
    Dim strValue 
    Dim I
    Dim iLen
    Dim strChar 
    Dim strOutput
    
   strValue = trim(strData)
   
 
   
   iLen = Len(strValue)
   I = 1
   strOutput = ""
   strChar = ""
         
    While I <= iLen
        strChar = Mid(strValue, I, 1)
      
      SELECT CASE Asc(strChar)
      CASE "39": strChar = "&#180;"
      CASE "34": strChar = "&quot;"
      CASE "196": strChar = "&Auml;"
      CASE "228": strChar = "&auml;"
      CASE "214": strChar = "&Ouml;"
      CASE "246": strChar = "&ouml;"
      CASE "220": strChar = "&Uuml;"
      CASE "252": strChar = "&uuml;"
      CASE "223": strChar = "&szlig;"
      CASE "193": strChar = "&Aacute;"
	  CASE "225": strChar = "&aacute;"
	  CASE "201": strChar = "&Eacute;"
	  CASE "233": strChar = "&eacute;"
	  CASE "205": strChar = "&Iacute;"
	  CASE "237": strChar = "&iacute;"
	  CASE "209": strChar = "&Ntilde;"
	  CASE "241": strChar = "&ntilde;"
	  CASE "211": strChar = "&Oacute;"
	  CASE "243": strChar = "&oacute;"
	  CASE "218": strChar = "&Uacute;"
	  CASE "250": strChar = "&uacute;"
	  CASE "220": strChar = "&Uuml;"
	  CASE "252": strChar = "&uuml;"
	  CASE "191": strChar = "&iquest;"
	  CASE "161": strChar = "&iexcl;"
	  CASE "128": strChar = "&euro;"
      CASE "170": strChar = "&ordf;"
	  CASE "186": strChar = "&ordm;"

	  CASE "192": strChar = "&Agrave;"
	  CASE "224": strChar = "&agrave;"
	  CASE "194": strChar = "&Acirc;"
	  CASE "226": strChar = "&acirc;"
	  CASE "198": strChar = "&AElig;"
	  CASE "230": strChar = "&aelig;"
	  CASE "199": strChar = "&Ccedil;"
	  CASE "231": strChar = "&ccedil;"
	  CASE "200": strChar = "&Egrave;"
	  CASE "232": strChar = "&egrave;"
	  CASE "201": strChar = "&Eacute;"
	  CASE "233": strChar = "&eacute;"
	  CASE "202": strChar = "&Ecirc;"
	  CASE "234": strChar = "&ecirc;"
	  CASE "203": strChar = "&Euml;"
	  CASE "235": strChar = "&euml;"
	  CASE "206": strChar = "&Icirc;"
	  CASE "238": strChar = "&icirc;"
	  CASE "207": strChar = "&Iuml;"
	  CASE "239": strChar = "&iuml;"
	  CASE "212": strChar = "&Ocirc;"
	  CASE "244": strChar = "&ocirc;"
	  CASE "140": strChar = "&OElig;"
	  CASE "156": strChar = "&oelig;"
	  CASE "217": strChar = "&Ugrave;"
	  CASE "249": strChar = "&ugrave;"
	  CASE "219": strChar = "&Ucirc;"
	  CASE "251": strChar = "&ucirc;"
	  CASE "220": strChar = "&Uuml;"
	  CASE "252": strChar = "&uuml;"




      'CASE "193": strChar = "&#1041;"'Б
      'CASE "209": strChar = "&#1057;"'С
      'CASE "225": strChar = "&#1073;"'б
      'CASE "241": strChar = "&#1089;"'с
      


      
      'CASE "13": strChar = "<br>"
      'CASE "38": strChar = "&amp;"
      'CASE "60": strChar = "&lt;"
      'CASE "62": strChar = "&gt;"
      
      END SELECT
                      
        strOutput = strOutput & strChar
        I = I + 1
    Wend
    
    
  
   strData = strOutput
    
End Sub

Private Sub FixString2(ByRef strData)
    
    Dim strValue 
    Dim I
    Dim iLen
    Dim strChar 
    Dim strOutput
    
   strValue = trim(strData)
   
 
   
   iLen = Len(strValue)
   I = 1
   strOutput = ""
   strChar = ""
         
    While I <= iLen
        strChar = Mid(strValue, I, 1)
      SELECT CASE Asc(strChar)
      CASE "39": strChar = "&#180;"
      CASE "34": strChar = "&quot;"
      CASE "13": strChar = "<br>"
      'CASE "38": strChar = "&amp;"
      'CASE "60": strChar = "&lt;"
      'CASE "62": strChar = "&gt;"
      
      END SELECT
                      
        strOutput = strOutput & strChar
        I = I + 1
    Wend
    
    
  
   strData = strOutput
    
End Sub

Private Sub FixString_iframe(ByRef strData)
    
    Dim strValue 
    Dim I
    Dim iLen
    Dim strChar 
    Dim strOutput
    
   strValue = trim(strData)
   
 
   
   iLen = Len(strValue)
   I = 1
   strOutput = ""
   strChar = ""
   flag="tag_open"
         
    While I <= iLen
        strChar = Mid(strValue, I, 1)
        if Asc(strChar)="39" then strChar = "&#180;"
        if Asc(strChar)="34" then strChar = "&quot;"
        if Asc(strChar)="60" then flag="tag_open"
        if Asc(strChar)="62" then flag="tag_close"
        if flag="tag_open" and strChar="&quot;" then strChar = ""
      
      'SELECT CASE Asc(strChar)
      'CASE "39": strChar = "&#180;"
      'CASE "34": strChar = ""
      'CASE "13": strChar = "<br>"
      'CASE "38": strChar = "&amp;"
      'CASE "60": strChar = "&lt;"
      'CASE "62": strChar = "&gt;"
      'END SELECT
                      
        strOutput = strOutput & strChar
        I = I + 1
    Wend
    
    
'SplitStr=Split(strOutput,"href=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"href=")
  
 'SplitStr=Split(strOutput,"src=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"src=")
  
'  SplitStr=Split(strOutput,"param name=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"param name=")
 
'   SplitStr=Split(strOutput,"value=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"value=")
 
'    SplitStr=Split(strOutput,"style=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"style=")

 '   SplitStr=Split(strOutput,"height=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"height=")
 
'     SplitStr=Split(strOutput,"width=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"width=")

'       SplitStr=Split(strOutput,"align=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"align=")

'        SplitStr=Split(strOutput,"valign=")
'for i=1 to ubound(SplitStr)
'SplitStr(i)=replace(SplitStr(i),"&quot;","",1,2)
'next
'strOutput=Join(SplitStr,"valign=")

  
   strData = strOutput
    
End Sub

Function isEmailValid(text) 
        allowdedSymb="@-_.abcdefghijklmnopqrstuvwxyz1234567890" 
        text_low=Lcase(text)
        isValid=true
        for j=0 to len(text)
        symb=mid(text_low,j+1,1)
        if instr(allowdedSymb,symb)=0 then
            isValid=false
        end if 
        next

        if isValid=true then
        Set regEx = New RegExp 
        regEx.Pattern = "^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w{2,}$" 
        isEmailValid = regEx.Test(trim(text)) 
        else
        isEmailValid=isValid
        end if 

End Function 	
Function isPassValid(text) 
        allowdedSymb="-_.abcdefghijklmnopqrstuvwxyz1234567890" 
        text_low=Lcase(text)
        isValid=true
        for j=0 to len(text)
        symb=mid(text_low,j+1,1)
        if instr(allowdedSymb,symb)=0 then
            isValid=false
        end if 
        next
		isPassValid=isValid
End Function 	
%>