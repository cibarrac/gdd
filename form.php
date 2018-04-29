<?php include 'listViews.php';
/**
 * En este metodo se debe poner la tabla y la vista a la que pertenece
 * esta funcion construye un formulario para registro ya incluyendole los parametros necesarios para el post
 */
function createView($view) {
   include 'listViews.php';
  ?>
<form class="form" action="post.php" method="post">
          <!-- Parametros start -->
          <input type="hidden" name="view"  value="<?php echo $view;?>">
          <input type="hidden"  name="table"  value="<?php echo $table[$view];?>">
          <input id="action" type="hidden"  name="action"  value="save">
          <!-- Parametros end -->
            <?php include "views/".$view."View.php";  ?>

        <div class="container">
          <button type="submit"  id="submit" data-original-title="Contactos"
          class="btn btn-success btn-fab btn-float" onclick="setAction('save')"> <i class="fa fa-save fa-2x"></i></button>
         <!--  <button type="submit" class="btn btn-warning" onclick="setAction('update')"> Editar</button>
         -->
        </div>
</form>
<?php } ?>