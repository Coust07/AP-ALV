<?php 

  include_once '../Header/header.php'

  ?>



<main>
    <div class="top">

        <h1 class="dia">Contacto</h1>
        <hr>
        <h1>ap.alv.2023@gmail.com</h1>  
        <div class="images-container">
            <img src="../Img/logos/1.png" alt="">


        

        </div>
        
      
    </div>
    

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


<script >
    const hamburger = document.querySelector("nav");
hamburger.addEventListener("click", function () {
hamburger.classList.toggle("open");
});

/* Cuando hago CLICK .button, .nav TOGGLE 'activo' */ 
const button = document.querySelector('.button') 
const nav = document.querySelector ('.nav')

button.addEventListener('click',()=>{
  nav.classList.toggle('activo')
})
</script>
<body>
    
</body>
</html>