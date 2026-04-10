<?php require_once('Connections/nbh.php'); ?>
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
.style1 {font-size: 9px}
.style4 {font-size: 11px;
	font-weight: bold;
}
.style24 {color: #333333}
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
            <td height="289"><table width="639" height="366" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="200" height="313" valign="top"><div align="center"><br>
                    <img src="images/newsmen.jpg" width="200" height="250"></div></td>
                  <td width="439" valign="top"><br>
<?php do { ?>
                      <table width="435" height="133" border="0" cellpadding="2" cellspacing="3">
                        <tr>
                          <td width="1" height="22">&nbsp;</td>
                          <td width="417"><span class="style4"><span class="style24"><?php echo $row_news['topic']; ?></span></span> <span class="style1"><br>
                            Posted on <span class="style24"><?php echo $row_news['date']; ?></span></span></td>
                        </tr>
                        <tr>
                          <td height="63">&nbsp;</td>
                          <td><div align="justify" class="style24"><?php echo $row_news['news']; ?> </div></td>
                        </tr>
                        <tr>
                          <td height="36" colspan="2"><p><center>----------------------------------------------------------------------------------</center></p>
                              <p></p></td>
                        </tr>
                            </table>
                      <?php } while ($row_news = mysql_fetch_assoc($news)); ?><p align="justify"><a href="news.html" target="_parent"></a>
                    <table border="0" width="50%" align="center">
                    <tr>
                      <td width="23%" align="center"><?php if ($pageNum_news > 0) { // Show if not first page ?>
                          <a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, 0, $queryString_news); ?>">First</a>
                          <?php } // Show if not first page ?>
                      </td>
                      <td width="31%" align="center"><?php if ($pageNum_news > 0) { // Show if not first page ?>
                          <a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, max(0, $pageNum_news - 1), $queryString_news); ?>">Previous</a>
                          <?php } // Show if not first page ?>
                      </td>
                      <td width="23%" align="center"><?php if ($pageNum_news < $totalPages_news) { // Show if not last page ?>
                          <a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, min($totalPages_news, $pageNum_news + 1), $queryString_news); ?>">Next</a>
                          <?php } // Show if not last page ?>
                      </td>
                      <td width="23%" align="center"><?php if ($pageNum_news < $totalPages_news) { // Show if not last page ?>
                          <a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, $totalPages_news, $queryString_news); ?>">Last</a>
                          <?php } // Show if not last page ?>
                      </td>
                    </tr>
                  </table>
                  Records <?php echo ($startRow_news + 1) ?> to <?php echo min($startRow_news + $maxRows_news, $totalRows_news) ?> of <?php echo $totalRows_news ?>
                  </p></td>
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
<?php
mysql_free_result($news);
?>
