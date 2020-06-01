<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>

<style>
 
 .card
 {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

 }
</style>

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
                <a class="nav-link" href="login.php">login</a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="confirmation.php">confirmation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Register</a>
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


<!-- SIGNUP FORM -->

<section>
	<div class="container mt-5">
		<div class="row" id="form-inputs">
			<div class="col-md-8 mx-auto d-block">
				<div class="card mb-3" >
		<div class="row no-gutters" >
			<div class="col-md-4">
			<img src="avion.jpg" height="100%" width="100%"  alt="">
			</div>
			<div class="col-md-8">
			<div class="card-body">
				<img src="https://img.icons8.com/cotton/64/000000/groups--v1.png" class="mx-auto d-block">
				<form>
       
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								<i class="fas fa-user pt-3"></i>
              </div>

							<div class="col-md-11">
								<input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder=" Nom" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								<i class="fas fa-user pt-3"></i>
              </div>

							<div class="col-md-11">
								<input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Prenom" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
							<i class="fas fa-address-card"></i>
			</div>
						<div class="col-md-11">
							<input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Adresse" required>
						</div>
					</div>
				</div>
				<div class="form-group">
						<div class="row">
							<div class="col-md-1">
							<i class="fas fa-phone"></i>
			</div>
						<div class="col-md-11">
							<input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder=" NumTelephone" required>
						</div>
					</div>
				</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								<i class="fas fa-envelope pt-3"></i>
              </div>
    
							<div class="col-md-11">
								<input type="email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Email" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								<i class="fas fa-key pt-3"></i>
							</div>
							<div class="col-md-11">
								<input type="password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Password" required>
							</div>
						</div>
					</div>
				
                    <div class="form-group">
						<div class="row">
              <div class="col-md-1">
              <i class="fas fa-user pt-3"></i>
             </div>
          <div class="col-md-11">
 
             <select class="form-control border-top-0 border-left-0 border-right-0" id="exampleFormControlSelect1" placeholder="Type">
              <option>User</option>
             <option>Admin</option>
           </select>
       </div>
   </div>
</div>
				<div class="text-center">
					<button type="submit" class="btn btn-danger">Sign Up</button>
				</div>
				
				</form>
		</div>
		</div>
	</div>
	</div>
			</div>
		</div>
	</div>

</section>




 
  <!-- Footer -->
  <footer  style="background-color: #000000;margin-top: 20px;">

<div style="background-color: #6351ce;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">connecter vous dans les  médias sociaux</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram white-text"> </i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">gestion reservation vole</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
      <p>soyer le bienvenue dans notre applicaion web pour la gestion des vole</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">page</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
      <p>
        <a href="index.php">home</a>
      </p>
      <p>
        <a href="reservation.php">reservation</a>
      </p>
      <p>
        <a href="confirmation.php">recupuration</a>
      </p>
    </div>
 
   
    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
      <p>
        <i class="fas fa-home mr-3"></i> youcode safi</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> vol@appweb.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
      <p>
        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 bg-dark">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> appvol.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
