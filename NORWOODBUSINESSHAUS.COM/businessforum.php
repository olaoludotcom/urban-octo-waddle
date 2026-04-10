<?php require_once('Connections/members.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "accesscheck.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_forum = 10;
$pageNum_forum = 0;
if (isset($_GET['pageNum_forum'])) {
  $pageNum_forum = $_GET['pageNum_forum'];
}
$startRow_forum = $pageNum_forum * $maxRows_forum;

mysql_select_db($database_members, $members);
$query_forum = "SELECT * FROM forum ORDER BY id DESC";
$query_limit_forum = sprintf("%s LIMIT %d, %d", $query_forum, $startRow_forum, $maxRows_forum);
$forum = mysql_query($query_limit_forum, $members) or die(mysql_error());
$row_forum = mysql_fetch_assoc($forum);

if (isset($_GET['totalRows_forum'])) {
  $totalRows_forum = $_GET['totalRows_forum'];
} else {
  $all_forum = mysql_query($query_forum);
  $totalRows_forum = mysql_num_rows($all_forum);
}
$totalPages_forum = ceil($totalRows_forum/$maxRows_forum)-1;

$queryString_forum = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_forum") == false && 
        stristr($param, "totalRows_forum") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_forum = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_forum = sprintf("&totalRows_forum=%d%s", $totalRows_forum, $queryString_forum);
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
.style21 {
	font-size: 9;
	color: #999999;
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
                <area shape="rect" coords="684,12,765,28" href="http://www.norwoodbusinesshausltd.com/contact.php" alt="contactus.php">
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
          <br>
          <img src="images/forum.jpg" width="238" height="23"> | <a href="<?php echo $logoutAction ?>"><strong>Log out </strong></a>
          <br>
          <br>
        <TABLE 
            width="100%" border="1" cellPadding=3 cellSpacing=3 bordercolor="#FFFFFF" style="TABLE-LAYOUT: fixed">
            <TBODY>
              <TR>
                <TD width="28%" vAlign=top bordercolor="#CCCCCC" style="OVERFLOW: hidden" align="center"><div align="center" class="style8">From</div></TD>
                <TD width="72%" vAlign=top bordercolor="#CCCCCC">|| <a href="post.php">Ask your questions </a>|| || <a href="post.php">Post an answers</a> ||</TD>
              </TR>
              <?php do { ?>
              <TR>
                <TD vAlign=top bordercolor="#CCCCCC" style="OVERFLOW: hidden"><p align="center"><br>
                        <br>
                        <?php echo $row_forum['user']; ?><br>
                  </p>
                    <DIV class=smalltext>
                      <div align="center"></div>
                    </DIV></TD>
                <TD height="100%" vAlign=top bordercolor="#CCCCCC"><TABLE width="100%" border=0 cellpadding="0" cellspacing="0">
                    <TBODY>
                      <TR>
                        <TD vAlign=center><?php echo $row_forum['topic']; ?> <span class="style21"><br>
                        Posted on <?php echo $row_forum['date']; ?></span></&raquo; </TD>
                        <TD style="FONT-SIZE: smaller" vAlign=bottom align=right 
                      height=20><A 
                        href="http://enownow.com/forum/index.php?action=post;quote=8;topic=8.0;num_replies=24;sesc=9b986f4cd26b9a77fa92a254151ae1b5"></A> </TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                    <HR color="#cccccc" class=hrcolor width="100%" SIZE=1><br>

                    <?php echo $row_forum['comment']; ?></TD>
              </TR>
              <?php } while ($row_forum = mysql_fetch_assoc($forum)); ?>
              <TR>
                <TD vAlign=top bordercolor="#CCCCCC" style="OVERFLOW: hidden"></TD>
                <TD width="72%" vAlign=top bordercolor="#CCCCCC"><a href="discussion.php"></a>|| <a href="post.php">Ask your questions </a>|| || <a href="post.php">Post an answers</a> ||</TD>
              </TR>
            </TBODY>
          </TABLE>
          <p>&nbsp;</p>
          <table border="0" width="50%" align="center">
            <tr>
              <td width="23%" align="center"><?php if ($pageNum_forum > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_forum=%d%s", $currentPage, 0, $queryString_forum); ?>">First</a>
                  <?php } // Show if not first page ?>
              </td>
              <td width="31%" align="center"><?php if ($pageNum_forum > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_forum=%d%s", $currentPage, max(0, $pageNum_forum - 1), $queryString_forum); ?>">Previous</a>
                  <?php } // Show if not first page ?>
              </td>
              <td width="23%" align="center"><?php if ($pageNum_forum < $totalPages_forum) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_forum=%d%s", $currentPage, min($totalPages_forum, $pageNum_forum + 1), $queryString_forum); ?>">Next</a>
                  <?php } // Show if not last page ?>
              </td>
              <td width="23%" align="center"><?php if ($pageNum_forum < $totalPages_forum) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_forum=%d%s", $currentPage, $totalPages_forum, $queryString_forum); ?>">Last</a>
                  <?php } // Show if not last page ?>
              </td>
            </tr>
          </table>
          Records <?php echo ($startRow_forum + 1) ?> to <?php echo min($startRow_forum + $maxRows_forum, $totalRows_forum) ?> of <?php echo $totalRows_forum ?>
          </p>
          <p></p></td>
              </tr>
      <tr>
        <td height="70" colspan="2"><div align="center">
            <p>&nbsp;</p>
          <p class="style8"><a href="index.php">Home</a> | <a href="whoweare.php">Who we are</a> | <a href="whatwedo.php">What we do</a> | <a href="http://www.norwoodbusinesshausltd.com/forum.php">Business Forum </a> | <a href="news.php">News/Events</a> | <a href="enquire.php">Enquire</a> | <a href="contactus.php">Contact us</a><br>
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
<area shape="rect" coords="24,11,70,28" href="http://www.norwoodbusinesshausltd.com/index.php"><area shape="rect" coords="103,12,195,29" href="howeare.php"><area shape="rect" coords="229,12,318,28" href="http://www.norwoodbusinesshausltd.com/whatwedo.php">
<area shape="rect" coords="358,11,406,27" href="http://www.norwoodbusinesshausltd.com/forum.php">
<area shape="rect" coords="452,12,558,27" href="news.php">
<area shape="rect" coords="589,10,656,27" href="equiries.php"><area shape="rect" coords="684,12,765,28" href="contact.php">
</map>

<?php
mysql_free_result($forum);
?>

</BODY></HTML>
