<!DOCTYPE html>
<html lang="en">

<?php
	if(!isset($_COOKIE["uname"])){
		header('Location: index.php');
		exit();
	};
?>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap.min.css" rel="stylesheet">
		
		
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
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<h3 align="center";><b>Towns where Living is Good</b></h3>

	<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
	  Association
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
	  <p>The <b>Movement of Cittaslow</b> was born in <b>1999</b> through the Paolo Saturnini’s brilliant intuition, past Mayor of Greve in Chianti, a little town of Tuscany.</p>
    	<p>The new idea of considering the town itself and thinking of a different way of development, based on the improving of life quality , moved him to spread his thoughts all over our country. Fastly his ideals were endorsed by Mayors of towns of Bra (Francesco Guida), Orvieto ( Stefano Cimicchi) and Positano ( Domenico Marrone) as well as they met later the president of slow food Carlo Petrini’s support. The main goal of Cittaslow, was and still is today, to enlarge the philosophy of Slow Food to local communities and to government of towns, applying the concepts of ecogastronomy at practice of everyday life.</p>
        <p>Municipalities which join the association are motivated by curios people of a recovered time, where man is still protagonist of the slow and healthy succession of seasons, respectful of citizens’ health, the authenticity of products and good food, rich of fascinating craft traditions of valuable works of art, squares, theaters, shops, cafés, restaurants, places of the spirit and unspoiled landscapes, characterized by spontaneity of religious rites, respect of traditions through the joy of a slow and quiet living.</p>
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
	  Cittaslow Manifesto
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
	  <b>Towns where Living is Good</b><br>
	  <p>The new Cittaslow international movement wants to bring together, with a programme of the exchange of our towns’ civilisations, industrious yet peaceful as they are, based on the serenity of daily life. The towns, be they large, medium-sized or small, share common features and aim towards the same end.</p>
    	<p>Towns animated by people  “curious about time reclaimed”, rich in squares, theatres, workshops, cafes, restaurants, spiritual places, unspoilt landscapes and fascinating craftsmen, where we still appreciate the slow, benevolent succession of the seasons, with their rhythm of authentic products, respecting fine flavours and health, the spontaneity of their rituals, the fascination of living traditions. This is the joy of a slow, quiet, reflective way of life.</p>
    	<p>The national and international association wanted by the participating towns and the Slow Food movement will be a continuous laboratory for a rebirth of humanism at the beginning of the third millennium.</p>
		</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
	  Philosophy
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
	  <p>Good living means having the opportunity of enjoying solutions and services that allow citizens to live their town in an easy and pleasant way.</p>
	  <?php
    $philosophy="phil.txt";
    $philo=fopen($philosophy, "r") or die("Unable to open file!");
    while(!feof($philo))
        echo fgets($philo).'<br>';
    fclose($philo);
    ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
	  Contacts
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <a href="https://www.cittaslow.org/" target="_blank">Official website</a><br>
      <a href="https://www.facebook.com/cittaslow" target="_blank">Facebook</a><br>
  		<a href="https://twitter.com/cittaslow_intl" target="_blank">Twitter</a><br>
		<a href="https://www.youtube.com/c/cittaslowinternational" target="_blank">YouTube</a><br>
		<a href="https://www.flickr.com/photos/cittaslow" target="_blank">Flickr</a><br>
		<a href="https://www.instagram.com/cittaslowinternational/" target="_blank">Instagram</a>
	  </div>
    </div>
  </div>
</div>

<br>

<!--
<h3>Events</h3>
	<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
	  STORIES OF THE BEEHIVE
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Travacò Siccomario<br>22 MAY 2021</div>
    </div>
    </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
	  THE BEE GARDEN
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Castel San Pietro Terme<br>22/23 MAY 2021</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
	  WAITING FOR THE BEES
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Usseglio<br>22/23 MAY 2021</div>
    </div>
  </div>
</div>
</div>
</div> -->
<!--
  <div class="footer">
		<a href="https://www.facebook.com/cittaslow">Facebook</a>
  		<a href="https://twitter.com/cittaslow_intl">Twitter</a>
		<a href="https://www.youtube.com/c/cittaslowinternational">YouTube</a>
		<a href="https://www.flickr.com/photos/cittaslow">Flickr</a>
		<a href="https://www.instagram.com/cittaslowinternational/">Instagram</a>
	</div>
-->
	</body>
	<script src="bootstrap.min.js"></script>
</html>