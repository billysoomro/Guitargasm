<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url();
	background-color: #000000;
}
body,td,th {
	color: #FFFFFF;
}
#Layer1 {
	position:absolute;
	width:719px;
	height:82px;
	z-index:1;
	left: 25px;
	top: 138px;
}
#banner {
	position:absolute;
	left:360px;
	}
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #FFFFFF;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/gogo2.JPG')">
<div align="right" id="logout"><strong>
<?php

session_start();
if ($_SESSION['username'])
{
echo "Welcome, ".$_SESSION['username'] ."! | ";
}

else 

die ("You must be logged in to be Gutiargasm content!");




?>

<a href="logout.php" target="_parent">Logout</a></strong></div>
<div id="banner"><a href="02.php" target="mainFrame" onmouseover="MM_swapImage('Image1','','images/gogo2.JPG',1)" onmouseout="MM_swapImgRestore()"><img src="images/gogo.JPG" alt="Home!" name="Image1" width="646" height="64" border="0" lowsrc="02.html" id="Image1" /></a></div>





</body>
</html>
