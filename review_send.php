<script type="text/javascript">
function empty()
{
alert("There Are Empty Field");
}

function success()
{
alert("Thank You For Your Review");
}

function failed()
{
alert("Failed To Adding Review");
}

function announcement_failed()
{
alert("Do Not Add To Much Text Please");
}
</script>

<?php
require("connection.php");
$name = $_POST['name'];
$contact = $_POST['contact'];
$think = $_POST['think'];
$date = date("Y-m-d h:i:s");
$rating = $_POST['rating'];

if ($name == "" or '' OR $contact == "" or '' OR $think == "" or '') {

echo"
<script type=text/javascript>
empty();
</script>
";

echo "<b>There Are Empty Field</b>";
echo "<meta http-equiv='refresh' content='1; URL=review.php'>";
}
else {

$qry = "INSERT INTO tb_review_application(review_customer_name, review_customer_contact, review_customer_think, review_customer_date, review_customer_rating) VALUES('$name','$contact', '$think', '$date', '$rating')";
$sql = mysql_query($qry);

if ($sql) {

echo"
<script type=text/javascript>
success();
</script>
";

echo "<b>Thank You For Your Review</b>";
echo "<meta http-equiv='refresh' content='1; URL=review.php'>";
}
else
{

echo"
<script type=text/javascript>
failed();
announcement_failed();
</script>
";

echo "<b>Failed To Adding Review</b>";
echo "<meta http-equiv='refresh' content='1; URL=review.php'>";
}
}
?>