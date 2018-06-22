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
<font color="white" face="tahoma">
<center>
<table width="100%" height="50%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td width="25%">
<div style="text-align:justify">
<b>Select Language</b>
<p>
<form method="GET" action="guide.php">
<select name="language">
<option value="Indonesian" id="language" name="language">Indonesian
<option value="English" id="language" name="language">English
</select>
<br>
<input type="submit" value="Select">
</form>
</div>
</td>
<td width="75%">
<div style="text-align:center">
<table width="75%" height="" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<thead>
<th colspan="3">
<?php
require("connection.php");

$lang = (string)filter_input(INPUT_GET, 'language');
if (!isset($_GET['language'])) {
$lang = null;
echo "Select Language First!";
}
elseif (is_array($_GET['language'])) {
$lang = false;
}
else
{
echo "<b>" ."Download Manual Book For " .$lang. " Language" ."</b>";
echo "</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td width=40%>";
echo "Download";
echo "</td>";
echo "<td width=30%>";
echo "Size";
echo "</td>";
echo "<td width=30%>";
echo "Hit";
echo "</td>";
echo "<tr>";
echo "<td height=50>";
$qry = "SELECT * FROM tb_download_manual WHERE manual_language='$lang'";
$sql = mysql_query($qry);

while($row = mysql_fetch_array($sql)){

echo "<a href=$row[manual_link] target=_blank>Download</a>";
$update = "UPDATE tb_download_manual SET manual_downloaded=manual_downloaded + 1 WHERE manual_language='$lang'";
$eksekusi = mysql_query($update);

echo "</td>";
echo "<td>";
echo $row['manual_size'];
echo "</td>";
echo "<td>";
echo $row['manual_downloaded'];
}
mysql_close ();
}
?>
</div>
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