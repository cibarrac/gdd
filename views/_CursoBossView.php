

  <div class="row">
    <p><center>INSTITUTO TEGNOLOGICO DE ACAPULCO</center></p>
    <p><center>Subdireccion Academica</center></p>
    <p><center>DIAGNOSTICO DE NECESIDADES DE FORMACION Y ACTUALIZACION DOCENTE Y PROFESIONAL</center></p>
  </div>



<div class="row">
    
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Presidente de academia</label>
            <input class="form-control" name="NombreCompletoPresiAcad" readonly value="<?php echo OptienePresidente($_SESSION['username'])?>">
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Jefe del departamento academico</label>
            <input class="form-control" name="NombreCompletoJefeDepto" readonly value="<?php echo OptieneNombreJefe( $_SESSION['username'] )?>">
        </div>
    </div>
    
    <div class="col-md-4">
            <div class="form-group">
                 <label for="">Del departamento de:</label>
                  <input class="form-control" id="IdDepartamentoDe" readonly value="<?php echo OptieneDepartamento( $_SESSION['username'] )?>">
            </div>
      </div>
    
    <input name="IdDepartamentoDe" hidden value="<?php echo getIdDepartamentoJefe( $_SESSION['username'] )?>" >

</div>




<div class="row">
    <div class="col-md-12">
        <label>Para los profesores de: </label>
        <div class="form-group">   
            
            <input class="form-check-input" value="0" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >Para todas las careras</label>
            
            <input class="form-check-input" value="<?php echo getIdCarrera('ISC')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >ISC</label>

            <input class="form-check-input" value="<?php echo getIdCarrera('IBQ')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >IBQ</label>

            <input class="form-check-input" value="<?php echo getIdCarrera('IEM')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >IEM</label>

            <input class="form-check-input" value="<?php echo getIdCarrera('IGE')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >IGE</label>

            <input class="form-check-input" value="<?php echo getIdCarrera('ARQ')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >ARQ</label>

            <input class="form-check-input" value="<?php echo getIdCarrera('LA')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >LA</label>

            <input class="form-check-input" value="<?php echo getIdCarrera('CP')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >CP</label> 
            
            <input class="form-check-input" value="<?php echo getIdCarrera('CB')?>" type="checkbox" onclick="elegirCarrera(this)">
            <label class="form-check-label" >CB</label> 
             
            <input type="text" id="DirigidoA" name="DirigidoA" hidden>
            
            <input type="text" hidden name="NumeroProfesoresCurso" value="0">
           
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
            <option> </option>
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
            <select class="form-control" name="NombreCompletoInstructor">
                <option> </option>
                <?php fillOptionsDouble("instructor",1) ?>
            </select>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
          <label for="">Aula Propuesta:</label>
          <select class="form-control" name="AulaPropuesta">
              <option> </option>
                <?php fillOptionsSingle("aula",1) ?>
          </select>
      </div>
    </div>
    
</div>



<div class="row">
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Turno</label>
            <select class="form-control" name="Turno" id="Turno" required>
                <option value="M"> Matutino</option>
                <option value="V"> Vespertino</option>
            </select>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Fecha limite de inscripcion:</label>
            <input type="date" name="FechaLimite" class="form-control">
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
            <label for="">De inicio:</label>
            <input type="date" name="FechaInicioCurso" class="form-control" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="">De terminacion:</label>
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
            <input type="number" name="capacidadmaxima" class="form-control" placeholder="Capacidad maxima">
        </div>

        <div class="col-md-3">
            <select name="PeriodoCurso" class="form-control">
               <?php Periodo() ?>
            </select>
        </div>

    </div>

</div>

<br>

<div class="container">
    <div class="row">
        
        <div class="col-md-3 col-md-offset-1">        
            <div class="alert alert-success alert-dismissable">
                <a href="javascript:mostrar();" >  <input class="form-check-input" name=""  type="checkbox"  > CLICK PARA SELECCIONAR DIPLOMADO </a>
                <div id="flotante" style="display:none;">
                    <div class="form-check">
                        <input class="form-check-input" name="DiplomadoDFT" value="1" type="radio" id="DiplomadoDFT">
                        <label class="form-check-label" for="radio1">DFT </label> 
                        <input class="form-check-input" name="DiplomadoDFT" value="2" type="radio" id="DiplomadoDFT" >
                        <label class="form-check-label" for="radio1">DFTD</label>
                        <div id="close"><a href="javascript:cerrar();">Cancelar</a></div>
                        <input class=""   hidden="">
                        </div>
                </div>

            </div>
        </div>



        <div class="col-md-3 col-md-offset-1" >
            <div class="alert alert-info alert-dismissable">
                <label> CURSO </label>
                <div class="form-check">
                    <input class="form-check-input" name="CursoDocente" value="1" type="radio" id="CursoDocente">
                    <label class="form-check-label" for="radio2">Docente </label> 
                    <input class="form-check-input" name="CursoDocente" value="2" type="radio" id="CursoDocente" >
                    <label class="form-check-label" for="radio2">Profesional</label>


                        <div class="col-md-12 col-md-offset-1">
                            <input class="form-check-input" name="CursoCertificacion" value="1" type="checkbox" id="CursoCertificacion" >
                            <label class="form-check-label" for="radio2">Certificacion</label>

                            <input class=""   hidden="">
                        </div>
                </div>
            </div>
        </div>
        
    </div>  
</div>



<script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
</script>


<script>

function getNombres() {
    var idDepartamento = document.querySelector("#IdDepartamentoDe");
    var request = new XMLHttpRequest();
    request.onload = function () {
      var response = this.response;

      if (typeof response === 'undefined' || response === "")
             throw "No se recuperó la información de la respuesta a la petición.";

      var res = JSON.parse(response);
 console.log(res);
     
       if (res.status == 200) {
        var data = res.data;

        if (data.length == 0)
        return;
       
       
        // Las propiedades del objeto 'data' deben ser igual al nombre del campo SQL
        document.querySelector('#NombreCompletoJefeDepto').value = data.NombreJefe;
        document.querySelector('#NombreCompletoPresiAcad').value = data.NombrePresidente;
      }
    };
    request.open('GET', 'api.php?oper=getnombres&idDepartamento='  + idDepartamento.value, true);
    request.send();
  }

</script>


<script>
    var elementoPaises = document.getElementById('DirigidoA')
    var paisesElegidos = []

    function elegirCarrera(element){
        if (element.checked) {
            paisesElegidos.push(element.value)
        }else{
            paisesElegidos.splice( paisesElegidos.indexOf( element.value ), 1 )
        }
        elementoPaises.value = paisesElegidos.join('')
    }
</script>