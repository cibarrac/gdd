<?php 
class Modal
{
    public $id;
    public $tittle;
    public $content;
    public $btn_name;
    public function getContent($hiddenButton=false)
    {
        if (!$hiddenButton) {
            ?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $this->id; ?>">
          <?php echo $this->btn_name; ?>
        </button> <br>

        <?php
        } ?>

        <!-- Modal id="exampleModal" -->
        <div class="modal fade" id="<?php echo $this->id; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <?php echo $this->tittle; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"> 
                <?php  echo createView($this->content); ?>
              </div>
              <div class="modal-footer">
              <!-- 
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              
              -->
              </div>
            </div>
          </div>
        </div> 

        <?php
    }

    public function __construct($id, $title, $content, $btn_name)
    {
        $this->id = $id;
        $this->tittle = $title;
        $this->content = $content;
        $this->btn_name = $btn_name;
    }

    public function readFile($name)
    {
        include 'views/'.$name;
    }
}

/** <?php
* Ejemplo
* $modal = new Modal('btn1','Cargando Profesor','CatalogoView.php','Cargar Profesor');
  * $modal->getContent();
   *?>
 **/
 ?>
