<input type="number" name="id" hidden value="0">
<div class="row">
        <div class="col-md-12">
        <div class="form-group">
            <label for="">Curso:</label>
            <select class="form-control lista" name="idcurso" id="lista">
                  <?php  fillpublic("cursos",0,16); ?>       
            </select>
        </div>
        </div>

        <div class="col-md-12">
        <div class="form-group">
          <label for="">Profesor</label>
          <select class="form-control" name="idprofesor" id="lista_">
            <?php fillOptionId("profesores",0,1);?>
            <option value="2">Profesor 2</option>
          </select>
        </div>
        </div>

</div>
