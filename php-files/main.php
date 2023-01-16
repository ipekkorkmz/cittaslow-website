<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
        extract($_POST);
    ?>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <style>
      .carousel-item{
        max-height: 800px;
      }
    </style>

		<title> Cittaslow </title>
	</head>

	<body>
  

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.php">CittaSlow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">List</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link" href="survey.php">Survey</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
        <?php
	      if(!isset($_COOKIE["uname"])){
          echo '<a class="nav-link" href="index.php">Login</a>';
	        }
        else{
          echo '<a class="nav-link" href="logout.php">Logout</a>';
        }
        ?>  
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://cdn.goadventureturkey.com/slowcity/cittaslow-cities-mediterranean-turkiye-desktop-kapak.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>EĞİRDİR</h5>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/media/Eo6xEAhXEAAlpda.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>GERZE</h5>
      </div>
    </div>
    <div class="carousel-item">
    <img src="https://www.gazetepusula.net/wp-content/uploads/2016/06/1-SAKLI-CENNET-3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>UZUNDERE</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">

<br>

    <?php
	      if(!isset($_COOKIE["uname"])){
          echo '<h1 style="text-align: center;"> Hello, guest! </h1>';
	        }
        else{
          echo '<h1 style="text-align: center;"> Hello, '.$_COOKIE["uname"].'!</h1>';
        }
        ?>
	<div class="main">

<br>

<p><b>Tranquility in nature and silence in historical surroundings! Türkiye, the meeting point of different civilizations and unique natural beauty, has 18 Cittaslow towns in seven regions. Towns with historical character, settlements on high altitude plateaus, stone houses on narrow streets near the seacoast - all of them await you to get away from the crowds and to relax in serenity!</b></p>

<h1>What is cittaslow?</h1>
<?php
    $citta_txt="cittaslow.txt";
    $citta=fopen($citta_txt, "r") or die("Unable to open file!");
    while(!feof($citta))
        echo fgets($citta).'<br>';
    fclose($citta);
?>


<br><br><br>
</div>
</div>	
<script src="bootstrap.min.js"></script>
</body>
</html>


	<!--
  	<div class="footer">
		<a href="https://www.facebook.com/cittaslow">Facebook</a>
  		<a href="https://twitter.com/cittaslow_intl">Twitter</a>
		<a href="https://www.youtube.com/c/cittaslowinternational">YouTube</a>
		<a href="https://www.flickr.com/photos/cittaslow">Flickr</a>
		<a href="https://www.instagram.com/cittaslowinternational/">Instagram</a>
	</div>
	-->
