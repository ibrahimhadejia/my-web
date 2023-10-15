<?php require_once('Connections/conhadejiasuper.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO customers (name, email, username, password) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_conhadejiasuper, $conhadejiasuper);
  $Result1 = mysql_query($insertSQL, $conhadejiasuper) or die(mysql_error());

  $insertGoTo = "login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_conhadejiasuper, $conhadejiasuper);
$query_Recordset1 = "SELECT * FROM customers";
$Recordset1 = mysql_query($query_Recordset1, $conhadejiasuper) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signup.php</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:49px;
	top:15px;
	width:1107px;
	height:536px;
	z-index:1;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {color: #000000}
#apDiv2 {
	position:absolute;
	left:377px;
	top:517px;
	width:509px;
	height:20px;
	z-index:2;
}
-->
</style>
</head>

<body>
<div id="apDiv1">
  <table width="1106" height="533" border="0">
    <tr>
      <td width="224" height="121" rowspan="2">&nbsp;</td>
      <td colspan="4"><div align="center" class="style1">WELCOME TO HADEJIA SUPER</div></td>
      <td width="190" rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="131" height="23"><div align="center"><a href="home.php" class="style2">Home</a></div></td>
      <td width="175"><div align="center"><a href="contact.php" class="style2">Contact us</a></div></td>
      <td width="161"><div align="center"><a href="about.php" class="style2">About us</a></div></td>
      <td width="185"><div align="center"><a href="signup.php" class="style2">Sign up</a></div></td>
    </tr>
    <tr>
      <td height="43">&nbsp;</td>
      <td colspan="4"><div align="center"><strong>REGISTER WITH US AND BUY GOODS AT AFFORDABLE PRICE</strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="309">&nbsp;</td>
      <td colspan="4"><form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
        <table width="455" height="179" border="0" align="center">
          <tr>
            <td width="252"><div align="center"><strong><em>Name</em></strong></div></td>
            <td width="193"><label>
              <div align="center">
                <input type="text" name="name" id="name" placeholder="Enter Name" required/>
                </div>
            </label></td>
          </tr>
          <tr>
            <td><div align="center"><strong><em>Email address</em></strong></div></td>
            <td><label>
              <div align="center">
                <input type="email" name="email" id="email" placeholder="Enter email" required />
                </div>
            </label></td>
          </tr>
          <tr>
            <td><div align="center"><strong><em>username</em></strong></div></td>
            <td><label>
              <div align="center">
                <input type="text" name="username" id="username" placeholder="Enter username"required />
                </div>
            </label></td>
          </tr>
          <tr>
            <td><div align="center"><strong><em>password</em></strong></div></td>
            <td><label>
              <div align="center">
                <input type="password" name="password" id="password" placeholder="Enter Password" required />
                </div>
            </label></td>
          </tr>
          <tr>
            <td colspan="2"><label>
              <div align="center">
                <input name="submit" type="submit" id="textfield" value="sign up" />
                </div>
            </label></td>
            </tr>
        </table>
            <input type="hidden" name="MM_insert" value="form1" />
      </form>      </td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="apDiv2">
  <div align="center"><strong><em>if you already registered click here to<a href="login.php" class="style2"> login</a></em></strong></div>
</div>
</body>
</html><?php
mysql_free_result($Recordset1);
?>
