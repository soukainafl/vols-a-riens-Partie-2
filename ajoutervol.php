
<!DOCTYPE html>
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
    <link rel="stylesheet" href="styleReservation.css">
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

        .container-fluid {
    width: 80%;
    margin-left: auto;
    background-color: whitesmoke;
    border-radius: 13px;
    box-shadow: 2px 7px 21px -5px;

}
tbody
{
    background-color: dimgray;
}
    </style>
</head>

    <body>
 
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
                       if(!empty($_SESSION["admin"])){
                       $data=$user->sessionAdmin();
                        ?>
                <a class="nav-link" href="#"><i class="fas fa-user-circle" style="font-size:30px;margin-top:-7px"></i>&nbsp<?php echo $data[0]['nom'];?></a>
                <?php
                 }
                 else{
                   header("Location:login.php");
                 }
                ?>
              </li>
              <li class="nav-item">
                <a  class="btn btn-outline-danger" href="logoutadmin.php">log out</a>
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
  
    $admin=new user();
$data=$admin->getAdmin();
  
?>
          <br><br>
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
        </div>
        
        <div class="span8">
            <h3> Bienvenue Admin  : <?php echo $data[0]['nom'] ?></h3>
            <h6>Prenom  :<?php echo $data[0]['prenom'] ?> </h6>
            <h6>Email  :<?php echo $data[0]['email'] ?></h6>
            <h6>Telephone  :<?php echo $data[0]['telephone'] ?></h6>
            <h6>Satut  :<?php echo $data[0]['statut'] ?></h6>
           

           
        </div>

  
</div>
</div>



<div class="container" style="margin-top: 50px;">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover" style="text-align: center;">
    <thead>
      <tr>
        <th>Id Vol</th>
        <th>Lieu Depart</th>
        <th>Lieu Arrive</th>
        <th>Date </th>
        <th>Numero Place</th>
        <th>Prix</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include('class/classvol.php');
$vol=new vol();
    $rows=$vol->getVol();
      foreach($rows as $data)
      {
    ?>

        <tr>
            <td><?php echo $data["idvol"]; ?></td>
            <td><?php echo $data["lieuDepart"]; ?></td>
            <td><?php echo $data["destination"]; ?></td>
            <td><?php echo $data["dateVole"]; ?></td>
            <td><?php echo $data["prix"]; ?></td>
            <td><?php echo $data["nombreplace"]; ?></td>
            <td><?php echo $data["statut"]; ?></td>
        
               
            <td>  <div class="card-body">
               <a href="annuler.php?idvol=<?php echo $data['idvol']; ?>" class="btn btn-primary btn-md offset-4" name="reserver">annuler vole</a> 
                </div>  </td>
      

           

            
       </tr>

    <?php
       }
    ?>

 
    </tbody>
  </table>



</div>


<?php

  if(isset($_POST["lieuDepart"]) && isset($_POST["destignation"]) && isset($_POST["dateVole"]) && isset($_POST["prix"]) && isset($_POST["nombrePlace"])){
      $lieuDepart=$_POST["lieuDepart"];
      $destignation=$_POST["destignation"];
      $dateVole=$_POST["dateVole"];
      $prix=$_POST["prix"];
      $nombrePlace=$_POST["nombrePlace"];
    //   include('class/classvol.php');
   $vol=new vol();
   $vol->insertVol( $lieuDepart,$destignation,$dateVole, $prix,$nombrePlace);
  }

  ?>
<div class="container register-form" id="formreserv">
            <div class="form">
                <div class="note">
                    <p>ajouter des vols .</p>
                </div>

                <div class="form-content" >

                    <div class="row" >
                        <div class="col-md-6">
                            <form  method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lieuDepart" placeholder="lieuDepart*" value="" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="destignation" placeholder="destignation *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" name="dateVole" placeholder=" dateVole *" value="" required/>
                             </div>
                             <div class="form-group">
                                <input type="text" class="form-control" name="prix" placeholder="prix *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombrePlace" placeholder="nombrePlace *" value="" required/>
                            </div>
                           
                        </div>
                        
            
                    </div>
                    <button type="submit" class="btnSubmit" name="reserver">réservez maintenant</button>
                 
                </div>
            </div>
        </div>
      </form>





          <?php include('footer.php'); ?>