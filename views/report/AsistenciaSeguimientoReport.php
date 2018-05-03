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
                        <td>Firma de seguimiento</td>
           
  		</tr>
  </thead>
  <?php  include '../../bs/curso/CursoService.php';
    $cursosList = CursoService::getCursos();
    
          foreach ($cursosList as $curso) {?>
                  <tr >
                    <td><?php echo $curso->__GET('NumeroCurso'); ?> </td>
                    <td><?php echo $curso->__GET('NombreCurso'); ?></td>
                    <td><?php echo $curso->__GET('ObjetivoCurso'); ?></td>
                    <td><?php echo $curso->__GET('FechaInicioCurso'); ?></td>
                    <td><?php echo $curso->__GET('FechaFinCurso'); ?></td>
                    <td><?php echo $curso->__GET('TipoCurso'); ?></td>
                    <td><?php echo $curso->__GET('PeriodoCurso'); ?></td>
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
