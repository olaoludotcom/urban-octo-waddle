<?php require_once('Connections/admin.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_forumuser = 100;
$pageNum_forumuser = 0;
if (isset($_GET['pageNum_forumuser'])) {
  $pageNum_forumuser = $_GET['pageNum_forumuser'];
}
$startRow_forumuser = $pageNum_forumuser * $maxRows_forumuser;

mysql_select_db($database_admin, $admin);
$query_forumuser = "SELECT * FROM members";
$query_limit_forumuser = sprintf("%s LIMIT %d, %d", $query_forumuser, $startRow_forumuser, $maxRows_forumuser);
$forumuser = mysql_query($query_limit_forumuser, $admin) or die(mysql_error());
$row_forumuser = mysql_fetch_assoc($forumuser);

if (isset($_GET['totalRows_forumuser'])) {
  $totalRows_forumuser = $_GET['totalRows_forumuser'];
} else {
  $all_forumuser = mysql_query($query_forumuser);
  $totalRows_forumuser = mysql_num_rows($all_forumuser);
}
$totalPages_forumuser = ceil($totalRows_forumuser/$maxRows_forumuser)-1;

$queryString_forumuser = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_forumuser") == false && 
        stristr($param, "totalRows_forumuser") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_forumuser = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_forumuser = sprintf("&totalRows_forumuser=%d%s", $totalRows_forumuser, $queryString_forumuser);
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
.style2 {color: #FFFFFF}
.style20 {	font-size: 10px;
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
            <td height="271" background="images/ban2.jpg">&nbsp;</td>
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
        <td width="584" valign="top" bordercolor="#013300"><p><br>
                <img src="images/forum.jpg" width="238" height="23">        
          <p><br>
            <br>          
          <table width="581" height="31" border="1" cellpadding="1" cellspacing="3" bordercolor="#FFFFFF">
            <tr>
              <td width="7" bordercolor="#48679E">&nbsp;</td>
              <td width="267" bordercolor="#48679E">Full Name </td>
              <td width="105" bordercolor="#48679E">Company</td>
              <td width="115" bordercolor="#48679E">Position </td>
              <td width="47" bordercolor="#48679E">&nbsp;</td>
            </tr>
           <?php do { ?> <tr>
              
                <td bordercolor="#48679E" class="style20">o</td>
                <td bordercolor="#48679E"><?php echo $row_forumuser['firstname']; ?> <?php echo $row_forumuser['lastname']; ?></td>
                <td bordercolor="#48679E"><?php echo $row_forumuser['company']; ?></td>
                <td bordercolor="#48679E"><?php echo $row_forumuser['position']; ?></td>
                <td bordercolor="#48679E"><div align="center" class="style2"><a href="forummembersdetails.php?recordID=<?php echo $row_forumuser['id']; ?>">Details</a></div></td>
                </tr><?php } while ($row_forumuser = mysql_fetch_assoc($forumuser)); ?>
          </table>
          <p>
<table border="0" width="50%" align="center">
            <tr>
              <td width="23%" align="center"><?php if ($pageNum_forumuser > 0) { // Show if not first page ?>
                    <a href="<?php printf("%s?pageNum_forumuser=%d%s", $currentPage, 0, $queryString_forumuser); ?>">First</a>
                    <?php } // Show if not first page ?>
              </td>
              <td width="31%" align="center"><?php if ($pageNum_forumuser > 0) { // Show if not first page ?>
                    <a href="<?php printf("%s?pageNum_forumuser=%d%s", $currentPage, max(0, $pageNum_forumuser - 1), $queryString_forumuser); ?>">Previous</a>
                    <?php } // Show if not first page ?>
              </td>
              <td width="23%" align="center"><?php if ($pageNum_forumuser < $totalPages_forumuser) { // Show if not last page ?>
                    <a href="<?php printf("%s?pageNum_forumuser=%d%s", $currentPage, min($totalPages_forumuser, $pageNum_forumuser + 1), $queryString_forumuser); ?>">Next</a>
                    <?php } // Show if not last page ?>
              </td>
              <td width="23%" align="center"><?php if ($pageNum_forumuser < $totalPages_forumuser) { // Show if not last page ?>
                    <a href="<?php printf("%s?pageNum_forumuser=%d%s", $currentPage, $totalPages_forumuser, $queryString_forumuser); ?>">Last</a>
                    <?php } // Show if not last page ?>
              </td>
            </tr>
          </table>
          Records <?php echo ($startRow_forumuser + 1) ?> to <?php echo min($startRow_forumuser + $maxRows_forumuser, $totalRows_forumuser) ?> of <?php echo $totalRows_forumuser ?> </td>
        
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
mysql_free_result($forumuser);
?>
