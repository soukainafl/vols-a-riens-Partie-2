<?php 
session_start();

 echo 'hello  ' .$_SESSION['username'] . ' howe are you?';
 echo 'your favourite food is ' .$_SESSION['food'];
 echo '<a href="logout.php"> deconnecte </a>';