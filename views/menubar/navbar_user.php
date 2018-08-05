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

 <!-- Fixed navbar -->
 <nav class="navbar navbar-default  navbar-fixed-top" style="background-color: #0d47a1;">
      <div class="container">
        <div class="navbar-header">
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
                         Profesor <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>  <a class="dropdown-item status_on" id="_Profesor" href="index.php?view=_Profesor">Mi perfil</a> </li>
                  <li>  <a class="dropdown-item"  href="index.php?view=_InscripcionesUser">Inscripciones</a></li>
                  <li>  <a class="dropdown-item"  href="index.php?view=_Curso">Mis cursos</a></li>
                  <li>  <a class="dropdown-item"  href="#">Mis diplomas</a></li>

                  <li> <a class="dropdown-item"  href="index.php?view=_Encuesta">Encuesta de eficiencia</a></li>




             </ul>
            </li>






          </ul>

          <ul class="nav navbar-nav navbar-right">


            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         Opciones<span class="caret"></span></a>

                 <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <!-- <li><a class="dropdown-item"  href="report.php?type=1">Reportes </a></li>  -->
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
