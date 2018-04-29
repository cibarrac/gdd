<?php 
include 'bs/QueryService.php';
include "model/enty.php";
include 'bs/ReportService.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
     <div class="container">
     <br><br>
     <div class="row">
        <div class="col-md-12">
             <label for="">Nombre del curso __________________ </label>
             <label for="">Lugar _____________________ </label>
             <label for="">Instructor (s)  _____________________</label>
             <label for="">Periodo _____ </label>
             <label for="">Fecha ______</label>
             <label for="">Horario ______ </label>
             cursos C
            
              
        </div>
     </div> 
     <br>

     <div class="row">

            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead style="background:#dad9d9">
                        <tr>
                            <th>No.</th>
                            <th>Grado Academico</th>
                            <th>Docente</th>
                            <th>Area</th>
                            <th>No. Tarjeta</th>
                            <th>RFC</th>
                            <th>Firma</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php  $list = ReportService::getList();
                       $i=1;
                        foreach ($list as $profe) { ?> 
                                 <tr>
                                   <td> <?php echo $i;?> </td>
                                   <td> <?php echo $profe->__GET('gradoestudios');?> </td>
                                   <td> <?php echo $profe->__GET('nombre');?> </td>
                                   <td> <?php echo $profe->__GET('departamento');?> </td>
                                   <td> <?php echo $profe->__GET('numerotarjeta');?> </td>
                                   <td> <?php echo $profe->__GET('rfc');?> </td>
                                   <td> <?php echo ""; ?> </td>
                                  
                                 </tr>
                             <?php $i++;}
                           ?>
                          
                    </tbody>
                </table>
            </div>

            </div>
      <div class="row">
           <div class="col-md-6"> 
               <label for="">MC. DANIEL MULATO AGUERO.....</label>
           </div>
           <div class="col-md-6"> 
              <label for="">  MC. NOE CASTELLANOS BEBOLLEDO </label></div>
          
      </div>
 
      </div>
</body>
</html>