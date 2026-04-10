<?php require_once('Connections/members.php'); ?><?php
$maxRows_DetailRS1 = 100;
$pageNum_DetailRS1 = 0;
if (isset($_GET['pageNum_DetailRS1'])) {
  $pageNum_DetailRS1 = $_GET['pageNum_DetailRS1'];
}
$startRow_DetailRS1 = $pageNum_DetailRS1 * $maxRows_DetailRS1;

mysql_select_db($database_members, $members);
$recordID = $_GET['recordID'];
$query_DetailRS1 = "SELECT * FROM members WHERE id = $recordID";
$query_limit_DetailRS1 = sprintf("%s LIMIT %d, %d", $query_DetailRS1, $startRow_DetailRS1, $maxRows_DetailRS1);
$DetailRS1 = mysql_query($query_limit_DetailRS1, $members) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);

if (isset($_GET['totalRows_DetailRS1'])) {
  $totalRows_DetailRS1 = $_GET['totalRows_DetailRS1'];
} else {
  $all_DetailRS1 = mysql_query($query_DetailRS1);
  $totalRows_DetailRS1 = mysql_num_rows($all_DetailRS1);
}
$totalPages_DetailRS1 = ceil($totalRows_DetailRS1/$maxRows_DetailRS1)-1;
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
.style20 {
	font-size: 8px;
	font-weight: bold;
}
.style21 {font-size: 12px;
	font-weight: bold;
}
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
            <td height="271" background="images/ban.jpg">&nbsp;</td>
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
                <img src="images/hrs.jpg" width="250" height="23"></td>
          </tr>
          <tr>
            <td height="289">&nbsp;
		
<table width="458" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
  
  <tr>
    <td width="112">Id</td>
    <td width="326"><?php echo $row_DetailRS1['id']; ?> </td>
  </tr>
  <tr>
    <td>Username</td>
    <td><?php echo $row_DetailRS1['username']; ?> </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><?php echo $row_DetailRS1['password']; ?> </td>
  </tr>
  <tr>
    <td>Firstname</td>
    <td><?php echo $row_DetailRS1['firstname']; ?> </td>
  </tr>
  <tr>
    <td>Lastname</td>
    <td><?php echo $row_DetailRS1['lastname']; ?> </td>
  </tr>
  <tr>
    <td>Status</td>
    <td><?php echo $row_DetailRS1['status']; ?> </td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $row_DetailRS1['address']; ?> </td>
  </tr>
  <tr>
    <td>City</td>
    <td><?php echo $row_DetailRS1['city']; ?> </td>
  </tr>
  <tr>
    <td>State</td>
    <td><?php echo $row_DetailRS1['state']; ?> </td>
  </tr>
  <tr>
    <td>Country</td>
    <td><?php echo $row_DetailRS1['country']; ?> </td>
  </tr>
  <tr>
    <td>Zipcode</td>
    <td><?php echo $row_DetailRS1['zipcode']; ?> </td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><?php echo $row_DetailRS1['phone']; ?> </td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $row_DetailRS1['email']; ?> </td>
  </tr>
  <tr>
    <td>Company</td>
    <td><?php echo $row_DetailRS1['company']; ?> </td>
  </tr>
  <tr>
    <td>Position</td>
    <td><?php echo $row_DetailRS1['position']; ?> </td>
  </tr>
  <tr>
    <td>Aboutus</td>
    <td><?php echo $row_DetailRS1['aboutus']; ?> </td>
  </tr>
  <tr>
    <td>Registeration date</td>
    <td><?php echo $row_DetailRS1['regdate']; ?> </td>
  </tr>
  
  
</table>
</td>
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
<?php
mysql_free_result($DetailRS1);
?>