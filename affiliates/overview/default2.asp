

<!--#include file="top.asp"-->
<script type="text/javascript" src="ieupdate.js"></script>
<%	
           
   
   
   if Request.QueryString("close")<>"" then
     Conn.Execute "SP_CHECK_CLOSE_ALL_AUCTIONS"
    ' Response.Redirect ("default.asp") 
    end if

    SQL1 = "select  count(*) as NumUsers  from  tblCustomer"
	rs.Open SQL1 ,Conn,3,3
    NumUsers=rs("NumUsers")*2
	rs.close

    '1_st (Main) 
    SQL1 = "select TOP 1 product_title,small_image,tblAuctions.id as AuctionId,tblAuctions.*,(select count(*)  from  tblBids where auctionId=tblAuctions.id) as NumProposals from  tblAuctions inner join tblProducts on tblProducts.id=tblAuctions.productId where isSample=0 and isClosed=0 and startDate<=dbo.fn_getServerDate(getDate()) and tblAuctions.id<>20123  order by Priority"
	rs.Open SQL1 ,Conn,3,3

	if not(rs.EOF or  rs.BOF) then
	 product_titleMain=rs("product_title")
	 small_imageMain=rs("small_image")
	 AuctionIdMain=rs("AuctionId")
	 maxPriceMain=rs("maxPrice")
	 myYearMain=Year(rs("endDate"))
	 myMonthMain=Month(rs("endDate"))*1-1
	 myDayMain=Day(rs("endDate"))
	 myHourMain=Hour(rs("endDate"))
	 myMinuteMain=Minute(rs("endDate"))
	 mySecondMain=Second(rs("endDate"))
	 auctionTypeM=rs("auctionType")
	 minOffers=rs("minOffers")
	 NumProposals=rs("NumProposals")
	 leftProposalsMain=minOffers-NumProposals
	 if leftProposalsMain<=0 then
	 leftProposalsMain="-"
	 end if%>

