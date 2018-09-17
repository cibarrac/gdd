<style>
    #brand
    {
        height: 45px;
    }
    #brand-2
    {
        height: 55px;
    }
    #cerrar li a:hover
    {
        color: red;
    }
    
</style>
 <!-- Fixed navbar SUPER USUARIO -->
 <nav class="navbar navbar-default  navbar-fixed-top" style="background-color: #0d47a1;">
      <div class="container">
        <div class="navbar-header">
            <p>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="index.php"     style="padding: 4px;margin:auto">
                <img id="brand" src="assets/logo/5.png" >
            </a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

              <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         Desarrollo Academico ITA<span class="caret"></span></a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- <li> <a class="dropdown-item"  href="index.php?view=_Diagnostico">D N borrador</a></li> -->
                    <li> <a class="dropdown-item"  href="index.php?view=_infoescuela">Informacion ITA</a></li>
                    <li><a class="dropdown-item"  href="index.php?view=_Departamento">Registrar departamento</a></li>
                    <li><a class="dropdown-item"  href="index.php?view=_Carrera">Registrar carrera</a></li>
                    <li><a class="dropdown-item"  href="index.php?view=_jefedepto">Registrar jefe de departamento</a></li>
                    <li><a class="dropdown-item"  href="index.php?view=_PresidenteAcademia">Registrar presidente de academia</a></li>
                    <li><a class="dropdown-item"  href="index.php?view=_ProfesorSu">Registrar profesor</a></li>
                    <li> <a class="dropdown-item"  href="index.php?view=_Aula">Registrar aula</a></li>
                    <li> <a class="dropdown-item"  href="index.php?view=_Curso">Detectar Necesidades</a> </li>
                    <li> <a class="dropdown-item"  href="index.php?view=_Instructor">Instructores</a> </li>
                    <li> <a class="dropdown-item"  href="index.php?view=_Inscripciones">Inscripciones</a> </li>
                    <!--<li> <a class="dropdown-item"  href="index.php?view=_Asistencia">Asistencias</a> </li> -->
                    
                    
                    <!--<li> <a class="dropdown-item"  href="index.php?view=_FichaTecnica">Ficha Tecnica</a></li> -->
                    <!--<li> <a class="dropdown-item"  href="index.php?view=_Listas">Listas</a></li>-->
                    
                    
                    <!-- <li>  <a class="dropdown-item"  href="index.php?view=_Materia">Registrar materia</a></li> -->
                    
                    
                    
                    

                  
                        <!-- <li> <a class="dropdown-item"  href="#">Asignar jefe</a> </li>
-->




                   </ul>
             </li>
<?php

/*

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
           Profesor <span class="caret"></span></a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <li>  <a class="dropdown-item status_on" id="_Profesor" href="index.php?view=_Profesor">Mi perfil</a> </li>
    <!--  <li>  <a class="dropdown-item"  href="index.php?view=_Inscripciones">Inscripciones</a></li> -->
    <li>  <a class="dropdown-item"  href="index.php?view=_Curso">Cursos</a></li>
    <li>  <a class="dropdown-item"  href="index.php?view=_CursoProfesor">Mis cursos</a></li>
    <li>  <a class="dropdown-item"  href="index.php?view=_CursoProfesor">Mis Diplomas</a></li>
    <!-- <li>  <a class="dropdown-item"  href="index.php?view=_infoescuela">Info Escuela</a></li>  -->
    <!-- <li>  <a class="dropdown-item"  href="index.php?view=_diploma">Mis diplomas</a></li> -->

</ul>
</li>



*/

 ?>




            <!--<li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         Asistente<span class="caret"></span></a>

                 <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <li> <a class="dropdown-item"  href="index.php?view=_Asistencia">   Cargar asistencias</a></li>

                    <!-- <li> <a class="dropdown-item"  href="index.php?view=_Temario">Registrar temario</a></li> -->

                     <!-- <li><a class="dropdown-item"  href="index.php?view=_Grado">Registrar grado</a></li> 


                </ul> 
               </li>-->



          </ul>
            
           

          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         Opciones<span class="caret"></span></a>

                 <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                     <li><a class="dropdown-item"  href="views/report/CursoReport.php?type=1"> Concentrado de Cursos  </a></li>
                     <li><a class="dropdown-item"  href="views/report/AsistenciaEntradaReport.php?type=1"> Lista de asistencia Entrada</a></li>
                     <li><a class="dropdown-item"  href="views/report/AsistenciaSeguimientoReport.php?type=1"> Lista de asistencia Seguimiento</a></li>
                     <li><a class="dropdown-item"  href="views/report/AsistenciaSalidaReport.php?type=1"> Lista de asistencia Salida </a></li>
                      <li><a class="dropdown-item"  href="sec/login/logout.php">Cerrar sesion. </a></li>


                </ul>
               </li>
           
            
               <a class="navbar-brand" href="index.php"     style="padding: 4px;margin:auto">
                <img id="brand-2" src="assets/logo/23.png" >
            </a> 

        </div><!--/.nav-collapse -->
      </div>
    </nav>
 <br><br> <br> <br>