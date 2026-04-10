<?php require_once('Connections/members.php'); ?>
<?php
// *** Redirect if username exists
$MM_flag="MM_insert";
if (isset($_POST[$MM_flag])) {
  $MM_dupKeyRedirect="exist.php";
  $loginUsername = $_POST['username'];
  $LoginRS__query = "SELECT username FROM members WHERE username='" . $loginUsername . "'";
  mysql_select_db($database_members, $members);
  $LoginRS=mysql_query($LoginRS__query, $members) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);

  //if there is a row in the database, the username was found - can not add the requested username
  if($loginFoundUser){
    $MM_qsChar = "?";
    //append the username to the redirect page
    if (substr_count($MM_dupKeyRedirect,"?") >=1) $MM_qsChar = "&";
    $MM_dupKeyRedirect = $MM_dupKeyRedirect . $MM_qsChar ."requsername=".$loginUsername;
    header ("Location: $MM_dupKeyRedirect");
    exit;
  }
}

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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "register")) {
  $insertSQL = sprintf("INSERT INTO members (username, password, firstname, lastname, status, address, city, `state`, country, zipcode, phone, email, company, `position`, aboutus, regdate) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['status'], "text"),
                       GetSQLValueString($_POST['address'], "text"),
                       GetSQLValueString($_POST['city'], "text"),
                       GetSQLValueString($_POST['state'], "text"),
                       GetSQLValueString($_POST['country'], "text"),
                       GetSQLValueString($_POST['zipcode'], "text"),
                       GetSQLValueString($_POST['phone'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['company'], "text"),
                       GetSQLValueString($_POST['position'], "text"),
                       GetSQLValueString($_POST['aboutus'], "text"),
                       GetSQLValueString($_POST['regdate'], "text"));

  mysql_select_db($database_members, $members);
  $Result1 = mysql_query($insertSQL, $members) or die(mysql_error());

  $insertGoTo = "thankyou.php";
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
            <td height="271" background="images/ban3.jpg">&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/link.jpg" alt="contactus.php" width="779" height="30" border="0" usemap="#Map">
              <map name="Map">
                <area shape="rect" coords="24,11,70,28" href="index.php" alt="Index">
                <area shape="rect" coords="102,12,194,29" href="whoweare.php" alt="Who we are">
                <area shape="rect" coords="229,12,318,28" href="whatwedo.php" alt="What we do">
                <area shape="rect" coords="357,11,405,27" href="forum.php" alt="Forum">
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
        <td width="584" valign="top"><table width="581" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="581" height="57"><br>
                <img src="images/register.jpg" width="250" height="23"></td>
          </tr>
          <tr>
            <td height="289"><form method="POST" action="<?php echo $editFormAction; ?>" name="register">
              <table width="567" height="390" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="23">&nbsp;</td>
                    <td><strong>Login Information</strong> </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="91" height="19">&nbsp;</td>
                    <td width="155">Username:</td>
                    <td width="321"><label>
                      <input name="username" type="text" id="username" maxlength="30">
                    </label></td>
                  </tr>
                  <tr>
                    <td height="28">&nbsp;</td>
                    <td>Password:</td>
                    <td><input name="password" type="password" id="password" maxlength="30"></td>
                  </tr>
                  <tr>
                    <td height="23">&nbsp;</td>
                    <td><strong>Personal Information</strong> </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Status</td>
                    <td><label>
                      <select name="status" id="status">
                        <option selected="selected">Mr</option>
                        <option>Mrs</option>
                        <option>Dr</option>
                        <option>Chife</option>
                        <option>Prof</option>
                        <option>Barrister</option>
                        <option>Engineer</option>
                        <option>Others</option>
                      </select>
                    </label></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Firstname: </td>
                    <td><input name="firstname" type="text" id="firstname" maxlength="30"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Lastname:</td>
                    <td><input name="lastname" type="text" id="lastname" maxlength="30"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Address:</td>
                    <td><input name="address" type="text" id="address" maxlength="150"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>City:</td>
                    <td><input name="city" type="text" id="city" maxlength="30"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>State:</td>
                    <td><select name="state" id="state">
                      <option value="others">Others</option>
                      <option value="Aba">Aba</option>
                      <option value="Abeokuta">Abeokuta</option>
                      <option value="Abuja">Abuja</option>
                      <option value="Ado Ekiti">Ado Ekiti</option>
                      <option value="Akure">Akure</option>
                      <option value="Akwa Ibom">Akwa Ibom</option>
                      <option value="Awka">Awka</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Benin">Benin</option>
                      <option value="Calabar">Calabar</option>
                      <option value="Ebonyi">Ebonyi</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Gombe">Gombe</option>
                      <option value="Ibadan">Ibadan</option>
                      <option value="Ijebu-Ode">Ijebu-Ode</option>
                      <option value="Ilorin">Ilorin</option>
                      <option value="Jos">Jos</option>
                      <option value="Kaduna">Kaduna</option>
                      <option value="Kano">Kano</option>
                      <option value="Katsina">Katsina</option>
                      <option value="Lagos" selected="selected">Lagos</option>
                      <option value="Lokoja">Lokoja</option>
                      <option value="Maiduguri">Maiduguri</option>
                      <option value="Markurdi">Markurdi</option>
                      <option value="Minna">Minna</option>
                      <option value="Nnewi">Nnewi</option>
                      <option value="Onitsha">Onitsha</option>
                      <option value="Owerri">Owerri</option>
                      <option value="Port-Harcourt">Port-Harcourt</option>
                      <option value="Sagamu">Sagamu</option>
                      <option value="Sokoto">Sokoto</option>
                      <option value="Uyo">Uyo</option>
                      <option value="Warri">Warri</option>
                      <option value="Yola">Yola</option>
                      <option value="Zaria">Zaria</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Country:</td>
                    <td><select name="country" size="1"     
      style="FONT-SIZE: 12px;FONT-FAMILY: "vernada">
                        <option value="00">Please Select Your Country</option>
                        <option value="Afghanistan">Afghanistan [AF]</option>
                        <option value="Albania">Albania [AL]</option>
                        <option value="Algeria">Algeria [DZ]</option>
                        <option value="American Samoa">American Samoa [AS]</option>
                        <option value="Andorra">Andorra [AD]</option>
                        <option value="Angola">Angola [AO]</option>
                        <option value="Anguilla">Anguilla [AI]</option>
                        <option value="Antarctica">Antarctica [AQ]</option>
                        <option value="Antigua And Barbuda">Antigua And Barbuda [AG]</option>
                        <option value="Argentina">Argentina [AR]</option>
                        <option value="Armenia">Armenia [AM]</option>
                        <option value="Aruba">Aruba [AW]</option>
                        <option value="Australia">Australia [AU]</option>
                        <option value="Austria">Austria [AT]</option>
                        <option value="Azerbaijan">Azerbaijan [AZ]</option>
                        <option value="Bahamas">Bahamas [BS]</option>
                        <option value="Bahrain">Bahrain [BH]</option>
                        <option value="Bangladesh">Bangladesh [BD]</option>
                        <option value="Barbados">Barbados [BB]</option>
                        <option value="Belarus">Belarus [BY]</option>
                        <option value="Belgium">Belgium [BE]</option>
                        <option value="Belize">Belize [BZ]</option>
                        <option value="Benin">Benin [BJ]</option>
                        <option value="Bermuda">Bermuda [BM]</option>
                        <option value="Bhutan">Bhutan [BT]</option>
                        <option value="Bolivia">Bolivia [BO]</option>
                        <option value="Bosnia And Herzegowina">Bosnia And Herzegowina [BA]</option>
                        <option value="Botswana">Botswana [BW]</option>
                        <option value="Bouvet Island">Bouvet Island [BV]</option>
                        <option value="Brazil">Brazil [BR]</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory [IO]</option>
                        <option value="Brunei Darussalam">Brunei Darussalam [BN]</option>
                        <option value="Bulgaria">Bulgaria [BG]</option>
                        <option value="Burkina Faso">Burkina Faso [BF]</option>
                        <option value="Burundi">Burundi [BI]</option>
                        <option value="Cambodia">Cambodia [KH]</option>
                        <option value="Cameroon">Cameroon [CM]</option>
                        <option value="Canada">Canada [CA]</option>
                        <option value="Cape Verde">Cape Verde [CV]</option>
                        <option value="Cayman Islands">Cayman Islands [KY]</option>
                        <option value="Central African Republic">Central African Republic [CF]</option>
                        <option value="Chad">Chad [TD]</option>
                        <option value="Chile">Chile [CL]</option>
                        <option value="China">China [CN]</option,</option>
                        <option value="Christmas Island">Christmas Island [CX]</option>
                        <option value="Cocos Keeling Islands">Cocos (Keeling) Islands [CC]</option>
                        <option value="Colombia">Colombia [CO]</option>
                        <option value="Comoros">Comoros [KM]</option>
                        <option value="Congo">Congo [CG]</option>
                        <option value="Cook Islands">Cook Islands [CK]</option>
                        <option value="Costa Rica">Costa Rica [CR]</option>
                        <option value="Cote D ivoire">Cote D'ivoire [CI]</option>
                        <option value="CROATIA">CROATIA (Local Name: Hrvatska) [HR]</option>
                        <option value="Cuba">Cuba [CU]</option>
                        <option value="Cyprus">Cyprus [CY]</option>
                        <option value="Czech Republic">Czech Republic [CZ]</option>
                        <option value="Denmark">Denmark [DK]</option>
                        <option value="Djibouti">Djibouti [DJ]</option>
                        <option value="Dominica">Dominica [DM]</option>
                        <option value="Dominican Republic">Dominican Republic [DO]</option>
                        <option value="East Timor">East Timor [TP]</option>
                        <option value="Ecuador">Ecuador [EC]</option>
                        <option value="Egypt">Egypt [EG]</option>
                        <option value="El Salvador">El Salvador [SV]</option>
                        <option value="Equatorial Guinea">Equatorial Guinea [GQ]</option>
                        <option value="Eritrea">Eritrea [ER]</option>
                        <option value="Estonia">Estonia [EE]</option>
                        <option value="Ethiopia">Ethiopia [ET]</option>
                        <option value="Falkland Islands">Falkland Islands (Malvinas) [FK]</option>
                        <option value="Faroe Islands">Faroe Islands [FO]</option>
                        <option value="Fiji">Fiji [FJ]</option>
                        <option value="Finland">Finland [FI]</option>
                        <option value="France">France [FR]</option>
                        <option value="France Metropolitan">France, Metropolitan [FX]</option>
                        <option value="French Guiana">French Guiana [GF]</option>
                        <option value="French Polynesia">French Polynesia [PF]</option>
                        <option value="French Southern Territories">French Southern Territories [TF]</option>
                        <option value="Gabon">Gabon [GA]</option>
                        <option value="Gambia">Gambia [GM]</option>
                        <option value="Georgia">Georgia [GE]</option>
                        <option value="Germany">Germany [DE]</option>
                        <option value="Ghana">Ghana [GH]</option>
                        <option value="Gibraltar">Gibraltar [GI]</option>
                        <option value="Greece">Greece [GR]</option>
                        <option value="Greenland">Greenland [GL]</option>
                        <option value="Grenada">Grenada [GD]</option>
                        <option value="Guadeloupe">Guadeloupe [GP]</option>
                        <option value="Guam">Guam [GU]</option>
                        <option value="Guatemala">Guatemala [GT]</option>
                        <option value="Guinea">Guinea [GN]</option>
                        <option value="Guinea Bissau">Guinea-Bissau [GW]</option>
                        <option value="Guyana">Guyana [GY]</option>
                        <option value="Haiti">Haiti [HT]</option>
                        <option value="Heard And Mc Donald Islands">Heard And Mc Donald Islands [HM]</option>
                        <option value="Honduras">Honduras [HN]</option>
                        <option value="Honduras">Hong Kong [HK]</option>
                        <option value="Hungary">Hungary [HU]</option>
                        <option value="Iceland">Iceland [IS]</option>
                        <option value="India">India [IN]</option>
                        <option value="Indonesia">Indonesia [ID]</option>
                        <option value="Iran">Iran (Islamic Republic Of) [IR]</option>
                        <option value="Iraq">Iraq [IQ]</option>
                        <option value="Ireland">Ireland [IE]</option>
                        <option value="Israel">Israel [IL]</option>
                        <option value="Italy">Italy [IT]</option>
                        <option value="Jamaica">Jamaica [JM]</option>
                        <option value="Japan">Japan [JP]</option>
                        <option value="Jordan">Jordan [JO]</option>
                        <option value="Kazakhstan">Kazakhstan [KZ]</option>
                        <option value="Kenya">Kenya [KE]</option>
                        <option value="Kiribati">Kiribati [KI]</option>
                        <option value="Korea Democratic">Korea, Democratic People's Rep. Of [KP]</option>
                        <option value="Korea Republic">Korea, Republic Of [KR]</option>
                        <option value="Kuwait">Kuwait [KW]</option>
                        <option value="Kyrgyzstan">Kyrgyzstan [KG]</option>
                        <option value="Lao Peoples Democratic Republic">Lao People's Democratic Republic [LA]</option>
                        <option value="Latvia">Latvia [LV]</option>
                        <option value="Lebanon">Lebanon [LB]</option>
                        <option value="Lesotho">Lesotho [LS]</option>
                        <option value="Liberia">Liberia [LR]</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya [LY]</option>
                        <option value="Liechtenstein">Liechtenstein [LI]</option>
                        <option value="Lithuania">Lithuania [LT]</option>
                        <option value="Luxembourg">Luxembourg [LU]</option>
                        <option value="Macau">Macau [MO]</option>
                        <option value="Macedonia">Macedonia, The Former Yugoslav Rep. Of [MK]</option>
                        <option value="Madagascar">Madagascar [MG]</option>
                        <option value="Malawi">Malawi [MW]</option>
                        <option value="Malaysia">Malaysia [MY]</option>
                        <option value="Maldives">Maldives [MV]</option>
                        <option value="Mali">Mali [ML]</option>
                        <option value="Malta">Malta [MT]</option>
                        <option value="Marshall Islands">Marshall Islands [MH]</option>
                        <option value="Martinique">Martinique [MQ]</option>
                        <option value="Mauritania">Mauritania [MR]</option>
                        <option value="Mauritius">Mauritius [MU]</option>
                        <option value="Mayotte">Mayotte [YT]</option>
                        <option value="Mexico">Mexico [MX]</option>
                        <option value="Micronesia">Micronesia, Federated States Of [FM]</option>
                        <option value="Moldova">Moldova, Republic Of [MD]</option>
                        <option value="Monaco">Monaco [MC]</option>
                        <option value="Mongolia">Mongolia [MN]</option>
                        <option value="Montserrat">Montserrat [MS]</option>
                        <option value="Morocco">Morocco [MA]</option>
                        <option value="Mozambique">Mozambique [MZ]</option>
                        <option value="Myanmar">Myanmar [MM]</option>
                        <option value="Namibia">Namibia [NA]</option>
                        <option value="Nauru">Nauru [NR]</option>
                        <option value="Nepal">Nepal [NP]</option>
                        <option value="Netherlands">Netherlands [NL]</option>
                        <option value="Netherlands Antilles">Netherlands Antilles [AN]</option>
                        <option value="New Caledonia">New Caledonia [NC]</option>
                        <option value="New Zealand">New Zealand [NZ]</option>
                        <option value="Nicaragua">Nicaragua [NI]</option>
                        <option value="Niger">Niger [NE]</option>
                        <option selected value="Nigeria">Nigeria [NG]</option>
                        <option value="Niue">Niue [NU]</option>
                        <option value="Norfolk Island">Norfolk Island [NF]</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands [MP]</option>
                        <option value="Norway">Norway [NO]</option>
                        <option value="Oman">Oman [OM]</option>
                        <option value="Pakistan">Pakistan [PK]</option>
                        <option value="Palau">Palau [PW]</option>
                        <option value="Panama">Panama [PA]</option>
                        <option value="Papua New Guinea">Papua New Guinea [PG]</option>
                        <option value="Paraguay">Paraguay [PY]</option>
                        <option value="Peru">Peru [PE]</option>
                        <option value="Philippines">Philippines [PH]</option>
                        <option value="Pitcairn">Pitcairn [PN]</option>
                        <option value="Poland">Poland [PL]</option>
                        <option value="Portugal">Portugal [PT]</option>
                        <option value="Puerto Rico">Puerto Rico [PR]</option>
                        <option value="Qatar">Qatar [QA]</option>
                        <option value="Reunion">Reunion [RE]</option>
                        <option value="Romania">Romania [RO]</option>
                        <option value="Russian Federation">Russian Federation [RU]</option>
                        <option value="Rwanda">Rwanda [RW]</option>
                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis [KN]</option>
                        <option value="Saint Lucia">Saint Lucia [LC]</option>
                        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines [VC]</option>
                        <option value="Samoa">Samoa [WS]</option>
                        <option value="San Marino">San Marino [SM]</option>
                        <option value="Sao Tome And Principe">Sao Tome And Principe [ST]</option>
                        <option value="Saudi Arabia">Saudi Arabia [SA]</option>
                        <option value="Senegal">Senegal [SN]</option>
                        <option value="Seychelles">Seychelles [SC]</option>
                        <option value="Sierra Leone">Sierra Leone [SL]</option>
                        <option value="Singapore">Singapore [SG]</option>
                        <option value="Slovakia">Slovakia (Slovak Republic) [SK]</option>
                        <option value="Slovenia">Slovenia [SI]</option>
                        <option value="Solomon Islands">Solomon Islands [SB]</option>
                        <option value="Somalia">Somalia [SO]</option>
                        <option value="South Africa">South Africa [ZA]</option>
                        <option value="S Georgia And The S Sandwich Islands">S. Georgia And The S. Sandwich Islands [GS]</option>
                        <option value="Spain">Spain [ES]</option>
                        <option value="Sri Lanka">Sri Lanka [LK]</option>
                        <option value="St Helena">St. Helena [SH]</option>
                        <option value="St Pierre And Miquelon">St. Pierre And Miquelon [PM]</option>
                        <option value="Sudan">Sudan [SD]</option>
                        <option value="Suriname">Suriname [SR]</option>
                        <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands [SJ]</option>
                        <option value="Swaziland">Swaziland [SZ]</option>
                        <option value="Sweden">Sweden [SE]</option>
                        <option value="Switzerland">Switzerland [CH]</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic [SY]</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan [TJ]</option>
                        <option value="Tanzania United Republic">Tanzania, United Republic Of [TZ]</option>
                        <option value="Thailand">Thailand [TH]</option>
                        <option value="Togo">Togo [TG]</option>
                        <option value="Tokelau">Tokelau [TK]</option>
                        <option value="Tonga">Tonga [TO]</option>
                        <option value="Trinidad And Tobago">Trinidad And Tobago [TT]</option>
                        <option value="Tunisia">Tunisia [TN]</option>
                        <option value="Turkey">Turkey [TR]</option>
                        <option value="Turkmenistan">Turkmenistan [TM]</option>
                        <option value="Turks And Caicos Islands">Turks And Caicos Islands [TC]</option>
                        <option value="Tuvalu">Tuvalu [TV]</option>
                        <option value="Uganda">Uganda [UG]</option>
                        <option value="Ukraine">Ukraine [UA]</option>
                        <option value="United Arab Emirates">United Arab Emirates [AE]</option>
                        <option value="United Kingdom">United Kingdom [UK]</option>
                        <option value="United Kingdom">United Kingdom [GB]</option>
                        <option value="United States">United States [US]</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands [UM]</option>
                        <option value="Uruguay">Uruguay [UY]</option>
                        <option value="Uzbekistan">Uzbekistan [UZ]</option>
                        <option value="Vanuatu">Vanuatu [VU]</option>
                        <option value="Vatican City State">Vatican City State (Holy See) [VA]</option>
                        <option value="Venezuela">Venezuela [VE]</option>
                        <option value="Viet Nam">Viet Nam [VN]</option>
                        <option value="Virgin Islands British">Virgin Islands (British) [VG]</option>
                        <option value="Virgin Islands US">Virgin Islands (U.S.) [VI]</option>
                        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands [WF]</option>
                        <option value="Western Sahara">Western Sahara [EH]</option>
                        <option value="Yemen">Yemen [YE]</option>
                        <option value="Yugoslavia">Yugoslavia [YU]</option>
                        <option value="Zaire">Zaire [ZR]</option>
                        <option value="Zambia">Zambia [ZM]</option>
                        <option value="Zimbabwe">Zimbabwe [ZW]</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Zip Code/Postal: </td>
                    <td><input name="zipcode" type=text onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="20" maxlength="10"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Phone:</td>
                    <td><input name="phone" type=text onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="20" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Email:</td>
                    <td><input name="email" type="text" id="email" maxlength="150"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Company</td>
                    <td><input name="company" type="text" id="company" maxlength="40"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>Position:</td>
                    <td><input name="position" type="text" id="position" maxlength="40"></td>
                  </tr>
                  <tr>
                    <td height="13">&nbsp;</td>
                    <td>How you learn about us:</td>
                    <td><SELECT name="aboutus" id="aboutus">
                        <option>Newspaper / Brochure</option>
                        <OPTION>Word-of-mouth</OPTION>
                        <OPTION>Fliers</OPTION>
                        <option selected="selected">Internet</option>
                        <OPTION>Radio</OPTION>
                        <OPTION>TV Presentation</OPTION>
                        <option>Posters</option>
                        <option>Walk-in</option>
                      </SELECT>
                        <INPUT type="hidden" name=regdate id=regdate size=15 maxlength="40" 
value="<?php echo date("d:m:y h:i:s", time()); ?>"></td>
                  </tr>
                  <tr>
                    <td height="29">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><label> <br>
                          <input type="submit" name="Submit" value="Register">
                          <input type="reset" name="Reset" value="Reset">
                    </label></td>
                  </tr>
                </table>
              <input type="hidden" name="MM_insert" value="register">
            </form></td>
          </tr>
        </table>
        <p>
          </p>
            <p>&nbsp;</p></td>
        
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

</BODY></HTML>
