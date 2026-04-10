<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Timeless Holdings Limited</title>
<style type="text/css">
<!--
body {
	background-color: #3B3B91;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #999999;
}
a:hover {
	text-decoration: underline;
	color: #999999;
}
a:active {
	text-decoration: none;
	color: #666666;
}
.style1 {font-size: 10px}
.style8 {color: #666666}
.style2 {color: #666666; font-size: 10px; }
.style9 {
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 10px; color: #FFFFFF; }
-->
</style></head>

<body>
<?php
$msg = "Feedback from Timeless website. \n\n";
$msg .= "Name: $_POST[name]\n";
$msg .= "Phone: $_POST[phone]\n";
$msg .= "E-mail: $_POST[email]\n";
$msg .= "Address: $_POST[address]\n";
$msg .= "Message: $_POST[message]\n";
$email =  $_POST[email];
//set up the mail
$subject = "Feedback sent from Timeless website";//$_POST[subject];
$recipient = "info@timelessholdings.com"; //$_POST[recipient];
$mailheaders = "From: Timeless website $email";
$mailheaders .= "Reply-To: $_POST[email]";
//send the mail
mail($recipient, $subject, $msg, $mailheaders);
?>
<table width="783" height="740" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="779" valign="top"><table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="216" height="239" valign="top"><table width="218" height="590" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="218" height="590" valign="top" background="images/left.jpg"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="283"><table width="209" height="240" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="180">&nbsp;</td>
                  </tr>
                  <tr>
                    <td><form action="http://www.google.com/custom" method="get" name="q" target="_top" id="q">
                        <table width="177" height="10" border="0" align="right" cellpadding="0" cellspacing="0" bordercolor="#F6F6F6">
                          <tr>
                            <td width="173" height="10" nowrap="nowrap"><input type="hidden" name="domains" value="www.timelessholdings.com.com" />
                                <script language="JavaScript" type="text/javascript">
var introtext = 'Search';
document.write('<input type="text" size="17" value="' + introtext + '"name="q" onFocus="if (this.value == introtext) this.value = \'\';">');
                                </script>
                                <input type="submit" name="sa" value="go" /></td>
                            <td width="10" colspan="3" rowspan="2">&nbsp;</td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap"><input type="radio" name="sitesearch" value="" />
                                <span class="style1"><font color="#000000">Web</font>
                                <input name="sitesearch" type="radio" value="www.timelessholdings.com.com" checked="checked" />
                                <font color="#000000">This site </font></span><font size="-1" color="#000000">
                                <input type="hidden" name="client" value="pub-8358765170655852" />
                                <input type="hidden" name="forid" value="1" />
                                <input type="hidden" name="ie" value="ISO-8859-1" />
                                <input type="hidden" name="oe" value="ISO-8859-1" />
                                <input type="hidden" name="cof" value="GALT:#0066CC;GL:1;DIV:#999999;VLC:336633;AH:center;BGC:FFFFFF;LBGC:FFFFFF;ALC:0066CC;LC:0066CC;T:000000;GFNT:666666;GIMP:666666;LH:39;LW:99;L:http://www.timelessholdings.com.com/images/smallbanner.jpg;S:http://www.timelessholdings.com.com;FORID:1" />
                                <input type="hidden" name="hl" value="en" />
                              </font></td>
                          </tr>
                        </table>
                    </form></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="20"><div align="center">
                    <script language="JavaScript1.1" type="text/javascript"><!-- Hide from old browsers
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
            

            </script>
                </div></td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
        <td width="563" valign="top"><table width="560" height="583" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td height="48"><img src="images/link.jpg" width="561" height="48" border="0" usemap="#MapMap" />
              <map name="MapMap" id="MapMap">
                <area shape="rect" coords="425,7,557,47" href="contact.html" />
                <area shape="rect" coords="285,6,417,47" href="corporate.html" />
                <area shape="rect" coords="142,6,275,46" href="ourgroup.html" />
                <area shape="rect" coords="3,6,135,46" href="index.html" />
              </map></td>
          </tr>
          <tr>
            <td height="13"><img src="images/bannercontact.jpg" width="561" height="150" /></td>
          </tr>
          <tr>
            <td height="366" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="562">
              <!-- fwtable fwsrc="group.png" fwbase="group.jpg" fwstyle="Dreamweaver" fwdocid = "1395550782" fwnested="0" -->
              <tr>
                <td><img src="images/spacer.gif" width="5" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="35" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="474" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="39" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="7" height="1" border="0" alt="" /></td>
                <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
              </tr>
              <tr>
                <td colspan="7" background="images/group_r1_c1.jpg"><table width="551" height="22" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="right">
                        <div align="right"> <b>Today</b>:
                          <script language="JavaScript1.1" type="text/javascript"><!-- Hide from old browsers
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
            

                        </script>
                        </div>
                    </div></td>
                  </tr>
                </table></td>
                <td><img src="images/spacer.gif" width="1" height="49" border="0" alt="" /></td>
              </tr>
              <tr>
                <td rowspan="3" background="images/group_r2_c1.jpg" width="5"></td>
                <td colspan="5"><img name="group_r2_c2" src="images/contact.jpg" width="550" height="30" border="0" id="group_r2_c2" alt="" /></td>
                <td rowspan="3" background="images/group_r2_c7.jpg" width="7"></td>
                <td><img src="images/spacer.gif" width="1" height="30" border="0" alt="" /></td>
              </tr>
              <tr>
                <td colspan="5" background="images/group_r3_c2.jpg">&nbsp;</td>
                <td><img src="images/spacer.gif" width="1" height="38" border="0" alt="" /></td>
              </tr>
              <tr>
                <td height="248"><img name="group_r4_c2" src="images/group_r4_c2.jpg" width="35" height="248" border="0" id="group_r4_c2" alt="" /></td>
                <td background="images/group_r4_c3.jpg" width="1"></td>
                <td valign="top"><table width="465" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="147" valign="top"><p align="justify">&nbsp;</p>
                      <table width="462" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="222" valign="top"><p align="justify"><strong>Head Office: </strong><br />
                            4, Obanikoro Street, Ikorodu Road,<br />
                              Lagos. Nigeria. </p>
                            <p align="left"><strong>Telephone</strong>: <br />
                              +234 (0)1 764 2981, 740 2868, 819 8260, 890   2398, 
                              791 7453, <br />
                              290 3468 <br />
                                      <br />
                              <strong>Email</strong>:<br />
                              <a href="mailto:info@timelessholdings.com" target="_blank">info@timelessholdings.com</a><br />
                              <br />
                              <strong>Website</strong>:<br />
                              <a href="http://www.timelessholdings.com" target="_blank">www.timelessholdings.com</a></p>
                            </td>
                          <td width="240" valign="top"><p>Thank you,<br />
                            <br />
                            Message Received, we will get back to you soon.</p>
                            <p><a href="http://www.timelessholdings.com" target="_blank">Timeless Holdings Limited</a>.  </p></td>
                        </tr>
                      </table>                      <p align="justify">&nbsp;</p>
                      </td>
                  </tr>
                </table></td>
                <td background="images/group_r4_c5.jpg" width="1"></td>
                <td>&nbsp;</td>
                <td><img src="images/spacer.gif" width="1" height="248" border="0" alt="" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22" valign="top" bgcolor="#B0AEDF"><span class="style9"><strong> OUR SUBSIDAIRIES AND ASSOCIATES ::: </strong></span></td>
  </tr>
  <tr>
    <td height="68" valign="top" bgcolor="#FFFFFF"><marquee>
    <a href="http://www.premiumcapitalng.com" target="_blank"><img src="images/prenium.jpg" width="61" height="73" border="0" /></a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href="http://www.importexng.com" target="_blank"><img src="images/importex.jpg" width="74" height="56" border="0" /></a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href="http://www.businessworldng.com" target="_blank"><img src="images/bw.jpg" width="172" height="32" border="0" /></a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href="http://www.norwoodevents.com" target="_blank"><img src="images/ne.jpg" width="126" height="51" border="0" /></a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href="http://www.mintoilng.com" target="_blank"><img src="images/mint.jpg" width="99" height="59" border="0" /></a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href="http://www.peculiarroyal.com" target="_blank"><img src="images/prlogo.jpg" width="171" height="49" border="0" /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <img src="images/norwood.jpg" width="171" height="49" border="0" /></a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<a href="http://www.knightsfoods.com" target="_blank"><img src="images/Knight.jpg" width="164" height="55" border="0" /></a>
    </marquee></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p align="center" class="style1"><font color="#FFFFFF"><a href="index.html"><font color="#FFFFFF">Home</font></a> | <a href="ourgroup.html"><font color="#FFFFFF">Our Group</font></a> | <a href="corporate.html"><font color="#FFFFFF">Corporate Info</font></a> | <a href="contact.html"><font color="#FFFFFF">Contact Us</font></a> </font></p>
<p align="center" class="style10"><font color="#FFFFFF">Copyright &copy; Timeless Holdings Limited 2007. All Right Reserved.</font><br />
    <br />
  Design: <a href="http://webthinkers.net" target="_blank"><font color="#FFFFFF">Webthinkers</font></a> </p>
</body>
</html>
