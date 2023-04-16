<?php 

  include_once '../Header/header.php'

  ?>

<main>

    <section class="Selection">

    <div class="top">
    
        <h1 class="dia"></h1>
        <hr>  
        <div class="images-container">

            
            
            <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 1.png" alt=""></div>
            
            <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 2.png" alt=""></div> 

            <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 3.png" alt=""></div>

            <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 4.png" alt=""></div>

            <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 5.png" alt=""></div>

            
 </div>

 <div class="for">

            
            
    <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 1.png" alt=""></div>
    
    <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 2.png" alt=""></div> 

    <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 3.png" alt=""></div>

    <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 4.png" alt=""></div>

    <div class="bets"><img class="imge" src="../Tienda/Ropa/Capa 5.png" alt=""></div>

    
</div>

<div class="tiendas">

      <div class="merca">
        

 <a href="https://www.mercadolibre.com.mx/" target="_blank"><img src="../Tienda/tiendas/1366_2000.jpg" alt=""> </a>

       
      </div>

      <div class="amazon">

      <a href="https://www.amazon.com/" target="_blank"><img src="../Tienda/tiendas/amazon_logo._CB633266767_.png" alt=""></a>
    </div>
</div>
    </section>
</main>
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

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>

$('.images-container').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  autoplay: true,
  autoplaySpeed: 2000,
  asNavFor: '.for'
});
$('.for').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.images-container',
  dots: true,
  centerMode: true,
  arrows: false,
  focusOnSelect: true
});





    /* top picks del dia*/
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