<?php 

  include_once '../Header/header.php'

  ?>


    <section>
      
    <div class="container">
        <form action="../includes/singup.inc.php" method="post">
            <h1>Registro</h1>
            <label for="nombre">Username</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email"  name="email" required>

            <label for="username">Nombre:</label>
            <input type="text"  name="uid" required>
      
            <label for="password">Password:</label>
            <input type="password"  name="Pwd" required>
      
           
            <label for="passwordconf">Confirmar Password:</label>
            <input type="password"  name="Pwdrepeat" required>
      
            <label>
              <input type="checkbox" id="age-verification" name="age-verification" required>
              Soy Mayor de 18 Años.
            </label>
      
            <button class="button" type="submit" name="submit">Enviar</button> 
            <?php
      if (isset($_GET["error"])){
         if($_GET["error"] =="emptyinput"){
    echo "<pclass='registrooo' style='color:green;'> Llena los Espacios Vacios!</p>";
         }
           else if ($_GET["error"] =="invaliduid"){
    echo "<p class='existe' > Nombre de Usuario ya Existe</p>";
         }
        else if ($_GET["error"] =="invalidemail"){
    echo "<p class='registrooo' style='color:green;'> Escoge un Email Apropiado</p>";
        }
           else if ($_GET["error"] =="passwordsdontmatch"){
    echo "<p class='registrooo' style='color:green;'>La Contraseña No Coincide</p>";
       }
           else if ($_GET["error"] =="stmtfail"){
    echo "<p class='registrooo' style='color:green;'>Algo Salio Mal, Intentalo De Nuevo</p>";
          }
         else if ($_GET["error"] =="usernametaken"){
    echo "<p class='existe'>Escoge Un Nombre Apropiado</p>";
           }
         else if ($_GET["error"] =="none"){
    echo "<p class='registrooo' style='color:green;'>Te has Registrado Correctamente!</p>";
          }
       }
     ?>
          </form> 
    
      </div>

      </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>const hamburger = document.querySelector("nav");
        hamburger.addEventListener("click", function () {
        hamburger.classList.toggle("open");
        });
        
        /* Cuando hago CLICK .button, .nav TOGGLE 'activo' */ 
        const button = document.querySelector('.button') 
        const nav = document.querySelector ('.nav')
        
        button.addEventListener('click',()=>{
          nav.classList.toggle('activo')
        })</script> 
        
    </body>
   
     </html>