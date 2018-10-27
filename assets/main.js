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

function validar()
{

    var NombreProfesor, ApellidoPaternoProfesor,ApellidoMaternoProfesor, NumeroTelefonoProfesor, NumeroTarjetaProfesor, CarreraCursadaProfesor,PuestoProfesor, expresion;

    NombreProfesor = document.getElementById('NombreProfesor').value;
    ApellidoPaternoProfesor = document.getElementById('ApellidoPaternoProfesor').value;
    ApellidoMaternoProfesor = document.getElementById('ApellidoMaternoProfesor').value;
    NumeroTelefonoProfesor = document.getElementById('NumeroTelefonoProfesor').value;
    NumeroTarjetaProfesor = document.getElementById('NumeroTarjetaProfesor').value;
    CarreraCursadaProfesor = document.getElementById('CarreraCursadaProfesor').value;
    PuestoProfesor = document.getElementById('PuestoProfesor').value;
    expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/; //expresion regular para validar la entrada de datos.

    if (NombreProfesor === "" || ApellidoPaternoProfesor === "" || ApellidoMaternoProfesor === "" || NumeroTelefonoProfesor === "" || NumeroTarjetaProfesor === "" || CarreraCursadaProfesor === "" || PuestoProfesor === "")
    {
         alert("Todos  los campos son obligatorios");
        return false;
    }

    else if (!expresion.test(NombreProfesor))
    {
        alert("Ingresar solo letras en el nombre");
        return false;
    }

    else if (!expresion.test(ApellidoPaternoProfesor))
    {
        alert("Ingresar solo letras en el apellido paterno");
        return false;
    }

     else if (!expresion.test(ApellidoMaternoProfesor))
    {
        alert("Ingresar solo letras en el apellido materno");
        return false;
    }
    else if(isNaN(NumeroTelefonoProfesor))
    {
        alert("Numero de telefono invalido ");
        return false;
    }

    else if(isNaN(NumeroTarjetaProfesor))
    {
        alert("Numero de tarjeta invalido ");
        return false;
    }



}

function report(){
  window.location = "report.php?curso="+document.getElementById('curso').value;

}

function reportBy(id){
 get_("../views/report/AsistenciaEntradaReport.php?curso="+id);
}

function asisBy(id){
 get_("../views/report/ConcentradoAsistencia.php?curso="+id);
}

function firmar(s,id){
 respuesta =  confirm("Esta seguro que desea firmar el curso para que sea publico para los profesores");
 if(respuesta){
  get_("firmar.php?curso="+id );
 }

}


function cancelar(s,id){
 respuesta =  confirm("¿Esta seguro que desea cancelar?, esto quiere decir que el curso no se llevará a cabo y dejará de ser público");
 if(respuesta){
  get_("../bs/curso/CursoCancelar.php?curso="+id );
 }

}

function revision(s,id){
 respuesta =  confirm("Esta seguro que desea dejar en revision el curso, el curso volvera su estado inicial y podra ser autorizado o cancelado");
 if(respuesta){
  get_("../bs/curso/CursoEnRevision.php?curso="+id );
 }
}

function salircurso( idcurso){
  respuesta = confirm("¿Esta seguro que desea salir del curso?");
  if(respuesta){
    get_("../bs/curso/SalirCurso.php?idcurso="+idcurso);
  }
}

function verificarCuenta(estado,correo)
{
  resp= confirm("¿Verificar que el profesor pertenece al departamento ?");
  if(resp)
  {
    get_("../bs/curso/verificaProfesor.php?correo="+correo+'&estado='+estado);
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
