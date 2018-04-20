 


<form class="" action="" method="POST">
   
    <input type="number" hidden name="id" value="0">
  
     <div class="form-group">
         <label for="">Nombre Alumno</label>
         <input type="text" class="form-control" name="nombre" required>
      </div>
  
      <div class="form-group">
         <label for="">Apellido Paterno</label>
         <input type="text" class="form-control" name="apellidop" required>
      </div>
      
     <div class="form-group">
       <label for="">Apellido Materno</label>
       <input type="text" class="form-control" name="apellidom" required>
     </div>
    
    <input type="submit" class="form-control"  value="Guardar">
    <input type="submit" class="form-control"  value="Actualizar">
    
    
</form>


<?php include '../post.php';   
 if(isvalid()) {
  echo  "Todos los campos se verificaron";   
     
 }
 if($_POST['id']!=0) {
     update($_POST['id'], 'alumnos');
 }
 if(isset($_POST['id'])){
          save("alumnos");
          
 
} ?>
    
