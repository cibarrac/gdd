

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
          <input type="email" class="form-control" name="CorreoJefe" value="<?=$_SESSION['username']?>" readonly="readonly">
      </div>
  </div>


  <div class="col-md-6">
      <div class="form-group">
        <label for="">Preteneciente al departamento de:</label>
        <select class="form-control" name="IdDepartamentoJefe">
        <?php
          fillOptionsNombresAndId("Departamento",1);
        ?>
        </select>
      </div>
    </div>



</div>
