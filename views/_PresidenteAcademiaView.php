<input type="number" name="IdPrecidenteAcademia" hidden value="0">





  <div class="row">



    <div class="col-md-4">

        <div class="form-group">

          <label for="">Nombre(s): </label>

          <input type="text" name="NombrePresidenteAcad" class="form-control" >

        </div>

    </div>



    <div class="col-md-4">

        <div class="form-group">

            <label for="">Apellido paterno:</label>

            <input type="text" name="ApellidoPaternoPresidenteAcad" class="form-control">

        </div>

    </div>



    <div class="col-md-4">

        <div class="form-group">

          <label for="">Apellido materno:</label>

          <input type="text" name="ApellidoMaternoPresidenteAcad" class="form-control">

        </div>

    </div>



  </div>





  <div class="row">



    <div class="col-md-6">

      <div class="form-group">

        <label for="">Correo: </label>

        <input type="email" name="CorreoPresidente" class="form-control">

      </div>

    </div>





    <div class="col-md-6">

      <div class="form-group">

        <label for="">Departamento:</label>

          <select class="form-control" name="IdDepartamentoPresidente">

            <?php

              fillOptionsNombresAndId("departamento",1);

            ?>

        </select>

      </div>

    </div>



  </div>

