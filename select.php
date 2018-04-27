<?php 
 include 'bs/QueryService.php';

 function fillOptionsNombresAndId($table,$col ){
    $array = querySelect("select * from ". $table );
    foreach ($array as $fila) { ?> 
            <option value="<?php echo $fila[$col-1]; ?>">
              <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
           </option>           
 <?php }}?>
           
           
<!-- llena opcion de acuerdo a una columna -->
<?php function fillOptionsNombresAndId_($table,$col) {
  $lista = mysql_query("select * from ". $table );
  if(mysql_num_rows($lista)>0){
    while($fila = mysql_fetch_array($lista)){ ?>
      <option value="<?php echo $fila[$col-1]; ?>">
        <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
      </option>
    <?php }} ?>
  <?php } ?>


      
      
      
     <?php function fillOptionDouble($table, $col) {
          $array = querySelect("select * from ". $table );
          foreach ($array as $fila) {
              ?> <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
          <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
        </option>
    <?php }}?>

        
  <?php function fillOptionsDouble_($table,$col) {
    $lista = mysql_query("select * from ". $table );
    if(mysql_num_rows($lista)>0){
      while($fila = mysql_fetch_array($lista)){ ?>
        <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
          <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
        </option>
      <?php }} ?>
    <?php } ?>


        
        
        
<?php function OpCarrera($table, $idjefe, $col=0) {
    $listaCarreras = querySelect("select NombreProfesor, ApellidoPaternoProfesor,"
        . " ApellidoMaternoProfesor from '".$table."' inner join "
        . "JefeDepartamento on IdJefeInmediatoProfesor = IdJefeDepartamento"
        . " where idJefeDepartamento = '".$idjefe."'");
    foreach ($listaCarreras as $fila) { ?>
         <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
            <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
        </option>
<?php }}?> 
        
        
    <?php function OPCarrera_($table, $idjefe, $col=0) {
      $lista = mysql_query("select NombreProfesor, ApellidoPaternoProfesor, ApellidoMaternoProfesor from '".$table."' inner join
      JefeDepartamento on IdJefeInmediatoProfesor = IdJefeDepartamento where idJefeDepartamento = '".$idjefe."'");
      if(mysql_num_rows($lista)>0){
        while($fila = mysql_fetch_array($lista)){ ?>
          <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
            <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
          </option>
        <?php }} ?>
      <?php } ?>


          
          
<?php function fillOptionId($table, $k, $v){
    $listaId = querySelect("select * from ". $table);
    foreach ($listaId as $fila) { ?>
         <option value="<?php echo $fila[$k]; ?>"><?php echo $fila[$v]; ?></option>
<?php}}?>

      <!-- llena opcion de acuerdo a una columna y su valor  -->
      <?php function fillOptionId_($table,$k,$v) {
        $lista = mysql_query("select * from ". $table );
        if(mysql_num_rows($lista)>0){
          while($fila = mysql_fetch_array($lista)){ ?>
            <option value="<?php echo $fila[$k]; ?>"><?php echo $fila[$v]; ?></option>
          <?php }} ?>
        <?php } ?>


            
 <?phpfunction fillOptionSingle($table, $col) {
     $listaSingle = querySelect("select * from ". $table);
     foreach ($listaSingle as $fila) { ?>
        <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
<?php }}?>          
            
        
        <?php function fillOptionsSingle_($table,$col) {
          $lista = mysql_query("select * from ". $table );
          if(mysql_num_rows($lista)>0){
            while($fila = mysql_fetch_array($lista)){ ?>
              <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
            <?php }}?>

          <?php } ?>



              
              
<?phpfunction ismenu() {
    $listaMenu = querySelect("select role from members "
        . "WHERE email='".$_SESSION['username']."'" );
        foreach ($listaMenu as $fila) {
          $role = $fila['role'];  
        } return $role;
}?>
           
          <?php
          function ismenu_() {
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
   $listaNombre = querySelect("select NombreProfesor, ApellidoPaternoProfesor, "
            . "ApellidoMaternoProfesor from profesor where"
            . " CorreoProfesor = '".$correo."' ");
    foreach ($listaNombre as $fila) { 
         return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
 }}?>

              
            <?php function OptieneNombre_($correo, $col = 0) {
              $lista = mysql_query("select NombreProfesor, ApellidoPaternoProfesor, ApellidoMaternoProfesor from profesor where CorreoProfesor = '".$correo."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
                }
              }
            } ?>


              
