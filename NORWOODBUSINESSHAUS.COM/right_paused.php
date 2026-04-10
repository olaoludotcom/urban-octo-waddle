<?php require_once('Connections/nbh.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_nbh, $nbh);
$query_Recordset1 = "SELECT * FROM forum where user = 'norwood' ORDER BY id DESC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $nbh) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>

<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_news = 10;
$pageNum_news = 0;
if (isset($_GET['pageNum_news'])) {
  $pageNum_news = $_GET['pageNum_news'];
}
$startRow_news = $pageNum_news * $maxRows_news;

mysql_select_db($database_nbh, $nbh);
$query_news = "SELECT * FROM news ORDER BY id DESC";
$query_limit_news = sprintf("%s LIMIT %d, %d", $query_news, $startRow_news, $maxRows_news);
$news = mysql_query($query_limit_news, $nbh) or die(mysql_error());
$row_news = mysql_fetch_assoc($news);

if (isset($_GET['totalRows_news'])) {
  $totalRows_news = $_GET['totalRows_news'];
} else {
  $all_news = mysql_query($query_news);
  $totalRows_news = mysql_num_rows($all_news);
}
$totalPages_news = ceil($totalRows_news/$maxRows_news)-1;

$queryString_news = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_news") == false && 
        stristr($param, "totalRows_news") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_news = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_news = sprintf("&totalRows_news=%d%s", $totalRows_news, $queryString_news);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Welcome to Norwood Business Haus</TITLE>
<META content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
<META 
content="Norwood" 
name=keywords>
<META content=RevealTrans(Duration=4,Transition=12) http-equiv=Page-Enter><LINK 
href="icons/favicon.ico" rel=icon><LINK href="icons/favicon.ico" 
rel="SHORTCUT ICON"><LINK href="main.css" 
rel=stylesheet type=text/css>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #003333;
}
a {
	font-size: 11px;
	color: #003333;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #333333;
}
a:active {
	text-decoration: none;
	color: #003333;
}
.style18 {font-size: 9px}
.style24 {color: #333333}
-->
</style>

<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-3915335-1");pageTracker._trackPageview();} catch(err) {}</script>

</head>

<body>
<table width="194" height="488" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="192" height="27">	
					<FORM name="search" action="search.php" method="post" target="_parent">
					<table width="190" height="19" border="0" cellpadding="3" cellspacing="3">
      <tr>
        <td height="19">
						<table width="180" height="19">
						  <tr><td width="130">
<input type="text" size="19" name="search" class="meg_header" value="Search this site"></td><td width="38"><A href="javascript:search.submit()">
<label>
<input name="Submit" type="submit" class="meg_header" value="Go">
</label>
</A>
          </td>
						  </tr></table></td>
      </tr>
    </table></FORM></td>
  </tr>
  <tr>
    <td height="140" background="images/box.gif"><table width="184" height="137" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10" height="32">&nbsp;</td>
        <td width="174">&nbsp;</td>
      </tr>
      <tr>
        <td height="105">&nbsp;</td>
        <td><p><br>
          Latest Topic:</p>
          <p align="justify"><?php echo $row_Recordset1['topic']; ?> <br>
            <a href="forum.php" target="_parent">Enter comment here </a> </p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="150" background="images/box2.gif"><table width="184" height="150" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10" height="29">&nbsp;</td>
        <td width="174">&nbsp;</td>
      </tr>
      <tr>
        <td height="121">&nbsp;</td>
        <td><p align="justify"><br />
          <span class="style24"><br>
          <?php echo $row_news['topic']; ?></span><a href="forum.html" target="_parent"></a></p>
          <p align="justify"><a href="news.php" target="_parent">More details</a><br />
              <br />
            </p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="141" background="images/box3.gif"><table width="184" height="135" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10" height="29">&nbsp;</td>
        <td width="174">&nbsp;</td>
      </tr>
      <tr>
        <td height="106">&nbsp;</td>
        <td valign="top"><br>
          Do you need a more rewarding job? You are in the right place. <br>
          <br>
          <br>
          <a href="carrier.php" target="_parent">Submit your CV</a>. </td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>