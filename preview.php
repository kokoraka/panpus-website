<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="img/ico" href="image/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PANDA PUSTAKA</title>

<meta name="description" content="Panda Pustaka, di bangun dan di rancang menggunakan aplikasi Microsoft Visual Basic 6.0 dan database MySQL menggunakan connector ODBC ( Open Data Base Conectivity ). Seluruh pengalihan hak cipta berupa source code, penggandaan dan penyalahgunaan program akan di kenakan hukuman yang sesuai dengan hukum yang berlaku." />

<meta name="keywords" content="Download Panda Pustaka" />
<meta name="keywords" content="Aplikasi Perpustakaan Gratis" />
<meta name="keywords" content="Free Library Application" />

</head>
<body>
<center>
<table width="80%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td>
<?php
require("header.php");
?>
</td>
</tr>
<tr>
<td>
<hr color="white">
</td>
</tr>
<tr>
<td>
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td width="100%" height="400">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td width="20%" height="70px">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="35px">
<center>
<font color="white" face="tahoma">
<b>Select Preview Type</b>
</font>
</center>
</td>
</tr>
<tr>
<td height="35px">
<form action="" method="POST">
<center>
<select name="type">
<option value="server" name="server">Server</option>
<option value="client" name="client">Client</option>
</select>
<input type="submit" value="Select"></input>
</center>
</form>

</td>
</tr>
</table>
<td width="80%" rowspan="2">
<?php

if (isset($_POST['type']))
{
switch ($_POST['type']) {
case "client":
echo "
<table width=100% height=550px cellpading=0 cellspacing=0 border=1 bordercolor=white>
<tr>
<td height=30>
<center>
<font color=white face=tahoma>
<b>PREVIEW PANDA PUSTAKA</b>
</font>
</center>
</td>
</tr>
<tr>
<td>
<table class=setup width=100% height=100% border=0 bordercolor=white cellpading=0 cellspacing=0>
<tr>
<th>
<div id=client>
<font color=white face=tahoma>
<small>CLIENT</small>
</font>
</div>
</th>
</tr>
<tr>
<td>
<video width=100% height= poster=image/reading.png controls autoplay>
<source src=video/client.mp4 type=video/mp4>
Silahkan Upgrade Versi Browser Untuk Melihat Video
</video>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr><td></td></tr>
</table>
";
break;
case "server":
echo "
<table width=100% height=550px cellpading=0 cellspacing=0 border=1 bordercolor=white>
<tr>
<td height=30>
<center>
<font color=white face=tahoma>
<b>PREVIEW PANDA PUSTAKA</b>
</font>
</center>
</td>
</tr>
<tr>
<td>
<table class=setup width=100% height=100% border=0 bordercolor=white cellpading=0 cellspacing=0>
<tr>
<th>
<div id=server>
<font color=white face=tahoma>
<small>SERVER</small>
</font>
</div>
</th>
</tr>
<tr>
<td>
<video width=100% height= poster=image/reading.png controls autoplay>
<source src=video/server.mp4 type=video/mp4>
Silahkan Upgrade Versi Browser Untuk Melihat Video
</video>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr><td></td></tr>
</table>
";
break;
default:
echo "<center><font color=white face=tahoma><small>Preview Not Found</small></font></center>";
}
}
else {

}
?>
</td>
</tr>
</table>
<hr color="white">
</td>
<tr>
<td>
<font color="white">
<?php
require("footer.php");
?>
</font>
</td>
</tr>
</body>
</center>
</html>