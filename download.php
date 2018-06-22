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
<td width="80%">
<table class="download" width="100%" height="25%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<thead>
<tr>
<th width="18.5%">Release Date</th>
<th width="14%">Type</th>
<th width="14%">Version</th>
<th width="18.5%">Status</th>
<th width="14%">Size</th>
<th width="11.5%">Download</th>
<th width="10%">Hit</th>
</tr>
</thead>
<tbody>
<?php
require("connection.php");
$qry = "SELECT * FROM tb_download_application WHERE application_type='INSTALLER' ORDER BY application_release DESC";
$sql = mysql_query($qry);

while($row = mysql_fetch_array($sql)){
echo"
<tr>
<td width=18.5%>".$row['application_release']."</td>
<td width=14%>".$row['application_type']."</td>
<td width=14%>".$row['application_version']."</td>
<td width=18.5%>".$row['application_status']."</td>
<td width=14%>".$row['application_size']."</td>
<td width=11.5%><a href=download_page.php?id=".$row['id_download_application']." target=_blank>Download</a></td>
<td width=10%>".$row['application_downloaded']."</td>
</tr>
";
}
?>
</tbody>
</table>
</td>
<tr>
<td>
<br>
<table class="download" width="100%" height="25%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<thead>
<tr>
<th width="18.5%">Release Date</th>
<th width="14%">Type</th>
<th width="14%">Version</th>
<th width="18.5%">Status</th>
<th width="14%">Size</th>
<th width="11.5%">Download</th>
<th width="10%">Hit</th>
</tr>
</thead>
<tbody>
<?php
$qry = "SELECT * FROM tb_download_application WHERE application_type='ZIP' ORDER BY application_release DESC";
$sql = mysql_query($qry);
$id_exe = $row['id_download_application'];

while($row = mysql_fetch_array($sql)){
echo"
<tr>
<td width=18.5%>".$row['application_release']."</td>
<td width=14%>".$row['application_type']."</td>
<td width=14%>".$row['application_version']."</td>
<td width=18.5%>".$row['application_status']."</td>
<td width=14%>".$row['application_size']."</td>
<td width=11.5%><a href=download_page.php?id=".$row['id_download_application']." target=_blank>Download</a></td>
<td width=10%>".$row['application_downloaded']."</td>
</tr>
";
}
mysql_close ();
?>
</tbody>
</table>
</td>
</tr>
</tr>
</table>
<br>
<table class="download" width="100%" height="25%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<thead>
<tr>
<th width="18.5%">Release Date</th>
<th width="14%">Type</th>
<th width="14%">Version</th>
<th width="18.5%">Status</th>
<th width="14%">Size</th>
<th width="11.5%">Download</th>
<th width="10%">Hit</th>
</tr>
</thead>
<tbody>
<?php
require("connection.php");
$qry = "SELECT * FROM tb_download_application WHERE application_type='REG' OR application_type='SQL' ORDER BY application_release DESC";
$sql = mysql_query($qry);

while($row = mysql_fetch_array($sql)){
echo"
<tr>
<td width=18.5%>".$row['application_release']."</td>
<td width=14%>".$row['application_type']."</td>
<td width=14%>".$row['application_version']."</td>
<td width=18.5%>".$row['application_status']."</td>
<td width=14%>".$row['application_size']."</td>
<td width=11.5%><a href=download_page.php?id=".$row['id_download_application']." target=_blank>Download</a></td>
<td width=10%>".$row['application_downloaded']."</td>
</tr>
";
}
?>
</tbody>
</table>
</td>
<tr>
<td>
<br>
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