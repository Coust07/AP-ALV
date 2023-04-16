<?php 

  include_once '../Header/header.php'

  ?>


<div class="titulo">
    <h1>Picks del Dia</h1>
</div>
<hr class="hr">
<main class="top">
      <div class="images-container">
    <div class="bets">GolosoPicks <img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
    <div class="bets">chueda <img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
    <div class="bets">Crack <img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
    <div class="bets">fer <img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
    <div class="bets">wingbet <img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
    <div class="bets">Gominola <img src="../Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt=""></div>
    <div class="bets">Ninja <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets">Sayajin <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    <div class="bets"> <img src="../Img/logos/107541836.png" alt=""></div>
    
    <div class="popup-image" >
        <span>&times;</span>
        <img src="/Img/apuestas/021ac0a0-fdcf-4bc5-ac9d-4029933404fe.jpg" alt="">
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
<div class="enrrachado">
<div class="personas">
<h1>Crack<img class="enrracha" src="../Img/crack.jpg" alt="" ></h1>
<h1>Goloso<img class="enrracha" src="../Img/Goloso.jpg" alt=""></h1>
<h1>Chueda<img class="enrracha" src="../Img/chueda.jpg" alt=""></h1>

</div>
</div>

   </aside>

    
<footer>
    <div class="adesds">
    <div class="ads">
        <h1>ADS</h1>
    </div>
    <div class="ads2">
        <h1>ADS</h1>
    </div>
</div>
</footer>


<script>

    document.querySelectorAll('.images-container img').forEach(image =>{
        image.onclick = () =>{
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = image.getAttribute('src');
        }
    });

    document.querySelector('.popup-image span').onclick = () =>{
        document.querySelector('.popup-image').style.display = 'none';
    }

</script>



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
<script>
    $('.personas').slick({
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


</body>
</html>
   