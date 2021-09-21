var $ = function (id) {
    return document.getElementById(id);
}

var calculate_click = function () {
  
  var numero = parseFloat( $("numero").value );
  var tipoPlanta = $("tipoPlanta").value
  var nombre = $("nombre").value
  var fecha = $("fecha").value
  var sol = $("sol").value
  var riego = $("riego").value
  var cocecha = $("cocecha").value
  var tamano = $("tamano").value
  var costo = $("costo").value
  var ubicacion = $("ubicacion").value



  var tableNew = "<br> <table>"+ "<tr>" + "<th>numero</th>"+"<th>tipoPlanta</th>"+"<th>nombre</th>"+"<th>fecha</th>"+"<th>sol</th>"+"<th>riego</th>"+"<th>cocecha</th>"+"<th>tamano</th>"+"<th>costo</th>"+"<th>ubicacion</th>"+ "<tr>" + "<td>"+ numero + "</td>"+ "<td>"+ tipoPlanta + "</td>" + "<td>"+ nombre + "</td>" + "<td>"+ fecha + "</td>" + "<td>"+ sol + "</td>" + "<td>"+ riego + "</td>" + "<td>"+ cocecha + "</td>"  + "<td>"+ tamano + "</td>"  + "<td>"+ costo + "</td>"  + "<td>"+ ubicacion + "</td>";
        
  tableNew += "</table>"+"<hr>";
  document.getElementById("cultivos").innerHTML += tableNew; 
}

var regar_click = function () {
  document.getElementById('ultimo').innerHTML = Date();
}

window.onload = function () {
    $("calculate").onclick = calculate_click;
}

window.onload = function () {
    $("Regar").onclick = regar_click;
}