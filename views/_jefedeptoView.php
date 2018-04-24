

<input type="number" name="IdJefeDepartamento" hidden value="0">

<div class="row">

  <div class="col-md-4">
    <div class="form-group">
      <label for="">Nombre(s): </label>
      <input type="text" class="form-control" name="NombreJefeDepto">
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      <label for="">Apellido paterno: </label>
      <input type="text" class="form-control" name="ApellidoPaternoJefeDepto">
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      <label for="">Apellido materno: </label>
      <input type="text" class="form-control" name="ApellidoMaternoJefeDepto">
    </div>
  </div>

</div>


<div class="row">


   <div class="col-md-6">
      <div class="form-group">
          <label for="">Correo: </label>
          <select class="form-control" name="CorreoJefe">
          <?php
           OptieneCorreoBoss("members",0);
          ?>
          </select>

      </div>
  </div>


  <div class="col-md-6">
      <div class="form-group">
        <label for="">Departamento:</label>
        <select class="form-control" name="IdDepartamentoJefe">
        <?php
          fillOptionsNombresAndId("Departamento",1);
        ?>
        </select>
      </div>
    </div>



</div>
