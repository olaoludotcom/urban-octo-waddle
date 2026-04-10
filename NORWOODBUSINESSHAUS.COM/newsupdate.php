<?php require_once('Connections/admin.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "news")) {
  $insertSQL = sprintf("INSERT INTO news (topic, news, `date`) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['topic'], "text"),
                       GetSQLValueString($_POST['news'], "text"),
                       GetSQLValueString($_POST['date'], "text"));

  mysql_select_db($database_admin, $admin);
  $Result1 = mysql_query($insertSQL, $admin) or die(mysql_error());

  $insertGoTo = "newsupdate.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Welcome to Norwood Business Haus</TITLE>
<META content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
<META 
content="Norwood" 
name=keywords>
<meta http-equiv="Page-Enter" content="progid:DXImageTransform.Microsoft.gradientWipe(duration=1)"/>
<META content="MSHTML 5.00.2920.0" name=GENERATOR><style type="text/css">
<!--
body {
	background-color: #BBBBBB;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	color: #013300;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
a:link {
	text-decoration: none;
	color: #013300;
}
a:visited {
	text-decoration: none;
	color: #013300;
}
a:hover {
	text-decoration: underline;
	color: #013300;
}
a:active {
	text-decoration: none;
	color: #013300;
}
a {
	font-size: 11px;
}
.style8 {color: #003333}
.style3 {color: #003333; font-size: 10px; }
.style19 {font-size: 10px}
-->
</style>
<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-3915335-1");pageTracker._trackPageview();} catch(err) {}</script>
</HEAD>
<BODY>
<table width="783" height="980" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#003333" bgcolor="#FFFFFF">
  <tr>
    <td width="779" height="293" valign="top" background="images/fla.jpg"><table width="779" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="299" valign="top"><table width="779" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="271" background="images/ban.jpg"><table width="779" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="107">&nbsp;</td>
              </tr>
              <tr>
                <td height="141" valign="top"><table width="779" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="54" height="137">&nbsp;</td>
                      <td width="286"><br>
                          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,42,0"
  id="movie" width="299" height="132">
                            <param name="movie" value="movie.swf">
                            <param name="quality" value="high">
                            <param name="bgcolor" value="#F6F6F6">
                            <embed name="movie" src="movie.swf"
     quality="high" bgcolor="#F6F6F6" swLiveConnect="true"
     width="299" height="132"
     type="application/x-shockwave-flash"
     pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                        </object></td>
                      <td width="439">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="images/link.jpg" alt="contactus.php" width="779" height="30" border="0" usemap="#Map">
              <map name="Map">
                <area shape="rect" coords="24,11,70,28" href="index.php" alt="Index">
                <area shape="rect" coords="102,12,194,29" href="whoweare.php" alt="Who we are">
                <area shape="rect" coords="229,12,318,28" href="whatwedo.php" alt="What we do">
                <area shape="rect" coords="358,11,406,27" href="forum.php" alt="Forum">
                <area shape="rect" coords="452,12,558,27" href="news.php" alt="News">
                <area shape="rect" coords="589,10,656,27" href="equiries.php" alt="enquiries">
                <area shape="rect" coords="684,12,765,28" href="contact.php" alt="contactus.php">
              </map></td>
          </tr>
        </table></td>
      </tr>
      
    </table>
</td>
  </tr>
  <tr>
    <td height="542" bgcolor="#FFFFFF"><table width="778" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="584" valign="top"><table width="581" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="581" height="57"><br>
                <img src="images/news.jpg" width="250" height="23"></td>
          </tr>
          <tr>
            <td height="289"><table width="575" height="366" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="575" height="313" valign="top"><blockquote>
                    <p><strong><br>
                      Enter your Information here: </strong></p>
                  </blockquote>
                    <form action="<?php echo $editFormAction; ?>" method="POST" name="news"><table width="577" height="287" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="41" height="46">&nbsp;</td>
                        <td width="70"><strong>Topic</strong></td>
                        <td width="466"><label>
                          <input name="topic" type="text" id="topic" size="40" maxlength="200">
                        </label></td>
                      </tr>
                      <tr>
                        <td height="193">&nbsp;</td>
                        <td><strong>News</strong></td>
                        <td><label>
                          <textarea name="news" cols="40" rows="10" id="news"></textarea>
                          <INPUT type="hidden"
                              name=date id=date size=15 maxlength="40" 
value="<?php echo date("d:m:y h:i:s", time()); ?>">
                        </label></td>
                      </tr>
                      <tr>
                        <td height="48">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="Submit" value="Send">
                          <input type="reset" name="Submit2" value="Reset">
                        </label></td>
                      </tr>
                    </table>
                      
                      <input type="hidden" name="MM_insert" value="news">
                    </form>
                    
                    <p>&nbsp;</p>
                    <p align="justify">&nbsp;</p></td>
                  </tr>
            </table></td>
          </tr>
        </table></td>
        
      </tr>
      
      <tr>
        <td height="70" colspan="2"><div align="center">
          <p>&nbsp;</p>
          <p class="style8"><a href="index.php">Home</a> | <a href="whoweare.php">Who we are</a> | <a href="whatwedo.php">What we do</a> | <a href="forum.php">Business Forum </a> | <a href="news.php">News/Events</a> | <a href="enquire.php">Enquiries</a> | <a href="contactus.php">Contact us</a><br>
            <br>
            <span class="style3">Copyright &copy;2007 Norwood Business Haus. All 
                    Rights Reserved.</span><br>
                    <span class="style19">A <a href="http://www.webthinkers.net" target="_blank">webThinkers</a></span> design. </p>
        </div></td>
        </tr>
    </table></td>
  </tr>
</table>




<map name="Map">
<area shape="rect" coords="24,11,70,28" href="index.php"><area shape="rect" coords="103,12,195,29" href="whoweare.php"><area shape="rect" coords="229,12,318,28" href="whatwedo.php">
<area shape="rect" coords="358,11,406,27" href="forum.php">
<area shape="rect" coords="452,12,558,27" href="news.php">
<area shape="rect" coords="589,10,656,27" href="equiries.php"><area shape="rect" coords="684,12,765,28" href="contact.php">
</map></BODY></HTML>
