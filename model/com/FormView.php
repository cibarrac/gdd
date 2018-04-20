<?php /**
 *
 */
class  FormView
{
  var $components = array();

  function __construct()
  {

  }
  function addInput($name,$value,$type)
  {
     $components = ['name' => $name,'value' => $value ,'type' => $type];
  }
  function display()
  {
   foreach ($components as $key => $value) {
           
   }
  }
}
 ?>
