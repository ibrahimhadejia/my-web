<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact.php</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:49px;
	top:10px;
	width:1143px;
	height:690px;
	z-index:1;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {color: #000000}
-->
* {box-sizing: border-box}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>

<body>
<div id="apDiv1">
  <table width="1141" height="473" border="0">
    <tr>
      <td width="150" height="177">&nbsp;</td>
      <td colspan="4"><div align="center" class="style1">WELCOME TO HADEJIA SUPER</div></td>
      <td width="175">&nbsp;</td>
    </tr>
    <tr>
      <td height="46">&nbsp;</td>
      <td width="192"><div align="center"><a href="home.php" class="style2">Home</a></div></td>
      <td width="225"><div align="center"><a href="contact.php" class="style2">Contact us</a></div></td>
      <td width="249"><div align="center"><a href="about.php" class="style2">About us</a></div></td>
      <td width="124"><div align="center"><a href="signup.php" class="style2">Sign up</a></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p align="center">Email</p>
      <p align="center"><a href="mailto:ibrahimcyb@gmail.com" class="style2" target="_blank" title="send email to ibrahimcyb@gmail.com">ibrahimcyb@gmail.com</a></p></td>
    
      <td colspan="2"><div class="row">
      <h3 style="text-align:center">Login with Social Media </h3>
      <div class="col">
        <div align="center"><a href="facebook.com/hadejiasuper" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook</a>
            <a href="hadejiasuper" class="twitter btn">
            <i class="fa fa-twitter fa-fw"></i> Login with Twitter</a>
            <a href="#" class="google btn">
            <i class="fa fa-google fa-fw"></i> Login with Google+</a>
          </div>
      </div></td>
      <td><img src="images/download (3).jpg" width="124" height="88" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
