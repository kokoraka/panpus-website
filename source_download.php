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
<div style="text-align:center">
<table width="100%" height="50%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td width="20%"></td>
<td width="50%">
<table class="scrollbar" width="100%" height="50%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<thead>
<tr>
<th width="30%">
Release Date
</th>
<th width="30%">
Size
</th>
<th width="20%">
Download
</th>
<th width="20%">
Hit
</th>
</tr>
</thead>
<tbody>

<?php
require("connection.php");
$id = '';
if (isset($_GET['id']))
{
$id= $_GET['id'];
}
else
{
echo "<meta http-equiv='refresh' content='0; URL=source.php'>";
}

$qry = "SELECT * FROM tb_source_code WHERE id_source_code=$id ORDER BY source_release_date DESC";
$sql = mysql_query($qry);

while(list($id, $date, $size, $link, $hit) = mysql_fetch_row($sql)) {

echo"
<tr>
<td width=30%>
$date
</td>
<td width=30%>
$size
</td>
<td width=20%>
";

$update = "UPDATE tb_source_code SET source_release_downloaded=source_release_downloaded + 1 WHERE id_source_code=$id";
$execute = mysql_query($update);

echo"
<a href=$link target=_blank>Download</a>
</td>
<td width=20%>
$hit
</td>
</tr>
</tbody>
";
}
mysql_close();
?>

</table>
</td>
<td width="20%"></td>
</tr>
</table>
</div>
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