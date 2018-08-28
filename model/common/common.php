
<?php 
 function fillOptionsNombresAndId($table,$col ){
    $array = querySelect(SQL::$SELECCIONA_TODO." ".$table );
    foreach ($array as $fila) { ?> 
            <option value="<?php echo $fila[$col-1]; ?>">
              <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[$col+2]; ?> 
           </option>           
 <?php }}?>
         
           
<?php
    function fillNombreCompletoProfesorPorJefe($email)
    {   $col = 0;
        $array = querySelect(SQL::$NOMBRE_COMPLETO_PROFESOR_POR_JEFE." '".$email."' ");
        foreach ($array as $fila ) { ?>
            <option value="<?php echo $fila[$col]; ?>" >
                <?php echo $fila[$col]; ?>
            </option>  <?php  
        }
    }
?>
            
<?php
    function fillNombreCompletoProfesor()
    {   $col = 0;
        $array = querySelect(SQL::$NOMBRE_COMPLETO_PROFESOR);
        foreach ($array as $fila ) { ?>
            <option value="<?php echo $fila[$col]; ?>" >
                <?php echo $fila[$col]; ?>
            </option>  <?php  
        }
    }
?>
            
            
<?php 
    function Periodo(){
    $col = 0;
    $array = querySelect(SQL::$ANIO);
    foreach($array as $fila) { ?> 
            <option value=" <?php echo "Enero-Junio ".$fila[$col].""?>" >
                <?php echo "Enero-Junio ".$fila[$col].""?>
            </option>
            
            <option value=" <?php echo "Agosto-Diciembre ".$fila[$col].""?>" >
                <?php echo "Agosto-Diciembre ".$fila[$col].""?>
            </option> <?php
            }
    }
?>
  
            
<?php 
    function ProfesoresPorCarrera($IdCarrera){
        $col=0;
        $array = querySelect(SQL::$PROFESORES_POR_CARRERA." ".$IdCarrera);
        foreach ($array as $fila) { ?>
            <option value="<?php echo $fila[$col]; ?>" >
                 <?php echo $fila[$col]; ?> 
            </option> <?php 
        }
    }
?>            

       
<?php 

function fillOptionsDouble($table, $col) {
     $array = querySelect(SQL::$SELECCIONA_TODO." ".$table );
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
    $listaId = querySelect(SQL::$SELECCIONA_TODO." ". $table);
    foreach ($listaId as $fila) { ?>
         <option value="<?php echo $fila[$k]; ?>"><?php echo $fila[$v]; ?></option>
<?php }} ?>

      

            
<?php function fillOptionsSingle($table,$col) {
      
     $listaSingle = querySelect(SQL::$SELECCIONA_TODO ." ". $table);
     foreach ($listaSingle as $fila) { ?>
        <option value="<?php echo $fila[$col]; ?>"> <?php echo $fila[$col]; ?> </option>
<?php }} ?>          
           
        
          
              
<?php function ismenu($email) {
    //if(isset($SESSION['username'])) {
      
    $listaMenu = querySelect(SQL::$SELECCIONA_ROLE." '".$email."'");
        foreach ($listaMenu as $fila) {
            return $fila['role'];  
        }          
     //}
     //else {return "user";}
}?>
           
   

<?php function getIdJefe($email){
    $col=0;
    $lista = querySelect(SQL::$ID_JEFE." '".$email."' ");
    foreach ($lista as $fila){
        return $fila[$col];
    }
}
?>
        
<?php function getIdCarreraJefe($email){
    $col=0;
    $lista= querySelect(SQL::$ID_CARRERA_JEFE." '".$email."' ");
    foreach ($lista as $fila){
        return $fila[$col];
    }
}
?>
        
        
<?php function getIdCArreraProfe($email){
    $col = 0;
    $lista = querySelect(SQL::$ID_CARRERA_PROFESOR." '".$email."' ");
    foreach ($lista as $fila) {
        return $fila[$col]; 
    }
}?>
              
<?php function OptieneNombre($correo) {
    $col = 0;
   $listaNombre = querySelect(SQL::$NOMBRE_PROFESOR." '".$correo."' ");
    foreach ($listaNombre as $fila) { 
         return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}} ?>

        
