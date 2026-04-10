<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Welcome to Knights Foods and Beverages (NIG). LTD.</TITLE>
<LINK href="http://www.knightsfoods.com/main.css" rel=stylesheet type=text/css>
<SCRIPT language=javascript>
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  //eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  window.open(selObj.options[selObj.selectedIndex].value)
  if (restore) selObj.selectedIndex=0;
}
//-->
function openwindow(){
window.open("credits.asp","credits","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width=400,height=320")
}
</SCRIPT>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Mon Jul 11 16:55:04 GMT+0200 (Central European Standard Time) 2005-->
<STYLE type=text/css>
BODY {
	BACKGROUND-IMAGE: url(images/bg.jpg)
}
</STYLE>
<LINK href="http://www.knightsfoods.com/http://www.knightsfoods.com/image/diana.css" 
type=text/css rel=stylesheet>
<META content="MSHTML 6.00.2800.1106" name=GENERATOR><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style11 {color: #FFFFFF}
.style12 {color: #6CA8DC}
-->
</style></HEAD>
<BODY bgColor=#ffffff>
<?php
$msg = "Feedback information. \n\n";
$msg .= "Name: $_POST[name]\n";
$msg .= "Phone: $_POST[phone]\n";
$msg .= "Address: $_POST[address]\n";
$msg .= "Company: $_POST[company]\n";
$msg .= "E-mail: $_POST[email]\n";
$msg .= "Message: $_POST[message]\n";
$email =  $_POST[email];
//set up the mail
$subject = "Feedback sent";//$_POST[subject];
$recipient = "info@knightsfoods.com"; //$_POST[recipient];
$mailheaders = "From: Diana's Website $email";
$mailheaders .= "Reply-To: $_POST[email]";
//send the mail
mail($recipient, $subject, $msg, $mailheaders);
?>
<table cellspacing=0 cellpadding=0 width=758 align=center border=0>
  <tbody>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=5 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=12 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=184 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=30 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=27 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=78 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=52 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=21 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=57 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=34 height=1 border=0></td>
      <td width=79><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=79 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=11 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=28 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=5 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=13 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=7 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=10 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=23 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=7 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=6 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=20 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=17 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=14 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=13 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=5 height=1 border=0></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=1 border=0></td>
    </tr>
    <tr>
      <td colspan=25><img height=5 alt="" 
      src="http://www.knightsfoods.com/image/diana_r25_c1.jpg" 
      width=758 border=0 name=images/diana_r1_c1></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=5 border=0></td>
    </tr>
    <tr>
      <td rowspan=23 background="http://www.knightsfoods.com/image/diana_r2_c1.jpg">&nbsp;</td>
      <td colspan=23 rowspan=22 valign="top"><table width="748" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="205" background="http://www.knightsfoods.com/image/mainban2.jpg"><div align="right"><font color="#06569F">Today's Date:
            <SCRIPT language=JavaScript1.1 type=text/javascript>
        <!-- Hide from old browsers
        now = new Date();
        day = new Object();
        month = new Object();
        day[0] = "Sunday";
        day[1] = "Monday";
        day[2] = "Tuesday";
        day[3] = "Wednesday";
        day[4] = "Thursday";
        day[5] = "Friday";
        day[6] = "Saturday";
        month[0] = "Jan.";
        month[1] = "Feb.";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "Aug.";
        month[8] = "Sept.";
        month[9] = "Oct.";
        month[10] = "Nov.";
        month[11] = "Dec.";
        year = now.getYear();
        if (year < 1000) year += 1900;
        document.write(day[now.getDay()] + ", " + month[now.getMonth()] + " " + now.getDate() + ", " + year);
        // Stop Hiding From Old Browsers -->
            

                </SCRIPT>
          </font> &nbsp; </div></td>
        </tr>
        <tr>
          <td height="31"><IMG 
      src="http://www.knightsfoods.com/image/menu.gif" alt="" name=menu width=748 height=33 border=0 usemap="#menuMap">
            <map name="menuMap">
              <area shape="rect" coords="41,11,75,23" href="http://www.knightsfoods.com/index.html" alt="Home">
              <area shape="rect" coords="125,10,182,21" href="http://www.knightsfoods.com/aboutus.html" alt="About us">
              <area shape="rect" coords="224,12,300,23" href="http://www.knightsfoods.com/services.html" alt="Our Services">
              <area shape="rect" coords="336,13,420,23" href="http://www.knightsfoods.com/product.html" alt="Our Product">
              <area shape="rect" coords="455,13,510,23" href="http://www.knightsfoods.com/gallery.html" alt="Career">
              <area shape="rect" coords="544,13,616,24" href="http://www.knightsfoods.com/contact.html" alt="Contact us">
              <area shape="rect" coords="651,12,703,23" href="http://www.knightsfoods.com/equire.html" alt="Enquire">
            </map>
            </td>
        </tr>
        <tr>
          <td height="440"><br>
<table width="720" height="427" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#6CA8DC">
            <tr>
              <td width="720" height="427"><table width="719" height="358" border="0" cellpadding="0" cellspacing="0">
                <TR>
                  <TD width="719" height="44" valign="top"><table width="718" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="214" height="44" background="http://www.knightsfoods.com/image/disbar.jpg"><MARQUEE onmouseover=this.stop() onmouseout=this.start() 
trueSpeed scrollAmount="2" scrollDelay="25">
                        </MARQUEE>
                          <table width="212" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="49" height="29">&nbsp;</td>
                              <td width="163" align="right"></td>
                            </tr>
                          </table></td>
                        <td width="504"><table width="505" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="495" background="http://www.knightsfoods.com/image/diana_r8_c22.jpg">&nbsp;</td>
                            </tr>
                          <tr>
                            <td height="29"><table width="506" height="31" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="490" height="30"><img src="http://www.knightsfoods.com/image/feedback.jpg" width="482" height="18"></td>
                                <td width="16" background="http://www.knightsfoods.com/image/diana_r14_c233.jpg">&nbsp;</td>
                              </tr>
                            </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></TD>
                </TR>
                
                <TR>
                  <TD height="314">
                    <table width="719" height="314" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="211" height="314" valign="top"><img src="http://www.knightsfoods.com/image/model2.jpg" width="214" height="314"></td>
                        <td width="502"><table width="505" height="315" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="490" height="302"><table width="490" height="294" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="44" height="294">&nbsp;</td>
                                <td width="446"><p class="style12">Thank you <?php echo $name
?>.</p>
                                    <p class="style12">We will get back to you soon. </p></td>
                              </tr>
                            </table></td>
                            <td width="15" background="http://www.knightsfoods.com/image/diana_r14_c233.jpg">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="13" colspan="2" background="http://www.knightsfoods.com/image/diana_r8_c222.jpg">&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
                    </table></TD>
                </TR>
                
              </table>
                <table width="720" height="69" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <TD height="69" vAlign=bottom 
    background="http://www.knightsfoods.com/image/last2.jpg" 
    bgColor=#ffffff><br>
                        <br>
                        <br>
                        <TABLE cellSpacing=0 cellPadding=0 width=400 border=0>
                          <TBODY>
                            <TR>
                              <TD><FORM name=sitesearch action=search.asp 
            method=get>
                                &nbsp;&nbsp;
                                <INPUT name=search2>
                                <INPUT type=hidden 
            value=allwords name=mode2>
                                &nbsp;&nbsp;
                                <INPUT type=image 
            src="http://www.knightsfoods.com/image/submitlogo.jpg" 
            align=absMiddle value=Go name=Submit2>
                              </FORM></TD>
                            </TR>
                          </TBODY>
                      </TABLE></TD>
                  </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
      <td rowspan=23 background="http://www.knightsfoods.com/image/diana_r2_c25.jpg">&nbsp;</td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=7 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=18 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=6 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=174 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=33 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=7 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=13 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=18 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=18 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=50 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=15 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=12 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=24 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=17 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=7 border=0></td>
    </tr>
    <tr>
      <td height=75><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=75 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=15 border=0></td>
    </tr>
    <tr>
      <td height="71"><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=71 border=0></td>
    </tr>
    <tr>
      <td height="22"><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=22 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=76 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=9 border=0></td>
    </tr>
    <tr>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=28 border=0></td>
    </tr>
    <tr>
      <td colspan=23><img height=10 alt="" 
      src="http://www.knightsfoods.com/image/diana_r24_c2.jpg" 
      width=748 border=0 name=images/diana_r24_c2></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=10 border=0></td>
    </tr>
    <tr>
      <td colspan=25><img height=5 alt="" 
      src="http://www.knightsfoods.com/image/diana_r25_c1.jpg" 
      width=758 border=0 name=images/diana_r25_c1></td>
      <td><img src="../../../../Program Files/Macromedia/Dreamweaver 8/Configuration/Shared/MM/Cache/" alt="" name="undefined_2" width=1 height=5 
border=0></td>
    </tr>
  </tbody>
</table>
</BODY>
</HTML>
