<div class="container">

  <input type="number" name="id" hidden value="0">


  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="">Nombre materia:</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>

    </div>


  </div>



  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="">Carrera a la que pertence:</label>
        <select class="form-control" name="carrera" required>
          <?php
          fillOptionsSingle("carreras",3)
          ?>
        </select>
      </div>
     </div>



  </div>



</div>