<script>
	var now_<%=rs("AuctionId")%>=new Date("<%=Year(now())%>"*1,"<%=Month(now())%>"*1-1,"<%=Day(now())%>"*1,"<%=Hour(now())%>"*1,"<%=Minute(now())%>"*1,"<%=Second(now())%>"*1);
	function getTime_<%=rs("AuctionId")%>() {

	now_<%=rs("AuctionId")%>.setSeconds(now_<%=rs("AuctionId")%>.getSeconds()+1);
	y2k = new Date('<%=Year(rs("endDate"))%>'*1,'<%=Month(rs("endDate"))%>'*1-1,'<%=Day(rs("endDate"))%>'*1,'<%=Hour(rs("endDate"))%>'*1,'<%=Minute(rs("endDate"))%>'*1,'<%=Second(rs("endDate"))%>'*1);
	days = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 / 24;
	daysRound = Math.floor(days);
	hours = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 - (24 * daysRound);
	hoursRound = Math.floor(hours);
	minutes = (y2k - now_<%=rs("AuctionId")%>) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
	minutesRound = Math.floor(minutes);
	seconds = (y2k - now_<%=rs("AuctionId")%>) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
	secondsRound = Math.round(seconds);
	
	if ((hoursRound==0)&&(minutesRound==0)&&(secondsRound==0)){
	    document.location='default.asp?close=<%=rs("AuctionId")%>'
	                                                          } 
	else{
		if (secondsRound.toString().length==1) secondsRound="0"+secondsRound
		if (minutesRound.toString().length==1) minutesRound="0"+minutesRound
		if (hoursRound.toString().length==1) hoursRound="0"+hoursRound

	//document.getElementById("Days_<%=rs("AuctionId")%>").innerHTML=daysRound
	document.getElementById("Hours_<%=rs("AuctionId")%>").innerHTML=hoursRound
	document.getElementById("Minits_<%=rs("AuctionId")%>").innerHTML=minutesRound
	document.getElementById("Seconds_<%=rs("AuctionId")%>").innerHTML=secondsRound
	    }
	newtime = window.setTimeout("getTime_<%=rs("AuctionId")%>();", 1000);
	}
	//  End --> 
	</script>
    <%
    else
    AuctionIdMain=0
	end if
	rs.close
	
	 '1_st 
    SQL1 = "select TOP 1 product_title,small_image,tblAuctions.id as AuctionId,tblAuctions.*,(select count(*)  from  tblBids where auctionId=tblAuctions.id) as NumProposals from  tblAuctions inner join tblProducts on tblProducts.id=tblAuctions.productId where  auctionType<>3 and isSample=0 and isClosed=0 and startDate<=dbo.fn_getServerDate(getDate()) and tblAuctions.id<>20123 and tblAuctions.id<>"&AuctionIdMain&" order by Priority"
	rs.Open SQL1 ,Conn,3,3

	if not(rs.EOF or  rs.BOF) then
	 product_title1_st=rs("product_title")
	 small_image1_st=rs("small_image")
	 AuctionId1_st=rs("AuctionId")
	 maxPrice1_st=rs("maxPrice")
	 myYear1_st=Year(rs("endDate"))
	 myMonth1_st=Month(rs("endDate"))*1-1
	 myDay1_st=Day(rs("endDate"))
	 myHour1_st=Hour(rs("endDate"))
	 myMinute1_st=Minute(rs("endDate"))
	 mySecond1_st=Second(rs("endDate"))
	 minOffers=rs("minOffers")
	 NumProposals=rs("NumProposals")
	 leftProposals1_st=minOffers-NumProposals
	 if leftProposals1_st<=0 then
	 leftProposals1_st="-"
	 end if
	 isAlmostClosed1_st=rs("isAlmostClosed")
	 %>

   <script>
	var now_<%=rs("AuctionId")%>=new Date("<%=Year(now())%>"*1,"<%=Month(now())%>"*1-1,"<%=Day(now())%>"*1,"<%=Hour(now())%>"*1,"<%=Minute(now())%>"*1,"<%=Second(now())%>"*1);
	function getTime_<%=rs("AuctionId")%>() {

	now_<%=rs("AuctionId")%>.setSeconds(now_<%=rs("AuctionId")%>.getSeconds()+1);
	y2k = new Date('<%=Year(rs("endDate"))%>'*1,'<%=Month(rs("endDate"))%>'*1-1,'<%=Day(rs("endDate"))%>'*1,'<%=Hour(rs("endDate"))%>'*1,'<%=Minute(rs("endDate"))%>'*1,'<%=Second(rs("endDate"))%>'*1);
	days = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 / 24;
	daysRound = Math.floor(days);
	hours = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 - (24 * daysRound);
	hoursRound = Math.floor(hours);
	minutes = (y2k - now_<%=rs("AuctionId")%>) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
	minutesRound = Math.floor(minutes);
	seconds = (y2k - now_<%=rs("AuctionId")%>) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
	secondsRound = Math.round(seconds);
	if ((hoursRound==0)&&(minutesRound==0)&&(secondsRound==0)){
	    document.location='default.asp?close=<%=rs("AuctionId")%>'
	                                                          } 
	else{
		if (secondsRound.toString().length==1) secondsRound="0"+secondsRound
		if (minutesRound.toString().length==1) minutesRound="0"+minutesRound
		if (hoursRound.toString().length==1) hoursRound="0"+hoursRound

	//document.getElementById("Days_<%=rs("AuctionId")%>").innerHTML=daysRound
	document.getElementById("Hours_<%=rs("AuctionId")%>").innerHTML=hoursRound
	document.getElementById("Minits_<%=rs("AuctionId")%>").innerHTML=minutesRound
	document.getElementById("Seconds_<%=rs("AuctionId")%>").innerHTML=secondsRound
	    }
	newtime = window.setTimeout("getTime_<%=rs("AuctionId")%>();", 1000);
	}
	//  End --> 
	</script>
    <%

	end if
	rs.close
	

	
 '2_nd 
    SQL1 = "select TOP 1 product_title,small_image,tblAuctions.id as AuctionId,tblAuctions.*,(select count(*)  from  tblBids where auctionId=tblAuctions.id) as NumProposals from  tblAuctions inner join tblProducts on tblProducts.id=tblAuctions.productId where tblAuctions.id<>"&AuctionId1_st&"  and tblAuctions.id<>"&AuctionIdMain&" and auctionType<>3 and isSample=0 and isClosed=0 and startDate<=dbo.fn_getServerDate(getDate()) and tblAuctions.id<>20123 order by Priority"
	rs.Open SQL1 ,Conn,3,3

	if not(rs.EOF or  rs.BOF) then
	 product_title2_nd=rs("product_title")
	 small_image2_nd=rs("small_image")
	 AuctionId2_nd=rs("AuctionId")
	 maxPrice2_nd=rs("maxPrice")
	 myYear2_nd=Year(rs("endDate"))
	 myMonth2_nd=Month(rs("endDate"))*1-1
	 myDay2_nd=Day(rs("endDate"))
	 myHour2_nd=Hour(rs("endDate"))
	 myMinute2_nd=Minute(rs("endDate"))
	 mySecond2_nd=Second(rs("endDate"))
	 minOffers=rs("minOffers")
	 NumProposals=rs("NumProposals")
	 leftProposals2_nd=minOffers-NumProposals
	 if leftProposals2_nd<=0 then
	 leftProposals2_nd="-"
	 end if
	 %>
	 
   <script>
	var now_<%=rs("AuctionId")%>=new Date("<%=Year(now())%>"*1,"<%=Month(now())%>"*1-1,"<%=Day(now())%>"*1,"<%=Hour(now())%>"*1,"<%=Minute(now())%>"*1,"<%=Second(now())%>"*1);
	function getTime_<%=rs("AuctionId")%>() {

	now_<%=rs("AuctionId")%>.setSeconds(now_<%=rs("AuctionId")%>.getSeconds()+1);
	y2k = new Date('<%=Year(rs("endDate"))%>'*1,'<%=Month(rs("endDate"))%>'*1-1,'<%=Day(rs("endDate"))%>'*1,'<%=Hour(rs("endDate"))%>'*1,'<%=Minute(rs("endDate"))%>'*1,'<%=Second(rs("endDate"))%>'*1);
	days = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 / 24;
	daysRound = Math.floor(days);
	hours = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 - (24 * daysRound);
	hoursRound = Math.floor(hours);
	minutes = (y2k - now_<%=rs("AuctionId")%>) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
	minutesRound = Math.floor(minutes);
	seconds = (y2k - now_<%=rs("AuctionId")%>) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
	secondsRound = Math.round(seconds);

	if ((hoursRound==0)&&(minutesRound==0)&&(secondsRound==0)){
	    document.location='default.asp?close=<%=rs("AuctionId")%>'
	                                                          } 
	else{
		if (secondsRound.toString().length==1) secondsRound="0"+secondsRound
		if (minutesRound.toString().length==1) minutesRound="0"+minutesRound
		if (hoursRound.toString().length==1) hoursRound="0"+hoursRound

	//document.getElementById("Days_<%=rs("AuctionId")%>").innerHTML=daysRound
	document.getElementById("Hours_<%=rs("AuctionId")%>").innerHTML=hoursRound
	document.getElementById("Minits_<%=rs("AuctionId")%>").innerHTML=minutesRound
	document.getElementById("Seconds_<%=rs("AuctionId")%>").innerHTML=secondsRound
	    }
	newtime = window.setTimeout("getTime_<%=rs("AuctionId")%>();", 1000);
	}
	//  End --> 
	</script>
    <%
	 
	end if
	rs.close	
	
	%>



                     <table width="800" border="0" cellspacing="0" cellpadding="0">
                      <TR>
                       
                      
                      <TD colspan=2>
                      
                      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="378" height="98" id="test_pop" align="middle" VIEWASTEXT>
									<param name="allowScriptAccess" value="sameDomain" />
									<param name="allowFullScreen" value="false" />
									<param name="movie" value="https://ssl.1buy1.co.il/HPPOP10.swf" />
									<param name="quality" value="high" />
									<param name="bgcolor" value="#ffffff" />	
										<EMBED
											NAME="test_pop"
											SRC="https://ssl.1buy1.co.il/HPPOP10.swf"
											WIDTH="100%"
											HEIGHT="100%"
											PLAY="false" 
											LOOP="false"
											QUALITY="high"
											SCALE="SHOWALL" 
											swLiveConnect="true"
											PLUGINSPAGE="http://www.macromedia.com/go/flashplayer/">
										</EMBED>
									</OBJECT>
						</TD>
						<TD colspan=2>
                     <iframe id="my_main" width="100%"  framespacing=0 frameborder=0 height="80"  scrolling=no  src="https://ssl.bidwiz.co.uk/online.asp"></IFRAME>
                      
                      
                      </TD>
						</TR>
                      <tr>
                        <td width="208" valign="top" background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x;">
