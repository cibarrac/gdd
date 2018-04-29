 
<style media="screen">
    .btn-float {
         z-index: 999; height: 50px; width: 50px;
         border-radius: 50%; margin-top: 100px; 
    }
    
</style>
<!-- <a href=”callto://nombredeusuario”>Llámame a skype!</a>
<a href=”mailto://miemail@dominio.com”>Mándame un email</a> -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        
      <div class="btn-group-sm hidden" id="mini-fab" >
          <a href="index.php?view=_Usuario" class="btn btn-default btn-fab btn-float"  
             data-toggle="tooltip" data-placement="right" data-original-title="Usuarios" title="" id="autre">
            <i class="fa fa-users fa-2x">

            </i>

          </a>
          <a href="#" class="btn btn-default btn-fab btn-float"  data-toggle="tooltip" data-placement="right"
             data-original-title="Contactos" title="" id="sms">
            <i class="fa fa-address-book fa-2x"> </i>
          </a>
          <a href="index.php?view=_Curso" class="btn btn-default btn-fab btn-float" 
          data-toggle="tooltip" data-placement="right" data-original-title="Cursos" title="" id="mail">
          <i class="fa fa-calendar fa-2x">

            </i>
           
          </a>
          
        </div>
        <div class="btn-group hidden-xs">
          <a href="javascript:void(0)" class=" btn btn-info btn-fab fa-fw margin-bottom btn-float"  id="main">
          <i class="fa fa-plus fa-2x">

            </i>
          </a>
        </div>
        
      </div>
    </div>
  </div>