<?php function OpIdPorCorreo ($correo){
    $col=0;
    $lista = querySelect(SQL::$ID_PROFESOR_POR_CORREO." '".$correo."' ");
    foreach ($lista as $fila) { 
        return  $fila[$col];
 }} ?>
            
          
<?php function OptieneNombreJefe($correo) {
    $col = 0;
    $listaNombreJefe = querySelect(SQL::$NOMBRE_JEFE_POR_CORREO." '".$correo."' ");
    foreach ($listaNombreJefe as $fila){
        return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}}?>
              
         
              
<?php  function OptieneCorreoBoss() {
    $listaCorreoBoss = querySelect(SQL::$CORREO_JEFE);
    foreach ($listaCorreoBoss as $fila) { ?>
        <option value="<?php echo $fila[$col]; ?>"><?php echo $fila[$col]; ?></option>
<?php }} ?>
        
        
        
<?php function ProfesoresPorDepartamento($correojefe, $col=0){
    $listaprofesores = querySelect(SQL::$PROFESORES_POR_DEPARTAMENTO." ".$correojefe);
    foreach ($listaprofesores as $fila) { ?>
        <option value="<?php echo $fila[$col];?>">
        <?php echo $fila[$col]." ".$fila[$col+1]." ".$fila[col+2]; ?> </option>
<?php }} ?>

        
        
<?php function OptienePresidente($correo) {
    $col=0;
    $listaPresidente = querySelect(SQL::$PRESIDENTE_ACADEMIA." '".$correo."' ");
        foreach ($listaPresidente as $fila) { 
             return $fila[$col] . " " . $fila[$col+1] . " " . $fila[$col+2];
}} ?>
                  
                 


                  
<?php function OptieneCarrera($correoJefe) {
    $col=0;
     $listaCarrera = querySelect(SQL::$CARRERA_JEFE." ".$correoJefe);
    foreach ($listaCarrera as $fila) {
         return $fila[$col];
}} ?>

        



                  
<?php function OptieneDepartamento($correoJefe) {
    $col=0;
     $listaDepartamento = querySelect(SQL::$DEPARTAMENTO_JEFE." '".$correoJefe."' ");
    foreach ($listaDepartamento as $fila) { 
        return $fila[$col]; 
 }} ?>
        
        
<?php function getIdDepartamentoJefe($correoJefe) {
    $col=0;
     $listaDepartamento = querySelect(SQL::$ID_DEPARTAMENTO_JEFE." '".$correoJefe."' ");
    foreach ($listaDepartamento as $fila) { 
        return $fila[$col]; 
 }} ?>
     
        

                            
<?php function fullpublic() {
    $k; $v;
     $lista = querySelect(SQL::$CURSO_PUBLIC);
     foreach ($lista as $fila) { ?>
        <option value="<?php echo $fila[$k]; ?>">
            <?php echo $fila[$v]; ?>
        </option> 
<?php }} ?>
                 
        
               
                
<?php function getById($table,$k,$v) {
    $lista = querySelect(SQL::$SELECCIONA_TODO." ".$table);
    foreach ($lista as $fila) { ?>
        <option value="<?php echo $fila[$k]; ?>">
            <?php echo $fila[$v]; ?>
        </option>
<?php }} ?>

        
        
<?php function IdDepartamento() {
    $col=0;
    $lista = querySelect(SQL::$DEPARTAMENTO);
    foreach ($lista as $fila) { ?>
        <option value ="<?php echo $fila[$col];?>">
            <?php echo $fila[$col+1];?>
        </option>
<?php }}?>

        
<?php function TablaProfesorSU($id){
    if($id == 0){
        $lista = querySelect(SQL::$SELECCIONA_TODO." profesor");
        return $lista;
    }
    else{
        $lista = querySelect(SQL::$FILTRO_PROFESORES." ".$id);
        return $lista;
    }
} ?>

        
        
<?php function getIdCarrera($abrev){
    $col=0;
    $lista = querySelect(SQL::$ID_CARRERA." '".$abrev."' ");
    foreach($lista as $fila){
        return $fila[$col];
    }
} ?>

        
        