<table width="186" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="186" border="1" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="19" >
									     <table width="186" height="19" border="0" cellpadding="0" cellspacing="0">
                                           <tr>
                                            
                                             <td width="100%" align="center" class="black-title" ><i>מכרז מספר <%=AuctionId2_nd%></span></td>
                                             
                                           </tr>
                                         </table>
									</td>
                              </tr>
                              <tr>
                                <td>
                                <table width="186" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                   
                                    <td bgcolor="#FFFFFF">
									   <table width="174" height="203" border="0" cellspacing="0" cellpadding="0">
                                         <tr>
                                           <td align="center" height="25"><%=product_title2_nd%></td>
                                         </tr>
                                         
                                         <tr>
                                            <td align="center" valign="top" height="215"><iframe id="my_main" width="100%"  framespacing=0 frameborder=0 height="250"  scrolling=yes  src="../usersInAuctionOnLine.asp?idAuction=<%=AuctionId2_nd%>"></IFRAME></td>
                                         </tr>
                                         <tr>
                                       <td style="padding-left:0px; padding-right:0px;">
                                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="175">
                                              <tr>
                                                 <td valign="top">
                                                   <table cellpadding="0" cellspacing="0" border="0">
                                                     <tr>
                                                       <td>
                                                        <span class="black-small" align="center">הצעות לסגירה 
                                                       </td>
                                                     </tr>
                                                     <tr>
                                                        <td>
															<table cellpadding="0" cellspacing="0" border="0" align="center">
															  <tr>
															    <td background="1buy1-images/bgclock.gif" height="22" style="padding-left:0px; padding-right:0px;" width="64">
                                                                
                                                                <span class="tt2" id="leftProposals_<%=AuctionId2_nd%>"><%=leftProposals2_nd%></span> </a>
                                                                </td>
                                                              </tr>
                                                            </table>
                                                        </td>
                                                     </tr>
                                                   </table>
                                                 </td>
                                                 <td><%AuctionId=AuctionId2_nd%>
                                                 <!--#include file="timeIncl.asp"--></td>
                                              </tr>
                                            </table>
                                           </td>
                                          </tr>
                                        
                                    </table></td>
                                    
                                  </tr>
                                </table></td>
                              </tr>              
                             
    </table></td>
  </tr>
