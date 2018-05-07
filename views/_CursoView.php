

  <div class="row">
    <p><center>INSTITUTO TEGNOLOGICO DE ACAPULCO</center></p>
    <p><center>Subdireccion Academica</center></p>
    <p><center>DIAGNOSTICO DE NECESIDADES DE FORMACION Y ACTUALIZACION DOCENTE Y PROFESIONAL</center></p>
  </div>



  <div class="row">
      
       <div class="col-md-6">
            <div class="form-group">
                 <label for="">Del departamento de:</label>
                  <select class="form-control" name="DelDepartamentoDe" >
                    <?php fillOptionsDouble("departamento",1) ?>
                  </select>
            </div>
      </div>
      
      <div class="col-md-6">
            <div class="form-group">
                 <label for="">Para los profesores de la carrera de: </label>
                  <select class="form-control" name="ParaLosProfesoresDe" >
                    <?php fillOptionsSingle("carrera",1); ?>
                  </select>
            </div>
    </div>

</div>





<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Jefe del departamento academico</label>
              <select class="form-control" name="NombreCompletoJefeDepto" >
                <?php fillOptionsDouble("jefedepartamento",1)?>
              </select>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="">Presidente de academia</label>
              <select class="form-control" name="NombreCompletoPresiAcad" >
                <?php fillOptionsDouble("presidenteacademia",1)?>
              </select>
        </div>
    </div>

</div>





<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nombre del curso:</label>
            <textarea class="form-control" name="NombreCurso" rows="1" cols="3"  required></textarea>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
              <label for="">Objetivo:</label>
              <textarea class="form-control" name="ObjetivoCurso" rows="1" cols="3" required></textarea>
        </div>
    </div>

</div>



<div class="row">

    <div class="col-md-6">
        <label for="">Tipo de curso</label>
        <select name="TipoCurso" class="form-control">
        <option value=""> </option>
            <option value="Generico">Generico</option>
            <option value="Especialidad">Especialidad</option>
        </select>
    </div>

    <div class="col-md-6">
          <div class="form-group">
              <label for="">Numero del curso:</label>
              <input type="text" name="NumeroCurso" class="form-control">
          </div>
    </div>

</div>


<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Intructor propuesto:</label>
            <select class="form-control" name="NombreCompletoInstructor1">
                <option value="">
                  <?php fillOptionsDouble("instructor",1) ?>
                </option>
            </select>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
          <label for="">Aula Propuesta:</label>
          <select class="form-control" name="AulaPropuesta">
              <option value="">
                  <?php fillOptionsSingle("aula",1) ?>
              </option>
          </select>
      </div>
    </div>
    
</div>



<div class="row">

    <div class="col-md-6 col-md-offset-2">
        <div class="form-group">
            <label for="">Hora propuesta:</label>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="">Fecha propuesta:</label>
        </div>
    </div>

</div>



<div class="row">

    <div class="col-md-3">
        <div class="form-group">
            <label for="">Inico:</label>
            <input type="time" name="HoraInicioCurso" class="form-control" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="">Fin:</label>
            <input type="time" name="HoraFinCurso" class="form-control" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="">Fecha de inicio:</label>
            <input type="date" name="FechaInicioCurso" class="form-control" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="">Fecha de terminacion:</label>
            <input type="date" name="FechaFinCurso" class="form-control">
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <th class="col-md-3">Asigfnatura que se requiere formacion o actualizacion</th>
                <th class="col-md-3">Contenidos tematicos en los que se requiere la formacion o actualizacion</th>
                <th class="col-md-3">Numero de profesores que la requieren</th>
                <th class="col-md-3">Periodo en el que se requiere la formacion o actualizacion (Enero-Junio, Agosto-Diciembre)</th>
            </tr>

        </table>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <div class="col-md-3">
            <input type="text" name="" class="form-control">
        </div>

        <div class="col-md-3">
            <input type="text" name="" class="form-control">
        </div>

        <div class="col-md-3">
            <input type="number" name="NumeroProfesoresCurso" class="form-control">
        </div>

        <div class="col-md-3">
            <select name="PeriodoCurso" class="form-control">
                <option value="Enero-Junio">Enero-Junio</option>
                <option value="Enero-Junio">Agosto-Diciembre</option>
            </select>
        </div>

    </div>

</div>

<br>

<div class="row">
    
    <div class="col-md-4 col-md-offset-2">
        <label> DIPLOMADO  </label>
        <div class="form-check">
            <input class="form-check-input" name="group100" type="radio" id="radio100">
            <label class="form-check-label" for="radio100">DFT </label> 
            <input class="form-check-input" name="group100" type="radio" id="radio101" checked>
            <label class="form-check-label" for="radio101">DFTD</label>
        </div>
    </div>
    
    
    <div class="col-md-4 col-md-offset-1" >
        <label> CURSO </label>
        <div class="form-check">
            <input class="form-check-input" name="group100" type="radio" id="radio100">
            <label class="form-check-label" for="radio100">Docente </label> 
            <input class="form-check-input" name="group100" type="radio" id="radio101" checked>
            <label class="form-check-label" for="radio101">Profesional</label>
        </div>
    </div>
    
    
    
</div>