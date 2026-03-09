
<?php
include("config/db.php");
$uid=$_SESSION['user'];

$q=$conn->query("SELECT * FROM withdraws WHERE user_id=$uid");

echo "<h2>Withdraw History</h2>";

while($row=$q->fetch_assoc()){
    echo $row['amount']." - ".$row['status']."<br>";
}
?>
