
<?php 

function rows()
{

         $list = mysql_query("SELECT * FROM ".$table);
        $i = 0;
        if(mysql_num_rows($list)>0){
                 while($row = mysql_fetch_array($list)){   ?>
                       <tr>
                       <?php $flag = true; foreach ($row as $col) { 
                                     //print_r($row);
                                    if($flag) { ?>
                                    <td> <?php echo $col; ?> </td>
    
                                     <?php $flag = false; } else { $flag=true;}    
                                     
                                    }  ?> 
                                    <td>
                                              <?php  
                                              
                                              //$modal = new Modal('btn1','Tabla',$contentView,'?');
                                              //$modal->getContent();?>
                                            
                                            </td>
                    </tr>
                  <?php  $i++; }  } else { }

                                
                            
}?>