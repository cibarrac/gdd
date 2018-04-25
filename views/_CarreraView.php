<input type="number" name="idCarrera" hidden value="0">

  <div class="row">

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Preteneciente al departamento de:</label>
        <select class="form-control" name="IdDepartamentoCarrera">
        <?php
          fillOptionsNombresAndId("departamento",1);
        ?>
        </select>
      </div>
    </div>

      
    <div class="col-md-4">
      <div class="form-group">
        <label for="">Nombre de la carrera:</label>
        <input type="text" class="form-control" name="NombreCarrera">
      </div>
    </div>




    <div class="col-md-4">
      <div class="form-group">
        <label for="">Abreviacion:</label>
        <input type="text" class="form-control" name="Abreviacion" required>
      </div>
    </div>

</div>
