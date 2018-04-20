<?php
   $json = file_get_contents('c.json');
   $json_data = json_decode($json,true);

   foreach ($json_data as $key1 => $value1) {
?>

  <div class="col-md-6">
    <p><?php echo $json_data[$key1]['pregunta'] ?></p>
    <?php for ($i=1; $i < 6 ; $i++) {?>
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="optradio id="inlineRadio1" <?php echo $i; ?>"><?php echo $i; ?>
       </label>
    <?php } ?>
  </div>

    <?php
    }
?>
