<input id="IdInscripcion" type="number" name="IdInscripcion" hidden value="0">



<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Nombre del curso: </label>
      <select class="form-control" name="NombreCurso" id="NombreCurso" onchange="getCurso()" required>
        <option value="Seleccionar"> Seleccionar</option>
        <?php
        $numero = fillOptionsSingle("curso",1)
        ?>
      </select>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="">Numero del curso: </label>
      <input type="text" class="form-control" name="NumeroCurso" id="NumeroCurso" value="">
    </div>
  </div>


</div>




<div class="row">


  <div class="col-md-3">
    <div class="form-group">
      <label for="">Fecha de inicio:</label>
      <input type="date" class="form-control" name="FechaInicio" id="FechaInicio"readonly=”readonly” >
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="">Fecha de terminacion:</label>
      <input type="date" name="FechaFin" id="FechaFin" class="form-control"readonly=”readonly” >
    </div>
  </div>
    
    

</div>




<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Nombre de instructor:</label>
      <input type="text" class="form-control" name="NombreInstructor"  id="NombreInstructor" readonly=”readonly” >
    </div>
  </div>




</div>




<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Tipo de curso: </label>
      <input type="text" class="form-control" name="TipoCurso" id="TipoCurso"readonly=”readonly” >
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="">En el aula:</label>
      <input type="text" class="form-control" name="Aula" id="Aula"readonly=”readonly” >
    </div>
  </div>
</div>



 <div class="row">
    
    <!--<div class="col-md-4">
        <div class="form-group">
            <label for="" >Seleccione la carrera del profesor</label>
            <select class="form-control" id="CarreraProfe" >
                <option value="">Seleccione</option>
                <option value="1">ISC</option>
                <option value="3">IBQ</option>
                <option value="5">IEM</option>
                <option value="6">IGE</option>
                <option value="7">ARQ</option>
                <option value="8">LA</option>
                <option value="9">CP</option>
                <option value="10">CB</option>
                
            </select>
        </div>
    </div> -->
    
    <div class="col-md-6">
        <div class="from-group">
            <label for="">Inscribir al profesor:  </label>
            <select class="form-control"  name="NombreProfesorInscrito" id="NombreProfesorInscrito" onchange="getId()">
                <option value=""> </option>
                   <?php fillNombreCompletoProfesor() ?>
          </select>
        </div>
    </div>
    
    <input type="text" name="IdProfesor" id="IdProfesor" >
    
</div>


<br><br>

  <?php


   ?>

<script>

function getCurso() {
    var numcurso = document.querySelector("#NombreCurso");
    var request = new XMLHttpRequest();
    request.onload = function () {
      var response = this.response;

      if (typeof response === 'undefined' || response === "")
             throw "No se recuperó la información de la respuesta a la petición.";

      var res = JSON.parse(response);
 console.log(res);
     
       if (res.status == 200) {
        var data = res.data;

        if (data.length == 0)
        return;
       
       
        // Las propiedades del objeto 'data' deben ser igual al nombre del campo SQL
        document.querySelector('#NumeroCurso').value = data.NumeroCurso;
        document.querySelector('#FechaInicio').value = data.FechaInicioCurso;
        document.querySelector('#FechaFin').value = data.FechaFinCurso;
        document.querySelector('#NombreInstructor').value = data.NombreCompletoInstructor;
        //(document.querySelector('#NombreInstructor2').value = data.NombreCompletoInstructor2;
        document.querySelector('#TipoCurso').value = data.TipoCurso;
        //document.querySelector('#horario').value = data.horainicio;
        document.querySelector('#Aula').value = data.AulaPropuesta;
      }
    };
    request.open('GET', 'api.php?oper=getcurso&nomcurso='  + numcurso.value, true);
    request.send();
  }
  
  
  
  function getProfePorCarrera() {
    var IdCarrera = document.querySelector("#CarreraProfe");
    var request = new XMLHttpRequest();
    request.onload = function () {
      var response = this.response;

      if (typeof response === 'undefined' || response === "")
             throw "No se recuperó la información de la respuesta a la petición.";

      var res = JSON.parse(response);
        console.log(res);
     
       if (res.status == 200) {
        var data = res.data;

        if (data.length == 0)
        return;
       
       
        // Las propiedades del objeto 'data' deben ser igual al nombre del campo SQL
        
       
        }
    };
    request.open('GET', 'api.php?oper=getProfeCarrera&IdCarrera='  + IdCarrera.value, true);
    request.send();
  }

  
  
  
  
  function getId() {
    var nombreProfe = document.querySelector("#NombreProfesorInscrito");
    var request = new XMLHttpRequest();
    request.onload = function () {
      var response = this.response;

      if (typeof response === 'undefined' || response === "")
             throw "No se recuperó la información de la respuesta a la petición.";

      var res = JSON.parse(response);
        console.log(res);
     
       if (res.status == 200) {
        var data = res.data;

        if (data.length == 0)
        return;
       
       
        // Las propiedades del objeto 'data' deben ser igual al nombre del campo SQL
        document.querySelector('#IdProfesor').value = data.IdProfesor;
       
      }
    };
    request.open('GET', 'api.php?oper=getIdProfesor&nombreProfe='  + nombreProfe.value, true);
    request.send();
  }

</script>
