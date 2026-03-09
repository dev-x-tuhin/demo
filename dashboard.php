
<?php
include("config/db.php");
if(!isset($_SESSION['user'])){header("Location:index.php");}

$id=$_SESSION['user'];
$user=$conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Welcome <?php echo $user['name']; ?></h2>

<p>Status: <?php echo $user['status']; ?></p>
<p>Balance: $<?php echo $user['balance']; ?></p>

<a href="deposit.php">Deposit</a> |
<a href="plans.php">Plans</a> |
<a href="withdraw.php">Withdraw</a> |
<a href="profile.php">Profile</a> |
<a href="logout.php">Logout</a>

</body>
</html>
