
<!-- llena opcion de acuerdo a una columna -->
<?php function fillOptionsNombresAndId($table,$col) {
  $lista = mysql_query("select * from ". $table );
  if(mysql_num_rows($lista)>0){
    while($fila = mysql_fetch_array($lista)){ ?>
      <option value="<?php echo $fila[$col-1]; ?>">
        <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
      </option>
    <?php }} ?>
  <?php } ?>



  <?php function fillOptionsDouble($table,$col) {
    $lista = mysql_query("select * from ". $table );
    if(mysql_num_rows($lista)>0){
      while($fila = mysql_fetch_array($lista)){ ?>
        <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
          <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
        </option>
      <?php }} ?>
    <?php } ?>



    <?php function OPCarrera($table, $idjefe, $col=0) {
      $lista = mysql_query("select NombreProfesor, ApellidoPaternoProfesor, ApellidoMaternoProfesor from '".$table."' inner join
      JefeDepartamento on IdJefeInmediatoProfesor = IdJefeDepartamento where idJefeDepartamento = '".$idjefe."'");
      if(mysql_num_rows($lista)>0){
        while($fila = mysql_fetch_array($lista)){ ?>
          <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
            <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
          </option>
        <?php }} ?>
      <?php } ?>




      <!-- llena opcion de acuerdo a una columna y su valor  -->
      <?php function fillOptionId($table,$k,$v) {
        $lista = mysql_query("select * from ". $table );
        if(mysql_num_rows($lista)>0){
          while($fila = mysql_fetch_array($lista)){ ?>
            <option value="<?php echo $fila[$k]; ?>"><?php echo $fila[$v]; ?></option>
          <?php }} ?>
        <?php } ?>


        <?php function fillOptionsSingle($table,$col) {
          $lista = mysql_query("select * from ". $table );
          if(mysql_num_rows($lista)>0){
            while($fila = mysql_fetch_array($lista)){ ?>
              <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
            <?php }}?>

          <?php } ?>




          <?php
          function ismenu() {
            $lista = mysql_query("select role from members WHERE email='".$_SESSION['username']."'" );
            if(mysql_num_rows($lista)>0){
              while($fila = mysql_fetch_array($lista)){
                $role = $fila['role'];
              }
            }
            return $role;
          }
          ?>



            <?php function OptieneNombre($correo, $col = 0) {
              $lista = mysql_query("select NombreProfesor, ApellidoPaternoProfesor, ApellidoMaternoProfesor from Profesor where CorreoProfesor = '".$correo."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
                }
              }
            } ?>


            <?php function OptieneNombreJefe($correo, $col = 0) {
              $lista = mysql_query("select NombreJefeDepto, ApellidoPaternoJefeDepto, ApellidoMaternoJefeDepto from JefeDepartamento where CorreoJefe = '".$correo."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
                }
              }
            } ?>



            <?php function OptieneCorreoBoss($table,$col = 0) {
              $lista = mysql_query("select email from ". $table );
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){ ?>
                  <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
                <?php }}?>

              <?php } ?>



            <?php function OptienePresidente($correo, $col = 0) {
              $lista = mysql_query("select NombrePresidenteAcad, ApellidoPaternoPresidenteAcad, ApellidoMaternoPresidenteAcad from PresidenteAcademia inner join JefeDepartamento on IdDepartamentoPresidente = IdDepartamentoJefe where CorreoJefe ='".$correo."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
                }
              }
            } ?>



            <?php function OptieneCarrera($correoJefe,$col = 0) {
              $lista = mysql_query(" select NombreCarrera from Carrera inner join JefeDepartamento on IdDepartamentoCarrera = IdDepartamentoJefe where CorreoJefe = '".$correoJefe."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col];
                }
              }
            } ?>




            <?php function OptieneDepartamento($correoJefe,$col = 0) {

              $lista = mysql_query(" select NombreDepartamento from Departamento inner join JefeDepartamento on IdDepartamento = IdDepartamentoJefe where CorreoJefe = '".$correoJefe."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col];
                }
              }
            } ?>





          <?php function fillpublic($table,$k,$v) {
            $lista = mysql_query("select * from ". $table. " where sign1=1 and sign2=1");
            if(mysql_num_rows($lista)>0){
              while($fila = mysql_fetch_array($lista)){ ?>
                <option value="<?php echo $fila[$k]; ?>">
                  <?php echo $fila[$v]; ?>
                </option>
              <?php }} } ?>



              <?php function getById_($table,$k,$v,$NombreCurso) {
                $SQL = "SELECT *FROM  " .$table;


                $lista = mysql_query($SQL);

                echo "Lista" ;print_r($lista);  // aqui
                if(mysql_num_rows($lista)>0){
                  while($fila = mysql_fetch_array($lista)){ ?>
                    <option value="<?php echo $fila[$k]; ?>">
                      <?php echo $fila[$v]; ?>
                    </option>
                  <?php }}?>

                <?php } ?>
