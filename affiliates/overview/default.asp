<%@ Language=VBScript %>
<!--#include file="../../connect/connect.asp"-->

                     <table width="100%" border="1" cellspacing="0" cellpadding="0">
                     
                     
                  <tr>
                   <td valign="top" align="center" >
<A name="TOP"> </A>
                   <!--start 4X4 from maintable-->
						<table border="0" cellspacing="0" cellpadding="0" width="100%">
<TR>
                       
                    
						<TD colspan="3">
                     <iframe id="my_main" width="180"  framespacing=0 frameborder=1 height="60"  scrolling=no  src="../../online.asp" ></IFRAME>
                      
                      
                      </TD>
<TD rowspan=2 valign=top dir=rtl> <iframe id="popups" name="popups" width="310"  framespacing=0 frameborder=1 height="250"  scrolling=auto  src="../popupsOverview.asp?show=users"></IFRAME><BR><iframe id="trans" name="trans" width="310"  framespacing=0 frameborder=1 height="350"  scrolling=auto  src="../allBanksTransactionsOverview.asp#Total"></IFRAME></TD>
						</TR> 
						
<tr><td colspan="3" valign="top" width="100%">
								<table border="0" width="100%">
								<tr>
								<td valign="top" align="center" width="100%">
								   <table>
									<tr>
								<% 'other 
								    SQL1 = "select top 25 product_title,small_image,tblAuctions.id as AuctionId,tblAuctions.*,(select count(*)  from  tblBids where auctionId=tblAuctions.id) as NumProposals from  tblAuctions inner join tblProducts on tblProducts.id=tblAuctions.productId where  auctionType<>3 and isSample=0 and isClosed=0 and startDate<=getDate() and tblAuctions.id<>20123 order by Priority"
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
							
									
									<td valign="top" width=330>
									<!--#include file="include_product-01.asp"-->
									<br>
									</td>
								<%	if rs.AbsolutePosition mod 3=0 then Response.Write ("</tr><tr>")
								    rs.moveNext
								    wend
									end if
									rs.close%>	
									</tr>
								
									</table>
								
						</td></tr>
						</table>
                   </td>
                  </tr>
                  </TABLE>
                    
                