
<?php
include("config/db.php");
$id=$_SESSION['user'];
$user=$conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>

<h2>Profile</h2>
Name: <?php echo $user['name']; ?><br>
Email: <?php echo $user['email']; ?><br>
Phone: <?php echo $user['phone']; ?><br>
