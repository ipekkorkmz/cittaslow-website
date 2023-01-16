<?php
    include 'connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = mysqli_query($connection, "SELECT * FROM Users WHERE uname='$username' AND passwrd='$password';") or die (mysqli_error($connection));
    $array = mysqli_fetch_row($query);
    if($array[0]){
        setcookie("uname", $array[1]);
        header('Location: main.php');
        exit();
    }
    else{
        header('Location: index.php');
        exit();
    }
?>