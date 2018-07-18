/**
Este metodo obtiene el html que esta en el archivo file(ruta del archivo)
y lo incrusta en la etiqueta div en la pagina index.php con el atributo id=content
**/
/**
 * 
 */
function getView(file) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "views/"+file, true);
 
  xhttp.send();  
}

/** establece pagina de inicio navbar.php  $( "#start" ).click(function() {
    getView('PayView.php');
});**/

/**
 * 
 */
$(document).on("click",".dropdown-item", function () {
   var page = $(this).attr('id');
     getView(page+"View.php");
});

/**
 * 
 */
$(document).on("click",".nav-link", function () {
   var page = $(this).attr('id');
     getView(page+"View.php");
});
/**
 * 
 * @param {*} state 
 */
function setAction(state){
      document.getElementById('action').value = state; 
      alert(document.getElementById('action').value); 
}
/**
 * 
 * @param {*}  
 */
function isValid(curso) {
  alert(getElementById(curso).value);
}



function report(){
  window.location = "report.php?curso="+document.getElementById('curso').value; 
   
}
function reportBy(id){
  alert();
 get_("views/report/AsistenciaEntradaReport.php?curso="+id);  
}

function firmar(s,id){
 respuesta =  confirm("Esta seguro que desea firmar el curso para que sea publico para los profesores");
 if(respuesta){
  get_("firmar.php?curso="+id); 
 }  
   
}

function get_(file) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", file, true);
 
  xhttp.send();  
}


/** ...............................................................
 * Realiza peticion para rellenar select
 */
$(document).on("click",".lista", function () {
  var origen = $(this).attr('id');
alert("Seleccionando valor");
 try {
  //request(document.getElementById(origen).value,origen);
   alert(document.getElementById(origen).value);
 } catch (error) {
   alert(error);___ 
 }
  
});
function request(id,origen) {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(origen+"_").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "options.php?id="+id+"&origen="+origen, true);
 
  xhttp.send();  
}
/** Fech
 
   use in navbar.php 
$( "#start" ).click(function() {
    getView('model.php');
});

 .............................................................
 */

function process(file) {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "model/"+file, true);
  xhttp.send();
}