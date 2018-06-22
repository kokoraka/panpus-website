<table class="navigation" width="100%" height="100" border="1" bordercolor="white" cellpading="0" cellspacing="0">
<tr>
<td width="25%">
<ul>
<li type="square"><a href="index.php" class="linknavigasibawah">HOME</a></li>
<li type="square"><a href="http://www.jr-07.net/" class="linknavigasibawah">BLOG</a></li>
<li type="square"><a href="about.php" class="linknavigasibawah">ABOUT</a></li>
<li type="square"><a href="contact.php" class="linknavigasibawah">CONTACT</a></li>
<li type="square"><a href="donate.php" class="linknavigasibawah">DONATE</a></li>
</ul>
</td>
<td width="25%">
<ul>
<li type="square"><a href="source.php" class="linknavigasibawah">SOURCE CODE</a></li>
<li type="square"><a href="guide.php" class="linknavigasibawah">GUIDE</a></li>
<li type="square"><a href="download.php" class="linknavigasibawah">DOWNLOAD</a></li>
<li type="square"><a href="setup.php" class="linknavigasibawah">SETUP</a></li>
<li type="square"><a href="review.php" class="linknavigasibawah">REVIEW</a></li>
</ul>
</td>
<td width="50%">
<table width="100%" height="100%" cellpading="0" cellspacing="0" border="0" bordercolor="white">
<tr>
<td>
<div style="text-align:justify">
<font color="white" face="tahoma">
<?php
echo "<small>";
require("connection.php");
$qry = "SELECT SUM(source_release_downloaded) AS source_count FROM tb_source_code";
$sql = mysql_query($qry) or die(mysql_error());
echo "Source Downloaded ";
while($source_count = mysql_fetch_array($sql))
{
echo $source_count['source_count'];
}
echo " Time(s)";
mysql_close();
echo "<br>";

require("connection.php");
$qry = "SELECT SUM(application_downloaded) AS application_count FROM tb_download_application WHERE application_type='INSTALLER' OR application_type='ZIP'";
$sql = mysql_query($qry) or die(mysql_error());
echo "Application Downloaded ";
while($application_count = mysql_fetch_array($sql))
{
echo $application_count['application_count'];
}
echo " Time(s)";
mysql_close();
echo "<br>";

require("connection.php");
$qry = "SELECT SUM(application_downloaded) AS component_count FROM tb_download_application WHERE application_type='SQL' OR application_type='REG'";
$sql = mysql_query($qry) or die(mysql_error());
echo "Component Downloaded ";
while($component_count = mysql_fetch_array($sql))
{
echo $component_count['component_count'];
}
echo " Time(s)";
mysql_close();
echo "<br>";

require("connection.php");
$qry = "SELECT COUNT(*) AS review_count FROM tb_review_application;";
$sql = mysql_query($qry) or die(mysql_error());
while($review_count = mysql_fetch_array($sql))
{
echo $review_count['review_count'];
}
echo " People Reviewed";
mysql_close();
echo "<br>";
echo "</small>";
?>
</div>
</td>
<td>
<a href="donate.php"><center><img src="image/bca_logo.png" alt="Donate" width="180" height="80"></center></a>
</td>
<td>

</td>
</tr>
</table>
</td>
</tr>
</table>