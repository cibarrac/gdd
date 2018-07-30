<input id="IdInscripcion" type="number" name="IdInscripcion" hidden value="0">



<div class="row">

  <div class="col-md-8">
    <div class="form-group">
      <label for="">Nombre del docente:</label>
      <input class="form-control" name="NombreProfesorInscrito" readonly value="<?php echo OptieneNombre($_SESSION['username'])?>">
    </div>
  </div>
    
    <input type="text" name="IdProfesor" id="IdProfesor" hidden value="<?php echo OpIdPorCorreo($_SESSION['username'])?>">
    <input type="text" name="IdCarrera" id="IdCarrera" hidden value="<?php echo getIdCArreraProfe($_SESSION['username'])?>">
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




<br><br>

  <?php


   ?>

<script>


</script>
