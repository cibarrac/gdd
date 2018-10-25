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
    <?php
    include '../../bs/curso/CursoService.php';
    $id = $_GET['curso'];

    $cursoInfo = CursoService::getCursoInfo($id);

    foreach ($cursoInfo as $info)
    {
   ?>
   <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <label for="">Numero y Nombre del Curso: <?php echo $info->__GET('NumeroyNombreCurso'); ?> </label>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="" >Lugar: <?php echo $info->__GET('Lugar'); ?></label>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="" >Horario: <?php echo $info->__GET('Horario'); ?></label>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="" >Periodo: <?php echo $info->__GET('Periodo'); ?></label>
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
        <label for="" >Instructor: <?php echo $info->__GET('Instructor'); }?></label>
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

  <?php
      $cursosList = CursoService::getAsistencias($id);
      foreach ($cursosList as $curso)
        { ?>
          <tr >
            <td><?php echo $curso->__GET('NumeroProfe'); ?> </td>
            <td><?php echo $curso->__GET('NumeroTarjeta'); ?></td>
            <td><?php echo $curso->__GET('Grado'); ?></td>
            <td><?php echo $curso->__GET('Participante'); ?></td>
            <td><?php echo $curso->__GET('Carrera'); ?></td>
            <td><?php echo $curso->__GET('RFC'); ?></td>
            <td><?php echo $curso->__GET('Firma'); ?></td>
          </tr>
  <?php }

    include_once '../../bs/QueryService.php';

    $info = querySelect("SELECT NumeroCurso, NombreCurso, AulaPropuesta, "
    ."HoraInicioCurso, HoraFinCurso, PeriodoCurso, NombreCompletoInstructor".
    " FROM curso WHERE NumeroCurso = ".$id);

    $list = querySelect("SELECT INSCRIPCION.NombreCurso, PROFESOR.NombreProfesor,"
    ." PROFESOR.ApellidoPaternoProfesor, PROFESOR.ApellidoMaternoProfesor,"
    ." PROFESOR.NumeroTarjetaProfesor, PROFESOR.RFCProfesor, PROFESOR.GradoEstudiosProfesor,"
    ." PROFESOR.PuestoProfesor, INSCRIPCION.NumeroCurso, DEPARTAMENTO.NombreDepartamento, CARRERA.Abreviacion"
    ." from profesor PROFESOR, inscripcion INSCRIPCION, carrera CARRERA,"
    ." departamento DEPARTAMENTO WHERE PROFESOR.IdProfesor = INSCRIPCION.IdProfesor"
    ." AND CARRERA.IdCarrera = PROFESOR.IdCarrera AND DEPARTAMENTO.IdDepartamento"
    ." = CARRERA.IdDepartamentoCarrera AND INSCRIPCION.NumeroCurso =".$id);
    if(count($info)> 0 &&  count($list)> 0)
    {
     // Camino a los include
      set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');
      // PHPExcel
      require_once '../../assets/lib/PHPExcel/PHPExcel.php';
      // PHPExcel_IOFactory
      include '../../assets/lib/PHPExcel/PHPExcel/IOFactory.php';
      // Creamos un objeto PHPExcel
      $objPHPExcel = new PHPExcel();
      // Leemos un archivo Excel 2007
      $objReader = PHPExcel_IOFactory::createReader('Excel2007');
      $objPHPExcel = $objReader->load("../../assets/docs/Concentradodeasistencia.xlsx");
      // Indicamos que se pare en la hoja uno del libro
      $objPHPExcel->setActiveSheetIndex(0);
      //Escribimos en la hoja en la celda B1

      foreach ($info as $fila)
      {
        $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('D7',  $fila['NumeroCurso']." ".$fila['NombreCurso'])
        ->setCellValue('B10',  $fila['AulaPropuesta'])
        ->setCellValue('U10',  $fila['PeriodoCurso'])
        ->setCellValue('N10',  $fila['HoraInicioCurso']." a ".$fila['HoraFinCurso'])
        ->setCellValue('B12',  $fila['NombreCompletoInstructor']);
      }

      $i = 17;
      foreach ($list as $fila)
       {
          $objPHPExcel->setActiveSheetIndex(0)
         // ->setCellValue('D'.$i,  $fila['NumeroTarjetaProfesor'])
          ->setCellValue('B'.$i,  $fila['GradoEstudiosProfesor'])
          ->setCellValue('D'.$i,  $fila['NombreProfesor']." ".$fila['ApellidoPaternoProfesor']." ".$fila['ApellidoMaternoProfesor'])
          ->setCellValue('L'.$i,  $fila['RFCProfesor'] )
          ->setCellValue('P'.$i,  $fila['NombreDepartamento'])
          ->setCellValue('W'.$i,  $fila['Abreviacion'])
          ->setCellValue('Y'.$i,  $fila['PuestoProfesor']);
          $i++;
        }


      // Color rojo al texto

      //Guardamos el archivo en formato Excel 2007
      //Si queremos trabajar con Excel 2003, basta cambiar el 'Excel2007' por 'Excel5' y el nombre del archivo de salida cambiar su formato por '.xls'

      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
      $objWriter->save("../../assets/docs/ConcentradoAsistencia".$id.".xls");

    }
    else{
      print_r('No hay resultados para mostrar Concentrado');
    }

    ?>
    </table>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <a href="<?php echo "../../assets/docs/ConcentradoAsistencia".$id.".xls" ?>">Descargue el formato de concentrado de asistencia</a>
    </div>
  </div>
</div>
</body>
</html>
