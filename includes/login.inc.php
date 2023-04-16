<?php

if (isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputlogin($username, $pwd) !== false) {
        header("location: ../Registro/acceder.php?error=emptyinput");
        exit();
      }

      loginUser($conn, $username, $pwd);
}

?>