<?php function OptieneNombreJefe($correo, $col = 0) {
    $listaNombreJefe = querySelect("select NombreJefeDepto, ApellidoPaternoJefeDepto,"
            . " ApellidoMaternoJefeDepto from jefedepartamento where"
            . " CorreoJefe = '".$correo."' ");
    foreach ($listaNombreJefe as $fila){
        return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}}?>
              
              
            <?php function OptieneNombreJefe_($correo, $col = 0) {
              $lista = mysql_query("select NombreJefeDepto, ApellidoPaternoJefeDepto, ApellidoMaternoJefeDepto from jefedepartamento where CorreoJefe = '".$correo."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
                }
              }
            } ?>


              
<?php  function OptieneCorreoBoss($table, $col=0) {
    $listaCorreoBoss = querySelect("select email from ". $table);
    foreach ($listaCorreoBoss as $fila) { ?>
        <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
<?php}}?>

        
            <?php function OptieneCorreoBoss_($table,$col = 0) {
              $lista = mysql_query("select email from ". $table );
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){ ?>
                  <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
                <?php }}?>

              <?php } ?>



                  
<?phpfunction OptienePresidente($correo, $col=0) {
    $listaPresidente = querySelect("select NombrePresidenteAcad, ApellidoPaternoPresidenteAcad,"
        . " ApellidoMaternoPresidenteAcad from presidenteacademia inner join"
        . " jefedepartamento on IdDepartamentoPresidente = IdDepartamentoJefe"
        . " where CorreoJefe ='".$correo."' ");
        foreach ($listaPresidente as $fila) { 
             return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}} ?>
                  
                  
            <?php function OptienePresidente_($correo, $col = 0) {
              $lista = mysql_query("select NombrePresidenteAcad, ApellidoPaternoPresidenteAcad, ApellidoMaternoPresidenteAcad from presidenteacademia inner join jefedepartamento on IdDepartamentoPresidente = IdDepartamentoJefe where CorreoJefe ='".$correo."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
                }
              }
            } ?>


                  
<?php function OptieneCarrera($correoJefe, $col=0) {
     $listaCarrera = querySelect(" select NombreCarrera from carrera inner join"
            . " jefedepartamento on IdDepartamentoCarrera = IdDepartamentoJefe"
            . " where CorreoJefe = '".$correoJefe."' ");
    foreach ($listaCarrera as $fila) {
         return $fila[$col];
}} ?>

                  
            <?php function OptieneCarrera_($correoJefe,$col = 0) {
              $lista = mysql_query(" select NombreCarrera from carrera inner join jefedepartamento on IdDepartamentoCarrera = IdDepartamentoJefe where CorreoJefe = '".$correoJefe."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col];
                }
              }
            } ?>




                  
<?php function OptieneDepartamento($correoJefe, $col=0) {
     $listaDepartamento = querySelect(" select NombreDepartamento from departamento"
            . " inner join jefedepartamento on IdDepartamento = IdDepartamentoJefe"
            . " where CorreoJefe = '".$correoJefe."' ");
    foreach ($listaDepartamento as $fila) {
      return $fila[$col];  
}} ?>
                  
            <?php function OptieneDepartamento_($correoJefe,$col = 0) {

              $lista = mysql_query(" select NombreDepartamento from departamento inner join jefedepartamento on IdDepartamento = IdDepartamentoJefe where CorreoJefe = '".$correoJefe."' ");
              if(mysql_num_rows($lista)>0){
                while($fila = mysql_fetch_array($lista)){
                  return $fila[$col];
                }
              }
            } ?>





                  
<?php function fullpublic($table,$k,$v) {
     $lista = querySelect("select * from ". $table. " where sign1=1 and sign2=1");
     foreach ($lista as $fila) { ?>
        <option value="<?php echo $fila[$k]; ?>">
            <?php echo $fila[$v]; ?>
        </option> 
<?php }} ?>
                 
        
          <?php function fillpublic_($table,$k,$v) {
            $lista = mysql_query("select * from ". $table. " where sign1=1 and sign2=1");
            if(mysql_num_rows($lista)>0){
              while($fila = mysql_fetch_array($lista)){ ?>
                <option value="<?php echo $fila[$k]; ?>">
                  <?php echo $fila[$v]; ?>
                </option>
              <?php }} } ?>



                
                
<?php function getById($table,$k,$v,$NombreCurso) {
    $lista = querySelect("SELECT *FROM  " .$table);
    foreach ($lista as $fila) { ?>
        <option value="<?php echo $fila[$k]; ?>">
            <?php echo $fila[$v]; ?>
        </option>
<?php }} ?>
                
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
