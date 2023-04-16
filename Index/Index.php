<?php 

  include_once '../Header/header.php'

  ?>

    <main>
    <?php

if (isset($_SESSION["useruid"])){
   echo "<p class='welcome' style='color:green;'> Bienvenido ". $_SESSION["useruid"] ." </p>";
          }

         ?>
            <section class="Selection">
            
    
                <div class="top">
    
                    <h1 class="dia">Top picks del Dia</h1>
                    <hr>  
                    <div class="images-container">
    
                        
                        
                        <div class="bets">Fer<img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
                        
                        <div class="bets">Sayajin<img src="../Img/apuestas/0e21b584-3dd4-4ff1-be92-1de540fa76b2.jpg" alt=""></div> 
    
                        <div class="bets">Chueda<img src="../Img/apuestas/c1a5b500-97db-4dee-ba4f-52978acc5e79.jpg" alt=""></div>

                        <div class="bets">GolosoPicks<img src="../Img/apuestas/ti.jpg" alt=""></div>
                       
            
                       
    
                    </div>
                    

    
                    <div class="popup-image" >
                        <span>&times;</span>
                        <img src="/Img/apuestas/ti.jpg" alt="">
                    </div>
                    
                </div>
                
            </div>
           
            </section>

<div class="ganador">
  <h1>Ganador Del Mes Marzo</h1>
  <div class="imagegana">
    <img src="../Img/Goloso.jpg" alt="">
    <h1>Golosopicks</h1>
  </div>

</div>

<div class="ad2">
<h1>ADs2</h1>
<div class="">

</div>
</div>

<div class="ad">
<h1>ADs</h1>
<div class="">
  </div>
</div>

<a href="https://www.sofascore.com/" target="_blank"><div class="ad3">
  
  <div class="">
    </div>
  </div></a>

  
  <iframe class="sofa" src="https://www.sofascore.com" frameborder="0"></iframe>


<div class="twitter"> 

  <div class="twitterr">
    <a class="twitter-timeline" href="https://twitter.com/Coust07?ref_src=twsrc%5Etfw">Tweets by Coust07</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>


</div>

    
    </main>

    <aside>  
    
       
    
        <div class="tablas" >
            <h1>Posiciones Del Mes Marzo</h1>
            
            <hr>
    
    
            <div class="datatable-container">
    
                <table id="myTable"  >
    
    
                 
              </table>
                 
              <table id="myTable2" >
    
    
                 
              </table>
              <table id="myTable3"  >
    
    
                 
              </table>
                
            </div>
    
        </div>

    
       </aside>

       <footer>

       </footer>

   
        

      
  
    
    
    
      
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>


$('.datatable-container').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 10000,
});

</script>
<script src="../tablaa.js"></script> 
<script src="../tabla2.js"></script>
<script src="../tabla3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-53af4c9e-bd38-4774-b130-22b98e80e9c3"></div>
</body >
</html>