
<?php
include("config/db.php");
$uid=$_SESSION['user'];

$q=$conn->query("SELECT * FROM plans WHERE user_id=$uid");

echo "<h2>Your Plans</h2>";

while($row=$q->fetch_assoc()){
    echo "Amount: $".$row['amount']." | Daily Profit: ".$row['profit']."<br>";
}
?>
