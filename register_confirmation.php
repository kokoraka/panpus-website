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
<?php
require("js/settings.js");

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$authority = $_POST['authority'];
if (!isset($_POST['agreement'])) {
echo "
<script type=text/javascript>
unchecked();
</script>
";
}
elseif ($name == "" or '' OR $password == "" or '' OR $email == "" or '' OR $name == "" or '' OR $contact == "" or '') {
echo "
<script type=text/javascript>
unentered();
</script>
";
}
elseif ($authority == "VIP") {
echo "
<form method=POST action=register_send.php>
<center>
<table class=register_confirmation width=40% height=100% cellpading=0 cellspacing=0 border=1 bordercolor=white>
<tr>
<th>
$authority MEMBERSHIP
</th>
<tr>
<td>
<table width=100% height=100% cellpading=0 cellspacing=0 border=0 bordercolor=white>
<tr>
<td>
USERNAME
</td>
<td>
<input type=text name=username value=$username></input>
</td>
</tr>
<tr>
<td>
PASSWORD
</td>
<td>
<input type=text name=username value=$password></input>
</td>
</tr>
<tr>
<td>
EMAIL
</td>
<td>
<input type=text name=username value=$email></input>
</td>
</tr>
<tr>
<td>
NAME
</td>
<td>
<input type=text name=username value=$name></input>
</td>
</tr>
<tr>
<td>
CONTACT
</td>
<td>
<textarea name=contact cols=30 rows=4>$contact</textarea>
</td>
</tr>
<tr>
<td>
VIP CODE
</td>
<td>
<input type=text name=coupon maxlength=10></input>
</td>
</tr>
<tr>
<td colspan=2>
<hr color=white>
<font color=orange>
<code>Please Make Sure You Entered The Correct Detail</code>
</font>
<div style=text-align:right>
<input type=submit value=Continue></input>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
";
}
elseif ($authority == "NORMAL") {
echo "
<center>
<table class=register_confirmation width=40% height=100% cellpading=0 cellspacing=0 border=1 bordercolor=white>
<tr>
<th>
$authority MEMBERSHIP
</th>
<tr>
<td>
<table width=100% height=100% cellpading=0 cellspacing=0 border=0 bordercolor=white>
<tr>
<td>
USERNAME
</td>
<td>
$username
</td>
</tr>
<tr>
<td>
PASSWORD
</td>
<td>
$password
</td>
</tr>
<tr>
<td>
EMAIL
</td>
<td>
$email
</td>
</tr>
<tr>
<td>
NAME
</td>
<td>
$name
</td>
</tr>
<tr>
<td>
CONTACT
</td>
<td>
$contact
</td>
</tr>
<tr>
<td colspan=2>
<hr color=white>
<font color=orange>
<code>Please Make Sure You Entered The Correct Detail</code>
</font>
<div style=text-align:right>
<input type=submit value=Continue></input>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>
";
}
?>
</center>
<hr color=white>
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