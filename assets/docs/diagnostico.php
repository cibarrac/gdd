<?php
include "conn.php";
include "model/enty.php";



function getList() {
  /**
   * SELECT C.id, gradoestudios, nombre, apellidop, apellidom, departamento, numerotarjeta, rfc   FROM profesores C, inscripciones O
* WHERE C.id = O.nombreprofesor
   */
  $necesidadList = array();
  // obtiene el valor de la url ejemeplo
  // ir a navegador : http://localhost/diplomas.org-2018/diagnostico.php?id_diagnostico=1
  // entonces el objeto $idcurso  tendra el valor de uno y se usara en la consulta
  $idcurso= $_GET['id_diagnostico'];
  // cadena de la consultas
  $SQL = "SELECT *FROM diagnostico WHERE id=".$idcurso;
  // se hace la consulta a la base de datos con la funcion mysql_query
  // usa como parametro la cadena que tiene la consulta.
  $lista = mysql_query($SQL);
 /**
  * aQUI LA CONDICION IF EVALUA SI DE LA\
  * CONSULTA QUE SE ESTA HACIENDO EN LA LINEA 12 NOS LLENO EL
  * ARREGLO REVISANDO SI SUS ELEMENTOS SON MAYORES A 0, CADA ARREGLO
  * TIENE UN NUMERO DE FILAS,
  */
  if(mysql_num_rows($lista)>0){
    /** inicia el bucle que recorre el arreglo
     */
     while($fila = mysql_fetch_array($lista)){
        /**
         * intancia un objeto del archivo model/enty.php
         */
        $diagnostico = new diagnostico();

        /**
         * el primer argumento se le conoce como parametro
         * el metodo set toma la bariable de la bd y lo agrega al ojeto diagnostico
         */
               $diagnostico->__SET('id_del_set',$fila['id']);

               $diagnosticoList [] = $diagnostico;
             }}
         return $diagnosticoList;
        }?>



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
            <center>Instituto Tecnológico de Acapulco </center>
            <center>Subdireccion Académica </center>
            <center>DIAGNOSTICO DE NECESIDADES DE FORMACION Y ACTUALIZACION DOCENTE Y PROFECIONAL </center>
          </div>
        </div>

        <br><br>
        <?php  $list = getList();
                       $i=1;
                        foreach ($list as $diagnostico) { ?>
                                 <tr>
                                   <td> <?php echo $diagnostico->__GET('id_del_set');?> </td>
                                 </tr>
                             <?php $i++;}
                           ?>
        <div class="row">
            <div class="col-md-12">
                <label for="">Para los(as) profesores(as) de la carrera de: <u>  Todas las carreras  </u></label>
                <label for="">Del departamento de: <u>Todos los departamentos</u></label>
                <label for="">Fecha de realizacion del diagnostico:<u> 19/02/18</u></label>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <label for="">Jefe(a) del departamento academico</label>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Firma</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>


        <br>

        <div class="row">
            <div class="col-md-12">
                <label for="">Presidente de academia:</label>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Firma</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <p>a) PRIORIZAR LAS ASIGNATURAS EN LAS QUE SE REQUIERA LA FORMACION O ACTUALIZACION
                DEL PROFESOR EN LA CARRERA GENERICA, AVALADOS POR LA ACADEMIA </p>
                <table class="table table-bordered">
                    <tr>
                        <th>Curso</th>
                        <th>Objetivo</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="row">
          <div class="col-md-12">
              <table class="table table-bordered">
                  <tr>
                      <th>Asignatura en la que se require formacion o actualizacion</th>
                      <th>Contenidos tematicos en el que se requiere la formacion o actualizacion</th>
                      <th>Numero de profesores que la requieren</th>
                      <th>Periodo en el que se requiere la formacion o actualizacion (Enero-Junio o Agosto-Diciembre)</th>
                      <th>Facilitadores propuestos</th>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </table>
          </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <p>b) PRIORIZAR LAS ASIGNATURAS EN LAS QUE SE REQUIERA LA FORMACION O ACTUALIZACION
                DEL PROFESOR EN LOS MODULOS DE ESPECIALIDAD, AVALADOS POR LA ACADEMIA </p>
                <table class="table table-bordered">
                    <tr>
                        <th>Curso</th>
                        <th>Objetivo</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
              <table class="table table-bordered">
                  <tr>
                      <th>Asignatura en la que se require formacion o actualizacion</th>
                      <th>Contenidos tematicos en el que se requiere la formacion o actualizacion</th>
                      <th>Numero de profesores que la requieren</th>
                      <th>Periodo en el que se requiere la formacion o actualizacion (Enero-Junio o Agosto-Diciembre)</th>
                      <th>Facilitadores propuestos</th>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </table>
              <label for="">Nota: La formacion docente estara atendida prioritariamente con el
              Diplomado en el Desarrollo y Formacion de Competencias Docentes</label>
          </div>
        </div>

        <br>
        <br>

        <div class="row">
          <div class="col-md-12">
            <center>Instituto Tecnológico de Acapulco </center>
            <center>Subdireccion Académica </center>
            <center>CONCENTRADO DEL DIAGNOSTICO DE NECESIDADES DE FORMACION Y ACTUALIZACION DOCENTE Y PROFECIONAL </center>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <label for=""> Fecha de realizacion del diagnostico:_____</label>
            <p>a)ACTIVIDADES O EVENTOS QUE SE LLECARAN A CABO PARA LA FORMACION Y ACTUALIZACION
            DOCENTE (CONTENIDOS TEMATICOS DE LAS ASIGNATURAS)</p>
              <table class="table table-bordered">
                <tr>
                  <th>Actividades o Eventos (Cursos, talleres, conferencias, etc.)</th>
                  <th>Objetivo</th>
                  <th>No. de profesores</th>
                  <th>Fecha en la que se realiza la actividad</th>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label for=""> Fecha de realizacion del diagnostico:_____</label>
            <p>a)ACTIVIDADES O EVENTOS QUE SE LLECARAN A CABO PARA LA FORMACION Y ACTUALIZACION
            DOCENTE (MODULOS DE ESPECIALIDAD)</p>
              <table class="table table-bordered">
                <tr>
                  <th>Actividades o Eventos (Cursos, talleres, conferencias, etc.)</th>
                  <th>Objetivo</th>
                  <th>No. de profesores</th>
                  <th>Fecha en la que se realiza la actividad</th>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
          </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <label for="">Subdireccion Academica </label>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Firma</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <label for="">Jefe(a) del departamento academico</label>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Firma</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>



     </div>
</body>
</html>
