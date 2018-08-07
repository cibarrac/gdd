<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos Disponibles</title>
    <meta charset="utf-8">
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <script src="../../assets/js/jquery-1.11.3.min.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</head>
<body> <br>
<div class="container">
    
   <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <label for="">Numerero y Nombre del Curso: </label>
      </div>
    </div>
       
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="" >Lugar:</label> 
      </div>
    </div>
        
    <div class="col-md-2">
      <div class="form-group">
        <label for="" >Horario:</label> 
      </div>
    </div>
        
    <div class="col-md-2">
      <div class="form-group">
        <label for="" >Periodo:</label> 
      </div>
    </div>
     
    <div class="col-md-2">
      <div class="form-group">
        <label for="" >Folio:</label> 
      </div>
    </div>    
  </div>
    
        
  <div class="row">
      <div class="col-md-4">
      <div class="form-group">
        <label for="" >Instructor (es): </label> 
      </div>
    </div>  
      
    <div class="col-md-3">
      <div class="form-group">
        <label for="" >Duración:</label> 
      </div>
    </div>     
  </div>
     
      
      
<div class="row">

  <div class= "col-md-12">
    <table class="table table-bordered" >
      <thead style="background:#dad9d9">
          <tr align="center" style="color: #000000">
  			<td>No.</td>
  			<td>Numero tarjeta</td>
  			<td>Grado</td>
  			<td>Participante</td>
                        <td>Departamento/Carrera</td>
                        <td>RFC</td>
                        <td>Firma</td>
  		</tr>
  </thead>
  <?php  include '../../bs/curso/CursoService.php';
    $id = $_GET['curso'];
    $cursosList = CursoService::getAsistencias($id);
    
          foreach ($cursosList as $curso) {?>
                <tr >
                    <td><?php echo $curso->__GET('NumeroCurso'); ?> </td>
                    <td><?php echo $curso->__GET('NumeroTarjeta'); ?></td>
                    <td><?php echo $curso->__GET('Grado'); ?></td>
                    <td><?php echo $curso->__GET('Participante'); ?></td>
                    <td><?php echo $curso->__GET('Carrera'); ?></td>
                    <td><?php echo $curso->__GET('RFC'); ?></td>
                    <td><?php echo $curso->__GET('Firma'); ?></td>
                </tr>                     
  	<?php } ?>
  	</table>
    </div>
  </div>
  
<div class="row">
     <div class="col-md-6">
         <label for="">MC. DANIEL MULATO AGUERO</label>
     </div>
     <div class="col-md-6">
        <label for="">  MC. NOE CASTELLANOS BEBOLLEDO. </label></div>
     </div>
</div>
</body>
</html>
