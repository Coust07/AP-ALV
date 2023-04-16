<?php

if (isset($_POST["submit"])){
  
  $name = $_POST["name"];
  $username = $_POST["uid"];
  $email = $_POST["email"];
  $pwd = $_POST["Pwd"];
  $pwdRepeat = $_POST["Pwdrepeat"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat) !== false) {
    header("location: ../Registro/registro.php?error=emptyinput");
    exit();
  }

  if (invalidUid($username) !== false) {
    header("location: ../Registro/registro.php?error=invaliduid");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../Registro/registro.php?error=invalidemail");
    exit();
  }
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../Registro/registro.php?error=La_Contraseña_No_Coincide");
    exit();
  }
  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../Registro/registro.php?error=Nombre_De_Usuario_No_Diponible");
    exit();
  }

  crateUser($conn, $name, $email, $username, $pwd);
}

else{
    header("location: ../Registro/registro.php");
    exit();

    

}
?>