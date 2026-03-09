
<?php
include("config/db.php");

$email=$_POST['email'];
$password=$_POST['password'];

$q=$conn->query("SELECT * FROM users WHERE email='$email'");
$user=$q->fetch_assoc();

if(password_verify($password,$user['password'])){
    $_SESSION['user']=$user['id'];
    header("Location:dashboard.php");
}else{
    echo "Login Failed";
}
?>
