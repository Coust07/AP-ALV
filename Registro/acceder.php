<?php 

  include_once '../Header/header.php'

  ?>


    <main>
        <section>
            <div class="login-container">
                <h1>Acceder</h1>
                <form method="post" action="../includes/login.inc.php">
                    <label for="username">Username</label>
                    <input type="text"  name="uid" required>
                    <label for="password">Password</label>
                    <input type="password"  name="pwd">
                    <button class="button" type="submit" name="submit">Enviar</button> 
                </form>
            </div>
            <?php
      if (isset($_GET["error"])){
         if($_GET["error"] =="emptyinput"){
    echo "<p> Llena los Espacios Vacios!</p>";
         }
           else if ($_GET["error"] =="Malacceso"){
    echo "<p> Nmobre de Usuario Incorrecto </p>";
         }
         else if ($_GET["error"] =="none"){
    echo "<p>Te has Registrado Correctamente!</p>";
          }
       }
     ?>

        </section>



    </main>

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