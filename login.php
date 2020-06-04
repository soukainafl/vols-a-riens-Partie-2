

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <body>
		<?php
	include("class/classuser.php");
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $userL=$_POST["username"];
        $password=$_POST["password"];

      $user=new user();
      $user->login($userL,$password);
    }
    ?>

	<div class="loginbox">
		<img src="https://www.vijayyadav.tk/wp-content/uploads/2020/05/avatar.png" class="avatar">
		<h1>Login Here</h1>
		<form  method="POST">
			<p>Email</p>
			<input type="text" name="username" placeholder="Username">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password">
			<input type="submit" name="login" value="login">
			<a href="sign up.php">Sign Up</a><br>
	
		</form>
	</div>
</body>
</html>
	