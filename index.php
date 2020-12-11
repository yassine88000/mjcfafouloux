
<?php
session_start();
include('fichier/config.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>MJC les Fafouloux</title>

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <!--Font Space mono-->
	<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <!-- CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>MJC les Fafouloux</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <div class="events"><h1>Evenements à venir </h1></div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          <?php
          $sql=mysqli_query($con,"select * from events");
          $cnt=1;
          while($row=mysqli_fetch_array($sql))
          {
          ?>

        <div class="col">
          <div class="card shadow-sm">
          
          
          
	          <div class="card">
	            <img src="image/space.jpeg" class="bd-placeholder-img card-img-top" width="100%" height="225">
	            <ul class="card-text dateEvent">
	                <li><?php echo $row['start_date'] ?></li>
	                <li><?php echo $row['start_date'] ?></li>
	                <li class="places">Il reste vido places</li>
	            </ul>
	            <div class="card-body">
	                <h5 class="card-title"><?php echo $row['name'];?></h5>
	                <p class="card-text"><?php echo $row['description'];?></p>
	                <p class="card-validate"><?php echo $row['price'];?> - JE PARTICIPE</p>
	            </div>
	        </div>
		  </div>
          
          
        </div>

        <?php } ?>


      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">En haut</a>
    </p>
  </div>
</footer>


    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