</table>


                        </td>
                        
                        
                        
                        <td width="186" align="center" valign="top" background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x;">
                              
                        <table width="186" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="186" border="1" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="19" >
									     <table width="186" height="19" border="0" cellpadding="0" cellspacing="0">
                                           <tr>
                                            
                                             <td width="100%" align="center" class="black-title" ><i>מכרז מספר <%=AuctionId1_st%></span></td>
                                             
                                           </tr>
                                         </table>
									</td>
                              </tr>
                              <tr>
                                <td>
                                <table width="186" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                   
                                    <td bgcolor="#FFFFFF">
									   <table width="174" height="203" border="0" cellspacing="0" cellpadding="0">
                                         <tr>
                                           <td align="center" height="25"><%=product_title1_st%></td>
                                         </tr>
                                         
                                         <tr>
                                            <td align="center" valign="top" height="215"><iframe id="my_main" width="100%"  framespacing=0 frameborder=0 height="250"  scrolling=yes  src="../usersInAuctionOnLine.asp?idAuction=<%=AuctionId1_st%>"></IFRAME></td>
                                         </tr>
                                         <tr>
                                       <td style="padding-left:0px; padding-right:0px;">
                                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="175">
                                              <tr>
                                                 <td valign="top">
                                                   <table cellpadding="0" cellspacing="0" border="0">
                                                     <tr>
                                                       <td>
                                                        <span class="black-small" align="center">הצעות לסגירה 
                                                       </td>
                                                     </tr>
                                                     <tr>
                                                        <td>
															<table cellpadding="0" cellspacing="0" border="0" align="center">
															  <tr>
															    <td background="1buy1-images/bgclock.gif" height="22" style="padding-left:0px; padding-right:0px;" width="64">
                                                                
                                                                <span class="tt2" id="leftProposals_<%=AuctionId1_st%>"><%=leftProposals1_st%></span> </a>
                                                                </td>
                                                              </tr>
                                                            </table>
                                                        </td>
                                                     </tr>
                                                   </table>
                                                 </td>
                                                 <td><%AuctionId=AuctionId1_st%>
                                                 <!--#include file="timeIncl.asp"--></td>
                                              </tr>
                                            </table>
                                           </td>
                                          </tr>
                                        
                                    </table></td>
                                    
                                  </tr>
                                </table></td>
                              </tr>              
                             
    </table></td>
  </tr>
