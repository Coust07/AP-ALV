<?php 

  include_once '../Header/header.php'

  ?>

  <main class="main">      

<section class="profile">
    

<?php

if (isset($_SESSION["useruid"])){
   echo "<p class='welcome' style='color:white;'> ". $_SESSION["useruid"] ." </p>";
          }

         ?>


<div class="user">

<img class="photo" src="../Img/Goloso.jpg" alt="">




    <style>
		table {
            position: relative;
			border-collapse: collapse;
			width: 50%;
			max-width: 600px;
            right: 55px;
			margin: 0 auto;
			font-family: Arial, sans-serif;
			font-size: 14px;
			text-align: center;
			line-height: 1.5;
			color: #333;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			border-radius: 10px;
			overflow: hidden;
            
		}

        th {
			color: #333;
			font-weight: 600;
          
		}

        td{
            
       position: relative;
       top: -10px;
        }

		
		
	</style>


	<table>
		<tr>
			<th>Picks</th>
			<th>Ganados</th>
			<th>Perdidos</th>
			<th>Efectividad</th>
		</tr>
		<script>
			// Define the data
			var data = [
			  { Picks: 20 , Ganados:15 , Perdidos: 10 }
			];

			// Loop through the data and create rows for each item
			for (var i = 0; i < data.length; i++) {
				var row = document.createElement("tr");

				var picksCell = document.createElement("td");
				picksCell.innerHTML = data[i].Picks;
				row.appendChild(picksCell);

				var winsCell = document.createElement("td");
				winsCell.innerHTML = data[i].Ganados;
				row.appendChild(winsCell);

				var lossesCell = document.createElement("td");
				lossesCell.innerHTML = data[i].Perdidos;
				row.appendChild(lossesCell);

				var effectivenessCell = document.createElement("td");
				var effectiveness = (data[i].Ganados / data[i].Picks * 100).toFixed(2) + "%";
				effectivenessCell.innerHTML = effectiveness;
				row.appendChild(effectivenessCell);

				document.getElementsByTagName("table")[0].appendChild(row);

                
			}
		</script>
	</table>


</div>



</section>

</main>
   










    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../interfaz.js"></script>


</body>
</html>