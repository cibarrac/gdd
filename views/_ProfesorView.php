
<input type="number" name="IdProfesor" id="IdProfesor" hidden >

  <!-- Formularaio para capturara los datos del profesor -->

<!--datos personales-->
<h3 class="card-header" style="margin-top: 2%">Datos personales</h3>

  <div class="row">

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Nombre(s)</label>
        <input type="text" class="form-control" name="NombreProfesor"  id="NombreProfesor" >
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Apellido paterno</label>
        <input type="text" class="form-control" name="ApellidoPaternoProfesor" id="ApellidoPaternoProfesor" >
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="">Apellido materno</label>
        <input type="text" class="form-control" name="ApellidoMaternoProfesor" id="ApellidoMaternoProfesor" >
      </div>
    </div>

  </div>


  <div class="row">

    <div class="col-md-3">
      <div class="form-group">
        <label for="">Registro federal (rfc)</label>
        <input type="text" class="form-control" name="RFCProfesor" id="RFCProfesor">
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="">Numero de telefono:</label>
        <input type="text" class="form-control" name="NumeroTelefonoProfesor" id="NumeroTelefonoProfesor">
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
              <input type="text" class="form-control" name="NumeroTarjetaProfesor" id="NumeroTarjetaProfesor">
          </div>   
      </div>

  </div>



<!--datos academicos-->

<h3 class="card-header">Datos academicos</h3>

<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Carrera cursada</label>
      <input type="text" name="CarreraCursadaProfesor"  id="CarreraCursadaProfesor" class="form-control">
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Grado de estudios</label>
      <select class="form-control" name="GradoEstudiosProfesor" id="GradoEstudiosProfesor" >
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
      <select class="form-control" name="IdDepartamentoProfesor" id="IdDepartamentoProfesor"  onchange="getDatosLaborales()">
      <?php
      fillOptionsNombresAndId("departamento",1);
      ?>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Área(Carrera)</label>
      <input class="form-control" name="NombreCarreraProfesor" id="NombreCarreraProfesor"  readonly>
    </div>
  </div>
    
    <input name="IdCarrera" id="IdCarreraAPI" placeholder="idcarrera" >

</div>



<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="">Puesto actual</label>
      <input type="text" class="form-control" name="PuestoProfesor" id="PuestoProfesor" >
    </div>
  </div>


  <div class="col-md-6">
    <div class="form-group">
      <label for="">Nombre del jefe inmediato</label>
      <input class="form-control" name="JefeInmediatoProfesor" id="JefeInmediatoProfesor"  readonly>
    </div>
  </div>
    
    
    
    <input name="IdJefeInmediatoProfesor" id="IdJefeInmediatoProfesor" placeholder="idjefe" >

</div>



<script>
function getDatosLaborales() {
    var idDepartamento = document.querySelector("#IdDepartamentoProfesor"); 
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
        document.querySelector('#IdCarreraAPI').value = data.IdCarrera;
        document.querySelector('#NombreCarreraProfesor').value = data.NombreCarrera;
        
        document.querySelector('#IdJefeInmediatoProfesor').value = data.IdJefeDepartamento;
        document.querySelector('#JefeInmediatoProfesor').value = data.NombreJefe;
        
      }
    };
    request.open('GET', 'api.php?oper=getDatosLaborales&idDepartamento='  + idDepartamento.value, true);
    request.send();
  }

</script>


