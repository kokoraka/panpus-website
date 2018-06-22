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
<td width="20%" height="20%">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td>
<center>
<font color="white" face="tahoma">
<b>Select Setup Type</b>
</font>
</center>
</td>
</tr>
<tr>
<td>
<form action="" method="POST">
<center>
<select name="type">
<option value="database" name="mysql">Database</option>
<option value="ntp" name="ntp">NTP</option>
<option value="odbc" name="odbc">ODBC</option>
<option value="manual" name="manual">Manual</option>
</select>
<input type="submit" value="Select"></input>
</center>
</form>
<?php

if (isset($_POST['type']))
{
switch ($_POST['type']) {
case "database":
echo "<meta http-equiv='refresh' content='0; URL=setup.php#database'>";
break;
case "ntp":
echo "<meta http-equiv='refresh' content='0; URL=setup.php#ntp'>";
break;
case "odbc";
echo "<meta http-equiv='refresh' content='0; URL=setup.php#odbc'>";
break;
case "manual";
echo "<meta http-equiv='refresh' content='0; URL=setup.php#manual'>";
break;
default:
echo "<center><font color=white face=tahoma><small>Type Not Found</small></font></center>";
}
}
else {

}
?>
</td>
</tr>
</table>
<td width="80%" rowspan="2">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<td height="30">
<center>
<font color="white" face="tahoma">
<b>SETUP PANDA PUSTAKA</b>
</font>
</center>
</td>
</tr>
<tr>
<td>
<table class="setup" width="100%" height="100%" border="0" bordercolor="white" cellpading="0" cellspacing="0">
<tr>
<th>
<div id="database">
<font color="white" face="tahoma">
<small>Database</small>
</font>
</div>
</th>
</tr>
<tr>
<td>
<p>
<div style="text-align:justify">
<font face="arial" color="white" size="2">
<center>
<p>
<small>
<table width="200" height="" border="1" bordercolor="white" cellpading="0" cellspacing="0">
<tr>
<th colspan="2">
Default Settings
</th>
</tr>
<tr>
<td width="50%">
Host
</td>
<td>
192.168.100.1
</td>
</tr>
<tr>
<td width="50%">
Port
</td>
<td>
3306
</td>
</tr>
<tr>
<td width="50%">
Database Name
</td>
<td>
db_panpus
</td>
</tr>
<tr>
<td width="50%">
Username
</td>
<td>
panda
</td>
</tr>
<tr>
<td width="50%">
Password
</td>
<td>
pustaka
</td>
</tr>
</table>
</small>
</center>
<br>
Panda Pustaka is using MySQL database, setup the database same as the table over. If you want to change the default setting, you must <a href="source.php" target="_blank">download the source code</a> and setup the program with your own setting on the module <strong><font color="red">MdKoneksi</font></strong> and then recompile it.
The program will not work if you doesn't setup the default settings or change the application settings.
To setup the database follow the instruction below.
<p>
<center><img src="image/mysql_logo.png" alt="MySQL Logo" width="200" height="200"></img></center>
<p>
<ul>
<li type="square">First of all, i assumed you have been installed MySQL Server and phpMyAdmin and working correctly.</li>
<br>
<center><img src="image/setup/create_database.png" alt="Create Database" width="70%" height="220"></img></center>
<br>
<li type="square"><a href="download.php" target="_blank">Download Panda Pustaka Database</a>, create database with named <strong><font color="red">db_perpus</font></strong>.</li> 
<br>
<center><img src="image/setup/import_database.png" alt="Create Database" width="70%" height="220"></img></center>
<br>
<li type="square">Select the database and import it with phpMyAdmin. Make sure you have selected the same version of installer and database, if you're not sure check on the Version field.</li>
<br>
<center><img src="image/setup/login_information.png" alt="Create Database" width="70%" height="220"></img></center>
<center><img src="image/setup/global_privileges.png" alt="Create Database" width="70%" height="220"></img></center>
<br>
<li type="square">Select database first, go to privileges tab and setting up the privileges. Add the user, password, and host that allowed to accessable. </li>
<li type="square">Trying testing using command line or remote sql and then put the code below.</li>
<pre>
mysql -u panda -p pustaka
</pre>
<li type="square">If you can login with "panda" as username and "pustaka" as password, the setting has been succesfully added.</li>
</ul>
</font>
</div>
</td>
</tr>
<tr>
<th>
<div id="ntp">
<font color="white" face="tahoma">
<small>Network Time Protocol</small>
</font>
</div>
</th>
</tr>
<tr>
<td>
<div style="text-align:justify">
<font face="arial" color="white" size="2">
<p>
The NTP server is currently use as support setting, this mean the ntp setting is not really needed for setting up the application.
<br>
But, as you know <strong><font color="red"><i>time is money</i></font></strong>. If you doesn't set up the current ntp server or setting up local time of client computer, this will make the input date from the program is not same.
<p>
<ul>
<br>
<center><img src="image/setup/change_date.png" alt="Create Database" width="70%" height="220"></img></center>
<br>
<li type="square">To setting up the local client date and time go to control panel > change date and time settings. Select Internet Time tab, click on the Change Settings button, checked the checkbox and update date and time setting. You must be online to update with online ntp server such as <i>time.windows.com, time.nist.gov, time-nw.nist.gov, time-a.nist.gov</i>, etc.</li>
</ul>
</font>
</div>
</td>
</tr>
<tr>
<th>
<div id="odbc">
<font color="white" face="tahoma">
<small>Open Data Base Conectivity</small>
</font>
</div>
</th>
</tr>
<tr>
<td>
<div style="text-align:justify">
<font face="arial" color="white" size="2">
<p>
ODBC is currently database provider which Panda Pustaka use. Panda Pustaka is design with automatically configuration when the client installed it. But if you want to set up or change the setting, you must setting the data source name information manually.
<p>
<ul>
<li type="square">I assumed you have been installed MySQL Connector ODBC 5.2.2(w) or Installed Panda Pustaka that automatic call ODBC installation.</li>
<li type="square">To change the odbc setting go to Control Panel > System and Security > Administrative Tools > open ODBC Data Sources.</li>
<br>
<center><img src="image/setup/select_odbc_dsn.png" alt="Create Database" width="70%" height="220"></img></center>
<br>
<li type="square">Click on the System DSN tab, and hit Add button. Select <i>MySQL ODBC 5.2(w) Driver</i> and then click Finish</li>
<br>
<center><img src="image/setup/odbc_configuration.png" alt="Create Database" width="70%" height="220"></img></center>
<br>
<li type="square">Input the setting like below, or use your own setting. Don't forget to test your setting, hit Test button.</li>
<br>
</ul>
<center>
<table width="300" height="" cellpading="0" cellspacing="0" border="1" bordercolor="white">
<tr>
<th colspan="2">
ODBC Configuration
</th>
</tr>
<tr>
<td width="50%">
Data Source Name
</td>
<td width="50%">
Panda Pustaka
</td>
</tr>
<tr>
<td width="50%">
Description
</td>
<td width="50%">
Panda Pustaka
</td>
</tr>
<tr>
<td width="50%">
TCP/IP Server
</td>
<td width="50%">
192.168.100.1
</td>
</tr>
<tr>
<td width="50%">
Port
</td>
<td width="50%">
3306
</td>
</tr>
<tr>
<td width="50%">
User
</td>
<td width="50%">
panda
</td>
</tr>
<tr>
<td width="50%">
Password
</td>
<td width="50%">
pustaka
</td>
</tr>
<tr>
<td width="50%">
Database
</td>
<td width="50%">
db_perpus
</td>
</tr>
</table>
</center>
<p>
</font>
</div>
</td>
</tr>
<tr>
<th>
<div id="manual">
<font color="white" face="tahoma">
<small>Manual Application</small>
</font>
</div>
</th>
</tr>
<tr>
<td>
<div style="text-align:justify">
<font face="arial" color="white" size="2">
<p>
<center>
<table width="300" height="" border="1" bordercolor="white" cellpading="0" cellspacing="0">
<tr>
<th colspan="2">
Select Manual Type
</th>
</tr>
<tr>
<td>
<center><a href="guide.php">Guide Book</a></center>
</td>
<td>
<center><a href="preview.php">Guide Video</a></center>
</td>
</tr>
</table>
</center>
<p>
</font>
</div>
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