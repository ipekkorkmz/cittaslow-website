<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.min.css" rel="stylesheet">
<style>
  form{
        border:2px white;
        padding: 2em;
        position: relative;
		}
		table,td,th{
            color:#AFEEEE;
		}
    .box{
      width: %100;
    }
</style>
<?php
	if(!isset($_COOKIE["uname"])){
		header('Location: index.php');
		exit();
	};
?>
 
<?php
    extract($_POST);
    if($submitted){
        include 'connect.php';
        /*
        mysqli_query($connection, "CREATE TABLE IF NOT EXISTS Anket
                                    (id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    q1 tinyint(4),
                                    q1t varchar(100),
                                    q2 tinyint(4)
                                    );");
        */
        mysqli_query($connection, "INSERT INTO Anket(q1, q1t, q2) VALUES($a, '$box1', $b);");
    };
?>
<script type="text/javascript">
function CheckAnswers(val){
 var element=document.getElementById('textbox');
 if(val==0)
   element.style.display='block';
 else  
   element.style.display='none';
}
function f(n, color){
    document.getElementById("l"+n).style.color = color;
}
</script>
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

    <br>
    <form method="post" action=<?php htmlspecialchars($_SERVER['PHP_SELF'])?> >
    <ol>
        <li>Did you find this website useful?</li>
            <input type="radio" onchange='CheckAnswers(this.value);' name="a" value=1 required>Yes&nbsp;&nbsp;&nbsp;
            <input type="radio" onchange='CheckAnswers(this.value);' name="a" value=0>No
            <input type="text" name="box1" id="textbox" class="box" placeholder="Why?" style='display:none;'/>
        <li>Please rate this website.</li>
        <input type="radio" name="b" id="b1" value=5 onchange="f(21, 'green'); f(25, 'black');">
        <label id="l21" for="b1">5&nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="b" id="b2" value=4 onchange="f(21, 'black'); f(25, 'black');">
        <label id="l22" for="b2">4&nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="b" id="b3" value=3 checked onchange="f(21, 'black'); f(25, 'black');">
        <label id="l23" for="b3">3&nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="b" id="b4" value=2 onchange="f(21, 'black'); f(25, 'black');">
        <label id="l24" for="b4">2&nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="b" id="b5" value=1 onchange="f(25, 'red'); f(21, 'black');">
        <label id="l25" for="b5">1&nbsp;&nbsp;&nbsp;</label>
    </ol>
    <button class="btn btn-primary" type="submit" name="submitted" value="Submit">Submit</button>
    </form>

    <br><br>
<?php
if($submitted){
echo '<div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Thank you '.$_COOKIE["uname"].'!</h4>
      <p>Your thoughts are valuable to us.</p>
      </div>';}
?>

</div>
</body>
<script src="bootstrap.min.js"></script>
</html>