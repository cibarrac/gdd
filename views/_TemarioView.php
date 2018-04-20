<input type="number" name="id" hidden value="0">

<h4 class="card-header">Datos del temario</h4>

<br>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <input class="form-control" list="tema" placeholder="Tema" name="" required >
        <datalist id="tema">
          <option value="Administracion de redes">
            <option value="Estructura de datos">
              <option value="Datawarehause">
                <option value="Mineria de datos">
                  </datalist>

                </div>
              </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Agregar Material</label>
      </div>
    </div>
    <form enctype="multipart/form-data" action="__URL__" method="POST">
      <div class="form-group">
      <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
      Enviar este archivo: <input name="fichero_usuario" type="file" />
      <input type="submit" value="Enviar archivo" />
        </div>
    </form>
  </div>
  