</table>
                        
                       </td>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        <td width="208" align="center" valign="top" background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x;">
                        <table width="186" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="186" border="1" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="19" >
									     <table width="186" height="19" border="0" cellpadding="0" cellspacing="0">
                                           <tr>
                                            
                                             <td width="100%" align="center" class="black-title" ><i>מכרז מספר <%=AuctionIdMain%></span></td>
                                             
                                           </tr>
                                         </table>
									</td>
                              </tr>
                              <tr>
                                <td>
                                <table width="186" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                   
                                    <td bgcolor="#FFFFFF">
									   <table width="174" height="203" border="0" cellspacing="0" cellpadding="0">
                                         <tr>
                                           <td align="center" height="25"><%=product_titleMain%></td>
                                         </tr>
                                         
                                         <tr>
                                            <td align="center" valign="top" height="215"><iframe id="my_main" width="100%"  framespacing=0 frameborder=0 height="250"  scrolling=yes  src="../usersInAuctionOnLine.asp?idAuction=<%=AuctionIdMain%>"></IFRAME></td>
                                         </tr>
                                         <tr>
                                       <td style="padding-left:0px; padding-right:0px;">
                                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="175">
                                              <tr>
                                                 <td valign="top">
                                                   <table cellpadding="0" cellspacing="0" border="0">
                                                     <tr>
                                                       <td>
                                                        <span class="black-small" align="center">הצעות לסגירה 
                                                       </td>
                                                     </tr>
                                                     <tr>
                                                        <td>
															<table cellpadding="0" cellspacing="0" border="0" align="center">
															  <tr>
															    <td background="1buy1-images/bgclock.gif" height="22" style="padding-left:0px; padding-right:0px;" width="64">
                                                                
                                                                <span class="tt2" id="leftProposals_<%=AuctionIdMain%>"><%=leftProposalsMain%></span> </a>
                                                                </td>
                                                              </tr>
                                                            </table>
                                                        </td>
                                                     </tr>
                                                   </table>
                                                 </td>
                                                 <td><%AuctionId=AuctionIdMain%>
                                                 <!--#include file="timeIncl.asp"--></td>
                                              </tr>
                                            </table>
                                           </td>
                                          </tr>
                                        
                                    </table></td>
                                    
                                  </tr>
                                </table></td>
                              </tr>              
                             
    </table></td>
  </tr>
