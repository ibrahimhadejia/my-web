<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home.php</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:150px;
	top:11px;
	width:1100px;
	height:736px;
	z-index:1;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.style2 {color: #000000}
</style>
</head>

<body>
<div id="apDiv1">
  <table width="1096" height="601" border="0">
    <tr>
      <td width="194" height="167">&nbsp;</td>
      <td colspan="4"><div align="center" class="style1">WELCOME TO HADEJIA SUPER</div></td>
      <td width="207">&nbsp;</td>
    </tr>
    <tr>
      <td height="51">&nbsp;</td>
      <td width="154"><div align="center"><a href="home.php" class="style2">Home</a></div></td>
      <td width="168"><div align="center"><a href="contact.php" class="style2">Contact us</a></div></td>
      <td width="185"><div align="center"><a href="about.php" class="style2">About us</a></div></td>
      <td width="148"><div align="center"><a href="signup.php" class="style2">Sign up</a></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="373">&nbsp;</td>
      <td colspan="4"><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/download (10).jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/shago.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/turare.png" style="width:70%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span></div>

<script>
let slideIndex = 0;
showSlides();
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
