<?php
    setcookie("uname", $_COOKIE['uname'], time()-1);
    header('Location: login.php');
    exit();
?>