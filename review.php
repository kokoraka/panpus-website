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

<link rel="icon" type="img/ico" href="image/favicon.ico">
<link href="css/settings.css" rel="stylesheet" type="text/css" />
<script src="css/SpryMenuBar.js" type="text/javascript"></script>
<link href="css/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

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
<font color="white" face="tahoma">
<center>
<table width="100%" height="50%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td width="25%">
<img src="image/feed_back.png" alt="Panda Pustaka" width="250" height="200"></img>
</td>
<td width="50%">
<form method="post" action="review_send.php">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<thead>
<tr>
<th colspan="2" bgcolor="red">
<font color="black">
I Want To Listen From You!
</font>
</th>
</tr>
</thead>
<tbody>
<tr>
<td width="30%">
Name
</td>
<td width="70%">
<input type="text" name="name" size="40"></input>
</td>
</tr>
<tr>
<td width="30%">
Contact
</td>
<td width="70%">
<input type="text" name="contact" size="40"></input>
</td>
</tr>
<tr>
<td width="30%">
What do you think?
</td>
<td width="70%">
<textarea name="think" width="200"></textarea>
</td>
</tr>
<tr>
<td width="30%">
Rating
</td>
<td width="70%">
<select name="rating">
<option value="EXCELLENT" name="EXCELLENT">EXCELLENT</option>
<option value="VERY GOOD" name="VERY GOOD">VERY GOOD</option>
<option value="GOOD" name="GOOD" selected>GOOD</option>
<option value="BAD" name="BAD">BAD</option>
<option value="WORST" name="WORST">WORST</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<div style="text-align:right">
<input type="reset" value="Clear" name="clear"></input>
<input type="submit" value="Send" name="send"></input>
</div>
</td>
</tr>
</table>
</form>
</td>
<td width="25%">
<table class="review" width="100%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<thead>
<tr>
<th bgcolor="green">
<font color="black">People Said</font>
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<table width="100%" height="50%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<?php
require("connection.php");

$qry = "SELECT * FROM tb_review_application ORDER BY review_customer_date DESC";
$sql = mysql_query($qry);

while(list($id, $name, $contact, $think, $date, $rating) = mysql_fetch_row($sql)) {
echo"
<td bgcolor=orange>
<center>
<font color=black><small><b>$name</b><br>$contact</small></font>
</center>
</td>
</tr>
<tr>
<td bgcolor=gray>
<div style=text-align:justify>$think</div>
</td>
</tr>
<tr>
<td bgcolor=orange>
<small>
<font color=black><div style=text-align:left><b>$rating</b></div></font>
<font color=red><div style=text-align:right><b>$date</b></div></font>
</small>
</td>
</tr>
<tr>
<td bgcolor=black height=20><center><small>~~~</small></center></td>
</tr>
";
}
mysql_close();
?>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</table>
</center>
</font>
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