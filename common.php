<?php 

 function fillOptionsNombresAndId($table,$col ){
    $array = querySelect("select * from ". $table );
    foreach ($array as $fila) { ?> 
            <option value="<?php echo $fila[$col-1]; ?>">
              <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
           </option>           
 <?php }}?>
           
 
   
       
<?php 

function fillOptionsDouble($table, $col) {
     $array = querySelect("select * from ". $table );
     foreach ($array as $fila) { ?> 
           <option value="<?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>">
             <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?>
           </option>
<?php }}?>

        
       
        
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
        

         
          
<?php function fillOptionId($table, $k, $v){
    $listaId = querySelect("select * from ". $table);
    foreach ($listaId as $fila) { ?>
         <option value="<?php echo $fila[$k]; ?>"><?php echo $fila[$v]; ?></option>
<?php }} ?>

      

            
 <?php function fillOptionsSingle($table,$col) {
      
     $listaSingle = querySelect("select * from ". $table);
     foreach ($listaSingle as $fila) { ?>
        <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
<?php }} ?>          
            
        

              
              
<?php function ismenu() {
    $listaMenu = querySelect("select role from members "
        . "WHERE email='".$_SESSION['username']."'" );
        foreach ($listaMenu as $fila) {
          $role = $fila['role'];  
        } return $role;
}?>
           
    

              
<?php function OptieneNombre($correo, $col = 0) {
   $listaNombre = querySelect("select NombreProfesor, ApellidoPaternoProfesor, "
            . "ApellidoMaternoProfesor from profesor where"
            . " CorreoProfesor = '".$correo."' ");
    foreach ($listaNombre as $fila) { 
         return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}} ?>

            

              
<?php function OptieneNombreJefe($correo, $col = 0) {
    $listaNombreJefe = querySelect("select NombreJefeDepto, ApellidoPaternoJefeDepto,"
            . " ApellidoMaternoJefeDepto from jefedepartamento where"
            . " CorreoJefe = '".$correo."' ");
    foreach ($listaNombreJefe as $fila){
        return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}}?>
              
         


              
<?php  function OptieneCorreoBoss($table, $col=0) {
    $listaCorreoBoss = querySelect("select email from ". $table);
    foreach ($listaCorreoBoss as $fila) { ?>
        <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
<?php }} ?>

        
        
<?php function OptienePresidente($correo, $col=0) {
    $listaPresidente = querySelect("select NombrePresidenteAcad, ApellidoPaternoPresidenteAcad,"
        . " ApellidoMaternoPresidenteAcad from presidenteacademia inner join"
        . " jefedepartamento on IdDepartamentoPresidente = IdDepartamentoJefe"
        . " where CorreoJefe ='".$correo."' ");
        foreach ($listaPresidente as $fila) { 
             return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}} ?>
                  
                 


                  
<?php function OptieneCarrera($correoJefe, $col=0) {
     $listaCarrera = querySelect(" select NombreCarrera from carrera inner join"
            . " jefedepartamento on IdDepartamentoCarrera = IdDepartamentoJefe"
            . " where CorreoJefe = '".$correoJefe."' ");
    foreach ($listaCarrera as $fila) {
         return $fila[$col];
}} ?>

        



                  
<?php function OptieneDepartamento($correoJefe, $col=0) {
     $listaDepartamento = querySelect(" select NombreDepartamento from departamento"
            . " inner join jefedepartamento on IdDepartamento = IdDepartamentoJefe"
            . " where CorreoJefe = '".$correoJefe."' ");
    foreach ($listaDepartamento as $fila) {
      return $fila[$col];  
}} ?>
            




                  
<?php function fullpublic($table,$k,$v) {
     $lista = querySelect("select * from ". $table. " where sign1=1 and sign2=1");
     foreach ($lista as $fila) { ?>
        <option value="<?php echo $fila[$k]; ?>">
            <?php echo $fila[$v]; ?>
        </option> 
<?php }} ?>
                 
        
               
                
<?php function getById($table,$k,$v) {
    $lista = querySelect("SELECT * FROM  " .$table);
    foreach ($lista as $fila) { ?>
        <option value="<?php echo $fila[$k]; ?>">
            <?php echo $fila[$v]; ?>
        </option>
<?php }} ?>
                
         