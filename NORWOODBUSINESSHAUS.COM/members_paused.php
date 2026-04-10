<?php require_once('Connections/members.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_members = 100;
$pageNum_members = 0;
if (isset($_GET['pageNum_members'])) {
  $pageNum_members = $_GET['pageNum_members'];
}
$startRow_members = $pageNum_members * $maxRows_members;

mysql_select_db($database_members, $members);
$query_members = "SELECT * FROM members";
$query_limit_members = sprintf("%s LIMIT %d, %d", $query_members, $startRow_members, $maxRows_members);
$members = mysql_query($query_limit_members, $members) or die(mysql_error());
$row_members = mysql_fetch_assoc($members);

if (isset($_GET['totalRows_members'])) {
  $totalRows_members = $_GET['totalRows_members'];
} else {
  $all_members = mysql_query($query_members);
  $totalRows_members = mysql_num_rows($all_members);
}
$totalPages_members = ceil($totalRows_members/$maxRows_members)-1;

$queryString_members = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_members") == false && 
        stristr($param, "totalRows_members") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_members = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_members = sprintf("&totalRows_members=%d%s", $totalRows_members, $queryString_members);
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
	font-size: 9px;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-3915335-1");pageTracker._trackPageview();} catch(err) {}</script>
</HEAD>
<BODY>
<table width="783" height="980" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#003333" bgcolor="#FFFFFF">
  <tr>
    <td width="779" height="293" valign="top" background="http://www.norwoodbusinesshaus.com/images/fla.jpg"><table width="779" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="299" valign="top"><table width="779" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="271" background="http://www.norwoodbusinesshaus.com/images/ban2.jpg">&nbsp;</td>
          </tr>
          <tr>
            <td><img src="http://www.norwoodbusinesshaus.com/images/link.jpg" alt="contactus.php" width="779" height="30" border="0" usemap="#Map">
              <map name="Map">
                <area shape="rect" coords="24,11,70,28" href="index.php" alt="Index">
                <area shape="rect" coords="102,12,194,29" href="whoweare.php" alt="Who we are">
                <area shape="rect" coords="229,12,318,28" href="whatwedo.php" alt="What we do">
                <area shape="rect" coords="358,11,406,27" href="http://www.norwoodbusinesshausltd/forum.php" alt="Forum">
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
        <td width="584" valign="top"><p><br>
                <img src="http://www.norwoodbusinesshaus.com/images/forum.jpg" width="238" height="23"><br>
                <br>
                <br>
        <table width="581" border="1" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
            <tr>
              <td width="170" bordercolor="#FFFFFF">Name</td>
              <td width="168" bordercolor="#FFFFFF">Company </td>
              <td width="161" bordercolor="#FFFFFF">Position</td>
              <td width="58" bordercolor="#FFFFFF">&nbsp;</td>
            </tr>
              <?php do { ?><tr>
            
                <td><?php echo $row_members['firstname']; ?> <?php echo $row_members['lastname']; ?></td>
                <td><?php echo $row_members['company']; ?></td>
                <td><?php echo $row_members['position']; ?></td>
                <td><div align="center"><a href="membersdetails.php?recordID=<?php echo $row_members['id']; ?>">Details</a></div></td>
                </tr><?php } while ($row_members = mysql_fetch_assoc($members)); ?>
          </table>
          <p>
<table border="0" width="40%" align="left">
            <tr>
              <td width="23%" align="center"><?php if ($pageNum_members > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_members=%d%s", $currentPage, 0, $queryString_members); ?>">First</a>
                  <?php } // Show if not first page ?>
              </td>
              <td width="31%" align="center"><?php if ($pageNum_members > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_members=%d%s", $currentPage, max(0, $pageNum_members - 1), $queryString_members); ?>">Previous</a>
                  <?php } // Show if not first page ?>
              </td>
              <td width="23%" align="center"><?php if ($pageNum_members < $totalPages_members) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_members=%d%s", $currentPage, min($totalPages_members, $pageNum_members + 1), $queryString_members); ?>">Next</a>
                  <?php } // Show if not last page ?>
              </td>
              <td width="23%" align="center"><?php if ($pageNum_members < $totalPages_members) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_members=%d%s", $currentPage, $totalPages_members, $queryString_members); ?>">Last</a>
                  <?php } // Show if not last page ?>
              </td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>Records <?php echo ($startRow_members + 1) ?> to <?php echo min($startRow_members + $maxRows_members, $totalRows_members) ?> of <?php echo $totalRows_members ?> </p>
          <p>&nbsp;</p>
          </td>
        
      </tr>
      <tr>
        <td height="70" colspan="2"><div align="center">
            <p>&nbsp;</p>
          <p class="style8"><a href="index.php">Home</a> | <a href="whoweare.php">Who we are</a> | <a href="whatwedo.php">What we do</a> | <a href="forum.php">Business Forum </a> | <a href="news.php">News/Events</a> | <a href="enquire.php">Enquire</a> | <a href="contactus.php">Contact us</a><br>
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
</map>
</BODY></HTML>
<?php
mysql_free_result($members);
?>
