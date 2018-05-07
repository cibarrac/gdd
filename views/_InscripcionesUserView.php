<input id="IdInscripcion" type="number" name="IdInscripcion" hidden value="0">
<input name="IdProfesor" hidden value="<?php echo OpIdPorCorreo($_SESSION['username']) ?> ">


<div class="row">

  <div class="col-md-8">
    <div class="form-group">
      <label for="">Nombre del docente:</label>
      <!-- CONSULTA: Aqui se obtendra el nombre del profesor que tenga relacion con el usuario
        Nota: El echo proboca el padding en el texto, supongo que es culpa de la version de php es viejita.
     -->
      <input class="form-control" name="NombreProfesorInscrito" readonly value="<?php echo OptieneNombre($_SESSION['username'])?>">
    </div>
  </div>

</div>

<div class="row">




  <div class="col-md-6">
    <div class="form-group">
      <label for="">Nombre del curso: </label>
      <input type="text" class="form-control" name="NombreCurso" id="NombreCurso" readonly="readonly">
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="">Numero del curso: </label>
      <input type="text" class="form-control" name="NumeroCurso" id="NumeroCurso" readonly="readonly">
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
      <label for="">Instructor 1:</label>
      <input type="text" class="form-control" name="NombreInstructor1"  id="NombreInstructor1" readonly=”readonly” >
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Instructor 2 (En caso de ser necesario):</label>
      <input type="text" class="form-control" name="NombreInstructor2"  id="NombreInstructor2"readonly=”readonly” >
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
      throw "No se recuperó la información de la respuesta a la petición."

      var res = JSON.parse(response);

      if (res.status == 200) {
        var data = res.data;

        if (data.length == 0)
        return;

        // Las propiedades del objeto 'data' deben ser igual al nombre del campo SQL
        document.querySelector('#NombreCurso').value = data.NombreCurso;
        document.querySelector('#NumeroCurso').value = data.NumeroCurso;
        document.querySelector('#FechaInicio').value = data.FechaInicioCurso;
        document.querySelector('#FechaFin').value = data.FechaFinCurso;
        document.querySelector('#NombreInstructor1').value = data.NombreCompletoInstructor1;
        document.querySelector('#NombreInstructor2').value = data.NombreCompletoInstructor2;
        document.querySelector('#TipoCurso').value = data.TipoCurso;
        //document.querySelector('#horario').value = data.horainicio;
        document.querySelector('#Aula').value = data.AulaPropuesta;
      }
    };
    request.open('GET', 'api.php?oper=getcurso&nomcurso='  + numcurso.value, true);
    request.send();
  }

</script>
