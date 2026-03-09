
<?php
include("config/db.php");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO users(name,email,phone,password,balance,status)
VALUES('$name','$email','$phone','$password',0,'inactive')";

$conn->query($sql);

header("Location:index.php");
?>
