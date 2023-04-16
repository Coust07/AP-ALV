
const navLinks = document.querySelectorAll('.nav a');

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    const nav = document.querySelector('.nav');
    nav.classList.remove('activo');
  });
});

const button = document.querySelector('.button');
const nav = document.querySelector('.nav');

button.addEventListener('click', () => {
  nav.classList.toggle('activo');
});



var data = [
  { Posiciones: 4, Nombre: "Saiyajin", Ganados: 41, Perdidos: 46 },
  { Posiciones: 1, Nombre: "Fer LB", Ganados: 59, Perdidos: 31 },
  { Posiciones: 1, Nombre: "Gominola", Ganados: 57, Perdidos: 33 },
  { Posiciones: 5, Nombre: "Golosopicks", Ganados: 49, Perdidos: 41 },
  { Posiciones: 5, Nombre: "Chueda", Ganados: 47, Perdidos: 41 },
  { Posiciones: 3, Nombre: "Wingbet", Ganados: 52, Perdidos:38 },
  { Posiciones: 5, Nombre: "Allincrack", Ganados: 59 , Perdidos: 31 }
 
];





// Get a reference to the table element
var table = document.getElementById("myTable");

// Add a table header 

var header = table.createTHead();
var row = header.insertRow();
var cell1 = row.insertCell(0);
cell1.innerHTML = "Positions";
var cell2 = row.insertCell(1);
cell2.innerHTML = "Name";
var cell3 = row.insertCell(2);
cell3.innerHTML = "Wins";
var cell4 = row.insertCell(3);
cell4.innerHTML = "Lost";
var cell5 = row.insertCell(4);
cell5.innerHTML = "Effectiveness";


// Sort the data array by the first place
data.sort(function(a, b) {
  var aEfficiency = (a.Ganados/(a.Ganados+a.Perdidos))*100;
  var bEfficiency = (b.Ganados/(b.Ganados+b.Perdidos))*100;
  return bEfficiency - aEfficiency;
});


// Get a reference to the table element
var table = document.getElementById("myTable");

// Clear the existing table rows
while (table.rows.length > 1) {
  table.deleteRow(1);
}

// Loop through the data and add a row for each object
for (var i = 0; i < data.length; i++) {
  var row = table.insertRow();
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  cell1.innerHTML = i+1;
  if (i === 0) {
    cell1.innerHTML = '<img src="../Img/Medallas/Oro 1.png" alt="Oro" loading="eager"> ' + (i+1);
  } else if(i === 1){
    cell1.innerHTML = '<img src="../Img/Medallas/Plata.png" alt="silver_medal" loading="eager">' + (i+1);
  } else if(i === 2){
    cell1.innerHTML = '<img src="../Img/Medallas/Bronce.png" alt="bronze_medal" loading="eager">' + (i+1);
  }
  cell2.innerHTML = data[i].Nombre;
  cell3.innerHTML = data[i].Ganados;
  cell3.classList.add("green");
  cell4.innerHTML = data[i].Perdidos;
  cell4.classList.add("red");
  cell5.innerHTML = (data[i].Ganados/(data[i].Ganados+data[i].Perdidos) *100).toFixed(2)+'%';
  cell5.classList.add("par");


  
}



