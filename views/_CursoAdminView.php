

  <div class="row">
    <p><center>INSTITUTO TEGNOLOGICO DE ACAPULCO</center></p>
    <p><center>Subdireccion Academica</center></p>
    <p><center>DIAGNOSTICO DE NECESIDADES DE FORMACION Y ACTUALIZACION DOCENTE Y PROFESIONAL</center></p>
  </div>


  <div class="row">

       <div class="col-md-6">
           <div class="form-group">
               <label for="">Para los(as) profesores(as) de la(s) carrera(s) de:</label>
                <select class="form-control" name="ParaLosProfesoresDe">
                   <?php fillOptionsSingle("carrera",1); ?>
                   <option value="Todas las ingenierias">Todas las ingenierias</option>
               </select>
           </div>
       </div>

       <div class="col-md-6">
            <div class="form-group">
                 <label for="">Del departamento de:</label>
                  <select class="form-control" name="DelDepartamentoDe" >
                    <?php fillOptionsSingle("departamento",1); ?>
                  </select>
            </div>
      </div>

</div>





<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Jefe del departamento academico</label>
              <select class="form-control" name="NombreCompletoJefeDepto" >
                <?php fillOptionsDouble("jefedepartamento",1);?>
              </select>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="">Presidente de academia</label>
              <select class="form-control" name="NombreCompletoPresiAcad" >
                <?php fillOptionsDouble("presidenteacademia",1);?>
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



<label for="">Instructores propuestos:</label>
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Intructor propuesto 1:</label>
            <select class="form-control" name="NombreCompletoInstructor1">
                <option value="">
                  <?php fillOptionsDouble("instructor",1) ?>
                </option>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Intructor propuesto 2:</label>
            <select class="form-control" name="NombreCompletoInstructor2">
                <option value="">
                    <?php fillOptionsDouble("instructor",1) ?>
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
<br><br>
<div class="row">
  <div class="col-md-12">
  <div class="col-md-4">
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
</div>
