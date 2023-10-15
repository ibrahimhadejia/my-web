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

mysql_select_db($database_conhadejiasuper, $conhadejiasuper);
$query_Recordset1 = "SELECT * FROM customers";
$Recordset1 = mysql_query($query_Recordset1, $conhadejiasuper) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "dashboard.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_conhadejiasuper, $conhadejiasuper);
  
  $LoginRS__query=sprintf("SELECT username, password FROM customers WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $conhadejiasuper) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login.php</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:50px;
	top:25px;
	width:1098px;
	height:524px;
	z-index:1;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
</head>

<body>
<div id="apDiv1">
  <table width="1096" height="578" border="0">
    <tr>
      <td width="197" height="223">&nbsp;</td>
      <td colspan="4"><div align="center"><span class="style1">WELCOME TO HADEJIA SUPER</span></div></td>
      <td width="187">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td width="184"><div align="center"><a href="home.php" class="style2">Home</a></div></td>
      <td width="157"><div align="center"><a href="contact.php" class="style2">Contact us</a></div></td>
      <td width="173"><div align="center"><a href="about.php" class="style2">About us</a></div></td>
      <td width="174"><div align="center"><a href="signup.php" class="style2">Sign up</a></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="307">&nbsp;</td>
      <td colspan="4"><form ACTION="<?php echo $loginFormAction; ?>" id="form1" name="form1" method="POST">
        <table width="343" height="177" border="0" align="center">
          <tr>
            <td width="168"><div align="center">Username</div></td>
            <td width="160"><label>
              <div align="center">
                <input type="text" name="username" id="username" />
                </div>
            </label></td>
          </tr>
          <tr>
            <td><div align="center">Password</div></td>
            <td><label>
              <div align="center">
                <input type="password" name="password" id="password" />
                </div>
            </label></td>
          </tr>
          <tr>
            <td colspan="2"><label>
              <div align="center">
                <input name="login" type="submit" id="textfield" value="login" />
                </div>
            </label></td>
            </tr>
        </table>
            </form>      </td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html><?php
mysql_free_result($Recordset1);
?>