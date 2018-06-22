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
<center>
<form method="POST" action="register_confirmation.php">
<table class="register" width="40%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<th colspan="2">
Register Form
</th>
</tr>
<tr>
<td>
&nbsp;USERNAME
</td>
<td>
<input type="text" name="username" maxlength="10"></input>
</td>
</tr>
<tr>
<td>
&nbsp;PASSWORD
</td>
<td>
<input type="password" name="password" maxlength="250"></input>
</td>
</tr>
<tr>
<td>
&nbsp;E-MAIL
</td>
<td>
<input type="text" name="email" maxlength="250"></input>
</td>
</tr>
<tr>
<td>
&nbsp;NAME
</td>
<td>
<input type="text" name="name" maxlength="250"></input>
</td>
</tr>
<tr>
<td>
&nbsp;CONTACT
</td>
<td>
<textarea name="contact" cols="30" rows="4"></textarea>
</td>
</tr>
<tr>
<td>
&nbsp;MEMBERSHIP
</td>
<td>
<select name="authority">
<option name="member" value="NORMAL">NORMAL</option>
<option name="vip" value="VIP">VIP</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="checkbox" value="agreement" name="agreement" unchecked>I agree with any term and conditions.</input>
<div style="text-align:right">
<input type="reset" value="Clear"></input>
<input type="submit" value="Register"></input>
</div>
</td>
</tr>
</table>
</form>
</center>
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