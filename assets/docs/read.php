<?php
   $json = file_get_contents('c.json');
   $json_data = json_decode($json,true);

   foreach ($json_data as $key1 => $value1) {
?>

  <div class="col-md-6">
    <p><?php echo $json_data[$key1]['pregunta'] ?></p>
    


    <?php
    }
?>
