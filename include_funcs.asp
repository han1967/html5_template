<%  
   ' answer=dataJsonForSyndicate(1,"kiwiozi",1)
   ' splitAnswer=Split(answer,"|")
   ' response.Write splitAnswer(0)&" "&splitAnswer(1)&" "&splitAnswer(2)
function GetSyndData(num_weeks,game,Nshares)
            SQL1 = "select prodId,prodName,originalName,draw_id,prodPrice,prodRules,product_draws,syndicateData from tblGameProductsBackUp where originalName='"&game&"'"
            rs2.Open SQL1 ,Conn,3,3
            if not(rs2.EOF or  rs2.BOF) then
                prodRules=rs2("prodRules")
                product_draws=rs2("product_draws")
                syndicateData=rs2("syndicateData")
                shareCost=rs2("prodPrice")
                product_name=rs2("prodName")
                product_slug=rs2("originalName")
                prodID = rs2("prodId")
            end if
            rs2.close
            
            cost=shareCost*Nshares*num_weeks

            Set myJSON = JSON.parse(syndicateData)
            datecount = myJSON.length
            syndicate_id=eval("myJSON.[0].syndicate_id")
           
            if not isNULL(product_draws) and product_draws<>"" then
                Set myJSON = JSON.parse(product_draws)
                numLines = myJSON.length
                i=num_weeks-1
                Set d=Server.CreateObject("Scripting.Dictionary")
                d.Add 1,0
                d.Add 2,1
                d.Add 4,2
                d.Add 16,3
                d.Add 32,4
                i=d.Item(num_weeks)
                draw_id=eval("myJSON.["&i&"].draw_id")
            end if
            
        GetSyndData=prodID&"|"&cost&"|""purchases"":[{""product_id"":"&prodID&",""product_name"":"""&product_name&""",""product_slug"":"""&product_slug&""",""entries"":[{""shares"":"&Nshares&",""product_draw_id"":"&draw_id&",""syndicate_id"":"&syndicate_id&"}]}]"
       
end function	
   
    
      Function CheckAllowEmail(ByRef strData)
	 strValue = trim(replace(strData," ",""))
     allowSymb="@-_.ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
      iLen = Len(strValue)
   I = 1
   strOutput = ""
   strChar = ""
   CheckAllowEmail=1
 
    While I <= iLen
        strChar = Ucase(Mid(strValue, I, 1))
        if instr(allowSymb,strChar)=0 then
        	 CheckAllowEmail=0
             I = iLen+1
        end if
    I = I + 1
    Wend

   End Function  
  
      Function CheckAllowAddress(ByRef strData)
	 strValue = trim(replace(strData," ",""))
     allowSymb="+@\/,-_.ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
      iLen = Len(strValue)
   I = 1
   strOutput = ""
   strChar = ""
   CheckAllowAddress=1
 
    While I <= iLen
        strChar = Ucase(Mid(strValue, I, 1))
        if instr(allowSymb,strChar)=0 then
        	 CheckAllowAddress=0
             I = iLen+1
        end if
    I = I + 1
    Wend

   End Function  
function sendHTTPGet(url,requestString)
          set objXMLHTTP = Server.CreateObject("WinHttp.WinHttpRequest.5.1")
          objXMLHTTP.open "GET", "" & url & "", False
        '  objXMLHTTP.setRequestHeader "EPRO-API-KEY", APIkey
          'objXMLHTTP.setRequestHeader "Content-type", "application/json"
       '   objXMLHTTP.setRequestHeader "Accept","application/json"
          objXMLHTTP.setRequestHeader "Content-type", "application/x-www-form-urlencoded"
         ' objXMLHTTP.setRequestHeader "Content-Type", "application/xml; charset=utf-8"
         ' objXMLHTTP.setRequestHeader "Content-Length", Len(requestString)
          Call objXMLHTTP.send(requestString)
          answer = objXMLHTTP.responseText
          sendHTTPGet=answer
end function     

    Function HasNumber(strData )
    
     
    For iCnt = 1 To Len(strData)
        If IsNumeric(Mid(strData, iCnt, 1)) Then
            HasNumber = True
            Exit Function
        End If
    Next 
     
End Function
	%>   
   
   
