<nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <a class="navbar-brand" href="#">Jefe de departamento</a>
 <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
     <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
   </li>

   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profesores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" id="_Profesor" href="#">Agregar</a>
          <a class="dropdown-item" id="_Curso" href="#">Baja</a>
          <a class="dropdown-item" id="_Materia" href="#">Consultar</a>
          <a class="dropdown-item" id="_Departamento" href="#">Editar informacion</a>
        </div>
      </li>

      <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Cursos
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" id="_Profesor" href="#">Agregar</a>
             <a class="dropdown-item" id="_Materia" href="#">Consultar</a>
             <a class="dropdown-item" id="_Departamento" href="#">Editar informacion</a>
           </div>
         </li>

         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Instructores
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" id="_Profesor" href="#">Agregar</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" id="_Profesor" href="#">Interno</a>
                      <a class="dropdown-item" id="_Materia" href="#">Externo</a>
                    </div>
                <a class="dropdown-item" id="_Materia" href="#">Consultar</a>
                <a class="dropdown-item" id="_Departamento" href="#">Editar informacion</a>
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