var data = [
  { Nombre: "Saiyajin", Campeonatos: 2, MejorRecord: "21-10", Efectividad_del_Mejor_Mes: "67.74%" },
  { Nombre: "Fer LB", Campeonatos: 1, MejorRecord: "22-9", Efectividad_del_Mejor_Mes: "70.97%" },
  { Nombre: "Gominola", Campeonatos: 1, MejorRecord: "22-8", Efectividad_del_Mejor_Mes: "73.33%" },
  { Nombre: "Golosopicks", Campeonatos: 10, MejorRecord: "22-9", Efectividad_del_Mejor_Mes: "70.97%" },
  { Nombre: "Chueda", Campeonatos: 11, MejorRecord: "25-5", Efectividad_del_Mejor_Mes: "83.33%" },
  { Nombre: "Wingbet", Campeonatos: 1, MejorRecord: "20-9", Efectividad_del_Mejor_Mes: "68.97%" },
  { Nombre: "Allincrack", Campeonatos: 7, MejorRecord: "22-9", Efectividad_del_Mejor_Mes: "70.97" },
  

];

  // Sort data by number of championships
  data.sort(function(a, b) {
    return b.Campeonatos - a.Campeonatos;
  });
  
  // Create table
  var table = document.createElement("table");
  
  // Create table headers
  var headers = ["Nombre", "Campeonatos", "MejorRecord", "Efectividad_del_Mejor_Mes"];
  var headerRow = document.createElement("tr");
  headers.forEach(function(header) {
    var th = document.createElement("th");
    th.innerHTML = header;
    headerRow.appendChild(th); 
  });
  table.appendChild(headerRow);
  
 
  
  // Append table to body
  document.body.appendChild(table);

  // Add data to table


var parti = document.querySelector('.parti');
parti.appendChild(table);


// Add data to table
data.forEach(function(rowData) {
  var row = document.createElement("tr");
  headers.forEach(function(header) {
    var td = document.createElement("td");
    if (header === "Campeonatos") {
      var numStars = rowData[header];
      var starsText = '';
      for (var i = 0; i < numStars; i++) {
        starsText += '&#9733;'; // Adds a star symbol to the string
      }
      td.innerHTML = starsText;
    } else {
      td.innerHTML = rowData[header];
    }
    row.appendChild(td);
  });
  table.appendChild(row);
});

var usernames = [];

// Get the username from the form data
var username = document.getElementById("username").value;

// Add the username to the array
usernames.push(username);

// Update the data for the table
data = [  { Nombre: "Saiyajin", Campeonatos: 2, MejorRecord: "21-10", Efectividad_del_Mejor_Mes: "67.74%" },  { Nombre: "Fer LB", Campeonatos: 1, MejorRecord: "22-9", Efectividad_del_Mejor_Mes: "70.97%" },  { Nombre: "Gominola", Campeonatos: 1, MejorRecord: "22-8", Efectividad_del_Mejor_Mes: "73.33%" },  { Nombre: "Golosopicks", Campeonatos: 10, MejorRecord: "22-9", Efectividad_del_Mejor_Mes: "70.97%" },  { Nombre: "Chueda", Campeonatos: 11, MejorRecord: "25-5", Efectividad_del_Mejor_Mes: "83.33%" },  { Nombre: "Wingbet", Campeonatos: 1, MejorRecord: "20-9", Efectividad_del_Mejor_Mes: "68.97%" },  { Nombre: "Allincrack", Campeonatos: 7, MejorRecord: "22-9", Efectividad_del_Mejor_Mes: "70.97" },  { Nombre: username, Campeonatos: 0, MejorRecord: "-", Efectividad_del_Mejor_Mes: "-" }];

// Sort data by number of championships
data.sort(function(a, b) {
  return b.Campeonatos - a.Campeonatos;
});

// Clear the old table
table.innerHTML = "";

// Recreate the table headers
var headerRow = document.createElement("tr");
headers.forEach(function(header) {
  var th = document.createElement("th");
  th.innerHTML = header;
  headerRow.appendChild(th);
});
table.appendChild(headerRow);

// Add data to table
data.forEach(function(rowData) {
  var row = document.createElement("tr");
  headers.forEach(function(header) {
    var td = document.createElement("td");
    if (header === "Campeonatos") {
      var numStars = rowData[header];
      var starsText = '';
      for (var i = 0; i < numStars; i++) {
        starsText += '&#9733;'; // Adds a star symbol to the string
      }
      td.innerHTML = starsText;
    } else {
      td.innerHTML = rowData[header];
    }
    row.appendChild(td);
  });
  table.appendChild(row);
});
