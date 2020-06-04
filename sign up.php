

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
<style>
.loginbox
{
    height: 653px;
    top: 80%;
    width: 400px;
}

</style>
<?php
  include('class/classuser.php');
  $user=new user();
     if(isset($_POST['ajouterUser'])){
       $nom=$_POST["nom"];
       $prenom=$_POST["prenom"];
       $email=$_POST["email"];
       $telephone=$_POST["telephone"];
       $password=$_POST["password"];
     $user->insertUser($nom,$prenom,$email,$telephone,$password);
     }
  ?>

	<div class="loginbox">
		<img src="https://www.vijayyadav.tk/wp-content/uploads/2020/05/avatar.png" class="avatar">
		<h1> Sign Up  Here</h1>
		<form  method="POST">
			<p>Nom</p>
			<input type="text" name="nom" placeholder="Username">
            <p>Prenom</p>
			<input type="text" name="prenom" placeholder="Username">
            <p>Email</p>
			<input type="email" name="email" placeholder="Username">
            <p>Telephone</p>
			<input type="text" name="telephone" placeholder="Username">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password">
			<input type="submit" name="ajouterUser" value="sign up">
			<a href="login.php">login</a><br>
	
		</form>
	</div>
</body>
</html>