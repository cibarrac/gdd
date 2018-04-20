<!-- http://wrapbootstrap.com/preview/WB0R5L90S-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">Diplomas</a>
<style media="screen">
  .status_on {background: yellow;}
</style>
<div class="collapse navbar-collapse " id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
     <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
   </li>

      <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             PANEL RAIZ
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" id="_Inscripciones" href="#">Inscripciones</a>
             <a class="dropdown-item" id="_Curso" href="#">Cursos</a>
             <a class="dropdown-item" id="_Instructor" href="#">Instructores</a>
             <a class="dropdown-item" id="_JefeDepartamento" href="#">Asignar jefe</a>
          </div>
         </li>

         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PANEL PROFESOR
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item status_on" id="_Profesor" href="#">Mi perfil</a>
                <a class="dropdown-item" id="_Login" href="#">Loguearse</a>
                <a class="dropdown-item" id="_Inscripciones" href="#">Inscripciones</a>
                <a class="dropdown-item" id="_Curso" href="#">Mis cursos</a>
                <a class="dropdown-item" id="_Encuesta" href="#">Encuesta de eficiencia</a>
                <a class="dropdown-item" id="_Diploma" href="#">Mis diplomas</a>
             </div>
            </li>



            <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   PANEL ASISTENTE
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" id="_CargarAsistencia" href="#">Cargar asistencias</a>
                    <a class="dropdown-item" id="_Profesor" href="#">Registrar profesor</a>
                    <a class="dropdown-item" id="_Materia" href="#">Registrar materia</a>
                    <a class="dropdown-item" id="_Departamento" href="#">Registrar departamento</a>
                    <a class="dropdown-item" id="_Temario" href="#">Registrar temario</a>
                    <a class="dropdown-item" id="_Carrera" href="#">Registrar carrera</a>
                    <a class="dropdown-item" id="_Grado" href="#">Registrar grado</a>
                    <a class="dropdown-item" id="_Aula" href="#">Registrar aula</a>
                </div>
               </li>


   <li class="nav-item" style="display:none">
     <a class="nav-link disabled" href="#">Disabled</a>
   </li>
 </ul>
 <form style="display:none" class="form-inline my-2 my-lg-0" >
   <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
 </form>
</div>
</nav>
