<?php
$username="root";
$password="";
$database="gurisa_pp";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Gagal Terhubung Dengan Data Base");
?>
