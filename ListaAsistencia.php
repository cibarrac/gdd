<?php
include 'bs/QueryService.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta charset="utf-8">
  <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>

<br>

<div class="container">

<div class="row">

  <div class= "col-md-12">
    <table class="table table-bordered" >
      <thead style="background:#dad9d9">

  		<tr>
  			<td>Numero del curso</td>
  			<td>Nombre del curso</td>
  			<td>Objetivo</td>
  			<td>Fecha Inicio</td>
        <td>Fecha Fin</td>
        <td>Tipo curso</td>
        <td>Periodo curso</td>

  		</tr>
  </thead>
  </div>
  </div>

  <div class="row">

    <div class="col-md-12">

      <?php
  		$sql="SELECT NumeroCurso, NombreCurso, ObjetivoCurso, FechaInicioCurso, FechaFinCurso, TipoCurso,PeriodoCurso from curso";
  		$result= querySelect($sql);
                
                  foreach ($result as $mostrar) {
        	 ?>
                        		<tr>
  			<td><?php echo $mostrar['NumeroCurso'] ?></td>
  			<td><?php echo $mostrar['NombreCurso'] ?></td>
  			<td><?php echo $mostrar['ObjetivoCurso'] ?></td>
  			<td><?php echo $mostrar['FechaInicioCurso'] ?></td>
                        <td><?php echo $mostrar['FechaFinCurso'] ?></td>
                       <td><?php echo $mostrar['TipoCurso'] ?></td>
  			<td><?php echo $mostrar['PeriodoCurso'] ?></td>
  		</tr>
 
                     
  	<?php
  	}
  	 ?>
  	</table>

    </div>

  </div>







<div class="row">
     <div class="col-md-6">
         <label for="">MC. DANIEL MULATO AGUERO</label>
     </div>
     <div class="col-md-6">
        <label for="">  MC. NOE CASTELLANOS BEBOLLEDO</div>
    </label>
</div>

</div>

</body>
</html>
