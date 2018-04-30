

  <div class="row">
  <p><center>Modulo de asistencia</center></p>
  
</div>

    
    
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nombre del curso:</label>
            <textarea class="form-control" name="NombreCurso" rows="1" cols="3"  required></textarea>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6">
          <div class="form-group">
              <label for="">Numero del curso:</label>
              <input type="text" name="NumeroCurso" class="form-control">
          </div>
    </div>

</div>

<p><center>Listado de profesores</center></p>

<div class="row">
  <div class="col-md-6">
    <div class="from-group">
      <label for="">Seleccionar al profesor:  </label>
      <select class="form-control"  id="NombreProfesorInscrito"   name="NombreProfesorInscrito" >
        <option value=""> </option>
        <?php
        fillOptionsDouble("profesor",1)
        ?>
      </select>
    </div>
  </div>
</div>




<br><br>
