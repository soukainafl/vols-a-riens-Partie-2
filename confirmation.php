<!DOCTYPE html>
<?php  include('class/classConnexion.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
    <style>
    body{
      overflow-x:hidden;
    }
       footer div{
            color: white;
        }
       p>a{
            text-decoration: none;
            color:white
        }
        li > span{
          font-weight:bold;
        }

        


    </style>
</head>

    <body  style="background-image: url('body.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;  background-size: 100% 100%;">
    <?php
  
    ?>
     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="logo3.png" width="120" height="80" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservation.php">reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="confirmation.php">confirmation</a>
              </li>
              <li class="nav-item">
                        <?php 
                       include('class/classuser.php');
                       session_start();
                       $user=new user();
                        if(!empty($_SESSION["user"])){
                          
                        $data=$user->sessionUser();

                        ?>
                <a class="nav-link" href="infoutilisateur.php"><i class="fas fa-user-circle" style="font-size:30px;margin-top:-7px"></i>&nbsp<?php echo $data[0]['nom'];?></a>
                <li class="nav-item">
                <a  class="btn btn-outline-danger" href="logoutuser.php">log out</a>
              </li>
                <?php
                 }
                 elseif(!empty($_SESSION["admin"])){
                  $data=$user->sessionAdmin();
                   ?>
                  <a class="nav-link" href="ajoutervol.php"><i class="fas fa-user-circle" style="font-size:30px;margin-top:-7px"></i>&nbsp<?php echo  $data[0]['nom'];?></a>
                  <li class="nav-item">
                <a  class="btn btn-outline-danger" href="logoutadmin.php">log out</a>
              </li>
                  <?php } 
                  else{
                    header('location:login.php');
                  }
                  ?>
                
              </li>
             
          </ul>
        </div>
      </nav>
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="avion.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
              </div>
              <div class="carousel-item">
                <img src="avion2.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                 
                </div>
              </div>
              <div class="carousel-item">
                <img src="avion3.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      <?php
  include('class/confirmation.php');
  $confirmation=new confirmation();
  $data=$confirmation->afficheReservation();
   ?>
    <table border= 2px solid black;  style="margin:0 auto;font-size:22px;;margin-top:170px;color:white">
    <tr>
    <th>nom : </th>
    <td><?php echo $data[0]['nom'] ?> </td>
  </tr>
  <tr>
    <th>prenom :</th>
    <td><?php echo $data[0]['prenom'] ?></td>
  </tr>
  <tr>
    <th>address :</th>
    <td><?php echo $data[0]['adress'] ?></td>
  </tr>
  <tr>
    <th>id de reservation : </th>
    <td><?php echo $data[0]['idReservation'] ?></td>
  </tr>
  <tr>
    <th>la data de reservation : </th>
    <td><?php echo $data[0]['dateResr'] ?></td>
  </tr>
 
  <tr>
    <th>lieu de depart : </th>
    <td><?php echo $data[0]['lieuDepart'] ?></td>
  </tr>
  <tr>
    <th>destination : </th>
    <td><?php echo $data[0]['destination'] ?></td>
  </tr>
  <tr>
    <th>date vole : </th>
    <td><?php echo $data[0]['dateVole'] ?></td>
  </tr>
  <tr>
    <th>prix : </th>
    <td><?php echo $data[0]['prix'] ?></td>
  </tr>
  <tr>
    <th>numero de telephone :</th>
    <td><?php echo $data[0]['numTelephone'] ?></td>
  </tr>
  <tr>
    <th>email :</th>
    <td><?php echo $data[0]['email'] ?></td>
  </tr>
  <tr>
    <th>passport :</th>
    <td><?php echo $data[0]['passport'] ?></td>
  </tr>
    </table>

    <?php include('footer.php'); ?>