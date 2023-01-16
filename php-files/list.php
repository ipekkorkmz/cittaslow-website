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

  <style>
    .table{
      width: 60%;
      margin-left:auto; 
      margin-right:auto;
    }
  </style>


    <title> Cittaslow </title>

    <?php
        extract($_POST);
    ?>

  <?php
  function write_tbl() {
    echo '<br><br>
        <table class="table" border="3">
        <thead>
          <caption><b>List of Cittaslow</b></caption>
        </thead>
        <tbody>
        <tr style="background-color: #D6D2C4;">
        <th align="left">Country</th>
        <th align="center">Cittaslow</th>
        </tr>';
  }
  ?>
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
          <a type="button" class="nav-link" style="right" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<br>
<?php
    include 'connect.php';
    $table = mysqli_query($connection, "SELECT country,citta  FROM Cittaslow;");
    $unique_contry = mysqli_query($connection, "SELECT DISTINCT country FROM Cittaslow;");
?>
<form class="text-middle" method="post" action=<?=htmlspecialchars($_SERVER['PHP_SELF'])?>>
    <select class="form-select" aria-label="Default select example" name="select_country">
        <option selected value='sel'>Select country</option>
        <?php
            while($array = mysqli_fetch_row($unique_contry)){
                foreach($array as $a_country){
                echo "<option value=".$a_country." name='country'>".$a_country."</option>";
            }}
        ?>
    </select>
    <input class="btn btn-primary" name="submitted" type="submit" value="Select"></input>
</form>

<br>
<?php
if($submitted){
  if($select_country == sel){
    echo "Please select a country to filter.";
    write_tbl();
        while($array2 = mysqli_fetch_row($table)){
          echo '<tr>';
            foreach($array2 as $value)
                echo '<td>'.$value.'</td>';
            echo '</tr>';
        }
    echo '</tbody></table>';
    mysqli_close($connection);
  }
  
  else{
  $query = mysqli_query($connection, "SELECT country,citta FROM Cittaslow WHERE country LIKE '$select_country%';") or die (mysqli_error($connection));
  write_tbl();
        while($array = mysqli_fetch_row($query)){
            echo '<tr>';
            foreach($array as $value)
                echo '<td>'.$value.'</td>';
            echo '</tr>';
        }
    echo '</tbody></table>';
    mysqli_close($connection);
}}
?>

<br>

<?php
if($submitted == FALSE){
  write_tbl();
        while($array2 = mysqli_fetch_row($table)){
            echo '<tr>';
            foreach($array2 as $value)
                echo '<td>'.$value.'</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
        mysqli_close($connection);
  }
?>


</body>
<script src="bootstrap.min.js"></script>
</html>