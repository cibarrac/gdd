<input type="number" name="IdProfesor" hidden value="0">

  <!-- Formularaio para capturara los datos del profesor -->

<!--datos personales-->
<h3 class="card-header" style="margin-top: 2%">Datos personales</h3>

  <div class="row">

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Nombre(s)</label>
        <input type="text" class="form-control" name="NombreProfesor" >
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Apellido paterno</label>
        <input type="text" class="form-control" name="ApellidoPaternoProfesor" >
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Apellido materno</label>
        <input type="text" class="form-control" name="ApellidoMaternoProfesor" >
      </div>
    </div>

  </div>


  <div class="row">

    <div class="col-md-3">
      <div class="form-group">
        <label for="">Registro federal (rfc)</label>
        <input type="text" class="form-control" name="RFCProfesor" >
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="">Numero de telefono:</label>
        <input type="text" class="form-control" name="NumeroTelefonoProfesor">
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="">Correo</label>
        <input type="email" class="form-control" readonly="readonly" name="CorreoProfesor" value="<?=$_SESSION['username']?>">
      </div>
    </div>
      
      <div class="col-md-3">
          <div class="form-group">
              <label for="">Numero de tarjeta</label>
              <input type="number" class="form-control" name="NumeroTarjetaProfesor">
          </div>   
      </div>

  </div>



<!--datos academicos-->

<h3 class="card-header">Datos academicos</h3>

<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Carrera cursada</label>
      <input type="text" name="CarreraCursadaProfesor" class="form-control">
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Grado de estudios</label>
      <select class="form-control" name="GradoEstudiosProfesor" required>
        <option value="Licenciado(a)">Licenciado(a)</option>
        <option value="Maestro(a)">Maestro(a)</option>
        <option value="Doctor(a)">Doctor(a)</option>
      </select>
    </div>
  </div>


</div>


<!--datos laborales-->
<h3 class="card-header">Datos Laborales</h3>
<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Unidad responsable(Departamento)</label>
      <select class="form-control" name="IdDepartamentoProfesor" required>
      <?php
      fillOptionsNombresAndId("departamento",1);
      ?>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Área(Carrera)</label>
      <select class="form-control" name="IdCarrera" required>
      <?php
      fillOptionsNombresAndId("carrera",1)
      ?>
      </select>
    </div>
  </div>

</div>



<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Puesto actual</label>
      <input type="text" class="form-control" name="PuestoProfesor" required>
    </div>
  </div>


  <div class="col-md-6">
    <div class="form-group">
      <label for="">Nombre del jefe inmediato</label>
      <select class="form-control" name="IdJefeInmediatoProfesor" required>
      <?php
      fillOptionsNombresAndId("jefedepartamento",1)
      ?>
      </select>
    </div>
  </div>

</div>