</table>


                        </td>
                        
                          <td width="208" align="center" valign="top" background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x;">
                        <table width="186" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="186" border="1" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="19" >
									     <table width="186" height="19" border="0" cellpadding="0" cellspacing="0">
                                           <tr>
                                            
                                             <td width="100%" align="center" class="black-title" ><i>HOMEPAGE USERS</span></td>
                                             
                                           </tr>
                                         </table>
									</td>
                              </tr>
                              <tr>
                                <td>
                                <table width="186" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                   
                                    <td bgcolor="#FFFFFF">
									   <table width="174" height="203" border="0" cellspacing="0" cellpadding="0">
                                        
                                         
                                         <tr>
                                            <td align="center" valign="top" height="215"><iframe id="my_main" width="100%"  framespacing=0 frameborder=0 height="323"  scrolling=yes  src="../usersInAuctionOnLine.asp?idAuction=1"></IFRAME></td>
                                         </tr>
                                        
                                        
                                    </table></td>
                                    
                                  </tr>
                                </table></td>
                              </tr>              
                             
    </table></td>
  </tr>
</table>


                        </td>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                            <td background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x;"></td>
                          </tr>
                         
                    </table></td>
                
                
                
                  </tr>
                  <tr>
                    <td height="10"></td>
                  </tr>
                 
                  <tr>
                   <td valign="top" align="center">
                   <!--start 4X4 from maintable-->
						<table border="0" cellspacing="0" cellpadding="0">
						<tr><td colspan="3" valign="top">
								<table border="0">
								<tr>
								<td valign="top" align="center">
								   <table>
									<tr>
								<% 'other 
								    SQL1 = "select product_title,small_image,tblAuctions.id as AuctionId,tblAuctions.*,(select count(*)  from  tblBids where auctionId=tblAuctions.id) as NumProposals from  tblAuctions inner join tblProducts on tblProducts.id=tblAuctions.productId where tblAuctions.id<>"&AuctionId1_st&" and tblAuctions.id<>"&AuctionId2_nd&"  and tblAuctions.id<>"&AuctionIdMain&" and auctionType<>3 and isSample=0 and isClosed=0 and startDate<=dbo.fn_getServerDate(getDate()) and tblAuctions.id<>20123 order by Priority"
									rs.Open SQL1 ,Conn,3,3

									if not(rs.EOF or  rs.BOF) then
									while not(rs.EOF)
									product_title=rs("product_title")
									AuctionId=rs("AuctionId")
									small_image=rs("small_image")
									maxPrice=rs("maxPrice")
                    				myYear=Year(rs("endDate"))
									myMonth=Month(rs("endDate"))*1-1
									myDay=Day(rs("endDate"))
									myHour=Hour(rs("endDate"))
									myMinute=Minute(rs("endDate"))
									mySecond=Second(rs("endDate"))
									myType="2_nd"
									minOffers=rs("minOffers")
									NumProposals=rs("NumProposals")
									leftProposals=minOffers-NumProposals
									if leftProposals<=0 then
									leftProposals="-"
									end if
									%>

								   <script>
									var now_<%=rs("AuctionId")%>=new Date("<%=Year(now())%>"*1,"<%=Month(now())%>"*1-1,"<%=Day(now())%>"*1,"<%=Hour(now())%>"*1,"<%=Minute(now())%>"*1,"<%=Second(now())%>"*1);
									function getTime_<%=rs("AuctionId")%>() {

									now_<%=rs("AuctionId")%>.setSeconds(now_<%=rs("AuctionId")%>.getSeconds()+1);
									y2k = new Date('<%=Year(rs("endDate"))%>'*1,'<%=Month(rs("endDate"))%>'*1-1,'<%=Day(rs("endDate"))%>'*1,'<%=Hour(rs("endDate"))%>'*1,'<%=Minute(rs("endDate"))%>'*1,'<%=Second(rs("endDate"))%>'*1);
									days = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 / 24;
									daysRound = Math.floor(days);
									hours = (y2k - now_<%=rs("AuctionId")%>) / 1000 / 60 / 60 - (24 * daysRound);
									hoursRound = Math.floor(hours);
									minutes = (y2k - now_<%=rs("AuctionId")%>) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
									minutesRound = Math.floor(minutes);
									seconds = (y2k - now_<%=rs("AuctionId")%>) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
									secondsRound = Math.round(seconds);
									if ((hoursRound==0)&&(minutesRound==0)&&(secondsRound==0)){
									    document.location='default.asp?close=<%=rs("AuctionId")%>'
									                                                          } 
									else{
										if (secondsRound.toString().length==1) secondsRound="0"+secondsRound
										if (minutesRound.toString().length==1) minutesRound="0"+minutesRound
										if (hoursRound.toString().length==1) hoursRound="0"+hoursRound

									//document.getElementById("Days_<%=rs("AuctionId")%>").innerHTML=daysRound
									document.getElementById("Hours_<%=rs("AuctionId")%>").innerHTML=hoursRound
									document.getElementById("Minits_<%=rs("AuctionId")%>").innerHTML=minutesRound
									document.getElementById("Seconds_<%=rs("AuctionId")%>").innerHTML=secondsRound
									    }
									newtime = window.setTimeout("getTime_<%=rs("AuctionId")%>();", 1000);
									}
									//  End --> 
									</script>
							
									
									<td valign="top">
									<!--#include file="include_product-01.asp"-->
									<br>
									</td>
								<%	if rs.AbsolutePosition mod 4=0 then Response.Write ("</tr><tr>")
								    rs.moveNext
								    wend
									end if
									rs.close%>	
									</tr>
								
									</table>
								</td>   
								</tr>
								</table>
						</td></tr>
						</table>
                   </td>
                  </tr>
                  <tr>
                  <td valign="top" align="center"> 
                   <img SRC="1buy1-images/closedauction.jpg" WIDTH="182" HEIGHT="26">               
                  </td>                  
                  <tr>
                  <td valign="top" background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x; padding-right=5;">
                  <table cellpadding="0" cellspacing="0">
                  <tr>
                  <%'12 LAST CLOSED								   
                    SQL1 = "select TOP 12 product_title,small_image,tblAuctions.id as AuctionId,tblAuctions.* from  tblAuctions inner join tblProducts on tblProducts.id=tblAuctions.productId where isSample=0 and isClosed=1 and auctionType<>3 and tblAuctions.id not in (20096,20110,20123,20086,20213,20224) order by endDate DESC"
                   	rs.Open SQL1 ,Conn,3,3	
                   	if not(rs.EOF or  rs.BOF) then
                   	while not(rs.EOF)
                   	auctionType=rs("auctionType")	
                   	product_title=rs("product_title")
                   	AuctionId=rs("AuctionId")
                   	small_image=rs("small_image")
                   	maxPrice=rs("maxPrice")
                   	myYear=Year(rs("endDate"))			
                   	myMonth=Month(rs("endDate"))*1-1		
                   	myDay=Day(rs("endDate"))	
                   	myHour=Hour(rs("endDate"))
                   	myMinute=Minute(rs("endDate"))
                   	mySecond=Second(rs("endDate"))
                   	%>	
                   																	
                   	<td valign="top" width="208" background="1buy1-images/bg-color-hor.jpg" style="background-repeat:repeat-x; padding-right=5;">
                   	<!--#include file="include_productClosed-01.asp"-->
                   	<br>
                   	</td>
                  <%if rs.absolutePosition mod 4=0 then Response.Write ("</tr><tr>")
                    rs.moveNext
                    wend	
                    end if	
                    rs.close%>
                    </tr>
                    
                    </table>
                    
                  