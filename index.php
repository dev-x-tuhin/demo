
<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Star Trader Online</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>Star Trader Online</h1>

<div class="box">
<h2>Register</h2>
<form method="post" action="register.php">
<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Register</button>
</form>
</div>

<div class="box">
<h2>Login</h2>
<form method="post" action="login.php">
<input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button type="submit">Login</button>
</form>
</div>

</body>
</html>
