
<?php
include("config/db.php");

$uid=$_SESSION['user'];
$amount=$_POST['amount'];

$conn->query("INSERT INTO deposits(user_id,amount,status) VALUES($uid,$amount,'pending')");

echo "Deposit submitted. Waiting admin approval.";
?>
