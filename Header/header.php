<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="acerca.css">
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="participantes.css">
    <link rel="stylesheet" href="picks.css">
    <link rel="stylesheet" href="../Registro/acceder.css">
    <link rel="stylesheet" href="../Registro/resgistro.css">
    <link rel="stylesheet" href="resultados.css">
    <link rel="stylesheet" href="tienda.css">
    <link rel="stylesheet" href="torneos.css">
    <link rel="stylesheet" href="../interfaz/interfaz.css">
    <link rel="icon" href="../Img/logos/Untitled.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <title>AP-ALV</title>
</head>
<body>

    <header class="header">
        <h1 class="h1">
        <img class="Logo" src="../Img/logos/1.png" alt="">
    </h1>

    <button class="button">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        
    </button>

    
    <nav class="nav activo" >
            
      <ul class="ul" >
      <li class="in"><a href="../Index/Index.php">Inicio</a></li>

      <?php

      if (isset($_SESSION["useruid"])){
         echo "<li class='in'><a href='../interfaz/interfaz.php'>Cuenta</a></li>";
         echo "<li class='in'><a href='../includes/logout.inc.php'>Salir</a></li>";
      }

      else {
    echo "<li class='in'><a href='../Registro/acceder.php'>Acceder</a></li> ";
      echo "<li class='in'><a href='../Registro/registro.php'>Registrarse</a></li>";
      }
    
      ?>
          
          <li class="in" ><a href="../Contacto/contacto.php">Contacto</a></li>
          <li class="in"><a href="../Acerca/acerca.php">Acerca De</a></li>
          <li class="in" ><a href="../Torneos/torneos.php">Torneos</a></li>
          <li class="in"><a href="../Picks/picks.php">Picks</a></li>
          <li class="in"><a href="../Participantes/participantes.php">Participantes</a></li>     
          <li class="in"><a href="../Tienda/tienda.php">Tienda</a></li> 
               
      </ul>
   
  </nav>
    </header>