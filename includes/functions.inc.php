<?php
function emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat) {

    $result;

    if (empty($name)|| empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {

        $result = true;
    }
    else {
        $result = false;

    }

    return $result;
}
function invalidUid($username) {

    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        $result = true;
    }
    else {
        $result = false;

    }

    return $result;
}
function invalidEmail($email) {

    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {

        $result = true;
    }
    else {
        $result = false;

    }

    return $result;
}
function pwdMatch($pwd, $pwdRepeat) {

    $result;

    if ($pwd !== $pwdRepeat) {

        $result = true;
    }
    else {
        $result = false;

    }

    return $result;
}


function uidExists($conn, $username, $email) {

    $sql = "SELECT * FROM userss WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){

header("location: ../Registro/registro.php?error=stsFail");
    exit();
    }
   
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){

        return $row;
    }

    else{
        $result = false;
        return $result;
    }
   mysqli_stmt_close($stmt);
}



function crateUser($conn, $name, $email, $username, $pwd) {

    $sql = "INSERT INTO userss (usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){

header("location: ../Registro/registro.php?error=Fail");
    exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
   
    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $name, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Registro/registro.php?error=none");
    exit();
}

function emptyInputlogin($username, $pwd) {

    $result;

    if ( empty($username) || empty($pwd)) {

        $result = true;
    }
    else {
        $result = false;

    }

    return $result;
}

 function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists == false) {
        header("location: ../Registro/acceder.php?error=wronglogin");
    exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd ===false){
        header("location: ../Registro/acceder.php?error=wronglogin");
        exit();
    }

    else if ($checkPwd ===true){
session_start();
   $_SESSION["usersid"] = $uidExists["usersId"];
   $_SESSION["useruid"] = $uidExists["usersUid"];
   header("location:../Index/index.php");
   exit();

    }
 }



